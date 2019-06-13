<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ucfirst(Auth::user()->name)}}</title>

    @include('links')
</head>
<body>

<header id="header-wrap">



    @include('navbar')


</header>





<section class="user-page section-padding" style="direction: ltr;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-xs-12">
                <div class="user-profile-box">

                    <div class="header clearfix">
                        <h3 style="color:black;">{{ucfirst(Auth::user()->name)}}</h3> <br>
            <!--
                        <form id="profile" action="{{route('profilepicture')}}" method="post">
                            {{csrf_field()}}
                        <span class="btn btn-primary btn-file" style="background-color: #C82333;">
                            Change profile<input id="banner" type="file" name="banner">
                        </span>
                            </form>
                            -->

                        <img src="{{url('img/avatar/avatar5.png')}}" alt="avatar" class="img-fluid profile-img">

                    </div>

                    <div class="detail clearfix">
                        <ul>

                            <li>
                                <a href="#">
                                    <i class="lni-home"></i>{{trans('localization.myproperties')}}
                                </a>
                            </li>

                            <li>
                                <a href="{{route('home.create')}}">
                                    <i class="lni-plus"></i>{{trans('localization.addproperty')}}
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('users/logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    <i class="lni-logout"></i>{{trans('localization.logout')}}
                                </a>
                                <form id="logout-form" action="{{ url('users/logout') }}" method="get" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-xs-12" >
                @if(\Illuminate\Support\Facades\Session::has('delete'))
                    <div class="alert alert-info" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Successfully</strong> Deleted
                    </div>

                @endif

                <div class="my-properties" >
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Property</th>
                            <th></th>
                            <th>Date Added</th>

                         <!--   <th>Actions</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($property as $pro)
                        <tr>

                            <td class="image">

                                <a href="#"><img alt="my-properties-3" src="{{asset('images')}}\{{json_decode($pro->banner, true)[0]}}" class="img-fluid"></a>
                            </td>
                            <td>
                                <div class="inner">
                                    <a href="#"><h2>{{$pro->title}}</h2></a>
                                    <figure><i class="lni-map-marker"></i>{{$pro->district.',  '.$pro->city .'  '}} ,Afghanistan </figure>
                                    <div class="tag price">{{$pro->price}}$</div>
                                </div>
                            </td>
                            <td>{{$pro->created_at->format('Y-m-d')}}</td>
                        <!--
                            <td class="actions">

                                <form action="{{route('home.destroy',$pro->id)}}" method="POST" >
                                    <input type="hidden" name="_method" value="delete">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="close-icon btn btn-danger" title="delete" ><i class="fa fa-remove"> </i></button>
                                </form>

                            </td>
                            -->
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

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
<script>
if (document.getElementById("banner").value !== "") {
document.getElementById("profile").submit();
}
</script>
</body>

</html>
