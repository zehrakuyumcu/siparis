<! DOCTYPE html>
<html lang= head > "en" >>
    <meta charSet="UTF-8">
    <meta httpEquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOK</title>
</head>
<body>
<div className="grid">
    <div className="grid-header">
        <i className="fa fa-align-left"/>
        <span className="grid-title">Stoklar / Hizmetler Ekle / Düzenle</span>
        <div className="pull-right grid-tools">

            <a title="Stok Kartı Alan Ayarları" href="firma-sabit-bilgileri.php?nerden=stokayarlari"
               className="btn btn-warning btn-xs btn-radius" style="color:#fff;"><i><i className="fa fa-circle"/> Alan
                Ayarları</a>
        </div>
    </div>
    <div className="grid-body">
        <form role="form" action="" method="post" className="form-horizontal" encType="multipart/form-data">
            <div className="form-group">
                <label className="col-sm-3 control-label">Stok Kategorileri</label>
                <div className="col-sm-5">
                    <div className="select2-container form-control" id="s2id_e2"><a href="javascript:void(0)"
                                                                                    className="select2-choice"
                                                                                    tabIndex="-1"> <span
                        className="select2-chosen" id="select2-chosen-2">Seçiniz</span><abbr
                        className="select2-search-choice-close"/> <span className="select2-arrow"
                                                                        role="presentation"><b
                        role="presentation"/></span></a><label htmlFor="s2id_autogen2"
                                                               className="select2-offscreen"/><input
                        className="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button"
                        aria-labelledby="select2-chosen-2" id="s2id_autogen2"></div>
                    <select name="kategori" className="form-control select2-offscreen" id="e2" tabIndex="-1" title="">
                        <option value="">Seçiniz</option>

                    </select>

                </div>
                <a href="#" className="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModalStokKatEkle"
                   onClick="konumlan_stokkatekle();"><i className="fa fa-plus"/> Yeni Kategori Ekle</a>

                <label className="col-sm-3 control-label">Stok / Hizmet Kodu</label>
                <div className="col-sm-5">
                    <input type="text" onBlur="stok_kontrol('stok_kodu',this.value)" id="stok_kodu" name="stok_kodu"
                           value="" placeholder="" className="form-control">


                    <span id="stok_kodu_durum" style="color:;"/>
                </div>

                <label className="col-sm-3 control-label">Barkod / Karekod Kodu</label>
                <div className="col-sm-5">
                    <input type="text" onBlur="stok_kontrol('barkod_kodu',this.value)" id="barkod_kodu"
                           name="barkod_kodu" value="" placeholder="" className="form-control">

                    <span id="barkod_kodu_durum" style="display:none;"/>
                </div>

                <label className="col-sm-3 control-label">Oem Kodu</label>
                <div className="col-sm-5">
                    <input type="text" name="oem_no" value="" placeholder="" className="form-control">

                </div>

            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Stok / Hizmet Adı</label>
                <div className="col-sm-5">
                    <input type="text" name="hizmet_kalemi" onBlur="stok_kontrol('hizmet_kalemi',this.value)"
                           id="hizmet_kalemi" value="" placeholder="" className="form-control">

                        <span id="hizmet_kalemi_durum" style="display:none;"/>
                </div>
            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Birimi</label>
                <div className="col-sm-5">
                    <select name="satis_birimi" className="form-control" id="satis_birimi">
                        <option value="">Seçiniz</option>
                        <option value="1" selected="">Adet</option>

                        <option value="2">Düzine</option>

                        <option value="3">Gr</option>


                        <option value="4">Kg</option>

                        <option value="5">Koli</option>


                        <option value="6">Kutu</option>



                        <option value="7">Paket (Pack)</option>

                        <option value="8">Paket (Packet)</option>


                        <option value="9">Ton</option>

                        <option value="10">Torba</option>




                    </select>

                </div>
            </div>

            <div className="form-group">
                <label className="col-sm-3 control-label">Alış Fiyatı</label>
                <div className="col-sm-5">
                    <input type="text" name="alis_fiyati" value="" placeholder="" className="form-control">

                </div>
            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Satış Fiyatı</label>
                <div className="col-sm-5">
                    <input type="text" name="satis_fiyati" value="" placeholder="" className="form-control">

                </div>
            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Satış Fiyatı 2</label>
                <div className="col-sm-5">
                    <input type="text" name="satis_fiyati_2" value="" placeholder="" className="form-control">

                </div>
            </div>

            <div className="form-group">
                <label className="col-sm-3 control-label">Marka</label>
                <div className="col-sm-5">
                    <select placeholder="" name="marka" id="marka" className="form-control">
                        <option value="">Seçiniz</option>

                    </select>

                </div>
                <div className="col-sm-1">
                    <a href="stok-markalar.php" target="_blank"
                       title="Sistem Menüsünden MARKALAR tanımını yapabilirsiniz" className="btn btn-warning radius"><i
                        style="font-size:14px;" className="fa fa-question-circle"/></a>
                </div>
            </div>


            <div className="form-group">
                <label className="col-sm-3 control-label">Renk</label>
                <div className="col-sm-5">
                    <input type="text" name="renk" value="" placeholder="" className="form-control">

                </div>
            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Boyutları</label>
                <div className="col-sm-1">
                    <input type="text" name="boyut_en" value="" placeholder="En" className="form-control">
                </div>
                <div className="col-sm-1">
                    <input type="text" name="boyut_boy" value="" placeholder="Boy" className="form-control">
                </div>
                <div className="col-sm-1">
                    <input type="text" name="boyut_birim" value="" placeholder="Yükseklik" className="form-control">
                </div>

            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Stok Takibi Yapılsın Mı ?</label>
                <div className="col-sm-5">
                    <select name="takip" className="form-control" id="takip">
                        <option value="0" selected="">Hayır</option>
                        <option value="1" selected="">Evet</option>


                    </select>

                </div>
            </div>


            <div className="form-group">
                <label className="col-sm-3 control-label">İlk Sayım Miktarı</label>
                <div className="col-sm-5">
                    <input type="text" name="ilk_sayim_miktari" value="" placeholder="" className="form-control">

                </div>
            </div>
            <div className="form-group">
                <label className="col-sm-3 control-label">Raf Yeri</label>
                <div className="col-sm-5">
                    <input type="text" name="raf_yeri" value="" placeholder="" className="form-control">

                </div>
            </div>


            <div className="form-group">
                <label className="col-sm-3 control-label">Stok Bilgi Notu</label>
                <div className="col-sm-9">
                    <textarea name="bilgi_notu" rows="10" className="form-control"/>

                </div>
            </div>

            <div className="form-group" style="padding-top:20px;">
                <label className="col-sm-3 control-label">Stok Resim Ekle / Değiştir<br>150 x 150 px</label>
                <div className="col-sm-6">
                    <input type="file" name="stok_resmi" className="file">
                        <input type="hidden" name="stok_resmi_mevcut" className="" value="">
                </div>
            </div>
            <div className="form-group" style="padding-top:20px;">
                <label className="col-sm-3 control-label">Stok Ekleme Sonrası Hangi Sayfaya Gidilsin ?</label>
                <div className="col-sm-6">
                    <select className="form-control" name="sonragit">
                        <option value="yenistok">Yeni Stok</option>
                        <option value="stoklistesi">Stok Listesi</option>
                    </select>
                </div>

            </div>

            <div className="form-group">


                <label className="col-sm-3 control-label"/>
                <div className="col-sm-7">
                    <input type="hidden" name="idx" value="y">

                        <button className="btn btn-success btn-radius" type="submit">Kaydet</button>
                        <a href="stoklar-hizmetler.php">
                            <button className="btn btn-danger btn-radius" type="button">Vazgeç</button>
                        </a>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>




