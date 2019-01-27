@foreach($socials as $social)
    <li><a href="{{$social->getTranslatedAttribute('link')}}"><i class="{{$social->icon}}"></i></a></li>
@endforeach