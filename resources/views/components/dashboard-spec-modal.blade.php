<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#{{$modal_id}}"><i class="fal fa-edit"></i></button>

<!-- Modal -->
<div class="modal fade" id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header border-bottom border-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> {{$title}} </h4>
            </div>

            <div class="modal-body mt-4">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>
                    <div class="col-md-6">
                        <input type="{{$type}}" class="form-control" name="{{$name}}" value={{$value}}>
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
