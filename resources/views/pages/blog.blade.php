@extends('layouts.app') @section('content')
<main data-title="blog">
    <!-- section content begin -->
    <div class="py-5">
        <div class="container">
            <div class="row gy-3 gy-lg-0">
                <div class="col-md-12 col-lg-8">
                    <article class="card mb-4">
                        <img src="{{asset('avo-assets/img/user/image-featured-a4DfvV.jpg')}}" class="card-img-top" alt="The typical U.S. household is spending $445 more a month due to inflation">
                        <div class="card-body blog-card p-3 p-md-4">
                            <h3>
                                <a href="blog/the-typical-us-household-is-spending-445-more-a.html" class="link-dark text-decoration-none">The typical U.S. household is spending $445 more a month due to inflation</a>
                            </h3>
                            <p>Inflation is causing American households to spend $445 more per month buying the same items they did a year ago, according to an estimate from Moody’s Analytics.</p>
                            <div class="blog-author d-flex align-items-center">
                                <img class="rounded-circle me-1" src="{{asset('avo-assets/img/user/author-85z9UC.jpg')}}" alt="author" width="32" height="32">
                                <small class="text-muted">
                                    Warren Wong<span class="mx-1">•</span>
                                </small>
                                <small class="text-muted">
                                    December 29, 2022
                                </small>
                            </div>
                        </div>
                        <div class="card-footer blog-footer d-flex justify-content-between align-items-center px-3 px-md-4 py-2">
                            <span class="badge bg-primary">Investing</span>
                            <a href="blog/the-typical-us-household-is-spending-445-more-a.html" class="btn btn-link link-primary text-decoration-none p-0">Read more<i class="fas fa-arrow-right fa-sm ms-1"></i></a>
                        </div>
                    </article>
                    <article class="card mb-4">
                        <div class="card-body blog-card p-3 p-md-4">
                            <h3>
                                <a href="blog/biden-and-harris-celebrate-kwanzaa-in-social-media.html" class="link-dark text-decoration-none">Biden and Harris celebrate Kwanzaa in social media posts</a>
                            </h3>
                            <p>The White House celebrated Kwanzaa in a pair of pre-recorded videos posted to Twitter on Monday, marking the seven-day non-denominational holiday aimed at honoring African Americans’ ancestral roots.</p>
                            <div class="blog-author d-flex align-items-center">
                                <img class="rounded-circle me-1" src="{{asset('avo-assets/img/user/author-85z9UC.jpg')}}" alt="author" width="32" height="32">
                                <small class="text-muted">
                                    Warren Wong<span class="mx-1">•</span>
                                </small>
                                <small class="text-muted">
                                    December 29, 2022
                                </small>
                            </div>
                        </div>
                        <div class="card-footer blog-footer d-flex justify-content-between align-items-center px-3 px-md-4 py-2">
                            <span class="badge bg-primary">Politics</span>
                            <a href="blog/biden-and-harris-celebrate-kwanzaa-in-social-media.html" class="btn btn-link link-primary text-decoration-none p-0">Read more<i class="fas fa-arrow-right fa-sm ms-1"></i></a>
                        </div>
                    </article>
                    <article class="card mb-4">
                        <div class="card-body blog-card p-3 p-md-4">
                            <h3>
                                <a href="blog/amazons-started-to-deliver-orders-by-drones-in-california.html" class="link-dark text-decoration-none">Amazon’s started to deliver orders by drones in California and Texas</a>
                            </h3>
                            <p>The retail giant already flew out some packages to customers in Northern California and a medium-sized Texan city in the run-up to Christmas.</p>
                            <div class="blog-author d-flex align-items-center">
                                <img class="rounded-circle me-1" src="{{asset('avo-assets/img/user/author-85z9UC.jpg')}}" alt="author" width="32" height="32">
                                <small class="text-muted">
                                    Warren Wong<span class="mx-1">•</span>
                                </small>
                                <small class="text-muted">
                                    December 29, 2022
                                </small>
                            </div>
                        </div>
                        <div class="card-footer blog-footer d-flex justify-content-between align-items-center px-3 px-md-4 py-2">
                            <span class="badge bg-primary">Technology</span>
                            <a href="blog/amazons-started-to-deliver-orders-by-drones-in-california.html" class="btn btn-link link-primary text-decoration-none p-0">Read more<i class="fas fa-arrow-right fa-sm ms-1"></i></a>
                        </div>
                    </article>
                    <!-- pagination begin -->
                    <ul class="pagination justify-content-center"></ul>
                    <!-- pagination end -->
                </div>
                <div class="col-md-12 col-lg-4 mt-md-3 mt-lg-0">
                    <!-- widget search begin -->
                    <aside class="mb-4">
                        <form name="blog-search" class="needs-validation" novalidate>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search here..." required>
                                <button class="btn btn-primary px-2" type="submit"><i class="fas fa-magnifying-glass fa-sm"></i></button>
                            </div>
                        </form>
                    </aside>
                    <!-- widget search end -->
                    <!-- widget categories begin -->
                    <aside class="mb-4">
                        <div class="card">
                            <div class="card-body ps-4 pe-4 pb-4">
                                <h5 class="fw-bold">Categories</h5>
                                <ul class="widget-categories list-unstyled lh-lg mb-n1"></ul>
                            </div>
                        </div>
                    </aside>
                    <!-- widget categories end -->
                    <!-- widget popular begin -->
                    <aside class="mb-4">
                        <div class="card">
                            <div class="card-body ps-4 pe-4 pb-4">
                                <h5 class="fw-bold">Latest News</h5>
                                <ul class="widget-latest list-group list-group-flush mb-n3"></ul>   
                            </div>
                        </div>
                    </aside>
                    <!-- widget popular end -->
                    <!-- widget tags begin -->
                    <aside class="mb-4">
                        <div class="card">
                            <div class="card-body ps-4 pe-4 pb-4">
                                <h5 class="fw-bold">Tags</h5>
                                <div class="widget-tag"></div>
                            </div>
                        </div>
                    </aside>
                    <!-- widget tags end -->
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection