<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>

<div id="app">
  <div class="grid grid-cols-4 gap-x-3 p-4">
    <div class="bg-gray">Menu</div>
    <div class="col-span-3 mb-4">
      <div class="grid grid-cols-3 mb-4">
        <div>
          <x-atoms.grid.container>
            <div class="bg-primary text-white">Container component</div>
          </x-atoms.grid.container>
        </div>
        <div class="col-span-2">
          <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Grid\Container::class"/>
        </div>
      </div>
      <div class="col-span-3 mb-4">
        <div class="grid grid-cols-3 mb-4">
          <div>
            <x-atoms.example/>
          </div>
          <div class="col-span-2">
            <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Example::class"/>
          </div>
        </div>
      </div>
      <div class="col-span-3 mb-4">
        <div class="grid grid-cols-3 mb-4">
          <div>
            @foreach($mockHeaders as $text)
              <x-atoms.headers>
                {{ $text }}
              </x-atoms.headers>
            @endforeach
          </div>
          <div class="col-span-2">
            <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Headers::class"/>
          </div>
        </div>
      </div>
      <div class="col-span-3 mb-4">
        <div class="grid grid-cols-3 mb-4">
          <div>
            <x-atoms.title.h1>Title 1</x-atoms.title.h1>
            <x-atoms.title.h2>Title 2</x-atoms.title.h2>
            <x-atoms.title.h3>Title 3</x-atoms.title.h3>
            <x-atoms.title.h4>Title 4</x-atoms.title.h4>
            <x-atoms.title.h5>Title 5</x-atoms.title.h5>
            <x-atoms.title.h6>Title 6</x-atoms.title.h6>
          </div>
          <div class="col-span-2">
            <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Title\H1::class"/>
          </div>
        </div>
      </div>
      <div class="col-span-3 mb-4">
        <div class="grid grid-cols-3 mb-4">
          <div>
            <x-atoms.link.fill>Link Fill</x-atoms.link.fill>
            <x-atoms.link.outline>Link Outline</x-atoms.link.outline>
          </div>
          <div class="col-span-2">
            <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Link\Fill::class"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
