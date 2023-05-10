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



                     




    <section id="slideshow" class="carousel slide py-5">
        <div class="carousel-inner">
            <div class="container py-4">

        
        
                <div class="row">
                    <div class="col-md-6 d-flex flex-column" >
                        <h1 class="text-black display-4">Borderless </h1>
                        <h1 class="text-black display-4">Investments </h1>

                        <h1 class="text-black display-4">For </h1>

                        <h1 class="text-black display-4">Africa </h1>

                        <div class="mb-5 py-10">

                            {{-- <a href="#" class="btn btn-warning">
                                <div class="d-flex align-items-center text-start">
                                    <img src="{{asset('assets/img/appstore.png')}}" alt="icon" width="30" height="30">
                                    <div>
                                        <span class="text-white">Download On The</span><br><span class="h5 text-white">App Store</span>
                                    </div>
                                </div>
                            </a> --}}
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="#"><img src="{{asset('avo-assets/img/playstore.png')}}" alt="icon" style="max-width: 120px;max-height: 50px"></a>
                                </div>
                                <div class="col-sm-3 mx-5">
                                    <a href="#"><img src="{{asset('avo-assets/img/appstore.png')}}" alt="icon" style="max-width: 120px;max-height: 50px"></a>
                                </div>
                            </div>
                            {{-- <a href="#" class="btn btn-primary mb-2 mb-md-0">
                                <div class="d-flex align-items-center text-start">
                                    <img src="{{asset('assets/img/playstore.png')}}" alt="icon" width="36" height="20">
                                    <div>
                                        Get It On <br><span class="h4 text-white">Playstore</span>
                                    </div>
                                </div>
                            </a> --}}
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

    <section class="pt-1 pb-5 pt-md-2 pb-md-5 py-lg-5 in-avo-3">

        <div class="col-md-12 d-flex flex-column align-items-center">
            <h1 class="display-3 text-black">Pick any asset you like from a wide</h1>
            <h1 class="display-3 text-black">Range of <span class="text-primary" >US</span> and <span class="text-primary" >Kenyan Stocks</span> </h1>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                             </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                             </div>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
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
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                                </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                             </div>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                           </div>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                           </div>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                           </div>
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
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                            </div>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img height="50" width="50" src="{{ asset('assets/img/equity.png')}}"/>                           </div>
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
    {{-- <section class="py-5 in-avo-2">
        <div class="container">
            <div class="row row-cols-md-3 row-cols-lg-4 text-center mb-5">
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count text-black" data-counter-end="183092">183092</span><span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Daily trades</p>
                </div>
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count text-black" data-counter-end="364887">364887</span><span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Clients</p>
                </div>
                <div class="col d-md-none d-lg-block">
                    <h1 class="mb-0">
                        <span class="count text-black" data-counter-end="96">96</span> billion<span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Asset management</p>
                </div>
                <div class="col">
                    <h1 class="mb-0">
                        <span class="count text-black" data-counter-end="23">23</span> billion<span class="text-primary">+</span>
                    </h1>
                    <p class="text-muted">Daily trade volume</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex align-items-center text-center mt-md-4 gy-3 gy-md-0">
                <div class="col">
                    <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 mb-2">
                        <img src="{{asset('avo-assets/img/in-avo-2-icon-1.png')}}" alt="icon" width="38" height="38">
                    </div>
                    <h4 class="text-black">Various assets/</h4>
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
                    <h4 class="text-black">Enhanced tools</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elited do eiusmod tempo officios incididunt.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- section content end -->
    <!-- section content begin -->



    <div class="uk-section in-equity-9">
        <div class="uk-container uk-margin-medium-top uk-margin-bottom">
            <div class="uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
                <div>
                    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="{{asset('alt-assets/img/in-equity-9-bg-1.png')}}" data-uk-img>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <i class="fas fa-landmark fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="uk-margin-remove">Fully regulated</h4>
                            </div>
                        </div>
                        <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="#" class="uk-button uk-button-text uk-border-rounded">Learn more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="{{asset('alt-assets/img/in-equity-9-bg-2.png')}}" data-uk-img>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="uk-margin-remove">Expert service</h4>
                            </div>
                        </div>
                        <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="#" class="uk-button uk-button-text uk-border-rounded">Learn more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-margin-top">
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section in-equity-16">
        <div class="uk-container uk-margin-top uk-margin-large-bottom">
            <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
                <div class="uk-width-5-6@m uk-text-center">
                    <h1 class="uk-margin-remove"><span class="in-highlight">Learn</span> to trade at Hisa</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">Learn how the markets work with our free education tools.</p>
                    <div class="uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-large-top uk-margin-medium-bottom" data-uk-grid>
                        <div>
                            <div href="#" class="uk-card uk-card-default uk-card-body">
                                <i class="fas fa-clipboard-list uk-margin-small-right"></i>
                                <h5>Trader's glossary</h5>
                                <p class="uk-text-small uk-text-muted py-2">A-Z trading terms</p>
                            </div>
                        </div>
                        <div>
                            <div href="#" class="uk-card uk-card-default uk-card-body">
                                <i class="fas fa-video uk-margin-small-right"></i>
                                <h5>Tutorial videos</h5>
                                <p class="uk-text-small uk-text-muted py-2">Free learning courses</p>
                            </div>
                        </div>
                        <div>
                            <div href="#" class="uk-card uk-card-default uk-card-body">
                                <i class="fas fa-file-pdf uk-margin-small-right"></i>
                                <h5>E-Book products</h5>
                                <p class="uk-text-small uk-text-muted py-2">Build your own strategies</p>
                            </div>
                        </div>
                        <div>
                            <div href="#" class="uk-card uk-card-default uk-card-body">
                                <i class="fas fa-microphone-alt uk-margin-small-right"></i>
                                <h5>Live commentary</h5>
                                <p class="uk-text-small uk-text-muted py-2">Trade on the news</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                <div class="uk-width-3-5@m">
                    <div class="in-equity-video">
                        <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif" data-src="img/in-equity-16-image.jpg" alt="sample-images" width="533" height="355" data-uk-img>
                        <div class="uk-position-center">
                            <a href="#link" data-uk-toggle>
                                <div class="in-play-button"></div>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="uk-flex-top" data-uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <h3>What you will learn</h3>
                    <ul class="uk-list uk-list-bullet in-list-check">
                        <li>Introduction to Financial Trading</li>
                        <li>Technical Analysis</li>
                        <li>Fundamental Analysis</li>
                        <li>When to Enter & Exit Trades</li>
                        <li>How to Manage Risk</li>
                        <li>Trading Psychology</li>
                    </ul>
                    <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" href="#">Open demo account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="uk-section uk-padding-remove-vertical in-equity-12">
        <div class="uk-container uk-margin-bottom">
            <div class="uk-width-1-1@m">
                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-medium uk-background-contain uk-background-top-center" data-src="img/in-equity-12-bg.png" data-uk-img>
                    <div class="uk-grid-small uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <h2>Begin trading in three steps</h2>
                        </div>
                        <div class="uk-flex uk-flex-right uk-flex-middle button-app">
                            <a href="#"><img src="{{asset('alt-assets/img/in-app-store.svg')}}" data-src="img/in-app-store.svg" alt="app-store" data-uk-img data-width data-height></a>
                            <a href="#" class="uk-margin-left"><img src="{{asset('alt-assets/img/in-google-play.svg')}}" data-src="img/in-google-play.svg" alt="google-play" data-uk-img data-width data-height></a>
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-left">Open account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                        <div class="uk-width-expand@m">
                            <div class="uk-flex uk-flex-left uk-margin-top in-steps">
                                <div class="uk-margin-right">
                                    <span class="in-icon-wrap circle">1</span>
                                </div>
                                <div class="uk-margin-right">
                                    <h5 class="uk-margin-remove">Register</h5>
                                    <p class="uk-margin-small-top">Choose an account type and submit your application</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left uk-margin-top in-steps">
                                <div class="uk-margin-right">
                                    <span class="in-icon-wrap circle">2</span>
                                </div>
                                <div class="uk-margin-right">
                                    <h5 class="uk-margin-remove">Fund</h5>
                                    <p class="uk-margin-small-top">Fund your account using a wide range of funding methods.</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left uk-margin-top in-steps">
                                <div class="uk-margin-right">
                                    <span class="in-icon-wrap circle">3</span>
                                </div>
                                <div class="uk-margin-right">
                                    <h5 class="uk-margin-remove">Trade</h5>
                                    <p class="uk-margin-small-top">Access 180+ instruments across all asset classes on App</p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-3-5@m">
                            <img class="in-img-mockup" src="{{asset('alt-assets/img/in-equity-12-mockup.png')}}" data-src="" alt="mockup" width="643" data-height data-uk-img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="uk-section uk-section-primary uk-preserve-color in-equity-14 uk-background-contain uk-background-top-center" data-src="{{asset('alt-assets/img/in-equity-14-bg.svg')}}" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-child-width-1-2@m uk-flex uk-flex-middle" data-uk-grid>
                <div>
                    <div class="uk-flex uk-flex-left uk-flex-middle">
                        <div class="uk-margin-right in-award-logo">
                            <img src="img/in-lazy.gif" data-src="{{asset('alt-assets/img/in-equity-5-award-3.svg')}}" alt="award" width="128" data-height data-uk-img>
                        </div>
                        <div class="in-award-badge">
                            <h3 class="uk-margin-remove">Traders #1 Choice</h3>
                            <h4 class="uk-margin-remove-top uk-margin-small-bottom uk-text-uppercase in-heading-thin">True ECN Account</h4>
                            <p class="uk-text-small uk-margin-remove uk-visible@m">Voted by industry professionals</p>
                        </div>
                    </div>
                </div>
                <div class="uk-flex uk-flex-right uk-flex-middle right-content">
                    <ul class="uk-list in-list-check uk-margin-remove-bottom uk-margin-right">
                        <li>Zero Commissions</li>
                        <li>Zero Deposit Fees</li>
                    </ul>
                    <span class="uk-margin-large-left">
                        <a href="#" class="uk-button uk-button-secondary uk-button-large uk-border-rounded">Open your account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>




    {{-- <section class="pb-5 in-avo-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-12 col-lg-7">
                        <h2 class="text-black">Getting started with shares in Kenya on the <span class="text-highlight text-black">Hisa App</span>  </h2>

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



    <!-- second embed section -->

    <section class="pb-5 in-avo-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-12 col-lg-7">
                        <h2 class="text-black"><span class="text-highlight text-black">Hisa Webinar:</span> Investment Strategies  </h2>

                    </div>
                    <div class="card border-0 bg-hisa">

                        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">

                            <div class="ratio ratio-16x9">
                                <iframe width="738" height="415" src="https://www.youtube.com/embed/e8khYuLINP8" title="Hisa Webinar: Investment Strategies" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </section>    --}}




    <!-- section content end -->
    <!-- section content begin -->

    
    {{-- <section class="pb-5 in-avo-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 position-relative">
                    <div class="card card-body text-center">
                        <div id="testimoni" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <h2>Hisa is my first choice for invest”</h2>
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
    </section> --}}
    <!-- section content end -->
    <!-- section content begin -->
    <section class="py-5 in-avo-5 bg-white">
        <div class="row bg-white">
            <div class="col-md-6">
                <img src="{{asset('assets/img/home-ard-hisa.png')}}" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="display-4">
                  Free Transfers   
                </h2>
                <h2 class="display-4">
                    & Low 
                </h2>
                <h2 class="display-4">
                    Cross-border Rates
                </h2>
                <p>More money stays in your pocket, and more money arrives in theirs.


                </p>
            </div>
        </div>
        
        {{-- <div class="row bg-white">

            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="display-4">
                    As Fast   
                </h2>
                <h2 class="display-4">
                    & Easy 
                </h2>
                <h2 class="display-4">
                    as Sending a Text
                </h2>
                <p>More money stays in your pocket, and more money arrives in theirs.
                </p>
            </div>

            <div class="col-md-6">
                <img src="{{asset('assets/img/home-ard-hisa-1.png')}}" class="img-fluid w-100 h-100" alt="">
            </div>
        </div> --}}

    </section>


    <div class="uk-section uk-section-primary uk-preserve-color in-equity-14 uk-background-contain uk-background-top-center" data-src="{{asset('alt-assets/img/in-equity-14-bg.svg')}}" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-child-width-1-2@m uk-flex uk-flex-middle" data-uk-grid>
                <div>
                    <div class="uk-flex uk-flex-left uk-flex-middle">
                        <div class="uk-margin-right in-award-logo">
                            <img src="img/in-lazy.gif" data-src="{{asset('alt-assets/img/in-equity-5-award-3.svg')}}" alt="award" width="128" data-height data-uk-img>
                        </div>
                        <div class="in-award-badge">
                            <h3 class="uk-margin-remove">Traders #1 Choice</h3>
                            <h4 class="uk-margin-remove-top uk-margin-small-bottom uk-text-uppercase in-heading-thin">True ECN Account</h4>
                            <p class="uk-text-small uk-margin-remove uk-visible@m">Voted by industry professionals</p>
                        </div>
                    </div>
                </div>
                <div class="uk-flex uk-flex-right uk-flex-middle right-content">
                    <ul class="uk-list in-list-check uk-margin-remove-bottom uk-margin-right">
                        <li>Zero Commissions</li>
                        <li>Zero Deposit Fees</li>
                    </ul>
                    <span class="uk-margin-large-left">
                        <a href="#" class="uk-button uk-button-secondary uk-button-large uk-border-rounded">Open your account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>



    <section class="pt-1 pb-5 pt-md-2 pb-md-5 py-lg-5 in-avo-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5 position-relative">
                    <img class="img-decor" src="{{asset('avo-assets/img/in-avo-3-decor-1.svg')}}" alt="decor">
                    {{-- <div class="card card-body card-tv">
                        <div id="tradingview-widget"></div>
                    </div> --}}
                </div>
                <div class="col-md-12 col-lg-7">
                    <h2>Find the products that <span class="text-highlight">match your needs</span> and desired risk level.</h2>
                    <p>Sed ut perspiciatis unde omnis natus error voluptatem accusantium doloreme laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-1 mt-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-yellow mb-0">
                                        EQ
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Stocks</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-green mb-0">
                                        ET
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">ETFs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-red mb-0">
                                        CM
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Commodities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-blue mb-0">
                                        MF
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Mutual funds</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-grey mb-0">
                                        FX
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Forex</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-lightgreen mb-0">
                                        FX
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Bond</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-purple mb-0">
                                        CT
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Crypto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-orange mb-0">
                                        LO
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Listed options</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="icon-wrap icon-wrap-micro bg-lightgrey mb-0">
                                        FU
                                    </div>
                                    <p class="fw-bold small text-primary mb-0">Futures</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-link link-primary text-decoration-none my-2 px-0">See more instruments<i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    
    
    <section class="py-5 in-avo-17">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 position-relative">
                    <h2 class="text-center mb-1">Market analysis and trade inspiration.</h2>
                    <p class="lead text-muted text-center">Get news, commentary and actionable trade ideas from the expert analysts.</p>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gx-2 gy-2 mt-2 mb-3">
                        <div class="col-md-6 col-lg-6">
                            <div class="card card-link">
                                <a class="link-light" href="#">
                                    <img src="{{asset('avo-assets/img/in-avo-17-image-1.jpg')}}" class="img-fluid rounded-1" alt="image">
                                    <div class="card-img-overlay">
                                        <h4 class="text-white mb-0">News and inspiration</h4>
                                        <p class="text-white text-opacity-75 mb-0">Economic news and prospect</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card card-link">
                                <a class="link-light" href="#">
                                    <img src="{{asset('avo-assets/img/in-avo-17-image-2.jpg')}}" class="img-fluid rounded-1" alt="image">
                                    <div class="card-img-overlay">
                                        <h4 class="text-white mb-0">Insight from experts</h4>
                                        <p class="text-white text-opacity-75 mb-0">Plan and trading strategy</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-secondary card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="icon-wrap icon-wrap-micro bg-blue mb-0">
                                        FX
                                    </div>
                                    <h6 class="text-white mb-0">Forex</h6>
                                </div>
                                <p class="small text-white">Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="link-light text-decoration-none"><i class="fas fa-arrow-right fa-sm"></i></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-secondary card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="icon-wrap icon-wrap-micro bg-orange mb-0">
                                        CM
                                    </div>
                                    <h6 class="text-white mb-0">Commodities</h6>
                                </div>
                                <p class="small text-white">Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="link-light text-decoration-none"><i class="fas fa-arrow-right fa-sm"></i></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-secondary card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="icon-wrap icon-wrap-micro bg-green mb-0">
                                        EQ
                                    </div>
                                    <h6 class="text-white mb-0">Stocks</h6>
                                </div>
                                <p class="small text-white">Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="link-light text-decoration-none"><i class="fas fa-arrow-right fa-sm"></i></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-secondary card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="icon-wrap icon-wrap-micro bg-grey mb-0">
                                        BO
                                    </div>
                                    <h6 class="text-white mb-0">Bonds</h6>
                                </div>
                                <p class="small text-white">Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="link-light text-decoration-none"><i class="fas fa-arrow-right fa-sm"></i></a>
                            </div>
                        </div>
                    </div>
                    <img class="position-absolute card-decor animate-5" src="{{asset('avo-assets/img/in-avo-4-decor-1.svg')}}" alt="decor" style="top: 64%; left: -5%;">
                    <img class="position-absolute card-decor animate-6" src="{{asset('avo-assets/img/in-avo-4-decor-2.svg')}}" alt="decor" style="top: 0%; left: 10%;">
                    <img class="position-absolute card-decor animate-7" src="{{asset('avo-assets/img/in-avo-4-decor-3.svg')}}" alt="decor" style="top: 40%; left: 96%;">
                    <img class="position-absolute card-decor animate-6" src="{{asset('avo-assets/img/in-avo-4-decor-4.svg')}}" alt="decor" style="top: 98%; left: 86.5%;">
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    <!-- section content begin -->
    {{-- <section class="py-5 in-avo-18 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <h2>Fast and reliable methods.</h2>
                    <p class="lead mb-5">At the time of deposit and also withdrawal</p>
                    <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6 gx-0">
                        <div class="col text-center border-bottom border-bottom-md-0 border-end-md">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-1.svg')}}" alt="payment-logo" width="111" height="23">
                        </div>
                        <div class="col text-center border-bottom border-bottom-md-0 border-end-md">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-2.svg')}}" alt="payment-logo" width="111" height="34">
                        </div>
                        <div class="col text-center border-bottom border-bottom-md-0 border-end-md">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-3.svg')}}" alt="payment-logo" width="111" height="34">
                        </div>
                        <div class="col text-center border-bottom border-end-lg border-bottom-md-0">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-4.svg')}}" alt="payment-logo" width="111" height="34">
                        </div>
                        <div class="col text-center border-bottom border-bottom-lg-0 border-end-lg d-md-none d-lg-block">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-5.svg')}}" alt="payment-logo" width="111" height="34">
                        </div>
                        <div class="col text-center d-md-none d-lg-block">
                            <img class="opacity-75 my-2 my-md-1" src="{{asset('avo-assets/img/in-avo-18-icon-6.svg')}}" alt="payment-logo" width="112" height="35">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="uk-section uk-padding-remove-vertical in-equity-10">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@m uk-flex uk-flex-middle uk-flex-center@s">
                                <h4>We are in the press</h4>
                            </div>
                            <div class="uk-width-expand@m">
                                <div class="uk-grid-medium uk-child-width-1-5@m uk-child-width-1-2@s uk-text-center in-client-logo-3" data-uk-grid>
                                    <div class="uk-tile uk-tile-default">
                                        <img class="uk-margin-remove" src="{{asset('alt-assets/img/in-equity-press-1.svg')}}" alt="equity-press" width="170" height="68">
                                    </div>
                                    <div class="uk-tile uk-tile-default">
                                        <img class="uk-margin-remove" src="{{asset('alt-assets/img/in-equity-press-2.svg')}}" alt="equity-press" width="170" height="68">
                                    </div>
                                    <div class="uk-tile uk-tile-default">
                                        <img class="uk-margin-remove" src="{{asset('alt-assets/img/in-equity-press-3.svg')}}" alt="equity-press" width="170" height="68">
                                    </div>
                                    <div class="uk-tile uk-tile-default">
                                        <img class="uk-margin-remove" src="{{asset('alt-assets/img/in-equity-press-4.svg')}}" alt="equity-press" width="170" height="68">
                                    </div>
                                    <div class="uk-tile uk-tile-default uk-visible@m">
                                        <img class="uk-margin-remove" src="{{asset('alt-assets/img/in-equity-press-5.svg')}}" alt="equity-press" width="170" height="68">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
@push('addon-style')

    <style>


.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}

.etfs{
    white-space: nowrap;
    overflow: hidden;

}
.etfs-content{
    animation: marquee 40s linear infinite forwards;
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