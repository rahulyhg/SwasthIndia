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
            {{ style(mix('css/frontend.css')) }}
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
