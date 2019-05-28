<div id="navbar" class="navbar-collapse collapse">
    @inject('navPresenter', 'App\Presenters\NavigationPresenter')
    <ul class="nav navbar-nav navbar-left">
        <?php $navigations = $navPresenter->simpleNavList(); ?>
        @if ($navigations)
            @foreach ($navigations as $navigation)
                    <li><a href="{{ $navigation->url }}"><span>{{ $navigation->name }}</span></a></li>
            @endforeach
        @endif
    </ul>
</div>