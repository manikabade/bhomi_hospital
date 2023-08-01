<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="patient_id">Patient Name</label>

            <select name="patient_id" value="{{ old('patient_id', $generalLabtest->patient_id ?? '') }}"
                    class="form-control @error('patient_id')is-invalid @enderror" id="patientId"
                    placeholder="Patient Name">
                <option>--Select Patient Name--</option>
                @foreach($generalLabtests['patients'] as $patient)
                    <option id="patient_id" value="{{$patient->id}}" selected="selected">{{$patient->patient_name}}</option>
                @endforeach
            </select>
            @error('patient_id')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
{{--    <div class="col-sm-6">--}}
{{--        <div class="form-group">--}}
{{--            <label for="general_labtest">General lab Test</label>--}}
{{--            {!! Form::text('general_labtest',$data['row']->general_labtest??null,[--}}
{{--                'class'=> $errors->has('general_labtest')?'form-control is-invalid':'form-control',--}}
{{--                    'placeholder'=>'Enter General lab Test',--}}
{{--               ]) !!}--}}
{{--            @error('general_labtest')--}}
{{--            <span class="error invalid-feedback">--}}
{{--                   {{ $message }}--}}
{{--                </span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-sm-6">
        <!-- text input -->
        <div class="form-group">
            <label for="general_labtest">General Lab Test</label>
            <select name="general_labtest" value="{{ old('general_labtest', $application->general_labtest ?? '') }}"
                    class="form-control @error('general_labtest')is-invalid @enderror" id="general_labtest">
                <option>Blood Test</option>
                <option>Urine test</option>
                <option>Height</option>
                <option>Weight</option>
                <option>Blood Pressure</option>
                <option>Height</option>
            </select>
            @error('general_labtest')
            <span class="error invalid-feedback">
                        {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="report">Report</label>
            {!! Form::text('report',$data['row']->report??null,[
                'class'=> $errors->has('report')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Report',
               ]) !!}
            @error('report')
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
    <div class="col-md-12">
        <div class="form-group">
            <label for="remarks">Remarks</label>
            {!! Form::textarea('remarks',$data['row']->remarks??null,[
                  'class'=> $errors->has('remarks')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Remarks',
                  'id' => 'summernote'
                  ]) !!}
            @error('remarks')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
                    </span>
            @enderror
        </div>
    </div>




</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit General Lab Test</button>
</div>
