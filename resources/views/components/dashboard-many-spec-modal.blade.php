<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#{{$modal_id}}"><i class="fas fa-edit"></i></button>

<!-- Modal -->
<div class="modal fade" id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header border-bottom border-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <h4 class="modal-title" id="myModalLabel"> {{$title}} </h4>
            </div>

            <div class="modal-body mt-4">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="role">
                            @foreach($roles as $role)
                                <option value={{$role->name}}>{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-primary">{{__('Save Changes')}}</button>
            </div>
        </div>
    </div>

</div>
