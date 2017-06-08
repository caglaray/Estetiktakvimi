@extends('sitemaster')
@section('title','Ana Sayfa')

@section('content')

 <article>
    <div class="container">
    
      <!-- Listing Top -->
      

      <div class="clearfix"></div>
<nav class="breadcrumb" style="background-color: transparent; padding: 0px; margin-bottom: -15px;">
        Burdasınız:
        <a class="breadcrumb-item" href="/" itemprop="name">Anasayfa  <meta itemprop="position" content="1">/</a>
        <a class="breadcrumb-item" href="#" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">Beyin ve Sinir Cerrahisi <meta itemprop="position" content="2">/</a>
        <a class="breadcrumb-item" href="#" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">İstanbul
        <meta itemprop="position" content="3"></a>
        
      </nav>
      <h1 class="page_title">Beyin Ve Sinir Cerrahisi, İstanbul, İstanbul</h1>

      <div class="filter_dropdown col-sm-3 col-xs-12 pull-right">
        <span class="labeled">Sırala:</span>
        <select name="" id="" class="select2" style="width: 82%">
          <option value="">Online Durumuna Göre</option>
          <option value="">Puana Göre</option>
          <option value="">Akıllı Sıralama</option>
          <option value="">Random</option>
          <option value="">Alfabetik</option>
        </select>
      </div>


      <!-- Detail Wrapper -->
      <div class="detail_wrapper">

        <div class="col-sm-9 p0">
        <h2 class="result_count" style="margin-top: -5px;">Kategori Adı/ Toplam <strong>38</strong> sonuç bulundu.</h2>
  

  <div class="free_cons" style="margin-bottom:10px; margin-top: 10px;"><button class="btn btn-primary"  data-toggle="collapse" data-target="#demo">Kategori Hakkında</button>
              <div id="demo" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div></div>
          
          <!-- THEAD -->
          <div class="thead">

            <div class="col-sm-7 col-xs-12">
              <strong class="tx">Doktor bul ve randevu al</strong>
            </div>
            <div class="col-sm-5 hidden-xs p0">

              <div class="carousel slide carousel-sync" data-interval="false">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col"><span class="day">bugün <small>22.4</small></span></div>
                    <div class="col"><span class="day">yarın <small>23.4</small></span></div>
                    <div class="col"><span class="day">Pzt <small>24.4</small></span></div>
                  </div>
                  <!-- item end -->

                  <div class="item">
                    <div class="col"><span class="day">bugün <small>22.4</small></span></div>
                    <div class="col"><span class="day">yarın <small>23.4</small></span></div>
                    <div class="col"><span class="day">Pzt <small>24.4</small></span></div>
                  </div>
                  <!-- item end -->

                  <div class="item">
                    <div class="col"><span class="day">bugün <small>22.4</small></span></div>
                    <div class="col"><span class="day">yarın <small>23.4</small></span></div>
                    <div class="col"><span class="day">Pzt <small>24.4</small></span></div>
                  </div>
                  <!-- item end -->
                </div>



                <a class="left carousel-control" href="javascript:void(0)" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="javascript:void(0)" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>

              </div>
            </div>

          </div>
          <!-- THEAD : END -->




          <!-- Listing Results -->
        <div class="listing_results" itemscope="" itemtype="http://schema.org/Physician" data-lat="" data-lng="" data-loc="İstanbul">

            <div class="col-sm-7 col-xs-12 p0">

              <div class="col-sm-3 col-xs-4">
                <div class="thumb">
                  <div class="onay"><i class="fa fa-check"></i></div>
                  <a href="#"><figure><img src="http://placehold.it/150x150" alt=""></figure></a>
                </div>
                <div class="col-xs-12 p0" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                  <div class="stars">
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                  </div>
                  <div class="gorus"><a href="#">(<span itemprop="reviewCount">14</span> görüş)</a></div>
                </div>
              </div>

              <div class="col-sm-9 col-xs-8">
                <div class="list_infos">
                  <h3 class="name"><a href="#"><span itemprop="name">Yrd. Doç. Dr. Soner Büyükkınacı</span></a></h3>
                  <h4 class="jobtitle">Beyin Ve Sinir Cerrahisi</h4>

                  <div class="desc">
                 <div class="address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" ><span class="street">Eski Londra Asfaltı No: 2</span>, <span class="city">Bahçelievler</span><span class="name"> Medicana Bahçelievler Hastanesi</div>

                    <div class="commentos">
                      çok iyi bir doktordur kendisi lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sed expedita dicta consequatur, facere voluptas, maxime nesciunt ullam molestiae iure porro laudantium odio dolorum quod magnam, ut tempore voluptate minima.
                    </div>
                  </div>
                </div>

                <a href="#" rel="nofollow" class="randevual_btn btn btn-primary"><i class="fa fa-calendar"></i> Randevu al</a>

              </div>



            </div>
            <div class="col-sm-5 hidden-xs p0">

              <div class="saatler carousel slide carousel-sync" data-interval="false">
                <div class="carousel-inner">
                  <div class="item active">
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
                      </div>
                    </div>
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
                      </div>
                    </div>
                  </div>
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                </div>
              </div>

            </div>

          </div>

          <!-- Listing Results -->
         

         <div class="listing_results" itemscope="" itemtype="http://schema.org/Physician" data-lat="" data-lng="" data-loc="İstanbul">

            <div class="col-sm-7 col-xs-12 p0">

              <div class="col-sm-3 col-xs-4">
                <div class="thumb">
                  <div class="onay"><i class="fa fa-check"></i></div>
                  <a href="#"><figure><img src="http://placehold.it/150x150" alt=""></figure></a>
                </div>
                <div class="col-xs-12 p0" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                  <div class="stars">
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                  </div>
                  <div class="gorus"><a href="#">(<span itemprop="reviewCount">14</span> görüş)</a></div>
                </div>
              </div>

              <div class="col-sm-9 col-xs-8">
                <div class="list_infos">
                  <h3 class="name"><a href="#"><span itemprop="name">Yrd. Doç. Dr. Soner Büyükkınacı</span></a></h3>
                  <h4 class="jobtitle">Beyin Ve Sinir Cerrahisi</h4>

                  <div class="desc">
                    <div class="address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" ><span class="street">Eski Londra Asfaltı No: 2</span>, <span class="city">Bahçelievler</span><span class="name"> Medicana Bahçelievler Hastanesi</div>

                    <div class="commentos">
                      çok iyi bir doktordur kendisi lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sed expedita dicta consequatur, facere voluptas, maxime nesciunt ullam molestiae iure porro laudantium odio dolorum quod magnam, ut tempore voluptate minima.
                    </div>
                  </div>
                </div>

                <a href="#" rel="nofollow" class="randevual_btn btn btn-primary"><i class="fa fa-calendar"></i> Randevu al</a>

              </div>



            </div>
            <div class="col-sm-5 hidden-xs p0">

              <div class="saatler carousel slide carousel-sync" data-interval="false">
                <div class="carousel-inner">
                  <div class="item active">
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
                      </div>
                    </div>
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
                      </div>
                    </div>
                  </div>
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                </div>
              </div>

            </div>

          </div>
         <div class="listing_results" itemscope="" itemtype="http://schema.org/Physician" data-lat="" data-lng="" data-loc="İstanbul">

            <div class="col-sm-7 col-xs-12 p0">

              <div class="col-sm-3 col-xs-4">
                <div class="thumb">
                  <div class="onay"><i class="fa fa-check"></i></div>
                  <a href="#"><figure><img src="http://placehold.it/150x150" alt=""></figure></a>
                </div>
                <div class="col-xs-12 p0" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                  <div class="stars">
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                    <i class="fa fa-star" itemprop="ratingValue"></i>
                  </div>
                  <div class="gorus"><a href="#">(<span itemprop="reviewCount">14</span> görüş)</a></div>
                </div>
              </div>

              <div class="col-sm-9 col-xs-8">
                <div class="list_infos">
                  <h3 class="name"><a href="#"><span itemprop="name">Yrd. Doç. Dr. Soner Büyükkınacı</span></a></h3>
                  <h4 class="jobtitle">Beyin Ve Sinir Cerrahisi</h4>

                  <div class="desc">
                    <div class="address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" ><span class="street">Eski Londra Asfaltı No: 2</span>, <span class="city">Bahçelievler</span><span class="name"> Medicana Bahçelievler Hastanesi</div>

                    <div class="commentos">
                      çok iyi bir doktordur kendisi lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sed expedita dicta consequatur, facere voluptas, maxime nesciunt ullam molestiae iure porro laudantium odio dolorum quod magnam, ut tempore voluptate minima.
                    </div>
                  </div>
                </div>

                <a href="#" rel="nofollow" class="randevual_btn btn btn-primary"><i class="fa fa-calendar"></i> Randevu al</a>

              </div>



            </div>
            <div class="col-sm-5 hidden-xs p0">

              <div class="saatler carousel slide carousel-sync" data-interval="false">
                <div class="carousel-inner">
                  <div class="item active">
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
                      </div>
                    </div>
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
                      </div>
                    </div>
                  </div>
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                  <div class="item">
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
                  <!--item end-->

                </div>
              </div>

            </div>

          </div>


          <div class="doktor_notfound hidden-xs">
            <i class="fa fa-user-md"></i>
            <span>Doktor profilini bulamadınız mı?</span>
            <a href="#" rel="nofollow">Şimdi oluşturun <i class="fa fa-play"></i></a>
          </div>


          <div class="pagination_wrapper">
            <ul class="pagination">
              <li class="hidden">
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo; Önceki</span>
                </a>
              </li>
              <li><a href="#" rel="canonical">1</a></li>
              <li><a href="#" rel="canonical">2</a></li>
              <li><a href="#" rel="canonical">3</a></li>
              <li><a href="#" rel="canonical">4</a></li>
              <li><a href="#" rel="canonical">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">Sonraki &raquo;</span>
                </a>
              </li>
            </ul>
          </div>


        </div>




        <!-- SIDEBAR -->
        <div class="col-sm-3 p0 hidden-xs">
          <aside>
            <div class="map_wrapper">
              <div class="genislet_btn"><i class="fa fa-search-plus"></i> haritayı yakınlaştır</div>
              HARİTA

            </div>
            <div class="cat_checks">
              <h2>Hastalıklar</h2>
              <ul>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Karın Ağrısı <em>(1129)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Polipler <em>(747)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Alerji <em>(570)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Mide Hastalıkları <em>(393)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Osteoporoz <em>(385)</em></span></label></li>
                <li><a class="hidden_times-btn" href="javascript:void(0)">daha fazla</a></li>
              </ul>
              <ul class="hidden">
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Karın Ağrısı <em>(1129)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Polipler <em>(747)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Alerji <em>(570)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Mide Hastalıkları <em>(393)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Osteoporoz <em>(385)</em></span></label></li>
              </ul>
            </div>

            <div class="cat_checks">
              <h2>Prosedür ve yöntemler</h2>
              <ul>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Karın Ağrısı <em>(1129)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Polipler <em>(747)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Alerji <em>(570)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Mide Hastalıkları <em>(393)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Osteoporoz <em>(385)</em></span></label></li>
                <li><a class="hidden_times-btn" href="javascript:void(0)">daha fazla</a></li>
              </ul>
              <ul class="hidden">
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Karın Ağrısı <em>(1129)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Polipler <em>(747)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Alerji <em>(570)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Mide Hastalıkları <em>(393)</em></span></label></li>
                <li><label data-toggle="tooltip" data-placement="right" title="Karın Ağrısı"><input type="checkbox" name=""><span>Osteoporoz <em>(385)</em></span></label></li>
              </ul>
            </div>


          </aside>
        </div>



      </div>



    </div>
  </article>

  @endsection