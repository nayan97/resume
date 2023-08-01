<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ url('/')}}"><i class="fe fe-home"></i> <span>FrontEnd</span></a>
							</li>
							<li> 
								<a href="{{ route('admin.dashboard.page')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="{{ route('theme.index')}}"><i class="fe fe-user-plus"></i> <span>Themes</span></a>
							</li>
						
							<li> 
								<a href="{{ route('personal.index')}}"><i class="fe fe-user"></i> <span>Profile</span></a>
							</li>
							<li> 
								<a href="{{ route('education.index')}}"><i class="fe fe-book"></i> <span>Education</span></a>
							</li>
							<li> 
								<a href="{{ route('summery.index')}}""><i class="fe fe-star-o"></i> <span>Summery</span></a>
							</li>
							<li> 
								<a href="{{ route('hobby.index')}}""><i class="fe fe-star"></i> <span>Hobby</span></a>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Cource</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ route('skills.index')}}">Skills</a></li>
									<li><a href="{{ route('traning.index')}}">Cource</a></li>
								</ul>
							</li>

						</ul>
					</div>
                </div>
            </div>