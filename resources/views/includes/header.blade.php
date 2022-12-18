 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->profile_photo_path }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      @php
      $route = Route::current()->getName();
      @endphp

      @php
       $posts = App\Models\Post::latest()->get();
       $categories = App\Models\Category::latest()->get();
       $tags = App\Models\Tag::latest()->get();
       $users = App\Models\User::latest()->get();
      @endphp

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('dashboard')}}" class="nav-link {{ ($route == 'dashboard')? 'active':'' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link 
              {{ ($route == 'category.create')? 'active':'' }}
              {{ ($route == 'index.category')? 'active':'' }}
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Category
               <i class="fa fas-angle-left right"></i>
                <span class="badge badge-info right">{{$categories->count() }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               
        
              <li class="nav-item">
                <a href="{{ route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('index.category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
               
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
            
            {{ ($route == 'create.post')? 'active':'' }}
              {{ ($route == 'index.post')? 'active':'' }}
              {{ ($route == 'trash.post')? 'active':'' }}
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Post
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{ $posts->count() }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item ">
                <a href="{{ route('create.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('index.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('trash.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trashed Post</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
            {{ ($route == 'create.tag')? 'active':'' }}
              {{ ($route == 'index.tag')? 'active':'' }}
         
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Tag
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{ $tags->count() }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
        
              <li class="nav-item">
                <a href="{{ route('create.tag') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Tag</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('index.tag') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Tag</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
              {{ ($route == 'user.index')? 'active':'' }}
              {{ ($route == 'user.create')? 'active':'' }}
            
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               User
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{ $users->count() }}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
        
              <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
        
              <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
            
            {{ ($route == 'my.profile')? 'active':'' }}
              {{ ($route == 'change.profile')? 'active':'' }}
              {{ ($route == 'setting.index')? 'active':'' }}
            
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
            General
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <li class="nav-item">
                <a href="{{ route('my.profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('change.profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setting.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All setting</p>
                </a>
              </li>
             
            </ul>
          </li>
         </ul>
      </nav>
       <!-- /.sidebar-menu --> 