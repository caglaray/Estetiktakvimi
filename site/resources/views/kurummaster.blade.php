<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Estetik Takvimi - Kurum Paneli</title>   
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">



  <link href="{{ URL::asset('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}"    rel="stylesheet" />

  <link href="{{ URL::asset('assets/libs/bootstrap/css/bootstrap.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/font-awesome/css/font-awesome.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/fontello/css/fontello.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/animate-css/animate.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/nifty-modal/css/component.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/ios7-switch/ios7-switch.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/pace/pace.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/sortable/sortable-theme-bootstrap.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/bootstrap-datepicker/css/datepicker.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/jquery-icheck/skins/all.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/prettify/github.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/style.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/style-responsive.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/libs/summernote/summernote.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/style.css') }}"    rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/style-responsive.css') }}"    rel="stylesheet" />



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}" >
        <link rel="apple-touch-icon" href="{{ URL::asset('assets/img/apple-touch-icon.png') }}"  />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('assets/img/apple-touch-icon-57x57.png') }}"  />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('assets/img/apple-touch-icon-72x72.png') }}"  />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/apple-touch-icon-76x76.png') }}"  />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('assets/img/apple-touch-icon-114x114.png') }}"  />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('assets/img/apple-touch-icon-120x120.png') }}"  />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('assets/img/apple-touch-icon-144x144.png') }}"  />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('assets/img/apple-touch-icon-152x152.png') }}"  />
      </head>
      <body class="fixed-left">

        <?php $userid = Auth::user()->id; ?>
        <?php $name = Auth::user()->name; ?>
        <?php $surname = Auth::user()->surname; ?>

        <!-- Modal Start -->
        <!-- Modal Task Progress -->    

        <!-- Modal Logout -->
        <div class="md-modal md-just-me" id="logout-modal">
          <div class="md-content">
           <h3><strong>Çıkış</strong></h3>
           <div>
            <p class="text-center">Çıkmak istediğinize emin misiniz?</p>
            <p class="text-center">
              <button class="btn btn-danger md-close">Hayır</button>

              <a href="{{ route('logout') }}"
              class="btn btn-success md-close"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Evet</a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>


            </p>
          </div>
        </div>
      </div>        <!-- Modal End -->    
      <!-- Begin page -->
      <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
          <div class="topbar-left">
            <div class="logo">
              <h1><a href="#"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="Logo"></a></h1>
            </div>
            <button class="button-menu-mobile open-left">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <!-- Button mobile view to collapse sidebar menu -->
          <div class="navbar navbar-default" role="navigation">
            <div class="container">
              <div class="navbar-collapse2">
               <ul class="nav navbar-nav navbar-right top-navbar">
                <li class="dropdown iconify hide-phone">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">0</span></a>
                  <ul class="dropdown-menu dropdown-message">
                    <li class="dropdown-header notif-header"><i class="icon-bell-2"></i>Yeni Bildirimler<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                    <li class="unread">
                      <a href="#">
                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                          <br /><i>2 minutes ago</i>
                        </p>
                      </a>
                    </li>
                    <li class="unread">
                      <a href="#">
                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                          <br /><i>8 minutes ago</i>
                        </p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <p><strong>John Malkovich</strong> Added 3 products
                          <br /><i>3 hours ago</i>
                        </p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                          <br /><i>12 hours ago</i>
                        </p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <p><strong>Johnny Depp</strong> Updated his avatar
                          <br /><i>Yesterday</i>
                        </p>
                      </a>
                    </li>
                    <li class="dropdown-footer">
                      <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                          <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                        </div>
                        <div class="btn-group">
                          <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                        </div>
                        <div class="btn-group">
                          <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown iconify hide-phone">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">0</span></a>
                  <ul class="dropdown-menu dropdown-message">
                    <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> Yeni Mesajlar</li>
                    <li class="unread">
                      <a href="#" class="clearfix">
                        <img src="{{ URL::asset('images/users/chat/2.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                        <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                      </a>
                    </li>
                    <li class="unread">
                      <a href="#" class="clearfix">
                        <img src="{{ URL::asset('images/users/chat/1.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                        <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <img src="{{ URL::asset('images/users/chat/3.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                        <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                      </a>
                    </li>
                    <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                  </ul>
                </li>
                <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                <li class="dropdown topbar-profile">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{ URL::asset('images/users/user-35.jpg') }}"></span> Hoşgeldin <strong><?php echo $name ?></strong> <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Hesabım</a></li>
                    <li><a href="#">Parola Değiştir</a></li>

                    <li class="divider"></li>
                    <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Çıkış Yap</a></li>
                  </ul>
                </li>

              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <!-- Top Bar End -->
      <!-- Left Sidebar Start -->
      <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

          <div class="clearfix"></div>
          <!--- Profile -->
          <div class="profile-info">
            <div class="col-xs-4">
              <a href="{{ route('corporation.anasayfa') }}" class="rounded-image profile-image"><img src="{{ URL::asset('images/users/user-100.jpg') }}"></a>
            </div>
            <div class="col-xs-8">
              <div class="profile-text">Estetik Takvimi</div>
              <div class="profile-buttons">
                <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>

                <a class="md-trigger" data-modal="logout-modal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
              </div>
            </div>
          </div>
          <!--- Divider -->
          <div class="clearfix"></div>
          <hr class="divider" />
          <div class="clearfix"></div>
          <!--- Divider -->
          <div id="sidebar-menu">
            <ul>
              <li class=''><a href='/kurum'><i class='icon-home-3 '></i><span>Ana Sayfa</span></a></li>
              
              
              <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Doktorlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                  <li><a href='/kurum/doktor-liste'><span>Doktor Listesi</span></a></li>
                  <li><a href="{{ route('corporation.doktorekle') }}"><span>Doktor Ekle</span></a></li>
                </ul>
              </li>
              
              <li class='has_sub'><a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>İçerik Yönetimi</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                  <li><a href="{{ route('corporation.makaleler') }}"><span>Makaleler</span></a></li>
                  <li><a href="{{ route('corporation.videolar') }}"><span>Videolar</span></a></li>
                </ul>
              </li>
              <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mesajlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                  <li><a href='inbox.html'><span>Inbox</span></a></li><li><a href='read-message.html'><span>View Email</span></a></li>
                  <li><a href='new-message.html'><span>New Message</span></a></li>
                </ul>
              </li>
              

              <li class=''><a href='/kurum/about'><i class='fa fa-user'></i><span>Kurum Ayarları</span> <span class="pull-right"></span></a>

              </li>

              
            </ul>                  
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>









          <div class="clearfix"></div><br><br><br>
        </div>

      </div>

      <!-- Start right content -->
      <div class="content-page">
       <!-- ============================================================== -->
       <!-- Start Content here -->
       <!-- ============================================================== -->
       <div class="content">
         <!-- Page Heading Start -->




         @hasSection('title')
         <div class="page-heading">

           <h1><i class='fa fa-magic'></i>@yield('title')</h1> 
         </div>
         @endif






         <!-- Page Heading End-->              
         <div class="row">
          <div class="col-md-12 portlets">


            @yield('content')



          </div>
        </div>

        <!-- Footer Start -->
        <footer>
          <div class="footer-links pull-left">

           " User ID = <?php echo $userid; ?> " 
         </div>
         <div class="footer-links pull-right">

          Estetik Takvimi &copy; 2017
        </div>
      </footer>
      <!-- Footer End -->         
    </div>
    <!-- ============================================================== -->
    <!-- End content here -->
    <!-- ============================================================== -->

  </div>
  <!-- End right content -->

</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
  var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script src="{{ URL::asset('assets/libs/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js') }}"></script>
<script src="{{ URL::asset('assets/libs/ios7-switch/ios7.switch.js') }}"></script>
<script src="{{ URL::asset('assets/libs/fastclick/fastclick.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-blockui/jquery.blockUI.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-bootbox/bootbox.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.js') }}"></script>
<script src="{{ URL::asset('assets/libs/nifty-modal/js/classie.js') }}"></script>
<script src="{{ URL::asset('assets/libs/nifty-modal/js/modalEffects.js') }}"></script>
<script src="{{ URL::asset('assets/libs/sortable/sortable.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-fileinput/bootstrap.file-input.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ URL::asset('assets/libs/pace/pace.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery-icheck/icheck.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-inputmask/inputmask.js') }}"></script>
<script src="{{ URL::asset('assets/libs/summernote/summernote.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/forms.js') }}"></script>
<script src="{{ URL::asset('assets/libs/prettify/prettify.js') }}"></script>
<script src="{{ URL::asset('assets/js/init.js') }}"></script>

</body>
</html>