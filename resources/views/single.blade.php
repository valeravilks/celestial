@extends('components.atoms.layout.one-column')

@section('header')
  <x-organisms.header.type1/>
@endsection

@section('main')
  <div class="prose">
    @php(the_content())
  </div>
@endsection

@section('footer')
  footer
@endsection
