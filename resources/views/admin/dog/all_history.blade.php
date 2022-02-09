{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'履歴一覧画面'を埋め込む --}}
@section('title', '履歴一覧画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container">

        <h2 class="py-3">履歴一覧画面</h2>
        <p class="py-3">わんちゃんの名前で履歴を絞り込めます。</p>
        <div class="dropdown py-3 mb-5">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            わんちゃんの名前を選択してください
            </button>
  
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($dogs as $dog)
                <a class="dropdown-item" href="{{ route('each_history',['dog_id'=>$dog->id]) }}">{{ $dog->dog_name }}</a>
                @endforeach
            </div>
        </div>

        <table class="table py-5 mt-4 bg-white">
            <thead>
                <tr>
                    <th scope="col">チェック日</th>
                    <th scope="col">名前</th>
                </tr>
            </thead>
    
            @foreach ($checks as $check)
            <tbody>
                <tr>
                    <td>{{ $check->registerd_at->format('Y年m月d日') }}</td>
                    <td>{{ $check->dog->dog_name }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
  
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block mx-auto d-block">TOPへ</a>
            </div>  
         </div>

    </div>

@endsection