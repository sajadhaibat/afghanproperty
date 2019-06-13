
@if(Session::has('add'))
    <div class="alert alert-success" id="msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Congrats</strong> {{Session::get('add')}}
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