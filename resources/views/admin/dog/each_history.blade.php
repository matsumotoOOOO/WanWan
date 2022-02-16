{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'履歴詳細画面'を埋め込む --}}
@section('title', '履歴詳細画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container py-3">
        <h2 class="py-3 mb-4">{{ $dog->dog_name }}ちゃんのチェック履歴</h2>

        <div class="mt-5 bg-white">
            <table class="table py-5 mb-5">
                <thead>
                    <tr>
                        <th scope="col">チェック日</th>
                        <th scope="col">はい がついた箇所</th>
                    </tr>
                </thead>
    
                @foreach ($checks as $check)
                <tbody>
                    <tr>
                        <td>{{ $check->registerd_at->format('Y年m月d日') }}</td>
                        <td>{{ $check->health }}</td>
                    </tr>
                </tbody>
                @endforeach
    
            </table>
        </div>
  
        {{--戻るボタン--}}
        <p class="text-center pt-5">履歴一覧はこちら</p>
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <button class="btn btn-primary btn-lg btn-block mx-auto d-block" onclick="history.back(-1)">履歴一覧に戻る</button>
            </div>
        </div>
        
        {{--topボタン--}}
        <p class="text-center mt-5">TOPページはこちら</p>
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <a href="{{ route('home') }}" class="btn btn-secondary btn-lg btn-block mx-auto d-block">TOPへ</a>
            </div>  
         </div>
        
    </div>
@endsection