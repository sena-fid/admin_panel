<!DOCTYPE html>
<html lang="">
<head>
@include('frontend.template.head')

</head>
<body id="top">

@if (Route::currentRouteName() == 'frontend.index')
    @include('frontend.template.header')

@else
    @include('frontend.template.breadcrumb')

@endif

@yield('content')

<div class="bgded overlay row4" style="background-image:url('assets/images/demo/black.jpeg');">
 @include('frontend.template.footer')
</div>
    @include('frontend.template.footerScript')
</body>
</html>
