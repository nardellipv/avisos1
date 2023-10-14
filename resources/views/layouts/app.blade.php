<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" sizes="35x35" type="image/png') }}">
    <title>NeonDir - Directory Listing HTML5 Template</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Gradient Color Scheme -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors/color.css') }}" title="color">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/color3.css') }}" title="color3" > <!-- Color3 -->
</head>

<body>
<main>
            <div class="sidepanel">
                <span><i class="fas fa-cog fa-spin"></i></span>
                <div class="color-picker">
                    <h3>Gradient Colors</h3>
                    <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
                    <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
                    <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
                    <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
                    <a class="color5" onclick="setActiveStyleSheet('color5'); return false;"></a>
                </div><!-- Color Picker -->
                <div class="color-picker">
                    <h3>Solid Colors</h3>
                    <a class="color6" onclick="setActiveStyleSheet('color6'); return false;"></a>
                    <a class="color7" onclick="setActiveStyleSheet('color7'); return false;"></a>
                    <a class="color8" onclick="setActiveStyleSheet('color8'); return false;"></a>
                    <a class="color9" onclick="setActiveStyleSheet('color9'); return false;"></a>
                    <a class="color10" onclick="setActiveStyleSheet('color10'); return false;"></a>
                </div><!-- Color Picker -->
            </div><!-- Side Panel -->
            <header class="stick style2 w-100">
                <div class="topbar w-100">
                    <div class="container">
                        <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between">
                            <div class="social-links2 d-inline-flex">
                                <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="top-links d-inline-flex">
                                <a class="login-btn" href="login.html" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
                                <a class="search-btn" href="javascript:void(0);" title=""><i class="thm-clr fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Topbar -->
                <div class="menu-wrap">
                    <div class="container">
                        <div class="menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="Logo" srcset="{{ asset('assets/images/retina-logo.png') }}"></a></h1></div><!-- Logo -->
                            <nav class="d-inline-flex align-items-center">
                                <div>
                                    <ul class="mb-0 list-unstyled d-inline-flex">
                                        <li class="menu-item-has-children"><a href="index.html" title="">Home</a>
                                            <ul class="children mb-0 list-unstyled">
                                                <li><a href="index.html" title="">Homepage 1</a></li>
                                                <li><a href="index2.html" title="">Homepage 2</a></li>
                                                <li><a href="index3.html" title="">Homepage 3</a></li>
                                                <li><a href="index4.html" title="">Homepage 4</a></li>
                                                <li><a href="index5.html" title="">Homepage 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                                            <ul class="children mb-0 list-unstyled">
                                                <li><a href="place-listing.html" title="">Place Listing</a></li>
                                                <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                                                <li><a href="place-layout-detail.html" title="">Listing Detail Style 1</a></li>
                                                <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                                                <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                                                <li><a href="add-listing.html" title="">Add Listing</a></li>
                                                <li><a href="listing-review.html" title="">Listing Review</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                            <div class="megamenu center">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4 col-sm-12 col-sm-4">
                                                        <div class="megamenu-links w-100">
                                                            <a href="listing-layout.html" title="">Listing Style 1</a>
                                                            <a href="listing-layout2.html" title="">Listing Style 2</a>
                                                            <a href="event-detail.html" title="">Event Detail Style 1</a>
                                                            <a href="event-detail2.html" title="">Event Detail Style 2</a>
                                                            <a href="price-table.html" title="">Price Table</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-sm-4">
                                                        <div class="megamenu-links w-100">
                                                            <a href="gallery.html" title="">Gallery Style 1</a>
                                                            <a href="gallery2.html" title="">Gallery Style 2</a>
                                                            <a href="gallery3.html" title="">Gallery Style 3</a>
                                                            <a href="gallery-detail.html" title="">Gallery Detail</a>
                                                            <a href="login.html" title="">Login</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-sm-4">
                                                        <div class="megamenu-add w-100">
                                                            <img class="img-fluid" src="{{ asset('assets/images/resources/megamenu-img.jpg') }}" alt="Megamenu Image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Megamenu -->
                                        </li>
                                        <li><a href="about.html" title="">About us</a></li>
                                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact us</a>
                                            <ul class="children mb-0 list-unstyled">
                                                <li><a href="contact.html" title="">Contact us 1</a></li>
                                                <li><a href="contact2.html" title="">Contact us 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <a class="header-btn" href="add-listing.html" title=""><i class="">+</i>Add Listing</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div><!-- Menu Wrap -->
            </header><!-- Header -->
            <div class="search-wrap w-100 d-flex flex-wrap align-items-center justify-content-center">
                <span class="search-cls-btn rounded-circle"><i class="fas fa-times"></i></span>
                <form class="w-100">
                    <input type="text" placeholder="Search here....">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div><!-- Search Wrap -->
            <div class="rspn-hdr">
                <div class="rspn-mdbr">
                    <div class="rspn-scil">
                        <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <form class="rspn-srch">
                        <input type="text" placeholder="Enter Your Keyword" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="lg-mn">
                    <div class="logo"><a href="index.html" title="Home"><img src="{{ asset('assets/images/logo2.png') }}" alt="Logo" srcset="{{ asset('assets/images/retina-logo2.png') }}"></a></div>
                    <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
                </div>
                <div class="rsnp-mnu">
                    <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                    <ul class="mb-0 list-unstyled w-100">
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="index.html" title="">Homepage 1</a></li>
                                <li><a href="index2.html" title="">Homepage 2</a></li>
                                <li><a href="index3.html" title="">Homepage 3</a></li>
                                <li><a href="index4.html" title="">Homepage 4</a></li>
                                <li><a href="index5.html" title="">Homepage 5</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Listing</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="place-listing.html" title="">Place Listing</a></li>
                                <li><a href="listing-explore-map-sidebar.html" title="">Listing With Map Style 1</a></li>
                                <li><a href="place-layout-detail.html" title="">Listing Detail Style 1</a></li>
                                <li><a href="listing-explore-map-sidebar2.html" title="">Listing With Map Style 2</a></li>
                                <li><a href="place-layout-detail2.html" title="">Listing Detail Style 2</a></li>
                                <li><a href="add-listing.html" title="">Add Listing</a></li>
                                <li><a href="listing-review.html" title="">Listing Review</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="listing-layout.html" title="">Listing Style 1</a></li>
                                <li><a href="listing-layout2.html" title="">Listing Style 2</a></li>
                                <li><a href="event-detail.html" title="">Event Detail Style 1</a></li>
                                <li><a href="event-detail2.html" title="">Event Detail Style 2</a></li>
                                <li><a href="price-table.html" title="">Price Table</a></li>
                                <li><a href="gallery.html" title="">Gallery Style 1</a></li>
                                <li><a href="gallery2.html" title="">Gallery Style 2</a></li>
                                <li><a href="gallery3.html" title="">Gallery Style 3</a></li>
                                <li><a href="gallery-detail.html" title="">Gallery Detail</a></li>
                                <li><a href="login.html" title="">Login</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html" title="">About us</a></li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact us</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="contact.html" title="">Contact us 1</a></li>
                                <li><a href="contact2.html" title="">Contact us 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Responsive Menu -->
            </div><!-- Responsive Header -->
            <section>
                <div class="w-100 position-relative">
                    <div class="feat-wrap5 pt-150 pb-160 black-layer position-relative opc65 w-100">
                        <div class="fixed-bg" style="background-image: url(assets/images/resources/feat-bg5.jpg);"></div>
                        <div class="container">
                            <div class="feat-inner5 pt-120 w-100">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="feat-cap5 w-100">
                                            <span class="d-block thm-clr">Explore all the Popular Places</span>
                                            <h2 class="mb-0">Find Places You Want to Go</h2>
                                            <p class="mb-0">We provide event and directory listings of restaurants, museums, art centers, theaters, and landmarks. Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping</p>
                                            <a class="thm-btn" href="about.html" title="">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="dir-form2-wrap text-right w-100">
                                            <form class="dir-form5 w-100">
                                                <div class="field w-100">
                                                    <label><i class="fas fa-map-pin"></i>What you'd like to find?</label>
                                                    <input type="text" placeholder="Keyword to search">
                                                </div>
                                                <div class="field w-100">
                                                    <label><i class="fas fa-map-marker-alt"></i>Where to look for?</label>
                                                    <input type="text" placeholder="Search for location">
                                                </div>
                                                <div class="field w-100">
                                                    <label><i class="far fa-flag"></i>In which category?</label>
                                                    <input type="text" placeholder="All Categories">
                                                </div>
                                                <button class="thm-btn" type="submit"><i class="fas fa-search"></i>Discover Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Feat Wrap -->
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-140 pb-110 position-relative">
                    <div class="container">
                        <div class="sec-title text-center w-100">
                            <span class="d-block thm-clr">Discover & connect with great local businesses</span>
                            <h2 class="mb-0">See How it Works</h2>
                        </div><!-- Sec Title -->
                        <div class="how-work-wrap res-row text-center w-100">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="how-work-box v2 w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="{{ asset('assets/images/resources/how-work-icon1.png') }}" alt="How It Works Icon 1"></span>
                                        <div class="how-work-inner w-100">
                                            <h3 class="mb-0">Choose what to Do</h3>
                                            <p class="mb-0">Looking for a cozy hotel to stay, a restaurant to eat, a museum todo some shopping?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="how-work-box v2 w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="{{ asset('assets/images/resources/how-work-icon2.png') }}" alt="How It Works Icon 2"></span>
                                        <div class="how-work-inner w-100">
                                            <h3 class="mb-0">Find What You Want</h3>
                                            <p class="mb-0">Looking for a cozy hotel to stay, a restaurant to eat, a museum todo some shopping?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4">
                                    <div class="how-work-box v2 w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="{{ asset('assets/images/resources/how-work-icon3.png') }}" alt="How It Works Icon 3"></span>
                                        <div class="how-work-inner w-100">
                                            <h3 class="mb-0">Amazing Places</h3>
                                            <p class="mb-0">Looking for a cozy hotel to stay, a restaurant to eat, a museum todo some shopping?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Services Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-140 dark-layer2 pb-120 opc9 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/parallax5.jpg);"></div>
                    <div class="container">
                        <div class="about-wrap2 w-100">
                            <div class="about-img-caro">
                                <div class="about-img2">
                                    <span class="rounded-pill position-absolute">Featured List</span>
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-img2-1.jpg') }}" alt="About Image 1">
                                </div>
                                <div class="about-img2">
                                    <span class="rounded-pill position-absolute">Featured List</span>
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-img2-2.jpg') }}" alt="About Image 2">
                                </div>
                            </div>
                            <div class="about-desc2 w-100">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <h2 class="mb-0">Trendy <br> Apparel Designer</h2>
                                        <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                            <li><i class="rounded-circle fas fa-glass-cheers"></i>3 Events available</li>
                                            <li><i class="rounded-circle fas fa-map-marker-alt"></i>95 South Park Avenue, China</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of BloomsburyLuxury hotel in the heart</p>
                                        <a class="thm-btn" href="event-detail.html" title="">Join Event</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Wrap 2 -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-140 pb-140 position-ralative">
                    <div class="container">
                        <div class="sec-title text-center w-100">
                            <span class="d-block thm-clr">We arrange Many other Events</span>
                            <h2 class="mb-0">Most Popular Events</h2>
                        </div><!-- Sec Title -->
                        <div class="listing-top-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="listing-filter-inner d-inline-flex align-items-center">
                                <p class="mb-0">20 Result Found in USA <strong>( Showing 1 - 20 )</strong></p>
                            </div>
                            <div class="slc-parnt d-inline-flex flex-wrap">
                                <div class="slc-wp v2">
                                    <select>
                                        <option>All Regions</option>
                                        <option>USA</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="slc-wp">
                                    <select>
                                        <option>Category</option>
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- Listing Top Bar -->
                        <div class="listing-layout mt-30 w-100">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-1.jpg') }}" alt="List Post Image 1">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-1.jpg') }}" alt="Author Image 1">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color5">Open</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-2.jpg') }}" alt="List Post Image 2">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="rounded-circle" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-2.jpg') }}" alt="Author Image 2">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color6">Close</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-3.jpg') }}" alt="List Post Image 3">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-3.jpg') }}" alt="Author Image 3">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color6">Close</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-4.jpg') }}" alt="List Post Image 4">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-4.jpg') }}" alt="Author Image 4">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color6">Close</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-5.jpg') }}" alt="List Post Image 5">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-5.jpg') }}" alt="Author Image 5">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color5">Open</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-6.jpg') }}" alt="List Post Image 6">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-6.jpg') }}" alt="Author Image 6">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color6">Close</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-7.jpg') }}" alt="List Post Image 7">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-7.jpg') }}" alt="Author Image 7">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color5">Open</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="list-post-box v2 brd-rd5 overflow-hidden position-relative w-100">
                                        <div class="list-post-img overflow-hidden position-relative w-100">
                                            <img class="img-fluid w-100" src="{{ asset('assets/images/resources/list-post-img2-1-8.jpg') }}" alt="List Post Image 8">
                                            <span class="list-post-cat2 position-absolute"><a class="rounded-pill" href="javascript:void(0);" title="">Food Event</a></span>
                                            <span class="list-post-like position-absolute rounded-circle"><a class="" href="javascript:void(0);" title=""><i class="far fa-heart"></i></a></span>
                                        </div>
                                        <div class="list-post-info w-100">
                                            <div class="list-post-inner w-100">
                                                <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                                    <span class="list-post-date"><i class="thm-clr far fa-clock"></i>27 May 2020</span>
                                                    <span class="list-post-rate text-color2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>4.0/5</span></span>
                                                </div>
                                                <h3 class="mb-0"><a href="event-detail.html" title="">Seafood Rooftop into Dinner and Wine</a></h3>
                                                <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                                    <div class="list-post-author d-inline-flex align-items-center">
                                                        <img class="rounded-circle img-fluid" src="{{ asset('assets/images/resources/author-img1-8.jpg') }}" alt="Author Image 8">
                                                        <span>By Master Event</span>
                                                    </div>
                                                    <span class="rounded-pill bg-color6">Close</span>
                                                </div>
                                            </div>
                                            <ul class="list-post-meta mb-0 list-unstyled">
                                                <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>Newyork, England</span></li>
                                                <li><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">yourdomain@web.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Listing Layout -->
                        <div class="view-all mt-30 text-center w-100">
                            <a class="thm-btn brd-btn" href="listing-layout.html" title="">Load More</a>
                        </div><!-- View All -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-100 gray-bg4 pb-100 position-relative">
                    <div class="container">
                        <div class="event-conf-wrap w-100">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                                    <div class="event-conf-imgs w-100 position-relative">
                                        <img class="img-fluid" src="{{ asset('assets/images/resources/event-conf-img1.jpg') }}" alt="Event Conf Image 1">
                                        <img class="img-fluid" src="{{ asset('assets/images/resources/event-conf-img2.jpg') }}" alt="Event Conf Image 2">
                                        <img class="img-fluid" src="{{ asset('assets/images/resources/event-conf-img3.jpg') }}" alt="Event Conf Image 3">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="event-conf-desc w-100">
                                        <span class="thm-clr d-block">Find Awesome Events</span>
                                        <h2 class="mb-0">Connecting the World into Event</h2>
                                        <p class="mb-0">Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of Bloomsbury Luxury hotel in the heart of BloomsburyLuxury hotel in the heart of BloomsburyLuxury hotel in the heart</p>
                                        <div class="event-conf-caro">
                                            <div class="event-conf-item-wrap text-center">
                                                <a href="javascript:void(0);" title="">
                                                    <div class="event-conf-item">
                                                        <i class="fas fa-music thm-clr"></i>
                                                        <h4 class="mb-0">Concert</h4>
                                                        <span class="d-block">2 Events</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="event-conf-item-wrap text-center">
                                                <a href="javascript:void(0);" title="">
                                                    <div class="event-conf-item">
                                                        <i class="fas fa-music thm-clr"></i>
                                                        <h4 class="mb-0">Conference</h4>
                                                        <span class="d-block">2 Events</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="event-conf-item-wrap text-center">
                                                <a href="javascript:void(0);" title="">
                                                    <div class="event-conf-item">
                                                        <i class="fas fa-music thm-clr"></i>
                                                        <h4 class="mb-0">Festival</h4>
                                                        <span class="d-block">2 Events</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="event-conf-item-wrap text-center">
                                                <a href="javascript:void(0);" title="">
                                                    <div class="event-conf-item">
                                                        <i class="fas fa-music thm-clr"></i>
                                                        <h4 class="mb-0">Concert</h4>
                                                        <span class="d-block">2 Events</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-140 pb-140 position-relative">
                    <div class="container">
                        <div class="sec-title text-center w-100">
                            <span class="d-block thm-clr">@Jthemes</span>
                            <h3 class="mb-0">Follow on Instagram</h3>
                        </div><!-- Sec Title -->
                        <div class="insta-wrap w-100">
                            <div class="row mrg5 justify-content-center">
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img1.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img1.jpg') }}" alt="Instagram Image 1"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img2.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img2.jpg') }}" alt="Instagram Image 2"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img3.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img3.jpg') }}" alt="Instagram Image 3"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img4.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img4.jpg') }}" alt="Instagram Image 4"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img5.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img5.jpg') }}" alt="Instagram Image 5"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img6.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img6.jpg') }}" alt="Instagram Image 6"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img7.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img7.jpg') }}" alt="Instagram Image 7"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <div class="insta-box w-100">
                                        <a href="{{ asset('assets/images/resources/insta-img8.jpg') }}" data-fancybox="gallerry" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/insta-img8.jpg') }}" alt="Instagram Image 8"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Instagram Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-130 dark-layer2 pb-100 opc1 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/parallax6.jpg);"></div>
                    <div class="container">
                        <div class="about-toggle-wrap w-100">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/resources/about-img3.jpg') }}" alt="About Image 3">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="toggle w-100" id="toggle">
                                        <div class="toggle-item w-100">
                                            <h4 class="mb-0">Royal Park of America Produces<i class=""></i></h4>
                                            <div class="toggle-content w-100"><p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p></div>
                                        </div>
                                        <div class="toggle-item w-100">
                                            <h4 class="mb-0">Private label Lubricants<i class=""></i></h4>
                                            <div class="toggle-content w-100"><p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p></div>
                                        </div>
                                        <div class="toggle-item w-100">
                                            <h4 class="mb-0">Automotive, Fleet<i class=""></i></h4>
                                            <div class="toggle-content w-100"><p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p></div>
                                        </div>
                                        <div class="toggle-item w-100">
                                            <h4 class="mb-0">industrial Applications.<i class=""></i></h4>
                                            <div class="toggle-content w-100"><p class="mb-0">Royal Park of America produces premium branded and private label lubricants for agriculture.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Toggle Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="w-100 pt-140 pb-110 position-relative">
                    <div class="container">
                        <ul class="clients-wrap d-flex flex-wrap mb-0 list-unstyled w-100">
                            <div class="client-item"><a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('assets/images/resources/client-img2-1.png') }}" alt="Client Image 1"></a></div>
                            <div class="client-item"><a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('assets/images/resources/client-img2-2.png') }}" alt="Client Image 2"></a></div>
                            <div class="client-item"><a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('assets/images/resources/client-img2-3.png') }}" alt="Client Image 3"></a></div>
                            <div class="client-item"><a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('assets/images/resources/client-img2-4.png') }}" alt="Client Image 4"></a></div>
                            <div class="client-item"><a href="javascript:void(0);" title=""><img class="img-fluid" src="{{ asset('assets/images/resources/client-img2-5.png') }}" alt="Client Image 5"></a></div>
                        </ul><!-- Clients Wrap -->
                    </div>
                </div>
            </section>
            <footer>
                <div class="w-100 dark-layer5 opc85 position-relative">
                    <div class="fixed-bg dark-bg4 back-post-cntrbtm" style="background-image: url(assets/images/parallax7.png);"></div>
                    <div class="footer-links-wrap text-center w-100">
                        <ul class="footer-links mb-0 d-flex flex-wrap justify-content-center list-unstyled w-100">
                            <li><a href="javascript:void(0);" title="">About</a></li>
                            <li><a href="javascript:void(0);" title="">Our Story</a></li>
                            <li><a href="javascript:void(0);" title="">Professional Team</a></li>
                            <li><a href="javascript:void(0);" title="">Services</a></li>
                            <li><a href="javascript:void(0);" title="">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="footer-about-wrap text-center w-100">
                        <div class="footer-about-inner d-inline-block">
                            <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="Logo" srcset="{{ asset('assets/images/logo.png') }}"></a></h1></div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, conse ctetuers adipiscing eli sed diam nonum nibhieLorem ipsum dolor sit amet, conse ctetuers adipiscing eli sed diam nonumLorem ipsum dolor sit amet, conse ctetuers adipiscing eli sed diam nonum nibhieLorem ipsum dolor sit</p>
                            <div class="footer-cont-info">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li><i class="rounded thm-bg fas fa-phone"></i>Free support: +01 5426 24400</li>
                                    <li><i class="rounded thm-bg fas fa-envelope"></i>Email: <a href="javascript:void(0);" title="">Example@example.com</a></li>
                                </ul>
                            </div>
                            <div class="asocial-links d-inline-block">
                                <a class="rounded-circle" href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="rounded-circle" href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a class="rounded-circle" href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div><!-- Footer About Wrap -->
                    <div class="copyright2 text-center w-100">
                        <p class="mb-0">&copy; 2020 <a href="index.html" title="Home" target="_blank">NeonDir</a> - Directory & Listings HTML Template. Developed by <a href="javascript:void(0);" title="" target="_blank">Jthemes</a></p>
                    </div><!-- Copyright 2 -->
                </div>
            </footer><!-- Footer -->
        </main>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/styleswitcher.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
</body>

</html>
