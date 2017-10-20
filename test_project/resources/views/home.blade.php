<?php session_start();?>
@extends('layouts.app')
@section('content')
    <h1>members</h1>
 
    <hr/>
    @foreach($members as $member)
        <member>
            <h2>
                <a href="{{ url('members', $member->id) }}">
                    {{ $member->name }}
                </a>
            </h2>
        </member>
    @endforeach
    {!! link_to('members/create', '新規作成', ['class' => 'btn btn-primary']) !!}
@endsection
