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
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('front/css/tooplate-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
{{--<section class="preloader">--}}
{{--    <div class="spinner">--}}

{{--        <span class="spinner-rotate"></span>--}}

{{--    </div>--}}
{{--</section>--}}


<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-3">
                <p>Welcome to a Professional Health Care Banepa</p>
            </div>

            <div class="col-md-8 col-sm-9 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 011-660110</span>
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
                <li class="report-btn"><a href="index.html#report">Medical Report</a></li>
                <li class="ambulance-btn"><a href="index.html#ambulance">Ambulance</a></li>

            </ul>
        </div>

    </div>
</section>


<!-- Medical Report detail -->
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="item item-second">
                <div class="caption">
                    <h1>Get Medical Report</h1>
                    <div class="report-info">
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <input type="text" id="name" placeholder="Your FullName">
                            <input type="text"  id="token_no" placeholder="Token No.">
                        </div>
                        <div>
                            <button id="submit-update" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="table"></div>
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
                            <a href="#"><h5>Title</h5></a>

                            <span>Tuesday Jul 25, 2023</span>
                        </div>
                    </div>

                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
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

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js" integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js" integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#submit-update').click(function (){
        console.log('ok');
        var name = $('#name').val()
        var token_no = $('#token_no').val();

        $.ajax({
            method:'POST',
            url:'{{route('filter.medical')}}',
            data:{
                '_token':'{{csrf_token()}}',
                'name':name,
                'token':'token_no'

            },



            success:function(response) {

                 var data = $.parseJSON(response)

                $('#table').html(data.html);
            }
        });
    })
</script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
