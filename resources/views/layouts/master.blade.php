@include ('layouts.head')

<body class="@yield('bodyClass')">

<header class="@yield ('header-class')">

    @include ('layouts.nav')

</header>

<main>
    @yield ('content')
</main>

@include ('layouts.footer')

@include ('layouts.scripts')
