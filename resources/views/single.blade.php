@extends('components.atoms.layout.one-column')

@section('header')
  <x-organisms.header.type1/>
@endsection

@section('main')
  <div class="container mx-auto py-2">
    <div class="prose">
      @php(the_content())
    </div>
  </div>
@endsection

@section('footer')
  footer
@endsection
