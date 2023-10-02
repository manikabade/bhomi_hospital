<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="{{asset('front/images/appointment1.jpg')}}" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="{{route('appointment.store')}}">

                    @csrf
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>


                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="patient_name">Name</label>
                            <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="patient_name">Address</label>
                            <input type="text" class="form-control" id="patient_name" name="patient_address" placeholder="Enter Address">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="date">Date Of Birth</label>
                            <input type="date" name="date_of_birth" value="" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Gender</label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="patient_name">Age</label>
                            <input type="number" class="form-control" id="patient_age" name="age" placeholder="Enter your age">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Blood_group</label>
                            <select class="form-control" name="blood_group">
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>o-</option>
                                <option>o+</option>
                                <option>A-</option>
                                <option>B-</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Specialist</label>
                            <select class="form-control" name="specialist_id" id="specialistId" onchange="changeSpecialist(this)">
                                @forelse($data['_specialist'] as $spec)
                                    <option value="{{$spec->id}}">{{$spec->specialist_name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Doctor</label>
                            <select class="form-control" name="doctor_id"  id="DoctorSpecialistWise">

{{--                                @forelse($data['_doctors'] as $doc)--}}
{{--                                    <option value="{{$doc->id}}">{{$doc->doctor_name}}</option>--}}
{{--                                @empty--}}
{{--                                @endforelse--}}
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Select Date For Appointment</label>
                            <input type="date" name="appointment_date" value="" class="form-control">
                        </div>
{{--                        <div class="col-md-6 col-sm-6">--}}
{{--                            <label for="date">Time For Appointment</label>--}}
{{--                            <input type="time" name="time_for_appointment" value="" class="form-control">--}}
{{--                        </div>--}}
                        <div class="col-md-6 col-sm-6">
                            <label name="schedule_management_id" for="select">Select Time For Appointment</label>
                            <select class="form-control" name="schedule_management_id">
                                @forelse($data['_ScheduleManagement'] as $scheduleManagement)
                                    <option value="{{$scheduleManagement->id}}">{{$scheduleManagement->time_for_appointment}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6">

              <label for="image">Voucher Image</label>
                            <input type="file" id="myFile" name="image" class="form-control">

                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="phone_number">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone">
                            <label for="Message">Additional Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<script>
  function  changeSpecialist($data){
       var Specialist_id = $('#specialistId').val();
        $.ajax({
            url:'{{route('specialwise.doctor')}}',
            method:"POST",
            data:{
                _token:'{{csrf_token()}}',
                id:Specialist_id
            },
            success:function (response){
                var data = $.parseJSON(response)
                $('#DoctorSpecialistWise').html(data.html);
            }

        })
    }
</script>
