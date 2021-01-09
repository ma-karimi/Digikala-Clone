<div class="col-md-6 d-flex flex-column">
    <span class="font-weight-bold">{{ __($label) }}</span>
    @foreach($roles as $role)
        <span class="badge badge-warning text-capitalize">{{$role->name}}</span>
    @endforeach
</div>
