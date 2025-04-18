<div class="w-1/2">
    <article class="flex flex-col gap-4 sticky top-24">
    <header >
        <h2 class="text-lg font-semibold">Last Updated: {{ $course->updated_at->format('M d, Y') }}</h2>
        
    </header>
    <p>{{ $course->description }}</p>
    <footer class="flex gap-2">
        
        <a href="{{ $course->firstLesson->routeUrl }}" class="text-center whitespace-nowrap rounded-md fonr-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600 grow">Start Watching</a>

        <a href="https://github.com" class="text-center whitespace-nowrap rounded-md fonr-semibold px-4 py-2 bg-gray-100  hover:bg-gray-200 grow">Source Code</a>
    </footer>
</article>
</div>
