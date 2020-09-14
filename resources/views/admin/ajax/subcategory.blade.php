@foreach ($subcategory as $subcategory)
    <option value="{{$subcategory->id}}" {{old('product_subcategory') == $subcategory->id ? 'selected': ''}}>{{$subcategory->subcategory_name}}</option>
@endforeach
