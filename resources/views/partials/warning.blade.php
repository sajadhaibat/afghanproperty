@if(Session::has('warning'))
    <div class="alert alert-danger" id="msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opps!!</strong> {{Session::get('warning')}}
    </div>
@endif

