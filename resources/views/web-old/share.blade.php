<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{asset('public/post_images')}}/{{$post->image }}" />
<meta property="og:type" content="website" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:url" content="{{ route('share_post',$post->id) }}" />
<meta property="og:description" content="{!! $post->message !!}" />
<title>{{$post->title}}</title>
</head>
<body>

<script>
    window.location = "{{ route('blog_info',['id'=>$post->id,'slug'=>$post->slug]) }}";
</script>
</body>
</html>
