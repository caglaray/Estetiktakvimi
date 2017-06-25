@extends('sitemaster')
@section('title','Soru Sor')

@section('content')


<article>
    <div class="container">

<span class="tx"> <strong>Burdasınız:</strong> Anasayfa / Soru Sor</span>
      <!-- Listing Top -->
      
  <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Soru Başlığı:</label>
                            <input type="text" class="form-control" id="name" placeholder="Başlık Soruyu Tanımlar Gibi Olmalıdır." required="required" />
                        </div>
                       <div class="form-group">
                            <label for="name">
                               Konumuz:</label>
                            <input type="text" class="form-control" id="name" placeholder="Konumunuz" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Uzmanlık:</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Seçin</option>
                                <option value="value1">Kategori - 1</option>
                                <option value="value2">Kategori - 2</option>
                                <option value="value3">Kategori - 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Sorunuz</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Doktor için ek bilgi yazınız."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Soru Ekleyin</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Doktorlar sorularınızı bekliyor</legend>
			<legend><span class="fa fa-life-ring"></span> Ücretsiz sorun</legend>
			<legend><span class="fa fa-bookmark-o"></span> Birkaç gün içinde yanıt
</legend>
            
         
            </form>
        </div>
    </div>
      
</div>
</article>

@endsection
