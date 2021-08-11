<?php
<div class="grid">
							<div class="grid-header">
								<i class="fa fa-align-left"></i>
								<span class="grid-title">Stoklar / Hizmetler Ekle / Düzenle</span>
								<div class="pull-right grid-tools">

																		<a title="Stok Kartı Alan Ayarları" href="firma-sabit-bilgileri.php?nerden=stokayarlari" class="btn btn-warning btn-xs btn-radius" style="color:#fff;"><i class="fa fa-circle"></i> Alan Ayarları</a>
								</div>
							</div>
							<div class="grid-body">
															<form role="form" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
																		<div class="form-group">
										<label class="col-sm-3 control-label">Stok Kategorileri</label>
										<div class="col-sm-5">
											<div class="select2-container form-control" id="s2id_e2"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Seçiniz</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"></div><select name="kategori" class="form-control select2-offscreen" id="e2" tabindex="-1" title="">
												<option value="">Seçiniz</option>

											</select>

										</div>
										<a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModalStokKatEkle" onclick="konumlan_stokkatekle();"><i class="fa fa-plus"></i> Yeni Kategori Ekle</a>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Stok / Hizmet Kodu</label>
										<div class="col-sm-5">
											<input type="text" onblur="stok_kontrol('stok_kodu',this.value)" id="stok_kodu" name="stok_kodu" value="" placeholder="" class="form-control">


										<span id="stok_kodu_durum" style="display:none;"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Barkod / Karekod Kodu</label>
										<div class="col-sm-5">
											<input type="text" onblur="stok_kontrol('barkod_kodu',this.value)" id="barkod_kodu" name="barkod_kodu" value="" placeholder="" class="form-control">

										<span id="barkod_kodu_durum" style="display:none;"></span>
										</div>
									</div>
																		<div class="form-group">
										<label class="col-sm-3 control-label">Oem Kodu</label>
										<div class="col-sm-5">
											<input type="text" name="oem_no" value="" placeholder="" class="form-control">

										</div>

									</div>
																		<div class="form-group">
										<label class="col-sm-3 control-label">Stok / Hizmet Adı</label>
										<div class="col-sm-5">
											<input type="text" name="hizmet_kalemi" onblur="stok_kontrol('hizmet_kalemi',this.value)" id="hizmet_kalemi" value="" placeholder="" class="form-control">

										<span id="hizmet_kalemi_durum" style="display:none;"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Birimi</label>
										<div class="col-sm-5">
											<select name="satis_birimi" class="form-control" id="satis_birimi">
												<option value="">Seçiniz</option>
																										<option value="160" selected="">Adet</option>

																											<option value="180">Ay</option>

																											<option value="181">cc</option>

																											<option value="177">Çift</option>

																											<option value="164">Cm</option>

																											<option value="197">Cm3</option>

																											<option value="170">Çuval</option>

																											<option value="184">Dakika</option>

																											<option value="176">Dilim</option>

																											<option value="178">Düzine</option>

																											<option value="162">Gr</option>

																											<option value="179">Gün</option>

																											<option value="194">Karat</option>

																											<option value="161">Kg</option>

																											<option value="175">Km</option>

																											<option value="174">Koçan</option>

																											<option value="173">Koli</option>

																											<option value="172">Kova</option>

																											<option value="171">Kutu</option>

																											<option value="193">KWatt</option>

																											<option value="185">Litre</option>

																											<option value="165">M</option>

																											<option value="166">M2</option>

																											<option value="167">M3</option>

																											<option value="168">Metretül</option>

																											<option value="186">Ml</option>

																											<option value="163">Mm</option>

																											<option value="195">Paket (Pack)</option>

																											<option value="187">Paket (Packet)</option>

																											<option value="188">Porsiyon</option>

																											<option value="196">Rulo</option>

																											<option value="183">Saat</option>

																											<option value="189">Servis</option>

																											<option value="198">Set</option>

																											<option value="190">Sütun / cm</option>

																											<option value="199">Takım</option>

																											<option value="169">Teneke</option>

																											<option value="191">Ton</option>

																											<option value="192">Torba</option>

																											<option value="182">Yıl</option>


											</select>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Alış Fiyatı</label>
										<div class="col-sm-5">
											<input type="text" name="alis_fiyati" value="" placeholder="" class="form-control">

										</div>
									</div>
										<div class="form-group">
										<label class="col-sm-3 control-label">Satış Fiyatı</label>
										<div class="col-sm-5">
											<input type="text" name="satis_fiyati" value="" placeholder="" class="form-control">

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Satış Fiyatı 2</label>
										<div class="col-sm-5">
											<input type="text" name="satis_fiyati_2" value="" placeholder="" class="form-control">

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">K.D.V. Oranı %</label>
										<div class="col-sm-5">
											<select name="kdv_orani" class="form-control" id="kdv_orani">
																							<option value="18">18</option>
												<option value="8">8</option>
												<option value="1">1</option>
												<option value="0" selected="">0</option>

											</select>

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Marka</label>
										<div class="col-sm-5">
											<select placeholder="" name="marka" id="marka" class="form-control">
                                                <option value="">Seçiniz</option>

											</select>

										</div>
										<div class="col-sm-1">
										<a href="stok-markalar.php" target="_blank" title="Sistem Menüsünden MARKALAR tanımını yapabilirsiniz" class="btn btn-warning radius"><i style="font-size:14px;" class="fa fa-question-circle"></i></a>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Para Birimi</label>
										<div class="col-sm-5">
											<select name="para_birimi" id="para_birimi" class="form-control">
													<option value="TL">TL</option>
													<option value="€">€</option>
													<option value="$">$</option>
													<option value="£">£</option>

													</select>

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Renk</label>
										<div class="col-sm-5">
											<input type="text" name="renk" value="" placeholder="" class="form-control">

										</div>
									</div>
									                                    <div class="form-group">
										<label class="col-sm-3 control-label">Boyutları</label>
										<div class="col-sm-1">
											<input type="text" name="boyut_en" value="" placeholder="En" class="form-control">
										</div>
										<div class="col-sm-1">
											<input type="text" name="boyut_boy" value="" placeholder="Boy" class="form-control">
										</div>
										<div class="col-sm-1">
											<input type="text" name="boyut_birim" value="" placeholder="Yükseklik" class="form-control">
										</div>

									</div>
																		<div class="form-group">
										<label class="col-sm-3 control-label">Stok Takibi Yapılsın Mı ?</label>
										<div class="col-sm-5">
											<select name="takip" class="form-control" id="takip">
												<option value="0" selected="">Hayır</option>
                                                <option value="1" selected="">Evet</option>




											</select>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">İskonto Oranı %</label>
										<div class="col-sm-5">
											<input type="text" name="iskonto_orani" value="" placeholder="" class="form-control">

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">İlk Sayım Miktarı</label>
										<div class="col-sm-5">
											<input type="text" name="ilk_sayim_miktari" value="" placeholder="" class="form-control">

										</div>
									</div>
																		<div class="form-group">
										<label class="col-sm-3 control-label">Raf Yeri</label>
										<div class="col-sm-5">
											<input type="text" name="raf_yeri" value="" placeholder="" class="form-control">

										</div>
									</div>
																		<div class="form-group">
										<label class="col-sm-3 control-label">Kritik Stok Miktarı</label>
										<div class="col-sm-5">
											<input type="text" name="kritik_stok" value="" placeholder="" class="form-control">

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Stok Bilgi Notu</label>
										<div class="col-sm-9">
											<textarea name="bilgi_notu" rows="10" class="form-control"></textarea>

										</div>
									</div>
																		<div class="form-group">
												<label class="col-sm-3 control-label">Stok Statüsü</label>
												<div class="col-sm-3">
													<select name="durum" id="durum" class="form-control">
													<option value="on">Aktif</option>
													<option value="off">Pasif</option>
													</select>

												</div>

									</div>
																		<div class="form-group" style="padding-top:20px;">
										<label class="col-sm-3 control-label">Stok Resim Ekle / Değiştir<br>150 x 150 px</label>
										<div class="col-sm-6">
											<input type="file" name="stok_resmi" class="file">
											<input type="hidden" name="stok_resmi_mevcut" class="" value="">
										</div>
									</div>
									<div class="form-group" style="padding-top:20px;">
										<label class="col-sm-3 control-label">Stok Ekleme Sonrası Hangi Sayfaya Gidilsin ?</label>
										<div class="col-sm-6">
											<select class="form-control" name="sonragit">
                                            <option value="yenistok">Yeni Stok</option>
                                            <option value="stoklistesi">Stok Listesi</option>
                                            </select>
										</div>

									</div>

                                    <div class="form-group">


										<label class="col-sm-3 control-label"></label>
												<div class="col-sm-7">
												<input type="hidden" name="idx" value="y">

													<button class="btn btn-success btn-radius" type="submit">Kaydet</button>
													<a href="stoklar-hizmetler.php"><button class="btn btn-danger btn-radius" type="button">Vazgeç</button></a>
												</div>

									</div>
								</form>
															</div>
						</div>