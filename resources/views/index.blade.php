@extends('master')
@section('title', env('WEBSITE_NAME'))
@section('content')
    @include('viewsComponent.loaderComponent')
    @include('viewsComponent.headerComponent')
@endsection
