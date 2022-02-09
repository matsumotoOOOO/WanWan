{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'愛犬登録完了画面'を埋め込む --}}
@section('title', '愛犬登録完了画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container py-4">
        <h2 class="text-center mb-5">{{ $dog->dog_name }}ちゃん登録できました！</h2>

        <h2 class="text-center  mb-4">つづけて別のわんちゃんを登録したい方</h2>
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <a href="{{ route('dog_register') }}" class="btn btn-primary btn-lg btn-block mx-auto d-block">登録</a>
            </div>  
        </div>

        <h2 class="text-center  mb-4">健康チェックをしたい方</h2>
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                
                {{-- dog_idをhealthアクションに渡します --}}
                <a href="{{ route('health',['dog_id' => $dog->id ]) }}" class="btn btn-secondary btn-lg btn-block">健康チェック</a>
            </div>  
        </div>
    </div>
@endsection