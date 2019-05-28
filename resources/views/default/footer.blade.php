<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="margin-top:15px;">
                    <strong>Powered by <a href="{{ config('app.url') }}" target="_blank">Mingo</a></strong>
                    &nbsp;&nbsp;
                    <a href='https://github.com/themismin' target="_blank">
                        <span class="icon-github" style="padding-right:20px;"></span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
{!! $systemPresenter->getKeyValue('statistics_script') !!}