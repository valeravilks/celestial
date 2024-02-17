<ul class="flex gap-2">
  @foreach($menu as $men)
    <x-atoms.link.simple href="{{$men->url}}">
      {{ $men->label }}
    </x-atoms.link.simple>
  @endforeach
</ul>
