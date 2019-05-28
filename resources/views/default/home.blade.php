@inject('systemPresenter', 'App\Presenters\SystemPresenter')

@extends('layouts.app')

@section('title', $systemPresenter->getKeyValue('title'))

@section('description', $systemPresenter->getKeyValue('seo_desc'))

@section('keywords', $systemPresenter->getKeyValue('seo_keyword'))

@section('content')
    <div class="content">
        @include('default.article')
    </div>
@endsection
