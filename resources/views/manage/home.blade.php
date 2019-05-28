@extends('layouts.manage')

@section('title', '小敏的博客')

@section('header')
    <h1>
        Home
        <small>小敏的博客</small>
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 20px;">
                <strong>开发者信息</strong>
                <p>Name : mingo</p>
                <p>博客地址 : <a href="{{ config('app.url') }}" target="_blank">小敏的博客</a></p>
                <p>项目地址 : <a href="https://github.com/themismin" target="_blank">Github</a></p>
            </div>
        </div>
    </div>
@endsection