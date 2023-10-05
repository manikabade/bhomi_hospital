@forelse($data['time'] as $id=>$schedule)
    <option value="{{$id}}">{{$schedule}}</option>
@empty
    <option disabled > No Time Available</option>
@endforelse
