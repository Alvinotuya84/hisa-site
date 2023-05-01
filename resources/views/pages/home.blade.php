@extends('layouts.app')

@section('content')
<main>
    <!-- slideshow content begin -->
    {{-- <section>    
        <div id="slideshow" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item">
        <div class="carousel-caption d-flex align-items-center">
            <div class="container">
                <div class="row g-0 align-items-md-center">
                    <div class="col-md-5 col-lg-5 order-first">
                        <h1 class="fw-bold display-4">Build a Better Future with Avo. Investment</h1>
                        <p class="lead mb-3 d-none d-lg-block">Start growing your passive income today. Invest from as low as 100 EUR in various instruments.</p>
                        <a href="#" class="btn btn-primary rounded-pill d-none d-sm-inline">Get started<i class="fas fa-arrow-right fa-sm ms-1"></i></a>
                    </div>
                    <div class="col-md-7 col-lg-7 order-last position-relative">
                        <img src="{{asset('avo-assets/img/in-slide-img-1.svg')}}" class="image-slide" alt="image-slide">
                        <div class="card position-absolute symbol-slide animate-1 p-responsive-1" style="top: -70px; left: -50px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-1.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">42%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-2 p-responsive-2" style="top: -230px; left: 150px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-2.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">22%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-3 p-responsive-3" style="top: -210px; left: 430px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-3.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">10%<i class="fas fa-arrow-trend-down fa-sm"></i></span><br>floating loss
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-4 p-responsive-4" style="top: -45px; left: 605px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-4.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">32%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <div class="carousel-item">
        <div class="carousel-caption d-flex align-items-center">
            <div class="container">
                <div class="row g-0 align-items-md-center">
                    <div class="col-md-5 col-lg-5 order-first">
                        <h1 class="fw-bold display-4">Manage & grow investment assets/ securely</h1>
                        <p class="lead mb-3 d-none d-lg-block">With our trusted regulations and experience, you can easily & safely build your investment assets/.</p>
                        <a href="#" class="btn btn-primary rounded-pill d-none d-sm-inline">Get started<i class="fas fa-arrow-right fa-sm ms-1"></i></a>
                    </div>
                    <div class="col-md-7 col-lg-7 order-last position-relative">
                        <img src="{{asset('avo-assets/img/in-slide-img-2.svg')}}" class="image-slide" alt="image-slide">
                      <div class="card position-absolute symbol-slide animate-1 p-responsive-5" style="top: -70px; left: -20px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-5.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">27%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-2 p-responsive-6" style="top: -210px; left: 190px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-6.svg')}}" alt="icon" width="30" height="26">
                                <div>
                                    <span class="h6">18%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-3 p-responsive-7" style="top: -40px; left: 350px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-7.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">7%<i class="fas fa-arrow-trend-down fa-sm"></i></span><br>floating loss
                                </div>
                            </div>
                        </div>
                        <div class="card position-absolute symbol-slide animate-4 p-responsive-8" style="top: -190px; left: 605px;">
                            <div>
                                <img src="{{asset('avo-assets/img/in-slide-symbol-8.svg')}}" alt="icon" width="30" height="30">
                                <div>
                                    <span class="h6">25%<i class="fas fa-arrow-trend-up fa-sm"></i></span><br>profit gain
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section> --}}
    <!-- slideshow content end -->
    <!-- section content begin -->



                     




    <section id="slideshow" class="carousel slide my-3">
        <div class="carousel-inner">
            <div class="container py-4">

        
        
                <div class="row">
                    <div class="col-md-6 d-flex flex-column" >
                        <h1 class="text-black display-1">Borderless </h1>
                        <h1 class="text-black display-1">Investments </h1>

                        <h1 class="text-black display-1">For </h1>

                        <h1 class="text-black display-1">Africa </h1>

                        <div class="mb-5 py-5">

                            <a href="#" class="btn btn-warning">
                                <div class="d-flex align-items-center text-start">
                                    <img src="{{asset('assets/img/appstore.png')}}" alt="icon" width="36" height="36">
                                    <div>
                                        <span class="text-white">Download On The</span><br><span class="h5 text-white">App Store</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="btn btn-primary mb-2 mb-md-0">
                                <div class="d-flex align-items-center text-start">
                                    <img src="{{asset('assets/img/playstore.png')}}" alt="icon" width="36" height="36">
                                    <div>
                                        Get It On <br><span class="h4 text-white">Playstore</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Tabs nav -->

                        <livewire:home-etf-tabs /> 
                    </div>
                </div>
            </div>
        </div>

    </section>



    {{-- <section class="pb-5 in-avo-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0">
                        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div class="col-md-3 col-lg-auto border-end-lg">
                                <div class="pe-lg-3">
                                    <h6 class="mb-md-0 mb-lg-0">Various trusted media</h6>
                                    <p class="text-muted mb-0 d-none d-lg-block">have covered us</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10">
                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 d-flex align-items-center gx-0">
                                    <div class="col text-center">
                                        <img class="opacity-75 my-2 my-md-1 my-lg-1" src="{{asset('avo-assets/img/in-avo-press-1.svg')}}" alt="client-logo" width="127" height="19">
                                    </div>
                                    <div class="col text-center">
                                        <img class="opacity-75 my-2 my-md-1 my-lg-1" src="{{asset('avo-assets/img/in-avo-press-2.svg')}}" alt="client-logo" width="126" height="23">
                                    </div>
                                    <div class="col text-center d-none d-lg-block">
                                        <img class="opacity-75 my-2 my-md-1 my-lg-1" src="{{asset('avo-assets/img/in-avo-press-3.svg')}}" alt="client-logo" width="155" height="23">
                                    </div>
                                    <div class="col text-center d-none d-lg-block">
                                        <img class="opacity-75 my-2 my-md-1 my-lg-1" src="{{asset('avo-assets/img/in-avo-press-4.svg')}}" alt="client-logo" width="102" height="29">
                                    </div>
                                    <div class="col text-center">
                                        <img class="opacity-75 my-2 my-md-1 my-lg-1" src="{{asset('avo-assets/img/in-avo-press-5.svg')}}" alt="client-logo" width="124" height="29">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- section content end -->
    <!-- section content begin -->
    <section class="py-5 in-avo-2">
        <div class="container">
            <div class="row row-cols-md-3 row-cols-lg-4 text-center mb-5">
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count" data-counter-end="183092">183092</span><span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Daily trades</p>
                </div>
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count" data-counter-end="364887">364887</span><span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Clients</p>
                </div>
                <div class="col d-md-none d-lg-block">
                    <h1 class="mb-0">
                        <span class="count" data-counter-end="96">96</span> billion<span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Asset management</p>
                </div>
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count" data-counter-end="23">23</span> billion<span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Daily trade volume</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex align-items-center text-center mt-md-4 gy-3 gy-md-0">
                <div class="col">
                    <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 mb-2">
                        <img src="{{asset('avo-assets/img/in-avo-2-icon-1.png')}}" alt="icon" width="38" height="38">
                    </div>
                    <h4>Various assets/</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elited do eiusmod tempo officios incididunt.</p>
                </div>
                <div class="col active-col">
                    <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 mb-2">
                        <img src="{{asset('avo-assets/img/in-avo-2-icon-2.png')}}" alt="icon" width="38" height="38">
                    </div>
                    <h4 class="text-white">Market analysis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elited do eiusmod tempo officios incididunt.</p>
                </div>
                <div class="col d-md-none d-lg-block">
                    <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 mb-2">
                        <img src="{{asset('avo-assets/img/in-avo-2-icon-3.png')}}" alt="icon" width="38" height="38">
                    </div>
                    <h4>Enhanced tools</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elited do eiusmod tempo officios incididunt.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    <!-- section content begin -->
    <section class="pb-5 in-avo-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-12 col-lg-7">
                        <h2>Getting started with shares in Kenya on the <span class="text-highlight">Hisa App</span>  </h2>

                    </div>
                    <div class="card border-0 bg-hisa">

                        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">

                            <div class="ratio ratio-16x9">
                                <iframe width="738" height="415" src="https://www.youtube.com/embed/ax3TYhupQMM" title="Investing 101: Getting started with shares in Kenya on the Hisa App" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </section>   
    <section class="pt-1 pb-5 pt-md-2 pb-md-5 py-lg-5 in-avo-3">

        <div class="col-md-12 d-flex flex-column align-items-center">
            <h1 class="display-3">Pick any asset you like from a wide</h1>
            <h1 class="display-3">Range of <span class="text-primary" >US</span> and <span class="text-primary" >Kenyan Stocks</span> </h1>
            <h1 class="text-warning display-3">ETFs</h1>
        </div>
        <div class="container etfs ">
                <div class="row etfs-content flex-nowrap">
                    {{-- <div class="col-md-12 col-lg-5 position-relative">
                        <img class="img-decor" src="{{asset('avo-assets/img/in-avo-3-decor-1.svg')}}" alt="decor">
                        <div class="card card-body card-tv">
                            <div id="tradingview-widget"></div>
                        </div>
                    </div> --}}
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/amazon.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/pepsi.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/apple.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/apple.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/microsoft.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/nvidia.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/pepsi.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/coca.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div> 
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/pepsi.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/coca.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/pepsi.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/coca.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div> 
                    <div class="col-md-12 col-lg-4 text-nowrap">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/pepsi.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/coca.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('admin/assets/img/avatars/1.png')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        
                    </div>  
                </div>
            
        </div>
    </section>


    <!-- second embed section -->

    <section class="pb-5 in-avo-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-12 col-lg-7">
                        <h2><span class="text-highlight">Hisa Webinar:</span> Investment Strategies  </h2>

                    </div>
                    <div class="card border-0 bg-hisa">

                        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">

                            <div class="ratio ratio-16x9">
                                <iframe width="738" height="415" src="https://www.youtube.com/embed/e8khYuLINP8" title="Hisa Webinar: Investment Strategies" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </section>   




    <!-- section content end -->
    <!-- section content begin -->

    
    <section class="pb-5 in-avo-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 position-relative">
                    <div class="card card-body text-center">
                        <div id="testimoni" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <h2>“Avo is my first choice for invest”</h2>
                                    <p class="lead text-muted">I’ve been a client for 7 years. I am very happy with the platform, pricing, answers to my requests. I am also very happy with the professionalism and the effectiveness of my account manager.</p>
                                    <h6 class="mt-2 mb-0">Christy Costa</h6>
                                    <p class="text-muted">Avo Investor</p>
                                </div>
                                <div class="carousel-item">
                                    <h2>“Extremely satisfied with the service”</h2>
                                    <p class="lead text-muted">The whole process was seamless and very easy. The best part of it is the actual annualised return on the investment. I am extremely satisfied with the service and advice of Avo.</p>
                                    <h6 class="mt-2 mb-0">Howard Lane</h6>
                                    <p class="text-muted">Avo Investor</p>
                                </div>
                                <div class="carousel-item">
                                    <h2>“Satisfied with the growth my investment”</h2>
                                    <p class="lead text-muted">Avo gave me the best independent advice on my investment strategy. I am able to monitor the performance, switch funds and add to the investment with little or no hassle, even as a sophisticated investor.</p>
                                    <h6 class="mt-2 mb-0">John Wright</h6>
                                    <p class="text-muted">Avo Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="position-absolute card-decor animate-5" src="{{asset('avo-assets/img/in-avo-4-decor-1.svg')}}" alt="decor" style="top: 50%; left: -5%;">
                    <img class="position-absolute card-decor animate-6" src="{{asset('avo-assets/img/in-avo-4-decor-2.svg')}}" alt="decor" style="top: -22%; left: 10%;">
                    <img class="position-absolute card-decor animate-7" src="{{asset('avo-assets/img/in-avo-4-decor-3.svg')}}" alt="decor" style="top: -16%; left: 94%;">
                    <img class="position-absolute card-decor animate-6" src="{{asset('avo-assets/img/in-avo-4-decor-4.svg')}}" alt="decor" style="top: 82%; left: 96.5%;">
                    <img class="position-absolute animate-1" src="{{asset('avo-assets/img/in-avo-4-avatar-1.png')}}" alt="decor" style="top: -15%; left: -15%;">
                    <img class="position-absolute animate-2" src="{{asset('avo-assets/img/in-avo-4-avatar-2.png')}}" alt="decor" style="top: 28%; left: -20%;">
                    <img class="position-absolute animate-2" src="{{asset('avo-assets/img/in-avo-4-avatar-3.png')}}" alt="decor" style="top: 16%; left: 117%;">
                    <img class="position-absolute animate-1" src="{{asset('avo-assets/img/in-avo-4-avatar-4.png')}}" alt="decor" style="top: 58%; left: 108%;">
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    <!-- section content begin -->
    <section class="py-5 in-avo-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 text-center">
                    <h2>Get started with Hisa.</h2>
                    <p class="lead mb-4">Global access to financial markets from a single account</p>
                    <a href="#" class="btn btn-outline-secondary mb-2 mb-md-0">
                        <div class="d-flex align-items-center text-start">
                            <img src="{{asset('avo-assets/img/in-windows-icon.svg')}}" alt="icon" width="36" height="36">
                            <div>
                                <span class="h6">Download for</span><br>Microsoft Windows 11
                            </div>
                        </div>
                    </a>
                    <a href="#" class="btn btn-outline-secondary">
                        <div class="d-flex align-items-center text-start">
                            <img src="{{asset('avo-assets/img/in-apple-icon.svg')}}" alt="icon" width="29" height="36">
                            <div>
                                <span class="h6">Download for</span><br>macOS 
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    </main>
@endsection
@push('addon-style')

    <style>
        @media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;                            

        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}

.etfs{
    white-space: nowrap;
    overflow: hidden;

}
.etfs-content{
    animation: marquee 20s linear infinite forwards;
}


      @keyframes marquee {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(-100.6%);
        }
      }

    </style>
@endpush