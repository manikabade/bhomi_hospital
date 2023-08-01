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
                   <img  style="height: 150px;" src="{{asset('/images/slider/'.$data['row']->image)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

        @endif
    </div>
</div>


<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Slider</button>
</div>
