<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{asset('admin/assets/images/background/user-info.jpg) no-repeat;')}}">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('admin/assets/images/users/3.jpg')}}"  alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" role="button" aria-haspopup="true" aria-expanded="true">Admin</a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/dashboard">Home</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-camera-burst"></i><span class="hide-menu">Slider</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/sliders">All Slider</a></li>
                        <li><a href="/admin/sliders/create">Add Slider</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-buffer"></i><span class="hide-menu">Qurban</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/qurbans">All Qurban</a></li>
                        <li><a href="/admin/qurbans/create">Add Qurban</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu">Payment</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/payments">All Payment</a></li>
                        <li><a href="/admin/payments/create">Add Payment</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>