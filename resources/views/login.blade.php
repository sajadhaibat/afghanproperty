<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
@include('links')
</head>
<body>

<header id="header-wrap">

@include('navbar')

</header>


<section id="content" class="section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="page-login-form box">
                    <h3>
                      {{trans('localization.login')}}
                    </h3>
                    <form class="login-form"  role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <input type="email" id="email" class="form-control" placeholder="{{trans('localization.email')}}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                            <input id="password" type="password" class="form-control" placeholder="{{trans('localization.password')}}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <button class="btn btn-common log-btn">{{trans('localization.login')}}</button>
                    </form>
                    <ul class="form-links">
                        <li class="text-center"><a href="{{url('register')}}">Don't have an account?</a></li>
                    </ul>
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
