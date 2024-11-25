<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTECT US</title>
    <!-- ********======(((   CSS  )))======******** -->
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
</head>

<body>
    <!-- ************======((( NAVBAR START)))======********** -->
    <nav class="navbar navbar-expand-lg  white-navbar fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand ps-0 ps-lg-4  me-0" href="#"><img src="{{ asset('assets-2/assets/images/logo/Logo-dark.svg') }}" class="brandImg " />
                <b>Study</b><span><b class="text-primary">Abroad</b></span><b>Navigator</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto nav-links align-items-center">
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " aria-current="page" href="./">Home
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="./course">Courses
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="./scholarship">Scholarship
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="./job">Jobs
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link active" href="{{ route('contact') }}">Contact
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    @if ($user === "")
                <li class="nav-item pe-2 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3 mb-3 mb-md-0" href="./login">Login</a>
                </li>
                <li class="nav-item pe-0 pe-lg-2">
                    <a class="nav-link btn btn-gradiant text-white px-3" href="./signup">Register</a>
                </li>
                
                <li class="Users-profile nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-end d-none d-sm-block" bis_skin_checked="1">
                      <p class="small mb-0">Guest</p>
                    </div>
                    <img src="{{asset('assets-2/assets/images/background-image/navbar-per.png')}}" class="ms-3" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="mb-2 p-2">
                      <a class="text-decoration-none d-flex" href="#">
                        <img src="{{asset('assets-2/assets/images/Adminpic1.png')}}" class="me-3" alt="">
                        <div class="text-start" bis_skin_checked="1">
                          <p class="x-small text-dark mb-0">Guest</p>
                          <p class="text-dark mb-0">Welcome</p>
                        </div>
                      </a>
                    </li>
                    @endif
                    @if($user)
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link " href="./wishlist">Wishlist
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    <li class="Users-profile nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-end d-none d-sm-block" bis_skin_checked="1">
                      <p class="small mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                    </div>
                    <img src="{{asset('assets-2/assets/images/background-image/navbar-per.png')}}" class="ms-3" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="mb-2 p-2">
                      <a class="text-decoration-none d-flex" href="#">
                        <img src="{{asset('assets-2/assets/images/Adminpic1.png')}}" class="me-3" alt="">
                        <div class="text-start" bis_skin_checked="1">
                          <p class="x-small text-dark mb-0">{{$user->first_name}} {{$user->last_name}}</p>
                          <p class="text-dark mb-0">Welcome</p>
                        </div>
                      </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="mb-2 px-3"><a class="dropdown-item  rounded-2" href="{{ route('profile.update', ['id' => $user->id]) }}">My Profile</a></li>
                    <li class="mb-2 px-3"><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="Page-heading-contact text-center">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-white text-uppercase">NEED HELP </h1>
                <p class="text-white text-uppercase mb-0 fs-1">We are here for you 24/7</p>
                <p class="text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet reprehenderit ratione ad
                    perspiciatis repudiandae iste ipsam temporibus sit quo! Incidunt, necessitatibus fugiat.
                </p>
            </div>
        </div>
    </div>

    <!--*********************************-->
    <div class="contactus-bg">
        <div class="container-xxl    ">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="{{asset('assets-3/images/aboutus-1st.png')}}" class="mt-5 object-fit-cover" alt="" />
                </div>
                <div class="col-lg-7 col-md-12 py-5 ps-4 ps-md-5">
                    <h4 class=" text-uppercase border-custom position-relative mb-4">About Rent a Property</h4>
                    <h1 class="text-uppercase font-family-extrabold"><b>Have <span class="text-primary font-family-bold"> done </span> some Cool Stuff
                            with common <span class="text-primary font-family-bold"> users </span></b></h1>
                    <p class="small mt-4">Our mission is to prioritize tenants' needs, offer a wide selection of rental properties, simplify the rental process, provide expert guidance and support, maintain transparent communication, deliver responsive service, and build long-term relationships. We are dedicated to helping tenants find their ideal rental properties and ensuring their rental experience is positive and rewarding.</p>
                    <p>Our <span class="text-primary "><i><b> 15 years’ experience </b></i></span>   providing top quality property management services and our primary focus is on tenants and their specific needs and preferences. </p>
                </div>
    
            </div>
        </div>
    </div>
    <!-- ************======(((ABOUT OWASOFT )))======********** -->
    <div class="contactus-bg">
        <div class="container-xxl justify-content-center align-items-center  pt-5">
            <div class="text-center pt-md-4">
                <h1 class="mb-0">
                    <span class="  mb-0"> Customer </span><span class="text-primary"><b> Service</b></span>
                </h1>
                <p class="mb-0 paragraph small">How can we help?</p>
                <div class="row py-5 g-5 w-100 mx-0">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card contact-card p-3 py-4">
                            <div class="card-body">
                                <img src="{{ asset('assets-2/assets/images/email.png') }}" alt="" />
                                <h6 class="card-subtitle my-3 pt-2  text-primary"><strong>Send us a message</strong>
                                </h6>
                                <p class="card-text paragraph">Contact our leasing consultant about your requirement and
                                    we'll reply you as soon as possible.</p>
                                <p class="card-text offer text-primary"><strong>info@gmail.com</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card contact-card p-3 py-4">
                            <div class="card-body">
                                <img src="{{ asset('assets-2/assets/images/PHONE.png') }}" alt="" />
                                <h6 class="card-subtitle my-3 pt-2  text-primary"><strong>Call us</strong></h6>
                                <p class="card-text paragraph">For anything urgent, you can call us 24/7 on a local or
                                    international phone number.</p>
                                <p class="card-text   text-primary"><strong>+92 333 3333 333</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card contact-card p-3 py-4">
                            <div class="card-body">
                                <img src="{{ asset('assets-2/assets/images/penthouse.png') }}" alt="" />
                                <h6 class="card-subtitle my-3 pt-2 text-primary"><strong>Contact the property</strong>
                                </h6>
                                <p class="card-text paragraph mb-4">For details about your stay, they usually know best.
                                </p>
                                <p class="card-text text-primary"><strong>Contact Property</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <!-- ************======(((ABOUT OWASOFT )))======********** -->
     <div class="col-lg-12 mt-4 mt-lg-0">
                <div class="bg-white rounded-2 card-Shadow">
                    <div class="border-bottom">
                        <div class="d-flex flex-wrap justify-content-between align-items-center px-4 py-3 gap-3">
                        <h1 class="mb-0">
                            <span class="  mb-0"> Guide </span><span class="text-primary"><b> :)</b></span>
                        </h1>
                        </div>
                    </div>

                    <div class="accordion accordion-design-2 mt-4 p-3" id="accordionExample2">
                        <div class="accordion-item rounded-1 border-1">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo-2-1" aria-expanded="false" aria-controls="collapseOne2-1">
                                    <span> How does it work? </span>
                                </button>
                            </h2>
                            <div id="collapsedemo-2-1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                <div class="accordion-body text-light-color">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-2" aria-expanded="false" aria-controls="collapseTwo2-2">
                                    <span> Do I need a designer to use Admin Theme ?</span>
                                </button>
                            </h2>
                            <div id="collapsedemo2-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                <div class="accordion-body text-light-color">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-3" aria-expanded="false" aria-controls="collapseThree2-3">
                                    <span> What do I need to do to start selling?</span>
                                </button>
                            </h2>
                            <div id="collapsedemo2-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                <div class="accordion-body text-light-color">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-4" aria-expanded="false" aria-controls="collapseThree2-4">
                                    <span> How much does Extended license cost?</span>
                                </button>
                            </h2>
                            <div id="collapsedemo2-4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                <div class="accordion-body text-light-color">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button rounded-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedemo2-5">
                                    <span> How much does Extended license cost?</span>
                                </button>
                            </h2>
                            <div id="collapsedemo2-5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                <div class="accordion-body text-light-color">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ************======(((  FOOTER START )))======********** -->
  <div class="container-fluid p-0 footer-large">
    <footer class="row pt-5 px-5 w-100 justify-content-between">
        <div class="col-md-4 col-sm-6 mb-3">
            <p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat molestiae corporis, magni maxime perferendis ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat molestiae corporis, magni maxime perferendis ducimus.</p>
            <ul class="list-unstyled d-flex flex-wrap gap-3 social-links mt-5">
                <li>
                    <a href="#" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/linkedin.svg#linkedin')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/facebook.svg#facebook')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/instagram-svg.svg#instagram')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/tiktok-svg.svg#tiktok')}}"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon p-3 h-100 d-flex">
                        <svg width="20" height="20">
                            <use href="{{asset('assets-2/assets/images/icons/youtube-svg.svg#youtube')}}"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="d-flex">
                <h4 class="text-white link-heading position-relative pb-3">Contact Info</h4>
            </div>
            <h5 class="text-white mt-4">
                <svg class="me-1" width="13" height="17">
                    <use href="{{asset('assets-2/assets/images/icons/Address.svg#address')}}"></use>
                </svg>
                Address
            </h5>
            <p class="text-white">Office Number S15 Gold Point Plaza Murree Road Rwp.</p>

            <h5 class="text-white mt-4">
                <svg class="me-1" width="17" height="17">
                    <use href="{{asset('assets-2/assets/images/icons/phone.svg#phone')}}"></use>
                </svg>
                Phone Number
            </h5>
            <p class="text-white">+92 333 33333333</p>

            <h5 class="text-white mt-4">
                <svg class="me-1" width="18" height="13">
                    <use href="{{asset('assets-2/assets/images/icons/email.svg#email')}}"></use>
                </svg>
                Email
            </h5>
            <p class="text-white">info@owasoft.com</p>
        </div>
    </footer>
    <div class="bg-black text-center py-2 footer-copyright"><a href="" class="text-decoration-none">StudyAbroad.com</a> 2023, All Rights Reserved.</div>
</div>

    <!-- ********======(((   JS DELIVERY   )))======******** -->
    <script src="{{asset('assets-2/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/main.js')}}"></script>
</body>
</html>