<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact us</title>

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
            <h2>{{trans('localization.contact')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.contact')}}</span>
        </div>
    </div>
</div>


<section id="contact-section" class="section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="contact-right-area">
                    <h2 class="title-">{{trans('localization.reach')}}</h2>
                    <p>{{trans('localization.information')}} <br> {{trans('localization.please-contact')}}</p>
                    <div class="contact-right">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <p>{{trans('localization.location')}}</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <p><a href="#"><span class="__cf_email__" >info@afghanproperty.af</span></a></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-phone-handset"></i>
                            </div>
                            <p><a href="#">{{trans('localization.number')}}</a></p>
                        </div>
                    </div>
                    <div class="social-icon">
                        <a class="facebook" href="https://www.facebook.com/pg/Afghanproperty.af/about/?ref=page_internal"><i class="lni-facebook-filled"></i></a>
                        <a class="twitter" href="https://www.instagram.com/afghanproperty18/"><i class="lni-twitter-filled"></i></a>
                        <a class="instagram" href="https://twitter.com/PropertyAfghan"><i class="lni-instagram-filled"></i></a>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 form-line">
                <h2>{{trans('localization.feedback')}}</h2>
                <form role="form" method="post"  name="contact-form"  action="{{url('contact_us')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('localization.name1')}}" required data-error="Please enter your name" autofocus>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{trans('localization.email')}}" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="{{trans('localization.subject')}}" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="{{trans('localization.message')}}" required data-error="Write your message"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit" style=" background-color: #ed1c24;"><i class="fa fa-paper-plane" aria-hidden="true" ></i> {{trans('localization.contact-send')}}</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




@include('footer')

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>



@include('scripts')


<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/nivo-lightbox.js')}}"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM">
</script>


<script src="{{asset('js/form-validator.min.js')}}"></script>
<script src="{{asset('js/contact-form-script.min.js')}}"></script>
<script src="{{asset('js/map.js')}}"></script>
<script type="{{asset('text/javascript')}}" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM">
</script>
</body>

</html>
