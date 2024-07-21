@php
    $title = get_the_title();
@endphp

@extends('layouts.app')

@section('content')
  <x-organisms.heros.hero1 title="{{ $title }}"/>
  @php
      the_content();
  @endphp
@endsection
