@extends('sitemaster')
@section('title','Ana Sayfa')

@section('content')
<section>
    <div class="container">
    
      <!-- Listing Top -->
      

      <div class="clearfix"></div>
<nav class="breadcrumb" style="background-color: transparent; padding: 0px; margin-bottom: -15px;">
        Burdasınız:
        <a class="breadcrumb-item" href="/" itemprop="name">Anasayfa  <meta itemprop="position" content="1">/</a>
        <a class="breadcrumb-item" href="#" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">Kurumsal Üyelik <meta itemprop="position" content="2"></a>
        
        
      </nav>
      


      <!-- Detail Wrapper -->
      <div class="detail_wrapper">

        <div class="col-sm-12 p0">
  


         
         <div class="listing_results">

        
             <div class="container"></div><br><br><div class="container"  style="margin-bottom:40px;">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary">Kurum Üyelik Sayfası</a>
        <p></p>
      </div>
      
     
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
      
           <div class="form-group">
            <label class="control-label">Kullanıcı Adı</label>
            <input maxlength="30" type="text" required="required" class="form-control" placeholder="Kullanıcı Adını Giriniz">
          </div>
          <div class="form-group">
            <label class="control-label">Şifre</label>
            <input maxlength="30" type="password" required="required" class="form-control" placeholder="Şifre Giriniz">
          </div>
          <div class="form-group">
            <label class="control-label">E-Posta</label>
            <input maxlength="50" type="text" required="required" class="form-control" placeholder="E-Posta Adresi Giriniz">
          </div>
          <div class="form-group">
            <label class="control-label">Kurum Adı</label>
            <input maxlength="60" type="text" required="required" class="form-control" placeholder="Lütfen Kurum Adını Giriniz">
          </div>
          <div class="form-group">
            <label class="control-label">Şehir</label>
              <select name="" id="" class="form-control select2" style="width: 100%">
                <option value="İstanbul">İstanbul</option>
                <option value="İzmir">İzmir</option>
                <option value="Antalya">Antalya</option>
                <option value="Ankara">Ankara</option>
                <option value="Ankara">Ardahan</option>
                
              </select>
          </div>
           <div class="form-group">
            <label class="control-label">Telefon</label>
            <input maxlength="30" type="number" required="required" class="form-control" placeholder="Telefon Numarası Giriniz">
          </div>
          <div class="form-group">
            <label class="control-label">Adres</label>
            <textarea required="required" class="form-control" placeholder="Adresinizi Giriniz"></textarea>
          </div>

          
            
          
          <div class="form-group">
            <label class="control-label">Kurum Logo</label>
            <input type="file" name="">
          </div>
          
          <button class="btn btn-success btn-lg pull-right" type="submit">Kayıt ol</button>
    
        </div>
      </div>
    </div>
        
        
       
       
      </div>

  </form>
  
</div>

            </div>
           

        
        




        </div>





      </div>

    </div>
</section>

@endsection