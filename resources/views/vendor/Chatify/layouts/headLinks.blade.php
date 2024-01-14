{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ $id }}">
<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">
<title>ShareIt - @yield('title')</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<!--Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<!-- Scripts -->
{{-- scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/chatify/autosize.js') }}"></script>

<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css' />
<link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />


<!-- Styles -->
@livewireStyles

{{-- Setting messenger primary color to css --}}
<style>
  :root {
    --primary-color: {
        {
        $messengerColor
      }
    }

    ;
  }
</style>