<script src="{{ asset('backend/assets/lib/jquery/jquery.js')}}"></script>
<script src="{{ asset('backend/assets/lib/popper.js/popper.js')}}"></script>
<script src="{{ asset('backend/assets/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{ asset('backend/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{ asset('backend/assets/lib/moment/moment.js')}}"></script>
<script src="{{ asset('backend/assets/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('backend/assets/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
<script src="{{ asset('backend/assets/lib/peity/jquery.peity.js')}}"></script>
<script src="{{ asset('backend/assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('backend/assets/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('backend/assets/lib/datatables-responsive/dataTables.responsive.js')}}"></script>


<script src="{{ asset('backend/assets/js/bracket.js')}}"></script>
<script src="{{ asset('backend/assets/js/ResizeSensor.js')}}"></script>
<script>
    $(function () {
        'use strict'
        $(window).resize(function () {
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
            } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
            }
        }

    $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
    });
</script>
