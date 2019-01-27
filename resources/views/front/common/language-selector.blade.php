<li class="dropdown  language-selector">
    <a class=" dropdown-toggle" type="button" data-toggle="dropdown" href=#>
        <img class="flag" src="/images/flags/{{config('app.locales')[app()->getLocale()]}}.jpg" /> 
        {{ config('app.locales')[app()->getLocale()] }}
        </a>
    <ul class="dropdown">
    	@foreach (config('app.locales') as $localeKey => $locale)
            @if ($localeKey != app()->getLocale())
                <li><a class="dropdown-item" href="{{ route('locale.switch', $localeKey) }}">
                	<img class="flag" src="/images/flags/{{$locale}}.jpg" />
                    {{ $locale }}
                </a></li>
            @endif
        @endforeach

    </ul>
</li>