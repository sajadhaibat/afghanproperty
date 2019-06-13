@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">&times;</button>
            <strong>Oops </strong> {{$error}}
        </div>
    @endforeach

@endif