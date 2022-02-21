<!--header start-->
<header id="masthead" class="header ttm-header-style-01">
    <!-- ttm-topbar-wrapper -->
    <div class="top_bar ttm-bgcolor-darkgrey back-custom clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                    <div class="top_bar_contact_item pl-0">
                        <!-- <div class="top_bar_icon"><i class=" fa fa-tachometer"></i></div>Raise your website traffic with Invess <a href="#"> Free site Analysis</a> -->
                    </div>
                    <div class="top_bar_contact_item ml-auto font-weight-bold padding_left15" style="color: black">
                         <div class="top_bar_icon"><i class="fa fa-phone"></i>
                         </div> Contact: <span class="font-weight-500 text-black"> <a href="tel:0141779350" class="font-weight-500 text-black">01 41 77 93 50</a></span>
                    </div>
                    <div class="top_bar_contact_item font-weight-bold">
                         <div class="top_bar_icon ttm-highlight-right"><i class="ti ti-email"></i></div>Email: <a href="mailto:contact@ezinstrauus.fr" class="font-weight-500 text-white"> contact@audit-totier.fr</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-transpatant">
        <div class="site-header-menu-inner ttm-stickable-header ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="/" title="Audit TOTIER" rel="home">
                                    <img id="logo-img" class="img-center standardlogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/AT.png') }}" alt="Logo Audit TOTIER">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                                        <a href="{{ route('index') }}" class="mega-menu-link">Accueil</a>
                                    </li>

                                    <li class="mega-menu-item {{ Route::currentRouteName() == 'cabinet' ? 'active' : '' }}">
                                        <a href="{{ route('index') }}#cabinets" class="mega-menu-link">Le cabinet de Montrouge</a>
                                    </li>

                                    <li class="mega-menu-item {{ Route::currentRouteName() == 'serviceDetails' ? 'active' : '' }}">
                                        <a href="{{ route('index') }}#skills" class="mega-menu-link">Nos compétences</a>
                                    </li>

                                    <li class="mega-menu-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}" class="mega-menu-link">Contactez-nous</a>
                                    </li>
                                </ul>
                            </nav>                                      
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- site-header-menu end-->
</header> 