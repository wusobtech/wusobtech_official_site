<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\Post\CreatePostRequest;
use App\Post;
class PostsController extends Controller
{


    public function __construct()
    {
       $this->middleware('role:super');
        //Do your magic here
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // alert()->info('InfoAlert','message');
        // toast('success toast','success');
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        //create new post model instance
        $posts = new Post;
        //store the image
        $post_image = $request->image;
        $post_image_new_name = time() . $post_image->getClientOriginalName();
        $post_image->move('uploads/posts', $post_image_new_name);
        //get posts details and store dem
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->content = $request->content;
        $posts->image = 'uploads/posts/' . $post_image_new_name;
        //then save it to the db
        $posts->save();
        //then redirect to the index page with toast message
         return redirect('posts')->with('toast_success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Post::findOrFail($id);
       return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::findOrFail($id);

        if($request->hasFile('image'))
        {
            $post_image = $request->image;

            $post_image_new_name = time() . $post_image->getClientOriginalName();

            $post_image->move('uploads/posts', $post_image_new_name);

            $post->image = 'uploads/posts/' . $post_image_new_name;

            $post->save();
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        //then save it to the db
        $post->save();
        return redirect('posts')->with('toast_success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);

        if(file_exists($post->image))
        {
            unlink($post->image);
        }

        $post->delete();
            
        // Session::flash('success', 'Postt deleted.');

        return redirect()->back();
    }
}
