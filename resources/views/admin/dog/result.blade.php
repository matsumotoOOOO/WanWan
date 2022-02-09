{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '結果画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

	<div class="container py-5">
		<h2 class="py-3">結果画面</h2>
		<p  style="font-size:20px;">チェックがついた項目は、
		<span class="text-danger h3">{{ $check->health }}</span>　でした。</p>
	
		@foreach( $results as $result )
			<div class="font-weight-bold py-4" style="font-size:20px;">
				{{ $result->check_points_contents }}
			</div>
			<p  style="font-size:18px;">{{ $result->treatment_contents }}</p><br>
		@endforeach
	
		<p  style="font-size:20px;">次回は　<span class="text-danger h3">{{ $check->nextcheck_at->format("Y年m月d日") }}</span>　にチェックしましょう</p>
	</div>

@endsection