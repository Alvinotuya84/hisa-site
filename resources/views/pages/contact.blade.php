@extends('layouts.app') @section('content')

{{-- <section class="section-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative text-center">
                <h1 class="mt-0 mb-1">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </nav>
                <img class="position-absolute card-decor animate-5" src="img/in-avo-4-decor-1.svg" alt="decor" style="top: 25%; left: 5%;">
                <img class="position-absolute card-decor animate-6" src="img/in-avo-4-decor-2.svg" alt="decor" style="top: -22%; left: 30%;">
                <img class="position-absolute card-decor animate-7" src="img/in-avo-4-decor-3.svg" alt="decor" style="top: -16%; left: 72%;">
                <img class="position-absolute card-decor animate-6" src="img/in-avo-4-decor-4.svg" alt="decor" style="top: 89%; left: 94%;">
            </div>
        </div>
    </div>
</section> --}}
<main>
    <!-- section content begin -->

    
    <section class="py-5">
        <div class="container">
            <div class="row d-md-flex justify-content-md-center gx-lg-5">
                <div class="col-12 col-md-10 col-lg-6 pe-lg-5">
                    <h4 class="text-secondary mb-0">Have a questions?</h4>
                  <h1 class="mb-0">Let's <span class="text-highlight">get in touch</span></h1>
                    <form id="contact-form" class="row g-1 mt-2" novalidate="">
                        <div class="col-6">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Full name" aria-label="Full name" required="">
                        </div>
                        <div class="col-6">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email address" aria-label="Email address" required="">
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" aria-label="Subject" required="">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" required=""></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary rounded-pill" id="sendemail" type="submit" name="submit">Send Message</button>
                        </div>
                    </form>
                    <div class="card mb-4 mb-md-4 mb-lg-0 mt-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="me-1 icon-wrap icon-wrap-small bg-primary rounded-circle flex-shrink-0">
                                    <i class="fas fa-map-marker-alt fa-sm text-primary"></i>
                                </div>                        
                                <p class="mb-0">304, Mandera Road</p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 mt-1 gx-lg-0">
                                <div class="col mb-2 mb-md-0 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                        <div class="me-1 icon-wrap icon-wrap-small bg-primary rounded-circle flex-shrink-0">
                                            <i class="fas fa-envelope fa-sm text-primary"></i>
                                        </div>                        
                                        <p class="mb-0">hello@hisa.co</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <div class="me-1 icon-wrap icon-wrap-small bg-primary rounded-circle flex-shrink-0">
                                            <i class="fas fa-phone fa-sm text-primary"></i>
                                        </div>                        
                                        <p class="mb-0">(888)234-5686</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 d-flex">
                    <iframe class="bg-light rounded-1 gmap w-100 h-300 h-md-400 h-lg-600" src="https://maps.google.com/maps?q=304,%20Mandera%20Road&t=&z=13&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- success notification begin -->
        <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 2">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body text-primary">
                    <i class="fas fa-check-circle me-1"></i>Your message has been sent successfully. Thank you!
                </div>
            </div>
        </div>
        <!-- success notification end -->
    </section>
    <!-- section content end -->
    </main>
@endsection
