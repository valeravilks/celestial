@extends('components.atoms.layout.one-column')

@section('header')
  <x-organisms.header.type1/>
@endsection

@section('main')
  @php(the_content())
@endsection

@section('footer')
  footer
@endsection
