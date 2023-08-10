<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="title">Title</label>
            {!! Form::text('title',$data['row']->title??null,[
                'class'=> $errors->has('title')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Title',
               ]) !!}
            @error('title')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="alias">Alias</label>
                {!! Form::text('alias',$data['row']->alias??null,[
                    'class'=> $errors->has('alias')?'form-control is-invalid':'form-control',
                        'placeholder'=>'Enter Alias',
                   ]) !!}
                @error('alias')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="working_day">Working Day</label>
            {!! Form::text('working_day',$data['row']->working_day??null,[
                'class'=> $errors->has('working_day')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Working Day(eg. Sunday-Friday)',
               ]) !!}
            @error('working_day')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="working_time">Working Time</label>
            {!! Form::time('working_time',$data['row']->working_time??null,[
                'class'=> $errors->has('working_time')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Working Time(eg.10:00AM-5:00PM)',
               ]) !!}
            @error('working_time')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="closed_day">Closed Day</label>
            {!! Form::text('closed_day',$data['row']->closed_day??null,[
                'class'=> $errors->has('closed_day')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Closed Day(eg.Saturday)',
               ]) !!}
            @error('closed_day')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="closed_time">Closed Time</label>
            {!! Form::time('closed_time',$data['row']->closed_time??null,[
                'class'=> $errors->has('closed_time')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Closed Time(eg.5:00PM-10:AM)',
               ]) !!}
            @error('closed_time')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            {!! Form::textarea('description',$data['row']->description??null,[
                  'class'=> $errors->has('description')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Bio',
                  'id' => 'summernote'
                  ]) !!}
            @error('description')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
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
            <label for="phone">Phone No.</label>
            {!! Form::text('phone',$data['row']->phone??null,[
                'class'=> $errors->has('phone')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Phone No.',
               ]) !!}
            @error('phone')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="copyright">Copyright</label>
            {!! Form::text('copyright',$data['row']->copyright??null,[
                'class'=> $errors->has('copyright')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Copyright',
               ]) !!}
            @error('copyright')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="facebook">Facebook</label>
            {!! Form::text('facebook',$data['row']->facebook??null,[
                'class'=> $errors->has('facebook')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Facebook',
               ]) !!}
            @error('facebook')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="twitter">Twitter</label>
            {!! Form::text('twitter',$data['row']->twitter??null,[
                'class'=> $errors->has('twitter')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Twitter',
               ]) !!}
            @error('twitter')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="youtube">Youtube</label>
            {!! Form::text('youtube',$data['row']->youtube??null,[
                'class'=> $errors->has('youtube')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Youtube',
               ]) !!}
            @error('youtube')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="insta">Insta</label>
            {!! Form::text('insta',$data['row']->insta??null,[
                'class'=> $errors->has('insta')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Insta',
               ]) !!}
            @error('insta')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="footer_text">Footer Text</label>
            {!! Form::text('footer_text',$data['row']->footer_text??null,[
                'class'=> $errors->has('footer_text')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Footer Text',
               ]) !!}
            @error('footer_text')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="main_photo">Photo</label>
                {!! Form::file('main_photo',[
                    'class'=> $errors->has('main_photo')?'form-control is-invalid':'form-control',
                   ]) !!}
                @error('main_photo')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>


            <div class="col-sm-3">
                <div class="form-group">
                    @if(isset($data['row']->photo))
                        <img  style="height: 100px;" src="{{asset('/images/site-setting/photo/'.$data['row']->photo)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

    </div>

    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="main_logo">logo</label>
                {!! Form::file('main_logo',[
                    'class'=> $errors->has('main_logo')?'form-control is-invalid':'form-control',
                   ]) !!}
                @error('main_logo')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>

            <div class="col-sm-3">
                <div class="form-group">
                    @if(isset($data['row']->logo))
                        <img  style="height: 100px;" src="{{asset('/images/site-setting/logo/'.$data['row']->logo)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

    </div>



</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit SiteSetting</button>
</div>
