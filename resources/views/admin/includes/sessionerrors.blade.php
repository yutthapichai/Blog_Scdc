@if(Session::has('store'))
    <div class="alert alert-success mt-3" role="alert">
        {{ Session::get('store')}}
    </div>
@elseif(Session::has('update'))
    <div class="alert alert-info mt-3" role="alert">
        {{ Session::get('update')}}
    </div>
@elseif(Session::has('delete'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ Session::get('delete')}}
    </div>
@elseif(Session::has('info'))
    <div class="alert alert-warning mt-3" role="alert">
        {{ Session::get('info')}}
    </div>
@endif