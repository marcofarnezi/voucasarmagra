<div>
    {!! Form::label('categoria_id', 'Categoria') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('titulo_index', 'Título para index') !!}
    {!! Form::text('titulo_index', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('subtitulo_index', 'SubTítulo para index') !!}
    {!! Form::text('subtitulo_index', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('texto_index', 'Texto para index') !!}
    {!! Form::textarea('texto_index', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('titulo', 'Título post') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('texto', 'Texto') !!}
    {!! Form::textarea('texto', null, ['class' => 'form-control']) !!}
</div>
