<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      SM<span>S</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">{{ ucfirst(config('multiauth.prefix')) }}</li>
      <li class="nav-item">
        <a href="{{ url('/admin/show') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a><li class="nav-item nav-category">web apps</li>
        </li>
         <li class="nav-item">
              <a href="{{ url('admin/roles') }}" class="nav-link">Roles</a>
         </li>
         <li class="nav-item nav-category">courses</li>
         <li class="nav-item">
          <a href="/course" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">index</span>
          </a>
         </li>
         <li class="nav-item">
          <a href="/course/create" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Add New Course</span>
          </a>
         </li>
         <li class="nav-item nav-category">Posts</li>
         <li class="nav-item">
          <a href="/posts" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">index</span>
          </a>
         </li>
         <li class="nav-item">
          <a href="{{route('posts.create')}}" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Add New Post</span>
          </a>
         </li>
    </ul>
  </div>
</nav>
