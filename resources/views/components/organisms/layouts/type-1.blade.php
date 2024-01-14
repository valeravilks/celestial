<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div class="container mx-auto px-4">
  @include('components.organisms.headers.type-1')
</div>


<main id="main" class="main container mx-auto px-4">
  @yield('content')
</main>

{{--  @hasSection('sidebar')--}}
{{--    <aside class="sidebar">--}}
{{--      @yield('sidebar')--}}
{{--    </aside>--}}
{{--  @endif--}}

@include('components.organisms.footers.type-1')
