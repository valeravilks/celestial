<div data-component='{{ $componentName }}'
  {{ $attributes->merge(['class' => 'container mx-auto px-4']) }} >
    {{ $slot }}
</div>
