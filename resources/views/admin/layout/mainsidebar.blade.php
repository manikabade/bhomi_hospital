
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
{{--        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">User INfo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--            <div class="image">--}}
{{--                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
            <div class="info">
                <a href="#" class="d-block"> Bhomi Hospital
                    </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{request()->is('dashboard*')?'menu-open':''}}">
                        <a href="{{route('admin.home')}}" class="nav-link {{request()->is('home*')?'active':''}}">
                        <i class="fas fa-desktop"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Web Content</a>
                    </div>
                </div>

                <li class="nav-item {{request()->is('news*')?'menu-open':''}}">
                    <a href="{{route('admin.news.index')}}" class="nav-link {{request()->is('news*')?'active':''}}">
                        <i class="fas fa-book-open"></i>
                        <p>
                           News
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('slider*')?'menu-open':''}}">
                    <a href="{{route('admin.slider.index')}}" class="nav-link {{request()->is('slider*')?'active':''}}">
                        <i class="fas fa-images"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('aboutUs*')?'menu-open':''}}">
                    <a href="{{route('admin.aboutUs.index')}}" class="nav-link {{request()->is('aboutUs*')?'active':''}}">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                           AboutUs
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('siteSetting*')?'menu-open':''}}">
                    <a href="{{route('admin.siteSetting')}}" class="nav-link {{request()->is('siteSetting*')?'active':''}}">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                           SiteSetting
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('scheduleManagement*')?'menu-open':''}}">
                    <a href="{{route('admin.scheduleManagement.index')}}" class="nav-link {{request()->is('scheduleManagement*')?'active':''}}">
                        {{--                        <i class="fas fa-phone-volume"></i>--}}
                        <i class="far fa-calendar-alt"></i>
                        <p>
                            Schedule Management
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('appointment*')?'menu-open':''}}">
                    <a href="{{route('admin.appointment.index')}}" class="nav-link {{request()->is('appointment*')?'active':''}}">
{{--                        <i class="fas fa-phone-volume"></i>--}}
                        <i class="far fa-calendar-alt"></i>
                        <p>
                           Appointment
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('specialist*')?'menu-open':''}}">
                    <a href="{{route('admin.specialist.index')}}" class="nav-link {{request()->is('specialist*')?'active':''}}">
                        <i class="	fas fa-stethoscope"></i>
                        <p>
                            Specialist
                        </p>
                    </a>
                </li>


                <li class="nav-item {{request()->is('doctor*')?'menu-open':''}}">
                    <a href="{{route('admin.doctor.index')}}" class="nav-link {{request()->is('doctor*')?'active':''}}">
                        <i class="fas fa-user-tie"></i>
                        <p>
                           Doctor
                        </p>
                    </a>
                </li>


                <li class="nav-item {{request()->is('designation*')?'menu-open':''}}">
                    <a href="{{route('admin.designation.index')}}" class="nav-link {{request()->is('designation*')?'active':''}}">
                        <i class="fas fa-trophy nav-icon"></i>
                        <p>
                            Designation
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('generalLabtest*')?'menu-open':''}}">
                    <a href="{{route('admin.generalLabtest.index')}}" class="nav-link {{request()->is('generalLabtest*')?'active':''}}">
                        <i class="fas fa-prescription"></i>
                        <p>
                            General Lab Test
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('medicalReport*')?'menu-open':''}}">
                    <a href="{{route('admin.medicalReport.index')}}" class="nav-link {{request()->is('medicalReport*')?'active':''}}">
                        <i class="fas fa-file-medical"></i>
                        <p>
                            Medical Report
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('feedback*')?'menu-open':''}}">
                    <a href="{{route('admin.feedback.index')}}" class="nav-link {{request()->is('feedback*')?'active':''}}">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                          Feedback
                        </p>
                    </a>
                </li>
                <li class="nav-item {{request()->is('ambulance*')?'menu-open':''}}">
                    <a href="{{route('admin.ambulance.index')}}" class="nav-link {{request()->is('ambulance*')?'active':''}}">
                        <i class="fas fa-ambulance"></i>
                        <p>
                           Ambulance
                        </p>
                    </a>
                </li>

                <li class="nav-item {{request()->is('logout*')?'menu-open':''}}">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--                    <div class="info">--}}
{{--                        <a href="#" class="d-block"></a>--}}
{{--                    </div>--}}
                </div>


{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" href="{{route('logout')}}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                       document.getElementById('logout-form').submit();">--}}
{{--                        <i class="fas fa-arrow-alt-circle-right "></i>--}}
{{--                        <p>Logout</p>--}}
{{--                    </a>--}}
{{--                    <form id="logout-form" action="{{route('logout')}}"method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



