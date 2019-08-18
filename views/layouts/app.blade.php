<!DOCTYPE html>
<html lang="{{ $modx->getConfig('lang_code') }}">
	@section('head')
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset="{{ $modx->getConfig('modx_charset') }}" />
			
			<title>{{ $meta['title'] }}</title>
			<meta name="keywords" content="{{ $meta['keywords'] }}" />
			<meta name="description" content="{{ $meta['description'] }}" />

			<base href="{{ $modx->getConfig('site_url') }}"/>

			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			@if ( $modx->config['site_start'] == $documentObject['id'] )
				<link href="{{ $modx->getConfig('site_url') }}" rel="canonical">
			@else
				<link href="@makeUrl($documentObject['id'],'','','full')" rel="canonical">
			@endif
			
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">	
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

			@include('partials.inline-style')

			<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
		</head>
	@show
	
	<body>
		@section('header')
			@include('partials.header')
		@show

		<section class="main">
			<div class="container">

				<div class="row">
					<div class="col-sm-12">
						<div class="bread">

							@if ( $modx->getConfig('site_start') != $documentObject['id'] )
								@include('partials.crumbs')
							@endif
							
						</div>
					</div>
				</div>

				<div class="row content">

					<div class="col-sm-8">
						<h1>{{ $documentObject['longtitle'] }}</h1>
						
						@section('content')
							{!! $documentObject['content'] !!}
						@show
				
						@if ($documentObject['parent'] == 2 )
							@include('partials.comments')
						@endif
				
					</div>

					@section('aside')
						@include('partials.aside')
					@show	
				</div>
			</div>

		</section>
		@section('footer')
			@include('partials.footer')
		@show
	</body>
</html>