<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @stack('style')
</head>
<body class="homepage">
{!! settings()->get("scripts_afterbody") !!}
@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/aos.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/glightbox.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif

@stack('scripts')

<script type="text/javascript">
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
    });
    @if(settings()->get("popup_status") == 1)
        const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
            keyboard: false
        });
    @endif
    @if($popup == 1)
        popModal.show();
        setTimeout( function(){
            popModal.hide();
        }, {{ settings()->get("popup_timeout") }} );
    @endif
</script>

{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
