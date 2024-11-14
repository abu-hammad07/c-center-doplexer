<?php $page = 'my-requests'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Channels & Number</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Requests</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">

            <div class="page-header settings-pg-header">


                <div class="add-item d-flex">
                    {{--  <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span>
                                <img src="{{ URL::asset('/build/img/icons/dash1.svg') }}" alt="img">
                            </span>
                        </div>
                    </div>  --}}
                    <div class="me-3 dash-widgetimg">
                        <svg width="70px" height="70px" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                            <path
                                d="M14.6 15.1494C12.3633 15.1494 10.55 16.9627 10.55 19.1994C10.55 19.6136 10.2142 19.9494 9.80002 19.9494C9.3858 19.9494 9.05002 19.6136 9.05002 19.1994C9.05002 16.1342 11.5348 13.6494 14.6 13.6494C17.6652 13.6494 20.15 16.1342 20.15 19.1994C20.15 20.8027 19.4692 22.2481 18.3831 23.2603C18.2859 23.3509 18.1885 23.4411 18.0913 23.5311C17.438 24.1361 16.7934 24.733 16.2786 25.3836C15.6933 26.1233 15.35 26.8444 15.35 27.5994C15.35 28.0136 15.0142 28.3494 14.6 28.3494C14.1858 28.3494 13.85 28.0136 13.85 27.5994C13.85 26.3662 14.4153 25.3211 15.1023 24.4529C15.6952 23.7035 16.4342 23.0201 17.0802 22.4228L17.0816 22.4215C17.1768 22.3334 17.27 22.2472 17.3604 22.163C18.1548 21.4226 18.65 20.3694 18.65 19.1994C18.65 16.9627 16.8368 15.1494 14.6 15.1494Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M16.04 32.1588C16.04 32.954 15.3953 33.5988 14.6 33.5988C13.8047 33.5988 13.16 32.954 13.16 32.1588C13.16 31.3635 13.8047 30.7188 14.6 30.7188C15.3953 30.7188 16.04 31.3635 16.04 32.1588Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.19999 8.84961C4.46029 8.84961 3.04999 10.2599 3.04999 11.9996V35.9996C3.04999 37.7393 4.46029 39.1496 6.19999 39.1496H24.2C25.9397 39.1496 27.35 37.7393 27.35 35.9996V11.9996C27.35 10.2599 25.9397 8.84961 24.2 8.84961H6.19999ZM4.54999 11.9996C4.54999 11.0883 5.28872 10.3496 6.19999 10.3496H24.2C25.1113 10.3496 25.85 11.0883 25.85 11.9996V35.9996C25.85 36.9109 25.1113 37.6496 24.2 37.6496H6.19999C5.28872 37.6496 4.54999 36.9109 4.54999 35.9996V11.9996Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M29 8.84961C28.5858 8.84961 28.25 9.1854 28.25 9.59961C28.25 10.0138 28.5858 10.3496 29 10.3496H32.6C33.5113 10.3496 34.25 11.0883 34.25 11.9996V35.9996C34.25 36.9109 33.5113 37.6496 32.6 37.6496H29C28.5858 37.6496 28.25 37.9854 28.25 38.3996C28.25 38.8138 28.5858 39.1496 29 39.1496H32.6C34.3397 39.1496 35.75 37.7393 35.75 35.9996V11.9996C35.75 10.2599 34.3397 8.84961 32.6 8.84961H29Z"
                                fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                            <path
                                d="M37.4 8.84961C36.9858 8.84961 36.65 9.1854 36.65 9.59961C36.65 10.0138 36.9858 10.3496 37.4 10.3496H41C41.9113 10.3496 42.65 11.0883 42.65 11.9996V35.9996C42.65 36.9109 41.9113 37.6496 41 37.6496H37.4C36.9858 37.6496 36.65 37.9854 36.65 38.3996C36.65 38.8138 36.9858 39.1496 37.4 39.1496H41C42.7397 39.1496 44.15 37.7393 44.15 35.9996V11.9996C44.15 10.2599 42.7397 8.84961 41 8.84961H37.4Z"
                                fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                        </svg>
                    </div>
                    <div class="page-title mt-2">
                        <h1>My requests</h1>
                        <h6>Access all your communication channel sender requests in one convenient location for seamless
                            monitoring.</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    {{--  <li>
                        <button type="button" class="btn  btn-square btn-primary">Import Number</button>
                    </li>
                    <li>
                        <button type="button" class="btn  btn-square btn-secondary">Buy Number</button>
                    </li>  --}}
                    {{--  <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw"
                                class="feather-rotate-ccw"></i></a>
                    </li>  --}}
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- /product list -->
                    <div class="card table-list-card">
                        <div class="card-body">
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-input">
                                        <a href="" class="btn btn-searchset"><i data-feather="search"
                                                class="feather-search"></i></a>
                                    </div>
                                </div>
                                <div class="search-path">
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-filter" id="filter_search">
                                            <i data-feather="filter" class="filter-icon"></i>
                                            <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}"
                                                    alt="img"></span>
                                        </a>
                                        <div class="layout-hide-box">
                                            <a href="javascript:void(0);" class="me-3 layout-box"><i data-feather="layout"
                                                    class="feather-search"></i></a>
                                            <div class="layout-drop-item card">
                                                <div class="drop-item-head">
                                                    <h5>Want to manage datatable?</h5>
                                                    <p>Please drag and drop your column to reorder your table and
                                                        enable see
                                                        option
                                                        as you want.</p>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Number</span>
                                                            <input type="checkbox" id="option1" class="check" checked>
                                                            <label for="option1" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Country</span>
                                                            <input type="checkbox" id="option2" class="check" checked>
                                                            <label for="option2" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Type</span>
                                                            <input type="checkbox" id="option3" class="check" checked>
                                                            <label for="option3" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Capabilities</span>
                                                            <input type="checkbox" id="option4" class="check" checked>
                                                            <label for="option4" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Fees</span>
                                                            <input type="checkbox" id="option5" class="check" checked>
                                                            <label for="option5" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-sort">
                                    <i data-feather="sliders" class="info-img"></i>
                                    <select class="select">
                                        <option>Sort by Date</option>
                                        <option>Newest</option>
                                        <option>Oldest</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option>Choose Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda
                                                    </option>
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
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian
                                                        Ocean
                                                        Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African
                                                        Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo,
                                                        The
                                                        Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                        (Malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island
                                                        and
                                                        Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                        City
                                                        State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic
                                                        Republic of
                                                    </option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea,
                                                        Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                                        Macedonia,
                                                        The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated
                                                        States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of
                                                    </option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian
                                                        Territory,
                                                        Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                        and The
                                                        Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">
                                                        South
                                                        Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United
                                                        Republic
                                                        of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago
                                                    </option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos
                                                        Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United
                                                        States
                                                        Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British
                                                    </option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                    </option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option>Choose Capability</option>
                                                    <option>SMS</option>
                                                    <option>MMS</option>
                                                    <option>Voice</option>
                                                    <option>WhatsApp</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <i data-feather="calendar" class="info-img"></i>
                                                <div class="input-groupicon">
                                                    <input type="text" class="datetimepicker"
                                                        placeholder="Choose Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                                            <div class="input-blocks">
                                                <a class="btn btn-filters ms-auto"> <i data-feather="search"
                                                        class="feather-search"></i> Search </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="table-responsive">
                                <table class="table  datanew">
                                    <thead>
                                        <tr>
                                            <th class="no-sort">
                                                <label class="checkboxs">
                                                    <input type="checkbox" id="select-all">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </th>
                                            <th>Number</th>
                                            <th>Country</th>
                                            <th>Type</th>
                                            <th>Capabilities</th>
                                            <th>Fees</th>
                                            {{--  <th>Used</th>
                                                    <th>Valid</th>
                                                    <th>Status</th>
                                                    <th class="no-sort">Action</th>  --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>+923 373 1192139 <span class="badge badge-linesuccess">Share</span>
                                            </td>
                                            <td><span class="badge badge-bgdanger">Pakistan</span></td>
                                            <td>Virtual long number</td>
                                            <td>WhatsApp</td>
                                            <td>$40</td>
                                            {{--  <td>01</td>
                                                    <td>04 Jan 2023</td>
                                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#edit-units">
                                                                <i data-feather="edit" class="feather-edit"></i>
                                                            </a>
                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                            </a>
                                                        </div>

                                                    </td>  --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /product list -->
                </div>
            </div>


        </div>
    </div>
@endsection
