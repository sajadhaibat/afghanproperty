<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

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
                        {{trans('localization.createaccount')}}
                    </h3>
                    <form class="login-form" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('accounttype') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <select class="form-control" name="accounttype" id="in" required>
                                    <option disabled selected >{{trans('localization.accounttype')}}</option>
                                    <option value="realtor">{{trans('localization.realtor')}}</option>
                                    <option value="owner">{{trans('localization.owner')}}</option>

                                </select>
                                @if ($errors->has('accounttype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{trans('localization.name')}}"  required autofocus >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-mobile"></i>
                                <input id="number" type="number" class="form-control" name="number" placeholder="{{trans('localization.phonenumber')}}" required>
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="lni-envelope"></i>
                                <input id="email" type="email" class="form-control" placeholder="{{trans('localization.emailaddress')}}" name="email" value="{{ old('email') }}" required>
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
                                <input  id="password"  type="password" class="form-control" placeholder="{{trans('localization.password')}}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-unlock"></i>
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{trans('localization.retypepassword')}}" name="password_confirmation" required>
                            </div>
                        </div>


                        <button class="btn btn-common log-btn mt-3">{{trans('localization.register')}}</button>
                        <p class="text-center">Already have an account?<a href="{{url('login')}}"> Sign In</a></p>
                    </form>
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
