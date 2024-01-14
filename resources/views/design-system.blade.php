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
</div>
