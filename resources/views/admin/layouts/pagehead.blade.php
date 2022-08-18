			<!-- main-header -->
			<div class="main-header  side-header">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="#"><img src="{{ asset('/public/assets/img/brand/logo-white.png')}}" class="logo-1"></a>
							<a href="#"><img src="{{ asset('/public/assets/img/brand/logo.png')}}" class="logo-11"></a>
							<a href="#"><img src="{{ asset('/public/assets/img/brand/favicon-white.png')}}" class="logo-2"></a>
							<a href="#"><img src="{{ asset('/public/assets/img/brand/favicon.png')}}" class="logo-12"></a>
						</div>
						<ul class="header-megamenu-dropdown  nav">
							<li class="nav-item">
								<div class="btn-group dropdown">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" type="button"><span><i class="fe fe-settings"></i> Settings </span></button>
									<div  class="dropdown-menu" >
										<div class="dropdown-menu-header header-img p-3">
											<div class="drop-menu-inner">
												<div class="header-content text-left d-flex">
												    <div class="text-white">
														<h5 class="menu-header-title">Setting</h5>
														<h6 class="menu-header-subtitle mb-0">Overview of theme</h6>
													</div>
													<div class="my-auto ml-auto">
														<span class="badge badge-pill badge-warning float-right">View all</span>
													</div>
												</div>
											</div>
										</div>
										<div class="setting-scroll">
											<div>
												<div class="setting-menu ">
													<a  class="dropdown-item" href="#"><i class="mdi mdi-account-outline tx-16 mr-2 mt-1"></i>Profile</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-account-box-outline tx-16 mr-2"></i>Contacts</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-account-location tx-16 mr-2"></i>Accounts</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><i class="typcn typcn-briefcase tx-16 mr-2"></i>About us</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-application tx-16 mr-2"></i>Getting start</a>
												</div>
											</div>
										</div>
										<ul class="setting-menu-footer flex-column pl-0">
											<li class="divider mb-0 pb-0 "></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="main-header-right">
						{{--<div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="fe fe-search"></i>
										</button>
									</span>
								</div>
							</form>
						</div>--}}
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
							</div>
							<div class="dropdown  nav-item main-header-message ">
								<a class="new nav-link" href="#" ><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary-gradient text-left d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
										</div>
										<div class="my-auto ml-auto">
											<a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
										</div>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-image-src="{{ asset('assets/img/faces/3.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>

											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Paul Molive</h5>
													<p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="{{ asset('assets/img/faces/2.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Sahar Dary</h5>
													<p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
												</div>
												<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="{{ asset('assets/img/faces/9.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Khadija Mehr</h5>
													<p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
												</div>
												<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="{{ asset('assets/img/faces/12.jpg')}}">
												<span class="avatar-status bg-danger"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Barney Cull</h5>
													<p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
												</div>
												<p class="mb-0 desc">Here are some products ...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="{{ asset('assets/img/faces/5.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">{{Auth::guard('admin')->user()->name}}</h5>
													<p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="#">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary-gradient text-left d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
										</div>
										<div class="my-auto ml-auto">
											<a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
										</div>
									</div>
									<div class="main-notification-list Notification-scroll">
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-success-transparent">
												<i class="la la-shopping-basket text-success"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<div class="notification-subtext">1 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-danger-transparent">
												<i class="la la-user-check text-danger"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">22 verified registrations</h5>
												<div class="notification-subtext">2 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-primary-transparent">
												<i class="la la-check-circle text-primary"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Project has been approved</h5>
												<div class="notification-subtext">4 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-pink-transparent">
												<i class="la la-file-alt text-pink"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New files available</h5>
												<div class="notification-subtext">10 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-warning-transparent">
												<i class="la la-envelope-open text-warning"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New review received</h5>
												<div class="notification-subtext">1 day ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3" href="#">
											<div class="notifyimg bg-purple-transparent">
												<i class="la la-gem text-purple"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Updates Available</h5>
												<div class="notification-subtext">2 days ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="#">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">

								<a class="profile-user d-flex" href=""><img src="{{asset('assets/img/faces/6.jpg')}}" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

								<div class="dropdown-menu">
									<div class="main-header-profile header-img">
										<div class="main-img-user">
											<img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
										<h6>{{Auth::guard('admin')->user()->name }}</h6>
										<span>Super Admin</span>

									</div>
									<a class="dropdown-item" href="#"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"><i class="far fa-clock"></i> Activity Logs</a>
									<a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Account Settings</a>
									<a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout').submit();" href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                                      <form action="{{route('logout')}}" id="logout" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="1" />
                                    </form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->
