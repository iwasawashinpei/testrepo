@extends('layout')
 
@section('content')
    <h1>ユーザー情報変更</h1>
 
    <hr/>
    
    @include('errors.form_errors')
    
    {!! Form::model($member, ['method' => 'PATCH', 'url' => ['members', $member->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', '名前:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tel', '電話番号:') !!}
            {!! Form::text('tel', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'パスワード:') !!}
            <br>
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('re_password', 'パスワード再入力:') !!}
            <br>
            {!! Form::password('re_password', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('note', '備考:') !!}
            {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ユーザー情報変更', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection
