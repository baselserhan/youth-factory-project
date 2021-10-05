<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('dashboard.Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>{{ __('dashboard.Products') }}</span>
        </a>
        <div id="collapseTwo"
            class="collapse {{ request()->routeIs('admin.products.create') || request()->routeIs('admin.products.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.products.create') ? 'active' : '' }}"
                    href="{{ route('admin.products.create') }}">{{ __('dashboard.Add Product') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}"
                    href="{{ route('admin.products.index') }}">{{ __('dashboard.View All Products') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-copyright"></i>
            <span>{{ __('dashboard.Categories') }}</span>
        </a>
        <div id="collapseCategory"
            class="collapse {{ request()->routeIs('admin.categories.create') || request()->routeIs('admin.categories.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.categories.create') ? 'active' : '' }}"
                    href="{{ route('admin.categories.create') }}">{{ __('dashboard.Add Category') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}"
                    href="{{ route('admin.categories.index') }}">{{ __('dashboard.View All Categories') }}</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true"
            aria-controls="collapsePost">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>{{ __('dashboard.Posts') }}</span>
        </a>
        <div id="collapsePost"
            class="collapse {{ request()->routeIs('admin.posts.create') || request()->routeIs('admin.posts.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.posts.create') ? 'active' : '' }}"
                    href="{{ route('admin.posts.create') }}">{{ __('dashboard.Add Post') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }}"
                    href="{{ route('admin.posts.index') }}">{{ __('dashboard.View All Posts') }}</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseImage" aria-expanded="true"
            aria-controls="collapseImage">
            <i class="fas fa-images"></i>
            <span>{{ __('dashboard.Gallery') }}</span>
        </a>
        <div id="collapseImage"
            class="collapse {{ request()->routeIs('admin.galleries.create') || request()->routeIs('admin.galleries.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.galleries.create') ? 'active' : '' }}"
                    href="{{ route('admin.galleries.create') }}">{{ __('dashboard.Add Gallery') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.galleries.index') ? 'active' : '' }}"
                    href="{{ route('admin.galleries.index') }}">{{ __('dashboard.View All Gallery') }}</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true"
            aria-controls="collapseSlider">
            <i class="fab fa-slideshare"></i>
            <span>{{ __('dashboard.Slider') }}</span>
        </a>
        <div id="collapseSlider"
            class="collapse {{ request()->routeIs('admin.sliders.create') || request()->routeIs('admin.sliders.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.sliders.create') ? 'active' : '' }}"
                    href="{{ route('admin.sliders.create') }}">{{ __('dashboard.Add Slider') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.sliders.index') ? 'active' : '' }}"
                    href="{{ route('admin.sliders.index') }}">{{ __('dashboard.View All Sliders') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonial"
            aria-expanded="true" aria-controls="collapseTestimonial">
            <i class="fas fa-question-circle"></i>
            <span>{{ __('dashboard.Testimonial') }}</span>
        </a>
        <div id="collapseTestimonial"
            class="collapse {{ request()->routeIs('admin.testimonials.create') || request()->routeIs('admin.testimonials.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.testimonials.create') ? 'active' : '' }}"
                    href="{{ route('admin.testimonials.create') }}">{{ __('dashboard.Add Testimonial') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.testimonials.index') ? 'active' : '' }}"
                    href="{{ route('admin.testimonials.index') }}">{{ __('dashboard.View All Testimonials') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam" aria-expanded="true"
            aria-controls="collapseTeam">
            <i class="fas fa-user-friends"></i>
            <span>{{ __('dashboard.Teams') }}</span>
        </a>
        <div id="collapseTeam"
            class="collapse {{ request()->routeIs('admin.teams.create') || request()->routeIs('admin.teams.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.teams.create') ? 'active' : '' }}"
                    href="{{ route('admin.teams.create') }}">{{ __('dashboard.Add Team') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.teams.index') ? 'active' : '' }}"
                    href="{{ route('admin.teams.index') }}">{{ __('dashboard.View All Teams') }}</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
