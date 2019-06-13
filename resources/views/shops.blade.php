<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shops</title>

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
            <h2>{{trans('localization.menue-shops')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.menue-shops')}}</span>
        </div>
    </div>
</div>


<section class="property section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.shoplist')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($shops as $shop)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('shop',$shop->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($shop->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$shop->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('shop',$shop->id)}}">{{$shop->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> {{$shop->area1.',  '.$shop->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>${{$shop->price}}</span>
                                        </div>
                                        <p> <span>{{$shop->area}} {{$shop->sizetypr}}</span></p>
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
