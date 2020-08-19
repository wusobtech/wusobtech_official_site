@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Wusob</a></li>
                        <li class="breadcrumb-item active">Blog Posts</li>
                    </ol>
                </div>
                <h5 class="page-title">Blog Posts</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">View Created Blogs</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Views</th>
                                <th>Likes</th>
                                <th>Post Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{!! $post->description !!}</td>
                                    <td>
                                        @if (!empty($post->image))
                                        <a href="{{ asset('post_images/'.$post->image) }}" target="_blank" class="btn btn-primary btn-xs">View</a>
                                        @endif
                                    </td>
                                    <td>{{$post->getStatus() }}</td>
                                    <td>{{$post->views}}</td>
                                    <td>{{$post->likes}}</td>
                                    <td>{{date('D , d M Y',strtotime($post->created_at)) }}</td>
                                    <div class="fr">
                                        <td class="center">
                                            <form action="{{ route('blog.posts.destroy' , $post)}}" method="post">@csrf @method('delete')
                                                <a href="{{ route('blog.posts.edit' , $post)}}" class="btn btn-primary btn-sm"><i class="ti-pencil"></i></a>
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="ti-trash"></i></button>
                                            </form>
                                        </td>
                                    </div>
                                </tr>
                                @endforeach
                                {{ $posts->links() }}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->
    <script>
        $('#summernote').summernote({
            placeholder: 'Enter Blog Description',
            tabsize: 2,
            height: 120,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
          });
    </script>
@endsection
