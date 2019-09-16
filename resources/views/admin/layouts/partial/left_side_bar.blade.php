<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset("assets/back_end/images/user.png")}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{admin()->user()->name}}</div>
            <div class="email">{{admin()->user()->email}}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{aurl("infos")}}"><i class="material-icons">forum</i>Contact Infos</a></li>
                    <li>
                        <a href="{{route("admin.infos.index")}}"><i class="material-icons">forum</i>Info-Letter</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

            @if(Request::is('admin*'))
                <li class="{{Request::is('admin/dashboard*')?'active':''}}">
                    <a href="{{route("admin.dashboard")}}">
                        <i class="material-icons">dashboard</i>
                        <span>dashboard</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/admins-account*')?'active':''}}">
                    <a href="{{route("admin.admins-account.index")}}">
                        <i class="material-icons">supervisor_account</i>
                        <span>Admin Account Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/user*')?'active':''}}">
                    <a href="{{route("admin.user.index")}}">
                        <i class="material-icons">account_box</i>
                        <span>User Account Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/profile*')?'active':''}}">
                    <a href="{{route("admin.profile.index")}}">
                        <i class="material-icons">bookmark</i>
                        <span>Profile business Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/category*')?'active':''}}">
                    <a href="{{route("admin.category.index")}}">
                        <i class="material-icons">check_box</i>
                        <span>Category Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/testimonial*')?'active':''}}">
                    <a href="{{route("admin.testimonial.index")}}">
                        <i class="material-icons">favorite</i>
                        <span>Testimonial Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/event*')?'active':''}}">
                    <a href="{{route("admin.event.index")}}">
                        <i class="material-icons">event</i>
                        <span>Event Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/banners_and_sponsors*')?'active':''}}">
                    <a href="{{route("admin.banners_and_sponsors.index")}}">
                        <i class="material-icons">face</i>
                        <span>Banners And Sponsors Management</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/buy*')?'active':''}}">
                    <a href="{{route("admin.buy.index")}}">
                        <i class="material-icons">shopping_cart</i>
                        <span>Inquiries to buy Management</span>
                    </a>
                </li>

                <li class="{{Request::is("admin/issue*")?'active':''}}">
                    <a href="{{route("admin.issue.index")}}">
                        <i class="material-icons">picture_as_pdf</i>
                        <span>Issue Management</span>
                    </a>
                </li>

                <li class="{{Request::is("admin/comment*")?'active':''}}">
                    <a href="{{route("admin.comment.index")}}">
                        <i class="material-icons">comment</i>
                        <span>Comment Management</span>
                    </a>
                </li>


                <li class="header">System</li>

                <li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a href="{{route("admin.logout")}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>LogOut</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">Admin - Canadian Exports</a>.
        </div>

    </div>
    <!-- #Footer -->
</aside>
