<!doctype html>
<html lang="en" style="min-height: 1021px">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="content">
    <div class="grid">
        <div class="grid-header">
            <i class="fa fa-align-left"></i>
            <span class="grid-title">Müşteri Ekle / Düzenle</span>
            <div class="pull-right grid-tools">
                <div class="btn-group dropworn" style="margin-right:100px;">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> İşlemler <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">




                        <li><a onclick="function confirmDel() {
                        return undefined;
                        }
                        return confirmDel('');" href="musteri-ekle.php"><i class="fa fa-eraser"></i>&nbsp;&nbsp; Sil</a></li>


                    </ul>

        </div>
        <div class="grid-body">
            <form role="form" id="form" method="post" action="" class="form form-horizontal">
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Müşteri Bilgileri</a></li>

                        <li><a href="#settings" data-toggle="tab">Bilgi Notu</a></li>

                        <li><a href="#ekdosya" data-toggle="tab">Belgeler</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  active " id="home">

                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Ad Soyad / Ünvan</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control validate[required]" name="firma_unvan" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-Posta</label>
                                <div class="col-sm-7">
                                    <label for="firma_eposta"></label><input type="text" class="form-control" id="firma_eposta" name="firma_eposta" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telefon</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="firma_telefon" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Adresi</label>
                                <div class="col-sm-7">
                                    <label>
                                        <textarea rows="3" name="firma_adresi" class="form-control"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Web Sitesi</label>
                                <div class="col-sm-5">
                                    <label>
                                        <input type="text" class="form-control" name="www" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Posta Kodu</label>
                                <div class="col-sm-5">
                                    <label>
                                        <input type="text" class="form-control" name="postakodu" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">İL</label>
                                <div class="col-sm-5">
                                    <label for="musteri_il"></label><select id="musteri_il" name="musteri_il" onchange="ilce_getir(this.value);" class="form-control" placeholder="ilce_getir">
                                        <option value="">Seçiniz</option>
                                        <option value="1">ADANA</option>
                                        <option value="2">ADIYAMAN</option>
                                        <option value="3">AFYONKARAHİSAR</option>
                                        <option value="4">AĞRI</option>
                                        <option value="5">AKSARAY</option>
                                        <option value="6">AMASYA</option>
                                        <option value="7">ANKARA</option>
                                        <option value="8">ANTALYA</option>
                                        <option value="9">ARDAHAN</option>
                                        <option value="10">ARTVİN</option>
                                        <option value="11">AYDIN</option>
                                        <option value="12">BALIKESİR</option>
                                        <option value="13">BARTIN</option>
                                        <option value="14">BATMAN</option>
                                        <option value="15">BAYBURT</option>
                                        <option value="16">BİLECİK</option>
                                        <option value="17">BİNGÖL</option>
                                        <option value="18">BİTLİS</option>
                                        <option value="19">BOLU</option>
                                        <option value="20">BURDUR</option>
                                        <option value="21">BURSA</option>
                                        <option value="22">ÇANAKKALE</option>
                                        <option value="23">ÇANKIRI</option>
                                        <option value="24">ÇORUM</option>
                                        <option value="25">DENİZLİ</option>
                                        <option value="26">DİYARBAKIR</option>
                                        <option value="27">DÜZCE</option>
                                        <option value="28">EDİRNE</option>
                                        <option value="29">ELAZIĞ</option>
                                        <option value="30">ERZİNCAN</option>
                                        <option value="31">ERZURUM</option>
                                        <option value="32">ESKİŞEHİR</option>
                                        <option value="33">GAZİANTEP</option>
                                        <option value="34">GİRESUN</option>
                                        <option value="35">GÜMÜŞHANE</option>
                                        <option value="36">HAKKARİ</option>
                                        <option value="37">HATAY</option>
                                        <option value="38">IĞDIR</option>
                                        <option value="39">ISPARTA</option>
                                        <option value="40">İSTANBUL</option>
                                        <option value="41">İZMİR</option>
                                        <option value="42">KAHRAMANMARAŞ</option>
                                        <option value="43">KARABÜK</option>
                                        <option value="44">KARAMAN</option>
                                        <option value="45">KARS</option>
                                        <option value="46">KASTAMONU</option>
                                        <option value="47">KAYSERİ</option>
                                        <option value="82">KIBRIS</option>
                                        <option value="51">KİLİS</option>
                                        <option value="48">KIRIKKALE</option>
                                        <option value="49">KIRKLARELİ</option>
                                        <option value="50">KIRŞEHİR</option>
                                        <option value="52">KOCAELİ</option>
                                        <option value="53">KONYA</option>
                                        <option value="54">KÜTAHYA</option>
                                        <option value="55">MALATYA</option>
                                        <option value="56">MANİSA</option>
                                        <option value="57">MARDİN</option>
                                        <option value="58">MERSİN</option>
                                        <option value="59">MUĞLA</option>
                                        <option value="60">MUŞ</option>
                                        <option value="61">NEVŞEHİR</option>
                                        <option value="62">NİĞDE</option>
                                        <option value="63">ORDU</option>
                                        <option value="64">OSMANİYE</option>
                                        <option value="65">RİZE</option>
                                        <option value="66">SAKARYA</option>
                                        <option value="67">SAMSUN</option>
                                        <option value="71">ŞANLIURFA</option>
                                        <option value="68">SİİRT</option>
                                        <option value="69">SİNOP</option>
                                        <option value="72">ŞIRNAK</option>
                                        <option value="70">SİVAS</option>
                                        <option value="73">TEKİRDAĞ</option>
                                        <option value="74">TOKAT</option>
                                        <option value="75">TRABZON</option>
                                        <option value="76">TUNCELİ</option>
                                        <option value="77">UŞAK</option>
                                        <option value="78">VAN</option>
                                        <option value="79">YALOVA</option>
                                        <option value="80">YOZGAT</option>
                                        <option value="81">ZONGULDAK</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">İlçe</label>
                                <div class="col-sm-5">
                                    <label for="musteri_ilce"></label><select id="musteri_ilce" name="musteri_ilce" class="form-control" placeholder="">

                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ülke</label>
                                <div class="col-sm-5">
                                    <label for="musteri_ulke"></label><select id="musteri_ulke" name="musteri_ulke" onchange="if (this.value!==190) { document.getElementById('musteri_il').value='' ; document.getElementById('musteri_ilce').value='' ; }" class="form-control" placeholder="">
                                        <option value="">Seçiniz</option>
                                        <option value="1">Abhazya</option>
                                        <option value="2">Afganistan</option>
                                        <option value="3">Almanya</option>
                                        <option value="4">Amerika Birleşik Devletleri</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Antigua ve Barbuda</option>
                                        <option value="8">Arjantin</option>
                                        <option value="9">Arnavutluk</option>
                                        <option value="10">Avustralya</option>
                                        <option value="11">Avusturya</option>
                                        <option value="12">Azerbaycan</option>
                                        <option value="13">Bahamalar</option>
                                        <option value="14">Bahreyn</option>
                                        <option value="15">Bangladeş</option>
                                        <option value="16">Barbados</option>
                                        <option value="17">Batı Sahra</option>
                                        <option value="18">Belarus</option>
                                        <option value="19">Belçika</option>
                                        <option value="20">Belize</option>
                                        <option value="21">Benin</option>
                                        <option value="22">Bhutan</option>
                                        <option value="23">Birleşik Arap Emirlikleri</option>
                                        <option value="24">Bolivya</option>
                                        <option value="25">Bosna Hersek</option>
                                        <option value="26">Botsvana</option>
                                        <option value="27">Brezilya</option>
                                        <option value="28">Brunei</option>
                                        <option value="29">Bulgaristan</option>
                                        <option value="30">Burkina Faso</option>
                                        <option value="31">Burundi</option>
                                        <option value="34">Çad</option>
                                        <option value="35">Çek Cumhuriyeti</option>
                                        <option value="32">Cezayir</option>
                                        <option value="33">Cibuti Cumhuriyeti</option>
                                        <option value="36">Çin Halk Cumhuriyeti</option>
                                        <option value="37">Dağlık Karabağ Cumhuriyeti</option>
                                        <option value="38">Danimarka</option>
                                        <option value="39">Doğu Timor</option>
                                        <option value="40">Dominik Cumhuriyeti</option>
                                        <option value="41">Dominika</option>
                                        <option value="42">Ekvador</option>
                                        <option value="43">Ekvator Ginesi</option>
                                        <option value="44">El Salvador</option>
                                        <option value="45">Endonezya</option>
                                        <option value="46">Eritre</option>
                                        <option value="47">Ermenistan</option>
                                        <option value="48">Estonya</option>
                                        <option value="49">Etiyopya</option>
                                        <option value="50">Fas</option>
                                        <option value="51">Fiji</option>
                                        <option value="52">Fildişi Sahilleri</option>
                                        <option value="53">Filipinler</option>
                                        <option value="54">Filistin</option>
                                        <option value="55">Finlandiya</option>
                                        <option value="56">Fransa</option>
                                        <option value="57">Gabon</option>
                                        <option value="58">Gambiya</option>
                                        <option value="59">Gana</option>
                                        <option value="61">Gine</option>
                                        <option value="60">Gine Bissau</option>
                                        <option value="62">Grenada</option>
                                        <option value="64">Guatemala</option>
                                        <option value="65">Güney Afrika Cumhuriyeti</option>
                                        <option value="66">Güney Kore</option>
                                        <option value="67">Güney Osetya</option>
                                        <option value="68">Gürcistan</option>
                                        <option value="63">Guyana</option>
                                        <option value="69">Haiti</option>
                                        <option value="71">Hindistan</option>
                                        <option value="70">Hırvatistan</option>
                                        <option value="72">Hollanda</option>
                                        <option value="73">Honduras</option>
                                        <option value="75">İngiltere</option>
                                        <option value="74">Irak</option>
                                        <option value="76">İran</option>
                                        <option value="77">İrlanda</option>
                                        <option value="78">İspanya</option>
                                        <option value="79">İsrail</option>
                                        <option value="80">İsveç</option>
                                        <option value="81">İsviçre</option>
                                        <option value="82">İtalya</option>
                                        <option value="83">İzlanda</option>
                                        <option value="84">Jamaika</option>
                                        <option value="85">Japonya</option>
                                        <option value="86">Kamboçya</option>
                                        <option value="87">Kamerun</option>
                                        <option value="88">Kanada</option>
                                        <option value="89">Karadağ</option>
                                        <option value="90">Katar</option>
                                        <option value="91">Kazakistan</option>
                                        <option value="92">Kenya</option>
                                        <option value="95">Kiribati</option>
                                        <option value="94">Kıbrıs Cumhuriyeti</option>
                                        <option value="93">Kırgızistan</option>
                                        <option value="96">Kolombiya</option>
                                        <option value="97">Komorlar</option>
                                        <option value="98">Kongo</option>
                                        <option value="99">Kongo Demokratik Cumhuriyeti</option>
                                        <option value="100">Kosova</option>
                                        <option value="101">Kosta Rika</option>
                                        <option value="105">Küba</option>
                                        <option value="102">Kuveyt</option>
                                        <option value="103">Kuzey Kıbrıs Türk Cumhuriyeti</option>
                                        <option value="104">Kuzey Kore</option>
                                        <option value="106">Lakota Cumhuriyeti</option>
                                        <option value="107">Laos</option>
                                        <option value="108">Lesotho</option>
                                        <option value="109">Letonya</option>
                                        <option value="110">Liberya</option>
                                        <option value="111">Libya</option>
                                        <option value="112">Liechtenstein</option>
                                        <option value="113">Litvanya</option>
                                        <option value="114">Lübnan</option>
                                        <option value="115">Lüksemburg</option>
                                        <option value="116">Macaristan</option>
                                        <option value="117">Madagaskar</option>
                                        <option value="118">Makedonya Cumhuriyeti</option>
                                        <option value="119">Malavi</option>
                                        <option value="120">Maldivler</option>
                                        <option value="121">Malezya</option>
                                        <option value="122">Mali</option>
                                        <option value="123">Malta</option>
                                        <option value="124">Marshall Adaları</option>
                                        <option value="125">Meksika</option>
                                        <option value="127">Mikronezya</option>
                                        <option value="126">Mısır</option>
                                        <option value="128">Moğolistan</option>
                                        <option value="129">Moldova</option>
                                        <option value="130">Monako</option>
                                        <option value="131">Moritanya</option>
                                        <option value="132">Moritus</option>
                                        <option value="133">Mozambik</option>
                                        <option value="134">Myanmar</option>
                                        <option value="135">Namibya</option>
                                        <option value="136">Nauru</option>
                                        <option value="137">Nepal</option>
                                        <option value="139">Nijer</option>
                                        <option value="140">Nijerya</option>
                                        <option value="138">Nikaragua</option>
                                        <option value="141">Norveç</option>
                                        <option value="142">Orta Afrika Cumhuriyeti</option>
                                        <option value="143">Özbekistan</option>
                                        <option value="144">Pakistan</option>
                                        <option value="145">Palau</option>
                                        <option value="146">Panama</option>
                                        <option value="147">Papua Yeni Gine</option>
                                        <option value="148">Paraguay</option>
                                        <option value="149">Peru</option>
                                        <option value="150">Polonya</option>
                                        <option value="151">Portekiz</option>
                                        <option value="152">Romanya</option>
                                        <option value="153">Ruanda</option>
                                        <option value="154">Rusya Federasyonu</option>
                                        <option value="155">Saint Kitts ve Nevis</option>
                                        <option value="156">Saint Lucia</option>
                                        <option value="157">Saint Vincent ve Grenadinler</option>
                                        <option value="158">Samoa</option>
                                        <option value="159">San Marino</option>
                                        <option value="160">Sao Tome ve Principe</option>
                                        <option value="161">Sealand</option>
                                        <option value="162">Senegal</option>
                                        <option value="163">Seyşeller</option>
                                        <option value="165">Sierra Leone</option>
                                        <option value="178">Şili</option>
                                        <option value="166">Singapur</option>
                                        <option value="164">Sırbistan</option>
                                        <option value="167">Slovakya</option>
                                        <option value="168">Slovenya</option>
                                        <option value="169">Solomon Adaları</option>
                                        <option value="170">Somali</option>
                                        <option value="171">Somaliland</option>
                                        <option value="172">Sri Lanka</option>
                                        <option value="173">Sudan</option>
                                        <option value="174">Surinam</option>
                                        <option value="176">Suriye</option>
                                        <option value="175">Suudi Arabistan</option>
                                        <option value="177">Svaziland</option>
                                        <option value="179">Tacikistan</option>
                                        <option value="180">Tamil Eelam</option>
                                        <option value="181">Tanzanya</option>
                                        <option value="182">Tayland</option>
                                        <option value="183">Tayvan</option>
                                        <option value="184">Togo</option>
                                        <option value="185">Tonga</option>
                                        <option value="186">Transdinyester</option>
                                        <option value="187">Trinidad ve Tobago</option>
                                        <option value="188">Tunus</option>
                                        <option value="190" selected="">Türkiye</option>
                                        <option value="191">Türkmenistan</option>
                                        <option value="189">Tuvalu</option>
                                        <option value="192">Uganda</option>
                                        <option value="193">Ukrayna</option>
                                        <option value="194">Umman</option>
                                        <option value="196">Ürdün</option>
                                        <option value="195">Uruguay</option>
                                        <option value="197">Vanuatu</option>
                                        <option value="198">Vatikan</option>
                                        <option value="199">Venezuela</option>
                                        <option value="200">Vietnam</option>
                                        <option value="201">Yemen</option>
                                        <option value="202">Yeni Zelanda</option>
                                        <option value="203">Yeşil Burun</option>
                                        <option value="204">Yunanistan</option>
                                        <option value="205">Zambiya</option>
                                        <option value="206">Zimbabve</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Müşteri Tipleri</label>
                                <div class="col-sm-5">
                                    <div class="select2-container select2-container-multi populate" id="s2id_e2" style="width: 100%;"><ul class="select2-choices">  <li class="select2-search-field">    <label for="s2id_autogen2" class="select2-offscreen"></label>    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen2" placeholder="" style="width: 291px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   <li class="select2-no-results">No matches found</li></ul></div></div>
                                    <label for="e2"></label><select multiple="" id="e2" name="musteri_tipi[]" class="populate select2-offscreen" placeholder="Yeni Müşteri Tipi Tanımı içi yandaki butona tıklayabilirsiniz" style="width:100%;" tabindex="-1">
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <a href="musteri-tipleri.php" target="_blank" title="Müşteri Tipi Eklemek / Listelemek için tıklayınız..." class="btn btn-warning">...</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Aynı zamanda Tedarikçi mi ?</label>
                                <div class="col-sm-3">
                                    <label for="hesap_tipi"></label><select name="hesap_tipi" id="hesap_tipi" class="form-control">
                                        <option value="off">Hayır</option>
                                        <option value="on">Evet</option>
                                    </select>

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kuruluş / Doğum Tarihi</label>
                                <div class="col-sm-3">
                                    <div class="input-group date form_date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input3">
                                        <label>
                                            <input type="text" class="form-control" value="" name="dogum_tarihi">
                                        </label>
                                        <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Müşteri Durumu</label>
                                <div class="col-sm-3">
                                    <label for="durum"></label><select name="durum" id="durum" class="form-control">
                                        <option value="on">Aktif</option>
                                        <option value="off">Pasif</option>
                                    </select>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane" id="profile">
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">T.C. Numarası
                                </label>
                                <div class="col-sm-7">
                                    <label for="firma_tcno"></label><input onchange="" type="text" class="form-control" id="firma_tcno" name="firma_tcno" value="">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label">N11 Müşteri ID</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="n11musteriid" value="">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="messages">
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Firma Yetkilisi</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="firma_yetkili" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Firma Yetkili Telefon</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="firma_yetkili_telefon" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Firma Yetkili E-Posta</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_1_eposta" value="">
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">2.Firma Yetkilisi</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_2" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">2.Firma Yetkili Telefon</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_2_telefon" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">2.Firma Yetkili E-Posta</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_2_eposta" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">3.Firma Yetkilisi</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_3" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">3.Firma Yetkili Telefon</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_3_telefon" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">3.Firma Yetkili E-Posta</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_3_eposta" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">4.Firma Yetkilisi</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_4" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">4.Firma Yetkili Telefon</label>
                                <div class="col-sm-7">
                                    <label>
                                        <input type="text" class="form-control" name="yetkili_4_telefon" value="">
                                    </label>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane" id="settings">
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Bilgi Notu</label>
                                <div class="col-sm-7">
                                    <label>
                                        <textarea rows="2" name="bilgi_notu" class="form-control"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Bilgi Notu 2</label>
                                <div class="col-sm-7">
                                    <label>
                                        <textarea rows="2" name="bilgi_notu_2" class="form-control"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Bilgi Notu 3</label>
                                <div class="col-sm-7">
                                    <label>
                                        <textarea rows="2" name="bilgi_notu_3" class="form-control"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label class="col-sm-3 control-label">Bilgi Notu 4</label>
                                <div class="col-sm-7">
                                    <label>
                                        <textarea rows="2" name="bilgi_notu_4" class="form-control"></textarea>
                                    </label>
                                </div>
                            </div>


                        </div>



                        <div class="tab-pane " id="ekdosya">
                            <button style="display:block;margin-top:20px;" type="button" data-toggle="modal" data-target="#modalBelge" class="btn btn-primary no-print" title="Belge Ekle">
                                Belge Ekle <i class="fa fa-file"></i>
                            </button>
                            <div class="table-responsive">
                                <table id="dataTables1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sıra</th>
                                        <th>Belge Türü/Adı</th>
                                        <th>Belge</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    </tbody>
                                </table>
                            </div>


                        </div>



                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-7">
                        <input type="hidden" name="idx" value="y">
                        <button class="btn btn-success btn-radius" type="submit">Kaydet</button>
                        <a href="musteriler.php"><button class="btn btn-danger btn-radius" type="button">Vazgeç</button></a>
                    </div>

                </div>
            </form>
        </div>
    </div>


</section>
</body>
</html>