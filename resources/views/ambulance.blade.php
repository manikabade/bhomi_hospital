<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- PRE LOADER -->
{{--<section class="preloader">--}}
{{--    <div class="spinner">--}}

{{--        <span class="spinner-rotate"></span>--}}

{{--    </div>--}}
{{--</section>--}}

<!-- HEADER -->
@include('frontend.layout.header')


<!-- MENU -->
@include('frontend.layout.nav')





<!------------------------ Ambulance ------------------->
<section id="ambulance">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="about-info">
{{--                    <h2 class="wow fadeInUp" data-wow-delay="0.6s"> Call</h2>--}}
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                           <h3>Ambulance Services</h3>
                            <br>
                        </div>

                    <table class="table table-success table-striped">
                     <thead>
                     <tr>
                        <th>Ambulance Name</th>
                         <th>Ambulance Number</th>
                     </tr>
                     </thead>

                        <tbody>
                        @forelse($data['_ambulances'] as $ambulance)
                        <tr>
                           <th>{{$ambulance->ambulance_name}}</th>
                           <th> {{$ambulance->phone_number}}</th>

                        </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-md-8 col-sm-6">
                <div class="about-inform">
                    <h4 class="wow fadeInUp" data-wow-delay="0.6s"></h4>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <img src="{{'front/images/ambulance.jpg'}}" alt="" width="80%">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- FOOTER -->
<!-- FOOTER -->
@include('frontend.layout.footer')

<!-- SCRIPTS -->
@include('frontend.layout.script')



</body>
</html>
