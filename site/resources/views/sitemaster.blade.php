<!DOCTYPE html>
<html lang="tr">
<!--Head-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Anasayfa | Estetik Takvimi</title>

  <meta name="description" content="Kolaylıkla bir doktor bulun ve online bir randevu alın. Doktorlar hakkındaki görüşleri inceleyin ve kendi görüşlerinizi gönderin. 150 000 doktordan fazlasına sahibiz!">
  <meta name="robots" content="index,follow">




  <link href="{{ URL::asset('siteassets/css/bootstrap.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('siteassets/css/style.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('siteassets/css/responsive.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('siteassets/css/font-awesome.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext') }}"    rel="stylesheet" />





  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <!-- Doctor Page Wrapper -->
      <div class="doctor_page_wrapper">
        <!--Menu-->
        <header>
          <nav class="navbar navbar-default">
            <div class="container">

              <div class="col-sm-2 col-xs-12">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Estetik Takvimi <span>Yüzlerce doktora soru sor</span></a>
                </div>
              </div>


              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <div class="col-sm-6 col-xs-12">
                  <form class="navbar-form">
                    <div class="form-group col-sm-5 p0">
                      <select name="" id="" class="form-control select2" style="width: 100%">
                        <option value="Kadın Hastalıkları ve Doğum">Kadın Hastalıkları ve Doğum</option>
                        <option value="Genel Cerrahi">Genel Cerrahi</option>
                        <option value="Ortopedi ve Travmatoloji">Ortopedi ve Travmatoloji</option>
                        <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
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
                    <button type="submit" class="submit btn btn-default"><i class="fa fa-search"></i></button>
                  </form>
                </div>



                <div class="col-sm-4 col-xs-12 pull-right">

                  <div class="btn-group dropdown hidden-xs register_btn">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Kayıt ol <i class="fa fa-angle-down"></i></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><a href="#">Hasta olarak kaydolun</a></li>
                      <li><a href="#">Hekim/uzman olarak kaydolun</a></li>
                    </ul>
                  </div>

                  <a href="#" class="logon_link">Giriş Yap</a>


                  <div class="btn-group dropdown page_pass hidden-xs">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Doktor musunuz?</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Doktorlara özel bölüm</a></li>
                      <li><a href="#">Sağlık yöneticileri için</a></li>
                    </ul>
                  </div>
                </div>


              </div>




            </div>
          </nav>

        </header>



        @yield('content')



        

        <footer class="hidden-xs">
          <div class="container">
            <div class="col-sm-3">
              <div class="h4">Biz</div>
              <ul>
                <li><a href="#"  rel="nofollow">Gizlilik</a></li>
                <li><a href="#"  rel="nofollow">Hakkımızda</a></li>
                <li><a href="#"  rel="nofollow">Kariyer</a></li>
                <li><a href="#"  rel="nofollow">Kullanım Şartnamesi</a></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <div class="h4">Hastaysanız</div>
              <ul>
                <li><a href="#" rel="nofollow">Doktorlar</a></li>
                <li><a href="#" rel="nofollow">Klinikler</a></li>
                <li><a href="#" rel="nofollow">Yardım</a></li>
                <li><a href="#" rel="nofollow">Mobil uygulamalar</a></li>
                <li><a href="#" rel="nofollow">Hastalara yönelik blog</a></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <div class="h4">Uzman ve hekimler için</div>
              <ul>
                <li><a href="#" rel="nofollow">Hekimseniz</a></li>
                <li><a href="#" rel="nofollow">Sağlık yöneticileri için</a></li>
                <li><a href="#" rel="nofollow">Hizmetler</a></li>
                <li><a href="#" rel="nofollow">İnternet sitesi için Rozet</a></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <div class="h4"><img src="http://placehold.it/220x40" alt=""></div>
              <address>
                E-5 Karayolu, Esentepe Mahallesi, Lapis Han, No:25 D:102-103-120<br>
                Kartal İstanbul<br>
                Türkiye
              </address>
              <a href="#" rel="nofollow" class="btn ctbtn">Bizimle iletişim kurun</a>
            </div>



            <div class="copyright">
              <div class="col-sm-6">
                <p>www.estetiktakvimi.com © 2017 - Doktor bul ve randevu al</p>
                <p>Estetiktakvimi.com, site içeriğinde 1219 Sayılı Tababet ve Şuabatı Sanatlarının Tarzı İcrasına Dair Kanun'un 24.maddesi ve Tıbbi Deontoloji Tüzüğü'nün ilgili maddelerine uymaya söz vermiştir.</p>
              </div>
              <div class="col-sm-6">
                <p>Bu site bu <a href="#" rel="nofollow">Gizlilik Politikasına</a> uygun olarak hizmet sunmak için çerezleri kullanır. Tarayıcınızda çerezlere erişmek veya depolamak için koşulları belirleyebilirsiniz.</p>
                <p>İş bu sayfada yer alan yorumlar, ilgili doktorun doğrudan veya dolaylı emri, talebi ve/veya ricası olmaksızın, ilgili hasta tarafından bağımsız olarak yazılmaktadır. Bu web sitesinin temel amacı sağlık alanında kamuoyunun daha iyi bilgilenmesini
                  sağlamaktır. Estetiktakvimi.com bir başvuru hizmeti değildir ve herhangi bir Sağlık Hizmeti Sağlayıcısını tavsiye etmemektedir veya desteklememektedir.</p>
                </div>
              </div>
            </div>
          </footer>




          <footer class="visible-xs hidden-sm">
            <div class="container">
              <div class="list-group mbl_ft_links">
                <a href="#" rel="nofollow" class="list-group-item">Doktorlar</a>
                <a href="#" rel="nofollow" class="list-group-item">Doktor musunuz?</a>
                <a href="#" rel="nofollow" class="list-group-item">Sitenin tam versiyonu</a>
                <a href="#" rel="nofollow" class="list-group-item">www.estetiktakvimi.com &copy; 2017</a>
              </div>
            </div>
          </footer>



          <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
          <script src="{{ URL::asset('siteassets/js/bootstrap.min.js') }}"></script>





          <!-- Select2 -->




          <link href="{{ URL::asset('siteassets/plugins/select2/select2.min.css') }}"    rel="stylesheet" />
          <script src="{{ URL::asset('siteassets/plugins/select2/select2.min.js') }}"></script>


          <!-- Readmore-->

          <script src="{{ URL::asset('siteassets/js/readmore.min.js') }}"></script>


          <!-- Owl -->

          <link href="{{ URL::asset('siteassets/plugins/owl-carousel/owl.carousel.css') }}"    rel="stylesheet" />
          <link href="{{ URL::asset('siteassets/plugins/owl-carousel/owl.theme.css') }}"    rel="stylesheet" />
          <script src="{{ URL::asset('siteassets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
          <script src="{{ URL::asset('siteassets/js/main.js') }}"></script>


        </body>

        </html>
