@extends('components.atoms.layout.one-column')

@section('header')
  <x-organisms.header.type1/>
@endsection

@section('main')
  <x-atoms.title.h1 class="text-center mt-4">
    Front Page
  </x-atoms.title.h1>
@endsection

@section('footer')
  <x-organisms.footers.text>
    Footer type 1. 2023 year.
  </x-organisms.footers.text>
@endsection
