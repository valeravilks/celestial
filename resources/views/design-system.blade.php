{{--
  Template Name: Design System

  TODO: Create rooting for this page
--}}

{{--@extends('layouts.app')--}}

<div class="container mx-auto">
  <div class="grid grid-cols-2 gap-2">
    <x-atoms.example/>
    <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Example::class"/>
  </div>
  <hr>
  <div class="grid grid-cols-2 gap-2">
    <div class="">
      @foreach($mockHeaders as $text)
        <x-atoms.headers>
          {{ $text }}
        </x-atoms.headers>
      @endforeach
    </div>
    <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Headers::class"/>
  </div>
  <hr>
  <x-atoms.title.h1>Title 1</x-atoms.title.h1>
  <x-atoms.title.h2>Title 2</x-atoms.title.h2>
  <x-atoms.title.h3>Title 3</x-atoms.title.h3>
  <x-atoms.title.h4>Title 4</x-atoms.title.h4>
  <x-atoms.title.h5>Title 5</x-atoms.title.h5>
  <x-atoms.title.h6>Title 6</x-atoms.title.h6>
  <hr>
  <x-atoms.link.fill>Link Fill</x-atoms.link.fill>
  <x-atoms.link.outline>Link Outline</x-atoms.link.outline>
</div>
