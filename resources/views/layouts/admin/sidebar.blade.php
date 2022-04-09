<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="{{route('index')}}"><img class="img-fluid for-light" src="{{asset('images/favicon-32x32.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('images/favicon-32x32.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('index')}}"><img class="img-fluid" src="{{asset('images/favicon-32x32.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('index')}}"><img class="img-fluid" src="{{asset('images/favicon-32x32.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1">Dashboard </h6>
                     		<p class="lan-2"></p>
						</div>
					</li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'knowledgebase' ? 'active' : ''}}" href="{{ route('index') }}"><i class="icofont icofont-home"></i> </i><span> Home Page</span></a></li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == 'admin/press' ? 'active' : '' }}" href="#"><i class="icofont icofont-paper"></i></i><span> Press</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == 'press' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == 'admin/press' ? 'block' : 'none;' }};">
							<li><a href="{{route('categories')}}" class="{{ Route::currentRouteName()=='categories' ? 'active' : '' }}">News Categories</a></li>
							<li><a href="{{route('news')}}" class="{{ Route::currentRouteName()=='news' ? 'active' : '' }}">News</a></li>
							<li><a href="{{route('media')}}" class="{{ Route::currentRouteName()=='media' ? 'active' : '' }}">In Media</a></li>
							<li><a href="{{route('press-release.index')}}" class="{{ Route::currentRouteName()=='press-release.index' ? 'active' : '' }}">Press Release</a></li>
							<li><a href="{{route('photo-gallery.index')}}" class="{{ Route::currentRouteName()=='photo-gallery.index' ? 'active' : '' }}">Photo Albums</a></li>
							<li><a href="{{route('videos.index')}}" class="{{ Route::currentRouteName()=='videos.index' ? 'active' : '' }}">Video Albums</a></li>
						</ul>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == 'admin/bds' ? 'active' : '' }}" href="#"><i class="icofont icofont-ui-office"></i></i><span> BDS Section</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == 'bds' ? 'down' : 'right' }}"></i></div>
						</a>
                        <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == 'admin/bds' ? 'block' : 'none;' }};">
							<li><a href="{{route('case-studies')}}" class="{{ Route::currentRouteName()=='case-studies' ? 'active' : '' }}">Case Studies</a></li>
						</ul>
					</li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'annual-reports.index' ? 'active' : ''}}" href="{{ route('annual-reports.index') }}"><i class="icofont icofont-book-alt"></i></i><span> Annual Reports</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'careers' ? 'active' : ''}}" href="{{ route('careers') }}"><i class="icofont icofont-briefcase-alt-1"></i><span> Careers</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'management.index' ? 'active' : ''}}" href="{{ route('management.index') }}"><i class="icofont icofont-user"></i><span> Management</span></a></li>
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
