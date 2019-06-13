<!DOCTYPE html>
<html  lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

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
            <a href="#"><i class="lni-home"></i> {{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.propertydetail')}}</span>
        </div>
    </div>
</div>

@foreach($bprop as $bpro)

<div id="content" class="section-padding" style="direction: ltr;">
    <div class="container">
        <div class="property-details">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="info">
                        <h3>{{$bpro->title}}</h3>
                        <br>
                        <p class="address"><i class="lni-map-marker"></i>{{$bpro->area1.', '.$bpro->district.',  '.$bpro->city.',  '.$bpro->province .'  '}} ,Afghanistan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    
                      <div class="details">
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.bedrooms')}}</p>
                            <h5>{{$bpro->bedrooms}}</h5>
                        </div>
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.bathrooms')}}</p>
                            <h5>{{$bpro->bathrooms}}</h5>
                        </div>
                        <div class="details-listing">
                            <p style="font-size:15px;">{{trans('localization.size')}} </p>
                            <h5>{{$bpro->area}} {{$bpro->sizetype}}</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="others">
                        <ul>
                            <li><span>{{trans('localization.price')}}: {{'$'.$bpro->price}}</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="property-slider">
                    <div id="property-slider" class="owl-carousel owl-theme">


                            @foreach(json_decode($bpro->banner, true) as $images)

                        <div class="item">

                            <img src="{{asset('images')}}\{{$images}}" alt="gg" style="width:730px; height:405px;">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="inner-box property-dsc">
                    <h2 class="desc-title">{{trans('localization.propertydescription')}}</h2>
                    <p>{{$bpro->description}} </p>
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
                        <table class="table table-bordered table-hover" style="direction: ltr;">

                            <!-- <thead> -->
                            <tbody><tr>
                                <td>
                                   {{trans('localization.property of')}}:
                                </td>
                                <td>
                                    <small><strong>{{ucfirst($bpro->name)}}</strong></small>
                                </td>
                            </tr>
                            <!-- </thead> -->




                            <tr>
                                <td>
                                    {{trans('localization.status')}}:
                                </td>
                                <td>
                                    <small>For {{$bpro->status}}</small>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{trans('localization.size')}}:
                                </td>
                                <td>
                                    <small>{{$bpro->area}} {{$bpro->sizetype}}</small>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    {{trans('localization.negotiable')}}:
                                </td>
                                <td>
                                    <small>{{trans('localization.yes')}}</small>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    {{trans('localization.phoneno')}}:
                                </td>
                                <td>
                                    <small>{{ucfirst($bpro->mobile)}}</small>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{trans('localization.email')}}:
                                </td>
                                <td>
                                    <small>{{ucfirst($bpro->email)}}</small>
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
            @foreach($bproper as $off)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('property',$off->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($off->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label ">For {{$off->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('property',$off->id)}}">{{$off->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> {{$off->area1.',  '.$off->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>{{$off->price}}$</span>
                                        </div>
                                        <p><span>{{$off->bedrooms.' Rooms'}} </span> . <span>{{$off->bathrooms.' Baths'}} </span> .<span>{{$off->area}} {{$off->sizetypr}}</span></p>
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

@endforeach
@include('footer')

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

@include('scripts')
<script>
    var  lat = parseFloat('{{$bpro->lat}}');
    var  lng = parseFloat('{{$bpro->lng}}');

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
