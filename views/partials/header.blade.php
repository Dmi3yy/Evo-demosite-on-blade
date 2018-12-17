<section class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" itemscope itemtype="http://schema.org/Organization">

				<a class="logo" href="{{ urlProcessor::makeUrl( $modx->getConfig('site_start') ) }}" title="{{ $modx->getConfig('site_start') }}" itemprop="url">
					<img src="{{ $modx->getConfig('site_url') }}manager/media/style/default/images/misc/login-logo.png" itemprop="logo" alt="{{ $modx->getConfig('site_name') }}" />
				</a>

				<div class="clearfix"></div>

				<nav class="navbar" role="navigation" data-spy="affix" data-offset-top="100">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						
						{!! $modx->runSnippet('DLMenu',[
							'parents' => '0',
							'maxDepth' => '2',
							'outerClass' => 'nav navbar-nav',
							'hereClass' => 'active',
							'innerTpl' => '@CODE:<ul class="dropdown-menu">[+wrap+]</ul>',
							'parentRowTpl' => '@CODE:<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="[+title+]">[+title+] <b class="caret"></b></a>[+wrap+]</li>',
						]) !!}
						
					</div>
				</nav>
				<div class="affspacer"></div>

			</div>
		</div>
	</div>
</section>