@include('pages/frontend/header')

    <!------------------------- Course Details Title Section ---------------------->
    <section class="auth__title_section course_details_title">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="{{url('/')}}">Home</a> / course / {{$item1->course_title  }}</p>
                </div>
                <div class="auth_title_content course_details_title_rating">
                    <h3 class="sub_title">{{ $item1->course_title }}</h3>
                    {{-- <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <div class="rating_count">
                            <span>4.0 (1 rating)</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-------------------- Course Details Body ----------------------->
    <section class="course_details_body">
        <div class="coures_details_slider">
            <!--<img src="{{ url('images/'.$item1->course_image) }}" alt="">-->
        </div>
        <div class="container">
            <div class="course_details_main">
                <div class="course_details_content">
                    <div class="course_details_tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class=" active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Overview
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="" id="pills-curriculum-tab" data-bs-toggle="pill" data-bs-target="#pills-curriculum" type="button" role="tab" aria-controls="pills-curriculum" aria-selected="false">Curriculum
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                              <button class="" id="pills-instructor-tab" data-bs-toggle="pill" data-bs-target="#pills-instructor" type="button" role="tab" aria-controls="pills-instructor" aria-selected="false">Instructor
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews
                                <div class="border_bottom"></div>
                              </button>
                            </li> --}}
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab" tabindex="0">
                                <div class="course_overview_inner">
                                    <h3 class="sub_title2">Course Description</h3>
                                    <p class="paragraph2">{{ $item1->course_description }}</p>
                                    {{-- <h3 class="sub_title2">Certification</h3>
                                    <p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p> --}}
                                    <!--<h3 class="sub_title2">Who this course is for</h3>-->
                                    <!--<p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab" tabindex="0">
                                @foreach ($item2 as $item2)


                                <div class="course_curriculum_inner card-body">
                                    <h3 class="course_curi_title">{{ $item2->course_content_title }}</h3>
                                    <ul>
                                        <li><p>
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">
                                                        {{ $item2->course_content_link }}
                                                    </span>
                                                </div>
                                                <!--<div class="course_meta mt-2">-->
                                                <!--    <span class="question">5 questions</span>-->
                                                <!--    <span class="duration"> 01 hours</span>-->
                                                <!--    <span class="status">Preview</span>-->
                                                <!--</div> -->
                                            </div>
                                        </p></li>
                                    </ul>
                                    {{-- <h3 class="course_curi_title">Stepping into the World of Python</h3>
                                    <ul>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name"> NumPy Introduction</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">15 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Getting Started</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration"> 30 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Creating Arrays</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration"> 45 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Array Indexing</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="question">4 questions</span>
                                                    <span class="duration">1 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Array Slicing</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">1.5 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                    </ul>
                                    <h3 class="course_curi_title">Python MySQL</h3>
                                    <ul>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">01 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL Create Database</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="question">3 question</span>
                                                    <span class="duration">1.1 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL Create Table</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">1.5 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                    </ul> --}}
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab" tabindex="0">
                                <div class="course_details_instractor">
                                    <div class="details_instractor_image">
                                        <img src="img/Advisor/sarahtf.jpg" alt="">
                                    </div>
                                    <div class="details_instractor_info">
                                        <h5>Sarah Taylor</h5>
                                        <h6 class="small_title">Agile Project Expert</h6>
                                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="details_instractor_social social">
                                            <div class="facebook social_inner">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            </div>
                                            <div class="twittwer social_inner">
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </div>
                                            <div class="instragram social_inner">
                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            </div>
                                            <div class="linkedin social_inner">
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
                                <div class="course_details_rating">
                                    <div class="details_rating_inner_title">
                                        <div class="details_inner_rating_top">
                                            <h3 class="sub_title2">Course Rating</h3>
                                            <div class="details_rating_stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="rating_count">
                                            <span>4.1 average based on 4 reviews.</span>
                                        </div>
                                    </div>
                                    <div class="course_details_progress mt-4">
                                        <div class="inner_progress">
                                            <h3 class="sub_titl">5 Star</h3>
                                            <div class="progress_bras">
                                                <div class="progress_bar5"></div>
                                            </div>
                                            <h3 class="sub_titl">02</h3>
                                        </div>
                                        <div class="inner_progress">
                                            <h3 class="sub_titl">4 Star</h3>
                                            <div class="progress_bras">
                                                <div class="progress_bar4"></div>
                                            </div>
                                            <h3 class="sub_titl">03</h3>
                                        </div>
                                        <div class="inner_progress">
                                            <h3 class="sub_titl">3 Star</h3>
                                            <div class="progress_bras">
                                                <div class="progress_bar3"></div>
                                            </div>
                                            <h3 class="sub_titl">4</h3>
                                        </div>
                                        <div class="inner_progress">
                                            <h3 class="sub_titl">2 Star</h3>
                                            <div class="progress_bras">
                                                <div class="progress_bar2"></div>
                                            </div>
                                            <h3 class="sub_titl">05</h3>
                                        </div>
                                        <div class="inner_progress">
                                            <h3 class="sub_titl">1 Star</h3>
                                            <div class="progress_bras">
                                                <div class="progress_bar1"></div>
                                            </div>
                                            <h3 class="sub_titl">00</h3>
                                        </div>
                                    </div>
                                    <div class="corse_details_reviews">
                                        <h3 class="sub_title2">3 Reviews</h3>
                                        <div class="details_review_persone">
                                            <div class="review_persone_image">
                                                <img src="img/Popular-corse/Alexm.jpg" alt="">
                                            </div>
                                            <div class="review_persone_text">
                                                <div class="reviews_name">
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <span class="reviewer_name">James Anderson</span>
                                                </div>
                                                <h5>Excellent</h5>
                                                <p class="paragraph">Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                                            </div>
                                        </div>
                                        <div class="details_review_persone">
                                            <div class="review_persone_image">
                                                <img src="img/Popular-corse/saraht.jpg" alt="">
                                            </div>
                                            <div class="review_persone_text">
                                                <div class="reviews_name">
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <span class="reviewer_name">Sarah Taylor</span>
                                                </div>
                                                <h5>Video Quality!</h5>
                                                <p class="paragraph">Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                                            </div>
                                        </div>
                                        <div class="details_review_persone">
                                            <div class="review_persone_image">
                                                <img src="img/Popular-corse/davidw.jpg" alt="">
                                            </div>
                                            <div class="review_persone_text">
                                                <div class="reviews_name">
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                    <span class="reviewer_name">David Warner</span>
                                                </div>
                                                <h5>Perfect Coding!</h5>
                                                <p class="paragraph">Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----------- Course Details Sitebar ------------>

                <div class="course_details_sidebar">
                    <div class="course_details_sidebar_video">
                        <div class="course_details_video_img">
                            <button id="preview">
                                <img src="{{ url('images/'.$item1->course_image) }}" alt="">
                                {{-- <i class="fa-solid fa-play"></i> --}}
                                {{-- <h3>Course Preview</h3> --}}
                            </button>
                        </div>
                        {{-- <!-------- Modal -------> --}}
                        <div class="video_player" id="video_popup">
                            <div class="video_player_header">
                                <div class="video_close">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                            <div class="video_player_body">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bk7McNUjWgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="course_details_sidebar_price">
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-tag"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Price</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h2>{{ $item1->course_fee }}</h2>
                            </div>
                        </div>
                        {{-- <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-user-secret"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Instructor</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>Sarah Taylor</h5>
                            </div>
                        </div> --}}
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-light fa-clock"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Duration</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>{{ $item1->course_duration }}</h5>
                            </div>
                        </div>
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-computer"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Lessons</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>{{ $item3 }}</h5>
                            </div>
                        </div>
                        {{-- <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-cash-register"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Enrolled</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>255 Students</h5>
                            </div>
                        </div> --}}
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-key"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Access</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>Lifetime</h5>
                            </div>
                        </div>
                    </div>
                    <div class="course_details_sidebar_btns">
                        <div class="add_to_cat_btn">
                            <a class="btn_red border-0 w-100 edit" href="{{url('enroll/'.$item1->id)}}">
                                <div class="btn_inner">
                                    <div class="user_icon">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div class="user_details">
                                       Book your seat
                                    </div>
                                </div>
                            </a>


                            <!-- <button class="btn_red border-0 w-100 edit" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                            <!--    <div class="btn_inner">-->
                            <!--        <div class="user_icon">-->
                            <!--            <i class="fa-solid fa-cart-shopping"></i>-->
                            <!--        </div>-->
                            <!--        <div class="user_details">-->
                            <!--           Book your seat-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</button>-->


                        </div>
                        {{-- <div class="buy_now_btn">
                            <button type="submit" class="btn_white w-100">
                                <div class="btn_inner">
                                    <div class="user_icon">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div class="user_details">
                                        Buy Now
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="share_btn">
                            <div class="btn_share_title">
                                <h5>Share This Course</h5>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="btn_share_icons social">
                                <div class="facebook social_inner">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                                <div class="twittwer social_inner">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                                <div class="instragram social_inner">
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="linkedin social_inner">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div> --}}



















                    </div>
                </div>
            </div>
        </div>
    </section>

     <!------------------------- Footer Section --------------------------------->
  @include('pages/frontend/footer')