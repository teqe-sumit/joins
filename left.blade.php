
@extends('layout')
@section('title') Departments @endsection



@section('leftjoin')

        <thead>
            <tr class="table-active">
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>DEPARTMENT_NAME</th>
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
                {{$jd->DEPARTMENT_NAME}}  
                </td>
            </tr>

   
        @endforeach
        </table> 


<div class="mb-5">
    {{$data}}
</div>    
@endsection
    
