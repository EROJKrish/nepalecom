<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Nepal Ecom Concern</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>
<body>
    <header>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->
    
        <!-- Topbar Start -->
        <div class="container-fluid bg-white py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-dark-50"><a href="#"><i class="fas fa-phone me-2 text-secondary"></i></a>+977 985-7026383  </small>
                        <small class="me-3 text-dark-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Butwal-6, Maitripath, Rupandehi  </small>
                        <small class="me-3 text-dark-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>info@nepalecom.com.np  </small>
                    </div>
                {{-- <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div> --}}
                    <div class="top-link">
                        <a href="https://www.facebook.com/profile.php?id=100076836553020" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        {{-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a> --}}
                        <a href="https://www.instagram.com/nepalecomconcern/" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        {{-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/img/logo2.png')}}" alt="" height="50px"></a>
                        </div>
                        {{-- <h1 class="text-white fw-bold d-block">Nepal<span class="text-secondary">Ecom Concern</span> </h1> --}}
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="{{url('/')}}" class="nav-item nav-link active text-secondary">Home</a>
                            <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                            <a href="{{url('/service')}}" class="nav-item nav-link">Services</a>
                            <a href="{{url('/product')}}" class="nav-item nav-link">Products</a>
                            {{-- <a href="blog.html" class="nav-item nav-link">Blogs</a> --}}
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                     <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> --}}
                            <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                     <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">For Quick Support</span>
                            <span class="text-warning">Call: +977 985-7039298</span>
                        </div> 
                        {{-- <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href=""><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    </header>
  <main>
    @yield('content')
  </main>
     <!-- Footer Start -->
     <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block">Nepal<span class="text-secondary"> Ecom Concern</span> </h1>
                    </a>
                    <p class="mt-4 text-light">At Nepal Ecom Concern, we specialize in delivering cutting-edge IT hardware and software solutions tailored to meet the evolving needs of modern businesses.</p>
                    <div class="d-flex hightech-link">
                        <a href="https://www.facebook.com/profile.php?id=100076836553020" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                        {{-- <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a> --}}
                        <a href="https://www.instagram.com/nepalecomconcern/" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                        {{-- <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Short Link</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="{{url('/about')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                        <a href="{{url('/contact')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                        <a href="{{url('/service')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Services</a>
                        <a href="{{url('/product')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Products</a>
                        {{-- <a href="{{url('/blog')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="{{url('/contact')}}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Support</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FAQs</a>
                        {{-- <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Butwal-6, Maitripath, Rupandehi</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +977 985-7026383</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@nepalecom.com.np</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Nepal E-Com Concern</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light">Designed By<a href="https://beyondtechnepal.com" class="text-secondary"> Beyond Tech Nepal</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>