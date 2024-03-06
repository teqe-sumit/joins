


@extends('layout')
@section('title') Employee Salary List @endsection
@section('innerjoin')

<table class="table table-sm ">
        <thead>
            <tr class="table-active">
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>JOB_TITLE</th>
                <th>SALARY</th>
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
                <td>
                    {{$jd->SALARY}}
                </td>    
            </tr>
        @endforeach
</table>

<div class="mb-5">
    {{$data}}
</div>    
@endsection

