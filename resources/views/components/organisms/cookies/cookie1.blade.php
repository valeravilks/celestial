<div
  {{
    $attributes
      ->merge(['class' => 'px-2 py-1 bg-gray fixed b-0 hidden'])
      ->merge(['data-component' => $componentName])
  }}
>
  <x-atoms.containers.container1>
    <x-atoms.texts.text1>
      Cookie Content
    </x-atoms.texts.text1>
    <x-atoms.buttons.button1 data-component-js="close-cookie">
      Close
    </x-atoms.buttons.button1>
  </x-atoms.containers.container1>
</div>
