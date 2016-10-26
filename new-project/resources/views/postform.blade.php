

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Post Form - Admin Panel</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Admin Panel
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								UI &amp; Elements
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Layouts
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Top Menu
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Three Level Menu
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-leaf green"></i>
											Item #1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											4th level
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													Add Product
												</a>

												<b class="arrow"></b>
											</li>

											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													View Products
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Forms</a>
							</li>
							<li class="active">Posts</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>New Post</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Title</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="wysiwyg-toolbar btn-toolbar center wysiwyg-style2"> <div class="btn-group">  <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font" aria-expanded="false"><i class=" ace-icon fa fa-font"></i><i class=" ace-icon fa fa-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light dropdown-caret"> <li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li>  <li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li>  <li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li>  <li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li>  <li><a data-edit="fontName Open Sans" style="font-family:'Open Sans'">Open Sans</a></li>  <li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li>  <li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li>  </ul> </div> <div class="btn-group">  <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size" aria-expanded="false"><i class=" ace-icon fa fa-text-height"></i>&nbsp;<i class=" ace-icon fa fa-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light dropdown-caret">  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>  </ul>  </div> <div class="btn-group">  <a class="btn btn-sm btn-info" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class=" ace-icon fa fa-bold"></i></a>  <a class="btn btn-sm btn-info" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class=" ace-icon fa fa-italic"></i></a>  <a class="btn btn-sm btn-info" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class=" ace-icon fa fa-strikethrough"></i></a>  <a class="btn btn-sm btn-info" data-edit="underline" title="" data-original-title="Underline"><i class=" ace-icon fa fa-underline"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-success" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class=" ace-icon fa fa-list-ul"></i></a>  <a class="btn btn-sm btn-success" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class=" ace-icon fa fa-list-ol"></i></a>  <a class="btn btn-sm btn-purple" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class=" ace-icon fa fa-outdent"></i></a>  <a class="btn btn-sm btn-purple" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class=" ace-icon fa fa-indent"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-primary active" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class=" ace-icon fa fa-align-left"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class=" ace-icon fa fa-align-center"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class=" ace-icon fa fa-align-right"></i></a>  <a class="btn btn-sm btn-inverse" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class=" ace-icon fa fa-align-justify"></i></a>  </div> <div class="btn-group">  <div class="btn-group"> <a class="btn btn-sm btn-pink dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class=" ace-icon fa fa-link"></i></a>  <div class="dropdown-menu dropdown-caret dropdown-menu-right">							 <div class="input-group">								<input class="form-control" placeholder="URL" type="text" data-edit="createLink">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Add</button>								</span>							 </div>						</div> </div> <a class="btn btn-sm btn-pink" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class=" ace-icon fa fa-chain-broken"></i></a>  </div> <div class="btn-group">  <div class="btn-group"> <a class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Insert picture"><i class=" ace-icon fa fa-picture-o"></i></a>  <div class="dropdown-menu dropdown-caret dropdown-menu-right">							 <div class="input-group">								<input class="form-control" placeholder="Image URL" type="text" data-edit="insertImage">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Insert</button>								</span>							 </div><div class="space-2"></div>							 <label class="center block no-margin-bottom">								<button class="btn btn-sm btn-success wysiwyg-choose-file" type="button"><i class=" ace-icon fa fa-file"></i> Choose Image …</button>								<input type="file" data-edit="insertImage">							  </label> </div> </div> </div> <div class="btn-group">  <select class="hide wysiwyg_colorpicker" title="Change Color">  <option value="#ac725e">#ac725e</option>  <option value="#d06b64">#d06b64</option>  <option value="#f83a22">#f83a22</option>  <option value="#fa573c">#fa573c</option>  <option value="#ff7537">#ff7537</option>  <option value="#ffad46">#ffad46</option>  <option value="#42d692">#42d692</option>  <option value="#16a765">#16a765</option>  <option value="#7bd148">#7bd148</option>  <option value="#b3dc6c">#b3dc6c</option>  <option value="#fbe983">#fbe983</option>  <option value="#fad165">#fad165</option>  <option value="#92e1c0">#92e1c0</option>  <option value="#9fe1e7">#9fe1e7</option>  <option value="#9fc6e7">#9fc6e7</option>  <option value="#4986e7">#4986e7</option>  <option value="#9a9cff">#9a9cff</option>  <option value="#b99aff">#b99aff</option>  <option value="#c2c2c2">#c2c2c2</option>  <option value="#cabdbf">#cabdbf</option>  <option value="#cca6ac">#cca6ac</option>  <option value="#f691b2">#f691b2</option>  <option value="#cd74e6">#cd74e6</option>  <option value="#a47ae2">#a47ae2</option>  <option value="#444444">#444444</option>  </select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle" data-position="auto"><span class="btn-colorpicker" style="background-color:#ac725e" data-original-title="" title=""></span></a><ul class="dropdown-menu dropdown-caret dropdown-menu-right"><li><a class="colorpick-btn selected" style="background-color:#ac725e;" data-color="#ac725e"></a></li><li><a class="colorpick-btn" style="background-color:#d06b64;" data-color="#d06b64"></a></li><li><a class="colorpick-btn" style="background-color:#f83a22;" data-color="#f83a22"></a></li><li><a class="colorpick-btn" style="background-color:#fa573c;" data-color="#fa573c"></a></li><li><a class="colorpick-btn" style="background-color:#ff7537;" data-color="#ff7537"></a></li><li><a class="colorpick-btn" style="background-color:#ffad46;" data-color="#ffad46"></a></li><li><a class="colorpick-btn" style="background-color:#42d692;" data-color="#42d692"></a></li><li><a class="colorpick-btn" style="background-color:#16a765;" data-color="#16a765"></a></li><li><a class="colorpick-btn" style="background-color:#7bd148;" data-color="#7bd148"></a></li><li><a class="colorpick-btn" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a></li><li><a class="colorpick-btn" style="background-color:#fbe983;" data-color="#fbe983"></a></li><li><a class="colorpick-btn" style="background-color:#fad165;" data-color="#fad165"></a></li><li><a class="colorpick-btn" style="background-color:#92e1c0;" data-color="#92e1c0"></a></li><li><a class="colorpick-btn" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a></li><li><a class="colorpick-btn" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a></li><li><a class="colorpick-btn" style="background-color:#4986e7;" data-color="#4986e7"></a></li><li><a class="colorpick-btn" style="background-color:#9a9cff;" data-color="#9a9cff"></a></li><li><a class="colorpick-btn" style="background-color:#b99aff;" data-color="#b99aff"></a></li><li><a class="colorpick-btn" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a></li><li><a class="colorpick-btn" style="background-color:#cabdbf;" data-color="#cabdbf"></a></li><li><a class="colorpick-btn" style="background-color:#cca6ac;" data-color="#cca6ac"></a></li><li><a class="colorpick-btn" style="background-color:#f691b2;" data-color="#f691b2"></a></li><li><a class="colorpick-btn" style="background-color:#cd74e6;" data-color="#cd74e6"></a></li><li><a class="colorpick-btn" style="background-color:#a47ae2;" data-color="#a47ae2"></a></li><li><a class="colorpick-btn" style="background-color:#444444;" data-color="#444444"></a></li></ul></div>  <input style="display:none;" disabled="" class="hide" type="text" data-edit="foreColor">  </div> <div class="btn-group">  <a class="btn btn-sm btn-grey" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class=" ace-icon fa fa-undo"></i></a>  <a class="btn btn-sm btn-grey" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class=" ace-icon fa fa-repeat"></i></a>  </div>  </div>
									<div class="wysiwyg-editor" id="editor1"></div>
								</form>	
								<div class="col-md-offset-3 col-md-9" align="center">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											
										</div>

								<div class="hr hr-double dotted"></div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Oxenlab</span>
							 &copy; 2016-2017
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/markdown.min.js"></script>
		<script src="assets/js/bootstrap-markdown.min.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/bootbox.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){
	
	$('textarea[data-provide="markdown"]').each(function(){
        var $this = $(this);

		if ($this.data('markdown')) {
		  $this.data('markdown').showEditor();
		}
		else $this.markdown()
		
		$this.parent().find('.btn').addClass('btn-white');
    })
	
	
	
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			//console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

	//but we want to change a few buttons colors for the third style
	$('#editor1').ace_wysiwyg({
		toolbar:
		[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
		],
		'wysiwyg': {
			fileUploadError: showErrorAlert
		}
	}).prev().addClass('wysiwyg-style2');

	
	/**
	//make the editor have all the available height
	$(window).on('resize.editor', function() {
		var offset = $('#editor1').parent().offset();
		var winHeight =  $(this).height();
		
		$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
	}).triggerHandler('resize.editor');
	*/
	

	$('#editor2').css({'height':'200px'}).ace_wysiwyg({
		toolbar_place: function(toolbar) {
			return $(this).closest('.widget-box')
			       .find('.widget-header').prepend(toolbar)
				   .find('.wysiwyg-toolbar').addClass('inline');
		},
		toolbar:
		[
			'bold',
			{name:'italic' , title:'Change Title!', icon: 'ace-icon fa fa-leaf'},
			'strikethrough',
			null,
			'insertunorderedlist',
			'insertorderedlist',
			null,
			'justifyleft',
			'justifycenter',
			'justifyright'
		],
		speech_button: false
	});
	

	$('[data-toggle="buttons"] .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		var toolbar = $('#editor1').prev().get(0);
		if(which >= 1 && which <= 4) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
			if(which == 4) {
				$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
			} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
		}
	});
	

	//RESIZE IMAGE
	
	//Add Image Resize Functionality to Chrome and Safari
	//webkit browsers don't have image resize functionality when content is editable
	//so let's add something using jQuery UI resizable
	//another option would be opening a dialog for user to enter dimensions.
	if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {
		
		var lastResizableImg = null;
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

		var enableImageResize = function() {
			$('.wysiwyg-editor')
			.on('mousedown', function(e) {
				var target = $(e.target);
				if( e.target instanceof HTMLImageElement ) {
					if( !target.data('resizable') ) {
						target.resizable({
							aspectRatio: e.target.width / e.target.height,
						});
						target.data('resizable', true);
						
						if( lastResizableImg != null ) {
							//disable previous resizable image
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
						}
						lastResizableImg = target;
					}
				}
			})
			.on('click', function(e) {
				if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
					destroyResizable();
				}
			})
			.on('keydown', function() {
				destroyResizable();
			});
	    }
		enableImageResize();
	}
});
		</script>
	</body>
</html>
