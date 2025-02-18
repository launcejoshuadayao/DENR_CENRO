@extends('layouts.navbar')
@section('content')


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
<div class="table-container">
    <div class="table-title">
        <h2>SURVEY AUTHORITY (SA)</h2><br>
        <button type="button" class="btn btn-success">ADD APPLICANT</button>
        <div class="search-box">
            <i class="material-icons">&#xE8B6;</i>
            <input type="text" placeholder="Search&hellip;">
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Applicant Name</th>
                <th>Applicant Number</th>
                <th>Patented/Subsisting</th>
                <th>Location</th>
                <th>Survey No.</th>
                <th>Remarks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sadata as $ts)
            <tr>
            <td>{{ $ts->id_tsa}}</td>
            <td>{{ $ts->applicant_name }}</td>
            <td>{{ $ts->applicant_number }}</td>
            <td>{{ $ts->patented_subsisting }}</td>
            <td>{{ $ts->location }}</td>
            <td>{{ $ts->survey_no }}</td>
            <td>{{ $ts->remarks }}</td>
            <td> 
                <div class="actions">
                <a href="#" class="edit"><i class="material-icons">&#xE254;</i></a>
                <a href="#" class="delete"><i class="material-icons">&#xE872;</i></a>
                </div>
                    </td>
            </tr>
           @endforeach
        </tbody>
    </table>
    <div class="clearfix">
        <div class="hint-text">Showing <b>#</b> out of <b>#</b> entries</div>
        <div class="pagination">
            <a href="#"><i class="material-icons">&#xE5CB;</i></a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#"><i class="material-icons">&#xE5CC;</i></a>
        </div>
    </div>
</div>



@endsection