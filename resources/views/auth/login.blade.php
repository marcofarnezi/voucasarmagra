@extends('template');

@section('content')
    as
    {!!  Form::open(array('url' => 'login'))  !!}
        <h1>Login</h1>

        <!-- if there are login errors, show them here -->
        <p>
            {!!  $errors->first('email') !!}
            {!! $errors->first('password') !!}
        </p>

        <p>
            {!! Form::label('email', 'Email Address') !!}
            {!! Form::text('email', null, array('placeholder' => 'awesome@awesome.com')) !!}
        </p>

        <p>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password') !!}
        </p>

        <p>{!! Form::submit('Submit!') !!}</p>
    {!!  Form::close()  !!}
@stop
