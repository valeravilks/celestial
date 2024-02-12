<div class="bg-primary py-2">
  <x-atoms.container>
    <div {{ $attributes->merge(['class' => 'flex']) }}>
      <x-atoms.link.outline href="/" class="mr-auto">
        Main site
      </x-atoms.link.outline>
      <ul class="flex">
        <li>
          <x-atoms.link.fill>Link1</x-atoms.link.fill>
        </li>
        <li>
          <x-atoms.link.fill>Link1</x-atoms.link.fill>
        </li>
        <li>
          <x-atoms.link.fill>Link1</x-atoms.link.fill>
        </li>
      </ul>
    </div>
  </x-atoms.container>
</div>

