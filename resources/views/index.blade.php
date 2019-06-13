<!DOCTYPE html >
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="afghanproperty, real estate, real estate agent, search real estate agentsearch real estate,real estate in, real estate in afghanistan,real 			 estate for,sale real estate, real estate kabul, real estate afghanistan, real estate home loan,rent house in afghanistan, sale properties in afghanistan, rent properties in afghanistan,lease properties in afghanistan,first property portal in afghanistan,Rent,Sell,Lease,Properties,Afghanistan First Property Portal, Afghanistan's first property portal" />
    
  <meta name="description" content="Afghan Property is Afghanistan’s most comprehensive real estate website, empowering users with the resources they need to make better-informed property decisions. We help property dealers by marketing their property through our website enabling consumers to have access to the list of properties from anywhere in the world. Our sophisticated, yet easy to navigate, property search platform makes it simple for home hunters and property dealers to buy sell, and rent the property of their choice."/>
  
  <meta name="keywords" content="afghanproperty,afghan property,properties in afghanistan ,property portal, Afghanistan property portal, property, properties, buy property, Real estate company in afghanistan,sell property, rent property, buy properties, sell properties, rent properties, property dealers, property in Afghanistan, Kabul, Herat, Mazar e sharif, Jalalabad, buy properties in Herat, buy property in Kabul, buy, sell, rent, home buying, real estate, advertising property projects, advertise"/>
    
    
    
    <title>AfghanProperty | Real Estate</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>

    @include('links')

</head>
<body>

<header id="header-wrap" >

   @include('topbar')


   @include('navbar')

    <div class="clearfix"></div>
</header>


<div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="{{asset('img/slider/s1.jpg')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
                <a href="{{route('broad.create')}}" class="fadeInUp wow btn btn-border" data-wow-delay=".2s"> <h1 style="color: white;">{{trans('localization.abroad')}}</h1></a><p class="fadeInUp wow" data-wow-delay=".6s">{{trans('localization.explore')}}</p>
                <a href="{{url('about')}}" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">{{trans('localization.about')}}</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/slider/s2.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-md-block">
                <h1 class="wow bounceIn heading" data-wow-delay=".7s">{{trans('localization.apartmentsale')}}</h1>
                <p class="fadeInUp wow" data-wow-delay=".6s">{{trans('localization.bestproperties')}}</p>
                <a href="{{url('about')}}" class="fadeInUp wow btn btn-border" data-wow-delay=".8s">{{trans('localization.learn')}}</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/slider/s3.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <h1 class="wow fadeInUp heading" data-wow-delay=".6s"> {{trans('localization.apartmentrent')}}</h1>
                <p class="fadeInUp wow" data-wow-delay=".6s">{{trans('localization.including')}}</p>
                <a href="{{url('about')}}" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">{{trans('localization.view details')}}</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="search-container" >
    <div class="container" >
        <div class="content bg-search">
            <form action="{{route('search')}}" method="post">
                {{csrf_field()}}
                <div class="row">

                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <div class="search-category-container">
                            <label class="styled-select">
                                <select class="classic" name="status" style="direction: ltr;">
                                    <option  selected disabled>{{trans('localization.action')}}</option>
                                    <option value="sell">{{trans('localization.sales')}} </option>
                                    <option value="rent">{{trans('localization.rental')}} </option>
                                    <option value="lease">{{trans('localization.lease1')}} </option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="search-category-container">
                            <label class="styled-select">
                                <select class="classic" name="type" style="direction: ltr;">
                                    <option  selected disabled>{{trans('localization.type')}}</option>
                                    <option value="apartment">{{trans('localization.apartment')}}</option>
                                    <option value="house">{{trans('localization.house1')}}</option>
                                    <option value="office">{{trans('localization.office')}} </option>
                                    <option value="land">{{trans('localization.land')}}</option>
                                    <option value="shop">{{trans('localization.shop')}} </option>

                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="search-category-container">
                            <label class="styled-select">
                                <select class="classic" name="city" style="direction: ltr;">
                                    <option selected disabled>{{trans('localization.city')}}</option>
                                    <option value="Kabul" >
                                        {{trans('localization.kabul')}}                                     </option>
                                    <option value="Logar">
                                        {{trans('localization.logar')}}                                      </option>
                                    <option value="Kandahar">
                                        {{trans('localization.kandhar')}}                                       </option>
                                    <option value="Laghman">
                                        {{trans('localization.laghman')}}                                     </option>
                                    <option value="Herat">
                                        {{trans('localization.herat')}}                                       </option>
                                    <option value="wardag">
                                        {{trans('localization.wardag')}}                                      </option>
                                    <option value="Jalalabad">
                                        {{trans('localization.jalalabad')}}                                       </option>
                                    <option value="Badakhshan">
                                        {{trans('localization.badakhshan')}}                                      </option>
                                    <option value="Balkh">
                                        {{trans('localization.balkh')}}                                        </option>
                                    <option value="Baghlan">
                                        {{trans('localization.baghlan')}}                                       </option>
                                    <option value="Bamyan">
                                        {{trans('localization.bamyan')}}                                      </option>
                                    <option value="Daikundi">
                                        {{trans('localization.daikundi')}}                                        </option>
                                    <option value="Farah">
                                        {{trans('localization.farah')}}                                      </option>
                                    <option value="Faryab" >
                                        {{trans('localization.faryab')}}                                      </option>
                                    <option value="Ghazni">
                                        {{trans('localization.ghazni')}}                                       </option>
                                    <option value="Helmand">
                                        {{trans('localization.helmand')}}                                     </option>
                                    <option value="Jowzjahn">
                                        {{trans('localization.jowzjahn')}}                                       </option>
                                    <option value="Kapisa">
                                        {{trans('localization.kapisa')}}                                     </option>
                                    <option value="Khost">
                                        {{trans('localization.khost')}}                                       </option>
                                    <option value="konar">
                                        {{trans('localization.kunar')}}                                     </option>
                                    <option value="Kunduz">
                                        {{trans('localization.kunduz')}}                                    </option>
                                    <option value="Nimruz">
                                        {{trans('localization.nimruz')}}                                     </option>
                                    <option value="Noristan">
                                        {{trans('localization.noristan')}}                                      </option>
                                    <option value="Panjshir">
                                        {{trans('localization.panjshir')}}                                     </option>
                                    <option value="Paktia">
                                        {{trans('localization.paktia')}}                                     </option>
                                    <option value="Parwan">
                                        {{trans('localization.parwan')}}                                      </option>
                                    <option  value="Samangan">
                                        {{trans('localization.samangan')}}                                     </option>
                                    <option value="Sar-e-pol">
                                        {{trans('localization.sarepol')}}                                     </option>
                                    <option value="Takhar">
                                        {{trans('localization.takhar')}}                                     </option>
                                    <option value="Urozgan">
                                        {{trans('localization.urozgan')}}                                 </option>
                                    <option value="Zabol">
                                        {{trans('localization.zabol')}}                                      </option>
                                    <option value="Badghis">
                                        {{trans('localization.badghis')}}                                    </option>
                                    <option value="Ghowr">
                                        {{trans('localization.ghowr')}}                                      </option>
                                    <option value="Paktika">
                                        {{trans('localization.paktika')}}                                      </option>


                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="search-category-container">
                        <label class="styled-select">
                            <select class="classic" name="minprice" style="direction: ltr;">
                                <option  selected disabled>{{trans('localization.minprice')}}</option>
                                <option value="100">100 </option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1500">1500</option>
                                <option value="2000">2000</option>
                                <option value="3000">3000</option>
                                <option value="5000">5000</option>
                                <option value="10000">10000</option>
                                <option value="50000">50000</option>
                            </select>
                        </label>
                    </div>
                </div>
                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <div class="search-category-container">
                            <label class="styled-select">
                                <select class="classic" name="maxprice" style="direction: ltr;">
                                    <option  selected disabled>{{trans('localization.maxprice')}}</option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                    <option value="1500">1500</option>
                                    <option value="2000">2000</option>
                                    <option value="3000">3000</option>
                                    <option value="5000">5000</option>
                                    <option value="10000">10000</option>
                                    <option value="20000">20000</option>
                                    <option value="50000">50000</option>
                                    <option value="80000">80000</option>
                                    <option value="90000">90000</option>
                                    <option value="100000">100000</option>
                                    <option value="200000">200000</option>
                                    <option value="500000">500000</option>
                                    <option value="1000000">1000000</option>



                                </select>
                            </label>
                        </div>
                    </div>
                    </div>


            <div class="row range-slider">

                <div class="col-lg-12 col-lg-offset-1 col-md-12 col-xs-12" style="display: flex;
  align-items: center;
  justify-content: center;">
                    <div class="text-center btn-section">
                        <button type="submit" class="btn btn-common" ><i class="lni-search"></i>{{trans('localization.search')}}</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<section class="property section-padding" style="direction:ltr; ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.houselist')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
             @foreach($brproper as $bproh)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">

                                    <a class="hover-effect" href="{{route('abroad',$bproh->id)}}" >


                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($bproh->banner, true)[0]}}" alt="" style="Width:348px; height:232px; ">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">For {{$bproh->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('abroad',$bproh->id)}}">{{$bproh->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i>{{$bproh->area1.',  '.$bproh->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>${{$bproh->price}}</span>
                                        </div>


                                        @if(trans('localization.lang')==='Dari' )
                                            <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$bproh->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$bproh->bathrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $bproh->sizetypr.' '.$bproh->area}}</span></p>
                                        @endif
                                        @if(trans('localization.lang')==='English')
                                            <p ><span >{{$bproh->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$bproh->bathrooms.' '.trans('localization.baths')}} </span> . <span>{{$bproh->area.' ' .$bproh->sizetype}}</span></p>
                                        @endif
                                        @if(trans('localization.lang')==='Pashto' )
                                            <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$bproh->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$bproh->bathrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $bproh->area.' '.$bproh->sizetypr}}</span></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            @foreach($proper as $proh)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('property',$proh->id)}}">

                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($proh->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label">For {{$proh->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('property',$proh->id)}}">{{$proh->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i>{{$proh->area1.',  '.$proh->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>${{$proh->price}}</span>
                                    </div>
                                    @if(trans('localization.lang')==='Dari' )
                                    <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$proh->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$proh->bathrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $proh->sizetypr.' '.$proh->area}}</span></p>
                                @endif
                                    @if(trans('localization.lang')==='English')
                                    <p ><span >{{$proh->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$proh->bathrooms.' '.trans('localization.baths')}} </span> . <span>{{$proh->area.' ' .$proh->sizetypr}}</span></p>
                                   @endif
                                    @if(trans('localization.lang')==='Pashto' )
                                        <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$proh->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$proh->bathrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $proh->area.' '.$proh->sizetypr}}</span></p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
            <div class="col-12">
                <div class="text-center">
                    <a href="{{url('houses')}}" class="btn btn-common">{{trans('localization.browse')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>











<section class="latest-property section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title">{{trans('localization.menue-apartments')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
                <div id="latest-property" class="owl-carousel">
                    @foreach($bhouses as $bof)
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="{{route('bapartment',$bof->id)}}">
                                                <img class="img-fluid" src="{{asset('images')}}\{{json_decode($bof->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                            </a>
                                            <div class="label-inner">
                                                <span class="label-status label">For {{$bof->status}}</span>
                                            </div>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="{{route('bapartment',$bof->id)}}">{{$bof->title}}</a></h3>
                                            <div class="adderess"><i class="lni-map-marker"></i> {{$bof->area1.',  '.$bof->province .'  '}} ,Afghanistan</div>
                                            <div class="pricin-list">
                                                <div class="property-price">
                                                    <span>{{$bof->price}}$</span>
                                                </div>
                                                
                                                  @if(trans('localization.lang')==='Dari' )
                                    <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$bof->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$bof->bathrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $bof->sizetype.' '.$bof->area}}</span></p>
                                @endif
                                    @if(trans('localization.lang')==='English')
                                    <p ><span >{{$bof->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$bof->bathrooms.' '.trans('localization.baths')}} </span> . <span>{{$bof->area.' ' .$bof->sizetype}}</span></p>
                                   @endif
                                    @if(trans('localization.lang')==='Pashto' )
                                        <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$bof->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$bof->bathrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $bof->area.' '.$bof->sizetypr}}</span></p>
                                    @endif
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($houses as $ofpro)
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="{{route('apartment',$ofpro->id)}}">
                                                <img class="img-fluid" src="{{asset('images')}}\{{json_decode($ofpro->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                            </a>
                                            <div class="label-inner">
                                                <span class="label-status label">For {{$ofpro->status}}</span>
                                            </div>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="{{route('apartment',$ofpro->id)}}">{{$ofpro->title}}</a></h3>
                                            <div class="adderess"><i class="lni-map-marker"></i> {{$ofpro->area1.',  '.$ofpro->province .'  '}} ,Afghanistan</div>
                                            <div class="pricin-list">
                                                <div class="property-price">
                                                    <span>${{$ofpro->price}}</span>
                                                </div>
                                                @if(trans('localization.lang')==='Dari' )
                                                    <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$ofpro->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$ofpro->bathrooms}} </span> . <span style="direction: rtl;font-size: 14px">. {{ $ofpro->sizetypr.' '.$ofpro->area}}</span></p>
                                                @endif
                                                @if(trans('localization.lang')==='English')
                                                    <p ><span >{{$ofpro->bedrooms.' '.trans('localization.room')}} </span> . <span>{{$ofpro->bathrooms.' '.trans('localization.baths')}} </span> . <span>{{$ofpro->area.' ' .$ofpro->sizetypr}}</span></p>
                                                @endif
                                                @if(trans('localization.lang')==='Pashto' )
                                                    <p style="direction: rtl;font-size: 2px" ><span style="direction: rtl;font-size: 14px" >{{ trans('localization.room').' '.$ofpro->bedrooms}} </span> , <span style="direction: rtl;font-size: 14px">. {{trans('localization.baths') . ' ' .$ofpro->bathrooms}} </span> . <span style="direction: ltr;font-size: 14px">. {{ $ofpro->area.' '.$ofpro->sizetypr}}</span></p>
                                                @endif
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
    </div>
    <br>
    <div class="col-12">
        <div class="text-center">
            <a href="{{url('apartments')}}" class="btn btn-common">{{trans('localization.browse')}}</a>
        </div>
    </div>
</section>





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
                                            <span>{{$boffice->price}}$</span>
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
       <br>
      <div class="col-12">
                <div class="text-center">
                    <a href="{{url('offices')}}" class="btn btn-common">{{trans('localization.browse')}}</a>
                </div>
    </div>
        </div>
    </div>
</section>







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

            @foreach($bland as $blpro)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="property-main">
                        <div class="property-wrap">
                            <div class="property-item">
                                <div class="item-thumb">
                                    <a class="hover-effect" href="{{route('bland',$blpro->id)}}">
                                        <img class="img-fluid" src="{{asset('images')}}\{{json_decode($blpro->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                    </a>
                                    <div class="label-inner">
                                        <span class="label-status label">for {{$blpro->status}}</span>
                                    </div>
                                </div>
                                <div class="item-body">
                                    <h3 class="property-title"><a href="{{route('bland',$blpro->id)}}">{{$blpro->title}}</a></h3>
                                    <div class="adderess"><i class="lni-map-marker"></i> {{$blpro->city.',  '.$blpro->province .'  '}} ,Afghanistan</div>
                                    <div class="pricin-list">
                                        <div class="property-price">
                                            <span>{{$blpro->price}}$</span>
                                        </div>
                                        <p> <span>{{$blpro->area}} {{$blpro->sizetype}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($lapro as $lpro)
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="property-main">
                    <div class="property-wrap">
                        <div class="property-item">
                            <div class="item-thumb">
                                <a class="hover-effect" href="{{route('land',$lpro->id)}}">
                                    <img class="img-fluid" src="{{asset('images')}}\{{json_decode($lpro->banner, true)[0]}}" alt="" style="Width:348px; height:232px;">
                                </a>
                                <div class="label-inner">
                                    <span class="label-status label">for {{$lpro->status}}</span>
                                </div>
                            </div>
                            <div class="item-body">
                                <h3 class="property-title"><a href="{{route('land',$lpro->id)}}">{{$lpro->title}}</a></h3>
                                <div class="adderess"><i class="lni-map-marker"></i> {{$lpro->area1.',  '.$lpro->province .'  '}} ,Afghanistan</div>
                                <div class="pricin-list">
                                    <div class="property-price">
                                        <span>${{$lpro->price}}</span>
                                    </div>
                                    <p> <span>{{$lpro->area}} {{$lpro->sizetypr}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @endforeach
            <div class="col-12">

                <div class="text-center">
                    <a href="{{url('lands')}}" class="btn btn-common">{{trans('localization.browse')}}</a>

                </div>
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
