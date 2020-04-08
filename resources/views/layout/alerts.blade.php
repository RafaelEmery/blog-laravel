@if ($errors->any())
<div class="alert alert-danger alert-elevate col-sm-12" role="alert">
    <div class="alert-icon"><i class="
        flaticon-exclamation-1 text-light"></i></div>
    <div class="alert-text">
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

@if (Session::has('danger'))
<div class="alert alert-danger alert-elevate col-sm-12" role="alert">
    <div class="alert-icon"><i class="
        flaticon-exclamation-1 text-light"></i></div>
    <div class="alert-text">
        {{Session::get('danger')}}<br>
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning alert-elevate col-sm-12" role="alert">
    <div class="alert-icon"><i class="
        flaticon-warning text-light"></i></div>
    <div class="alert-text text-light">
        {{Session::get('warning')}}<br>
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

@if (Session::has('success'))
<div class="alert alert-success alert-elevate col-sm-12" role="alert">
    <div class="alert-icon"><i class="       
    flaticon2-checkmark text-light"></i></div>
    <div class="alert-text">
        {{Session::get('success')}}<br>
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

@if (Session::has('info'))
<div class="alert alert-info alert-elevate col-sm-12" role="alert">
    <div class="alert-icon"><i class="
        fa fa-info text-light"></i></div>
    <div class="alert-text">
        {{Session::get('info')}}<br>
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif