@extends('templates.template')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $k => $post)
            @include('index.post'.($k%2+1))
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
    <center>{!! $posts->render() !!}</center>
@stop

@section('contact_form')
    {!! Form::open(['route' => 'index.mail', 'method' => 'post']) !!}
    <div class="col-md-6">
        <div class="form-group">
            <label for="InputName">Nome</label>
            <div class="input-group">
                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Escreva seu nome" required>
                <span class="input-group-addon" id="name"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <div class="form-group">
            <label for="InputEmail">E-mail</label>
            <div class="input-group">
                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Escreva seu E-mail" required  >
                <span class="input-group-addon" id="mail"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <div class="form-group">
            <label for="InputMessage">Messagem</label>
            <div class="input-group">
                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                <span class="input-group-addon" id="message"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-embossed btn-primary pull-right">
    </div>
    {!! Form::close() !!}
@stop
