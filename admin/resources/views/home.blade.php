@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-md-3 p-2">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalVisitor }}</h3>
                    <h3 class="count-card-text"> Total Visitor</h3>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-2">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalContact }} </h3>
                    <h3 class="count-card-text"> Total Contact</h3>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 p-2">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalProject }}</h3>
                    <h3 class="count-card-text"> Total Project</h3>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 p-2">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalCourse }}</h3>
                    <h3 class="count-card-text"> Total Course</h3>
                </div>
            </div>
        </div>

        
        <div class="col-md-3 p-2">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalService }}</h3>
                    <h3 class="count-card-text"> Total service</h3>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-3 p-2">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h3 class="count-card-title"> {{ $totalReview }}</h3>
                    <h3 class="count-card-text"> Total Review</h3>
                </div>
            </div>
        </div>







    </div>
</div>

@endsection