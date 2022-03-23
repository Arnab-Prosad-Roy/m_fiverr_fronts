@extends('master')
@section('title', 'Home')
@section('mainContent')
    <div class="">
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/LsTXqTNZ/1.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Web Design</h5>
                    <p class="animated d-none bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/C1rx7Kyh/2.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Graphics Design</h5>
                    <p class="animated d-none bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                   
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/c4nL7ZFW/3.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Photography</h5>
                    <p class="animated d-none bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                    
                </div>
            </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div>
    </div>

    <div class="browse-jobs-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Filter Job By</h2>
                <div class="bar m-auto"></div>
            </div>
            <div id="showModal" class="row pt-45 justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="browse-jobs-card">
                    <div class="icon">
                        <i class="ri-briefcase-2-line"></i>
                    </div>
                    <h3><a href="#">Group Job</a></h3>
                        <p>(Number Of New Jobs)</p>
                    <a  href="#filterModal" data-toggle = "modal" data-target= "#filterModal" class="more-btn"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="browse-jobs-card">
                    <div class="icon">
                        <i class="ri-briefcase-2-line"></i>
                    </div>
                    <h3><a href="#">Personal Job</a></h3>
                        <p>(Number Of New Jobs)</p>
                    <a  href="#filterModal" data-toggle = "modal" data-target= "#filterModal" class="more-btn"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="browse-jobs-card">
                <div class="icon">
                    <i class="ri-briefcase-2-line"></i>
                </div>
                <h3><a href="#">Service By</a></h3>
                    <p>(Number Of New Jobs)</p>
                    <a  href="#filterModal" data-toggle = "modal" data-target= "#filterModal" class="more-btn"><i class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    @include('front_layouts.inc.filterJobModal')
<div class="find-jobs-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>Popular Group Job</h2>
            <div class="bar m-auto"></div>
        </div>
        <div class="recent-job-slider owl-carousel owl-theme pt-45">
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                    </div>
                    <h3><a href="job-details.html">Professional Copywriter for Advertising</a></h3>
                    <ul class="job-list1">
                        <li><i class="ri-briefcase-line"></i> Accounting</li>
                        <li><i class="ri-map-pin-line"></i> New York</li>
                    </ul>
                    <ul class="job-list2">
                     <li class="full-time">Full Time</li>
                    </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Bank Transfer Operations Team Leader</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Banking</li>
                    <li><i class="ri-map-pin-line"></i> St Brooklyn</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Principal DevOps Engineer Senior Manager</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Graphics Design</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Professional Finance Manager & Health </a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i>Finance</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
        </div>
    </div>
</div>


<div class="recent-job-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Popular Personal Job</h2>
            <div class="bar m-auto"></div>
        </div>
        <div class="recent-job-slider owl-carousel owl-theme pt-45">
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                    </div>
                    <h3><a href="job-details.html">Professional Copywriter for Advertising</a></h3>
                    <ul class="job-list1">
                        <li><i class="ri-briefcase-line"></i> Accounting</li>
                        <li><i class="ri-map-pin-line"></i> New York</li>
                    </ul>
                    <ul class="job-list2">
                     <li class="full-time">Full Time</li>
                    </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Bank Transfer Operations Team Leader</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Banking</li>
                    <li><i class="ri-map-pin-line"></i> St Brooklyn</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Principal DevOps Engineer Senior Manager</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Graphics Design</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Professional Finance Manager & Health </a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i>Finance</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
        </div>
    </div>
</div>


<div class="find-jobs-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>Popular Service By Job</h2>
            <div class="bar m-auto"></div>
        </div>
        <div class="recent-job-slider owl-carousel owl-theme pt-45">
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                    </div>
                    <h3><a href="job-details.html">Professional Copywriter for Advertising</a></h3>
                    <ul class="job-list1">
                        <li><i class="ri-briefcase-line"></i> Accounting</li>
                        <li><i class="ri-map-pin-line"></i> New York</li>
                    </ul>
                    <ul class="job-list2">
                     <li class="full-time">Full Time</li>
                    </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Bank Transfer Operations Team Leader</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Banking</li>
                    <li><i class="ri-map-pin-line"></i> St Brooklyn</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                        <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Principal DevOps Engineer Senior Manager</a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i> Graphics Design</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                    <li class="part-time">Part Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
            <div class="recent-job-item">
                <div class="recent-job-img">
                    <a href="job-details.html">
                    <img src="{{asset('front_asset/assets/images/recent-job/recent-job2.jpg')}}" alt="Images">
                    </a>
                </div>
                <h3><a href="job-details.html">Professional Finance Manager & Health </a></h3>
                <ul class="job-list1">
                    <li><i class="ri-briefcase-line"></i>Finance</li>
                    <li><i class="ri-map-pin-line"></i> New York</li>
                </ul>
                <ul class="job-list2">
                    <li class="full-time">Full Time</li>
                </ul>
                <button class="bookmark-btn"><i class="ri-bookmark-line"></i></button>
            </div>
        </div>
    </div>
</div>


    <div class="freelancers-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Group Job Posted</h2>
                <div class="bar m-auto"></div>
                <p class="m-auto">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
            </div>
            <div class="row pt-45 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="browse-btn">
                         <a href="#"> Browse All <i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="find-jobs-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Personal Job Posted</h2>
                <div class="bar m-auto"></div>
                <p class="m-auto">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
            </div>
            <div class="row pt-45 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="browse-btn">
                         <a href="#"> Browse All <i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="freelancers-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Service By Job Posted</h2>
                <div class="bar m-auto"></div>
                <p class="m-auto">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
            </div>
            <div class="row pt-45 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="freelancers-card">
                        <a href="#">
                        <img src="{{asset('front_asset/assets/images/freelancers/freelancers-img2.jpg')}}" alt="Images">
                        </a>
                        <div class="title">
                        <h5><a href="#">Profile Name</a></h5>
                        <h3><a href="#">Principal DevOps Engineer (Senior Manager, Technology)</a></h3>
                        <!-- <img src="assets/images/freelancers/flag.png" alt="Images"> -->
                        </div>
                        <p>Experties</p>

                        <div class="sub-title">
                            <span class="sub-title1">Job Success : <b>90</b></span>
                            <span class="sub-title2">Rate : <b>$35 Per Hour</b></span>
                        </div>
                        <div class="find-jobs-btn">
                            <a href="#" class="default-btn border-radius-5">Apply Now<i class="ri-send-plane-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="browse-btn">
                         <a href="#"> Browse All <i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="employers-cv-area">
        <div class="container">
            <div class="employers-cv-bg">
                <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="employers-cv-content">
                    <h2>Let Employers Find You</h2>
                        <div class="bar"></div>
                        <p>Advertise your jobs to millions of monthly users and search 15.8 million CV in our database.</p>
                    </div>
                </div>
                    <div class="col-lg-4">
                        <div class="employers-cv-btn">
                        <a href="#">Sign Up Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection