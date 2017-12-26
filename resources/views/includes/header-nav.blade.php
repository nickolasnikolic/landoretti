<div class="stretch-bg">
    <div class="wrapper">
        <div class="header-nav">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">@lang('header.home')</a></li>
                    <li><a href="#">@lang('header.art')</a></li>
                    <li><a href="#">@lang('header.isearch')</a></li>
                    <li><a href="#">@lang('header.myauctions')</a></li>
                    <li><a href="#">@lang('header.mybids')</a></li>
                    <li><a href="#">@lang('header.contact')</a></li>
                </ul>
            </nav>
            <span class="languages">
                <ul>
                    <li>
                        <a href="/nl/{{ Route::currentRouteName() }}" {{ App::isLocale('nl') ? 'class=active' : null }}>
                            @lang('header.nl')
                        </a>
                    </li>
                    <li>
                        <a href="/fr/{{ Route::currentRouteName() }}" {{ App::isLocale('fr') ? 'class=active' : null }}>
                            @lang('header.fr')
                        </a>
                    </li>
                    <li>
                        <a href="/en/{{ Route::currentRouteName() }}" {{ App::isLocale('en') ? 'class=active' : null }}>
                            @lang('header.en')
                        </a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</div>
