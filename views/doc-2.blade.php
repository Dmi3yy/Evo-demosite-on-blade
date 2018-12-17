@extends('layouts.app')
@section('content')
	
	{!! $modx->runSnippet('DocLister',[
		'jotcount'=>'1',
		'parents'=>'2', 
		'display'=>'2',
		'tvPrefix'=>'',
		'tvList'=>'image',
		'prepare'=>'prepareBlog',
		'summary'=>'notags,len:350',
		'tpl'=>'@CODE:
			<div class="dl_summaryPost">
				[+blog-image+]	
				<h3><a href="[~[+id+]~]" title="[+e.title+]">[+e.title+]</a></h3>
				<div class="dl_info">
					By <strong>[+author+]</strong> on [+date+].
					<a href="[+url+]#commentsAnchor">Comments <span class="badge">[+jotcount+]</span></a>
				</div>
				[+summary+]
				<p class="dl_link">[+link+]</p>
			</div>', 
		'paginate'=>'1'
		])	
	!!}

	<p>Showing <strong>{{ $modx->placeholders['current']}}</strong> of <strong>{{ $modx->placeholders['totalPages']}}</strong> Pages</p>
	<div id="dl_pages">{!! $modx->placeholders['pages'] !!}</div>
	<p>&nbsp;</p>

@endsection