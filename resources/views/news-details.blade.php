<!DOCTYPE html>
<html lang="en">
<head>

    <title>Bhomi hospital Template - News Page</title>
    <!--

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('front/css/tooplate-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-3">
                <p>Welcome to a Professional Health Care Banepa</p>
            </div>

            <div class="col-md-8 col-sm-9 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i>011-660110</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@bhomihospital.com</a></span>
            </div>

        </div>
    </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand">Bhomi <i class="fa fa-h-square"></i>ospital </a>

        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html#top" class="smoothScroll">Home</a></li>
                <li><a href="index.html#about" class="smoothScroll">About Us</a></li>
                <li><a href="index.html#team" class="smoothScroll">Our Staff</a></li>
                <li><a href="index.html#news" class="smoothScroll">News</a></li>
                <li><a href="index.html#google-map" class="smoothScroll">Contact</a></li>
                <li class="appointment-btn"><a href="index.html#appointment">Make an appointment</a></li>
                <li class="report-btn"><a href="index. html#report">Medical Report</a></li>
                <li class="ambulance-btn"><a href="index.html#ambulance">Ambulance</a></li>

            </ul>
        </div>

    </div>
</section>


<!-- NEWS DETAIL -->
<section id="news-detail" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-5">
                <div class="news-sidebar">
                    <div class="news-author">
                        <h4>Covid-19 Pandemics</h4>
                        <p>Three after the initial spread of the virus, it is estimated that over 760 million people contracted Covid-19, with 5 billion people across the globe having received at least one dose of the vaccine.</p>
                    </div>

                    <div class="recent-post">
                        <h4>Recent Posts</h4>

                        <div class="media">
                            <div class="media-object pull-left">
                                <a href="#"><img src="{{asset('front/images/covid-logo.png')}}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{$news->title}}</a></h4>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-object pull-left">
                                <a href="#"><img src="{{asset('front/images/covid-logo.png')}}"class="img-responsive" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">symptoms of Covid-19</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="news-categories">
                        <h4>Categories</h4>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
                    </div>


                    <div class="news-tags">
                        <h4>Tags</h4>
                        <li><a href="#">Pregnancy</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Consultant</a></li>
                        <li><a href="#">Medical</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Social</a></li>
                    </div>
                    <div class="symptoms-covid">
                        <h3>Symptoms </h3>
                        <img src="{{asset('front/images/covid-symp.png')}}" alt="" height="300px" width="395px">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <!-- NEWS THUMB -->
                <div class="news-detail-thumb">
                    <div class="news-image">
                        <iframe width="660" height="315" src="https://www.youtube.com/embed/rAj38E7vrS8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    </div>
                    <h3>Review about health conditions during covid</h3>
                    <p>
                        Some people, especially those who had severe COVID-19, experience multiorgan effects or autoimmune conditions with symptoms lasting weeks, months, or even years after COVID-19 illness. Multi-organ effects can involve many body systems, including the heart, lung, kidney, skin, and brain. As a result of these effects, people who have had COVID-19 may be more likely to develop new health conditions such as diabetes, heart conditions, blood clots, or neurological conditions compared with people who have not had COVID-19.</p>
                    <blockquote> "It has affected our health, our economy, our everyday activities, and caused devastation through the loss of so many lives. While Covid-19 remains a global health threat, we have learned to live with it and return to normal life".</p>
                        <div>
                            <img src="{{asset('front/images/covid-impacts.png')}}" alt="" height="300px">
                        </div>
                        <p> An app is also useful for tracking revisits and improving clinic-patient communication. An app is also useful for tracking revisits and improving clinic-patient communication. An app is also useful for tracking revisits and improving clinic-patient communication.</p>
                        <div class="news-social-share">
                            <h4>Share this article</h4>
                            <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                        </div>
                </div>
            </div>



        </div>
    </div>
</section>



<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="{{asset('front/images/news-image.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#"><h5>Growing fast food culture</h5></a>
                            <span>Tuesday Jul 25, 2023</span>
                        </div>
                    </div>

                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="{{asset('front/images/news-image.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#"><h5>Nepal’s tobacco consumption</h5></a>
                            <span> January 27, 2023</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                    <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i>011-660110</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@bomihospital.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                        <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                        <p>Sunday <span>Closed</span></p>
                    </div>

                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2017 Bhomi  Hospital

                            | Design By: <a href="" target=""></a>Bhomi</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-link">
                        <a href="#">Laboratory Tests</a>
                        <a href="#">Departments</a>
                        <a href="#">Insurance Policy</a>
                        <a href="#">Careers</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.sticky.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('front/js/smoothscroll.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>


</body>
</html>
