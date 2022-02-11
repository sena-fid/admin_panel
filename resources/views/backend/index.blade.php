<!DOCTYPE html>
<html lang="tr">

@include('backend.template.head')

<body>

    <div class="br-logo"><a href=""><span>[</span>Cms<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Dashboard</label>
        <div class="br-sideleft-menu">
            @include('backend.template.side-menu')
        </div>
    </div>

    <div class="br-mainpanel">
        @yield('content')
        @include('backend.template.footer')
    </div>

    @include('backend.template.footerScript')
</body>

</html>
