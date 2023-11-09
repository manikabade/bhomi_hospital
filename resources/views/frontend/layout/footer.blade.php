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
                    <p>{{$_site_profile->description}}</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i>{{$_site_profile->phone}}</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@bhomihospital.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Sunday - Friday <span>06:00 AM - 10:00 PM</span></p>
                        <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                        {{-- <p>Sunday <span>Closed</span></p> --}}
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
                        <p>Copyright &copy; Bhomi Hospital {{$_site_profile->copyright}}

                            | Design : <a href="#" target="">{{$_site_profile->title}}</a></p>
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


            <div id="validationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="validation-errors">
                                @foreach ($errors->all() as $error)
                                    <span class="error-message">{{$error}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <pre>
                               The appointment had already been scheduled.Please Choose Another Date/Time. Thank You.
                            </pre>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Your other HTML content -->

            <!--Modal Launch Button-->
            {{--            <button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#validationModal" hidden>Open Modal</button>--}}

            <!-- Your HTML code here -->



        </div>
    </div>
</footer>
