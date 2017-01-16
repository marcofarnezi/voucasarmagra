@extends('templates.post')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $k => $post)
            @include('index.post'.($k%4+1))
        @endforeach
    @else
        <div id="downloadlink" class="banner_nada content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center wrap_title" style="color:rgb(200,200,200);">
                        <h2>Em breve Novidades.</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop

