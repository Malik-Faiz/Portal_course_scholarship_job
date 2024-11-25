<!DOCTYPE html>
<html lang="en">

<head>
    <title>Job</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets-2/assets/css/select2.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    .heart-button {
            background-color: #f30a11; /* Set background color to orange */
            border-color: red; /* Set border color to orange */
            color: white; /* Set text color to white */
        }
    .heart-button:hover {
            background-color: white; /* Change background color on hover */
            border-color: red; /* Change border color on hover */
            color: red; /* Set text color to white */

        }
    </style>
</head>

<body>
@if(session('success'))
        <script>
            // JavaScript code to show the alert
            window.onload = function() {
                alert("{{ session('success') }}");
            };
        </script>
    @endif
    <!-- ************======((( NAVBAR START)))======********** -->
    <nav class="navbar navbar-expand-lg  white-navbar fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand ps-0 ps-lg-4  me-0" href="#"><img src="{{asset('assets-2/assets/images/logo/Logo-dark.svg')}}" class="brandImg " />
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
                        <a class="nav-link active" href="./job">Jobs
                            <span class="bottom-border"></span>
                        </a>
                    </li>
                    
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link" href="./contact">Contact
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
                        <a class="nav-link" href="./wishlist">Wishlist
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    

    <!-- ************======((( TABS FORMS)))======********** -->
    
    <div class="container-xl pb-6 property_ads">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <input type="text" id="courseSearch" class="form-control mb-3" placeholder="Search for jobs..." onkeyup="filterCourses()">
            </div>
        </div>
    
        @foreach($job as $index => $job)
        <div class="bg-gradient pb-4 ">
   
    
        <div class="container-xl pb-4 property_ads row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="card mb-1 border-0">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div id="carouselExampleIndicators1" class="carousel slide caruselSlides">
                                            
                                        
                                            <div class="carousel-inner rounded-start">
                                                <div class="carousel-item active property-images">
                                                    <img src="{{asset($job->job_image)}}"
                                                        class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 250px;" />
                                                    <div class="shadow-overlay"></div>
                                                </div>
                                               
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <div class="">
                                                    <h4 class="card-title mb-2 text-truncate">{{$job->job_name}}</h4>
                                                    <p class="small mb-0 text-gray text-truncate">
                                                        <span><img class="me-2" src="{{asset('assets-2/assets/images/icons/location.png')}}"
                                                                alt="" /></span>{{$job->job_location}}
                                                    </p>
                                                </div>
                                                <div class="text-end">
                                                @if ($user)
                                                    <div>
                                                        <form action="{{ route('wishlistjobadd') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                            <button type="submit" class="btn heart-button">
                                                                <i class="fas fa-heart"></i> <!-- Assuming you are using Font Awesome -->      
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                                @if ($user==="")
                                                    <div>
                                                        <a class="btn heart-button" href="{{route('index')}}">
                                                            <i class="fas fa-home"></i> <!-- Assuming you are using Font Awesome -->
                                                        </a>
                                                    </div>
                                                @endif
                                             </div>
                                            </div>
                                            <div class="card-text border-bottom border-top my-3">
                                                <div class="d-flex align-items-center justify-content-between py-2">
                                                    <div
                                                        class="text-center d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                                        <svg class="" width="20" height="16" viewBox="0 0 20 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M10.0005 2.50146C10.0786 2.50146 10.1567 2.51396 10.2317 2.54209L17.0442 5.00146L10.2317 7.46084C10.1567 7.48896 10.0786 7.50146 10.0005 7.50146C9.92236 7.50146 9.84423 7.48896 9.76923 7.46084L5.77861 6.02022L10.1786 4.37021C10.438 4.27334 10.5692 3.98584 10.4724 3.72646C10.3755 3.46709 10.088 3.33584 9.82861 3.43271L4.84111 5.30147C4.67861 5.36397 4.51923 5.43271 4.36298 5.50771L2.95986 5.00146L9.77236 2.54209C9.84736 2.51396 9.92548 2.50146 10.0036 2.50146H10.0005ZM0.494231 5.70772L2.91298 6.57959C2.06298 7.47646 1.54736 8.66397 1.50361 9.94522C1.50048 9.96397 1.50048 9.98271 1.50048 10.0015C1.50048 10.889 1.16298 11.8077 0.803606 12.5265C0.600481 12.9327 0.369231 13.3327 0.100481 13.7015C0.000481009 13.8358 -0.027644 14.0108 0.028606 14.1702C0.084856 14.3296 0.216106 14.4483 0.378606 14.489L2.37861 14.989C2.50986 15.0233 2.65048 14.9983 2.76611 14.9265C2.88173 14.8546 2.96298 14.7358 2.98798 14.6015C3.25673 13.264 3.12236 12.064 2.92236 11.2046C2.82236 10.7671 2.68798 10.3202 2.50361 9.90771C2.56298 8.75146 3.10361 7.69209 3.96298 6.96396L9.25986 8.87646C9.49736 8.96084 9.74736 9.00459 10.0005 9.00459C10.2536 9.00459 10.5036 8.96084 10.7411 8.87646L19.5067 5.70772C19.8036 5.60147 20.0005 5.31709 20.0005 5.00146C20.0005 4.68584 19.8036 4.40459 19.5067 4.29521L10.7411 1.12959C10.5036 1.04521 10.2536 1.00146 10.0005 1.00146C9.74736 1.00146 9.49736 1.04521 9.25986 1.12959L0.494231 4.29521C0.197356 4.40459 0.000481008 4.68584 0.000481008 5.00146C0.000481008 5.31709 0.197356 5.59834 0.494231 5.70772ZM15.5192 8.20772L14.0661 8.73271L14.463 12.4983C14.313 12.6077 14.063 12.7483 13.6942 12.8921C12.813 13.239 11.5005 13.5015 10.0005 13.5015C8.50048 13.5015 7.18798 13.239 6.30361 12.8952C5.93486 12.7515 5.68486 12.6077 5.53486 12.5015L5.93173 8.73584L4.47861 8.21084L4.00048 12.7515C4.00048 13.8546 6.68798 15.0015 10.0005 15.0015C13.313 15.0015 16.0005 13.8546 16.0005 12.7515L15.5224 8.20772H15.5192ZM14.6067 12.3765C14.6086 12.374 14.6099 12.3712 14.6107 12.3681C14.6114 12.3651 14.6114 12.362 14.6108 12.3589C14.6102 12.3559 14.609 12.353 14.6072 12.3505C14.6054 12.348 14.603 12.3459 14.6004 12.3443C14.5977 12.3427 14.5947 12.3418 14.5916 12.3414C14.5885 12.3411 14.5854 12.3414 14.5825 12.3424C14.5795 12.3434 14.5768 12.345 14.5745 12.3471C14.5723 12.3492 14.5704 12.3517 14.5692 12.3546C14.5673 12.3571 14.566 12.3599 14.5653 12.3629C14.5646 12.3659 14.5646 12.3691 14.5652 12.3721C14.5658 12.3752 14.567 12.378 14.5688 12.3806C14.5706 12.3831 14.5729 12.3852 14.5756 12.3868C14.5783 12.3883 14.5813 12.3893 14.5843 12.3896C14.5874 12.3899 14.5905 12.3896 14.5935 12.3886C14.5964 12.3877 14.5991 12.3861 14.6014 12.384C14.6037 12.3819 14.6055 12.3793 14.6067 12.3765ZM5.39423 12.3765C5.39482 12.3798 5.39619 12.383 5.39822 12.3857C5.40025 12.3885 5.40289 12.3907 5.40594 12.3922C5.40898 12.3937 5.41234 12.3946 5.41574 12.3946C5.41915 12.3946 5.42251 12.3938 5.42556 12.3922C5.42861 12.3907 5.43126 12.3885 5.4333 12.3858C5.43534 12.3831 5.43671 12.3799 5.43731 12.3765C5.43791 12.3732 5.43772 12.3697 5.43675 12.3665C5.43578 12.3632 5.43406 12.3602 5.43173 12.3577C5.43114 12.3544 5.42978 12.3512 5.42774 12.3485C5.42571 12.3457 5.42307 12.3435 5.42003 12.342C5.41698 12.3404 5.41363 12.3396 5.41022 12.3396C5.40681 12.3396 5.40345 12.3404 5.4004 12.3419C5.39736 12.3435 5.39471 12.3457 5.39267 12.3484C5.39063 12.3511 5.38925 12.3543 5.38865 12.3577C5.38805 12.361 5.38825 12.3645 5.38921 12.3677C5.39018 12.371 5.3919 12.374 5.39423 12.3765Z"
                                                                fill="#424242"></path>
                                                        </svg>
                                                        <p class="small mb-0">{{$job->education}}</p>
                                                    </div>
                                                    <div
                                                        class="text-center d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                                        <svg class="" width="16" class="align-middle" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.6875 8C13.6875 9.50842 13.0883 10.9551 12.0217 12.0217C10.9551 13.0883 9.50842 13.6875 8 13.6875C6.49158 13.6875 5.04494 13.0883 3.97833 12.0217C2.91172 10.9551 2.3125 9.50842 2.3125 8C2.3125 6.49158 2.91172 5.04494 3.97833 3.97833C5.04494 2.91172 6.49158 2.3125 8 2.3125C9.50842 2.3125 10.9551 2.91172 12.0217 3.97833C13.0883 5.04494 13.6875 6.49158 13.6875 8ZM1 8C1 9.85652 1.7375 11.637 3.05025 12.9497C4.36301 14.2625 6.14348 15 8 15C9.85652 15 11.637 14.2625 12.9497 12.9497C14.2625 11.637 15 9.85652 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1C6.14348 1 4.36301 1.7375 3.05025 3.05025C1.7375 4.36301 1 6.14348 1 8ZM7.34375 4.28125V8C7.34375 8.21875 7.45312 8.42383 7.63633 8.54688L10.2613 10.2969C10.5621 10.4992 10.9695 10.4172 11.1719 10.1137C11.3742 9.81016 11.2922 9.40547 10.9887 9.20312L8.65625 7.65V4.28125C8.65625 3.91758 8.36367 3.625 8 3.625C7.63633 3.625 7.34375 3.91758 7.34375 4.28125Z"
                                                                fill="#424242"></path>
                                                        </svg>
                                                        <p class="small mb-0">{{$job->job_skills}}</p>
                                                    </div>
                                                    <div
                                                        class="text-center d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                                        <svg class="" width="16" class="align-middle" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M6.15633 1.65625C6.15633 1.29258 5.86375 1 5.50007 1C5.13639 1 4.8438 1.29258 4.8438 1.65625V2.75H3.75003C2.78478 2.75 2 3.53477 2 4.5V4.9375V6.25V13.25C2 14.2152 2.78478 15 3.75003 15H12.5002C13.4655 15 14.2502 14.2152 14.2502 13.25V6.25V4.9375V4.5C14.2502 3.53477 13.4655 2.75 12.5002 2.75H11.4064V1.65625C11.4064 1.29258 11.1138 1 10.7502 1C10.3865 1 10.0939 1.29258 10.0939 1.65625V2.75H6.15633V1.65625ZM3.31253 6.25H12.9377V13.25C12.9377 13.4906 12.7408 13.6875 12.5002 13.6875H3.75003C3.5094 13.6875 3.31253 13.4906 3.31253 13.25V6.25ZM4.62505 8.65625C4.62505 9.01992 4.91763 9.3125 5.28131 9.3125H10.9689C11.3326 9.3125 11.6252 9.01992 11.6252 8.65625C11.6252 8.29258 11.3326 8 10.9689 8H5.28131C4.91763 8 4.62505 8.29258 4.62505 8.65625ZM5.28131 10.625C4.91763 10.625 4.62505 10.9176 4.62505 11.2812C4.62505 11.6449 4.91763 11.9375 5.28131 11.9375H8.34387C8.70755 11.9375 9.00013 11.6449 9.00013 11.2812C9.00013 10.9176 8.70755 10.625 8.34387 10.625H5.28131Z"
                                                                fill="#424242"></path>
                                                        </svg>
                                                        <p class="small mb-0"><a href="{{$job->link}}">{{$job->link}}</a></p>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                
                                                <p class="mb-0">{{$job->job_description}}</p>
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
        @endforeach 
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
            <p class="text-white">+92 334 4422266</p>

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
    <script>
        function addToWishlist() {
            // Your logic to add this item to the wishlist goes here
            alert('Added to wishlist!');
        }
    </script>
    <script src="{{asset('assets-2/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/main.js')}}"></script>
    <script src="{{asset('assets-2/assets/js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#my-dropdown").select2();
        });
    </script>
    <script>
         function filterCourses() {
            var searchText = document.getElementById("courseSearch").value.toLowerCase();
            var courseCards = document.querySelectorAll(".property_ads .card");

            courseCards.forEach(function (card) {
                var courseName = card.querySelector(".card-title").textContent.toLowerCase();
                if (courseName.includes(searchText)) {
                    card.closest(".property_ads").style.display = "block";
                } else {
                    card.closest(".property_ads").style.display = "none";
                }
            });
            if (searchText.trim() === "") {
                window.location.reload(); // Reload the page if the search field is empty
                return; // Exit the function early to prevent further execution
            }
        }

    </script>
</body>

</html>