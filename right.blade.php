
@extends('layout')
@section('title') Job Role @endsection
@section('rightjoin')




        <thead>
            <tr class="table-active">
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>JOB_TITLE</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $jd)
        
            <tr>
                <td>
                    {{$jd->FIRST_NAME}}
                </td>
                <td>
                    {{$jd->LAST_NAME}}                      
                </td>
                <td>
                {{$jd->JOB_TITLE}}  
                </td>
            </tr>

            
        @endforeach
</table>     

<div class="mb-5">
    {{$data}}
</div>       

@endsection
 