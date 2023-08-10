<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            @forelse($data['_doctors'] as $doctor)
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('images/doctor')}}/{{$doctor->image}}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>{{$doctor->doctor_name}}</h3>
                            <p>{{$doctor->specialist->specialist_name}}</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i>{{$doctor->phone_number}}</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="#">{{$doctor->email}}</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
