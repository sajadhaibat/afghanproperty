<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About us</title>

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
            <h2>{{trans('localization.about')}}</h2>
            <a href="#"><i class="lni-home"></i> {{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.about')}}</span>
        </div>
    </div>
</div>


<section class="about section-padding">
    <div class="container" >
        <div class="row">

        </div>
        <div class="col-12">
            <div class="about-conter">
                <h3>{{trans('localization.about')}}</h3>
                <p>{{trans('localization.aboutus')}}</p>

                <br>

                <h3>{{trans('localization.services')}}</h3>
                <p>{{trans('localization.servicetext')}}</p>
                <p>{{trans('localization.servicetext1')}}</p>
                <p>{{trans('localization.servicetext2')}}</p>
                <p>{{trans('localization.servicetext3')}}</p>

                <a href="{{url('contact')}}" class="mt-3 btn btn-common">{{trans('localization.contact')}}</a>
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
