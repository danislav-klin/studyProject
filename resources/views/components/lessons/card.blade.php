<a href="{{ $lesson->routeUrl }}" class="flex flex-col gap-2 p-4 rounded-md bg-gray-100 hover:bg-gray-200">
    <div class="flex gap-2 justify-between font-mono">
        <span class="text-sm">{{ $lesson->number }}</span>
        <span class="text-sm text-gray-600">5m 32sec</span>
    </div>
    <h3 class="text-semibold">{{ $lesson->title }}</h3>
</a>