{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'健康チェック作成画面'を埋め込む --}}
@section('title', '健康チェック作成画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    
  
  <div class="container py-3">
      <h2 class="py-3 mb-4">{{ $dog->dog_name }}ちゃんの健康チェック</h2>

    <form method="POST" action="{{ route('check') }}" enctype="multipart/form-data" name="health_form" onchange="checkCheck()">
      @csrf

      @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <div class="alert alert-danger">{{ $e }}</div>
            @endforeach
        </ul>
      @endif

      <div class="row"> 
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>耳</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">健康な耳はニオイ・汚れ・傷・耳垢などがなく内側がピンク色をしています。<br>外見だけでなく、犬が耳をかゆがっていないかもチェックしましょう。</label>
              <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" id="1" name="health[]" value="耳のかゆみ">
                <label class="custom-control-label" for="1">耳をかゆがっている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="2" name="health[]" value="耳の汚れ">
                <label class="custom-control-label" for="2">耳の中が汚れている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="3" name="health[]" value="耳の臭い">
                <label class="custom-control-label" for="3">耳の中の臭いがひどい</label>
              </div>
          </div>
        </div>
      </div>
          
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>目</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">目やに・涙などが出ていないのが健康な状態です。他にも充血やにごりがないかも要チェック。<br>眼球の色や大きさなども確認しておきましょう</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="11" name="health[]" value="目やに・涙が多い">
                <label class="custom-control-label" for="11">目やにや涙が多い</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="12" name="health[]" value="目の濁り">
                <label class="custom-control-label" for="12">目が濁っている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="13" name="health[]" value="目の充血">
                <label class="custom-control-label" for="13">目が充血している</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="14" name="health[]" value="目が見えていない">
                <label class="custom-control-label" for="14">目がちゃんと見えていない</label>
              </div>
          </div>
        </div>
      </div>  
          
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>口</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">舌と歯茎の色がピンクであり、ニオイや歯垢がないのが健康な口内です。<br>しっかりと犬に口を開けさせ、確認しましょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="21" name="health[]" value="歯茎の色">
                <label class="custom-control-label" for="21">歯ぐきがピンク色でない</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="22" name="health[]" value="歯の汚れ">
                <label class="custom-control-label" for="22">歯垢がたまって汚れている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="23" name="health[]" value="口臭">
                <label class="custom-control-label" for="23">口臭がひどい</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="24" name="health[]" value="よだれが垂れる">
                <label class="custom-control-label" for="24">よだれを垂らしている</label>
              </div>
          </div>
        </div>
      </div>

      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>鼻</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">健康な犬の鼻は、湿り気があります。ただし、乾燥している場所や寝起きの状態などは湿り気がなくてもおかしくありません。<br>通常の状態で鼻が湿っているかどうかを確認してみましょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="31" name="health[]" value="鼻水">
                <label class="custom-control-label" for="31">鼻水が出ている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="32" name="health[]" value="くしゃみ">
                <label class="custom-control-label" for="32">くしゃみをしている</label>
              </div>
          </div>
        </div>
      </div>  
          
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>皮膚・毛</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">毛が抜けたり、赤くなっている所がないか確認しましょう。<br>かゆがっていたり、気になる部分は地肌までしっかりチェックしましょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="41" name="health[]" value="身体のかゆみ">
                <label class="custom-control-label" for="41">身体をかゆがっている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="42" name="health[]" value="皮膚の色">
                <label class="custom-control-label" for="42">皮膚の色がいつもと違う</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="43" name="health[]" value="ふけ・脱毛">
                <label class="custom-control-label" for="43">ふけや脱毛がある</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="44" name="health[]" value="毛のつや">
                <label class="custom-control-label" for="44">毛につやがない</label>
              </div>
          </div>
        </div>
      </div>
      
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>足・肉球</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">まっすぐ歩けていて、足をかばったり引きずったりする様子がないか確認しましょう。<br>肉球もしっかりチェックしましょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="51" name="health[]" value="歩き方">
                <label class="custom-control-label" for="51">歩き方がつもと違う</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="52" name="health[]" value="肉球をよく舐める">
                <label class="custom-control-label" for="52">肉球を頻繁に舐めている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="53" name="health[]" value="爪の伸び">
                <label class="custom-control-label" for="53">爪が伸びている</label>
              </div>
          </div>
        </div>
      </div>

      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>お腹</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">お腹の皮膚にに赤み・黒ずみ・湿疹などがないか確認しましょう。<br>また、お腹や乳首の部分にしこりがないかチェックしましょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="61" name="health[]" value="お腹のいぼ・ほくろ">
                <label class="custom-control-label" for="61">いぼやほくろのようなものがある</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="62" name="health[]" value="お腹のしこり">
                <label class="custom-control-label" for="62">しこりがある</label>
              </div>
          </div>
        </div>
      </div>  
        
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>排せつ</h1>
          <div class="form-group">
            <label class="control-label py-4" style="font-size:16px;">色やにおい、形、回数、排尿・排便にかかる時間を確認しましょう。<br>正常な状態を把握しておくようにしょう。</label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="71" name="health[]" value="下痢・便秘">
                <label class="custom-control-label" for="71">下痢や便秘をしている</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="72" name="health[]" value="排便のしぶり">
                <label class="custom-control-label" for="72">排便のときしぶりがある</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="73" name="health[]" value="おしっこの色">
                <label class="custom-control-label" for="73">おしっこの色がいつもと違う</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="74" name="health[]" value="おしっこの回数">
                <label class="custom-control-label" for="74">おしっこの回数が以前より多いまたは少ない</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="75" name="health[]" value="嘔吐">
                <label class="custom-control-label" for="75">嘔吐をしている</label>
              </div>
          </div>
        </div>
      </div>
      
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>全体</h1>
          <div class="form-group pt-3" >
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="81" name="health[]" value="元気に動けない">
                <label class="custom-control-label" for="81">元気に動けていない</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="82" name="health[]" value="ご飯を食べない">
                <label class="custom-control-label" for="82">ごはんをしっかり食べてくれない</label>
              </div>
          </div>
        </div>
      </div>  
        
      <div class="row">    
        <div class="col-md-12 py-4 mb-3" style="border: solid 2px #ff938b; background-color: #fffaf1;">
          <h1>全て当てはまらない</h1>
          <div class="form-group pt-3" >
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="91" name="health[]" value="ありません">
                <label class="custom-control-label" for="91">当てはまるものはない</label>
              </div>
          </div>
        </div>
      </div> 
    <button type="submit" class="btn btn-primary btn-lg mx-auto d-block my-4" id="register_btn" disabled>登録</button>
    
    {{---dog_idをコントローラに渡します---}}
    <input type="hidden" name="dog_id" value="{{ $dog->id }}">

    </form>
  </div>

<script>
  function checkCheck() {
  const button = document.getElementById("#register_btn");

  var vals = $('input[name="health[]"]:checked').map(function() {
    return $(this).val();
  }).get();
  if(vals.length == 0) {
    let boxes = document.querySelectorAll('input[type="checkbox"]');
    for (let i = 0; i < boxes.length; i++) {
      boxes[i].disabled = false;
    }
    document.getElementById("register_btn").disabled = true;
    
  } else {
    
    vals.forEach(function(element){
      if(element == "ありません") {
        let boxes = document.querySelectorAll('input[type="checkbox"]');
        for (let i = 0; i < boxes.length - 1; i++) {
          boxes[i].disabled = true;
        }
      } else {
        let boxes = document.querySelectorAll('input[type="checkbox"]');
        boxes[boxes.length - 1].disabled = true;
      }
    });
    document.getElementById("register_btn").disabled = false;
  }
  }
</script>

@endsection