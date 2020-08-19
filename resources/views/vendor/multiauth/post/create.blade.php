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
        <div class="col-md-10 col-md-offset-2">

        <div class="card card-default">
            <div class="card-header">
                Add POST
            </div>
            <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Contents</label> 
                        <textarea type="text" class="form-control" name="content" id="tinymceExample" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" name="image" class="form-control">
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

@push('plugin-scripts')
<script src="{{asset('/assets/plugins/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('custom-scripts')
<script src="{{asset('/assets/js/tinymce.js')}}"></script>
@endpush