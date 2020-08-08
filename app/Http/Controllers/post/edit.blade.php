@extends('multiauth::layouts.master')

@section('content')
    <div class="container">
    @if(count($errors) > 0)

        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">

        <div class="card card-default">
            <div class="card-header">
                Update POST
            </div>
            <div class="card-body">
            <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" value="{{$post->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post description</label>
                        <input type="text" name="description" value="{{$post->description}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Contents</label>
                        <input type="text" name="content" value="{{$post->content}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" name="image" value="{{$post->image}}" class="form-control">
                    </div>

                    <button class="btn btn-primary">submit</button>
                    <a href="/posts" class="btn btn-danger btn-sm float-right">Back</a>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection