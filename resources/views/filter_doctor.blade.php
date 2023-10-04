@forelse($data['doctor'] as $id=>$doctor)
    <option value="{{$id}}">{{$doctor}}</option>
@empty
    <option disabled > No Doctor Available</option>
@endforelse
