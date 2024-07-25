@php
    $title = get_the_title();
@endphp

@extends('layouts.app')

@section('content')
  <x-organisms.heros.hero1 title="{{ $title }}"/>
  <x-atoms.contents.content1/>
@endsection
