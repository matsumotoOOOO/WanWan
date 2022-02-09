{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'愛犬登録画面'を埋め込む --}}
@section('title', '愛犬登録画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="container py-5">
        <h2 class="py-3">愛犬登録画面</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('messages.Dog Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('dog_register_ok') }}" enctype="multipart/form-data">
                        @csrf
                       
                            @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <div class="form-group row">
                                <label for="dog_name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Dog Name') }}</label>

                                <div class="col-md-6">
                                    <input id="dog_name" type="text" class="form-control @error('dog_name') is-invalid @enderror" name="dog_name" value="{{ old('dog_name') }}" placeholder="もふたろう"required autocomplete="dog_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dog_kind" class="col-md-4 col-form-label text-md-right">{{ __('messages.Dog Kind') }}</label>

                                <div class="col-md-6">
                                    <input id="dog_kind" type="text" class="form-control @error('dog_kind') is-invalid @enderror" name="dog_kind" value="{{ old('dog_kind') }}" placeholder="ポメラニアン" required autocomplete="dog_kind" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('messages.Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection