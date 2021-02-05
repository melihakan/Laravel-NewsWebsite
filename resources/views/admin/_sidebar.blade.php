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



                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">Calendar</a></li>
                        <li><a href="app-chat.html">Chat app</a></li>
                        <li><a href="app-ticket.html">Support Ticket</a></li>
                        <li><a href="app-contact.html">Contact / Employee</a></li>
                        <li><a href="app-contact2.html">Contact Grid</a></li>
                        <li><a href="app-contact-detail.html">Contact Detail</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-email.html">Mailbox</a></li>
                        <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                        <li><a href="app-compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-user-card.html">User Cards</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>
                        <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                        <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                        <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-nestable.html">Nestable</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-timeline.html">Timeline</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                        <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                        <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                        <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                        <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                        <li><a href="ui-list-media.html">List Media</a></li>
                        <li><a href="ui-ribbons.html">Ribbons</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                        <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                    </ul>
                </li>

                <li class="nav-small-cap">--- SUPPORT</li>
                <li> <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
