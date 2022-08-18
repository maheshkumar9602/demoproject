<style>
    .app-sidebar:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 50px;
    display: block;
}
</style>

<aside class="app-sidebar">
    <div class="side-header">
        
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ asset('/uploads/profile/default.png')}}" alt="user-img" class="avatar-xl rounded-circle">
            </div>
            <div class="user-info">
                <h6 class=" mb-0 text-dark">{{Auth::guard('admin')->user()->name }}</h6>
                <span class="text-muted app-sidebar__user-name text-sm"></span>
            </div>
        </div>
    </div>
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
          
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Home">
                <a class="nav-link text-center m-2" href="{{ route('admin.dashboard') }}">
                    <i class="fe fe-home"></i>
                </a>
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                <a class="nav-link text-center m-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fe fe-power"></i>
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item" href="{{ route('admin.dashboard') }}"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>
        </li>

   
	   <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-picture-o"></i><span class="side-menu__label">Company</span> <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
        
                <li>
                    <a href="{{ route('admin.company-list') }}" class="slide-item">Company List<a>
                </li>
            
        
                <li>
                    <a href="{{ route('admin.company-create') }}" class="slide-item" style="position: relative;">Create Company<a>
                </li>
            
            </ul>
        </li>


        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-picture-o"></i><span class="side-menu__label">Employees</span> <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
        
                <li>
                    <a href="{{ route('admin.employees-list') }}" class="slide-item">Employees List<a>
                </li>
            
        
                <li>
                    <a href="{{ route('admin.employees-create') }}" class="slide-item" style="position: relative;">Create Employees<a>
                </li>
            
            </ul>
        </li>
        
            
        </ul>
    </li>
    
    </ul>



</aside>

