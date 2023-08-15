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
    <th>Precaution</th>
    <th>General Lab Test</th>
    @forelse($_data->medicalReport  as $medicalreport)
    <th>{{$medicalreport['general_labtest_id']}}</th>
    @empty
        <th>No Lab Test</th>
    @endforelse
{{--    <th>{{$_data->medicalReport->generallabtest->general_labtest}}</th>--}}
    <th>Remarks</th>
@empty
    <th colspan="6">No Data Found</th>
@endforelse
