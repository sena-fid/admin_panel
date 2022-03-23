<script src="{{ asset('frontend/assets/layout/scripts/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{ asset('frontend/assets/layout/scripts/jquery.mobilemenu.js')}}"></script>

<script>
    function getMessage() {
       $.ajax({
          type:'POST',
          url:'{{ route("frontend.hash.password") }}',
          data: {
            "_token": "{{ csrf_token() }}",
            },
            dataType: 'JSON',
          success:function(data) {
            $("#hash").css("padding", "5px");
             $("#hash").html(data.msg);
             copyToClipboard("#hash");
          }
       });
    }

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
 </script>
