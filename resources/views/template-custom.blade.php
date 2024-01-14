{{--
  Template Name: Custom Template
--}}

@extends('components.organisms.layouts.type-1')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
