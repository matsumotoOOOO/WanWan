{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'愛犬選択画面'を埋め込む --}}
@section('title', '愛犬選択画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container py-3">
        <h2 class="py-3 mb-4">どの子をチェックしますか?</h2>

        <div class="row py-5">
            @foreach($items->unique('dog_id') as $item)
            <div class="col-md-4 offset-md-2">
                
                {{-- dog_idを健康チェック画面に渡します。--}}
                <a href="{{ route('health' , ['dog_id' => $item->dog_id])}}" class="btn btn-lg btn-primary btn-block mb-3">
                    {{ $item->dog->dog_name }}ちゃん
                </a>    
            </div>
            <div class="col-md-6">
                <p class="mt-2">次回チェック日は　<span class="text-danger h3">{{ $item->nextcheck_at->format("Y年m月d日") }}</span>　です</p>
            </div>
            @endforeach
        </div>
        
    </div>

@endsection