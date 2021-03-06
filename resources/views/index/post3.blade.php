<div class="content-section-a">

    <div class="container">

        <div class="row">



            <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                <h3 class="section-heading">{{ $post->titulo_index }}</h3>
                <div class="sub-title lead3">{{ $post->subtitulo_index }}</div>
                <p class="lead">
                    {!! $post->texto_index !!}
                </p>

            </div>
            <div class="col-sm-6 wow fadeInLeftBig">
                <div id="owl-demo-1" class="owl-carousel">
                    @foreach($post->files as $file)
                        <a href="{{ $file->path }}" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="{{ $file->path }}" alt="">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>