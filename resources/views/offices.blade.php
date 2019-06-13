<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Offices</title>

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
            <h2>{{trans('localization.menue-offices')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.menue-offices')}}</span>
        </div>
    </div>
</div>



<section class="property section-padding"style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.officelist')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($boffices as $boffice)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('boffice',$boffice->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($boffice->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$boffice->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('boffice',$boffice->id)}}">{{$boffice->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> {{$boffice->city.',  '.$boffice->district .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>${{$boffice->price}}</span>
                                        </div>
                                        <p> <span>{{$boffice->area}} {{$boffice->sizetype}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($offices as $office)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('office',$office->id)}}">
                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($office->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label">for {{$office->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('office',$office->id)}}">{{$office->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i> {{$office->area1.',  '.$office->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>${{$office->price}}</span>
                                    </div>
                                   
                                     @if(trans('localization.lang')==='Dari' )
                                                <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.floor').' '.$office->floors}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.room') . ' ' .$office->bedrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $office->sizetypr.' '.$office->area}}</span></p>
                                            @endif
                                            @if(trans('localization.lang')==='English')
                                                <p ><span >{{$office->floors.' '.trans('localization.floor')}} </span> . <span>{{$office->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$office->area.' ' .$office->sizetypr}}</span></p>
                                            @endif
                                            @if(trans('localization.lang')==='Pashto' )
                                                <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.floor').' '.$office->floors}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.room') . ' ' .$office->bedrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $office->area.' '.$office->sizetypr}}</span></p>
                                            @endif
                                                
                                   
                                </div>
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
