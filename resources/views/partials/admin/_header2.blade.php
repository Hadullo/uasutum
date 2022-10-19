            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">


                        @if(Auth::user()->utype==='ADM')

                        <h4 class="page-title pull-left"><b>Admin Dashboard</b></h4>

                         @elseif(Auth::user()->utype==='ULO')
                          <h4 class="page-title pull-left"><b>UASU Official Dashboard</b></h4>

						 @else
						<h4 class="page-title pull-left"><b>UASU Member Dashboard</b></h4>
						 @endif




                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">


                        @auth

                            <div class="user-profile pull-right">

                         @if(Auth::user()->avatar)
                         <img src="/assets/admin/images/avatars/{{Auth::user()->avatar}}" class = "avatar user-thumb cropped_picture" alt="img">
                         @else
                        <img class="avatar user-thumb" src="{{ asset('assets/admin/images/profile/default.png') }}" alt="avatar">
                        @endif
                        <ul>

                        @if(Route::has ('login'))
                        @auth
                        @if(Auth::user()->utype==='ADM')

                        <div class="dropdown">
                        <button class="dropbtn"> <li class=""><a href="{{route('login')}}">({{ Auth::user()->name }})</a></li></button><i class="fa fa-angle-down"></i>

                        <div class="dropdown-content">

                            <a href="{{ route('registeredUsers') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Manage Users</a>


                            <a href="{{ route('editPwd') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Change Password</a>
                            <a href="{{ route('editProfile') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Update Profile</a>
                            <li><a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'>&nbsp;&nbsp;</i>Log Out</a></li>

                            <form id= "logout-form" method="POST" action="{{ route('logout') }}">


                             @csrf
                         </form>

                         @elseif(Auth::user()->utype==='ULO')

                         <div class="dropdown">
                            <button class="dropbtn"> <li class=""><a href="{{route('login')}}">({{ Auth::user()->name }})</a></li></button><i class="fa fa-angle-down"></i>

                            <div class="dropdown-content">

                                <a href="{{ route('editPwd')}}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Change Password</a>
                                <a href="{{ route('editProfile') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Update Profile</a>
                                <li><a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'>&nbsp;&nbsp;</i>Log Out</a></li>
                                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                                 @csrf
                             </form>

                          @else
                          <div class="dropdown">
                            <button class="dropbtn"> <li class=""><a href="{{route('login')}}">({{ Auth::user()->name }})</a></li></button><i class="fa fa-angle-down"></i>

                            <div class="dropdown-content">

                                <a href="{{ route('editPwd') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Change Password</a>
                                <a href="{{ route('editProfile') }}"><i class='fa fa-edit'></i>&nbsp;&nbsp;Update Profile</a>
                                <li><a href="{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'>&nbsp;&nbsp;</i>Log Out</a></li>
                                    <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                                 @csrf
                             </form>
                         @endif

                                </div>
                              </div>

                        @else
                              <li><a href="{{ route('login') }}">Log In</a></li>
                              <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endif

                          </ul>



                        </div>

                        @else
                        <div class="spacer"></div>
                        @endif


                    </div>
                </div>
            </div>
            <!-- page title area end -->
