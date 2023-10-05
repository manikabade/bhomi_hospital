    <section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Latest News</h2>
                </div>
            </div>
            @forelse($data['_news'] as $newses)
                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news/{{$newses->id}}">
                            <img src="{{asset('images/news')}}/{{$newses->image}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>{{$newses->created_at->format('Y','m','d')}}</span>
                            <h3><a href="news/{{$newses->id}}">{{$newses->title}}</a></h3>
                            <p>
                                {!! $newses->excerpt !!}
                            </p>
                            <div class="author">
                                <img src="{{asset('front/images/khanal.png')}}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>{{$newses->author}}</h5>
                                    <p>{{$newses->designation->designation_name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
