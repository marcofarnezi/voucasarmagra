
@extends('template');

@section('content')

    <h1>Novo Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

    @include('admin.posts._form')
    <!-- Tags Form Imput -->

    <div>
        {!! Form::label('fotos_index', 'Fotos index') !!}
        {!! Form::textarea('fotos_index', null, ['class' => 'form-control']) !!}
    </div>

    <div>
        {!! Form::submit('Criar Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    <script>
        CKEDITOR.replace( 'texto' );
        CKEDITOR.replace( 'texto_index' );
    </script>

@stop
