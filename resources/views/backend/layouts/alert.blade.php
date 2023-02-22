@if($errors->any())
    <div class="alert text-white bg-danger" role="alert">
        <em class="icon ni ni-alert-fill"></em>
        <div style="flex-grow: 1">
            <div class="text-danger"><b>Opps Something went wrong</b></div>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="ri-close-line"></i>
        </button>
    </div>
@endif

@if(\Session::has('status') || \Session::has('success'))
<div class="alert text-white bg-success" role="alert">
    <em class="icon ni ni-info-fill"></em>
    <div class="text-success"><b>success</b> {{session()->get('status')}}</div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="ri-close-line"></i>
    </button>
</div>
@endif