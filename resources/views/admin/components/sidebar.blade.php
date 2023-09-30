
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item ">
        <a href="{{route('dashboard')}}" class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link {{ (request()->segment(2) == 'slidetitles') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Title Slide
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('slide.create')}}" class="nav-link {{ (request()->is('admin/slidetitles/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('slide.index')}}" class="nav-link {{ (request()->is('admin/slidetitles')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link {{ (request()->segment(2) == 'skills') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Skills
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('skills.create')}}" class="nav-link {{ (request()->is('admin/skills/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create Skills</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('skills.index')}}" class="nav-link {{ (request()->is('admin/skills')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists Skills</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link {{ (request()->segment(2) == 'subjects') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Langueges
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('subjects.create')}}" class="nav-link {{ (request()->is('admin/subjects/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create Langueges</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('subjects.index')}}" class="nav-link {{ (request()->is('admin/subjects')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists Langueges</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link {{ (request()->segment(2) == 'categories') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Projects Types
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('categories.create')}}" class="nav-link {{ (request()->is('admin/categories/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create Types</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('categories.index')}}" class="nav-link {{ (request()->is('admin/categories')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists Types</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link {{ (request()->segment(2) == 'projects') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Projects
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('projects.create')}}" class="nav-link {{ (request()->is('admin/projects/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create project</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('projects.index')}}" class="nav-link {{ (request()->is('admin/projects')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists project</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link  {{ (request()->segment(2) == 'abouts') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Abouts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('abouts.create')}}" class="nav-link {{ (request()->is('admin/abouts/create')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Create About</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('abouts.index')}}" class="nav-link {{ (request()->is('admin/abouts')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Lists About</p>
            </a>
          </li>
        </ul>
      </li>
          <li class="nav-item ">
            <a href="#" class="nav-link  {{ (request()->segment(2) == 'users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link {{ (request()->is('admin/users/create')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{ (request()->is('admin/users')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lists users</p>
                </a>
              </li>
            </ul>
          </li>
      </li>
  </li>
     
    </ul>
  </nav>