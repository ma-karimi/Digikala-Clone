<label class="col-md-2 col-form-label text-md-right" for="{{$name}}">{{__($label)}}</label>
<div class="col-md-6">
    <select class="form-control" name="{{$name}}" id="{{$name}}">
        <option value="">{{__('Choose From select Menu')}}</option>
        @foreach($items as $item)
            <option value="{{$item->id}}">{{__($item->title)}}</option>
        @endforeach
    </select>
</div>

