
    <!-- sidebar menu area start -->

    @if(Route::has ('login'))
    @auth
    @if(Auth::user()->utype==='ADM')




        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href=""><img src="{{ asset('assets/admin/images/icon/logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">


                            <li>
                                <a href="{{ route('usercrud.index') }}" aria-expanded="true"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a>

                            </li>

                            <li>
                                <a href="{{ route('permissions.index') }}" aria-expanded="true"><i class="fa fa-users" aria-hidden="true"></i><span>Permissions</span></a>

                            </li>

                            <li>
                                <a href="{{ route('roles.index') }}" aria-expanded="true"><i class="fa fa-users" aria-hidden="true"></i><span>Roles</span></a>

                            </li>

							  <li>
                                <a href= "{{ route('news.index') }}" aria-expanded="true"><i class="fa fa-info-circle" aria-hidden="true"></i><span>News Desk</span></a>

                            </li>

							<li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span></a>

                            </li>

							<li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-question"></i></i><span>Enquiries</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    @elseif(Auth::user()->utype==='ULO')

    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href=""><img src="{{ asset('assets/admin/images/icon/logo.png') }}" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">


                        <li>
                            <a href="" aria-expanded="true"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a>

                        </li>

                          <li>
                            <a href= "{{ route('news.index') }}" aria-expanded="true"><i class="fa fa-info-circle" aria-hidden="true"></i><span>News Desk</span></a>

                        </li>

                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-file" aria-hidden="true"></i><span>Reports</span></a>

                        </li>

                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-question"></i></i><span>Enquiries</span></a>

                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>


    @elseif(Auth::user()->utype==='USR')

        <div class="sidebar-menu2">
            <div class="sidebar-header2">

                <div class="side-bar-logo">
                    <a href="index.html"><span class = "img-under"><img src="{{ asset('assets/admin/images/icon/mandate.png') }}" alt="logo"></span></a>
                </div>

            </div>

            <div class="main-menu">
                <div class="menu-inner2">
                    <div class = "menu-inner-bg">



                    <div class = "mpf">
                        <div class="flex-container">
                            <div>

                              </div>
                            <div><div class = "memeber-details">
                                <p>The UASU TUM Chapter at the Technical University of Mombasa  is a labour union that
                                    represents all the academic staff at  TUM.</p>

                                    <p>In line with the overall mandate, the Union has been founded upon principles of social justice, labour democracy and democratic action and is dedicated to the achievement of greater unity among its members.</p>
                                    <p> This is for the purpose of improving their terms and conditions of service, standards
                                         of living, social responsibility and empowerment, bringing fairness and dignity to
                                         the workplace and ensuring academic freedom and social equity at TUM</p>.
                            </div></div>

                          </div>
                    </div>


                </div>
            </div>
            </div>
        </div>

        @endif


        @else

        <div class="sidebar-menu2">
            <div class="sidebar-header2">

                <div class="side-bar-logo">
                    <a href="index.html"><span class = "img-under"><img src="{{ asset('assets/admin/images/icon/reg-users.png') }}" alt="logo"></span></a>
                </div>

            </div>

            <div class="main-menu">
                <div class="menu-inner2">
                    <div class = "menu-inner-bg">



                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details">
                                <p class = "info">Welcome to Universities Academic Staff Union (UASU) at the Technical University of Mombasa. We are is a labour union that
                                    represents all the academic staff at the University of Nairobi.</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>


                </div>
            </div>
            </div>
        </div>


    @endif
    @endif



        <!-- sidebar menu area end -->



