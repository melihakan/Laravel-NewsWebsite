<div class="container">
    <h4 class="widget_title">User Panel</h4>
    <div class="card" style="width: 200px">
        <div class="card-body">
            <aside class="single_sidebar_widget post_category_widget">

                <ul class="list cat-list">
                    <li>
                        <a href="{{route('myprofile')}}" class="d-flex">
                            <p>My Profile</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('myreviews')}}" class="d-flex">
                            <p>My Reviews</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user_news')}}" class="d-flex">
                            <p>My News</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="d-flex">
                            <p>Logout</p>
                        </a>
                    </li>
                    @php
                        $userRoles = Auth::user()->roles->pluck('name');
                    @endphp
                    @if ($userRoles->contains('admin'))
                    <li>
                        <a href="{{route('admin_home')}}" class="d-flex">
                            <p>Admin Panel</p>
                        </a>
                    </li>
                    @endif
                    @if ($userRoles->contains('muhabir'))
                        <li>
                            <a href="{{route('home')}}" class="d-flex">
                                <p>Muhabir Panel</p>
                            </a>
                        </li>
                    @endif
                    @if ($userRoles->contains('yazar'))
                        <li>
                            <a href="{{route('home')}}" class="d-flex">
                                <p>Yazar Panel</p>
                            </a>
                        </li>
                    @endif
                    @if ($userRoles->contains('user'))
                        <li>
                            <a href="{{route('home')}}" class="d-flex">
                                <p>User Panel</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </aside>
        </div>
    </div>
</div>
