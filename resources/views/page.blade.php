@extends('components.organisms.layouts.type-1')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
