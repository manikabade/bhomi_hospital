{{$errors}}
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="patient_name">Patient Name</label>
            {!! Form::text('patient_name',$data['row']->patient_name??null,[
                'class'=> $errors->has('patient_name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Patient Name',
               ]) !!}
            @error('patient_name')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="email">Email</label>
            {!! Form::text('email',$data['row']->email??null,[
                'class'=> $errors->has('email')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Email',
               ]) !!}
            @error('email')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            {!! Form::text('phone_number',$data['row']->phone_number??null,[
                'class'=> $errors->has('phone_number')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Phone Number',
               ]) !!}
            @error('phone_number')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <!-- text input -->
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" value="{{ old('gender', $application->gender ?? '') }}"
                    class="form-control @error('gender')is-invalid @enderror" id="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            @error('gender')
            <span class="error invalid-feedback">
                        {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="date_of_birth">Date Of Birth</label>
            {!! Form::date('date_of_birth',$data['row']->date_of_birth??null,[
                'class'=> $errors->has('date_of_birth')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Date Of Birth',
               ]) !!}
            @error('date_of_birth')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="age">Age</label>
            {!! Form::number('age',$data['row']->age??null,[
                'class'=> $errors->has('age')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Age',
               ]) !!}
            @error('age')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="patient_address">Patient Address</label>
            {!! Form::text('patient_address',$data['row']->patient_address??null,[
                'class'=> $errors->has('patient_address')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Patient Address',
               ]) !!}
            @error('patient_address')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <!-- text input -->
        <div class="form-group">
            <label for="blood_group">Blood Group</label>
            <select name="blood_group" value="{{ old('blood_group', $application->blood_group ?? '') }}"
                    class="form-control @error('blood_group')is-invalid @enderror" id="blood_group">
                <option>A+</option>
                <option>A-</option>
                <option>B-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
            @error('blood_group')
            <span class="error invalid-feedback">
                        {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="specialist_id">Specialist</label>
            <select name="specialist_id" value="{{ old('specialist_id', $appointment->specialist_id ?? '') }}"
                    class="form-control @error('specialist_id')is-invalid @enderror" id="specialistId"
                    placeholder="Specialist">
                <option>--Select Specialist--</option>
                @foreach($appointments['specialists'] as $specialist)
                    <option id="specialist_id" value="{{$specialist->id}}" selected="selected">{{$specialist->specialist_name}}</option>
                @endforeach
            </select>
            @error('specialist_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" value="{{ old('doctor_id', $appointment->doctor_id ?? '') }}"
                    class="form-control @error('doctor_id')is-invalid @enderror" id="doctorId"
                    placeholder="doctor">
                <option>--Select Doctor--</option>
                @foreach($appointments['doctors'] as $doctor)
                    <option id="doctor_id" value="{{$doctor->id}}" selected="selected">{{$doctor->doctor_name}}</option>
                @endforeach
            </select>
            @error('doctor_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="appointment_date">Appointment Date</label>
            {!! Form::date('appointment_date',$data['row']->appointment_date??null,[
                'class'=> $errors->has('appointment_date')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Appointment Date',
               ]) !!}
            @error('appointment_date')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="schedule_management_id">Time For Appointment</label>

            <select name="schedule_management_id" value="{{ old('schedule_management_id', $appointment->schedule_management_id ?? '') }}"
                    class="form-control @error('schedule_management_id')is-invalid @enderror" id="patientId"
                    placeholder="Patient Name">
                <option>--Select Time for Appointment--</option>
                @foreach($appointments['schedule_managements'] as $scheduleManagement)
                    <option id="schedule_management" value="{{$scheduleManagement->id}}" selected="selected">{{$scheduleManagement->time_for_appointment}}</option>
                @endforeach
            </select>
            @error('schedule_management_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="message">Additional Message</label>
            {!! Form::textarea('message',$data['row']->message??null,[
                  'class'=> $errors->has('message')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Additional Message',
                  'id' => 'summernote'
                  ]) !!}
            @error('message')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="main_photo">Voucher Image</label>
                {!! Form::file('main_photo',[
                    'class'=> $errors->has('main_photo')?'form-control is-invalid':'form-control',
                        'placeholder'=>'Enter Image',
                   ]) !!}
                @error('main_photo')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        @if($edit =="1")
            <div class="col-sm-3">
                <div class="form-group">
                    @if(isset($data['row']->image))
                        <img  style="height: 150px;" src="{{asset('/images/appointment/'.$data['row']->image)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

        @endif
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="">Status</label>
            <div class="form-check">

                {!! Form::select('status',['1' => 'Active', '0' => 'InActive'], $data['row']->status ??null,[
                         'class'=> $errors->has('status')?'form-control is-invalid':'form-control',

                                                    ]) !!}
{{--                <input class="form-check-input @error('status')is-invalid @enderror"--}}
{{--                       {{ old('status', $appointment->status ?? '')? "checked": "" }}--}}
{{--                       type="checkbox" name="status">--}}
                @error('status')
                <span class="error invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>


</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Appointment</button>
</div>
