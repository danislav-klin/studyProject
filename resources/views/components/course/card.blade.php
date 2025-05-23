<a href="{{ $course->routeUrl  }}" class="rounded-md bg-gray-100 hover:bg-gray-200">
    <article class="flex flex-col h-full p-4">
        <header>
            <h3 class="font-semibold text-xl">{{ $course->title }}</h3>
        </header>
        <p class="font-normal mb-8 mt-2">{{ $course->description }}</p>
        <footer class="flex gap-2 justify-between mt-auto">
            <div class="flex items-center gap-2">
                <x-icon name="film" />
                <span class="text-sm font-semibold">{{ $course->lessons()->count() }} lessons</span>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="clock" />

                <span class="text-sm font-semibold">{{ $course->formattedLength }}</span>
            </div>
        </footer>
    </article>
</a>