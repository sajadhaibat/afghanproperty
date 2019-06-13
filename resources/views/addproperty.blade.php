<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add property</title>

    @include('links')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjDK9jht7pc0cuhC7El2Ht3vAUpVgYFoE&libraries=places"
            async defer type="text/javascript"></script>
</head>
<body>

<header id="header-wrap">


    @include('navbar')

</header>


<section class="user-page submit-property section-padding">
    <div class="container">

        <form role="form" class="myForms" action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <div class="row"  id="type_form">
                <div class="col-md-8 col-md-offset-2">

                    <div class="">
                        <h3>{{trans('localization.propertytype')}}</h3>
                        <br>


                        <div class="row mb-3">
                            <div class="col-lg-6  col-md-6 ">
                                <div class="form-group">
                                    <label> {{trans('localization.type2')}} </label>
                                    <select class="classic" id="selector" name="type" style="direction: ltr;">
                                        <option  selected disabled>{{trans('localization.propertytype2')}}</option>
                                        <option value="apartment">{{trans('localization.apartment')}}</option>
                                        <option value="house">{{trans('localization.menue-houses')}}</option>
                                        <option value="office">{{trans('localization.menue-offices')}}</option>
                                        <option value="land">{{trans('localization.menue-lands')}}</option>
                                        <option value="shop">{{trans('localization.menue-shops')}}</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>


            </div>


            <div class="row" style="display: none" id="house_form">
                <div class="col-lg-12">

                    <div >
                        <h3>{{trans('localization.addhouse')}}</h3>
                        <a style="float: right;">   <button id="backbutton" type="button" class="btn btn-danger btn-sm">{{trans('localization.back')}}</button></a>
                        <br>


                        <div style="width:90%;margin:0 auto; " id="broad">

                            <div>
                                <div>
                                    <br>

                                    <div class="row">

                                        <div class="col-lg-3">

                                            <div class="form-group">
                                                {{trans('localization.want')}}   <select class="form-control" name="status" id="want" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="sell">{{trans('localization.sale')}}</option>
                                                    <option value="rent">{{trans('localization.rent')}}</option>
                                                    <option value="lease">{{trans('localization.lease')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.propertytitle')}} <input type="text" class="form-control" placeholder=" {{mb_strtolower(trans('localization.propertytitle'))}} " name="title" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.city')}}
                                                <select class="form-control" name="province" required style="direction: ltr;" id="province">
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="Kabul" id="kabul">
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
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="city">
                                            <div class="form-group">
                                              {{trans('localization.city1')}}  <input type="text"  class="form-control" placeholder=" {{mb_strtolower(trans('localization.city1'))}} " name="city" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.ditrict')}}  <input type="text" class="form-control" placeholder=" {{mb_strtolower(trans('localization.ditrict'))}} " name="district" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                             {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.sizetype')}}   <select class="form-control" name="sizetypr" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="m2"> {{trans('localization.m')}}  </option>
                                                    <option value="sq feet"> {{trans('localization.sqfeet')}}  </option>
                                                    <option value="jerib"> {{trans('localization.jerib')}}  </option>
                                                    <option value="biswa"> {{trans('localization.biswa')}} </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bigproperty')}} <input type="number" class="form-control" placeholder=" {{trans('localization.area')}}" name="area" id="uname" required>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.floors')}}
                                                <input type="number" class="form-control" placeholder=" {{trans('localization.floornum')}}" name="floors" id="uname" required>

                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bedroomsno')}}
                                                <input type="number" class="form-control" placeholder=" {{trans('localization.bednum')}}" name="bedrooms" id="uname" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bathroomsno')}}
                                                <input type="number" class="form-control" placeholder="{{trans('localization.bathnum')}}" name="bathrooms" id="uname" required>

                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.price')}} <input type="number" class="form-control" placeholder=" {{trans('localization.usdprice')}}" name="price" id="uname" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{trans('localization.propertyphotos')}}
                                                <input type="file" name="banner[]" class="form-control" id="image" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group message">
                                                <label> {{trans('localization.additional')}} </label>
                                                <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder=" {{trans('localization.searchmap')}} " id="searchmap">
                                                <br>
                                                <div id="map-canvas" style="height: 400px;width: 100%;border: 1px solid darkgray;border-radius: 10px"></div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" >
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row" id="but">
                                    <div class="col-lg-12 mt-3">
                                        <button type="submit" ><a  class="btn btn-common"> {{trans('localization.submit')}} </a> </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </form>

        <form role="form" action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" id="office" name="type" value="apartment">

            <div class="row" style="display: none" id="apartment_form">
                <div style="width:90%;margin:0 auto; " id="broad">

                    <div>
                        <div>
                            <h3>{{trans('localization.addapartment')}}</h3>
                            <a style="float: right;">   <button id="backbutton5" type="button" class="btn btn-danger btn-sm">{{trans('localization.back')}}</button></a>
                            <br>
                            <br>

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="form-group">
                                        {{trans('localization.want')}}   <select class="form-control" name="status" id="want" required >
                                            <option selected disabled>{{trans('localization.select')}}</option>
                                            <option value="sell">{{trans('localization.sale')}}</option>
                                            <option value="rent">{{trans('localization.rent')}}</option>
                                            <option value="lease">{{trans('localization.lease')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.propertytitle')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.propertytitle'))}}" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.city')}}
                                        <select class="form-control" name="province" required style="direction: ltr;">
                                            <option selected disabled>{{trans('localization.select')}}</option>
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
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                       {{trans('localization.city1')}} <input type="text" class="form-control" placeholder=" {{trans('localization.city2')}}" name="city" required>
                                    </div>
                                </div>




                            </div>

                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.ditrict')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.ditrict'))}}" name="district" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.sizetype')}}  <select class="form-control" name="sizetypr" id="in" required>
                                            <option selected disabled>{{trans('localization.select')}}</option>
                                            <option value="m2">{{trans('localization.m')}}</option>
                                            <option value="sq feet">{{trans('localization.sqfeet')}} </option>
                                            <option value="jerib">{{trans('localization.jerib')}} </option>
                                            <option  value="biswa">{{trans('localization.biswa')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.bigproperty')}}<input type="number" class="form-control" placeholder="{{trans('localization.area')}}" name="area" id="uname" required>
                                    </div>
                                </div>


                              </div>


                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.bedroomsno')}}
                                        <input type="number" class="form-control" placeholder="{{trans('localization.bednum')}}" name="bedrooms" id="uname" required>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.bathroomsno')}}
                                        <input type="number" class="form-control" placeholder="{{trans('localization.bathnum')}}" name="bathrooms" id="uname" required>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.price')}}<input type="number" class="form-control" placeholder="{{trans('localization.usdprice')}}" name="price" id="uname" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.propertyphotos')}}
                                        <input type="file" name="banner[]" class="form-control" placeholder="photos" multiple required>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group message">
                                        <label> {{trans('localization.additional')}} </label>
                                        <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder=" {{trans('localization.searchmap')}} " id="searchmap5" >
                                        <br>
                                        <div id="map-canvas5" style="height: 400px;width: 100%;border: 1px solid darkgray;border-radius: 10px"></div>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="lat5" name="lat" placeholder="Latitude" >
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="lng5" name="lng" placeholder="Longitude" >
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="but">
                                <div class="col-lg-12 mt-3">
                                    <button type="submit" ><a  class="btn btn-common">{{trans('localization.submit')}}</a> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>



        <form role="form" action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" id="office" name="type" value="office">

            <div class="row" style="display: none" id="office_form">
                <div style="width:90%;margin:0 auto; " id="broad">

                    <div>
                        <div>
                            <h3>{{trans('localization.addoffice')}}</h3>
                            <a style="float: right;">   <button id="backbutton1" type="button" class="btn btn-danger btn-sm">{{trans('localization.back')}}</button></a>
                            <br>
                            <br>

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="form-group">
                                        {{trans('localization.want')}}   <select class="form-control" name="status" id="want" required >
                                            <option selected disabled>{{trans('localization.select')}}</option>
                                            <option value="sell">{{trans('localization.sale')}}</option>
                                            <option value="rent">{{trans('localization.rent')}}</option>
                                            <option value="lease">{{trans('localization.lease')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.propertytitle')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.propertytitle'))}}" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.city')}}
                                        <select class="form-control" name="province" required style="direction: ltr;">
                                            <option selected disabled>{{trans('localization.select')}}</option>
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
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                      {{trans('localization.city1')}} <input type="text" class="form-control" placeholder=" {{mb_strtolower(trans('localization.city1'))}} " name="city" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">




                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.ditrict')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.ditrict'))}}" name="district" required>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.sizetype')}}  <select class="form-control" name="sizetypr" id="in" required>
                                            <option selected disabled>{{trans('localization.select')}}</option>
                                            <option value="m2">{{trans('localization.m')}}</option>
                                            <option value="sq feet">{{trans('localization.sqfeet')}} </option>
                                            <option value="jerib">{{trans('localization.jerib')}} </option>
                                            <option  value="biswa">{{trans('localization.biswa')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.bigproperty')}}<input type="number" class="form-control" placeholder="{{trans('localization.area')}}" name="area" id="uname" required>
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                            
                            
                              <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.floors')}}
                                                <input type="number" class="form-control" placeholder=" {{trans('localization.floornum')}}" name="floors" id="uname" required>

                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bedroomsno')}}
                                                <input type="number" class="form-control" placeholder=" {{trans('localization.bednum')}}" name="bedrooms" id="uname" required>

                                            </div>
                                        </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.price')}}<input type="number" class="form-control" placeholder="{{trans('localization.usdprice')}}" name="price" id="uname" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        {{trans('localization.propertyphotos')}}
                                        <input type="file" name="banner[]" class="form-control" placeholder="photos" multiple required>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group message">
                                        <label> {{trans('localization.additional')}} </label>
                                        <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder=" {{trans('localization.searchmap')}} " id="searchmap1" >
                                        <br>
                                        <div id="map-canvas1" style="height: 400px;width: 100%;border: 1px solid darkgray;border-radius: 10px"></div>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="lat1" name="lat" placeholder="Latitude" >
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="lng1" name="lng" placeholder="Longitude" >
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="but">
                                <div class="col-lg-12 mt-3">
                                    <button type="submit" ><a  class="btn btn-common">{{trans('localization.submit')}}</a> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form role="form" action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" id="office" name="type" value="land">

            <div class="row" style="display: none" id="land_form">
                <div class="col-lg-12">


                    <div class="">
                        <h3>{{trans('localization.addland')}}</h3>
                        <a style="float: right;">   <button id="backbutton2" type="button" class="btn btn-danger btn-sm">{{trans('localization.back')}}</button></a>
                        <br>


                        <div style="width:90%;margin:0 auto; " id="broad">

                            <div>
                                <div>
                                    <br>

                                    <div class="row">

                                        <div class="col-lg-3">

                                            <div class="form-group">
                                                {{trans('localization.want')}}   <select class="form-control" name="status" id="want" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="sell">{{trans('localization.sale')}}</option>
                                                    <option value="rent">{{trans('localization.rent')}}</option>
                                                    <option value="lease">{{trans('localization.lease')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.propertytitle')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.propertytitle'))}}" name="title" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.city')}}
                                                <select class="form-control" name="province" required style="direction: ltr;">
                                                    <option selected disabled>{{trans('localization.select')}}</option>
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
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                               {{trans('localization.city1')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.city1'))}}" name="city" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">


                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.ditrict')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.ditrict'))}}" name="district" required>
                                            </div>
                                        </div>



                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.sizetype')}} <select class="form-control" name="sizetypr" id="in" required>
                                                    <option value="" selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="m2">{{trans('localization.m')}} </option>
                                                    <option value="sq feet">{{trans('localization.sqfeet')}} </option>
                                                    <option value="jerib">{{trans('localization.jerib')}} </option>
                                                    <option value="biswa">{{trans('localization.biswa')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bigproperty')}}<input type="number" class="form-control" placeholder="{{trans('localization.area')}}" name="area" id="uname" required>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                {{trans('localization.price')}}<input type="number" class="form-control" placeholder="{{trans('localization.usdprice')}}" name="price" id="uname" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                {{trans('localization.propertyphotos')}}
                                                <input type="file" name="banner[]" class="form-control" placeholder="photos" multiple required>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group message">
                                                <label> {{trans('localization.additional')}} </label>
                                                <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder="{{trans('localization.searchmap')}} " id="searchmap2">
                                                <br>
                                                <div id="map-canvas2" style="height: 400px;width: 100%;border: 1px solid darkgray;border-radius: 10px"></div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lat2" name="lat" placeholder="Latitude" >
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lng2" name="lng" placeholder="Longitude" >
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" id="but">
                                        <div class="col-lg-12 mt-3">
                                            <button type="submit" ><a  class="btn btn-common">{{trans('localization.submit')}}</a> </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form role="form" action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" id="office" name="type" value="shop">

            <div class="row" style="display: none" id="shop_form">
                <div class="col-lg-12">


                    <div class="">
                        <h3>{{trans('localization.addshop')}}</h3>
                        <a style="float: right;">   <button id="backbutton3" type="button" class="btn btn-danger btn-sm">{{trans('localization.back')}}</button></a>
                        <br>


                        <div style="width:90%;margin:0 auto; " id="broad">

                            <div>
                                <div>
                                    <br>

                                    <div class="row">

                                        <div class="col-lg-3">

                                            <div class="form-group">
                                                {{trans('localization.want')}}  <select class="form-control" name="status" id="want" required>
                                                    <option  selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="sell">{{trans('localization.sale')}}</option>
                                                    <option value="rent">{{trans('localization.rent')}}</option>
                                                    <option value="lease">{{trans('localization.lease')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.propertytitle')}}<input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.propertytitle'))}}" name="title" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.city')}}
                                                <select class="form-control" name="province" required style="direction: ltr;">
                                                    <option selected disabled>{{trans('localization.select')}}</option>
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
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                             {{trans('localization.city1')}} <input type="text" class="form-control" placeholder=" {{mb_strtolower(trans('localization.city1'))}}" name="city" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.ditrict')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.ditrict'))}}" name="district" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.sizetype')}} <select class="form-control" name="sizetypr" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="m2">{{trans('localization.m')}} </option>
                                                    <option value="sq feet">{{trans('localization.sqfeet')}}</option>
                                                    <option value="jerib">{{trans('localization.jerib')}}</option>
                                                    <option value="biswa">{{trans('localization.biswa')}}  </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bigproperty')}}<input type="number" class="form-control" placeholder="{{trans('localization.area')}}" name="area" id="uname" required>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                {{trans('localization.price')}}<input type="number" class="form-control" placeholder="{{trans('localization.usdprice')}}" name="price"  required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                {{trans('localization.propertyphotos')}}
                                                <input type="file" name="banner[]" class="form-control" placeholder="photos" multiple required>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group message">
                                                <label> {{trans('localization.additional')}} </label>
                                                <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder=" {{trans('localization.searchmap')}} " id="searchmap3">
                                                <br>
                                                <div id="map-canvas3" style="height: 400px;width: 100%;border: 1px solid darkgray;border-radius: 10px"></div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lat3" name="lat" placeholder="Latitude" >
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="lng3" name="lng" placeholder="Longitude" >
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" id="but">
                                        <div class="col-lg-12 mt-3">
                                            <button type="submit" ><a  class="btn btn-common">{{trans('localization.submit')}}</a> </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>




    </div>
</section>


@include('footer')

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>
@include('scripts')

<!--
<script>
    $(document).ready(function () {
        $('#province').on("change", function () {
            if (this.value == 'Kabul') {

                $('#city').hide();
            }
            else
                $('#city').show();
        })
    });
    </script>
   -->

<script>
    $(document).ready(function () {

        $('#selector').on("change",function () {

            if(this.value == 'house'){
                $('#house_form').show();
                $('#type_form').hide();

                var map = new google.maps.Map(document.getElementById('map-canvas'),{
                    center:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    zoom:10
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    map:map,
                    draggable:true
                });



                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

                google.maps.event.addListener(searchBox,'places_changed',function (){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,place;

                    for(i=0;place=places[i];i++){
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);

                });
                google.maps.event.addListener(marker,'position_changed',function () {
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });

            }
            if(this.value == 'office')
            {
                $('#office_form').show();
                $('#type_form').hide();

                var map = new google.maps.Map(document.getElementById('map-canvas1'),{
                    center:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    zoom:10
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    map:map,
                    draggable:true
                });



                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap1'));

                google.maps.event.addListener(searchBox,'places_changed',function (){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,place;

                    for(i=0;place=places[i];i++){
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);

                });
                google.maps.event.addListener(marker,'position_changed',function () {
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat1').val(lat);
                    $('#lng1').val(lng);
                });

            }

            if(this.value == 'apartment')
            {
                $('#apartment_form').show();
                $('#type_form').hide();

                var map = new google.maps.Map(document.getElementById('map-canvas5'),{
                    center:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    zoom:10
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    map:map,
                    draggable:true
                });



                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap5'));

                google.maps.event.addListener(searchBox,'places_changed',function (){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,place;

                    for(i=0;place=places[i];i++){
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);

                });
                google.maps.event.addListener(marker,'position_changed',function () {
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat5').val(lat);
                    $('#lng5').val(lng);
                });

            }
            if(this.value == 'land') {
                $('#land_form').show();
                $('#type_form').hide();
                var map = new google.maps.Map(document.getElementById('map-canvas2'), {
                    center: {
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    zoom: 10
                });
                var marker = new google.maps.Marker({
                    position: {
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    map: map,
                    draggable: true
                });


                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap2'));

                google.maps.event.addListener(searchBox, 'places_changed', function () {
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;

                    for (i = 0; place = places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);

                });
                google.maps.event.addListener(marker, 'position_changed', function () {
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat2').val(lat);
                    $('#lng2').val(lng);
                });
            }
            if(this.value == 'shop')
            {
                $('#shop_form').show();
                $('#type_form').hide();
                var map = new google.maps.Map(document.getElementById('map-canvas3'),{
                    center:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    zoom:10
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat: 34.5553,
                        lng: 69.2075
                    },
                    map:map,
                    draggable:true
                });



                var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap3'));

                google.maps.event.addListener(searchBox,'places_changed',function (){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,place;

                    for(i=0;place=places[i];i++){
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);

                });
                google.maps.event.addListener(marker,'position_changed',function () {
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat3').val(lat);
                    $('#lng3').val(lng);
            });


    }
        });
    });
</script>

<script >
    $(document).ready(function(){

        $("#backbutton").click(function() {
            $('#type_form').show();
            $('#house_form').hide();
        });
        $("#backbutton1").click(function() {
            $('#type_form').show();
            $('#office_form').hide();
        });
        $("#backbutton2").click(function() {
            $('#type_form').show();
            $('#land_form').hide();
        });

        $("#backbutton3").click(function() {
            $('#type_form').show();
            $('#shop_form').hide();
        });
        $("#backbutton5").click(function() {
            $('#type_form').show();
            $('#apartment_form').hide();
        });
    });
</script>

<!-- maps -->







</body>

</html>
