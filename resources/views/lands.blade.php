<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lands</title>

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
            <h2>{{trans('localization.menue-lands')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.menue-lands')}}</span>
        </div>
    </div>
</div>


<section class="property section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.landlist')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($blands as $bland)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('bland',$bland->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($bland->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$bland->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('bland',$bland->id)}}">{{$bland->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> {{$bland->city.',  '.$bland->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>${{$bland->price}}</span>
                                        </div>
                                        <p> <span>{{$bland->area}} {{$bland->sizetype}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach($lands as $land)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('land',$land->id)}}">
                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($land->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label">for {{$land->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('land',$land->id)}}">{{$land->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i> {{$land->area1.',  '.$land->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>${{$land->price}}</span>
                                    </div>
                                    <p> <span>{{$land->area}} {{$land->sizetypr}}</span></p>
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

<!-- Mirrored from preview.uideck.com/items/brittville-demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:07:09 GMT -->
</html>
