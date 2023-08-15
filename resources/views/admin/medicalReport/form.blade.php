<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="patient_id">Patient Name</label>

            <select name="appointment_id" value="{{ old('appointment_id', $medicalReport->appointment_id ?? '') }}"
                    class="form-control @error('appointment_id')is-invalid @enderror" id="appointmentId"
                    placeholder="Patient Name">
                <option>--Select Patient Name--</option>
                @foreach($medicalReports['appointments'] as $appointment)
                    <option id="appointment_id" value="{{$appointment->id}}" selected="selected">{{$appointment->patient_name}}</option>
                @endforeach
            </select>
            @error('appointment_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="general_labtest">General lab Test</label>

            <select name="general_labtest_id" value="{{ old('general_labtest_id', $medicalReport->general_labtest_id ?? '') }}"
                    class="form-control @error('general_labtest_id')is-invalid @enderror" id="patientId"
                    placeholder="General Lab Test">
                <option>--Select General Lab Test--</option>
                @foreach($medicalReports['general_labtests'] as $generalLabtest)
                    <option id="general_labtest" value="{{$generalLabtest->id}}" selected="selected">{{$generalLabtest->general_labtest}}</option>
                @endforeach
            </select>
            @error('general_labtest_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <label for="precaution">Precaution</label>
            {!! Form::text('precaution',$data['row']->precaution??null,[
                'class'=> $errors->has('precaution')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Precaution',
               ]) !!}
            @error('precaution')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

{{--    <div class="col-md-4">--}}
{{--        <div class="form-group">--}}
{{--            <label for="patient_id">patient Name</label>--}}
{{--            {!! Form::select('patient_id', $data['patients'],null,[--}}
{{--                'class'=> $errors->has('patient_id')?'form-control is-invalid':'form-control',--}}
{{--                'placeholder'=>'--SELECT patient--',--}}
{{--                'id' =>'patient_id',--}}
{{--                ]) !!}--}}
{{--            @error('patient_id')--}}
{{--            <span class="help-block invalid-feedback">--}}
{{--                     <strong> {{ $message }} </strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}

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


</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Medical Report</button>
</div>
