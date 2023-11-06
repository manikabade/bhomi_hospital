{{ $errors }}
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="name">Name</label>

            {!! Form::text('name',$data['row']->name??null,[
                'class'=> $errors->has('name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Name',
               ]) !!}
            @error('name')
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
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    {!! Form::password('password',$data['row']->password??null,[
                        'class'=> $errors->has('password')?'form-control is-invalid':'form-control',
                            'placeholder'=>'Enter Password',
                       ]) !!}
                    @error('password')
                    <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                    @enderror
                </div>
            </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        {!! Form::password('Password Confirmation',[
                            'class'=> $errors->has('password_confirmation')?'form-control is-invalid':'form-control',
                                'placeholder'=>'Enter your previous password again',
                           ]) !!}
                        @error('password_confirmation')
                        <span class="error invalid-feedback">
                       {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>
        </div>

{{--    <div class="col-sm-6">--}}
{{--        <div class="form-group">--}}
{{--            <label class="">Status</label>--}}
{{--            <div class="form-check">--}}

{{--                {!! Form::select('status',['1' => 'Active', '0' => 'InActive'], $data['row']->status ??null,[--}}
{{--                         'class'=> $errors->has('status')?'form-control is-invalid':'form-control',--}}

{{--                                                    ]) !!}--}}
{{--                --}}{{--                <input class="form-check-input @error('status')is-invalid @enderror"--}}
{{--                --}}{{--                       {{ old('status', $doctor->status ?? '')? "checked": "" }}--}}
{{--                --}}{{--                       type="checkbox" name="status">--}}
{{--                @error('status')--}}
{{--                <span class="error invalid-feedback">--}}
{{--                        {{ $message }}--}}
{{--                </span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--</div>--}}


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit User</button>
</div>
