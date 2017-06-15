<div class="row">
    <div class="col-md-12 margin-bottom-2 text-center">
        @if(Config::get('services.facebook.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'facebook']), 'fa fa-facebook', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-facebook')) !!}
        @endif
        @if(Config::get('services.twitter.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => '']), 'fa fa-twitter', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-twitter')) !!}
        @endif
        @if(Config::get('services.google.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'google']), 'fa fa-google-plus', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-google')) !!}
        @endif
        @if(Config::get('services.github.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'github']), 'fa fa-github', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-github')) !!}
        @endif
        @if(Config::get('services.youtube.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'youtube']), 'fa fa-youtube', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-youtube')) !!}
        @endif
        @if(Config::get('services.twitch.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'twitch']), 'fa fa-twitch', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-twitch')) !!}
        @endif
        @if(Config::get('services.instagram.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => 'instagram']), 'fa fa-instagram', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-instagram')) !!}
        @endif
        @if(Config::get('services.37signals.client_id'))
            {!! HTML::icon_link(route('social.redirect',['provider' => '37signals']), 'fa fa-signal', '', array('class' => 'btn btn-social-icon btn-lg margin-half btn-basecamp')) !!}
        @endif
    </div>
</div>