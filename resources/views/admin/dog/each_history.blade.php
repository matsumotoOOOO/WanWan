{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'履歴詳細画面'を埋め込む --}}
@section('title', '履歴詳細画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container">
        <h2 class="py-5 dispylay-5">{{ $dog->dog_name }}ちゃんのチェック履歴</h2>

        <div class="mt-5 bg-white">
            <table class="table py-5">
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
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <button class="btn btn-primary btn-lg mx-auto d-block my-4" onclick="history.back(-1)">戻る</button>
            </div>
        </div>
    </div>
@endsection