@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Hello, </h5></div>
                <div class="card-body">
                    <h3 class="text-info" style="display:inline-block">Your Education Summery</h3>
                    <div class="text-right" style="display:inline-block;float:right">
                        <a href="{{url('education_info')}}" class="btn btn-outline-success">Add More</a>
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Institue</th>
                                <th scope="col">Year</th>
                                <th scope="col">Actons</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                          $i=1
                          @endphp
                           @foreach ($edu as $edu)
                            <tr>
                                <th scope="row">{{ $i++}}</th>
                                <td>{{ $edu->degree}}</td>
                                <td>{{ $edu->institute}}</td>
                                <td>{{ $edu->year}}</td>
                                <td>
                                    <a href="{{ url('edit_education', $edu->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure ?')">Delete</a>

                                </td>

                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">
                                    <a href="{{url('work_info')}}" class="btn btn-block btn-success">Continue Next</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 align-self-center">
            <h5 class="text-info">This is a Demo Resume.</h5>
            <img src="{{asset('images/cv.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
