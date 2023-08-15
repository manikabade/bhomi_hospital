<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="specialist_id">Specailist Name</label>

            <select name="specialist_id" value="{{ old('specialist_id', $scheduleManagement->specialist_id ?? '') }}"
                    class="form-control @error('specialist_id')is-invalid @enderror" id="specialistId"
                    placeholder="Specailist Name">
                <option>--Select Specailist Name--</option>
                @foreach($scheduleManagements['specialists'] as $specialist)
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

