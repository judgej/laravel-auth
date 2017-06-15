<div class="row">
    @if(Config::get('services.facebook.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'facebook']), 'fa fa-facebook', 'Facebook', array('class' => 'btn btn-block btn-social btn-facebook')) !!}
        </div>
    @endif

    @if(Config::get('services.twitter.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'twitter']), 'fa fa-twitter', 'Twitter', array('class' => 'btn btn-block btn-social btn-twitter')) !!}
        </div>
    @endif

    @if(Config::get('services.google.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'google']), 'fa fa-google-plus', 'Google +', array('class' => 'btn btn-block btn-social btn-google')) !!}
        </div>
    @endif

    @if(Config::get('services.github.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'github']), 'fa fa-github', 'GitHub', array('class' => 'btn btn-block btn-social btn-github')) !!}
        </div>
    @endif

    @if(Config::get('services.youtube.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'youtube']), 'fa fa-youtube', 'YouTube', array('class' => 'btn btn-block btn-social btn-youtube')) !!}
        </div>
    @endif

    @if(Config::get('services.twitch.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'twitch']), 'fa fa-twitch', 'Twitch', array('class' => 'btn btn-block btn-social btn-twitch')) !!}
        </div>
    @endif

    @if(Config::get('services.instagram.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => 'instagram']), 'fa fa-instagram', 'Instagram', array('class' => 'btn btn-block btn-social btn-instagram')) !!}
        </div>
    @endif

    @if(Config::get('services.37signals.client_id'))
        <div class="col-xs-6 margin-bottom-1">
            {!! HTML::icon_link(route('social.redirect',['provider' => '37signals']), 'fa fa-signal', 'Basecamp', array('class' => 'btn btn-block btn-social btn-basecamp')) !!}
        </div>
    @endif
</div>