<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div class="container mx-auto px-4">
  @include('partials.page-header')
</div>


  <main id="main" class="main container mx-auto px-4">
    @yield('content')
  </main>

{{--  @hasSection('sidebar')--}}
{{--    <aside class="sidebar">--}}
{{--      @yield('sidebar')--}}
{{--    </aside>--}}
{{--  @endif--}}

@include('sections.footer')
