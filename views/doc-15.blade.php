@extends('layouts.app')
@section('content')
	
	{!! $modx->runSnippet('DLMenu',[
		'parents'=>'15', 
		'outerClass'=>'topnav',
		])	
	!!}

@endsection