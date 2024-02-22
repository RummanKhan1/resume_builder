@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Hello, </h5></div>
            </div>
            <div class="card-body">
                <h3 class="text-info">Tell Us About Your Career Objects</h3>
                <hr>
                <form action="{{url('update_education',$edu->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <label for="">Degree : </label>
                                <input type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" placeholder="Enter Degree" value="{{ $edu->degree }}">
                                @error('degree')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <label for="">Institute Name : </label>
                                <input type="text" class="form-control @error('institute') is-invalid @enderror" name="institute" placeholder="Enter Institute Name" value="{{ $edu->institute }}">
                                @error('institute')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="">Graduation Year : </label>
                                <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Graduate Year" value="{{ $edu->year}}">
                                @error('year')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-md-6">
                                <a href="{{url('education_summary')}}" class="btn  btn-primary">Back</a>
                           </div>
                            <div class="col-md-6 text-right">
                               <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 align-self-center">
            <h5 class="text-info">This is a Demo Resume.</h5>
            <img src="{{asset('images/cv.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
