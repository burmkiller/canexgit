<nav class="navbar navbar-expand-lg px-lg-5 text-sm-center">
    <a class="navbar-brand" href="{{url("/")}}">
        <img src="{{asset("assets/front_end/images/logo1.png")}}" alt="logo" height="40">
        <img src="{{asset("assets/front_end/images/logo.png")}}" alt="logo" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-blue"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="links" class="navbar-nav">
            <li class="nav-item mx-lg-2">
                <a class="nav-link" href="{{url("/")}}">{{trans("nav_bar.home")}}</a>
            </li>
            <li class="nav-item dropdown mx-lg-2">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{trans("nav_bar.about_us")}}</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item font-weight-bold" href="{{url("page/about")}}">{{trans("nav_bar.about_us")}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-bold" href="{{url("page/how-these-business-categories-came-about")}}">{{trans("nav_bar.hbc")}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-bold" href="{{url("page/inquiries-to-buy")}}">{{trans("nav_bar.itb")}}</a>
                    <div class="dropdown-divider"></div>
{{--                    <a class="dropdown-item font-weight-bold" href="{{url("page/one-more-thing")}}">{{trans("nav_bar.omt")}}</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
                    <a class="dropdown-item font-weight-bold" href="{{url("page/scam-alerts")}}">{{trans("nav_bar.sa")}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-bold" href="{{url("page/success-stories")}}">{{trans("nav_bar.ss")}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-bold" href="{{url("page/contact")}}">{{trans("nav_bar.cu")}}</a>
                </div>
            </li>
            <li class="nav-item mx-lg-2">
                <a class="nav-link" href="{{url("page/testimonials")}}">{{trans("nav_bar.testimonials")}}</a>
            </li>
            <li class="nav-item mx-lg-2">
                <a class="nav-link" href="{{url("page/info-letter")}}">{{trans("nav_bar.info-letter")}}</a>
            </li>
            <li class="nav-item mx-lg-2">
                <a class="nav-link" href="{{url("page/resources")}}">{{trans("nav_bar.resources")}}</a>
            </li>
        </ul>
        @auth
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mx-lg-2">
                    <a class="nav-link btn btn-blue dropdown-toggle px-4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Welcome {{ucwords(auth()->user()->name)}}<i class="fas fa-user mx-3"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item font-weight-bold" href="{{url("account-settings")}}"><i class="fas fa-cog mr-2"></i>Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="{{route("home")}}"><i class="fas fa-cog mr-2"></i>Profile Management</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="{{route("user.media")}}"><i class="fas fa-cog mr-2"></i>Media</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="{{route("user.social-media")}}"><i class="fas fa-cog mr-2"></i>Social-Media</a>
                        <div class="dropdown-divider"></div>


                        <a class="dropdown-item font-weight-bold" href="{{route("logout")}}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();
                                                                    "><i class="fas fa-sign-out-alt mr-2"></i>Disconnect</a>
                        <form action="{{ route("logout") }}" id="logout-form" style="display: none;" method="post">
                            @csrf
                        </form>
                    </div>

                    <form action="{{route("logout")}}" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-lg-2">
                <a class="nav-link btn btn-blue nav-bt px-3" href="{{url("login")}}">{{trans("nav_bar.login")}}</a>
            </li>
            <li class="nav-item mx-lg-2 sp-t">
                <a class="nav-link btn btn-blue nav-bt px-3" href="{{url("register")}}">{{trans("nav_bar.register")}}</a>
            </li>
        </ul>
        @endif
    </div>
</nav>
