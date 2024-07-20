<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content', 'sage') }}
    </a>

    <div id="app" class="grid grid-rows-[auto_1fr_auto] min-h-screen">


      <x-organisms.headers.header1 menu-slug="primary_navigation"/>

      <main id="main" class="main">
        @yield('content')
      </main>

      <x-organisms.footers.footer1/>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
