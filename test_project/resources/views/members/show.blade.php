@extends('layouts.app')
 
@section('content')
    <h1>{{ $member->name }}</h1>
 
    <hr/>
 
    <member>
        <div class="body">
        パスワード:{{ $member->password }}<br>
        電話番号:{{ $member->tel }}<br>
        備考:{{ $member->note }}
        </div>
    </member>
    
    {!! link_to(action('MembersController@edit', [$member->id]), '編集', ['class' => 'btn btn-primary']) !!}
    {!! Form::open(['method' => 'DELETE', 'url' => ['members', $member->id]]) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection