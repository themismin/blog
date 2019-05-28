@inject('systemPresenter', 'App\Presenters\SystemPresenter')

@extends('layouts.app')

@section('title', $systemPresenter->checkReturnValue('title', $article->title))

@section('description', $systemPresenter->checkReturnValue('seo_desc', $article->desc))

@section('keywords', $systemPresenter->checkReturnValue('seo_keyword', $article->keyword))

@section('header-text')
    <div class="header-text">

        <div class="text-inner">
            <div class="row">
                <div class="col-md-12 to-animate fadeInUp animated">
                    <h3 class="color-break">
                        {{ $article->title }}
                    </h3>

                    <p class=" m-t-25 color-break article-info">
                        <span><i class="glyphicon glyphicon-calendar"></i>{{ $article->created_at }}</span>
                        @if($article->category)
                            <span>
                                <i class="glyphicon glyphicon-th-list"></i>
                                <a href="{{ route('category', ['id' => $article->cate_id]) }}" target="_blank">
                                    {{ $article->category->name }}
                                </a>
                            </span>
                        @endif
                        @if(count($article->tag) > 0)
                            <span>
                                <i class="glyphicon glyphicon-tags"></i>&nbsp;
                                @foreach ($article->tag as $tag)
                                    <a href="{{ route('tag', ['id' => $tag->id]) }}" target="_blank">
                                        {{ $tag->tag_name }}
                                    </a>
                                @endforeach
                            </span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="markdown-preview">
            {!! $article->html_content !!}
        </div>

        <!-- 评论插件 -->
        @include('default.comment.index', [
            'commentId' => $article->id,
            'commentTitle' => $article->title,
            'commentUrl' => Request::getUri()
        ])
    </div>
@endsection
