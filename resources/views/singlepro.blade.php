<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Property</title>

    @include('links')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjDK9jht7pc0cuhC7El2Ht3vAUpVgYFoE"
             type="text/javascript"></script>
</head>
<body>

<header id="header-wrap">

    @include('topbar')


    @include('navbar')


</header>


<div id="page-banner-area" class="page-banner">
    <div class="page-banner-title">
        <div class="text-center">
            <h2>{{trans('localization.properties')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.properties')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.propertydetail')}}</span>
        </div>
    </div>
</div>


<div id="content" class="section-padding" style="direction: ltr;">
    <div class="container">
        <div class="property-details">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="info">
                        <h3>{{$spro->title}}</h3>
                        <br>
                        <p class="address"><i class="lni-map-marker"></i>{{$spro->area1.',  '.$spro->district.',  '.$spro->city .',  '.$spro->province}} ,Afghanistan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="details">
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.bedrooms')}}</p>
                            <h5>{{$spro->bedrooms}}</h5>
                        </div>
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.bathrooms')}}</p>
                            <h5>{{$spro->bathrooms}}</h5>
                        </div>
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.size')}} </p>
                            <h5>{{$spro->area}} {{$spro->sizetypr}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="others">
                        <ul>
                            <li><span>{{trans('localization.price')}}: {{'$'.$spro->price}}</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="property-slider">
                    <div id="property-slider" class="owl-carousel owl-theme">
                        @foreach(json_decode($spro->banner, true) as $images)

                            <div class="item">

                                <img src="{{asset('images')}}\{{$images}}" alt="gg" style="width:730px; height:405px;">
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="inner-box property-dsc">
                    <h2 class="desc-title">{{trans('localization.propertydescription')}}</h2>
                    <p>{{$spro->description}} </p>

                </div>
                <br>
                <h3>{{trans('localization.maplocation')}}</h3>
                <hr>
                 <div id="map-canvas" style="width: 100%;height: 500px">

                 </div>





            </div>

            <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar" style="height:405px;">



                <div class="widget mt3">
                    <div class="agent-inner">
                        <table class="table table-bordered table-hover">

                            <!-- <thead> -->
                            <tbody><tr>
                                <td >
                                   {{trans('localization.property of')}}
                                </td>
                                <td>
                                    <small><strong>{{ucfirst($spro->user->name)}}</strong></small>
                                </td>
                            </tr>
                            <!-- </thead> -->


                            <tr>
                                <td>
                                    {{trans('localization.status')}}
                                </td>
                                <td>
                                    <small>For {{$spro->status}}</small>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                   {{trans('localization.negotiable')}}
                                </td>
                                <td>
                                    <small>{{trans('localization.yes')}}</small>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                  {{trans('localization.phoneno')}}
                                </td>
                                <td>
                                    <small>{{ucfirst($spro->user->number)}}</small>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{trans('localization.email')}}
                                </td>
                                <td>
                                    <small>{{ucfirst($spro->user->email)}}</small>
                                </td>
                            </tr>


                            </tbody></table>

                    </div>
                </div>





            </aside>

        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="desc-title">{{trans('localization.similarproperties')}}</h2>
            </div>
            @foreach($proper as $pro)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('property',$pro->id)}}">
                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($pro->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label ">For {{$pro->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('property',$pro->id)}}">{{$pro->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i> {{$pro->area1.',  '.$pro->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>{{$pro->price}}$</span>
                                    </div>
                                    <p><span>{{$pro->bedrooms}} {{trans('localization.room')}}</span> . <span>{{$pro->bathrooms}} {{trans('localization.baths')}}</span> . <span>{{$pro->area}} {{$pro->sizetypr}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>


@include('footer')

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

@include('scripts')

<script>
    var  lat = parseFloat('{{$spro->lat}}');
    var  lng = parseFloat('{{$spro->lng}}');

     var map;
    map = new google.maps.Map(document.getElementById('map-canvas'),{
        center:{
            lat: lat,
            lng: lng
        },
        zoom:15
    });
    var marker = new google.maps.Marker({
        position:{
            lat: lat,
            lng: lng
        },
        map:map,
    });
</script>




</body>

</html>
