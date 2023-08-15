<tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Precaution</th>
    <th>General Lab Test</th>
    <th>Report</th>
    <th>Remarks</th>
</tr>

@forelse($data as  $key=> $_data)

    <th>{{$key+1}}</th>
    <th>{{$_data->patient_name}}</th>

    <th>{{$_data->medicalReport['precaution']}}</th>
    <th>{{$_data->generallabtest['general_labtest']}}</th>
    <th>{{$_data->generallabtest['report']}}</th>
{{--    <th>{!!$_data->generallabtest['remarks'] !!}</th>--}}
    <th>{{strip_tags($_data->generallabtest['remarks'])}}</th>




@empty
    <th colspan="6">No Data Found</th>
@endforelse
