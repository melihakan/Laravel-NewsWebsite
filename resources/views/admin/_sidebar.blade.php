<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ asset('assets')}}/admin/assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        @auth
                            <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_category')}}" aria-expanded="false">Categoriler</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_news')}}" aria-expanded="false">News</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_setting')}}" aria-expanded="false">Settings</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_message')}}" aria-expanded="false">Contact Message</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_review')}}" aria-expanded="false">Reviews</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_faq')}}" aria-expanded="false">Faq</a></li>
                <li> <a class=" waves-effect waves-dark" href="{{route('admin_users')}}" aria-expanded="false">Users</a></li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
