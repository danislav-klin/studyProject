

<ul class="flex gap-4">
    @foreach (config('watch.social_network') as $key => $link)
    <li>
        <a href="{{ $link }}">
        <x-icon name="{{ $key }}" />
        </a>
    </li>
        
    @endforeach
    
    
</ul>
