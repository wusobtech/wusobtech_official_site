<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Subscriber;
use App\BlogComments;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\NewsLetter;
use Illuminate\Support\Facades\Mail;


class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function aboutUs(){
        return view('web.about_us');
    }

    public function contactUs(){
        return view('web.contact_us');
    }

    public function portfolio(){
        return view('web.our_portfolio');
    }



    // public function sendContact(Request $request){
    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         $this->validate($request, [
    //             'name'     =>  'required',
    //             'email'  =>  'required|email',
    //             'phone'  =>  'required',
    //             'subject'  =>  'required',
    //             'message' =>  'required'
    //         ]);

    //         $data = array(
    //             "name"      =>  $request->name,
    //             "email"   =>   $request->email,
    //             "phone"   =>   $request->phone,
    //             "subject"   =>   $request->subject,
    //             "message"   =>   $request->message
    //         );

    //         dd($data);

    //         $email = 'contact@wusobtech.com';

    //         // Send An Email
    //         Mail::to($email)->send(new ContactFormMail($data));

    //         toastr()->success('Mail Sent Successfully!.');
    //         return redirect()->back();
    //     }
    // }

    public function submitContact(){
        //dd(request()->all());
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // dd($data);


        $email = 'contact@wusobtech.com';

            // Send An Email
        Mail::to($email)->send(new ContactFormMail($data));
        alert()->success('Your Mail has been sent Succesfully!', 'We will Get back to you shortly!');
        return redirect()->back();

    }

    public function services(){
        return view('web.services');
    }

    public function blogsView(){
        $posts = Blog::orderby('created_at' , 'desc')->paginate(20);
        $mostpopular = Blog::where('status',1)->orderby('views','desc')->get();
        return view('web.blogs' , compact('posts','mostpopular'));
    }

    public function blog_info($id){
        $post = Blog::findorfail($id);
        $post['social_links'] = $this->post_share_links($post);
        $comments = BlogComments::where('blog_id',$post->id)->where('status',1)->orderby('id','desc')->get();
        return view('web.blog_info' , compact('post','comments'));
    }

    public function share_post($id)
    {
        $post = Post::findorfail($id);
        return view('web.share',compact('post'));
    }

    public function make_comment(Request $request){
        //dd($request->all());
        $data = $request->validate([
            'blog_id' => 'required',
            'name' => 'required|string',
            'email' => 'required|string',
            'body' => 'required|string',
        ]);
        $data['status'] = 1;
        $comment = BlogComments::create($data);
        $comment['post_date'] = date('d/m/y',strtotime($comment->created_at));
        $comment['name'] = $comment->name;
        $comment['email'] = $comment->email;
        $comment['body'] = $comment->body;
       return response()->json($comment);
    }

    function post_share_links($post){
        $title = $post->title;
        $url = route('blog_info',['id'=>$post->id,'slug'=>$post->slug]);
        $message = $post->message;
        return [

            [
                'type' => 'Facebook',
                'label' => "Like",
                'logo' => "fa fa-facebook-f",
                'shareUrl' => "https://facebook.com/sharer/sharer.php?u=".$url."",
                'countUrl' => "https://graph.facebook.com/?id={url}",
                'shareIn'=> "_blank",
                'color' => '#3b5998',
            ],

            [
                'type' => 'Twitter',
                'label' => "Tweet",
                'logo' => "fa fa-twitter",
                'shareUrl' => "https://twitter.com/share?url=".$url."&text=".$title."&via=twitter&hashtags=wusobtech",
                'countUrl' => "",
                'shareIn'=> "_blank",
                'color' => '#3490F3',
            ],

            // [
            //     'type' => 'Instagram',
            //     'label'=> "Instagram",
            //     'logo'=> "fa fa-instagram",
            //     'shareUrl'=> "https://www.instagram.com/share?url=".$url."",
            //     'countUrl'=> "",
            //     'shareIn'=> "_blank",
            //     'color' => '#00aced',
            //  ],

            [
                'type' => 'LinkedIn',
                'label' => "Share",
                'logo' => "fa fa-linkedin",
                'shareUrl'  => "https://www.linkedin.com/shareArticle?mini=true&url=".$url."",
                'countUrl' => "https://www.linkedin.com/countserv/count/share?format=jsonp&url=".$url."&callback=?",
                'shareIn'=> "_blank",
                'color' => '#007bb6',
            ],

            [
                'type' => 'Whatsapp',
                'label' => "WhatsApp",
                'logo' => "fa fa-whatsapp",
                'shareUrl' => "whatsapp://send?text=".$url." ".$title."",
                'countUrl' => "",
                'shareIn'  => "self",
                'color' => 'green',
            ],

        ];
    }

    public function subscribe(Request $request){
        $data = $request->validate([
            'email' => 'required|email'
        ]);

        $check = Subscriber::where('email',$data['email'])->count();

        if($check > 0){
            return response()->json(['msg' => 'You already subscribed.Thanks!']);
        }
        Subscriber::create($data);
        Mail::to($data['email'])->send(new NewsLetter($data));
        return response()->json(['msg' => 'Subscribed successfully!']);
    }

    public function unsubscribe($email){
        $find_email = Subscriber::where('email',$email)->first();
        if(empty($find_email)){
            $msg = 'Sorry, your email wasn`t found on our list! ';
        }
       $find_email->delete();
       $msg = 'You have successfully unsubscribed from our mailing list!';
   }
}
