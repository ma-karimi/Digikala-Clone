
    <label class="col-md-2 col-form-label text-md-right" for="{{$name}}">{{__($label)}}</label>
    <div class="col-md-6">
        <select class="form-control" name="{{$name}}" id="{{$name}}">
            <option>{{__('Choose From select Menu')}}</option>
            <option value="main">{{__('Main')}}</option>
            <option value="category">{{__('Categories')}}</option>
        </select>
    </div>

