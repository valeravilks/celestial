<a data-component='{{ $componentName }}' {{$attributes->merge(['class' => 'hover:underline'])}}>
  {{ $slot }}
</a>
