<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="doctor_name">Doctor Name</label>
            {!! Form::text('doctor_name',$data['row']->doctor_name??null,[
                'class'=> $errors->has('doctor_name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Doctor Name',
               ]) !!}
            @error('doctor_name')
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
            {!! Form::number('phone_number',$data['row']->phone_number??null,[
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
            <label for="hospital_name">Hospital Name</label>
            {!! Form::text('hospital_name',$data['row']->hospital_name??null,[
                'class'=> $errors->has('hospital_name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Hospital Name',
               ]) !!}
            @error('hospital_name')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="hospital_address">Hospital Address</label>
            {!! Form::text('hospital_address',$data['row']->hospital_address??null,[
                'class'=> $errors->has('hospital_address')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Hospital Address',
               ]) !!}
            @error('hospital_address')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="specialist_id">Specialist</label>
            <select name="specialist_id" value="{{ old('specialist_id', $doctor->specialist_id ?? '') }}"
                    class="form-control @error('specialist_id')is-invalid @enderror" id="specialistId"
                    placeholder="Specialist">
                <option>--Select Specialist--</option>
                @foreach($doctors['specialists'] as $specialist)
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
            <label for="day_from">Day From</label>
            {!! Form::text('day_from',$data['row']->day_from??null,[
                'class'=> $errors->has('day_from')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Day From',
               ]) !!}
            @error('day_from')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="day_to">Day To</label>
            {!! Form::text('day_to',$data['row']->day_to??null,[
                'class'=> $errors->has('day_to')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Day To',
               ]) !!}
            @error('day_to')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="bio">Bio</label>
            {!! Form::textarea('bio',$data['row']->bio??null,[
                  'class'=> $errors->has('bio')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Bio',
                  'id' => 'summernote'
                  ]) !!}
            @error('bio')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="degree">Degree</label>
            {!! Form::text('degree',$data['row']->degree??null,[
                'class'=> $errors->has('degree')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Degree',
               ]) !!}
            @error('degree')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>



    <div class="col-sm-6">
        <div class="form-group">
            <label class="">Status</label>
            <div class="form-check">

                {!! Form::select('status',['1' => 'Active', '0' => 'InActive'], $data['row']->status ??null,[
                         'class'=> $errors->has('status')?'form-control is-invalid':'form-control',

                                                    ]) !!}
{{--                <input class="form-check-input @error('status')is-invalid @enderror"--}}
{{--                       {{ old('status', $doctor->status ?? '')? "checked": "" }}--}}
{{--                       type="checkbox" name="status">--}}
                @error('status')
                <span class="error invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="main_photo">Image</label>
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
                        <img  style="height: 150px;" src="{{asset('/images/doctor/'.$data['row']->image)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

        @endif
    </div>
</div>




<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Doctor</button>
</div>
