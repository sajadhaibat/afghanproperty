<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<!-- Mirrored from preview.uideck.com/items/brittville-demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:07:09 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Houses </title>

  @include('links')
</head>
<body>

<header id="header-wrap">

 @include('topbar')

   @include('navbar')

</header>


<div id="page-banner-area" class="page-banner">
    <div class="page-banner-title">
        <div class="text-center">
            <h2>{{trans('localization.menue-houses')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.menue-houses')}}</span>
        </div>
    </div>
</div>




<section class="property section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.houselist')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($bhouses as $bhouse)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">

                                    <a class="hover-effect" href="{{route('abroad',$bhouse->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($bhouse->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$bhouse->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('abroad',$bhouse->id)}}">{{$bhouse->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i>{{$bhouse->area1.',  '.$bhouse->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>${{$bhouse->price}}</span>
                                        </div>
                                        <p> <span>{{$bhouse->area}} {{$bhouse->sizetype}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($houses as $house)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('property',$house->id)}}">
                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($house->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label">for {{$house->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('property',$house->id)}}">{{$house->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i>{{$house->area1.',  '.$house->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>${{$house->price}}</span>
                                    </div>
                                    @if(trans('localization.lang')==='Dari' )
                                        <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$house->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$house->bathrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $house->sizetypr.' '.$house->area}}</span></p>
                                    @endif
                                    @if(trans('localization.lang')==='English')
                                        <p ><span >{{$house->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$house->bathrooms.' '.trans('localization.baths')}} </span> . <span>{{$house->area.' ' .$house->sizetypr}}</span></p>
                                    @endif
                                    @if(trans('localization.lang')==='Pashto' )
                                        <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$house->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$house->bathrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $house->area.' '.$house->sizetypr}}</span></p>
                                    @endif                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
</section>

@include('footer')



<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>


@include('scripts')
</body>

</html>
