@if(session()->has('message'))
    <div class="row">
        <div class="col-lg-12 text-white font-weight-bold rounded">
            <div class="alert bg-gradient-success" id="deleteAlert" role="alert">{{ session('message') }}</div>
        </div>
    </div>
@endif
@if(session()->has('errorMessage'))
    <div class="row">
        <div class="col-lg-12 text-white font-weight-bold rounded">
            <div class="alert bg-gradient-danger" id="deleteAlert" role="alert">{{ session('errorMessage') }}</div>
        </div>
    </div>
@endif
