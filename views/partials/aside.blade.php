<aside class="col-sm-4">
	<div class="search">
		<h2>Search</h2>
		
		{!! $modx->runSnippet('ifsnippet',['name' => 'AjaxSearch']) !!}

		{!! $modx->runSnippet('AjaxSearch',[
			'ajaxSearch' => '1',
			'addJscript' => '0',
			'showIntro' => '0',
			'ajaxMax' => '5',
			'extract' => '1',
			'jscript' => 'jquery',
			'tplInput' => 'AjaxSearch_tplInput',
			'tplAjaxGrpResult' => 'AjaxSearch_tplAjaxGrpResult',
			'tplAjaxResults' => 'AjaxSearch_tplAjaxResults',
			'tplAjaxResult' => 'AjaxSearch_tplAjaxResult',
			'showResults' => '1',
			'liveSearch' => '0'
		]) !!}

	</div>

	<h2>News:</h2>
	{!! $modx->runSnippet('DocLister',[
		'parents'=>'2', 
		'display'=>'2',
		'total'=>'20', 
		'tpl'=>'@CODE:<strong><a href="[+url+]" title="[+e.title+]">[+e.title+]</a></strong><br />[+longtitle+]<br /><br />'
	]) !!}

	<div>
		<h2>Most Recent:</h2>

		<ul>
			{!! $modx->runSnippet('DocLister',[
				'showInMenuOnly'=>'1', 
				'parents'=>'0',
				'display'=>'5',
				'tpl'=>'@CODE:<li><a href="[+url+]" title="[+pagetitle+]">[+pagetitle+]</a> <span class="date">[+date+]</span></li>'
			]) !!}
		</ul>

	</div>
	
</aside>