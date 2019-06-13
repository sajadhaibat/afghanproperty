
@if(Session::has('delete'))
<div class="alert alert-danger" id="msg">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Congrats</strong> {{Session::get('delete')}}
</div>
@endif

@section('scriptSection')
    <script>
        window.setTimeout(function() {
            $("#msg").fadeIn(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    </script>
@stop