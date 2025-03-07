<header class="banner mt-4 flex">
  <a class="brand w-48" href="{{ home_url('/') }}">
    <img src="@asset('images/logo.png')" alt="{!! $siteName !!}">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  @include('partials.page-header')
</header>
