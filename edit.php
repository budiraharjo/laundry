<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>STKIP Babunnajah</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

   <!-- special jquery jQuery 2.1.3 -->
    <script src="asset_s/plugins/jQuery/jQuery-2.1.3.min.js"></script>

   

    <!-- DATA TABLES -->
    <link href="asset_s/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->

       <!-- i just place it DATA TABES SCRIPT here-->
    <script src="asset_s/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="asset_s/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

 <!--form asset -->
    <!-- Bootstrap 3.3.2 -->
    <link href="asset_s/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="asset_s/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="asset_s/plugins/ionic/css/ionicons.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="asset_s/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="asset_s/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	 <link href="asset_s/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	    <!-- date picker -->
    <link href="asset_s/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!--switch button -->
       <link href="asset_s/plugins/switch/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
     <!--switch button -->
       <link href="asset_s/plugins/chosen/chosen.min.css" rel="stylesheet" type="text/css" />
         <link href="asset_s/plugins/chosen/chosen-bootstrap.css" rel="stylesheet" type="text/css" />
   <!--fancy box -->
     <link href="asset_s/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<!--always show up -->
  <link href="asset_s/plugins/fakeloader/fakeLoader.css" rel="stylesheet" type="text/css" />
 <!--image preview -->
  <link href="asset_s/plugins/holder/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="asset_s/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="asset_s/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

 <link href="asset_s/dist/css/overide.css" rel="stylesheet" type="text/css" />


    </head>
  <body class="hhold-transition skin-black sidebar-collapse sidebar-mini">
   <div class="fakeloader"></div>
   
    <div class="wrapper">



<div class="modal modal-warning" id="informasi" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
<div class="modal-dialog"> <div class="modal-content"><div class="modal-header"> <h4 class="modal-title">Informasi</h4> </div> <div class="modal-body"> <p id="isi_informasi">

</p> </div> <div class="modal-footer"> <button type="button" id="ok_info" class="btn btn-outline pull-left">Close</button> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal -->


   <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->

        <!-- /.sidebar -->
      </aside>
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">



                <!-- Content Header (Page header) -->
       
                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Data</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="http://localhost/feeder-production/admina/modul/mahasiswa/mahasiswa_action.php?act=up">
                           <div class="form-group">
                        <label for="NIM" class="control-label col-lg-2">NIM</label>
                        <div class="col-lg-10">
                          <input type="text" name="nipd" placeholder="NIM" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Nama" class="control-label col-lg-2">Nama</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_pd" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Kelamin" class="control-label col-lg-2">Jenis Kelamin</label>
                        <div class="col-lg-10">
            <select name="jk" data-placeholder="Pilih Jenis Kelamin ..." class="form-control chzn-select"  >
			<option value='L'>Laki-Laki</option>
			<option value='P'>Perempuan</option>              
			</select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor KTP" class="control-label col-lg-2">NIK Mahasiswa</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="nik" value="3601154908010001" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor KTP" class="control-label col-lg-2">NISN</label>
                        <div class="col-lg-10">
                          <input type="text" name="nisn" placeholder="NISN" value="0010226800" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor KTP" class="control-label col-lg-2">NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="npwp" placeholder="NPWP" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan" class="control-label col-lg-2">Kewarganegaraan</label>
                        <div class="col-lg-10">
                          <select name="kewarganegaraan" id="kewarganegaraan" data-placeholder="Kewarganegaraan..." class="form-control chzn-select" tabindex="2" >
               <option value='A'>United Arab Emirates</option><option value='AD'>Andorra</option><option value='AF'>Afghanistan</option><option value='AG'>Antigua And Barbuda</option><option value='AI'>Anguilla</option><option value='AL'>Albania</option><option value='AM'>Armenia</option><option value='AN'>Netherlands Antilles</option><option value='AO'>Angola</option><option value='AQ'>Antarctica</option><option value='AR'>Argentina</option><option value='AS'>American Samoa</option><option value='AT'>Austria</option><option value='AU'>Australia</option><option value='AW'>Aruba</option><option value='AX'>Aland Islands</option><option value='AZ'>Azerbaijan</option><option value='B'>Belgium</option><option value='BA'>Bosnia And Herzegovina</option><option value='BB'>Barbados</option><option value='BD'>Bangladesh</option><option value='BF'>Burkina Faso</option><option value='BG'>Bulgaria</option><option value='BH'>Bahrain</option><option value='BI'>Burundi</option><option value='BJ'>Benin</option><option value='BL'>Saint Bartelemey</option><option value='BM'>Bermuda</option><option value='BN'>Brunei Darussalam</option><option value='BO'>Bolivia</option><option value='BQ'>Bonaire, Saint Eustatius and Saba</option><option value='BR'>Brazil</option><option value='BS'>Bahamas</option><option value='BT'>Bhutan</option><option value='BV'>Bouvet Island</option><option value='BW'>Botswana</option><option value='BY'>Belarus</option><option value='BZ'>Belize</option><option value='CA'>Canada</option><option value='CC'>Cocos (Keeling) Islands</option><option value='CD'>Congo, The Democratic Republic Of The</option><option value='CF'>Central African Republic</option><option value='CG'>Congo</option><option value='CH'>Switzerland</option><option value='CI'>Cote D'Ivoire</option><option value='CK'>Cook Islands</option><option value='CL'>Chile</option><option value='CM'>Cameroon</option><option value='CN'>China</option><option value='CO'>Colombia</option><option value='CR'>Costa Rica</option><option value='CS'>Serbia And Montenegro</option><option value='CU'>Cuba</option><option value='CV'>Cape Verde</option><option value='CW'>Curacao</option><option value='CX'>Christmas Island</option><option value='CY'>Cyprus</option><option value='CZ'>Czech Republic</option><option value='D'>Germany</option><option value='DJ'>Djibouti</option><option value='DK'>Denmark</option><option value='DM'>Dominica</option><option value='DO'>Dominican Republic</option><option value='DZ'>Algeria</option><option value='E'>Estonia</option><option value='EC'>Ecuador</option><option value='EG'>Egypt</option><option value='EH'>Western Sahara</option><option value='ER'>Eritrea</option><option value='ES'>Spain</option><option value='ET'>Ethiopia</option><option value='FI'>Finland</option><option value='FJ'>Fiji</option><option value='FK'>Falkland Islands (Malvinas)</option><option value='FM'>Micronesia, Federated States Of</option><option value='FO'>Faroe Islands</option><option value='FR'>France</option><option value='G'>Georgia</option><option value='GA'>Gabon</option><option value='GB'>United Kingdom</option><option value='GD'>Grenada</option><option value='GF'>French Guiana</option><option value='GG'>Guernsey</option><option value='GH'>Ghana</option><option value='GI'>Gibraltar</option><option value='GL'>Greenland</option><option value='GM'>Gambia</option><option value='GN'>Guinea</option><option value='GP'>Guadeloupe</option><option value='GQ'>Equatorial Guinea</option><option value='GR'>Greece</option><option value='GS'>South Georgia And The South Sandwich Islands</option><option value='GT'>Guatemala</option><option value='GU'>Guam</option><option value='GW'>Guinea-Bissau</option><option value='GY'>Guyana</option><option value='HK'>Hong Kong</option><option value='HM'>Heard Island And Mcdonald Islands</option><option value='HN'>Honduras</option><option value='HR'>Croatia</option><option value='HT'>Haiti</option><option value='HU'>Hungary</option><option value='I'>Ireland</option><option value='ID' selected>Indonesia                     </option><option value='IL'>Israel</option><option value='IM'>Isle Of Man</option><option value='IN'>India</option><option value='IO'>British Indian Ocean Territory</option><option value='IQ'>Iraq</option><option value='IR'>Iran, Islamic Republic Of</option><option value='IS'>Iceland</option><option value='IT'>Italy</option><option value='J'>Jersey</option><option value='JM'>Jamaica</option><option value='JO'>Jordan</option><option value='JP'>Japan</option><option value='K'>Kenya</option><option value='KG'>Kyrgyzstan</option><option value='KH'>Cambodia</option><option value='KI'>Kiribati</option><option value='KM'>Comoros</option><option value='KN'>Saint Kitts And Nevis</option><option value='KP'>Korea, Democratic People'S Republic Of</option><option value='KR'>Korea, Republic Of</option><option value='KW'>Kuwait</option><option value='KY'>Cayman Islands</option><option value='KZ'>Kazakhstan</option><option value='LA'>Lao People'S Democratic Republic</option><option value='LB'>Lebanon</option><option value='LC'>Saint Lucia</option><option value='LI'>Liechtenstein</option><option value='LK'>Sri Lanka</option><option value='LR'>Liberia</option><option value='LS'>Lesotho</option><option value='LT'>Lithuania</option><option value='LU'>Luxembourg</option><option value='LV'>Latvia</option><option value='LY'>Libyan Arab Jamahiriya</option><option value='M'>Montenegro</option><option value='MA'>Morocco</option><option value='MC'>Monaco</option><option value='MD'>Moldova, Republic Of</option><option value='MF'>Saint Martin</option><option value='MG'>Madagascar</option><option value='MH'>Marshall Islands</option><option value='MK'>Macedonia, The Former Yugoslav Republic Of</option><option value='ML'>Mali</option><option value='MM'>Myanmar</option><option value='MN'>Mongolia</option><option value='MO'>Macao</option><option value='MP'>Northern Mariana Islands</option><option value='MQ'>Martinique</option><option value='MR'>Mauritania</option><option value='MS'>Montserrat</option><option value='MT'>Malta</option><option value='MU'>Mauritius</option><option value='MV'>Maldives</option><option value='MW'>Malawi</option><option value='MX'>Mexico</option><option value='MY'>Malaysia</option><option value='MZ'>Mozambique</option><option value='N'>Niger</option><option value='NA'>Namibia</option><option value='NC'>New Caledonia</option><option value='NF'>Norfolk Island</option><option value='NG'>Nigeria</option><option value='NI'>Nicaragua</option><option value='NL'>Netherlands</option><option value='NO'>Norway</option><option value='NP'>Nepal</option><option value='NR'>Nauru</option><option value='NU'>Niue</option><option value='NZ'>New Zealand</option><option value='OM'>Oman</option><option value='P'>Peru</option><option value='PA'>Panama</option><option value='PF'>French Polynesia</option><option value='PG'>Papua New Guinea</option><option value='PH'>Philippines</option><option value='PK'>Pakistan</option><option value='PL'>Poland</option><option value='PM'>Saint Pierre And Miquelon</option><option value='PN'>Pitcairn</option><option value='PR'>Puerto Rico</option><option value='PS'>Palestinian Territory, Occupied</option><option value='PT'>Portugal</option><option value='PW'>Palau</option><option value='PY'>Paraguay</option><option value='QA'>Qatar</option><option value='R'>Reunion</option><option value='RO'>Romania</option><option value='RS'>Serbia</option><option value='RU'>Russian Federation</option><option value='RW'>Rwanda</option><option value='S'>Sweden</option><option value='SA'>Saudi Arabia</option><option value='SB'>Solomon Islands</option><option value='SC'>Seychelles</option><option value='SD'>Sudan</option><option value='SG'>Singapore</option><option value='SH'>Saint Helena</option><option value='SI'>Slovenia</option><option value='SJ'>Svalbard And Jan Mayen</option><option value='SK'>Slovakia</option><option value='SL'>Sierra Leone</option><option value='SM'>San Marino</option><option value='SN'>Senegal</option><option value='SO'>Somalia</option><option value='SR'>Suriname</option><option value='SS'>South Sudan</option><option value='ST'>Sao Tome And Principe</option><option value='SV'>El Salvador</option><option value='SX'>Sint Maarten</option><option value='SY'>Syrian Arab Republic</option><option value='SZ'>Swaziland</option><option value='TC'>Turks And Caicos Islands</option><option value='TD'>Chad</option><option value='TF'>French Southern Territories</option><option value='TG'>Togo</option><option value='TH'>Thailand</option><option value='TJ'>Tajikistan</option><option value='TK'>Tokelau</option><option value='TL'>Timor-Leste</option><option value='TM'>Turkmenistan</option><option value='TN'>Tunisia</option><option value='TO'>Tonga</option><option value='TR'>Turkey</option><option value='TT'>Trinidad And Tobago</option><option value='TV'>Tuvalu</option><option value='TW'>Taiwan, Province Of China</option><option value='TZ'>Tanzania, United Republic Of</option><option value='UA'>Ukraine</option><option value='UG'>Uganda</option><option value='UM'>United States Minor Outlying Islands</option><option value='US'>United States</option><option value='UY'>Uruguay</option><option value='UZ'>Uzbekistan</option><option value='V'>Venezuela</option><option value='VA'>Holy See (Vatican City State)</option><option value='VC'>Saint Vincent And The Grenadines</option><option value='VG'>Virgin Islands, British</option><option value='VI'>Virgin Islands, U.S.</option><option value='VN'>Viet Nam</option><option value='VU'>Vanuatu</option><option value='WF'>Wallis And Futuna</option><option value='WS'>Samoa</option><option value='Y'>Yemen</option><option value='YT'>Mayotte</option><option value='ZA'>South Africa</option><option value='ZM'>Zambia</option><option value='ZW'>Zimbabwe</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan" class="control-label col-lg-2">Jalur Masuk</label>
                        <div class="col-lg-10">
                          <select name="id_jalur_masuk" data-placeholder="Pilih Jalur Masuk..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'>SBMPTN</option><option value='2'>SNMPTN</option><option value='3'>PMDK</option><option value='4'>Prestasi</option><option value='5' selected>Seleksi Mandiri PTN</option><option value='6'>Seleksi Mandiri PTS</option><option value='7'>Ujian Masuk Bersama PTN (UMB-PT)</option><option value='8'>Ujian Masuk Bersama PTS (UMB-PTS)</option><option value='9'>Program Internasional</option><option value='10'>Program Ekstensi</option><option value='11'>Program Kerjasama Perusahaan/Institusi/Pemerintah</option>              </select>
                        </div>
                      </div><!-- /.form-group -->


<div class="form-group">
                        <label for="Tempat Lahir" class="control-label col-lg-2">Tempat Lahir</label>
                        <div class="col-lg-10">
                          <input type="text" name="tmpt_lahir" value="PANDEGLANG" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Lahir" class="control-label col-lg-2">Tanggal Lahir</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="tgl_lahir" value="2001-08-09" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Agama" class="control-label col-lg-2">Agama</label>
                        <div class="col-lg-10">
                          <select name="id_agama" data-placeholder="Pilih Agama..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <option value='1' selected>Islam</option><option value='2'>Kristen</option><option value='3'>Katholik</option><option value='4'>Hindu</option><option value='5'>Budha</option><option value='6'>Konghuchu</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jalan" class="control-label col-lg-2">Jalan</label>
                        <div class="col-lg-10">
                          <input type="text" name="jln" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="RT" class="control-label col-lg-2">RT</label>
                        <div class="col-lg-10">
                          <input type="text" name="rt" value="1" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="RW" class="control-label col-lg-2">RW</label>
                        <div class="col-lg-10">
                          <input type="text" name="rw" value="4" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Dusun" class="control-label col-lg-2">Dusun</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_dsn" value="Kp. Kebon Cau" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kelurahan" class="control-label col-lg-2">Kelurahan</label>
                        <div class="col-lg-10">
                          <input type="text" name="ds_kel" value="Ds. Palanyar" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
            <div class="form-group">
                <label for="Provinsi" class="control-label col-lg-2">Provinsi</label>
                <div class="col-lg-10">
                    <select name="provinsi_provinsi"  id="provinsi_provinsi" data-placeholder="Pilih Provinsi..." class="form-control chzn-select" tabindex="2" required>
                    <option value=""></option>
                     <option value='010000  '>Prov. D.K.I. Jakarta          </option><option value='020000  '>Prov. Jawa Barat              </option><option value='030000  '>Prov. Jawa Tengah             </option><option value='040000  '>Prov. D.I. Yogyakarta         </option><option value='050000  '>Prov. Jawa Timur              </option><option value='060000  '>Prov. Aceh                    </option><option value='070000  '>Prov. Sumatera Utara          </option><option value='080000  '>Prov. Sumatera Barat          </option><option value='090000  '>Prov. Riau                    </option><option value='100000  '>Prov. Jambi                   </option><option value='110000  '>Prov. Sumatera Selatan        </option><option value='120000  '>Prov. Lampung                 </option><option value='130000  '>Prov. Kalimantan Barat        </option><option value='140000  '>Prov. Kalimantan Tengah       </option><option value='150000  '>Prov. Kalimantan Selatan      </option><option value='160000  '>Prov. Kalimantan Timur        </option><option value='170000  '>Prov. Sulawesi Utara          </option><option value='180000  '>Prov. Sulawesi Tengah         </option><option value='190000  '>Prov. Sulawesi Selatan        </option><option value='200000  '>Prov. Sulawesi Tenggara       </option><option value='210000  '>Prov. Maluku                  </option><option value='220000  '>Prov. Bali                    </option><option value='230000  '>Prov. Nusa Tenggara Barat     </option><option value='240000  '>Prov. Nusa Tenggara Timur     </option><option value='250000  '>Prov. Papua                   </option><option value='260000  '>Prov. Bengkulu                </option><option value='270000  '>Prov. Maluku Utara            </option><option value='280000  ' selected>Prov. Banten                  </option><option value='290000  '>Prov. Bangka Belitung         </option><option value='300000  '>Prov. Gorontalo               </option><option value='310000  '>Prov. Kepulauan Riau          </option><option value='320000  '>Prov. Papua Barat             </option><option value='330000  '>Prov. Sulawesi Barat          </option><option value='340000  '>Prov. Kalimantan Utara</option>                      </select>
                  </div>
              </div><!-- /.form-group -->
              
              <div class="form-group">
                  <label for="Kabupaten" class="control-label col-lg-2">Kabupaten</label>
                  <div class="col-lg-10">
                                    <select name="id_kab" id="kabupaten_kabupaten" data-placeholder="Pilih Kabupaten ..." class="form-control chzn-select" tabindex="2" required>
                    <option value=""></option>
                   <option value='280100  ' selected>Kab. Pandeglang               </option><option value='280200  '>Kab. Lebak                    </option><option value='280300  '>Kab. Tangerang                </option><option value='280400  '>Kab. Serang                   </option><option value='286000  '>Kota Cilegon                  </option><option value='286100  '>Kota Tangerang                </option><option value='286200  '>Kota Serang                   </option><option value='286300  '>Kota tangerang Selatan        </option>                    </select>
                  </div>
              </div><!-- /.form-group -->

<div class="form-group">
                        <label for="Jenis Tinggal" class="control-label col-lg-2">Kecamatan <span style="color:#FF0000">*</span></label>
                        <div class="col-lg-10">
                          <select id="id_kec_tea" name="id_wil" data-placeholder="Pilih Kecamatan..." class="form-control chzn-select" tabindex="2" required="">
               <option value=""></option>
              <option value='280101  '>Kec. Sumur                    </option><option value='280102  '>Kec. Cimanggu                 </option><option value='280103  '>Kec. Cibaliung                </option><option value='280104  '>Kec. Cikeusik                 </option><option value='280105  '>Kec. Cigeulis                 </option><option value='280106  '>Kec. Panimbang                </option><option value='280107  '>Kec. Munjul                   </option><option value='280108  '>Kec. Picung                   </option><option value='280109  '>Kec. Bojong                   </option><option value='280110  '>Kec. Saketi                   </option><option value='280111  '>Kec. Pagelaran                </option><option value='280112  '>Kec. Labuan                   </option><option value='280113  '>Kec. Jiput                    </option><option value='280114  '>Kec. Menes                    </option><option value='280115  '>Kec. Mandalawangi             </option><option value='280116  '>Kec. Cimanuk                  </option><option value='280117  '>Kec. Banjar                   </option><option value='280118  '>Kec. Pandeglang               </option><option value='280119  '>Kec. Cadasari                 </option><option value='280120  '>Kec. Angsana                  </option><option value='280121  '>Kec. Karang Tanjung           </option><option value='280122  '>Kec. Kaduhejo                 </option><option value='280123  '>Kec. Cikedal                  </option><option value='280124  ' selected>Kec. Cipeucang                </option><option value='280125  '>Kec. Cisata                   </option><option value='280126  '>Kec. Patia                    </option><option value='280127  '>Kec. Carita                   </option><option value='280132  '>Kec. Sukaresmi                </option><option value='280133  '>Kec. Mekarjaya                </option><option value='280134  '>Kec. Sindangresmi             </option><option value='280135  '>Kec. Pulosari                 </option><option value='280136  '>Kec. Koroncong                </option><option value='280138  '>Kec. Cibitung                 </option><option value='280139  '>Kec. Majasari                 </option><option value='280140  '>Kec. Sobang                   </option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kodepos" class="control-label col-lg-2">Kodepos</label>
                        <div class="col-lg-10">
                          <input type="text" name="kode_pos" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

<div class="form-group">
                        <label for="Jenis Tinggal" class="control-label col-lg-2">Jenis Tinggal</label>
                        <div class="col-lg-10">
                          <select name="id_jns_tinggal" data-placeholder="Pilih Jenis Tinggal..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'>Bersama orang tua</option><option value='2'>Wali</option><option value='3'>Kost</option><option value='4'>Asrama</option><option value='5'>Panti asuhan</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Tinggal" class="control-label col-lg-2">Alat Transportasi</label>
                        <div class="col-lg-10">
                          <select name="id_alat_transport" id="id_alat_transport" data-placeholder="Pilih Alat Transportasi ..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'>Jalan kaki</option><option value='2'>Kendaraan pribadi</option><option value='3'>Angkutan umum/bus/pete-pete</option><option value='4'>Mobil/bus antar jemput</option><option value='5'>Kereta api</option><option value='6'>Ojek</option><option value='7'>Andong/bendi/sado/dokar/delman/becak</option><option value='8'>Perahu penyeberangan/rakit/getek</option><option value='11'>Kuda</option><option value='12'>Sepeda</option><option value='13'>Sepeda motor</option><option value='14'>Mobil pribadi</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Telepon" class="control-label col-lg-2">Telepon</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="no_tel_rmh" value="" class="form-control"> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="HP" class="control-label col-lg-2">HP</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="no_hp" value="085215736258" class="form-control"> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Email" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                          <input type="text"  data-rule-email="true" name="email" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Kelamin" class="control-label col-lg-2">Penerima KPS ?</label>
                        <div class="col-lg-10">
            <select name="a_terima_kps" data-placeholder="Penerima KPS ? ..." class="form-control chzn-select" tabindex="2" >
              <option value="0" selected>Tidak</option><option value="1">Ya</option>               
              
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Email" class="control-label col-lg-2">No KPS</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_kps" placeholder="no_kps" value="" class="form-control"> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Pendaftaran" class="control-label col-lg-2">Jenis Pendaftaran</label>
                        <div class="col-lg-10">
                          <select name="id_jns_daftar" data-placeholder="Pilih Jenis Pendaftaran ..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'>Lainnya</option><option value='1' selected>Peserta didik baru</option><option value='1'>Peserta didik baru</option><option value='10'>Kelas Ekstensi</option><option value='11'>Alih Jenjang</option><option value='12'>Lintas Jalur</option><option value='13'>Rekognisi Pembelajaran Lampau (RPL)</option><option value='2'>Pindahan</option><option value='3'>Naik kelas</option><option value='4'>Akselerasi</option><option value='5'>Mengulang</option><option value='6'>Lanjutan semester</option><option value='8'>Pindahan Alih Bentuk</option><option value='9'>Putus Sekolah</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Masuk Kuliah" class="control-label col-lg-2">Tanggal Masuk Kuliah</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl3" data-rule-date="true" value="2020-09-21" name="tgl_masuk_sp" placeholder="Tanggal Masuk Kuliah" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Mulai Semester" class="control-label col-lg-2">Mulai Semester</label>
                        <div class="col-lg-10">
                          <input type="text" name="mulai_smt" placeholder="contoh (20091)" value="20201" class="form-control" > 
                        </div>
                      </div><!-- /.form-group --> 
<div class="form-group">
                        <label for="Nomor KTP" class="control-label col-lg-2">NIK Ayah</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="nik_ayah" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

<div class="form-group">
                        <label for="Nama Ayah" class="control-label col-lg-2">Nama Ayah</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_ayah" value="ENCEP LILI SETYADI" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Lahir Ayah" class="control-label col-lg-2">Tanggal Lahir Ayah</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl5" name="tgl_lahir_ayah" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pendidikan Ayah" class="control-label col-lg-2">Pendidikan Ayah</label>
                        <div class="col-lg-10">
                          <select name="id_jenjang_pendidikan_ayah" data-placeholder="Pilih Pendidikan Ayah..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'>Tidak sekolah</option><option value='1'>PAUD</option><option value='2'>TK / sederajat</option><option value='20'>D1</option><option value='21'>D2</option><option value='22'>D3</option><option value='23'>D4</option><option value='25'>Profesi</option><option value='3'>Putus SD</option><option value='30'>S1</option><option value='31'>Profesi</option><option value='32'>Sp-1</option><option value='35'>S2</option><option value='36'>S2 Terapan</option><option value='37'>Sp-2</option><option value='4'>SD / sederajat</option><option value='40'>S3</option><option value='41'>S3 Terapan</option><option value='5'>SMP / sederajat</option><option value='6'>SMA / sederajat</option><option value='7'>Paket A</option><option value='8'>Paket B</option><option value='9'>Paket C</option><option value='90'>Non formal</option><option value='91'>Informal</option><option value='98'>(tidak diisi)</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pekerjaan Ayah" class="control-label col-lg-2">Pekerjaan Ayah</label>
                        <div class="col-lg-10">
                          <select name="id_pekerjaan_ayah" data-placeholder="Pilih Pekerjaan Ayah..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'> </option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan Ayah" class="control-label col-lg-2">Penghasilan Ayah</label>
                        <div class="col-lg-10">
                          <select name="id_penghasilan_ayah" data-placeholder="Pilih Penghasilan Ayah..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'> </option><option value='1'>Kurang dari Rp 1.000.000</option><option value='11'>Kurang dari Rp. 500,000</option><option value='12'>Rp. 500,000 - Rp. 999,999</option><option value='13'>Rp. 1,000,000 - Rp. 1,999,999</option><option value='14'>Rp. 2,000,000 - Rp. 4,999,999</option><option value='15'>Rp. 5,000,000 - Rp. 20,000,000</option><option value='16'>Lebih dari Rp. 20,000,000</option><option value='2'>Rp 1.000.000 - Rp 2.000.000</option><option value='3'>Lebih dari Rp 2.000.000</option><option value='9'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor KTP" class="control-label col-lg-2">NIK Ibu</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="nik_ibu" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Ibu" class="control-label col-lg-2">Nama Ibu</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_ibu_kandung" value="ONAH ROSDIANAH" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Lahir Ibu" class="control-label col-lg-2">Tanggal Lahir Ibu</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl2" data-rule-date="true" name="tgl_lahir_ibu" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pendidikan Ibu" class="control-label col-lg-2">Pendidikan Ibu</label>
                        <div class="col-lg-10">
                          <select name="id_jenjang_pendidikan_ibu" data-placeholder="Pilih Pendidikan Ibu..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'>Tidak sekolah</option><option value='1'>PAUD</option><option value='2'>TK / sederajat</option><option value='20'>D1</option><option value='21'>D2</option><option value='22'>D3</option><option value='23'>D4</option><option value='25'>Profesi</option><option value='3'>Putus SD</option><option value='30'>S1</option><option value='31'>Profesi</option><option value='32'>Sp-1</option><option value='35'>S2</option><option value='36'>S2 Terapan</option><option value='37'>Sp-2</option><option value='4'>SD / sederajat</option><option value='40'>S3</option><option value='41'>S3 Terapan</option><option value='5'>SMP / sederajat</option><option value='6'>SMA / sederajat</option><option value='7'>Paket A</option><option value='8'>Paket B</option><option value='9'>Paket C</option><option value='90'>Non formal</option><option value='91'>Informal</option><option value='98'>(tidak diisi)</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan Ibu" class="control-label col-lg-2">Penghasilan Ibu</label>
                        <div class="col-lg-10">
                          <select name="id_penghasilan_ibu" data-placeholder="Pilih Penghasilan Ibu..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'> </option><option value='1'>Kurang dari Rp 1.000.000</option><option value='11'>Kurang dari Rp. 500,000</option><option value='12'>Rp. 500,000 - Rp. 999,999</option><option value='13'>Rp. 1,000,000 - Rp. 1,999,999</option><option value='14'>Rp. 2,000,000 - Rp. 4,999,999</option><option value='15'>Rp. 5,000,000 - Rp. 20,000,000</option><option value='16'>Lebih dari Rp. 20,000,000</option><option value='2'>Rp 1.000.000 - Rp 2.000.000</option><option value='3'>Lebih dari Rp 2.000.000</option><option value='9'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pekerjaan Ibu" class="control-label col-lg-2">Pekerjaan Ibu</label>
                        <div class="col-lg-10">
                          <select name="id_pekerjaan_ibu" data-placeholder="Pilih Pekerjaan Ibu..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'> </option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_wali" class="control-label col-lg-2">nm_wali</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_wali" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Lahir Wali" class="control-label col-lg-2">Tanggal Lahir Wali</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl4" data-rule-date="true" name="tgl_lahir_wali" value="" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenjang Pendidikan" class="control-label col-lg-2">Jenjang Pendidikan Wali </label>
                        <div class="col-lg-10">
                          <select name="id_jenjang_pendidikan_wali" data-placeholder="Pilih Jenjang Pendidikan..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'>Tidak sekolah</option><option value='1'>PAUD</option><option value='2'>TK / sederajat</option><option value='20'>D1</option><option value='21'>D2</option><option value='22'>D3</option><option value='23'>D4</option><option value='25'>Profesi</option><option value='3'>Putus SD</option><option value='30'>S1</option><option value='31'>Profesi</option><option value='32'>Sp-1</option><option value='35'>S2</option><option value='36'>S2 Terapan</option><option value='37'>Sp-2</option><option value='4'>SD / sederajat</option><option value='40'>S3</option><option value='41'>S3 Terapan</option><option value='5'>SMP / sederajat</option><option value='6'>SMA / sederajat</option><option value='7'>Paket A</option><option value='8'>Paket B</option><option value='9'>Paket C</option><option value='90'>Non formal</option><option value='91'>Informal</option><option value='98'>(tidak diisi)</option><option value='99'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pekerjaan" class="control-label col-lg-2">Pekerjaan Wali</label>
                        <div class="col-lg-10">
                          <select name="id_pekerjaan_wali" data-placeholder="Pilih Pekerjaan..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'> </option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan" class="control-label col-lg-2">Penghasilan Wali</label>
                        <div class="col-lg-10">
                          <select name="id_penghasilan_wali" data-placeholder="Pilih Penghasilan..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='0'> </option><option value='1'>Kurang dari Rp 1.000.000</option><option value='11'>Kurang dari Rp. 500,000</option><option value='12'>Rp. 500,000 - Rp. 999,999</option><option value='13'>Rp. 1,000,000 - Rp. 1,999,999</option><option value='14'>Rp. 2,000,000 - Rp. 4,999,999</option><option value='15'>Rp. 5,000,000 - Rp. 20,000,000</option><option value='16'>Lebih dari Rp. 20,000,000</option><option value='2'>Rp 1.000.000 - Rp 2.000.000</option><option value='3'>Lebih dari Rp 2.000.000</option><option value='9'>Lainnya</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Penghasilan" class="control-label col-lg-2">Jenis Pembiayaan</label>
                        <div class="col-lg-10">
                          <select name="id_pembiayaan" data-placeholder="Jenis Pembiayaan..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <option value='1'>Mandiri</option><option value='2'>Beasiswa Tidak Penuh</option><option value='3'>Beasiswa Penuh</option>              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="biaya_masuk_kuliah" class="control-label col-lg-2">Biaya Masuk Kuliah</label>
                        <div class="col-lg-10">
                          <input type="number" name="biaya_masuk_kuliah" value="0" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jurusan" class="control-label col-lg-2">Prodi</label>
                        <div class="col-lg-10">
                          <select name="kode_jurusan" data-placeholder="Pilih Jurusan..." class="form-control chzn-select" tabindex="2" required>

                             </select>
                        </div>
                      </div><!-- /.form-group -->
                      <input type="hidden" name="id" value="96">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <a onclick="window.history.back(-1)" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
           <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button> </div>
             
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 <script type="text/javascript">
                       $("#provinsi_provinsi").change(function(){

                        $.ajax({
                        type : "post",
                        url : "http://localhost/feeder-production/admina/modul/mahasiswa/get_kabupaten.php",
                        data : {provinsi:this.value},
                        success : function(data) {
                            $("#kabupaten_kabupaten").html(data);
                            $("#kabupaten_kabupaten").trigger("chosen:updated");

                        }
                    });

                  });

                    $("#kabupaten_kabupaten").change(function(){

                        $.ajax({
                        type : "post",
                        url : "http://localhost/feeder-production/admina/modul/mahasiswa/get_kec.php",
                        data : {id_kab:this.value},
                        success : function(data) {
                            $("#id_kec_tea").html(data);
                            $("#id_kec_tea").trigger("chosen:updated");

                        }
                    });

                  });
 </script> </div> <!--content wrapper -->
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2020 <a href="https://www.youtube.com/channel/UCwk88P5Uc-fVcpfg-puDB_A">Budi Raharjo, S.Kom</a>.</strong> STKIP Babunnajah.
      </footer>

    </div><!-- ./wrapper -->


     <!--form asset -->
 <!-- jQuery 2.1.3 -->
   <script src="asset_s/login/js/jqueryform.js"></script>
  <script src="asset_s/login/js/validate.js"></script>
      <script src="asset_s/plugins/ckeditor/ckeditor.js"></script>

     <script src="asset_s/plugins/ckeditor/adapters/jquery.js"></script>
<!-- ckeditor and kcfinder integration config -->
<script type="text/javascript">
  $('textarea.editbox' ).ckeditor({
    filebrowserBrowseUrl: 'asset_splugins/kcfinder/browse.php?type=files',
filebrowserImageBrowseUrl: 'asset_s/plugins/kcfinder/browse.php?type=images',
filebrowserFlashBrowseUrl: 'asset_s/plugins/kcfinder/browse.php?type=flash',
filebrowserUploadUrl: 'asset_s/plugins/kcfinder/upload.php?type=files',
filebrowserImageUploadUrl: 'asset_s/plugins/kcfinder/upload.php?type=images',
filebrowserFlashUploadUrl: 'asset_s/plugins/kcfinder/upload.php?type=flash'
  });
</script>
<!--fancy box -->
<script type="text/javascript" src="asset_s/plugins/fancybox/jquery.fancybox.js"></script>
 <link rel="stylesheet" type="text/css" href="asset_s/plugins/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
 <script type="text/javascript">
 $(document).ready(function() {
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    loop : false
  });

});
 </script>

      <script src="asset_s/dist/js/input.js"></script>
       <script src="asset_s/dist/js/update.js"></script>
     <!--delete script-->
    <script src="asset_s/dist/js/delete.js"></script>
         <script src="asset_s/dist/js/pass_up.js"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="asset_s/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
     <script src='asset_s/plugins/fastclick/fastclick.min.js'></script>
   <!-- AdminLTE App -->
    <script src="asset_s/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="asset_s/dist/js/demo.js" type="text/javascript"></script>
  <!--image upload preview -->
     <script src="asset_s/plugins/holder/holder.js" type="text/javascript"></script>
     <script src="asset_s/plugins/holder/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!-- date-picker -->
        <script src="asset_s/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--switch button -->
     <script src="asset_s/plugins/switch/bootstrap-switch.min.js" type="text/javascript"></script>
      <!--switch button -->
     <script src="asset_s/plugins/chosen/chosen.jquery.min.js" type="text/javascript"></script>


    <script type="text/javascript">
    $(function(){

                $.each($('.make-switch'), function () {
        $(this).bootstrapSwitch({
            onText: $(this).data('onText'),
            offText: $(this).data('offText'),
            onColor: $(this).data('onColor'),
            offColor: $(this).data('offColor'),
            size: $(this).data('size'),
            labelText: $(this).data('labelText')
        });
    });

   //hapus multi foto
    $(".foto_banyak").on('click','.hapus_foto',function() {
        $(this).parent().remove();
        });
    //chosen select
    $(".chzn-select").chosen();
    $(".chzn-select-deselect").chosen({
        allow_single_deselect: true
    });

    });


    //multi image append
      function add_multi(val)
{

 $("#add_next").append('<div class="fileinput fileinput-new" data-provides="fileinput"> <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"> <img data-src="holder.js/100%x100%" alt="100%x100%" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE5MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjY5LjA1NDY4NzUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTkweDE0MDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 100%; width: 100%; display: block;"> </div> <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div> <span class="btn btn-danger hapus_foto"><i class="fa fa-trash"></i></span> <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span class="fileinput-exists">Change</span> <input type="file" accept="image/*" name="foto_banyak[]"> </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div> </div>');


}
</script>
    <!-- Bootstrap WYSIHTML5 -->
<script src="asset_s/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

    <!-- always show up -->
  <script src="asset_s/plugins/fakeloader/fakeLoader.min.js"></script>
         <!-- add new calendar event modal -->
 <script>
            $(document).ready(function(){


                $(".fakeloader").fakeLoader({

            timeToHide:100, //Time in milliseconds for fakeLoader disappear
            zIndex:999, // Default zIndex
          //  spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
          //  bgColor:"#2ecc71", //Hex, RGB or RGBA colors
                    bgColor:"#00a65a",
                    spinner:"spinner2"
                });
            });
        </script>
  </body>
</html>
