<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('/admin/users')}}">Users List</a></li>
										<li><a href="{{ route('addUser')}}">Add User</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('addcategory')}}">Add Category</a></li>
										<li><a href="{{ route('/admin/category')}}">Categories List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Cars <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('addcar')}}">Add Car</a></li>
										<li><a href="{{ route('/admin/car')}}">Cars List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{route ('addtestimonial')}}">Add Testimonials</a></li>
										<li><a href="{{ route('/admin/testimonial')}}">Edit Testimonials</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
									<li><a href="{{ route('admin.message')}}">Messages</a></li>
									</ul>
								</li>
							</ul>
						</div>

					</div>