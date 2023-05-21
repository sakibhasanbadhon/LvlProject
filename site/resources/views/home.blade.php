@extends('layout.app')

@section('title','Home')

@section('content')

    @include('component.homeBanner')

    @include('component.homeService')

    @include('component.homeCourse')

    @include('component.homeProject')

    @include('component.homeContact')

    @include('component.homeReview')

    

@endsection


