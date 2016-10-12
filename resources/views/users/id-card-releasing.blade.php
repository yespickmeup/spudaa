@extends('dashboard')


@section('title')
ID Card Releasing
@endsection
@section('content')
<div class="row" ng-controller="idCardReleasingController">

    <div class="col-md-12" id="mySelector">


        <img src="{{ URL::asset('src/images/system/front_cover.jpg') }}"
             class="img-thumbnail imgInp img-responsive"
             alt="Cinque Terre"
             width="400px" 
             height="120px;"
             ng-src="<%imageSource%>"
             >
        <!--        <label style="">Coco Martin</label>-->

    </div>
    <br>
    <div class="col-md-12 pull-right"><br>
        
        <button ng-click="print()" class="btn btn-success">Print Preview</button>
    </div>

</div>

@endsection