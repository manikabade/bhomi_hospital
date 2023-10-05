<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="doctor_id">Doctor Name</label>

            <select name="doctor_id" value="{{ old('doctor_id', $scheduleManagement->doctor_id ?? '') }}"
                    class="form-control @error('doctor_id')is-invalid @enderror" id="doctorId"
                    placeholder="doctor Name">
                <option>--Select Doctor Name--</option>
                @foreach($scheduleManagements['doctors'] as $doc)
                    <option id="doctor_id" value="{{$doc->id}}" selected="selected">{{$doc->doctor_name}}</option>
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
            <label for="time_for_appointment">Time For Appointment</label>
            {!! Form::text('time_for_appointment',$data['row']->time_for_appointment??null,[
                'class'=> $errors->has('time_for_appointment')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Time For Appointment',
               ]) !!}
            @error('time_for_appointment')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-12">
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



</div>



<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Schedule Management</button>
</div>

