@if($isMenu())

<ul data-component='{{ $componentName }}'
  {{ $attributes->merge(['class' => 'flex gap-3']) }}
>
    @foreach($menuItems as $item)
      <li>
        <x-atoms.links.link1 href="{{ $item->url }}">
          {{ $item->label }}
        </x-atoms.links.link1>
      </li>
    @endforeach
</ul>

@endif
