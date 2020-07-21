@extends('layouts.dashboard')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('includes.messages')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="profile-container">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="float-left card-title mb-4">Profile Details </h4>
                                        <div id="pointer" class="float-right ml-5" onclick="toggleViewProperties('profile')">
                                            <span id="profilestat" class="d-none d-xl-inline-block ml-1">Open</span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-info">
                                    <ul class="list-group">
                                        <li class="list-group-item">First Name: <span class="float-right"> {{ auth()->user()->fname }} </span></li>
                                        <li class="list-group-item">Last Name: <span class="float-right"> {{ auth()->user()->lname }} </span></li>
                                        <li class="list-group-item">E-mail: <span class="float-right badge badge-primary"> {{ auth()->user()->email }} </span></li>
                                        <li class="list-group-item">Gender: <span class="float-right"> {{ auth()->user()->gender }} </span></li>
                                        <li class="list-group-item">Date of Birth: <span class="float-right"> {{ auth()->user()->dob }} </span></li>
                                        <li class="list-group-item">Nationality: <span class="float-right"> {{ auth()->user()->country }} </span></li>
                                        <li class="list-group-item">Next of Kin E-mail: <span class="float-right badge badge-primary"> {{ auth()->user()->next_of_kin ?? 'Empty' }} </span></li>
                                    </ul>
                                    &nbsp;
                                    <ul class="list-group">
                                        <li class="list-group-item ">Refferal: <b class="float-right"> {{ auth()->user()->refferal ?? 'Self Enrollment' }} </b></li>
                                    </ul>
                                    <div class="my-4 text-center">
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                                data-target="#exampleModalScrollable">Edit Profile</button>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">{{ auth()->user()->fname . ' ' . auth()->user()->lname }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('profile.update') }}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="fname">First name</label>
                                                                    <input name="fname" type="text" class="form-control" placeholder="First name" value="{{ auth()->user()->fname}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lname">Last name</label>
                                                                    <input name="lname" type="text" class="form-control" id="lname" placeholder="Last name"
                                                                           value="{{ auth()->user()->lname }}" required>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="validationCustom03">Gender</label>
                                                                    <select class="form-control" name="gender" id="gender">
                                                                        <option class="bg-dark text-white" value="{{ auth()->user()->gender }}" selected >{{ auth()->user()->gender }}</option>
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="validationCustom04">Nationality</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="country" name="country">
                                                                            <option value="{{ auth()->user()->country }}" selected>{{ auth()->user()->country }}</option>
                                                                            <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American Samoa">American Samoa</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermuda">Bermuda</option>
                                                                            <option value="Bhutan">Bhutan</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bonaire">Bonaire</option>
                                                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Canary Islands">Canary Islands</option>
                                                                            <option value="Cape Verde">Cape Verde</option>
                                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                                            <option value="Central African Republic">Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Channel Islands">Channel Islands</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Christmas Island">Christmas Island</option>
                                                                            <option value="Cocos Island">Cocos Island</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Cook Islands">Cook Islands</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                                                            <option value="Croatia">Croatia</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Curaco">Curacao</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic</option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                                            <option value="East Timor">East Timor</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                            <option value="French Guiana">French Guiana</option>
                                                                            <option value="French Polynesia">French Polynesia</option>
                                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                                            <option value="Gabon">Gabon</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Great Britain">Great Britain</option>
                                                                            <option value="Greece">Greece</option>
                                                                            <option value="Greenland">Greenland</option>
                                                                            <option value="Grenada">Grenada</option>
                                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guyana">Guyana</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Hawaii">Hawaii</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="Hungary">Hungary</option>
                                                                            <option value="Iceland">Iceland</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Iran">Iran</option>
                                                                            <option value="Iraq">Iraq</option>
                                                                            <option value="Ireland">Ireland</option>
                                                                            <option value="Isle of Man">Isle of Man</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Jordan">Jordan</option>
                                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                                            <option value="Kenya">Kenya</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Korea North">Korea North</option>
                                                                            <option value="Korea Sout">Korea South</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                            <option value="Laos">Laos</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Lebanon">Lebanon</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libya">Libya</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Macau">Macau</option>
                                                                            <option value="Macedonia">Macedonia</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                                            <option value="Martinique">Martinique</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Midway Islands">Midway Islands</option>
                                                                            <option value="Moldova">Moldova</option>
                                                                            <option value="Monaco">Monaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Morocco">Morocco</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Nambia">Nambia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                            <option value="Nevis">Nevis</option>
                                                                            <option value="New Caledonia">New Caledonia</option>
                                                                            <option value="New Zealand">New Zealand</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palau Island">Palau Island</option>
                                                                            <option value="Palestine">Palestine</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Phillipines">Philippines</option>
                                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                                            <option value="Reunion">Reunion</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russia">Russia</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                                            <option value="St Eustatius">St Eustatius</option>
                                                                            <option value="St Helena">St Helena</option>
                                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                            <option value="St Lucia">St Lucia</option>
                                                                            <option value="St Maarten">St Maarten</option>
                                                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                            <option value="Saipan">Saipan</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="Samoa American">Samoa American</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia">Slovakia</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Swaziland">Swaziland</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland</option>
                                                                            <option value="Syria">Syria</option>
                                                                            <option value="Tahiti">Tahiti</option>
                                                                            <option value="Taiwan">Taiwan</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Tanzania">Tanzania</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tokelau">Tokelau</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                                            <option value="United States of America">United States of America</option>
                                                                            <option value="Uraguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Vatican City State">Vatican City State</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Vietnam">Vietnam</option>
                                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                            <option value="Wake Island">Wake Island</option>
                                                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Zaire">Zaire</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="kin">Next Of Kin E-mail</label>
                                                                <input value="{{ auth()->user()->next_of_kin }}" class="form-control" type="text" name="next_of_kin" placeholder="Enter Your Next Of Kin's E-mail">
                                                            </div>
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" value="{{ __('Save changes') }}">
                                                </div>
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card" >
                            <div class="card-body" id="valid_id_container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="float-left card-title mb-4">Valid ID's </h4>
                                        <div id="pointer" class="float-right ml-5" onclick="toggleViewProperties('valid_id')">
                                            <span id="validStat" class="d-none d-xl-inline-block ml-1">Open</span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        </div>
                                    </div>
                                </div>
                                    <div id="valid_id_info">
                                        <ul class="list-group">

                                            @if((auth()->user()->passport) && (auth()->user()->valid_id))
                                                <li class="list-group-item">Valid ID: <img class="float-right" src="storage/images/{{ auth()->user()->valid_id }}" width="50px;"></li>
                                                <li class="list-group-item">Passport / Selfie: <img class="float-right" src="storage/images/{{ auth()->user()->passport }}" width="50px;">  </li>
                                            @else
                                                <li class="list-group-item">Valid ID: <span class="float-right">{{ __('Empty') }}</span>  </li>
                                                <li class="list-group-item">Passport / Selfie: <span class="float-right">{{ __('Empty') }}</span>  </li>
                                                <br>
                                                <div class="my-4 text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                                            data-target="#personal_details">Upload&nbsp;Identity</button>
                                                </div>
                                            @endif
                                        </ul>

                                    </div>

                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="modal fade" id="personal_details" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="row" style="display: flex">
                                        <div class="col-md-12">
                                            <h4 class="float-left card-title mb-4">Upload Images</h4>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title-desc">For proper validation, You are required to upload a copy of your passport and any valid identy card
                                                    </p>
                                        {{-- Main Content--}}

                                                    <form action="{{ route('valid_id') }}" method="post" enctype="multipart/form-data">
                                                        @method('put')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="valid_id">Valid identity Card</label>
                                                            <input class="form-control" type="file" name="valid_id" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="valid_id">Passport / Selfie <small>Facial Image</small> </label>
                                                            <input class="form-control" type="file" name="passport" id="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <input type="submit" class="btn btn-primary" value="{{ __('Upload Images') }}">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->

                    </div>
    </div>

                </div>

            </div>
        </div>

                    <div class="col-lg-12">
                        <div class="card" id="payment-container">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="float-left card-title mb-4">Payment Account Details  </h4>
                                        <div id="pointer" class="float-right ml-5" onclick="toggleViewProperties('payment')">
                                            <span id="paymentStat" class="d-none d-xl-inline-block ml-1">Open</span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="payment-info">
                                    <div id="account_holder">
                                        @if ($userAccount)
                                            <ul class="list-group" style="display: @if($userAccount->name == 'Null') none; @endif">
                                                <li class="list-group-item">
                                                    Account Name: <span class="float-right">{{ $userAccount->name }}</span>
                                                    </li>
                                                <li class="list-group-item">
                                                    Account Number: <span class="float-right">{{ $userAccount->number }}</span>
                                                    </li>
                                                <li class="list-group-item">
                                                    Bank Name: <span class="float-right">{{ $userAccount->bank }}</span>
                                                    </li>
                                                <br>
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                                        data-target="#edit_bank_details">Edit&nbsp;Bank Account&nbsp;Details</button>
                                            </ul>

                                            <ul class="list-group" style="display: @if($userAccount->bitcoin == 'Null') none; @endif">
                                                <li class="list-group-item">
                                                    Bitcoin ID: <span class="float-right">{{ $userAccount->bitcoin }}</span></li>
                                                <br>
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                                        data-target="#edit_bitcoin_id">Edit&nbsp;Bitcoin&nbsp;Details</button>
                                            </ul>
                                        @else
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    Hey {{ auth()->user()->name }}, You are yet to setup your Account Information, Please use the link below to update your Account Details
                                                </li>
                                            </ul>
                                            <br>
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                                    data-target="#create_account_withdrawal">Add&nbsp;Account&nbsp;Details</button>
                                        @endif
                                    </div>
                                </div>

{{--                                Edit Bank Details--}}
                                @if ($userAccount)
                                <div class="modal fade" id="edit_bank_details" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header row">
                                                <div class="col-md-12">
                                                    <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Edit Bank Details <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <hr>
                                                    </h5>

                                                </div>
                                                <br>
                                                <div class="container p-2">
                                                    <form action="{{ route('userBankUpdate') }}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="name">Account&nbsp;Name</label>
                                                                <input value="{{ $userAccount->name }}" id="acct_name" class="form-control" type="text" name="name" placeholder="Enter Account Name">
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="name">Account&nbsp;Number</label>
                                                                <input value="{{ $userAccount->number }}" id="acct_number" value="" class="form-control" type="number" name="number" placeholder="Enter Account Number">
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="name">Bank&nbsp;Name</label>
                                                                <select id="bank_name" name="bank" id="bank" class="form-control">
                                                                    <option value="{{ $userAccount->bank }}" selected>
                                                                        {{ $userAccount->bank }}</option>
                                                                    <option value="access">Access / Diamond Bank</option>
                                                                    <option value="citibank">Citibank</option>
                                                                    <option value="ecobank">Ecobank</option>
                                                                    <option value="fidelity">Fidelity Bank</option>
                                                                    <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                                    <option value="fsdh">FSDH Merchant Bank</option>
                                                                    <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                                                    <option value="heritage">Heritage Bank</option>
                                                                    <option value="Keystone">Keystone Bank</option>
                                                                    <option value="rand">Rand Merchant Bank</option>
                                                                    <option value="skye">Skye Bank</option>
                                                                    <option value="stanbic">Stanbic IBTC Bank</option>
                                                                    <option value="standard">Standard Chartered Bank</option>
                                                                    <option value="sterling">Sterling Bank</option>
                                                                    <option value="suntrust">Suntrust Bank</option>
                                                                    <option value="union">Union Bank</option>
                                                                    <option value="uba">United Bank for Africa (UBA)</option>
                                                                    <option value="unity">Unity Bank</option>
                                                                    <option value="wema">Wema Bank</option>
                                                                    <option value="zenith">Zenith Bank</option>

                                                                </select>
                                                                <br>
                                                                <div  class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    <input type="submit" class="btn btn-info float-right" value="Save Changes">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->

                                </div>
                                @endif
{{--                                End Edit Bank Details--}}

{{--                                Edit bitcoin Id Starts here --}}
                                @if ($userAccount)
                                    <div class="modal fade" id="edit_bitcoin_id" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header row">
                                                    <div class="col-md-12">
                                                        <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Edit Bank Details <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <hr>
                                                        </h5>

                                                    </div>
                                                    <br>
                                                    <div class="container p-2">
                                                        <form action="{{ route('userBitcoinUpdate') }}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="name">Bitcoin ID</label>
                                                                    <input value="{{ $userAccount->bitcoin }}" id="acct_name" class="form-control" type="text" name="bitcoin" placeholder="Enter Bitcoin ID">
                                                                    <br>
                                                                    <div  class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                        <input type="submit" class="btn btn-info float-right" value="Save Changes">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->

                                    </div>
                                @endif
                                {{--                                End Edit Bank Details--}}
{{--                                Edit Bitcoin Id Ends here--}}
                                <div class="modal fade" id="create_account_withdrawal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Account Details
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="container p-2">
                                                <h4 class="card-title">Select Method to receive payment</h4>

                                                <div class="row">
                                                    <div class="col-md-6 pl-5">
                                                        <img title="Available to Nigerians Only" onclick="methodPay('master_card')" id="master-card" width="200px" src="{{ asset('public/assets/images/bank.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="p-4" title="Direct Payment to your Bitcoin Wallet" onclick="methodPay('btc')" width="220px" id="btcid" src="{{ asset('public/assets/images/bitcoin.png') }}" alt="">
                                                    </div>
                                                    <div id="hold_form" class="p-3">
                                                        <div class="masterCardForm">
                                                            <div class="master_message text-danger"></div>
                                                            <form action="{{ route('userBankStore') }}" method="post">
                                                                @csrf
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="name">Account&nbsp;Name</label>
                                                                    <input id="acct_name" class="form-control" type="text" name="name" placeholder="Enter Account Name">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="name">Account&nbsp;Number</label>
                                                                    <input id="acct_number" value="" class="form-control" type="number" name="number" placeholder="Enter Account Number">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="name">Bank&nbsp;Name</label>
                                                                    <select id="bank_name" name="bank" id="bank" class="form-control">
                                                                        <option value="" selected>Select Bank</option>
                                                                        <option value="access">Access / Diamond Bank</option>
                                                                        <option value="citibank">Citibank</option>
                                                                        <option value="ecobank">Ecobank</option>
                                                                        <option value="fidelity">Fidelity Bank</option>
                                                                        <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                                        <option value="fsdh">FSDH Merchant Bank</option>
                                                                        <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                                                        <option value="heritage">Heritage Bank</option>
                                                                        <option value="Keystone">Keystone Bank</option>
                                                                        <option value="rand">Rand Merchant Bank</option>
                                                                        <option value="skye">Skye Bank</option>
                                                                        <option value="stanbic">Stanbic IBTC Bank</option>
                                                                        <option value="standard">Standard Chartered Bank</option>
                                                                        <option value="sterling">Sterling Bank</option>
                                                                        <option value="suntrust">Suntrust Bank</option>
                                                                        <option value="union">Union Bank</option>
                                                                        <option value="uba">United Bank for Africa (UBA)</option>
                                                                        <option value="unity">Unity Bank</option>
                                                                        <option value="wema">Wema Bank</option>
                                                                        <option value="zenith">Zenith Bank</option>

                                                                    </select>
                                                                </div>
                                                                <div id="submit-btn">
                                                                    <div  class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                        <input type="submit" class="btn btn-info float-right" value="Save Changes">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>


                                                    {{-- Bitcoin Select --}}
                                                        <form action="{{ route('userBitStore') }}" method="post">
                                                            @csrf
                                                        <div class="bitcoinForm">
                                                            <div class="btc_message text-danger"></div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="name">Bitcoin&nbsp;ID</label>
                                                                    <input value="" class="form-control" type="text" name="bitcoin" placeholder="Enter Bitcoin ID">
                                                                    <br>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    &nbsp;
                                                                    <input type="submit" class="btn btn-info float-right" value="Save Changes">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div>

                                                </div>
                                            </div>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Skote
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>


        </div>
@endsection
