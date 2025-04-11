<div class="flex gap-2">
    <div class="flex gap-2 mr-auto">
        <div class="flex gap-2 mr-auto">
            @if ($lesson->previos)
                <a href="{{ $lesson->previos->routeUrl }}" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                    <x-icon name="left"/>
                </a>
            @endif
            @if ($lesson->next)
                <a href="{{ $lesson->next->routeUrl }}" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                    <x-icon name="right"/>
                </a>
            @endif
        </div>
        
        
    </div>

    <a href="{{ $lesson->course->routeUrl }}" 
        class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
        All lessons
    </a>
    <a href="#" 
    target="_blank" 
    class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
    Source Code
    </a>
</div>