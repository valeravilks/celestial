<div class="bg-gray py-2">
  <x-atoms.container>
    <div {{ $attributes->merge(['class' => 'flex items-center']) }}>
      <x-atoms.link.simple href="/" class="mr-auto">
        Main site
      </x-atoms.link.simple>
      <ul class="flex items-center gap-y-2">
        <li>
          <x-atoms.link.simple class="mr-2">Link1</x-atoms.link.simple>
        </li>
        <li>
          <x-atoms.link.simple class="mr-2">Link1</x-atoms.link.simple>
        </li>
        <li>
          <x-atoms.link.simple>Link1</x-atoms.link.simple>
        </li>
      </ul>
    </div>
  </x-atoms.container>
</div>

