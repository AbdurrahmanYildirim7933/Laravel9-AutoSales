<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('assets')}}/admin/images/faces/face5.jpg" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{ Auth::user()->name }}
                    </p>
                    <a href="/logoutuser" class="designation">
                        LOGOUT
                    </a>
                </div>
            </div>
        <li class="nav-item">
            <a href="/admin" class="nav-link" ><i class=" fas fa-home menu-icon text-blue-800"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="fas fa-box-open text-blue menu-icon x"></i>
                <span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">New Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Accepted Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Shipping Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Completed Orders</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="/admin/category" class="nav-link" ><i class="menu-icon fas fa-th text-gray-50"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/car" class="nav-link" ><i class="fas fa-car menu-icon text-black"></i>
                <span class="menu-title">Cars</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/comment" class="nav-link" ><i class="nav-icon fas fa-comments menu-icon text-black"></i>
                <span class="menu-title">Comments</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.faq.index')}}" class="nav-link" ><i class="nav-icon fas fa-question menu-icon"></i>
                <span class="menu-title">FAQ</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.message.index')}}" class="nav-link" ><i class="fas fa-envelope menu-icon"></i>
                <span class="menu-title">Messages</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/user" class="nav-link" ><i class="nav-icon fas fa-user menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/social" class="nav-link" ><i class="nav-icon fas fa-location-arrow menu-icon"></i>
                <span class="menu-title">Social</span>
            </a>
        </li>

        <li class="navbar-header fas fa-life-saver menu-icon">LABELS</li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/setting">
                <i class="nav-icon fas fa-cogs menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->
