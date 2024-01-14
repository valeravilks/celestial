@extends('components.organisms.layouts.type-1')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
