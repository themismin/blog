@if($articles)
    <ol class="article-list">
        @foreach ($articles as $article)
            <li>
                <h4 class='title'>
                    <a href="{{ route('article',['id' => $article->id]) }}" target="_blank">
                        {{$article->title}}
                    </a>
                </h4>
                <p class="desc">
                    {{$article->desc}}
                </p>
                <p class="info">
                    <span><i class="glyphicon glyphicon-calendar"></i>{{ date('Y-m-d', strtotime($article->created_at)) }}</span>
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
                    <span><i class="glyphicon glyphicon-eye-open"></i> {{ $article->read_count }} views</span>
                </p>
            </li>
        @endforeach
    </ol>
    {!! $articles->links() !!}
@else
    <h3>没有文章哟！！！</h3>
@endif