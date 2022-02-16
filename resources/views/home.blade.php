@extends('layouts.admin')

@section('content')

    @if (session('status'))
    	<div class="alert alert-success" role="alert">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {{ session('status') }}
    	</div>
    @endif

                    

	<section class="main-visual py-5">
	    <div class="container py-5">
		    <h1 class="main-message text-center font-weight-bold display-5 mb-4">Welcom to WanWan</h1>
		    <p class="main-submessage text-center lead mb-5">Check your family health!</p>
		
			<p class="text-center mb-3">わんちゃんの登録がまだの方はこちら</p>
			    <div class="row mb-4">
                    <div class="col-md-4 offset-md-4">
				        <a href="{{ route('dog_register') }}" class="btn btn-primary btn-lg btn-block mb-4">愛犬登録</a>
				    </div>
				</div>
			<p class="text-center mb-3">健康チェックはこちら</p>
				<div class="row mb-4">
                    <div class="col-md-4 offset-md-4">
				        <a href="{{ route('select') }}" class="btn btn-secondary btn-lg btn-block mb-4">健康チェック</a>
				    </div>
				</div>
		</div>
    </section>
@endsection
