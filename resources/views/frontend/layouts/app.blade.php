<!DOCTYPE html>
@langrtl
<html lang="{{ app()->getLocale() }}" dir="rtl">
    @else
    <html lang="{{ app()->getLocale() }}">
        @endlangrtl
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title', app_name())</title>
            <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
            <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
            @yield('meta')

            {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
            @stack('before-styles')

            <!-- Check if the language is set to RTL, so apply the RTL layouts -->
            <!-- Otherwise apply the normal LTR layouts -->
            {{ style(mix('css/frontend.min.css')) }}
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
            <style>
                nav.bg-light {
                    background: linear-gradient(to right, #3de6fa, #243eff) !important;
                }
                .card-header {
                    background: linear-gradient(to right, #243eff, #3de6fa) !important;
                    color: white;
                    font-size: 24px;
                }
                .navbar-light .navbar-nav .nav-link {
                    color: white;
                }
                .navbar-light .navbar-nav .show > .nav-link, 
                .navbar-light .navbar-nav .active > .nav-link, 
                .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active{
                    color: rgba(184, 254, 255, 0.9);
                    font-weight: bold;
                }
                .navbar-light .navbar-nav .nav-link:hover{
                    color: rgba(115, 253, 255, 0.9);
                    font-style: italic;
                    font-weight: bold;
                }
                .card-body .card-header {
                    background: linear-gradient(to right, #34baca, #243eff) !important;
                    color: white;
                    font-size: 18px;
                }
            </style>
            @stack('after-styles')
        </head>
        <body>
            <div id="app">
                @include('includes.partials.logged-in-as')
                @include('frontend.includes.nav')

                <div class="container">
                    @include('includes.partials.messages')
                    @yield('content')
                </div><!-- container -->
            </div><!-- #app -->

            <!-- Scripts -->
            @stack('before-scripts')
            {!! script(mix('js/frontend.js')) !!}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            @stack('after-scripts')

            @include('includes.partials.ga')
        </body>
    </html>
