<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Search</title>

    @include('links')
</head>
<body>

<header id="header-wrap">

    @include('topbar')

    @include('navbar')

</header>

<section class="property section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <h2> {{trans('localization.searchresult')}} </h2> <br>
        <div class="row">
            @foreach($props as $prop)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('property',$prop->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($prop->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$prop->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('property',$prop->id)}}">{{$prop->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i>{{$prop->area1.',  '.$prop->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>{{$prop->price}}$</span>
                                        </div>
                                        <p><span>{{$prop->bedrooms}} beds</span> . <span>{{$prop->bathrooms}} baths</span> .  <span>{{$prop->area}} {{$prop->sizetypr}}</span></p>
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
