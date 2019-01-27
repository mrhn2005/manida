

@if(!isset($innerLoop))
<ul class="navigation">
 
@else
<ul>

@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp


@foreach ($items as $item)

    @php
        $originalItem = $item;
        if($item->title=='Products'){
            $originalItem->children=$options->categories->where('parent_id',null)->all();
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(count($originalItem->children)>0) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '';

             if(url($item->link()) == url()->current()){
                 $listItemClass = 'dropdown active';
             }else{
                 $listItemClass = 'dropdown';
             }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }
       
    @endphp
    
	<li class="{{ $listItemClass }}">
		<a href="{{$item->link()}}">
			@if(!isset($innerLoop))
			<span class="menu-description">
				<i class="{{ $item->icon_class }}"></i>
			</span>
			
			<span class="menu-title">
				{{ $item->getTranslatedAttribute('title') }}
			</span>
			@else
				{{ $item->getTranslatedAttribute('title') }}
			@endif
		</a>
		@if(count($originalItem->children)>0)
        @include('front.common.menu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
	</li>

@endforeach
@if(!isset($innerLoop))
@include('front.common.language-selector')
@endif
</ul>
 