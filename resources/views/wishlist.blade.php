<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wishlist</title>
  <!-- ************======((( STYLESHEETS FLIES)))======********** -->
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets-2/assets/css/select2.css') }}" />
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
                    <a class="nav-link" href="./job">Jobs
                        <span class="bottom-border"></span>
                    </a>
                </li>
                
                <li class="nav-item pe-0 pe-lg-2">
                    <a class="nav-link" href="{{ route('contact') }}">Contact
                        <span class="bottom-border"></span>
                    </a>
                </li>
                    <li class="nav-item pe-0 pe-lg-2">
                        <a class="nav-link active" href="./wishlist">Wishlist
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
                    
                  </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
  <!-- ************======((( PAGE HEADER )))======********** -->
  <div class="Page-heading text-center">
    <div class="d-flex justify-content-center">
      <div class="col-12 col-md-6">
        <h1 class="text-light text-uppercase">Explore and Save Your Favorite Opportunities</h1>

      </div>
    </div>
  </div>
  <!-- ************======((( CITIES FORMS )))======********** -->
  <div class="bg-gradient pb-4">
    <div class="container Search-Area">
        <div class="row row-cols-12 g-3 searcbar-home rounded-3 p-3 pt-0 align-items-center">
            <div class="col-md-10">
                <input id="searchInput" type="text" class="form-control p-2" placeholder="Enter your search criteria">
            </div>
            
        </div>
    </div>
</div>
    <!-- ************======((( MAIN CONTENT TEXT START)))======********** -->
    <div class="container pb-4" bis_skin_checked="1">
      <!-- Scholarships for international students -->
      <div class="mt-5">
      <div class="">
        <h3>  Scholarships Wish List</h3>
        
      </div>
      
      <div id="scholarship-container" class="row">
            @foreach($scholarship as $index => $scholarship)
                @if($scholarship->user_id === $user->id)
                <div class="col-md-4 mb-4 scholarship-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
                    <div class="card" style="width: 100%;">
                        <div class="carousel-inner rounded-start">
                            <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                                <img src="{{ asset($scholarship->scholarship->image) }}" class="d-block img-fluid" style="object-fit: contain; width: 100%; height: 100%;">
                                <div class="shadow-overlay"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $scholarship->scholarship->name }}</h5>
                            <p class="card-text">Deadline: {{ $scholarship->scholarship->application_deadline }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="./scholarship/{{ $scholarship->scholarship_id }}" class="btn btn-primary">Read more</a>
                                </div>
                                @if ($user)
                                    <div>
                                    <form action="{{ route('wishlistscholarshipdestroy', $scholarship->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this from your wishlist?');">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn heart-button">
                                            <i class="fas fa-trash"></i> <!-- Assuming you are using Font Awesome -->      
                                        </button>
                                    </form>
                                    </div>
                                 @endif
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="show-more" class="btn btn-primary">Show More</button>
            <button id="show-less" class="btn btn-secondary" style="display: none;">See Less</button>
        </div>
    </div>

  
    <!-- Discover study abroad countries -->
    <div class="mt-5">
    <div>
        <h3>Universities Wish List</h3>
       
    </div>
    <div class="container pb-4">
        <div class="row" id="university-container">
            @foreach($universities as $index => $university)
            @if($university->user_id === $user->id)
            <div class="col-md-4 mb-4 university-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
                <div class="card" style="width: 100%;">
                    <div id="carouselcountries{{ $index }}" class="carousel slide caruselSlides">
                        <div class="carousel-inner rounded-start">
                            <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                                <img src="{{ $university->university->image }}" class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 100%;">
                                <div class="shadow-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $university->university->name }}</h5>
                        <p class="card-text">Campus: {{ $university->university->campus }}</p>
                        
                        <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <p class="card-text">Visit Website: <a href="{{$university->university->university_link}}">{{$university->university->university_link}}</a></p>
                                </div>
                                
                                @if ($user)
                                    <div>
                                    <form action="{{ route('wishlistuniversitydestroy', $university->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this from your wishlist?');">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn heart-button">
                                            <i class="fas fa-trash"></i> <!-- Assuming you are using Font Awesome -->      
                                        </button>
                                    </form>
                                    </div>
                                 @endif
                            </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="show-more-universities" class="btn btn-primary">Show More</button>
            <button id="show-less-universities" class="btn btn-secondary" style="display: none;">See Less</button>
        </div>
        </div>
    </div>

        <!-- Student guides and tips -->
        <div class="mt-5">
        <div>
            <h3>Courses Wish List</h3>
            
        </div>
        <div class="container pb-4">
            <div class="row" id="course-container">
                @foreach($course as $index => $course)
                @if($course->user_id === $user->id)
                <div class="col-md-4 mb-4 course-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
                    <div class="card" style="width: 100%;">
                        <div class="carousel-inner rounded-start">
                            <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                                @if($index % 3 == 0)
                                    <img src="book.jpg" class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 100%;">
                                @elseif($index % 3 == 1)
                                    <img src="book 2.jpg" class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 100%;">
                                @elseif($index % 3 == 2)
                                    <img src="book3.jpg" class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 100%;">
                                @endif
                                <div class="shadow-overlay"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$course->course->course_name}}</h5>
                            <p class="card-text">Tuition fee: {{$course->course->tuition_fee}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="./course/{{ $course->course_id }}" class="btn btn-primary">Read more</a>
                                </div>
                                @if ($user)
                                    <div>
                                    <form action="{{ route('wishlistcoursedestroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this from your wishlist?');">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn heart-button">
                                            <i class="fas fa-trash"></i> <!-- Assuming you are using Font Awesome -->      
                                        </button>
                                    </form>
                                    </div>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button id="show-more-courses" class="btn btn-primary">Show More</button>
                <button id="show-less-courses" class="btn btn-secondary" style="display: none;">See Less</button>
            </div>
        </div>
    </div>
          <!-- Jobs guide and tips -->
          <div class="mt-5">
        <div>
            <h3>Jobs guide and tips</h3>
            <p>Learn our best tips for jobs abroad!</p>
        </div>
        <div class="container pb-4">
            <div class="row" id="job-container">
                @foreach($job as $index => $job)
                @if($job->user_id === $user->id)
                <div class="col-md-4 mb-4 job-card" style="display: {{ $index < 3 ? 'block' : 'none' }};">
                    <div class="card" style="width: 100%;">
                        <div class="carousel-inner rounded-start">
                            <div class="carousel-item property-images active" style="width: 100%; height: 300px;">
                                    <img src="{{$job->job->job_image}}" class="d-block object-fit-contain" style="object-fit: contain; width: 100%; height: 100%;">
                                
                                <div class="shadow-overlay"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->job->job_name }}</h5>
                            <p class="card-text">Location: {{ $job->job->job_location }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="./job/{{ $job->job_id }}" class="btn btn-primary">Read more</a>
                                </div>
                                @if ($user)
                                    <div>
                                    <form action="{{ route('wishlistjobdestroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this from your wishlist?');">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn heart-button">
                                            <i class="fas fa-trash"></i> <!-- Assuming you are using Font Awesome -->      
                                        </button>
                                    </form>
                                    </div>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button id="show-more-jobs" class="btn btn-primary">Show More</button>
                <button id="show-less-jobs" class="btn btn-secondary" style="display: none;">See Less</button>
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

  <!-- ************======(((  SCRIPT TAGS FOR JS AND JQ FILES)))======********** -->
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
      document.addEventListener('DOMContentLoaded', function() {
        let currentRowCount = 1;
        const cardsPerRow = 3;
        const totalCards = document.querySelectorAll('.scholarship-card').length;
        const totalRows = Math.ceil(totalCards / cardsPerRow);
        const showMoreButton = document.getElementById('show-more');
        const showLessButton = document.getElementById('show-less');

        showMoreButton.addEventListener('click', function() {
            if (currentRowCount < totalRows) {
                currentRowCount++;
                showCards();
                if (currentRowCount === totalRows) {
                    showMoreButton.style.display = 'none';
                }
                showLessButton.style.display = 'inline-block';
            }
        });

        showLessButton.addEventListener('click', function() {
            if (currentRowCount > 1) {
                currentRowCount--;
                showCards();
                if (currentRowCount === 1) {
                    showLessButton.style.display = 'none';
                }
                showMoreButton.style.display = 'inline-block';
            }
        });

        function showCards() {
            const cards = document.querySelectorAll('.scholarship-card');
            cards.forEach((card, index) => {
                if (index < currentRowCount * cardsPerRow) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountUniversities = 1;
        const cardsPerRowUniversities = 3;
        const totalRowsUniversities = Math.ceil({{ count($universities) }} / cardsPerRowUniversities);
        const showMoreButtonUniversities = document.getElementById('show-more-universities');
        const showLessButtonUniversities = document.getElementById('show-less-universities');

        showMoreButtonUniversities.addEventListener('click', function() {
            if (currentRowCountUniversities < totalRowsUniversities) {
                currentRowCountUniversities++;
                showUniversityCards();
                if (currentRowCountUniversities === totalRowsUniversities) {
                    showMoreButtonUniversities.style.display = 'none';
                }
                showLessButtonUniversities.style.display = 'inline-block';
            }
        });

        showLessButtonUniversities.addEventListener('click', function() {
            if (currentRowCountUniversities > 1) {
                currentRowCountUniversities--;
                showUniversityCards();
                if (currentRowCountUniversities === 1) {
                    showLessButtonUniversities.style.display = 'none';
                }
                showMoreButtonUniversities.style.display = 'inline-block';
            }
        });

        function showUniversityCards() {
            const universityCards = document.querySelectorAll('.university-card');
            universityCards.forEach((card, index) => {
                card.style.display = index < currentRowCountUniversities * cardsPerRowUniversities ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountCourses = 1;
        const cardsPerRowCourses = 3;
        const totalCardsCourses = document.querySelectorAll('.course-card').length;
        const totalRowsCourses = Math.ceil(totalCardsCourses / cardsPerRowCourses);
        const showMoreButtonCourses = document.getElementById('show-more-courses');
        const showLessButtonCourses = document.getElementById('show-less-courses');

        showMoreButtonCourses.addEventListener('click', function() {
            if (currentRowCountCourses < totalRowsCourses) {
                currentRowCountCourses++;
                showCourseCards();
                if (currentRowCountCourses === totalRowsCourses) {
                    showMoreButtonCourses.style.display = 'none';
                }
                showLessButtonCourses.style.display = 'inline-block';
            }
        });

        showLessButtonCourses.addEventListener('click', function() {
            if (currentRowCountCourses > 1) {
                currentRowCountCourses--;
                showCourseCards();
                if (currentRowCountCourses === 1) {
                    showLessButtonCourses.style.display = 'none';
                }
                showMoreButtonCourses.style.display = 'inline-block';
            }
        });

        function showCourseCards() {
            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach((card, index) => {
                card.style.display = index < currentRowCountCourses * cardsPerRowCourses ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentRowCountJobs = 1;
        const cardsPerRowJobs = 3;
        const totalCardsJobs = document.querySelectorAll('.job-card').length;
        const totalRowsJobs = Math.ceil(totalCardsJobs / cardsPerRowJobs);
        const showMoreButtonJobs = document.getElementById('show-more-jobs');
        const showLessButtonJobs = document.getElementById('show-less-jobs');

        showMoreButtonJobs.addEventListener('click', function() {
            if (currentRowCountJobs < totalRowsJobs) {
                currentRowCountJobs++;
                showJobCards();
                if (currentRowCountJobs === totalRowsJobs) {
                    showMoreButtonJobs.style.display = 'none';
                }
                showLessButtonJobs.style.display = 'inline-block';
            }
        });

        showLessButtonJobs.addEventListener('click', function() {
            if (currentRowCountJobs > 1) {
                currentRowCountJobs--;
                showJobCards();
                if (currentRowCountJobs === 1) {
                    showLessButtonJobs.style.display = 'none';
                }
                showMoreButtonJobs.style.display = 'inline-block';
            }
        });

        function showJobCards() {
            const jobCards = document.querySelectorAll('.job-card');
            jobCards.forEach((card, index) => {
                card.style.display = index < currentRowCountJobs * cardsPerRowJobs ? 'block' : 'none';
            });
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("input", function() {
        var searchTerm = searchInput.value.trim().toLowerCase();
        
        // If search term is empty, refresh the page
        if (searchTerm === "") {
            location.reload();
            return;
        }

        // Scholarships
        var scholarships = document.querySelectorAll(".scholarship-card");
        scholarships.forEach(function(scholarship) {
            var scholarshipName = scholarship.querySelector(".card-title").textContent.toLowerCase();
            var scholarshipDeadline = scholarship.querySelector(".card-text").textContent.toLowerCase();
            
            if (scholarshipName.includes(searchTerm) || scholarshipDeadline.includes(searchTerm)) {
                scholarship.style.display = "block";
            } else {
                scholarship.style.display = "none";
            }
        });

        // Universities
        var universities = document.querySelectorAll(".university-card");
        universities.forEach(function(university) {
            var universityName = university.querySelector(".card-title").textContent.toLowerCase();
            var universityCampus = university.querySelector(".card-text").textContent.toLowerCase();
            
            if (universityName.includes(searchTerm) || universityCampus.includes(searchTerm)) {
                university.style.display = "block";
            } else {
                university.style.display = "none";
            }
        });

        // Courses
        var courses = document.querySelectorAll(".course-card");
        courses.forEach(function(course) {
            var courseName = course.querySelector(".card-title").textContent.toLowerCase();
            var courseTuitionFee = course.querySelector(".card-text").textContent.toLowerCase();
            
            if (courseName.includes(searchTerm) || courseTuitionFee.includes(searchTerm)) {
                course.style.display = "block";
            } else {
                course.style.display = "none";
            }
        });

        // Jobs
        var jobs = document.querySelectorAll(".job-card");
        jobs.forEach(function(job) {
            var jobTitle = job.querySelector(".card-title").textContent.toLowerCase();
            var jobLocation = job.querySelector(".card-text").textContent.toLowerCase();
            
            if (jobTitle.includes(searchTerm) || jobLocation.includes(searchTerm)) {
                job.style.display = "block";
            } else {
                job.style.display = "none";
            }
        });
    });
});

</script>


</body>

</html>