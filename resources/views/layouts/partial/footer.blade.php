<hr width="60%" class="mt-3 mb-5">


<div class="container padding-y mt-5">
    <div id="click" class="row d-flex justify-content-between align-items-center px-5 py-4">
        <div class="col-lg-5 h1 d-flex justify-content-center">Canadian Exporters</div>
        <button type="button" data-toggle="modal" data-target="#clickHere" class="col-lg-5 py-3 btn btn-blue"><span class="text-light h2">Click Here</span></button>
    </div>
</div>

<!-- Footer Start-->
<footer class="page-footer bg-dark text-light mt-5">
    <div class="container-fluid text-center text-md-left">
        <div class="row text-center text-md-left py-5 d-flex justify-content-around">
            <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-blue pb-3 footer-title">{{trans("nav_bar.u_links")}}</h6>
                <p>
                    <a href="{{url("/")}}" class="text-light">{{trans("nav_bar.home")}}</a>
                </p>
                <p>
                    <a href="{{url("page/about")}}" class="text-light">{{trans("nav_bar.about_us")}}</a>
                </p>
                <p>
                    <a href="{{url("page/how-these-business-categories-came-about")}}" class="text-light">{{trans("nav_bar.hbc")}}</a>
                </p>
                <p>
                    <a href="{{url("page/inquiries-to-buy")}}" class="text-light">{{trans("nav_bar.itb")}}</a>
                </p>
                <p>
                    <a href="{{url("page/one-more-thing")}}" class="text-light">{{trans("nav_bar.omt")}}</a>
                </p>
                <p>
                    <a href="{{url("page/scam-alerts")}}" class="text-light">{{trans("nav_bar.sa")}}</a>
                </p>
                <p>
                    <a href="{{url("page/success-stories")}}" class="text-light">{{trans("nav_bar.ss")}}</a>
                </p>
                <p>
                    <a href="{{url("page/testimonials")}}" class="text-light">{{trans("nav_bar.testimonials")}}</a>
                </p>
                <p>
                    <a href="{{url("page/info-letter")}}" class="text-light">{{trans("nav_bar.info-letter")}}</a>
                </p>
                <p>
                    <a href="{{url("page/resources")}}" class="text-light">{{trans("nav_bar.resources")}}</a>
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-blue pb-3 footer-title">{{trans("nav_bar.oth_l")}}</h6>
                <p>
                    <a href="{{url("page/disclaimer")}}" class="text-light">{{trans("nav_bar.dis")}}</a>
                </p>
{{--                <p>--}}
{{--                    <a href="#!" class="text-light">Online Business Directory</a>--}}
{{--                </p>--}}
                <p>
                    <a href="{{url("page/contact")}}" class="text-light">{{trans("nav_bar.cu")}}</a>
                </p>
                <p>
                    <a href="{{url("page/privacy_policy")}}" class="text-light">{{trans("nav_bar.pp")}}</a>
                </p>
                <p>
                    <a href="{{url("page/comment_and_suggestion")}}" class="text-light">{{trans("nav_bar.comment_sug")}}</a>
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-blue pb-3 footer-title">{{trans("nav_bar.contact")}}</h6>
                <p class="text-light">
                    <i class="fas fa-home mr-3"></i> {{isset(getInfos()->location)?getInfos()->location:"" }}</p>
                <p class="text-light">
                    <i class="fas fa-envelope mr-3"></i> {{isset(getInfos()->email)?getInfos()->email:""}}</p>
                <p class="text-light">
                    <i class="fas fa-phone mr-3"></i> {{isset(getInfos()->phone)?getInfos()->phone:""}} </p>
                <p class="text-light">
                    <i class="fas fa-print mr-3"></i> {{isset(getInfos()->fax)?getInfos()->fax:""}}</p>
            </div>
        </div>
        <hr>
        <div class="row d-flex align-items-center">
            <div class="col-md-12 col-lg-12 ml-lg-0 d-flex justify-content-center">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        @if(isset(getInfos()->facebook))
                        <li class="list-inline-item ">
                            <a href="{{getInfos()->facebook}}" class="btn-floating btn-lg mx-1 facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        @endif
                        @if(isset(getInfos()->twitter))
                        <li class="list-inline-item">
                            <a href="{{getInfos()->twitter}}" class="btn-floating btn-lg mx-1 twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        @endif
                        @if(isset(getInfos()->google))
                        <li class="list-inline-item">
                            <a href="{{getInfos()->google}}" class="btn-floating btn-lg mx-1 google">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        @endif
                        @if(isset(getInfos()->linked_in))
                        <li class="list-inline-item">
                            <a href="{{getInfos()->linked_in}}" class="btn-floating btn-lg mx-1 linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                            @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 d-flex justify-content-center">
                <p class="text-center text-md-left">© 2019 Copyright:
                    <a href="{{url("/")}}">
                        <strong> canadianexports.org</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->


<a href="#" class="btt">
    <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
</a>

<a href="#" class="lng" data-toggle="modal" data-target="#lng">
    <i class="fas fa-language fa-3x"></i>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- FA KIT -->
<script src="https://kit.fontawesome.com/2646fa2bda.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}


<!-- Modal Click Here-->
<div class="modal fade" id="clickHere" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-blue" id="">Canadian Exporters</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{url("page/about")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"À propos de nous":"About us"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/how-these-business-categories-came-about")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Comment les catégories d'entreprises ont été créées?":"How the Business Categories came about"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/inquiries-to-buy")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Demandes d'achat":"Inquiries to Buy"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/one-more-thing")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Encore une chose":"One More Thing"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/scam-alerts")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Alertes arnaques":"Scam Alerts"}}</a>
                    </li>


                    <li class="list-group-item">
                        <a href="{{url("page/circulation")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Circulation":"Circulationf"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/faq")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"FAQ":"FAQ"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/rate-information")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Tarifs et information":"Rates & Information"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("register")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Enregistrer mon entreprise":"Register My Business"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/satisfaction-guarantee")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Satisfaction garantie":"Satisfaction Guarantee"}}</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{url("page/why-have-a-profile")}}"><i class="far fa-arrow-alt-circle-right mr-2"></i>{{App::isLocale("fr")?"Quoi de neuf pour MY BUSINESS":"What's-in-it-for-MY-BUSINESS"}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Modal Click Here -->

<!-- Modal Language-->
<div class="modal fade" id="lng" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ar")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ar.png') }}" class="img-fluid">
                                <p>Arabic</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/bn")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/bn.png') }}" class="img-fluid">
                                <p>Bengali</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/bu")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/bu.png') }}" class="img-fluid">
                                <p>Bulgarian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ch")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ch.png') }}" class="img-fluid">
                                <p>Chinese</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/du")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/du.png') }}" class="img-fluid">
                                <p>Dutch</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/en")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/en.png') }}" class="img-fluid">
                                <p>English</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/es")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/es.png') }}" class="img-fluid">
                                <p>Estonian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/fa")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/fa.png') }}" class="img-fluid">
                                <p>Farsi</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/fi")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/fi.png') }}" class="img-fluid">
                                <p>Filipino</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/fr")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/fr.png') }}" class="img-fluid">
                                <p>French</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ge")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ge.png') }}" class="img-fluid">
                                <p>German</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/gr")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/gr.png') }}" class="img-fluid">
                                <p>Greek</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/he")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/he.png') }}" class="img-fluid">
                                <p>Hebrew</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/hi")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/hi.png') }}" class="img-fluid">
                                <p>Hindi</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/in")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/in.png') }}" class="img-fluid">
                                <p>Indonesian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/it")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/it.png') }}" class="img-fluid">
                                <p>Italian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ja")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ja.png') }}" class="img-fluid">
                                <p>Japanese</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/koma")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ko.png') }}" class="img-fluid">
                                <p>Korean</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ma")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ma.png') }}" class="img-fluid">
                                <p>Malaysian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/no")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/no.png') }}" class="img-fluid">
                                <p>Norwegian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/pl")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/pl.png') }}" class="img-fluid">
                                <p>Polish</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/po")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/po.png') }}" class="img-fluid">
                                <p>Portuguese</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ro")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ro.png') }}" class="img-fluid">
                                <p>Romanian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/ru")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/ru.png') }}" class="img-fluid">
                                <p>Russian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/sr")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/sr.png') }}" class="img-fluid">
                                <p>Serbian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/sp")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/sp.png') }}" class="img-fluid">
                                <p>Spanish</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/th")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/th.png') }}" class="img-fluid">
                                <p>Thai</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/tu")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/tu.png') }}" class="img-fluid">
                                <p>Turkish</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/uk")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/uk.png') }}" class="img-fluid">
                                <p>Ukranian</p>
                            </a>
                        </div>
                        <div class="col-3 p-1 text-center">
                            <a href="{{url("lang/vi")}}" class="text-blue nav-link">
                                <img src="{{ asset('assets/front_end/images/lng/vi.png') }}" class="img-fluid">
                                <p>Vietnamese</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
