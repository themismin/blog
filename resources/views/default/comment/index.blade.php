<?php
$commentPlugin = $systemPresenter->getKeyValue('comment_plugin');
$shortName = $systemPresenter->getKeyValue($commentPlugin.'_short_name');
?>
@if($commentPlugin !='' && $shortName != '')
    @if($commentPlugin == 'disqus')
        @include('default.comment.disqus')
    @endif
@endif