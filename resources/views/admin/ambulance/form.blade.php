<div class="row">
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
    <button type="submit" class="btn btn-primary">Submit Ambulance</button>
</div>
