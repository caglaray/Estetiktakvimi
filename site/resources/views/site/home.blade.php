@extends('sitemaster')
@section('title','Ana Sayfa')

@section('content')


<!-- Doctor Jumbotron : start -->
<section class="dc_home_jumbo">
  <div class="container">


    <div class="doctor_stock">
      <figure>
        <img src="http://placehold.it/550x500" alt="">
      </figure>
    </div>
    <!-- Arama Kutusu-->
    <div class="doctor_finder_form">
      <h1 class="h3">Estetik Doktoru ve Merkezi Bul Online Randevu al</h1>
      <h2>145.000 doktor ve estetik merkezi arasından tercihini yap</h2>

      <div class="finder_form">
        <div class="form-group col-sm-5 p0">
     
          <select name="" id="" class="form-control select2" style="width: 100%">
              @foreach($categories as $category) <option value="{!! $category->id !!}">{!! $category->name !!}</option>  @endforeach
          </select>
        
        </div>
        <div class="form-group col-sm-5 p0">
          <select name="" id="" class="form-control select2" style="width: 100%">
            <option value="İstanbul">İstanbul</option>
            <option value="İzmir">İzmir</option>
            <option value="Antalya">Antalya</option>
            <option value="Ankara">Ankara</option>
          </select>
        </div>
        <div class="form-group col-sm-2 p0">
          <button type="submit" class="submit btn btn-default"><i class="fa fa-search"></i> Ara</button>
        </div>
      </div>
    </div>
    <!-- Arama Kutusu Bitiş-->
  </div>
  <!-- Kategori Kutusu-->
  <div class="dc_jumbo_cats">
    <div class="container">
      <ul>  
       @foreach($categories as $category)<li><a href="{!! $category->id !!}">{!! $category->name !!}</a></li>@endforeach
       
      </ul>
    </div>
  </div>
  <!-- Kategori Kutusu Bitiş-->
</section>
<!-- Doctor Jumbotron : end -->






<section class="doctor_appointment_infos">

  <div class="container">

    <h3 class="h4">Doktor randevusu almak kolay ve hızlı</h3>
    <span>Uzmanları listeleyin, inceleyin ve randevu alın.</span>

    <ul>
      <li class="col-sm-4">
        <i class="fa fa-user-md"></i>
        <span>Size en yakın doktorları uzmanlık alanlarına göre listeleyin.</span>
      </li>
      <li class="col-sm-4">
        <i class="fa fa-calendar-o"></i>
        <span>Randevu takvimlerini görerek, istediğiniz tarih için talepte bulunun.</span>
      </li>
      <li class="col-sm-4">
        <i class="fa fa-code-fork"></i>
        <span>Randevunuz onaylansın ve doktorunuz ile görüşün.</span>
      </li>
    </ul>

  </div>

</section>



<section class="our_globally">
  <div class="container">
    <div class="text-center">
      <h4>Türkiye'nin her yerinden 145.000+ uzman estetiktakvimi.com'da.</h4>
    </div>
  </div>
</section>




<!--Ortaklarımız-->
<section class="partners">
  <div class="container">

    <div class="partners_carousel">
      <div class="partners_car owl-carousel owl-theme">
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
        <div class="item">
          <img src="http://placehold.it/165x100" alt="">
        </div>
      </div>
    </div>


  </div>
</section>
<!--Ortaklarımız Bitiş-->




<section class="last_somethings">
  <div class="container">


    <div class="col-sm-4">
      <!--Son Yorumlar Modul-->
      <div class="last_comm">
        <div class="titling">
          <strong>Son Yorumlar</strong>
          <span>Uzman değerlendirmeleri</span>
        </div>



        <!-- Comment Item  Start -->
        <ul class="comm_item" style="list-style: none; margin-left: -20px;" >
          <li class="comm_item" style="list-style: none;">
            <div class="name pull-left">Yrd. Doç. Dr. Ömer Faik SAGUN</div>
            <div class="stars pull-right" data-score="5" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
             <meta itemprop="worstRating" content="1">
             <meta itemprop="ratingValue" content="5">
             <meta itemprop="bestRating" content="5">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
           </div>
           <div class="row">
            <div class="col-sm-3 thumb">
              <figure>
                <img src="http://placehold.it/100x100" alt="">
              </figure>
            </div>
            <div class="col-sm-9">
              <div class="comm_dt">
                <p itemprop="description">Ömer hocamı kuzenim sayesinde tanıma şansım oldu. İlkbaşlarda kararsızdım. Ama Ömer Hocayla...</p>
                <em>Fatma Öztürk</em>
              </div>
            </div>
          </div>

        </li>
        <!-- Comment Item End -->

        <li class="comm_item" style="list-style: none; ">
          <!-- Comment Item  Start -->

          <div class="name pull-left">Yrd. Doç. Dr. Ömer Faik SAGUN</div>
          <div class="stars pull-right" data-score="5" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
           <meta itemprop="worstRating" content="1">
           <meta itemprop="ratingValue" content="5">
           <meta itemprop="bestRating" content="5">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
         </div>
         <div class="row">
          <div class="col-sm-3 thumb">
            <figure>
              <img src="http://placehold.it/100x100" alt="">
            </figure>
          </div>
          <div class="col-sm-9">
            <div class="comm_dt">
              <p itemprop="review" itemscope="" itemtype="http://schema.org/Review">Ömer hocamı kuzenim sayesinde tanıma şansım oldu. İlkbaşlarda kararsızdım. Ama Ömer Hocayla...</p>
              <em>Fatma Öztürk</em>
            </div>
          </div>
        </div>
      </li>


      <!-- Comment Item  Start -->

      <li class="comm_item">
        <div class="name pull-left">Yrd. Doç. Dr. Ömer Faik SAGUN</div>
        <div class="stars pull-right" data-score="5" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
         <meta itemprop="worstRating" content="1">
         <meta itemprop="ratingValue" content="5">
         <meta itemprop="bestRating" content="5">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
       </div>
       <div class="row">
        <div class="col-sm-3 thumb">
          <figure>
            <img src="http://placehold.it/100x100" alt="">
          </figure>
        </div>
        <div class="col-sm-9">
          <div class="comm_dt">
            <p itemprop="review" itemscope="" itemtype="http://schema.org/Review">Ömer hocamı kuzenim sayesinde tanıma şansım oldu. İlkbaşlarda kararsızdım. Ama Ömer Hocayla...</p>
            <em>Fatma Öztürk</em>
          </div>
        </div>
      </div>
    </li>
  </ul> <!--Son Yorumlar Modul Bitiş-->
  <a href="#" class="navi_link"><strong>12.600+</strong> Doktor değerlendirmesi &raquo;</a>
</div>
</div>


<!--En Yeni Videolar Modul-->
<div class="col-sm-4">
  <div class="last_vids">
    <div class="titling">
      <strong>En Yeni Videolar</strong>
      <span>Kısa videolarla uzmanından öğrenin</span>
    </div>


  @foreach($videos as $video)
    <!-- Vids Item -->
    <article>
      <div class="vids_item">
        <div class="row">
          <div class="col-sm-4 thumb">
            <figure>
              <img src="http://placehold.it/90x90" alt="">
            </figure>
          </div>
          <div class="col-sm-8">
            <div class="vids_dt">
              <figcaption>
                <a href="#">{{{ str_limit($video->title, $limit = 50, $end = '...')}}}</a>
              </figcaption>
              <strong>{!! $video->name !!} {!! $video->surname !!}</strong>
            </div>
          </div>
        </div>
      </div>
    </article><!-- Vids Item -->
   @endforeach

    <a href="#" class="navi_link"><strong>10.300+</strong> Sağlık videosu &raquo;</a>
  </div>
</div>
<!--En Yeni Videolar Modul Bitiş-->

<!--En Yeni Makaleler Modul-->
<div class="col-sm-4">
  <div class="last_articles">
    <div class="titling">
      <strong>Yeni Makaleler</strong>
      <span>Uzmanlardan sağlık ipuçları</span>
    </div>


    @foreach($articles as $article)
    <!-- Artic Item -->
    <div class="artic_item">
      <div class="row">
        <div class="col-sm-4 thumb">
          <figure>
            <img src="http://placehold.it/90x90" alt="">
          </figure>
        </div>
        <div class="col-sm-8">
          <div class="artic_dt">
            <a href="#" rel="nofollow" target="_blank">
            {{{ str_limit($article->title, $limit = 50, $end = '...')}}}
            </a>
            <strong>{!! $article->name !!} {!! $article->surname !!}</strong>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!--// Artic Item -->

    <a href="#" class="navi_link"><strong>22.900+</strong> Sağlık makalesi &raquo;</a>
  </div>
</div>
<!--En Yeni Makaleler Modul Bitiş-->




</div>
</section>







<section class="mobile_apps">
  <div class="container">


    <div class="col-sm-4">
      <div class="phone_stock">
        <figure>
          <img src="http://placehold.it/270x250" alt="">
        </figure>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="h4">Estetik Takvimi Mobil Uygulamasını İndirin</div>
      <ul>
        <li>Yakınınızdaki uzmanları bulun</li>
        <li>Randevu Alın</li>
        <li>Ücretsiz soru sorun</li>
      </ul>

      <div class="app_buttons">
        <a href="#"><img src="http://placehold.it/160x50" alt=""></a>
        <a href="#"><img src="http://placehold.it/160x50" alt=""></a>
      </div>


    </div>

  </div>
</section>




</div>
<!-- Doctor Page Wrapper : end -->

<!--Facebook Twitter İnstagram Youtube-->
<section class="social_links">
  <div class="container">

    <div class="col-sm-3 col-xs-12">
      <a href="#" rel="nofollow">
        <i class="fa fa-facebook"></i>
        <strong>Facebook</strong>
        <small>440.000+ Kişi beğendi</small>
      </a>
    </div>

    <div class="col-sm-3 col-xs-12">
      <a href="#" rel="nofollow">
        <i class="fa fa-twitter"></i>
        <strong>Twitter</strong>
        <small>10.300+ Kişi takipte</small>
      </a>
    </div>

    <div class="col-sm-3 col-xs-12">
      <a href="#">
        <i class="fa fa-youtube"></i>
        <strong>Youtube</strong>
        <small>10.000+ Sağlık videosu</small>
      </a>
    </div>

    <div class="col-sm-3 col-xs-12">
      <a href="#" rel="nofollow">
        <i class="fa fa-instagram"></i>
        <strong>Instagram</strong>
        <small>35.000+ Kişi takipte</small>
      </a>
    </div>


  </div>
</section>
<!--Facebook Twitter İnstagram Youtube Bitiş-->


@endsection