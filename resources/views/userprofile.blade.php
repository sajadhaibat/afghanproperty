<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/brittville-demo/my-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:11:54 GMT -->
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





<section class="user-page section-padding">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-5 col-xs-12">
<div class="user-profile-box">

<div class="header clearfix">

<h3 style="color:black; padding-bottom:0px;"> {{ucfirst(Auth::user()->name)}}  </h3>
<img src="avatar5.png" alt="avatar" class="img-fluid profile-img"  >
</div>

                    <div class="detail clearfix">
                        <ul>

                            <li>
                                <a class="active" href="{{url('userprofile')}}">
                                    <i class="lni-home"></i>My Properties
                                </a>
                            </li>

                            <li>
                                <a href="{{url('addproperty')}}" target="_blank">
                                    <i class="lni-plus"></i>Add New Property
                                </a>
                            </li>

                            <li>
                            <a href="{{ url('users/logout') }}"
                             onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="lni-logout"></i>Log Out
                            </a>
                            <form id="logout-form" action="{{ url('users/logout') }}" method="get" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-xs-12">
                <div class="my-properties">
                    <table class="table-responsive">
                        <thead>
                        <tr>
                            <th>Property</th>
                            <th></th>
                            <th>Date Added</th>
                            <th>Views</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="image">
                                <a href="{{url('singleproperty')}}"><img alt="my-properties-3" src="assets/img/property/house-1.jpg" class="img-fluid"></a>
                            </td>
                            <td>
                                <div class="inner">
                                    <a href="property.html"><h2>Modern Family Home</h2></a>
                                    <figure><i class="lni-map-marker"></i> York Blvd, Los Angeles, US</figure>
                                    <div class="tag price">$ 27,000</div>
                                </div>
                            </td>
                            <td>14.02.2018</td>
                            <td>421</td>
                            <td class="actions">
                                <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                <a href="#"><i class="delete lni-trash"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="pagination-container">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
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

<!-- Mirrored from preview.uideck.com/items/brittville-demo/my-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:11:54 GMT -->
</html>
