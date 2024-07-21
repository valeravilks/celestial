@php
  $title = get_the_title();
@endphp

@extends('layouts.app')

@section('content')
  <x-organisms.heros.hero1 title="{{ $title }}"/>
  <x-atoms.containers.container1>
    @php
      the_content();
    @endphp
  </x-atoms.containers.container1>
@endsection
