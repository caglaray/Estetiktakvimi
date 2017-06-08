@extends('sitemaster')
@section('title','Ana Sayfa')

@section('content')


<!-- Doctor Page Wrapper : start -->
  <div class="doctor_page_wrapper" itemscope itemtype="http://schema.org/Physician">

    <div class="doctor_page_hero">
      <div class="page_banner" style="background-image: url('http://placehold.it/1920x400');"></div>
    </div>

    <article>
      <div class="container">



        <div class="col-sm-8 col-xs-12">
          <section class="doctor_infos">
            <div class="thumb">
              <figure itemprop="image">
                <img src="http://placehold.it/150x150" alt="">
              </figure>
              <div class="onay"><i class="fa fa-check"></i> Onaylı Doktor</div>
            </div>


            <div class="doctor_sh-detail">
              <div class="stars" itemscope itemtype="http://schema.org/AggregateRating">
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <span><em itemprop="reviewCount" style="font-style: normal">89</em> görüş üzerinden 4.9 puan</span>
              </div>

              <div class="dc_name">
                <span class="h1">MD,</span> <h1 itemprop="name">Bülent Cihantimur</h1><br>
                <a href="#" title="Kulak burun boğaz" class="text-muted"><h2 class="h5">Kulak burun boğaz</h2></a>
              </div>


              <div class="dc_randevu">
                <a href="#" class="btn btn-primary"><i class="fa fa-calendar"></i> Randevu al</a>
              </div>

              <div class="flag_count hidden-xs" title="Favoriye Ekledi">
                <i class="fa fa-bookmark-o"></i>
                <span >115</span>
              </div>
            </div>
            <!-- doctor_sh-detail : end -->


            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <p>
                  <strong>Location</strong>
                  <a href="#">Estetik International</a>
                </p>

                <p>
                  Turkey Plastic Surgeon<br>
                  <span itemprop="streetAddress" class="">Levazım mahallesi, Koru Sokak, Zorlu Center Teras Evler, Kat T2 216 Zincirlikuyu</span> <span itemprop="postalCode">34340</span>, 
                </p>
                <div class="dc_services" style="margin-top: -10px;">
                
                

              
                  <ul class="hidden">
                  <span itemprop="addressLocality">Beşiktaş
                  İstanbul, TR</span><br>
                  <a href="tel:+90 532 747 01 03" class="tel">+90 532 747 01 03</a>
                  </ul>

                  <a href="#" class="hidden_times-btn">daha fazla</a>
                </div>
            


              <div class="free_cons"><button class="btn btn-primary"  data-toggle="collapse" data-target="#demo">Hakkında Kısa Detay Yazısı</button>
              <div id="demo" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div></div>
            </address>


            <div class="row pull-left">
              
              <div class="col-sm-5">
                <div class="dc_services">
                  <div class="title">Hizmetler</div>

                  <ul>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Tüp Bebek</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Normal doğum</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Laparoskopik cerrahi</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Ürojinekolojik ameliyatlar</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Labioplasti estetiği</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Radikal histerektomi</li>

                  </ul>
                  <ul class="hidden">
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Tüp Bebek</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Normal doğum</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Laparoskopik cerrahi</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Ürojinekolojik ameliyatlar</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Labioplasti estetiği</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Radikal histerektomi</li>
                    <li title="Tüp Bebek" itemprop="availableService" itemtype="https://schema.org/MedicalTest">Fıtık</li>
                  </ul>

                  <a href="#" class="hidden_times-btn">daha fazla</a>
                </div>
              </div>
            </div>


            <div class="dc_connect">
              <strong>Bağlantı</strong>
              <a href="#" rel="nofollow" title="Website"><i class="fa fa-globe"></i></a>
              <a href="#" rel="nofollow" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" rel="nofollow" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" rel="nofollow" title="Google Plus"><i class="fa fa-google-plus"></i></a>
            </div>

          </section>
          <!-- doctor_infos : end -->
        </div>


        <div class="col-sm-4">
          <div class="form_holder">
            <div class="form_title">Doktora Soru Sor</div>
            <div class="form_body">
              <form action="" class="form_cons">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="İsim">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="" maxlength="11" placeholder="Telefon Numarası">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="" placeholder="" style="max-width:288px";> </textarea>
                </div>

                
                 <input type="file" name="image" class="" title="Resim Seç">
             
                


                <input type="submit" class="submitted btn btn-info" value="Gönder" />

                <span class="help-block inf">Bilgileriniz Bizimle Güvende! <a href="#">Gizlilik Sözleşmesi</a></span>
              </form>
            </div>
          </div>
        </div>


        <!-- Shadow -->
        <div class="dc_shadow"></div>

        <div class="col-sm-8">
          <section class="appointment_calendar_wrapper">
            <div class="title">Randevu Takvimi</div>


            <div class="appo_cal">

              <div id="appo_cal_carousel" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->

                <div class="item">
                  <div class="appo_cal_head">
                    <div class="col"><span class="day">Bugün <small>11.04.2017</small></span></div>
                  </div>

                  <div class="appo_cal_days">
                    <div class="col">
                      <a href="#" rel="nofollow">09:30</a>
                      <a href="#" rel="nofollow">10:00</a>
                      <a href="#" rel="nofollow">10:30</a>
                      <a href="#" rel="nofollow">11:00</a>
                      <a href="#" rel="nofollow">11:30</a>
                      <a href="#" rel="nofollow">12:00</a>
                      <a href="#" rel="nofollow">12:30</a>
                      <a href="#" class="hidden_times-btn">daha fazla</a>
                      <div class="hidden">
                        <a href="#" rel="nofollow">14:30</a>
                        <a href="#" rel="nofollow">15:00</a>
                        <a href="#" rel="nofollow">15:30</a>
                        <a href="#" rel="nofollow">16:00</a>
                        <a href="#" rel="nofollow">16:30</a>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- item end -->
              </div>
            </div>

          </section>
        </div>


        <div class="col-sm-4" style="margin-top: 7%">
          <div class="dc_harita">
            <img src="http://placehold.it/350x130" alt="">

            <address itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
            <a href="#">Estetik International Byomed</a>
            <p>
              <i class="fa fa-map-marker"></i>
              <strong>Adres</strong>
              <span><span itemprop="streetAddress">Saniye Ermutlu Sok. No:3 Kozyatağı</span><br> <span itemprop="addressLocality">Kadıköy, İstanbul</span></span>
            </p>

            <p>
              <i class="fa fa-phone"></i>
              <strong>İletişim Numarası</strong>
              <span class="tel">0 (850) 433 41 15</span>
            </p>
          </address>
          </div>
        </div>


        <section class="dc_about">
          <div class="h3">Hakkımda</div>

          <div class="col-sm-6">
            <div class="det_title"><i class="fa fa-id-card-o"></i> <span>Hakkımda</span></div>
            <p>Prof. Dr. Alparslan Baksu, Ota Jinemed Hastanesi'nde hizmet vermektedir.</p>

            <div class="det_title"><i class="fa fa-graduation-cap"></i> <span>Mezun olunan okullar</span></div>
            <ul class="dc_hiddens" >
              <li>İzmir Ege Üniversitesi Tıp Fakültesi - Tıp Doktor, 1979 - 1975</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık Eğitimi, 1988 - 1992</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
            </ul>

            <div class="det_title"><i class="fa fa-file-text-o"></i> <span>Yayınlar</span></div>
            <ul class="dc_hiddens">
              <li>İzmir Ege Üniversitesi Tıp Fakültesi - Tıp Doktor, 1979 - 1975</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık Eğitimi, 1988 - 1992</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
            </ul>

          </div>


          <div class="col-sm-6">
            <div class="det_title"><i class="fa fa-trophy"></i> <span>Ödüller</span></div>
            <ul class="dc_hiddens">
              <li>İzmir Ege Üniversitesi Tıp Fakültesi - Tıp Doktor, 1979 - 1975</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık Eğitimi, 1988 - 1992</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
            </ul>

            <div class="det_title"><i class="fa fa-globe"></i> <span>Bilinen diller</span></div>
            <ul class="dc_hiddens">
              <li>İngilizce</li>
            </ul>

            <div class="det_title"><i class="fa fa-flask"></i> <span>Deneyimler</span></div>
            <ul class="dc_hiddens">
              <li>İzmir Ege Üniversitesi Tıp Fakültesi - Tıp Doktor, 1979 - 1975</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık Eğitimi, 1988 - 1992</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
              <li>İstanbul Şişli Eftal Eğitim ve Araştırma Hastanesi - Uzmanlık, 1992 - 2012</li>
            </ul>

            <div class="det_title"><i class="fa fa-certificate"></i> <span>Sertifikalar</span></div>
            <div class="certificates">
              <div class="row">
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><span class="more_images">+50</span></a>
                </div>
              </div>
              <div class="hidden">
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
              </div>
            </div>

            <div class="det_title"><i class="fa fa-certificate"></i> <span>Hastalıklar</span></div>
            <ul class="dc_hiddens">
              <li>Kısırlık</li>
              <li>Doğum</li>
              <li>Miyom</li>
              <li>Jinekolojik Kanserler</li>
              <li>İdrar Kaçırma</li>
              <li>İdrar Kaçırma</li>
              <li>İdrar Kaçırma</li>
              <li>İdrar Kaçırma</li>
            </ul>

            <div class="det_title"><i class="fa fa-camera"></i> <span>Fotoğraflar</span></div>
            <div class="certificates">
              <div class="row">
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                </div>
                <div class="col-sm-2 col-xs-4">
                  <a href="http://placehold.it/600x600" data-fancybox="certificate"><span class="more_images">+50</span></a>
                </div>
              </div>
              <div class="hidden">
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
                <a href="http://placehold.it/600x600" data-fancybox="certificate"><img src="http://placehold.it/60x60" alt=""></a>
              </div>
            </div>

          </div>

        </section>
        <!-- dc_about : end -->


        <!-- Shadow -->
        <div class="dc_shadow"></div>



        <section class="last_comments">
          <div class="col-sm-8">
            <div class="title">Son Cevapladığı Sorular</div>
            <ul>
            <li class="question_item" itemscope itemtype="http://schema.org/Question">
              <a href="#"><span itemprop="headline">Mutlaka mutlu yol vardır</span></a>
              <p itemprop="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia asperiores aut porro, reprehenderit vitae reiciendis nam tempora? Voluptatem eum recusandae earum a cupiditate beatae rem quis... <a href="#">devamı &raquo;</a></p>

              <div class="answer">
                <span>Doktor Cevabı:</span>
                <div class="col-sm-2 col-xs-3">
                  <a href="#">
                    <figure itemprop="author" itemscope itemtype="http://schema.org/Person">
                      <img src="http://placehold.it/90x90" alt="">
                    </figure>
                  </a>
                </div>
                <div class="col-sm-10 col-xs-9 dr_answ_box">
                  <div class="dr_sh_info">
                    <h2>Op. Dr. Bülent CİHANTİMUR</h2>
                    <span>İletişim & Randevu: 0 (850) 433 41 15</span>
                  </div>
                  <p itemprop="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et porro nemo blanditiis reprehenderit eveniet!</p>
                </div>
              </div>
            </li>
            <!-- question_item : end -->

            <li class="question_item" itemscope itemtype="http://schema.org/Question">
              <a href="#"><span itemprop="headline">Mutlaka mutlu yol vardır</span></a>
              <p itemprop="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia asperiores aut porro, reprehenderit vitae reiciendis nam tempora? Voluptatem eum recusandae earum a cupiditate beatae rem quis... <a href="#">devamı &raquo;</a></p>

              <div class="answer">
                <span>Doktor Cevabı:</span>
                <div class="col-sm-2 col-xs-3">
                  <a href="#">
                    <figure itemprop="author" itemscope itemtype="http://schema.org/Person">
                      <img src="http://placehold.it/90x90" alt="">
                    </figure>
                  </a>
                </div>
                <div class="col-sm-10 col-xs-9 dr_answ_box">
                  <div class="dr_sh_info">
                    <h2>Op. Dr. Bülent CİHANTİMUR</h2>
                    <span>İletişim & Randevu: 0 (850) 433 41 15</span>
                  </div>
                  <p itemprop="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et porro nemo blanditiis reprehenderit eveniet!</p>
                </div>
              </div>
            </li>
            </ul>
            <!-- question_item : end -->

          </div>


          <div class="col-sm-4 ask_question">
            <i class="fa fa-question"></i>
            <strong>Soru sorun</strong>
            <p>Merak ettiğiniz konular hakkında danışabilirsiniz.<br> Benzer soruları olan ziyaretçilerin bilgilenmesi amacıyla sorunuz yayınlanacaktır.</p>
            <a href="#" class="btn btn-primary">SORU SOR</a>
          </div>


        </section>



        <!-- Articles -->
        <div class="col-sm-12">
          <section class="articles_wrapper">
            <div class="h3">Makaleler</div>

            <div class="row">

              <!-- Article Item -->
              <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

              <!-- Article Item -->
               <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

              <!-- Article Item -->
               <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

              <!-- Article Item -->
               <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

              <!-- Article Item -->
               <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

              <!-- Article Item -->
              <div class="col-sm-6">
                <div class="article_item">
                  <div class="col-sm-2 col-xs-3">
                    <a href="#" rel="nofollow"><img src="http://placehold.it/80x80" alt=""></a>
                  </div>
                  <div class="col-sm-10 col-xs-9">
                    <h3><a href="#" rel="nofollow">Yumurta Dondurma</a></h3>
                    <span class="date">13 Ocak 2017</span>
                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, assumenda voluptates facilis, velit temporibus laboriosam consectetur laudantium...</figcaption>
                  </div>
                </div>
              </div>

            </div>

          </section>
        </div>



        <!-- Videos -->
        <div class="col-sm-12">
          <section class="articles_wrapper">
            <h3 class="h3">Videolar</h3>

            <div class="row">

              <!-- Video Item -->
              <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>

              <!-- Video Item -->
               <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>

              <!-- Video Item -->
             <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>

              <!-- Video Item -->
                 <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>

              <!-- Video Item -->
               <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>

              <!-- Video Item -->
                <div class="col-sm-4">
                <div class="video_item">
                  <figure>
                  <a href="#"><img src="http://placehold.it/340x180" alt=""></a>
                  </figure>
                  <figcaption>
                  <div class="video_title"><a href="#" rel="external" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
                  </figcaption>
                </div>
              </div>


              <div class="moreable_link pull-right"><a href="#">daha fazla göster</a></div>

            </div>

          </section>
        </div>




        <section class="last_comments">
          <div class="col-sm-8" >
            <h4 class="title">Hastalarının Yorumları (64)</h4>

            <div class="total_reviews">
              <span class="pull_left">Hasta Değerlendirmeleri</span>
              <div class="stars pull-right">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span>64 Yorum Ortalama Puanı: 5</span>
              </div>
            </div>
            <ul class="pull-left">
            <li class="comment_item" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
              <div class="col-sm-2 col-xs-3">
                <figure>
                <img src="http://placehold.it/90x90" alt="">
                </figure>
                <strong class="name " itemprop="author" title="">Ayten Özder</strong>
              </div>

              <div class="col-sm-10 col-xs-9 comment_detail">
                <div class="comment_detail_top">
                  <div class="stars pull-left"  itemscope itemtype="http://schema.org/AggregateRating">
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                  <span>(5)</span>
                  </div>
                  <div class="date pull-right" datetime="16.11.2016">
                    16.11.2016
                  </div>
                </div>

                <p itemprop="description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et porro nemo blanditiis reprehenderit eveniet!</p>
              </div>
            </li>
            <!-- comment_item : end -->

            <li class="comment_item" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
              <div class="col-sm-2 col-xs-3">
                <figure>
                <img src="http://placehold.it/90x90" alt="">
                </figure>
                <strong class="name " itemprop="author" title="">Ayten Özder</strong>
              </div>

              <div class="col-sm-10 col-xs-9 comment_detail">
                <div class="comment_detail_top">
                  <div class="stars pull-left"  itemscope itemtype="http://schema.org/AggregateRating">
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                  <span>(5)</span>
                  </div>
                  <div class="date pull-right" datetime="16.11.2016">
                    16.11.2016
                  </div>
                </div>

                <p itemprop="description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et porro nemo blanditiis reprehenderit eveniet!</p>
              </div>
            </li>
            <!-- comment_item : end -->

            <li class="comment_item" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
              <div class="col-sm-2 col-xs-3">
                <figure>
                <img src="http://placehold.it/90x90" alt="">
                </figure>
                <strong class="name " itemprop="author" title="">Ayten Özder</strong>
              </div>

              <div class="col-sm-10 col-xs-9 comment_detail">
                <div class="comment_detail_top">
                  <div class="stars pull-left"  itemscope itemtype="http://schema.org/AggregateRating">
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                <i class="fa fa-star" itemprop="ratingValue"></i>
                  <span>(5)</span>
                  </div>
                  <div class="date pull-right" datetime="16.11.2016">
                    16.11.2016
                  </div>
                </div>

                <p itemprop="description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et porro nemo blanditiis reprehenderit eveniet!</p>
              </div>
            </li>
            <!-- comment_item : end -->
          </ul>
          </div>


          <div class="col-sm-4">
            <div class="ask_question">
              <i class="fa fa-comment-o"></i>
              <strong>Hakkında yorum yazın</strong>
              <p>Uzmanı tanıyorsanız ya da hastalığınızla ilgili ziyaret ettiyseniz görüşlerinizi, şikayetlerinizi yazabilirsiniz.</p>
              <a href="#" class="btn btn-primary">YORUM EKLE</a>
            </div>
          </div>


        </section>


      </div>
      <!-- container : end -->
    </article>

  </div>
  <!-- doctor_page_wrapper : end -->




@endsection