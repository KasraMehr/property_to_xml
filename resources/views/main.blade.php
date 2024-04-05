@extends('layout.layouts')

@section('content')
<div class="container text-center mt-5">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h3 class="mb-2" style="color: #76ABAE">Add Property </h3>
            </div>
            <div class="card text-center" style="width: 20rem">
                <img src="{{asset('images/property-color-icon.svg')}}" class="card-img-top" alt="..."><br>
                <a href="{{route('add_property_page')}}"><button type="button" class="btn btn-primary">add property</button></a>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <h3 class="mb-2" style="color: #78A083">Generate XML </h3>
            </div>
            <div class="card text-center" style="width: 20rem">
                <img src="{{asset('images/xml.svg')}}" class="card-img-top" alt="..."><br>
                <a href="{{route('xml_feed')}}" target="_blank"><button type="button" class="btn btn-success">generate xml</button></a>
            </div>
        </div>
    </div>
</div>

@endsection
