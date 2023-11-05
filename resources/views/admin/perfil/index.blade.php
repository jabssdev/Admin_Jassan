@extends('admin.layouts.permisos')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Agrega jQuery UI desde CDN -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    .input-orden{
        width:50px;
        margin:5px;
    }
    .accordion {
    width: 100%;
    }

    .accordion-item {
        margin-bottom: 10px;
    }

    .accordion-header {
        padding: 10px;
        cursor: pointer;
        font-weight: 600;
        font-size: 1rem;
    }

    .accordion-content {
        padding: 10px;
        display: none;
    }
    .modal-dialog {
        position: absolute;
        left: 35%;
        top: 30%;
        transform: translate(-10%, -10%);
        
    }
    </style>

@endsection
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" id="botonmenu" class="btn btn-xs btn-link btn-toggle-fullwidth"><i id="otroboton"
                                class="fa fa-arrow-left"></i></a> Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Perfil - Aquí puedes editar tus datos de agente inmobiliario </h2>

                    
                </div>

                <div class="body">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Información personal
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Foto de Perfil<span style="color:red;"> *</span></label>
                                            <input type="file" name="imagen" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_perfil/'.$per_informacion->imagen ) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Nombres<span style="color:red;"> *</span></label>
                                            <input type="text" name="nombres" value="{{$per_informacion->nombres}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Apellidos<span style="color:red;"> *</span></label>
                                            <input type="text" name="apellidos" value="{{$per_informacion->apellidos}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Correo<span style="color:red;"> *</span></label>
                                            <input type="email" name="correo" value="{{$per_informacion->correo}}"  class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>País<span style="color:red;"> *</span></label>
                                            <select name="pais"class="form-control">
                                                @if(isset($per_informacion->pais)){
                                                    <option value="{{$per_informacion->pais}}">{{$per_informacion->pais}}</option>
                                                }@else{
                                                    <option value="">---- Seleccionar ----</option>
                                                
                                                }
                                                @endif
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
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
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
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
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
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
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
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
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dirección<span style="color:red;"> *</span></label>
                                            <input type="text" name="direccion" value="{{$per_informacion->direccion}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Años de experiencia<span style="color:red;"> *</span></label>
                                            <input type="number" name="anios_experiencia" value="{{$per_informacion->anios_experiencia}}"  class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Whatsapp<span style="color:red;"> *</span></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="what_codigo"  class="form-control">
                                                        @if(isset($per_informacion->what_codigo)){
                                                            <option value="{{$per_informacion->what_codigo}}">{{$per_informacion->what_codigo}}</option>
                                                        }@else{
                                                            <option value="">---- Seleccionar ----</option>
                                                        
                                                        }
                                                        @endif
                                                        <option value="AFG (+93)">AFG (+93)</option>
                                                        <option value="ALB (+355)">ALB (+355)</option>
                                                        <option value="DZA (+213)">DZA (+213)</option>
                                                        <option value="ASM (+1684)">ASM (+1684)</option>
                                                        <option value="AND (+376)">AND (+376)</option>
                                                        <option value="AGO (+244)">AGO (+244)</option>
                                                        <option value="AIA (+1264)">AIA (+1264)</option>
                                                        <option value="ATG (+1268)">ATG (+1268)</option>
                                                        <option value="ARG (+54)">ARG (+54)</option>
                                                        <option value="ARM (+374)">ARM (+374)</option>
                                                        <option value="ABW (+297)">ABW (+297)</option>
                                                        <option value="AUS (+61)">AUS (+61)</option>
                                                        <option value="AUT (+43)">AUT (+43)</option>
                                                        <option value="AZE (+994)">AZE (+994)</option>
                                                        <option value="BHS (+1242)">BHS (+1242)</option>
                                                        <option value="BHR (+973)">BHR (+973)</option>
                                                        <option value="BGD (+880)">BGD (+880)</option>
                                                        <option value="BRB (+1246)">BRB (+1246)</option>
                                                        <option value="BLR (+375)">BLR (+375)</option>
                                                        <option value="BEL (+32)">BEL (+32)</option>
                                                        <option value="BLZ (+501)">BLZ (+501)</option>
                                                        <option value="BEN (+229)">BEN (+229)</option>
                                                        <option value="BMU (+1441)">BMU (+1441)</option>
                                                        <option value="BTN (+975)">BTN (+975)</option>
                                                        <option value="BOL (+591)">BOL (+591)</option>
                                                        <option value="BIH (+387)">BIH (+387)</option>
                                                        <option value="BWA (+267)">BWA (+267)</option>
                                                        <option value="BRA (+55)">BRA (+55)</option>
                                                        <option value="BRN (+673)">BRN (+673)</option>
                                                        <option value="BGR (+359)">BGR (+359)</option>
                                                        <option value="BFA (+226)">BFA (+226)</option>
                                                        <option value="BDI (+257)">BDI (+257)</option>
                                                        <option value="KHM (+855)">KHM (+855)</option>
                                                        <option value="CMR (+237)">CMR (+237)</option>
                                                        <option value="CAN (+1)">CAN (+1)</option>
                                                        <option value="CPV (+238)">CPV (+238)</option>
                                                        <option value="CYM (+1345)">CYM (+1345)</option>
                                                        <option value="CAF (+236)">CAF (+236)</option>
                                                        <option value="TCD (+235)">TCD (+235)</option>
                                                        <option value="CHL (+56)">CHL (+56)</option>
                                                        <option value="CHN (+86)">CHN (+86)</option>
                                                        <option value="COL (+57)">COL (+57)</option>
                                                        <option value="COM (+269)">COM (+269)</option>
                                                        <option value="COG (+242)">COG (+242)</option>
                                                        <option value="COD (+242)">COD (+242)</option>
                                                        <option value="COK (+682)">COK (+682)</option>
                                                        <option value="CRI (+506)">CRI (+506)</option>
                                                        <option value="CIV (+225)">CIV (+225)</option>
                                                        <option value="HRV (+385)">HRV (+385)</option>
                                                        <option value="CUB (+53)">CUB (+53)</option>
                                                        <option value="CYP (+357)">CYP (+357)</option>
                                                        <option value="CZE (+420)">CZE (+420)</option>
                                                        <option value="DNK (+45)">DNK (+45)</option>
                                                        <option value="DJI (+253)">DJI (+253)</option>
                                                        <option value="DMA (+1767)">DMA (+1767)</option>
                                                        <option value="DOM (+1809)">DOM (+1809)</option>
                                                        <option value="ECU (+593)">ECU (+593)</option>
                                                        <option value="EGY (+20)">EGY (+20)</option>
                                                        <option value="SLV (+503)">SLV (+503)</option>
                                                        <option value="GNQ (+240)">GNQ (+240)</option>
                                                        <option value="ERI (+291)">ERI (+291)</option>
                                                        <option value="EST (+372)">EST (+372)</option>
                                                        <option value="ETH (+251)">ETH (+251)</option>
                                                        <option value="FLK (+500)">FLK (+500)</option>
                                                        <option value="FRO (+298)">FRO (+298)</option>
                                                        <option value="FJI (+679)">FJI (+679)</option>
                                                        <option value="FIN (+358)">FIN (+358)</option>
                                                        <option value="FRA (+33)">FRA (+33)</option>
                                                        <option value="GUF (+594)">GUF (+594)</option>
                                                        <option value="PYF (+689)">PYF (+689)</option>
                                                        <option value="GAB (+241)">GAB (+241)</option>
                                                        <option value="GMB (+220)">GMB (+220)</option>
                                                        <option value="GEO (+995)">GEO (+995)</option>
                                                        <option value="DEU (+49)">DEU (+49)</option>
                                                        <option value="GHA (+233)">GHA (+233)</option>
                                                        <option value="GIB (+350)">GIB (+350)</option>
                                                        <option value="GRC (+30)">GRC (+30)</option>
                                                        <option value="GRL (+299)">GRL (+299)</option>
                                                        <option value="GRD (+1473)">GRD (+1473)</option>
                                                        <option value="GLP (+590)">GLP (+590)</option>
                                                        <option value="GUM (+1671)">GUM (+1671)</option>
                                                        <option value="GTM (+502)">GTM (+502)</option>
                                                        <option value="GIN (+224)">GIN (+224)</option>
                                                        <option value="GNB (+245)">GNB (+245)</option>
                                                        <option value="GUY (+592)">GUY (+592)</option>
                                                        <option value="HTI (+509)">HTI (+509)</option>
                                                        <option value="VAT (+39)">VAT (+39)</option>
                                                        <option value="HND (+504)">HND (+504)</option>
                                                        <option value="HKG (+852)">HKG (+852)</option>
                                                        <option value="HUN (+36)">HUN (+36)</option>
                                                        <option value="ISL (+354)">ISL (+354)</option>
                                                        <option value="IND (+91)">IND (+91)</option>
                                                        <option value="IDN (+62)">IDN (+62)</option>
                                                        <option value="IRN (+98)">IRN (+98)</option>
                                                        <option value="IRQ (+964)">IRQ (+964)</option>
                                                        <option value="IRL (+353)">IRL (+353)</option>
                                                        <option value="ISR (+972)">ISR (+972)</option>
                                                        <option value="ITA (+39)">ITA (+39)</option>
                                                        <option value="JAM (+1876)">JAM (+1876)</option>
                                                        <option value="JPN (+81)">JPN (+81)</option>
                                                        <option value="JOR (+962)">JOR (+962)</option>
                                                        <option value="KAZ (+7)">KAZ (+7)</option>
                                                        <option value="KEN (+254)">KEN (+254)</option>
                                                        <option value="KIR (+686)">KIR (+686)</option>
                                                        <option value="PRK (+850)">PRK (+850)</option>
                                                        <option value="KOR (+82)">KOR (+82)</option>
                                                        <option value="KWT (+965)">KWT (+965)</option>
                                                        <option value="KGZ (+996)">KGZ (+996)</option>
                                                        <option value="LAO (+856)">LAO (+856)</option>
                                                        <option value="LVA (+371)">LVA (+371)</option>
                                                        <option value="LBN (+961)">LBN (+961)</option>
                                                        <option value="LSO (+266)">LSO (+266)</option>
                                                        <option value="LBR (+231)">LBR (+231)</option>
                                                        <option value="LBY (+218)">LBY (+218)</option>
                                                        <option value="LIE (+423)">LIE (+423)</option>
                                                        <option value="LTU (+370)">LTU (+370)</option>
                                                        <option value="LUX (+352)">LUX (+352)</option>
                                                        <option value="MAC (+853)">MAC (+853)</option>
                                                        <option value="MKD (+389)">MKD (+389)</option>
                                                        <option value="MDG (+261)">MDG (+261)</option>
                                                        <option value="MWI (+265)">MWI (+265)</option>
                                                        <option value="MYS (+60)">MYS (+60)</option>
                                                        <option value="MDV (+960)">MDV (+960)</option>
                                                        <option value="MLI (+223)">MLI (+223)</option>
                                                        <option value="MLT (+356)">MLT (+356)</option>
                                                        <option value="MHL (+692)">MHL (+692)</option>
                                                        <option value="MTQ (+596)">MTQ (+596)</option>
                                                        <option value="MRT (+222)">MRT (+222)</option>
                                                        <option value="MUS (+230)">MUS (+230)</option>
                                                        <option value="MEX (+52)">MEX (+52)</option>
                                                        <option value="FSM (+691)">FSM (+691)</option>
                                                        <option value="MDA (+373)">MDA (+373)</option>
                                                        <option value="MCO (+377)">MCO (+377)</option>
                                                        <option value="MNG (+976)">MNG (+976)</option>
                                                        <option value="MSR (+1664)">MSR (+1664)</option>
                                                        <option value="MAR (+212)">MAR (+212)</option>
                                                        <option value="MOZ (+258)">MOZ (+258)</option>
                                                        <option value="MMR (+95)">MMR (+95)</option>
                                                        <option value="NAM (+264)">NAM (+264)</option>
                                                        <option value="NRU (+674)">NRU (+674)</option>
                                                        <option value="NPL (+977)">NPL (+977)</option>
                                                        <option value="NLD (+31)">NLD (+31)</option>
                                                        <option value="ANT (+599)">ANT (+599)</option>
                                                        <option value="NCL (+687)">NCL (+687)</option>
                                                        <option value="NZL (+64)">NZL (+64)</option>
                                                        <option value="NIC (+505)">NIC (+505)</option>
                                                        <option value="NER (+227)">NER (+227)</option>
                                                        <option value="NGA (+234)">NGA (+234)</option>
                                                        <option value="NIU (+683)">NIU (+683)</option>
                                                        <option value="NFK (+672)">NFK (+672)</option>
                                                        <option value="MNP (+1670)">MNP (+1670)</option>
                                                        <option value="NOR (+47)">NOR (+47)</option>
                                                        <option value="OMN (+968)">OMN (+968)</option>
                                                        <option value="PAK (+92)">PAK (+92)</option>
                                                        <option value="PLW (+680)">PLW (+680)</option>
                                                        <option value="PAN (+507)">PAN (+507)</option>
                                                        <option value="PNG (+675)">PNG (+675)</option>
                                                        <option value="PRY (+595)">PRY (+595)</option>
                                                        <option value="PER (+51)">PER (+51)</option>
                                                        <option value="PHL (+63)">PHL (+63)</option>
                                                        <option value="PCN (+0)">PCN (+0)</option>
                                                        <option value="POL (+48)">POL (+48)</option>
                                                        <option value="PRT (+351)">PRT (+351)</option>
                                                        <option value="PRI (+1787)">PRI (+1787)</option>
                                                        <option value="QAT (+974)">QAT (+974)</option>
                                                        <option value="REU (+262)">REU (+262)</option>
                                                        <option value="ROM (+40)">ROM (+40)</option>
                                                        <option value="RUS (+70)">RUS (+70)</option>
                                                        <option value="RWA (+250)">RWA (+250)</option>
                                                        <option value="SHN (+290)">SHN (+290)</option>
                                                        <option value="KNA (+1869)">KNA (+1869)</option>
                                                        <option value="LCA (+1758)">LCA (+1758)</option>
                                                        <option value="SPM (+508)">SPM (+508)</option>
                                                        <option value="VCT (+1784)">VCT (+1784)</option>
                                                        <option value="WSM (+684)">WSM (+684)</option>
                                                        <option value="SMR (+378)">SMR (+378)</option>
                                                        <option value="STP (+239)">STP (+239)</option>
                                                        <option value="SAU (+966)">SAU (+966)</option>
                                                        <option value="SEN (+221)">SEN (+221)</option>
                                                        <option value="SYC (+248)">SYC (+248)</option>
                                                        <option value="SLE (+232)">SLE (+232)</option>
                                                        <option value="SGP (+65)">SGP (+65)</option>
                                                        <option value="SVK (+421)">SVK (+421)</option>
                                                        <option value="SVN (+386)">SVN (+386)</option>
                                                        <option value="SLB (+677)">SLB (+677)</option>
                                                        <option value="SOM (+252)">SOM (+252)</option>
                                                        <option value="ZAF (+27)">ZAF (+27)</option>
                                                        <option value="ESP (+34)">ESP (+34)</option>
                                                        <option value="LKA (+94)">LKA (+94)</option>
                                                        <option value="SDN (+249)">SDN (+249)</option>
                                                        <option value="SUR (+597)">SUR (+597)</option>
                                                        <option value="SJM (+47)">SJM (+47)</option>
                                                        <option value="SWZ (+268)">SWZ (+268)</option>
                                                        <option value="CHE (+41)">CHE (+41)</option>
                                                        <option value="SYR (+963)">SYR (+963)</option>
                                                        <option value="TWN (+886)">TWN (+886)</option>
                                                        <option value="TJK (+992)">TJK (+992)</option>
                                                        <option value="TZA (+255)">TZA (+255)</option>
                                                        <option value="THA (+66)">THA (+66)</option>
                                                        <option value="TGO (+228)">TGO (+228)</option>
                                                        <option value="TKL (+690)">TKL (+690)</option>
                                                        <option value="TON (+676)">TON (+676)</option>
                                                        <option value="TTO (+1868)">TTO (+1868)</option>
                                                        <option value="TUN (+216)">TUN (+216)</option>
                                                        <option value="TUR (+90)">TUR (+90)</option>
                                                        <option value="TKM (+7370)">TKM (+7370)</option>
                                                        <option value="TCA (+1649)">TCA (+1649)</option>
                                                        <option value="TUV (+688)">TUV (+688)</option>
                                                        <option value="UGA (+256)">UGA (+256)</option>
                                                        <option value="UKR (+380)">UKR (+380)</option>
                                                        <option value="ARE (+971)">ARE (+971)</option>
                                                        <option value="GBR (+44)">GBR (+44)</option>
                                                        <option value="USA (+1)">USA (+1)</option>
                                                        <option value="URY (+598)">URY (+598)</option>
                                                        <option value="UZB (+998)">UZB (+998)</option>
                                                        <option value="VUT (+678)">VUT (+678)</option>
                                                        <option value="VEN (+58)">VEN (+58)</option>
                                                        <option value="VNM (+84)">VNM (+84)</option>
                                                        <option value="VGB (+1284)">VGB (+1284)</option>
                                                        <option value="VIR (+1340)">VIR (+1340)</option>
                                                        <option value="WLF (+681)">WLF (+681)</option>
                                                        <option value="ESH (+212)">ESH (+212)</option>
                                                        <option value="YEM (+967)">YEM (+967)</option>
                                                        <option value="ZMB (+260)">ZMB (+260)</option>
                                                        <option value="ZWE (+263)">ZWE (+263)</option>
                                                        
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="what_numero" value="{{$per_informacion->what_numero}}"  class="form-control" >
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label>Celular<span style="color:red;"> *</span></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="primer_cel_codigo" class="form-control">
                                                        @if(isset($per_informacion->primer_cel_codigo)){
                                                            <option value="{{$per_informacion->primer_cel_codigo}}">{{$per_informacion->primer_cel_codigo}}</option>
                                                        }@else{
                                                            <option value="">---- Seleccionar ----</option>
                                                        
                                                        }
                                                        @endif
                                                        <option value="AFG (+93)">AFG (+93)</option>
                                                        <option value="ALB (+355)">ALB (+355)</option>
                                                        <option value="DZA (+213)">DZA (+213)</option>
                                                        <option value="ASM (+1684)">ASM (+1684)</option>
                                                        <option value="AND (+376)">AND (+376)</option>
                                                        <option value="AGO (+244)">AGO (+244)</option>
                                                        <option value="AIA (+1264)">AIA (+1264)</option>
                                                        <option value="ATG (+1268)">ATG (+1268)</option>
                                                        <option value="ARG (+54)">ARG (+54)</option>
                                                        <option value="ARM (+374)">ARM (+374)</option>
                                                        <option value="ABW (+297)">ABW (+297)</option>
                                                        <option value="AUS (+61)">AUS (+61)</option>
                                                        <option value="AUT (+43)">AUT (+43)</option>
                                                        <option value="AZE (+994)">AZE (+994)</option>
                                                        <option value="BHS (+1242)">BHS (+1242)</option>
                                                        <option value="BHR (+973)">BHR (+973)</option>
                                                        <option value="BGD (+880)">BGD (+880)</option>
                                                        <option value="BRB (+1246)">BRB (+1246)</option>
                                                        <option value="BLR (+375)">BLR (+375)</option>
                                                        <option value="BEL (+32)">BEL (+32)</option>
                                                        <option value="BLZ (+501)">BLZ (+501)</option>
                                                        <option value="BEN (+229)">BEN (+229)</option>
                                                        <option value="BMU (+1441)">BMU (+1441)</option>
                                                        <option value="BTN (+975)">BTN (+975)</option>
                                                        <option value="BOL (+591)">BOL (+591)</option>
                                                        <option value="BIH (+387)">BIH (+387)</option>
                                                        <option value="BWA (+267)">BWA (+267)</option>
                                                        <option value="BRA (+55)">BRA (+55)</option>
                                                        <option value="BRN (+673)">BRN (+673)</option>
                                                        <option value="BGR (+359)">BGR (+359)</option>
                                                        <option value="BFA (+226)">BFA (+226)</option>
                                                        <option value="BDI (+257)">BDI (+257)</option>
                                                        <option value="KHM (+855)">KHM (+855)</option>
                                                        <option value="CMR (+237)">CMR (+237)</option>
                                                        <option value="CAN (+1)">CAN (+1)</option>
                                                        <option value="CPV (+238)">CPV (+238)</option>
                                                        <option value="CYM (+1345)">CYM (+1345)</option>
                                                        <option value="CAF (+236)">CAF (+236)</option>
                                                        <option value="TCD (+235)">TCD (+235)</option>
                                                        <option value="CHL (+56)">CHL (+56)</option>
                                                        <option value="CHN (+86)">CHN (+86)</option>
                                                        <option value="COL (+57)">COL (+57)</option>
                                                        <option value="COM (+269)">COM (+269)</option>
                                                        <option value="COG (+242)">COG (+242)</option>
                                                        <option value="COD (+242)">COD (+242)</option>
                                                        <option value="COK (+682)">COK (+682)</option>
                                                        <option value="CRI (+506)">CRI (+506)</option>
                                                        <option value="CIV (+225)">CIV (+225)</option>
                                                        <option value="HRV (+385)">HRV (+385)</option>
                                                        <option value="CUB (+53)">CUB (+53)</option>
                                                        <option value="CYP (+357)">CYP (+357)</option>
                                                        <option value="CZE (+420)">CZE (+420)</option>
                                                        <option value="DNK (+45)">DNK (+45)</option>
                                                        <option value="DJI (+253)">DJI (+253)</option>
                                                        <option value="DMA (+1767)">DMA (+1767)</option>
                                                        <option value="DOM (+1809)">DOM (+1809)</option>
                                                        <option value="ECU (+593)">ECU (+593)</option>
                                                        <option value="EGY (+20)">EGY (+20)</option>
                                                        <option value="SLV (+503)">SLV (+503)</option>
                                                        <option value="GNQ (+240)">GNQ (+240)</option>
                                                        <option value="ERI (+291)">ERI (+291)</option>
                                                        <option value="EST (+372)">EST (+372)</option>
                                                        <option value="ETH (+251)">ETH (+251)</option>
                                                        <option value="FLK (+500)">FLK (+500)</option>
                                                        <option value="FRO (+298)">FRO (+298)</option>
                                                        <option value="FJI (+679)">FJI (+679)</option>
                                                        <option value="FIN (+358)">FIN (+358)</option>
                                                        <option value="FRA (+33)">FRA (+33)</option>
                                                        <option value="GUF (+594)">GUF (+594)</option>
                                                        <option value="PYF (+689)">PYF (+689)</option>
                                                        <option value="GAB (+241)">GAB (+241)</option>
                                                        <option value="GMB (+220)">GMB (+220)</option>
                                                        <option value="GEO (+995)">GEO (+995)</option>
                                                        <option value="DEU (+49)">DEU (+49)</option>
                                                        <option value="GHA (+233)">GHA (+233)</option>
                                                        <option value="GIB (+350)">GIB (+350)</option>
                                                        <option value="GRC (+30)">GRC (+30)</option>
                                                        <option value="GRL (+299)">GRL (+299)</option>
                                                        <option value="GRD (+1473)">GRD (+1473)</option>
                                                        <option value="GLP (+590)">GLP (+590)</option>
                                                        <option value="GUM (+1671)">GUM (+1671)</option>
                                                        <option value="GTM (+502)">GTM (+502)</option>
                                                        <option value="GIN (+224)">GIN (+224)</option>
                                                        <option value="GNB (+245)">GNB (+245)</option>
                                                        <option value="GUY (+592)">GUY (+592)</option>
                                                        <option value="HTI (+509)">HTI (+509)</option>
                                                        <option value="VAT (+39)">VAT (+39)</option>
                                                        <option value="HND (+504)">HND (+504)</option>
                                                        <option value="HKG (+852)">HKG (+852)</option>
                                                        <option value="HUN (+36)">HUN (+36)</option>
                                                        <option value="ISL (+354)">ISL (+354)</option>
                                                        <option value="IND (+91)">IND (+91)</option>
                                                        <option value="IDN (+62)">IDN (+62)</option>
                                                        <option value="IRN (+98)">IRN (+98)</option>
                                                        <option value="IRQ (+964)">IRQ (+964)</option>
                                                        <option value="IRL (+353)">IRL (+353)</option>
                                                        <option value="ISR (+972)">ISR (+972)</option>
                                                        <option value="ITA (+39)">ITA (+39)</option>
                                                        <option value="JAM (+1876)">JAM (+1876)</option>
                                                        <option value="JPN (+81)">JPN (+81)</option>
                                                        <option value="JOR (+962)">JOR (+962)</option>
                                                        <option value="KAZ (+7)">KAZ (+7)</option>
                                                        <option value="KEN (+254)">KEN (+254)</option>
                                                        <option value="KIR (+686)">KIR (+686)</option>
                                                        <option value="PRK (+850)">PRK (+850)</option>
                                                        <option value="KOR (+82)">KOR (+82)</option>
                                                        <option value="KWT (+965)">KWT (+965)</option>
                                                        <option value="KGZ (+996)">KGZ (+996)</option>
                                                        <option value="LAO (+856)">LAO (+856)</option>
                                                        <option value="LVA (+371)">LVA (+371)</option>
                                                        <option value="LBN (+961)">LBN (+961)</option>
                                                        <option value="LSO (+266)">LSO (+266)</option>
                                                        <option value="LBR (+231)">LBR (+231)</option>
                                                        <option value="LBY (+218)">LBY (+218)</option>
                                                        <option value="LIE (+423)">LIE (+423)</option>
                                                        <option value="LTU (+370)">LTU (+370)</option>
                                                        <option value="LUX (+352)">LUX (+352)</option>
                                                        <option value="MAC (+853)">MAC (+853)</option>
                                                        <option value="MKD (+389)">MKD (+389)</option>
                                                        <option value="MDG (+261)">MDG (+261)</option>
                                                        <option value="MWI (+265)">MWI (+265)</option>
                                                        <option value="MYS (+60)">MYS (+60)</option>
                                                        <option value="MDV (+960)">MDV (+960)</option>
                                                        <option value="MLI (+223)">MLI (+223)</option>
                                                        <option value="MLT (+356)">MLT (+356)</option>
                                                        <option value="MHL (+692)">MHL (+692)</option>
                                                        <option value="MTQ (+596)">MTQ (+596)</option>
                                                        <option value="MRT (+222)">MRT (+222)</option>
                                                        <option value="MUS (+230)">MUS (+230)</option>
                                                        <option value="MEX (+52)">MEX (+52)</option>
                                                        <option value="FSM (+691)">FSM (+691)</option>
                                                        <option value="MDA (+373)">MDA (+373)</option>
                                                        <option value="MCO (+377)">MCO (+377)</option>
                                                        <option value="MNG (+976)">MNG (+976)</option>
                                                        <option value="MSR (+1664)">MSR (+1664)</option>
                                                        <option value="MAR (+212)">MAR (+212)</option>
                                                        <option value="MOZ (+258)">MOZ (+258)</option>
                                                        <option value="MMR (+95)">MMR (+95)</option>
                                                        <option value="NAM (+264)">NAM (+264)</option>
                                                        <option value="NRU (+674)">NRU (+674)</option>
                                                        <option value="NPL (+977)">NPL (+977)</option>
                                                        <option value="NLD (+31)">NLD (+31)</option>
                                                        <option value="ANT (+599)">ANT (+599)</option>
                                                        <option value="NCL (+687)">NCL (+687)</option>
                                                        <option value="NZL (+64)">NZL (+64)</option>
                                                        <option value="NIC (+505)">NIC (+505)</option>
                                                        <option value="NER (+227)">NER (+227)</option>
                                                        <option value="NGA (+234)">NGA (+234)</option>
                                                        <option value="NIU (+683)">NIU (+683)</option>
                                                        <option value="NFK (+672)">NFK (+672)</option>
                                                        <option value="MNP (+1670)">MNP (+1670)</option>
                                                        <option value="NOR (+47)">NOR (+47)</option>
                                                        <option value="OMN (+968)">OMN (+968)</option>
                                                        <option value="PAK (+92)">PAK (+92)</option>
                                                        <option value="PLW (+680)">PLW (+680)</option>
                                                        <option value="PAN (+507)">PAN (+507)</option>
                                                        <option value="PNG (+675)">PNG (+675)</option>
                                                        <option value="PRY (+595)">PRY (+595)</option>
                                                        <option value="PER (+51)">PER (+51)</option>
                                                        <option value="PHL (+63)">PHL (+63)</option>
                                                        <option value="PCN (+0)">PCN (+0)</option>
                                                        <option value="POL (+48)">POL (+48)</option>
                                                        <option value="PRT (+351)">PRT (+351)</option>
                                                        <option value="PRI (+1787)">PRI (+1787)</option>
                                                        <option value="QAT (+974)">QAT (+974)</option>
                                                        <option value="REU (+262)">REU (+262)</option>
                                                        <option value="ROM (+40)">ROM (+40)</option>
                                                        <option value="RUS (+70)">RUS (+70)</option>
                                                        <option value="RWA (+250)">RWA (+250)</option>
                                                        <option value="SHN (+290)">SHN (+290)</option>
                                                        <option value="KNA (+1869)">KNA (+1869)</option>
                                                        <option value="LCA (+1758)">LCA (+1758)</option>
                                                        <option value="SPM (+508)">SPM (+508)</option>
                                                        <option value="VCT (+1784)">VCT (+1784)</option>
                                                        <option value="WSM (+684)">WSM (+684)</option>
                                                        <option value="SMR (+378)">SMR (+378)</option>
                                                        <option value="STP (+239)">STP (+239)</option>
                                                        <option value="SAU (+966)">SAU (+966)</option>
                                                        <option value="SEN (+221)">SEN (+221)</option>
                                                        <option value="SYC (+248)">SYC (+248)</option>
                                                        <option value="SLE (+232)">SLE (+232)</option>
                                                        <option value="SGP (+65)">SGP (+65)</option>
                                                        <option value="SVK (+421)">SVK (+421)</option>
                                                        <option value="SVN (+386)">SVN (+386)</option>
                                                        <option value="SLB (+677)">SLB (+677)</option>
                                                        <option value="SOM (+252)">SOM (+252)</option>
                                                        <option value="ZAF (+27)">ZAF (+27)</option>
                                                        <option value="ESP (+34)">ESP (+34)</option>
                                                        <option value="LKA (+94)">LKA (+94)</option>
                                                        <option value="SDN (+249)">SDN (+249)</option>
                                                        <option value="SUR (+597)">SUR (+597)</option>
                                                        <option value="SJM (+47)">SJM (+47)</option>
                                                        <option value="SWZ (+268)">SWZ (+268)</option>
                                                        <option value="CHE (+41)">CHE (+41)</option>
                                                        <option value="SYR (+963)">SYR (+963)</option>
                                                        <option value="TWN (+886)">TWN (+886)</option>
                                                        <option value="TJK (+992)">TJK (+992)</option>
                                                        <option value="TZA (+255)">TZA (+255)</option>
                                                        <option value="THA (+66)">THA (+66)</option>
                                                        <option value="TGO (+228)">TGO (+228)</option>
                                                        <option value="TKL (+690)">TKL (+690)</option>
                                                        <option value="TON (+676)">TON (+676)</option>
                                                        <option value="TTO (+1868)">TTO (+1868)</option>
                                                        <option value="TUN (+216)">TUN (+216)</option>
                                                        <option value="TUR (+90)">TUR (+90)</option>
                                                        <option value="TKM (+7370)">TKM (+7370)</option>
                                                        <option value="TCA (+1649)">TCA (+1649)</option>
                                                        <option value="TUV (+688)">TUV (+688)</option>
                                                        <option value="UGA (+256)">UGA (+256)</option>
                                                        <option value="UKR (+380)">UKR (+380)</option>
                                                        <option value="ARE (+971)">ARE (+971)</option>
                                                        <option value="GBR (+44)">GBR (+44)</option>
                                                        <option value="USA (+1)">USA (+1)</option>
                                                        <option value="URY (+598)">URY (+598)</option>
                                                        <option value="UZB (+998)">UZB (+998)</option>
                                                        <option value="VUT (+678)">VUT (+678)</option>
                                                        <option value="VEN (+58)">VEN (+58)</option>
                                                        <option value="VNM (+84)">VNM (+84)</option>
                                                        <option value="VGB (+1284)">VGB (+1284)</option>
                                                        <option value="VIR (+1340)">VIR (+1340)</option>
                                                        <option value="WLF (+681)">WLF (+681)</option>
                                                        <option value="ESH (+212)">ESH (+212)</option>
                                                        <option value="YEM (+967)">YEM (+967)</option>
                                                        <option value="ZMB (+260)">ZMB (+260)</option>
                                                        <option value="ZWE (+263)">ZWE (+263)</option>
                                                        
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="primer_cel_numero" value="{{$per_informacion->primer_cel_numero}}"  class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Celular 2<span style="color:red;"> *</span></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="segundo_cel_codigo" class="form-control">
                                                        @if(isset($per_informacion->segundo_cel_codigo)){
                                                            <option value="{{$per_informacion->segundo_cel_codigo}}">{{$per_informacion->segundo_cel_codigo}}</option>
                                                        }@else{
                                                            <option value="">---- Seleccionar ----</option>
                                                        
                                                        }
                                                        @endif
                                                        <option value="AFG (+93)">AFG (+93)</option>
                                                        <option value="ALB (+355)">ALB (+355)</option>
                                                        <option value="DZA (+213)">DZA (+213)</option>
                                                        <option value="ASM (+1684)">ASM (+1684)</option>
                                                        <option value="AND (+376)">AND (+376)</option>
                                                        <option value="AGO (+244)">AGO (+244)</option>
                                                        <option value="AIA (+1264)">AIA (+1264)</option>
                                                        <option value="ATG (+1268)">ATG (+1268)</option>
                                                        <option value="ARG (+54)">ARG (+54)</option>
                                                        <option value="ARM (+374)">ARM (+374)</option>
                                                        <option value="ABW (+297)">ABW (+297)</option>
                                                        <option value="AUS (+61)">AUS (+61)</option>
                                                        <option value="AUT (+43)">AUT (+43)</option>
                                                        <option value="AZE (+994)">AZE (+994)</option>
                                                        <option value="BHS (+1242)">BHS (+1242)</option>
                                                        <option value="BHR (+973)">BHR (+973)</option>
                                                        <option value="BGD (+880)">BGD (+880)</option>
                                                        <option value="BRB (+1246)">BRB (+1246)</option>
                                                        <option value="BLR (+375)">BLR (+375)</option>
                                                        <option value="BEL (+32)">BEL (+32)</option>
                                                        <option value="BLZ (+501)">BLZ (+501)</option>
                                                        <option value="BEN (+229)">BEN (+229)</option>
                                                        <option value="BMU (+1441)">BMU (+1441)</option>
                                                        <option value="BTN (+975)">BTN (+975)</option>
                                                        <option value="BOL (+591)">BOL (+591)</option>
                                                        <option value="BIH (+387)">BIH (+387)</option>
                                                        <option value="BWA (+267)">BWA (+267)</option>
                                                        <option value="BRA (+55)">BRA (+55)</option>
                                                        <option value="BRN (+673)">BRN (+673)</option>
                                                        <option value="BGR (+359)">BGR (+359)</option>
                                                        <option value="BFA (+226)">BFA (+226)</option>
                                                        <option value="BDI (+257)">BDI (+257)</option>
                                                        <option value="KHM (+855)">KHM (+855)</option>
                                                        <option value="CMR (+237)">CMR (+237)</option>
                                                        <option value="CAN (+1)">CAN (+1)</option>
                                                        <option value="CPV (+238)">CPV (+238)</option>
                                                        <option value="CYM (+1345)">CYM (+1345)</option>
                                                        <option value="CAF (+236)">CAF (+236)</option>
                                                        <option value="TCD (+235)">TCD (+235)</option>
                                                        <option value="CHL (+56)">CHL (+56)</option>
                                                        <option value="CHN (+86)">CHN (+86)</option>
                                                        <option value="COL (+57)">COL (+57)</option>
                                                        <option value="COM (+269)">COM (+269)</option>
                                                        <option value="COG (+242)">COG (+242)</option>
                                                        <option value="COD (+242)">COD (+242)</option>
                                                        <option value="COK (+682)">COK (+682)</option>
                                                        <option value="CRI (+506)">CRI (+506)</option>
                                                        <option value="CIV (+225)">CIV (+225)</option>
                                                        <option value="HRV (+385)">HRV (+385)</option>
                                                        <option value="CUB (+53)">CUB (+53)</option>
                                                        <option value="CYP (+357)">CYP (+357)</option>
                                                        <option value="CZE (+420)">CZE (+420)</option>
                                                        <option value="DNK (+45)">DNK (+45)</option>
                                                        <option value="DJI (+253)">DJI (+253)</option>
                                                        <option value="DMA (+1767)">DMA (+1767)</option>
                                                        <option value="DOM (+1809)">DOM (+1809)</option>
                                                        <option value="ECU (+593)">ECU (+593)</option>
                                                        <option value="EGY (+20)">EGY (+20)</option>
                                                        <option value="SLV (+503)">SLV (+503)</option>
                                                        <option value="GNQ (+240)">GNQ (+240)</option>
                                                        <option value="ERI (+291)">ERI (+291)</option>
                                                        <option value="EST (+372)">EST (+372)</option>
                                                        <option value="ETH (+251)">ETH (+251)</option>
                                                        <option value="FLK (+500)">FLK (+500)</option>
                                                        <option value="FRO (+298)">FRO (+298)</option>
                                                        <option value="FJI (+679)">FJI (+679)</option>
                                                        <option value="FIN (+358)">FIN (+358)</option>
                                                        <option value="FRA (+33)">FRA (+33)</option>
                                                        <option value="GUF (+594)">GUF (+594)</option>
                                                        <option value="PYF (+689)">PYF (+689)</option>
                                                        <option value="GAB (+241)">GAB (+241)</option>
                                                        <option value="GMB (+220)">GMB (+220)</option>
                                                        <option value="GEO (+995)">GEO (+995)</option>
                                                        <option value="DEU (+49)">DEU (+49)</option>
                                                        <option value="GHA (+233)">GHA (+233)</option>
                                                        <option value="GIB (+350)">GIB (+350)</option>
                                                        <option value="GRC (+30)">GRC (+30)</option>
                                                        <option value="GRL (+299)">GRL (+299)</option>
                                                        <option value="GRD (+1473)">GRD (+1473)</option>
                                                        <option value="GLP (+590)">GLP (+590)</option>
                                                        <option value="GUM (+1671)">GUM (+1671)</option>
                                                        <option value="GTM (+502)">GTM (+502)</option>
                                                        <option value="GIN (+224)">GIN (+224)</option>
                                                        <option value="GNB (+245)">GNB (+245)</option>
                                                        <option value="GUY (+592)">GUY (+592)</option>
                                                        <option value="HTI (+509)">HTI (+509)</option>
                                                        <option value="VAT (+39)">VAT (+39)</option>
                                                        <option value="HND (+504)">HND (+504)</option>
                                                        <option value="HKG (+852)">HKG (+852)</option>
                                                        <option value="HUN (+36)">HUN (+36)</option>
                                                        <option value="ISL (+354)">ISL (+354)</option>
                                                        <option value="IND (+91)">IND (+91)</option>
                                                        <option value="IDN (+62)">IDN (+62)</option>
                                                        <option value="IRN (+98)">IRN (+98)</option>
                                                        <option value="IRQ (+964)">IRQ (+964)</option>
                                                        <option value="IRL (+353)">IRL (+353)</option>
                                                        <option value="ISR (+972)">ISR (+972)</option>
                                                        <option value="ITA (+39)">ITA (+39)</option>
                                                        <option value="JAM (+1876)">JAM (+1876)</option>
                                                        <option value="JPN (+81)">JPN (+81)</option>
                                                        <option value="JOR (+962)">JOR (+962)</option>
                                                        <option value="KAZ (+7)">KAZ (+7)</option>
                                                        <option value="KEN (+254)">KEN (+254)</option>
                                                        <option value="KIR (+686)">KIR (+686)</option>
                                                        <option value="PRK (+850)">PRK (+850)</option>
                                                        <option value="KOR (+82)">KOR (+82)</option>
                                                        <option value="KWT (+965)">KWT (+965)</option>
                                                        <option value="KGZ (+996)">KGZ (+996)</option>
                                                        <option value="LAO (+856)">LAO (+856)</option>
                                                        <option value="LVA (+371)">LVA (+371)</option>
                                                        <option value="LBN (+961)">LBN (+961)</option>
                                                        <option value="LSO (+266)">LSO (+266)</option>
                                                        <option value="LBR (+231)">LBR (+231)</option>
                                                        <option value="LBY (+218)">LBY (+218)</option>
                                                        <option value="LIE (+423)">LIE (+423)</option>
                                                        <option value="LTU (+370)">LTU (+370)</option>
                                                        <option value="LUX (+352)">LUX (+352)</option>
                                                        <option value="MAC (+853)">MAC (+853)</option>
                                                        <option value="MKD (+389)">MKD (+389)</option>
                                                        <option value="MDG (+261)">MDG (+261)</option>
                                                        <option value="MWI (+265)">MWI (+265)</option>
                                                        <option value="MYS (+60)">MYS (+60)</option>
                                                        <option value="MDV (+960)">MDV (+960)</option>
                                                        <option value="MLI (+223)">MLI (+223)</option>
                                                        <option value="MLT (+356)">MLT (+356)</option>
                                                        <option value="MHL (+692)">MHL (+692)</option>
                                                        <option value="MTQ (+596)">MTQ (+596)</option>
                                                        <option value="MRT (+222)">MRT (+222)</option>
                                                        <option value="MUS (+230)">MUS (+230)</option>
                                                        <option value="MEX (+52)">MEX (+52)</option>
                                                        <option value="FSM (+691)">FSM (+691)</option>
                                                        <option value="MDA (+373)">MDA (+373)</option>
                                                        <option value="MCO (+377)">MCO (+377)</option>
                                                        <option value="MNG (+976)">MNG (+976)</option>
                                                        <option value="MSR (+1664)">MSR (+1664)</option>
                                                        <option value="MAR (+212)">MAR (+212)</option>
                                                        <option value="MOZ (+258)">MOZ (+258)</option>
                                                        <option value="MMR (+95)">MMR (+95)</option>
                                                        <option value="NAM (+264)">NAM (+264)</option>
                                                        <option value="NRU (+674)">NRU (+674)</option>
                                                        <option value="NPL (+977)">NPL (+977)</option>
                                                        <option value="NLD (+31)">NLD (+31)</option>
                                                        <option value="ANT (+599)">ANT (+599)</option>
                                                        <option value="NCL (+687)">NCL (+687)</option>
                                                        <option value="NZL (+64)">NZL (+64)</option>
                                                        <option value="NIC (+505)">NIC (+505)</option>
                                                        <option value="NER (+227)">NER (+227)</option>
                                                        <option value="NGA (+234)">NGA (+234)</option>
                                                        <option value="NIU (+683)">NIU (+683)</option>
                                                        <option value="NFK (+672)">NFK (+672)</option>
                                                        <option value="MNP (+1670)">MNP (+1670)</option>
                                                        <option value="NOR (+47)">NOR (+47)</option>
                                                        <option value="OMN (+968)">OMN (+968)</option>
                                                        <option value="PAK (+92)">PAK (+92)</option>
                                                        <option value="PLW (+680)">PLW (+680)</option>
                                                        <option value="PAN (+507)">PAN (+507)</option>
                                                        <option value="PNG (+675)">PNG (+675)</option>
                                                        <option value="PRY (+595)">PRY (+595)</option>
                                                        <option value="PER (+51)">PER (+51)</option>
                                                        <option value="PHL (+63)">PHL (+63)</option>
                                                        <option value="PCN (+0)">PCN (+0)</option>
                                                        <option value="POL (+48)">POL (+48)</option>
                                                        <option value="PRT (+351)">PRT (+351)</option>
                                                        <option value="PRI (+1787)">PRI (+1787)</option>
                                                        <option value="QAT (+974)">QAT (+974)</option>
                                                        <option value="REU (+262)">REU (+262)</option>
                                                        <option value="ROM (+40)">ROM (+40)</option>
                                                        <option value="RUS (+70)">RUS (+70)</option>
                                                        <option value="RWA (+250)">RWA (+250)</option>
                                                        <option value="SHN (+290)">SHN (+290)</option>
                                                        <option value="KNA (+1869)">KNA (+1869)</option>
                                                        <option value="LCA (+1758)">LCA (+1758)</option>
                                                        <option value="SPM (+508)">SPM (+508)</option>
                                                        <option value="VCT (+1784)">VCT (+1784)</option>
                                                        <option value="WSM (+684)">WSM (+684)</option>
                                                        <option value="SMR (+378)">SMR (+378)</option>
                                                        <option value="STP (+239)">STP (+239)</option>
                                                        <option value="SAU (+966)">SAU (+966)</option>
                                                        <option value="SEN (+221)">SEN (+221)</option>
                                                        <option value="SYC (+248)">SYC (+248)</option>
                                                        <option value="SLE (+232)">SLE (+232)</option>
                                                        <option value="SGP (+65)">SGP (+65)</option>
                                                        <option value="SVK (+421)">SVK (+421)</option>
                                                        <option value="SVN (+386)">SVN (+386)</option>
                                                        <option value="SLB (+677)">SLB (+677)</option>
                                                        <option value="SOM (+252)">SOM (+252)</option>
                                                        <option value="ZAF (+27)">ZAF (+27)</option>
                                                        <option value="ESP (+34)">ESP (+34)</option>
                                                        <option value="LKA (+94)">LKA (+94)</option>
                                                        <option value="SDN (+249)">SDN (+249)</option>
                                                        <option value="SUR (+597)">SUR (+597)</option>
                                                        <option value="SJM (+47)">SJM (+47)</option>
                                                        <option value="SWZ (+268)">SWZ (+268)</option>
                                                        <option value="CHE (+41)">CHE (+41)</option>
                                                        <option value="SYR (+963)">SYR (+963)</option>
                                                        <option value="TWN (+886)">TWN (+886)</option>
                                                        <option value="TJK (+992)">TJK (+992)</option>
                                                        <option value="TZA (+255)">TZA (+255)</option>
                                                        <option value="THA (+66)">THA (+66)</option>
                                                        <option value="TGO (+228)">TGO (+228)</option>
                                                        <option value="TKL (+690)">TKL (+690)</option>
                                                        <option value="TON (+676)">TON (+676)</option>
                                                        <option value="TTO (+1868)">TTO (+1868)</option>
                                                        <option value="TUN (+216)">TUN (+216)</option>
                                                        <option value="TUR (+90)">TUR (+90)</option>
                                                        <option value="TKM (+7370)">TKM (+7370)</option>
                                                        <option value="TCA (+1649)">TCA (+1649)</option>
                                                        <option value="TUV (+688)">TUV (+688)</option>
                                                        <option value="UGA (+256)">UGA (+256)</option>
                                                        <option value="UKR (+380)">UKR (+380)</option>
                                                        <option value="ARE (+971)">ARE (+971)</option>
                                                        <option value="GBR (+44)">GBR (+44)</option>
                                                        <option value="USA (+1)">USA (+1)</option>
                                                        <option value="URY (+598)">URY (+598)</option>
                                                        <option value="UZB (+998)">UZB (+998)</option>
                                                        <option value="VUT (+678)">VUT (+678)</option>
                                                        <option value="VEN (+58)">VEN (+58)</option>
                                                        <option value="VNM (+84)">VNM (+84)</option>
                                                        <option value="VGB (+1284)">VGB (+1284)</option>
                                                        <option value="VIR (+1340)">VIR (+1340)</option>
                                                        <option value="WLF (+681)">WLF (+681)</option>
                                                        <option value="ESH (+212)">ESH (+212)</option>
                                                        <option value="YEM (+967)">YEM (+967)</option>
                                                        <option value="ZMB (+260)">ZMB (+260)</option>
                                                        <option value="ZWE (+263)">ZWE (+263)</option>
                                                        
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="segundo_cel_numero" value="{{$per_informacion->segundo_cel_numero}}"  class="form-control" >
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Descripcion<span style="color:red;"> *</span></label>
                                            <textarea name="descripcion" cols="30" rows="10" class="form-control">{{$per_informacion->descripcion}}</textarea>
                                            
                                              
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>    
                    
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Redes sociales
                            </div>
                            <div class="accordion-content">
                                
                                *Las urls deben incluir <b>'https://'</b>. Ejemplo: https://ejemplo.com <br><br>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Facebook link<span style="color:red;"> *</span></label>
                                            <input type="text" name="face_link" value="{{$per_redes->face_link}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <label>Youtube link<span style="color:red;"> *</span></label>
                                            <input type="text" name="you_link" value="{{$per_redes->you_link}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Instagram url<span style="color:red;"> *</span></label>
                                            <input type="text" name="insta_link" value="{{$per_redes->insta_link}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <label>Linkedin link<span style="color:red;"> *</span></label>
                                            <input type="text" name="lin_link" value="{{$per_redes->lin_link}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                
                                </div>
                                <div class="form-group">
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Tiktok link<span style="color:red;"> *</span></label>
                                            <input type="text" name="tik_link" value="{{$per_redes->tik_link}}"  class="form-control" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Información adicional
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Propiedades vendidas<span style="color:red;"> *</span></label>
                                            <input type="number" name="p_vendidas" value="{{$per_adicional->p_vendidas}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Propiedades alquiladas<span style="color:red;"> *</span></label>
                                            <input type="number" name="p_alquiladas" value="{{$per_adicional->p_alquiladas}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Propiedades vendidas (mes)<span style="color:red;"> *</span></label>
                                            <input type="number" name="p_vendidas_mes" value="{{$per_adicional->p_vendidas_mes}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Seguridad
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Nueva contraseña<span style="color:red;"> *</span></label>
                                            <div class="input-group">
                                                <input type="password" id="password" class="form-control" minlength="8">
                                                <div class="input-group-append">
                                                    <button type="button" id="togglePassword" class="btn btn-primary"><i class="fa fa-eye" style="color:#fff;"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Confirmar nueva contraseña<span style="color:red;"> *</span></label>
                                            <div class="input-group">
                                                <input type="password" id="password2" name="password" class="form-control" minlength="8">
                                                <div class="input-group-append">
                                                    <button type="button" id="togglePassword2" class="btn btn-primary"><i class="fa fa-eye" style="color:#fff;"></i></button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Fotografías de Perfil
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix" >
                                        
                                        @foreach ($fotos as $foto)
                                        <div class="col-md-6" >
                                            <div class="input-group">
                                                
                                                <input type="file" name="imagen"  class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_perfil/'.$foto->foto ) }}" disabled>
                                                <label class="fancy-radio custom-color-green" style="margin-top:20px;"><input id="portada_foto" onclick="Portada({{ $foto->id }})" name="portada" type="radio"  {{ $foto->portada == 'SI' ? 'checked' : '' }}><span><i></i>Imagen de portada</span></label>
                                                
                                                
                                            </div>
                                            <div class="file-info row" style="border: 2px dotted #50d38a; width:80%;margin:10px; border-radius:10px; padding:5px;">
                                                <div class="col"><p >{{$foto->foto}}</p></div>
                                                <div class="col-3">
                                                    
                                                    <p >
                                                    @php
                                                        $bytes = filesize(public_path('img_perfil/' . $foto->foto));

                                                        if ($bytes >= 1073741824) {
                                                            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                        } elseif ($bytes >= 1048576) {
                                                            $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                        } elseif ($bytes >= 1024) {
                                                            $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                        } elseif ($bytes > 1) {
                                                            $bytes = $bytes . ' bytes';
                                                        } elseif ($bytes == 1) {
                                                            $bytes = $bytes . ' byte';
                                                        } else {
                                                            $bytes = '0 bytes';
                                                        }

                                                        echo $bytes;
                                                    @endphp
                                                    </p>
                                                </div>
                                                <div class="col-1"><a class="file-download" href="{{ asset('./img_perfil/' . $foto->foto) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                <div class="col-1"><a href="javascript:void(0);" onclick="EliminarFoto({{ $foto->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                            
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11"></div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="foto" id="prueba_foto" data-allowed-file-extensions='jpg png'>
                                                <label for="prueba_foto" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
                                            </div>
                                            
                                        </div>
                                             
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Videos de Perfil
                            </div>
                            <div class="accordion-content">
                                *Recuerda que el tamaño de los videos no debe exceder los 100MB. Ingresa a esta <a href="https://www.videosmaller.com/es/"><strong>página</strong></a>  subir el video y seleccionar el escalar ancho de vídeo 720 para reducir el peso
                                    <br>
                                *Dimensión recomendada es de 1280px × 720px
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    @foreach ($videos as $video )
                                        
                                        <div class="col-md-6" >
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        
                                                        <video src="{{asset('./img_perfil/'.$video->video)}}" controls controlslist="nodownload" width="170" height="130" poster></video>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-8" style="padding-top: 30px;">
                                                    
                                                    <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                        <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$video->video}}</p></div>
                                                        <div class="col-4">
                                                            
                                                            <p >
                                                            @php
                                                                $bytes = filesize(public_path('img_perfil/' . $video->video));

                                                                if ($bytes >= 1073741824) {
                                                                    $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                } elseif ($bytes >= 1048576) {
                                                                    $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                } elseif ($bytes >= 1024) {
                                                                    $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                } elseif ($bytes > 1) {
                                                                    $bytes = $bytes . ' bytes';
                                                                } elseif ($bytes == 1) {
                                                                    $bytes = $bytes . ' byte';
                                                                } else {
                                                                    $bytes = '0 bytes';
                                                                }

                                                                echo $bytes;
                                                            @endphp
                                                            </p>
                                                        </div>
                                                        <div class="col-1"><a class="file-download" href="{{ asset('./img_perfil/' . $video->video) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                        <div class="col-1"><a href="javascript:void(0);" onclick="EliminarVideo({{ $video->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    @endforeach
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11"></div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                
                                                <input type="file" class="hidden" name="video" id="prueba_video" data-allowed-file-extensions='video/mp4'>
                                                <label for="prueba_video" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
                                            </div>
                                            
                                            
                                        </div>
                                            
                                             
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12" align="right" style="padding-bottom:20px;">
                
                <button type="submit" class="btn btn-primary">Guardar</button>
                
            </div>
        </div>
    </form>
@endsection
@section('scripts')

<script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    
    $(document).ready(function() {
        $('.accordion-header').click(function() {
            $(this).next('.accordion-content').slideToggle();
        });
        
    });
    const passwordInput = document.getElementById('password');
    const togglePasswordButton = document.getElementById('togglePassword');
    
    togglePasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePasswordButton.innerHTML = '<i class="fa fa-eye" style="color:#fff;">';
        } else {
            passwordInput.type = 'password';
            togglePasswordButton.innerHTML = '<i class="fa fa-eye" style="color:#fff;">';
        }
    });
    const passwordInput2 = document.getElementById('password2');
    const togglePasswordButton2 = document.getElementById('togglePassword2');

    togglePasswordButton2.addEventListener('click', function() {
        if (passwordInput2.type === 'password') {
            passwordInput2.type = 'text';
            togglePasswordButton2.innerHTML = '<i class="fa fa-eye" style="color:#fff;">';
        } else {
            passwordInput2.type = 'password';
            togglePasswordButton2.innerHTML = '<i class="fa fa-eye" style="color:#fff;">';
        }
    });
    
    
       
        document.getElementById('prueba_foto').addEventListener('change', function () {
            var foto = document.getElementById('prueba_foto').files[0];
            console.log(foto);
            if (foto) {
                var formData = new FormData();
                formData.append('foto', foto);

                axios.post('{{ route("perfil.foto") }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    
                    location.reload();
                })
                .catch(error => {
                    console.error(error);
                });
            }
            
        });
        function EliminarFoto(id){
            console.log(id);
            if (id) {
                
                axios.post('{{ route("perfil-foto.delete") }}', { id: id })
                .then(response => {
                    location.reload();
                    
                })
                .catch(error => {
                    console.error(error);
                });
            }
            
        }
        document.getElementById('prueba_video').addEventListener('change', function () {
            var video = document.getElementById('prueba_video').files[0];

            if (video) {
                var formData = new FormData();
                formData.append('video', video);

                axios.post('{{ route("perfil.video") }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    
                    location.reload();
                })
                .catch(error => {
                    console.error(error);
                });
            }
            
        });
        function EliminarVideo(id){
            console.log(id);
            if (id) {
                
                axios.post('{{ route("perfil-video.delete") }}', { id: id })
                .then(response => {
                    location.reload();
                    
                })
                .catch(error => {
                    console.error(error);
                });
            }
            
        }
        function Portada(id){
            if (id) {
                
                axios.post('{{ route("perfil-foto.portada") }}', { id: id })
                .then(response => {
                    location.reload();
                    
                })
                .catch(error => {
                    console.error(error);
                });
            }
            
            
            
        }

        
</script>    
@endsection