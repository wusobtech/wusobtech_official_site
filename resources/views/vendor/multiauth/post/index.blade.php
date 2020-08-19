@extends('multiauth::layouts.master')

@push('plugin-styles')
<link rel="stylesheet" href="{{asset('/assets/plugins/datatables-net/dataTables.bootstrap4.css')}}">
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/course">Course</a></li>
    {{--  <li class="breadcrumb-item active" aria-current="page">Data Table</li>  --}}
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
     <div class="card-header">
            <span class="float-right">
            <a href="/posts/create" class="btn btn-sm btn-success">Add new Post</a>
            </span>
      </div>
      <div class="card-body">
        <h6 class="card-title">Posts</h6>
        <p class="card-description">List of all Student and their courses.</p>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
              <tr>
                <td><img src="{{asset($post->image)}}" /></td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                 <a class="btn btn-info btn-sm float-left mr-3" href="{{route('posts.edit',$post->id)}}">edit</a> 
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">delete</button>
                    </form> 
                    
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{asset('/assets/plugins/datatables-net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js')}}"></script>
@endpush

@push('custom-scripts')
<script src="{{asset('/assets/js/data-table.js')}}"></script>
@endpush