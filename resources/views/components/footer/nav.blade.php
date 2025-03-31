

<ul class="flex gap-4">
    @foreach ($items as $href => $label)
        <x-footer.nav-item :$href>{{ $label }}</x-footer.nav-item>
    @endforeach
</ul>