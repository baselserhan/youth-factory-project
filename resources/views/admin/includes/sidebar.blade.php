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
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>Products</span>
        </a>
        <div id="collapseTwo"
            class="collapse {{ request()->routeIs('admin.products.create') || request()->routeIs('admin.products.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.products.create') ? 'active' : '' }}"
                    href="{{ route('admin.products.create') }}">Add Product</a>
                <a class="collapse-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}"
                    href="{{ route('admin.products.index') }}">All Products</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-copyright"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory"
            class="collapse {{ request()->routeIs('admin.categories.create') || request()->routeIs('admin.categories.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.categories.create') ? 'active' : '' }}"
                    href="{{ route('admin.categories.create') }}">Add Category</a>
                <a class="collapse-item {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}"
                    href="{{ route('admin.categories.index') }}">All Categories</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true"
            aria-controls="collapsePost">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Posts</span>
        </a>
        <div id="collapsePost"
            class="collapse {{ request()->routeIs('admin.posts.create') || request()->routeIs('admin.posts.index') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.posts.create') ? 'active' : '' }}"
                    href="{{ route('admin.posts.create') }}">Add Post</a>
                <a class="collapse-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }}"
                    href="{{ route('admin.posts.index') }}">All Posts</a>
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
