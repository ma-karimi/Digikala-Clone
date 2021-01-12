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
                    <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" name="title" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="parent" class="col-md-2 col-form-label text-md-right">{{ __('Parent') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" name="parent_id" id="parent">
                            <option value="">{{__('None')}}</option>
                            @foreach($categories as $category)
                                <option value="{{$catId}}">{{$catTitle}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
                <form method="POST" action="{{route('admin.categories.store')}}">
                    @csrf
                    <!-- #todo: route missed -->
                    <button type="submit" class="btn btn-success">{{__('Create New')}}</button>
                </form>
            </div>
        </div>
    </div>

</div>
