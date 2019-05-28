@inject('systemPresenter', 'App\Presenters\SystemPresenter')

@extends('default.page')

@section('title', $systemPresenter->checkReturnValue('title', $page->title))

@section('description', $systemPresenter->checkReturnValue('seo_desc', $page->desc))

@section('keywords', $systemPresenter->checkReturnValue('seo_keyword', $page->keyword))

@section('header-text')
    <div class="header-text">
        <div class="text-inner">
            <div class="row to-animate fadeInUp animated">
                <div class="col-md-12">
                    <h3 class="color-break">
                        {{ $page->title }}
                    </h3>

                    <p class="color-break m-t-25">
                        {{ $page->desc }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="markdown-preview" style="padding:0;">
            {!! $page->html_content !!}
        </div>

        <!-- 评论插件 -->
        @include('default.comment.index', [
            'commentId' => "page-".$page->id,
            'commentTitle' => $page->title,
            'commentUrl' => Request::getUri()
        ])
    </div>

@endsection

