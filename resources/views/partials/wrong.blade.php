@if(Session::has('wrong'))
    <div class="alert alert-danger" id="msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Sorry!!</strong> {{Session::get('wrong')}}
    </div>
@endif
