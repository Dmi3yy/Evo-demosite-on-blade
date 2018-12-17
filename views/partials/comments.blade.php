<div id="commentsAnchor">
	{!! $modx->runSnippet('ifsnippet',['name' => 'JotX']) !!}

	{!! $modx->runSnippet('JotX',[
		'customfields' => 'name,email',
		'subscribe'=>'1',
		'pagination'=>'4',
		'badwords'=>'dotNet',
		'canmoderate'=>'Site Admins',
		'tplForm'=>'Comments_tplForm',
		'tplComments'=>'Comments_tplComments'
	]) !!}

</div>