<div data-component="{{ $componentName }}" {{ $attributes->merge(['class' => 'py-2 border-b-2 border-gray']) }}>
  <x-atoms.containers.container1 class="flex justify-between items-center">
    <x-molecules.logo.logo1/>
    <x-molecules.menu.menu1 name="{{ $menuSlug }}"/>
  </x-atoms.containers.container1>
</div>
