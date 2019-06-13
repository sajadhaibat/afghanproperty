<nav class="navbar navbar-expand-lg navbar-light bg-white" data-toggle="sticky-onscroll"  >
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="lin-menu"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}"><img class="img img-responsive" src="{{asset('img/logo.png')}}" alt=""  ></a>
    </div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="navbar-nav mr-auto w-100 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">
            {{trans('localization.home')}}
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{trans('localization.properties')}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('apartments')}}">{{trans('localization.menue-apartments')}}</a>
            <a class="dropdown-item" href="{{url('houses')}}">{{trans('localization.menue-houses')}}</a>
            <a class="dropdown-item" href="{{url('offices')}}">{{trans('localization.menue-offices')}}</a>
            <a class="dropdown-item" href="{{url('lands')}}">{{trans('localization.menue-lands')}}</a>
            <a class="dropdown-item" href="{{url('shops')}}">{{trans('localization.menue-shops')}}</a>



          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">
            {{trans('localization.about')}}
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">
           {{trans('localization.contact')}}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">

          </a>
        </li>
        

      </ul>

      <ul class="nav navbar-nav navbar-right dropdownlist">
      
      
      
      
     
 @if(trans('localization.lang')==='English')

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:red;"><a href="{{url('change-language/en')}}"  style="color: red;"> English</a></a>
                  <ul class="dropdown-menu" >
                      <li><a href="{{url('change-language/da')}}" style="color: red;">دری</a></li>
                      <li style="color:red;" role="separator" class="divider"></li>
                      <li><a href="{{url('change-language/pa')}}" style="color: red;">پښتو</a></li>

                  </ul>
              </li>
          @endif 
     
      
      
          @if(trans('localization.lang')==='Dari')

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red;"><a  href="{{url('change-language/da')}}" style="color: red;font-size: 18px;"> دری</a></a>
                  <ul class="dropdown-menu" >

                      <li style="color:#fff;"><a href="{{url('change-language/en')}}" style="color: red;">English</a></li>
                      <li style="color:#fff;" role="separator" class="divider"></li>
                      <li><a href="{{url('change-language/pa')}}" style="color: red;">پښتو</a></li>

                  </ul>
              </li>
          @endif
          @if(__('localization.lang')==='Pashto')

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red;"><a  href="{{url('change-language/pa')}}"  style="color: red;font-size: 18px;">پشتو</a></a>
                  <ul class="dropdown-menu" >

                      <li style="color:#fff;"><a href="{{url('change-language/en')}}" style="color: red;">English</a></li>
                      <li style="color:#fff;" role="separator" class="divider"></li>
                      <li><a href="{{url('change-language/da')}}" style="color: red;">دری</a></li>

                  </ul>
              </li>
          @endif
         
      </ul>



    </div>
  </div>

  <ul class="mobile-menu" style="padding-top: 20px;">
    <li>
      <a href="{{url('/')}}">
       {{trans('localization.home')}}
      </a>
    </li>
    <li>
      <a href="#">
      {{trans('localization.properties')}}
      </a>
      <ul class="dropdown">
        <li><a href="{{url('apartments')}}">{{trans('localization.menue-apartments')}}</a></li>
        <li><a href="{{url('houses')}}">{{trans('localization.menue-houses')}}</a></li>
        <li><a href="{{url('offices')}}">{{trans('localization.menue-offices')}}</a></li>
        <li><a href="{{url('lands')}}">{{trans('localization.menue-lands')}}</a></li>
        <li><a href="{{url('shops')}}">{{trans('localization.menue-shops')}}</a></li>

      </ul>
    </li>
    <li>
      <a href="{{url('about')}}">
      {{trans('localization.about')}}
      </a>
    </li>
    <li>
      <a href="{{url('contact')}}">
        {{trans('localization.contact')}}
      </a>
    </li>
      @if(trans('localization.lang')==='Dari')

    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red;"><a  href="{{url('change-language/da')}}"> دری</a></a>
      <ul class="dropdown-menu" >

        <li style="color:#fff;"><a href="{{url('change-language/en')}}" style="color: red;">English</a></li>
        <li style="color:#fff;" role="separator" class="divider"></li>
        <li><a href="{{url('change-language/pa')}}" style="color: red;">پښتو</a></li>

      </ul>
    </li>
          @endif
      @if(__('localization.lang')==='Pashto')

          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red;"><a  href="{{url('change-language/pa')}}">پشتو</a></a>
              <ul class="dropdown-menu" >

                  <li style="color:#fff;"><a href="{{url('change-language/en')}}" style="color: red;">English</a></li>
                  <li style="color:#fff;" role="separator" class="divider"></li>
                  <li><a href="{{url('change-language/da')}}" style="color: red;">دری</a></li>

              </ul>
          </li>
      @endif
      @if(trans('localization.lang')==='English')

          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red;"><a  href="{{url('change-language/en')}}"> English</a></a>
              <ul class="dropdown-menu" >

                  <li style="color:#fff;"><a href="{{url('change-language/da')}}" style="color: red;">دری</a></li>
                  <li style="color:#fff;" role="separator" class="divider"></li>
                  <li><a href="{{url('change-language/pa')}}" style="color: red;">پښتو</a></li>

              </ul>
          </li>
      @endif

  </ul>


</nav>