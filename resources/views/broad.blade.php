<!DOCTYPE html>
<html lang="{{trans('localization.lang')}}" dir="{{trans('localization.direction')}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ABroad </title>

@include('links')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjDK9jht7pc0cuhC7El2Ht3vAUpVgYFoE&libraries=places"
            async defer type="text/javascript"></script>
</head>
<body>

<header id="header-wrap">


        @include('topbar')

   @include('navbar')

</header>


<div id="page-banner-area" class="page-banner">
    <div class="page-banner-title">
        <div class="text-center">
            <h2>{{trans('localization.addabroad')}}</h2>
            <a href="#"><i class="lni-home"></i>{{trans('localization.home')}}</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">{{trans('localization.abroadpro')}}</span>
        </div>
    </div>
</div>


<section class="user-page submit-property section-padding">
    <div class="container">

        <div class="row"  id="house_form">
            <div class="col-lg-12">

                <div class="submit-form">

                    <center>
                        <h3>{{trans('localization.put')}}</h3>
                        <div id="the-info"></div>
                    </center>
                    <br>

                    <form role="form" action="{{route('broad.store')}}" enctype="multipart/form-data" method="post" style="direction: ltr;">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

                        <div style="width:90%;margin:0 auto; " id="broad">

                            <div>
                                <div>
                                    <br>

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.entername')}}<input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.entername'))}}" name="name"  required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div>
                                                    {{trans('localization.email')}}  <input type="email" class="form-control" placeholder="{{mb_strtolower(trans('localization.email'))}}" name="email" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.mobile')}}  <input type="number" class="form-control" placeholder="XXXXXXXX" name="mobile" id="umobile" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">

                                                <div class="form-group">
                                                    {{trans('localization.country')}}  <select class="form-control" name="country" id="want" required>

                                                        <option value="AF" selected disabled>{{trans('localization.select')}}</option>
                                                        <option >Åland Islands</option>
                                                        <option >Albania</option>
                                                        <option >Algeria</option>
                                                        <option >American Samoa</option>
                                                        <option >Andorra</option>
                                                        <option >Angola</option>
                                                        <option >Anguilla</option>
                                                        <option >Antarctica</option>
                                                        <option >Antigua and Barbuda</option>
                                                        <option >Argentina</option>
                                                        <option >Armenia</option>
                                                        <option >Aruba</option>
                                                        <option >Australia</option>
                                                        <option >Austria</option>
                                                        <option >Azerbaijan</option>
                                                        <option >Bahamas</option>
                                                        <option >Bahrain</option>
                                                        <option >Bangladesh</option>
                                                        <option >Barbados</option>
                                                        <option >Belarus</option>
                                                        <option >Belgium</option>
                                                        <option >Belize</option>
                                                        <option >Benin</option>
                                                        <option >Bermuda</option>
                                                        <option >Bhutan</option>
                                                        <option >Bolivia, Plurinational State of</option>
                                                        <option >Bonaire, Sint Eustatius and Saba</option>
                                                        <option >Bosnia and Herzegovina</option>
                                                        <option >Botswana</option>
                                                        <option >Bouvet Island</option>
                                                        <option >Brazil</option>
                                                        <option >British Indian Ocean Territory</option>
                                                        <option >Brunei Darussalam</option>
                                                        <option >Bulgaria</option>
                                                        <option >Burkina Faso</option>
                                                        <option >Burundi</option>
                                                        <option >Cambodia</option>
                                                        <option >Cameroon</option>
                                                        <option >Canada</option>
                                                        <option >Cape Verde</option>
                                                        <option>Cayman Islands</option>
                                                        <option>Central African Republic</option>
                                                        <option>Chad</option>
                                                        <option>Chile</option>
                                                        <option>China</option>
                                                        <option>Christmas Island</option>
                                                        <option>Cocos (Keeling) Islands</option>
                                                        <option>Colombia</option>
                                                        <option>Comoros</option>
                                                        <option>Congo</option>
                                                        <option>Congo, the Democratic Republic of the</option>
                                                        <option>Cook Islands</option>
                                                        <option>Costa Rica</option>
                                                        <option>Côte d'Ivoire</option>
                                                        <option>Croatia</option>
                                                        <option >Cuba</option>
                                                        <option>Curaçao</option>
                                                        <option>Cyprus</option>
                                                        <option>Czech Republic</option>
                                                        <option >Denmark</option>
                                                        <option >Djibouti</option>
                                                        <option >Dominica</option>
                                                        <option >Dominican Republic</option>
                                                        <option >Ecuador</option>
                                                        <option >Egypt</option>
                                                        <option >El Salvador</option>
                                                        <option >Equatorial Guinea</option>
                                                        <option >Eritrea</option>
                                                        <option >Ethiopia</option>
                                                        <option >Estonia</option>
                                                        <option >Falkland Islands (Malvinas)</option>
                                                        <option >Faroe Islands</option>
                                                        <option>Fiji</option>
                                                        <option >Finland</option>
                                                        <option >France</option>
                                                        <option >French Guiana</option>
                                                        <option >French Polynesia</option>
                                                        <option >French Southern Territories</option>
                                                        <option >Gabon</option>
                                                        <option >Gambia</option>
                                                        <option >Georgia</option>
                                                        <option >Germany</option>
                                                        <option >Ghana</option>
                                                        <option >Gibraltar</option>
                                                        <option >Greece</option>
                                                        <option >Greenland</option>
                                                        <option >Grenada</option>
                                                        <option >Guadeloupe</option>
                                                        <option >Guam</option>
                                                        <option >Guatemala</option>
                                                        <option >Guernsey</option>
                                                        <option >Guinea</option>
                                                        <option >Guinea-Bissau</option>
                                                        <option >Guyana</option>
                                                        <option >Haiti</option>
                                                        <option >Heard Island and McDonald Islands</option>
                                                        <option >Holy See (Vatican City State)</option>
                                                        <option >Honduras</option>
                                                        <option >Hong Kong</option>
                                                        <option >Hungary</option>
                                                        <option >Iceland</option>
                                                        <option >India</option>
                                                        <option >Indonesia</option>
                                                        <option >Iran, Islamic Republic of</option>
                                                        <option >Iraq</option>
                                                        <option >Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>

                                                </div>
                                           </div>


                                        <div class="col-lg-3">

                                                <div class="form-group">
                                                    {{trans('localization.want')}}  <select class="form-control" name="status" id="want" required>
                                                        <option selected disabled>{{trans('localization.select')}}</option>
                                                        <option value="sell" >{{trans('localization.sale')}}</option>
                                                        <option value="rent">{{trans('localization.rent')}}</option>
                                                        <option value="lease">{{trans('localization.lease')}}</option>
                                                    </select>
                                                </div>
                                           </div>
                                        <div class="col-lg-3">
                                            {{trans('localization.propertytype2')}}  <div class="form-group">
                                                <select class="form-control" name="type" id="selector" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>

                                                    <option value="apartment">{{trans('localization.apartment')}}</option>
                                                    <option value="house">{{trans('localization.house1')}}</option>
                                                    <option value="office">{{trans('localization.office')}}</option>
                                                    <option value="shop">{{trans('localization.shop')}}</option>
                                                    <option value="land">{{trans('localization.agriculture')}}</option>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.propertytitle')}} <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.propertytitle'))}}" name="title">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.province')}}
                                                <select class="form-control" name="province" required >
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
                                                    <option value="wardak">
                                                        {{trans('localization.wardag')}}                                      </option>
                                                    <option value="Nangarhar">
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
                                                 {{trans('localization.city1')}}  <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.city1'))}} " name="city">
                                             </div>
                                         </div>
                                         <div class="col-lg-3">
                                             <div class="form-group">
                                                 {{trans('localization.ditrict')}}  <input type="text" class="form-control" placeholder="{{mb_strtolower(trans('localization.ditrict'))}} " name="district">
                                             </div>
                                         </div>

                                         <div class="col-lg-3">
                                             <div class="form-group">
                                                 {{trans('localization.area1')}}  <input type="text" class="form-control" placeholder=" {{trans('localization.area2')}}" name="area1" required>
                                             </div>
                                         </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.sizetype')}}   <select class="form-control" name="sizetype" id="in" required>
                                                    <option  selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="m2">{{trans('localization.m')}}</option>
                                                    <option value="sq feet">{{trans('localization.sqfeet')}}</option>
                                                    <option value="jerib" >{{trans('localization.jerib')}}</option>
                                                    <option value="biswa">{{trans('localization.biswa')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.bigproperty')}}<input type="number" class="form-control" placeholder="{{mb_strtolower(trans('localization.area'))}}" name="area" id="uname" required>
                                            </div>
                                        </div>

                                         <div class="col-lg-3" id="bedrooms">
                                             <div class="form-group" >
                                                 {{trans('localization.bedroomsno')}}
                                                 <input type="number" class="form-control" placeholder=" {{trans('localization.bednum')}}" name="bedrooms" >

                                             </div>
                                         </div>
                                         <div class="col-lg-3" id="bathrooms">
                                             <div class="form-group">
                                                 {{trans('localization.bathroomsno')}}
                                                 <input type="number" class="form-control" placeholder="{{trans('localization.bathnum')}}" name="bathrooms"  >

                                             </div>
                                         </div>



                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.ownedby')}}  <select class="form-control" name="own" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="me">{{trans('localization.me')}}</option>
                                                    <option value="my father" >{{trans('localization.myfather')}}</option>
                                                    <option value="my mother">{{trans('localization.mymother')}}</option>
                                                    <option value="other family member">{{trans('localization.member')}}</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.deed')}}<select class="form-control" name="deed" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="i have it" >{{trans('localization.ihave')}}</option>
                                                    <option value="my family has it">{{trans('localization.family')}}</option>
                                                    <option value="i dont have it" >{{trans('localization.idont')}}</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.qawala')}} <select class="form-control" name="deedname" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="yes, it is on my name">{{trans('localization.onname')}}</option>
                                                    <option value="yes, it is on my father's name">{{trans('localization.father')}}</option>
                                                    <option value="yes, it is on my mother's name">{{trans('localization.mother')}}</option>
                                                    <option value="No, it is on a different name">{{trans('localization.diffrent')}}</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.price')}}<input type="number" class="form-control" placeholder="{{trans('localization.usdprice')}}" name="price" id="uname" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                {{trans('localization.uploadphotos')}}
                                                <input type="file" name="banner[]" class="form-control" placeholder="photos" multiple required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{trans('localization.occupied')}} <select class="form-control" name="occupied" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="yes">{{trans('localization.yes')}}</option>
                                                    <option value="no">{{trans('localization.no')}}</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{trans('localization.attorney')}} <select class="form-control" name="attorney" id="in" required>
                                                    <option selected disabled>{{trans('localization.select')}}</option>
                                                    <option value="yes">{{trans('localization.yes')}}</option>
                                                    <option value="no">{{trans('localization.no')}}</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group message">
                                                <label> {{trans('localization.additional')}} </label>
                                                <textarea class="form-control" name="description" placeholder="{{mb_strtolower(trans('localization.additional'))}}" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                {{trans('localization.markmap')}} <input type="text" class="form-control" placeholder=" {{trans('localization.searchmap')}}" id="searchmap">
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


                                    <div class="row" id="but">
                                        <div class="col-lg-12 mt-3">
                                            <button type="submit" ><a  class="btn btn-common">{{trans('localization.submit')}}</a> </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

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

<script>
    $(document).ready(function () {

        $('#selector').on("change",function () {

            if(this.value == 'apartment' || this.value == 'house' ) {
                $('#bedrooms').show();
                $('#bathrooms').show();
            }
            else {
                $('#bedrooms').hide();
                $('#bathrooms').hide();
            }
        });
    });
</script>

<script>
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
    </script>

</body>

</html>
