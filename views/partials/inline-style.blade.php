<style> 
	html, body{background:#eee; font-family:'Open Sans',sans-serif; line-height:1.8; font-size:14px;}
	a:focus{outline:none; outline-offset:0;}
	h1{margin-top:15px;}

	.logo{float:left;}
	.logo img{ margin-top:10px; display:block; max-width:256px;}
	
	.dropdown-menu{border-radius:0; border:0;}
	.dropdown-menu > li > a{padding-top:5px; padding-bottom:5px;}

	.navbar-collapse.collapse.in{border-bottom:10px solid #eee;}
	.navbar{min-height:0; background:#fff; margin-bottom:0;}
	.navbar.nav{margin-left:0;}
	.navbar.nav ul{padding-left:0;}
	.navbar-nav{margin:0;}
	.navbar-toggle{background:#fff; border:2px solid #eee; border-radius:0; position:fixed; z-index:99; right:0; top:7px; padding:12px 10px; margin-right:10px;}
	.navbar .navbar-toggle .icon-bar{background-color:#333;}

	.nav li a{text-transform:uppercase; color:#333; font-weight:500; font-size:110%;}
	.nav li li a{text-transform:none; font-weight:normal; font-size:100%;}

	.navbar{border:none; border-radius:0;}
	#navbar{padding:0;}
	ul.nav > li > a:hover{background-color:#f5f5f5;}

	.affix{top:0px; width:100%; z-index:1000; background-color:#eee;}
	.affix + .affspacer{display:block; height:50px;}

	.box-shadow{-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175); box-shadow:0 6px 12px rgba(0,0,0,.175);}

	.container {max-width:970px; margin:0 12px;}
	.top .col-sm-12{padding-left:0; padding-right:0;}

	#ajaxSearch_input,
	#username,
	#password{width:100%!important;}
	#forgotpsswd{clear:both;}
	input.button[type="submit"]{display:block;}
	label.checkbox{display:inline-block; margin-left:10px;}
	label, legend{font-weight:400;}
	#ajaxSearch_form { position:relative; }
	#searchClose { display:none !important; }
	#indicator { position:absolute; top:9px; right:12px; z-index:10; opacity:.75; }

	h2{font-size:22px;}
	.bread{padding:1em 0 0 0;}
	.mem{color:#aaa; text-align:center; padding:1em 0 2em;}

	section.main .container{background-color:#fff; padding-bottom:20px;}
	footer.footer .container{background-color:#000; color:#fff; line-height:40px;}

	section.main .content ul{list-style:none; margin:0 0 1em 0; padding:0;}
	section.main .content ul li{padding-left:1em;}
	section.main .content ul li:before{content:'\2022'; position:absolute; line-height:1.85em; margin-left:-1em;}

	.breadcrumb {padding: 0px 0px;margin-bottom: 0px;list-style: none;background-color:#fff;border-radius: 0px;}	

	.footer{text-align:center;}
	.footer .text-right{text-align:center;}

	/* JOT */
	.jot-comment{padding:5px 10px;}
	.jot-row-author{background-color:#dddddd;}
	.jot-row-alt{background-color:#f9f9f9;}
	.jot-row{background-color:#eeeeee;}
	.jot-row-up{border:1px solid #333!important;}
	.jot-row-up.panel-primary > .panel-heading{background-color:#333!important; border-color:#333!important;}
	.jot-extra{font-size:75%;}
	.jot-poster{font-size:inherit!important;}

	.dl_summaryPost img{max-width:100%; height:auto; margin:10px 0 5px; display:block;}
	.dl_summaryPost{padding-top:10px; padding-bottom:15px; border-bottom:1px solid #eee;}

	.pagination b, .pagination a {padding: 5px;}	

	div.errors{ color:#F00; }
	#EmailForm .invalidValue{ background: #FFDFDF; border:1px solid #F00; }
	#EmailForm .requiredValue{ background: #FFFFDF; border:1px solid #F00; }	

	/* Larger than mobile */
	@media (min-width:320px) {

	}

	/* Larger than phablet */
	@media (min-width:480px) {

	}

	/* Larger than tablet */
	@media (min-width:768px) {

		.container{margin:0 auto;}
		.logo{padding-left:15px;}
		.logo img{ margin-top:10px; display:block; max-width:256px;}

		.navbar{background:transparent;}
		.navbar.affix{background:#eee;}
		.navbar-collapse.collapse.in{border-bottom:0;}

		.footer{text-align:left;}
		.footer .text-right{text-align:right;}

		.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {padding-left:35px; padding-right:35px;}

	}
</style>