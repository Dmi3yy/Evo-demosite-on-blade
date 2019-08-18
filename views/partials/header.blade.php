<section class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" itemscope itemtype="http://schema.org/Organization">

				<a class="logo" href="@makeUrl( $modx->getConfig('site_start') )" title="{{ $modx->getConfig('site_name') }}" itemprop="url">
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

						<ul class="nav navbar-nav">
							@foreach($topmenu as $item)
								@if( isset($item['children']) )
									<li class="dropdown @if($item['id'] == $documentObject['id']) active @endif">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item['title'] }} <b class="caret"></b></a>
										<ul class="dropdown-menu">
											@foreach($item['children'] as $level2)
												<li class="@if($level2['id'] == $documentObject['id']) active @endif">
													<a href="{{ $level2['url'] }}">{{ $level2['title'] }}</a>
												</li>
											@endforeach
										</ul>
									</li>
								@else
									<li class="@if($item['id'] == $documentObject['id']) active @endif">
										<a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
									</li>
								@endif
							@endforeach
						</ul>

					</div>
				</nav>
				<div class="affspacer"></div>

			</div>
		</div>
	</div>
</section>