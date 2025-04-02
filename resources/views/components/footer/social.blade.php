@php
    $links = [
        'icon1' => '#',
        'icon2' => '#',
        'icon3' => '#',
        'icon4' => '#',
    ]
@endphp

<ul class="flex gap-4">
    @foreach ($links as $key => $link)
    <li>
        <a href="{{ $link }}">
        <x-icon name="{{ $key }}" />
        </a>
    </li>
        
    @endforeach
    
    
</ul>
