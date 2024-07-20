<div data-component="{{ $componentName }}" {{ $attributes->merge(['class' => 'py-2 border-t-2 border-gray']) }}>
  <x-atoms.containers.container1 class="flex items-center justify-center">
    <x-atoms.texts.text1>
      {{ $content }}
    </x-atoms.texts.text1>
  </x-atoms.containers.container1>
</div>
