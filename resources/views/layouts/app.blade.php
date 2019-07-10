<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        @yield('admin_css')


    </head>
    
    <body>
        <div id="app">
            @include('layouts.partials.navbar')
            <div class="row">
               <div class="col-md-12">
                    @if(session()->has('message'))
                        <p class="alert alert-success"> 
                           {{ session()->get('message') }}
                        </p>
                    @endif
                    @yield('content')
                </div>
            </div>
            <div id="footer_bottom">
                <footer class="footer bg-dark text-light text-center m-0">
                    <h6>&COPY; KeyToSuccess</h6>
                </footer>
            </div>
        </div>



<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/typed.js')}}"></script>
{{-- Typed.js --}}
<script>
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });
</script>

</body>
</html>



