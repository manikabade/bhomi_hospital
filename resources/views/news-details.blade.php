<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- HEADER -->
@include('frontend.layout.header')


<!-- MENU -->
@include('frontend.layout.nav')


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
@include('frontend.layout.footer')

@include('frontend.layout.script')


</body>
</html>
