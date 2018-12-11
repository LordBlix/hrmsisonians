<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Metronic | Form Stuff - Advance Form Samples</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="author">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   {!! HTML::style("css\metro\bootstrap.css") !!}
   {!! HTML::style("css\metro\bootstrap-responsive.css") !!}
   {!! HTML::style("css\metro\font-awesome.css") !!}
   {!! HTML::style("css\metro\style-metro.css") !!}
   {!! HTML::style("css\metro\style.css") !!}
   {!! HTML::style("css\metro\style-responsive.css") !!}
   {!! HTML::style("css\metro\default.css") !!}
   {!! HTML::style("css\metro\uniform.css") !!}

   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   {!! HTML::style("css\metro\select2_metro.css") !!}

   <!-- END PAGE LEVEL SCRIPTS -->
   <link rel="shortcut icon" href="http://www.project5.eu/PJ5_metro/favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top breakpoint-1280">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="">
            {!! HTML::image("css/metro/pic/logo.png") !!}
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">{!! HTML::image("css/metro/pic/menu-toggler.png") !!}
           
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN NOTIFICATION DROPDOWN -->   
               <li class="dropdown" id="header_notification_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-warning-sign"></i>
                  <span class="badge">6</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                     <li>
                        <p>You have 14 new notifications</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-success"><i class="icon-plus"></i></span>
                        New user registered. 
                        <span class="time">Just now</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        Server #12 overloaded. 
                        <span class="time">15 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-warning"><i class="icon-bell"></i></span>
                        Server #2 not respoding.
                        <span class="time">22 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-info"><i class="icon-bullhorn"></i></span>
                        Application error.
                        <span class="time">40 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        Database overloaded 68%. 
                        <span class="time">2 hrs</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        2 user IP blocked.
                        <span class="time">5 hrs</span>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END NOTIFICATION DROPDOWN -->
               <!-- BEGIN INBOX DROPDOWN -->
               <li class="dropdown" id="header_inbox_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-envelope-alt"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                     <li>
                        <p>You have 12 new messages</p>
                     </li>
                     <li>
                        <a href="">
                        <span class="photo">{!! HTML::image("css/metro/pic/avatar2.jpg") !!}</span>
                      
                        <span class="subject">
                        <span class="from">Lisa Wong</span>
                        <span class="time">Just Now</span>
                        </span>
                        <span class="message">
                        Vivamus sed auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="">
                        <span class="photo">{!! HTML::image("css/metro/pic/avatar3.jpg") !!}</span>
                        <span class="subject">
                        <span class="from">Richard Doe</span>
                        <span class="time">16 mins</span>
                        </span>
                        <span class="message">
                        Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="">
                        <span class="photo">{!! HTML::image("css/metro/pic/avatar1.jpg") !!}
                         </span>
                        <span class="subject">
                        <span class="from">Bob Nilson</span>
                        <span class="time">2 hrs</span>
                        </span>
                        <span class="message">
                        Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li class="external">
                        <a href="">See all messages <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END INBOX DROPDOWN -->
               <!-- BEGIN TODO DROPDOWN -->
               <li class="dropdown" id="header_task_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-tasks"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended tasks">
                     <li>
                        <p>You have 12 pending tasks</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">New release v1.2</span>
                        <span class="percent">30%</span>
                        </span>
                        <span class="progress progress-success ">
                        <span style="width: 30%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Application deployment</span>
                        <span class="percent">65%</span>
                        </span>
                        <span class="progress progress-danger progress-striped active">
                        <span style="width: 65%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile app release</span>
                        <span class="percent">98%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 98%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Database migration</span>
                        <span class="percent">10%</span>
                        </span>
                        <span class="progress progress-warning progress-striped">
                        <span style="width: 10%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Web server upgrade</span>
                        <span class="percent">58%</span>
                        </span>
                        <span class="progress progress-info">
                        <span style="width: 58%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile development</span>
                        <span class="percent">85%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 85%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="\css\metro\avatar1_small.jpg">
                  <span class="username">Bob Nilson</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href=""><i class="icon-user"></i> My Profile</a></li>
                     <li><a href=""><i class="icon-calendar"></i> My Calendar</a></li>
                     <li><a href=""><i class="icon-envelope"></i> My Inbox(3)</a></li>
                     <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                     <li class="divider"></li>
                     <li><a href=""><i class="icon-key"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        	<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search...">				
							<input type="button" class="submit" value=" ">
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				
                	        		
        		<li class="start ">
        			<a href="">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					
					
										</a>

								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-cogs"></i> 
					<span class="title">Layouts</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="">
														Horzontal &amp; Sidebar Menu							</a>
						</li>
																	<li>
							<a href="">
														Horzontal Menu 1							</a>
						</li>
																	<li>
							<a href="">
														Horzontal Menu 2							</a>
						</li>
																	<li>
							<a href="">
														Promo Page							</a>
						</li>
																	<li>
							<a href="">
														Email Templates							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/layout_ajax.html">
														Content Loading via Ajax							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/layout_sidebar_closed.html">
														Sidebar Closed Page							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/layout_blank_page.html">
														Blank Page							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/layout_full_width_page.html">
														Full Width Page							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">UI Features</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_general.html">
														General							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_buttons.html">
														Buttons							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_tabs_accordions.html">
														Tabs &amp; Accordions							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_jqueryui.html">
														jQuery UI Components							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_sliders.html">
														Sliders							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_tiles.html">
														Tiles							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_typography.html">
														Typography							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_tree.html">
														Tree View							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/ui_nestable.html">
														Nestable List							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="active ">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					
										<span class="selected"></span>
					
										<span class="arrow open"></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/form_layout.html">
														Form Layouts							</a>
						</li>
																	<li class="active">
							<a href="http://www.project5.eu/PJ5_metro/form_samples.html">
														Advance Form Samples							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/form_component.html">
														Form Components							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/form_wizard.html">
														Form Wizard							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/form_validation.html">
														Form Validation							</a>
						</li>
																	<li>
							<a href="">
														Multiple File Upload							</a>
						</li>
																	<li>
							<a href="">
														Dropzone File Upload							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-briefcase"></i> 
					<span class="title">Pages</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/page_coming_soon.html">
														<i class="icon-cogs"></i>
														Coming Soon							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/page_blog.html">
														<i class="icon-comments"></i>
														Blog							</a>
						</li>
																													<li>
							<a href="http://www.project5.eu/PJ5_metro/page_news.html">
														<i class="icon-coffee"></i>
														News							</a>
						</li>
																													<li>
							<a href="http://www.project5.eu/PJ5_metro/page_about.html">
														<i class="icon-group"></i>
														About Us							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/page_contact.html">
														<i class="icon-envelope-alt"></i>
														Contact Us							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/page_calendar.html">
														<i class="icon-calendar"></i>
														Calendar							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-gift"></i> 
					<span class="title">Extra</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_profile.html">
														User Profile							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_lock.html">
														Lock Screen							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_faq.html">
														FAQ							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/inbox.html">
														Inbox							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_search.html">
														Search Results							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_invoice.html">
														Invoice							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_pricing_table.html">
														Pricing Tables							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_image_manager.html">
														Image Manager							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_404.html">
														404 Page							</a>
						</li>
																	<li>
							<a href="http://www.project5.eu/PJ5_metro/extra_500.html">
														500 Page							</a>
						</li>
										</ul>
								</li>

								<li>
					<a class="active" href="javascript:;">
					<i class="icon-briefcase"></i> 
					<span class="title">3 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
								Item 1
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 2</a></li>
								<li><a href="#">Sample Link 3</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								Item 1
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								Item 3
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title">4 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
								<i class="icon-cogs"></i> 
								Item 1
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										<i class="icon-user"></i>
										Sample Link 1
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-globe"></i> 
								Item 2
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="icon-folder-open"></i>
								Item 3
							</a>
						</li>
					</ul>
				</li>
				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-th-list"></i> 
					<span class="title">Data Tables</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="">
														Basic Tables							</a>
						</li>
																	<li>
							<a href="">
														Responsive Tables							</a>
						</li>
																	<li>
							<a href="">
														Managed Tables							</a>
						</li>
																	<li>
							<a href="">
														Editable Tables							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-th-list"></i> 
					<span class="title">Portlets</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="">
														General Portlets							</a>
						</li>
																	<li>
							<a href="">
														Draggable Portlets							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="javascript:;">
					<i class="icon-map-marker"></i> 
					<span class="title">Maps</span>
					
					
										<span class="arrow "></span>
										</a>

									<ul class="sub-menu">
																	<li>
							<a href="">
														Google Maps							</a>
						</li>
																	<li>
							<a href="">
														Vector Maps							</a>
						</li>
										</ul>
								</li>

				
		        	        		
        		<li class="">
        			<a href="">
					<i class="icon-bar-chart"></i> 
					<span class="title">Visual Charts</span>
					
					
										</a>

								</li>

				
		        	        		
        		<li class="">
        			<a href="">
					<i class="icon-user"></i> 
					<span class="title">Login Page</span>
					
					
										</a>

								</li>

				
					</ul>
		<!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content" data-height="1038" style="">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <div class="checker" id="uniform-undefined"><span class="checked"><input type="checkbox" class="header" checked="checked" value="" style="opacity: 0;"></span></div>
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div>
                  <!-- END BEGIN STYLE CUSTOMIZER -->  
                  <h3 class="page-title">
                     Advance Form Samples
                     <small>advance form layout samples</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Form Stuff</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Form Layouts</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
            
               <div class="span12">
                  <div class="tabbable tabbable-custom boxless">
                     <ul class="nav nav-tabs">
                        <li class=""><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                        <li class=""><a class="" href="#tab_2" data-toggle="tab">2 Columns Horizontal</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab">2 Columns View Only</a></li>
                        <li class=""><a class="" href="#tab_4" data-toggle="tab">Row Seperated</a></li>
                        <li class=""><a class="" href="#tab_5" data-toggle="tab">Bordered</a></li>
                        <li class=""><a class="" href="#tab_6" data-toggle="tab">Bordered &amp; Row Stripped</a></li>
                        <li class="active"><a class="" href="#tab_7" data-toggle="tab">Bordered &amp; Label Stripped</a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane" id="tab_1">
                           <div class="portlet box blue">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="horizontal-form">
                                       <h3 class="form-section">Person Info</h3>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label" for="firstName">First Name</label>
                                                <div class="controls">
                                                   <input type="text" id="firstName" class="m-wrap span12" placeholder="Chee Kin">
                                                   <span class="help-block">This is inline help</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group error">
                                                <label class="control-label" for="lastName">Last Name</label>
                                                <div class="controls">
                                                   <input type="text" id="lastName" class="m-wrap span12" placeholder="Lim">
                                                   <span class="help-block">This field has error.</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Gender</label>
                                                <div class="controls">
                                                   <select class="m-wrap span12">
                                                      <option value="" selected="selected">Male</option>
                                                      <option value="">Female</option>
                                                   </select>
                                                   <span class="help-block">Select your gender.</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Date of Birth</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->        
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Category</label>
                                                <div class="controls">
                                                   <div class="select2-container span12 select2_category" id="s2id_autogen1"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Choose a Category</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input" tabindex="1">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" data-placeholder="Choose a Category" tabindex="-1">
                                                      <option value="" selected="selected"></option>
                                                      <option value="Category 1">Category 1</option>
                                                      <option value="Category 2">Category 2</option>
                                                      <option value="Category 3">Category 5</option>
                                                      <option value="Category 4">Category 4</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Membership</label>
                                                <div class="controls">                                                
                                                   <label class="radio">
                                                   <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                                   Free
                                                   </label>
                                                   <label class="radio">
                                                   <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                                   Professional
                                                   </label>  
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row--> 
                                       <h3 class="form-section">Address</h3>
                                       <div class="row-fluid">
                                          <div class="span12 ">
                                             <div class="control-group">
                                                <label class="control-label">Street</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">City</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">State</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->           
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Post Code</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Country</label>
                                                <div class="controls">
                                                   <select class="m-wrap span12"></select>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM--> 
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tab_2">
                           <div class="portlet box green">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="form-horizontal">
                                       <h3 class="form-section">Person Info</h3>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">First Name</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12" placeholder="Chee Kin">
                                                   <span class="help-block">This is inline help</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group error">
                                                <label class="control-label">Last Name</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12" placeholder="Lim">
                                                   <span class="help-block">This field has error.</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Gender</label>
                                                <div class="controls">
                                                   <select class="m-wrap span12">
                                                      <option value="" selected="selected">Male</option>
                                                      <option value="">Female</option>
                                                   </select>
                                                   <span class="help-block">Select your gender.</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Date of Birth</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->        
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Category</label>
                                                <div class="controls">
                                                   <div class="select2-container span12 select2_category" id="s2id_autogen3"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Choose a Category</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen4"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input" tabindex="1">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" data-placeholder="Choose a Category" tabindex="-1">
                                                      <option value="" selected="selected"></option>
                                                      <option value="Category 1">Category 1</option>
                                                      <option value="Category 2">Category 2</option>
                                                      <option value="Category 3">Category 5</option>
                                                      <option value="Category 4">Category 4</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Membership</label>
                                                <div class="controls">                                                
                                                   <label class="radio">
                                                   <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                                   Free
                                                   </label>
                                                   <label class="radio">
                                                   <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                                   Professional
                                                   </label>  
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <h3 class="form-section">Address</h3>
                                       <!--/row-->                   
                                       <div class="row-fluid">
                                          <div class="span12 ">
                                             <div class="control-group">
                                                <label class="control-label">Street</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">City</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">State</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->           
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Post Code</label>
                                                <div class="controls">
                                                   <input type="text" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Country</label>
                                                <div class="controls">
                                                   <select class="m-wrap span12">
                                                      <option selected="selected">Country 1</option>
                                                      <option>Country 2</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->                
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                           <div class="portlet box blue">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <div class="form-horizontal form-view">
                                       <h3> View User Info - Bob Nilson </h3>
                                       <h3 class="form-section">Person Info</h3>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label" for="firstName">First Name:</label>
                                                <div class="controls">
                                                   <span class="text">Bob</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label" for="lastName">Last Name:</label>
                                                <div class="controls">
                                                   <span class="text">Nilson</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Gender:</label>
                                                <div class="controls">
                                                   <span class="text">Male</span> 
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Date of Birth:</label>
                                                <div class="controls">
                                                   <span class="text bold">20.01.1984</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->        
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Category:</label>
                                                <div class="controls">
                                                   <span class="text bold">Category1</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Membership:</label>
                                                <div class="controls">                                                
                                                   <span class="text bold">Free</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->                
                                       <h3 class="form-section">Address</h3> 
                                       <div class="row-fluid">
                                          <div class="span12 ">
                                             <div class="control-group">
                                                <label class="control-label">Street:</label>
                                                <div class="controls">
                                                   <span class="text">#24 Sun Park Avenue, Rolton Str</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">City:</label>
                                                <div class="controls">
                                                   <span class="text">New York</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6">
                                             <div class="control-group">
                                                <label class="control-label">State:</label>
                                                <div class="controls">
                                                   <span class="text">New York</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                       <!--/row-->           
                                       <div class="row-fluid">
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Post Code:</label>
                                                <div class="controls">
                                                   <span class="text">457890</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                          <div class="span6 ">
                                             <div class="control-group">
                                                <label class="control-label">Country:</label>
                                                <div class="controls">
                                                   <span class="text">USA</span>
                                                </div>
                                             </div>
                                          </div>
                                          <!--/span-->
                                       </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                       <button type="button" class="btn">Back</button>
                                    </div>
                                 </div>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tab_4">
                           <div class="portlet box blue">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="control-group">
                                       <label class="control-label">First Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="small" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="medium" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Gender</label>
                                       <div class="controls">
                                          <select class="m-wrap span12">
                                             <option value="" selected="selected">Male</option>
                                             <option value="">Female</option>
                                          </select>
                                          <span class="help-block">Select your gender.</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Date of Birth</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_category" id="s2id_autogen5"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Select an option</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" tabindex="-1">
                                                <option value="" selected="selected"></option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Multi-Value Select</label>
                                       <div class="controls">
                                             <div class="select2-container select2-container-multi span12 select2_sample1" id="s2id_autogen13">    <ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input select2-default" id="s2id_autogen14" style="width: 0px;" value="Select a State">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><select class="span12 select2_sample1 select2-offscreen" multiple="multiple" tabindex="-1">
                                             <option value=""></option>
                                             <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                             </optgroup>
                                             <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                             </optgroup>
                                             <optgroup label="NFC SOUTH">
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                             </optgroup>
                                             <optgroup label="NFC WEST">
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                             </optgroup>
                                             <optgroup label="AFC EAST">
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                             </optgroup>
                                             <optgroup label="AFC NORTH">
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                             </optgroup>
                                             <optgroup label="AFC SOUTH">
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                             </optgroup>
                                             <optgroup label="AFC WEST">
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                             </optgroup>
                                             </select>
                                       </div>
                                     </div>
                                    <div class="control-group">
                                       <label class="control-label">Loading Data</label>
                                       <div class="controls">
                                          <div class="select2-container span12 select2_sample2" id="s2id_autogen21"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span></span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen22"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample2 select2-offscreen" tabindex="-1">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Tags Support List</label>
                                       <div class="controls">
                                          <div class="select2-container select2-container-multi span12 select2_sample3" id="s2id_autogen29">    <ul class="select2-choices">  <li class="select2-search-choice">    <div>red</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>blue</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input" id="s2id_autogen30" style="width: 10px;">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample3 select2-offscreen" value="red,blue" tabindex="-1">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Membership</label>
                                       <div class="controls">                                                
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                          Free
                                          </label>
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                          Professional
                                          </label>  
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Street</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">City</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">State</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Post Code</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group last">
                                       <label class="control-label">Country</label>
                                       <div class="controls">
                                          <select class="m-wrap span12"></select>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tab_5">
                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="form-horizontal form-bordered">
                                    <div class="control-group">
                                       <label class="control-label">First Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="small" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="medium" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Gender</label>
                                       <div class="controls">
                                          <select class="m-wrap span12">
                                             <option value="" selected="selected">Male</option>
                                             <option value="">Female</option>
                                          </select>
                                          <span class="help-block">Select your gender.</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Date of Birth</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_category" id="s2id_autogen7"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Select an option</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" tabindex="-1">
                                                <option value="" selected="selected"></option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Multi-Value Select</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample1" id="s2id_autogen15">    <ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input select2-default" id="s2id_autogen16" style="width: 0px;" value="Select a State">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><select class="span12 select2_sample1 select2-offscreen" multiple="multiple" tabindex="-1">
                                             <option value=""></option>
                                             <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                             </optgroup>
                                             <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                             </optgroup>
                                             <optgroup label="NFC SOUTH">
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                             </optgroup>
                                             <optgroup label="NFC WEST">
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                             </optgroup>
                                             <optgroup label="AFC EAST">
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                             </optgroup>
                                             <optgroup label="AFC NORTH">
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                             </optgroup>
                                             <optgroup label="AFC SOUTH">
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                             </optgroup>
                                             <optgroup label="AFC WEST">
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                             </optgroup>
                                             </select>
                                          </div>
                                       </div>
                                     </div>
                                    <div class="control-group">
                                       <label class="control-label">Loading Data</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_sample2" id="s2id_autogen23"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span></span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen24"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample2 select2-offscreen" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Tags Support List</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample3" id="s2id_autogen31">    <ul class="select2-choices">  <li class="select2-search-choice">    <div>red</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>blue</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input" id="s2id_autogen32" style="width: 10px;">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample3 select2-offscreen" value="red,blue" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Membership</label>
                                       <div class="controls">                                                
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                          Free
                                          </label>
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                          Professional
                                          </label>  
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Street</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">City</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">State</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Post Code</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group last">
                                       <label class="control-label">Country</label>
                                       <div class="controls">
                                          <select class="m-wrap span12"></select>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="tab_6">
                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                    <div class="control-group">
                                       <label class="control-label">First Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="small" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="medium" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Gender</label>
                                       <div class="controls">
                                          <select class="m-wrap span12">
                                             <option value="" selected="selected">Male</option>
                                             <option value="">Female</option>
                                          </select>
                                          <span class="help-block">Select your gender.</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Date of Birth</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_category" id="s2id_autogen9"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Select an option</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" tabindex="-1">
                                                <option value="" selected="selected"></option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Multi-Value Select</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample1" id="s2id_autogen17">    <ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input select2-default" id="s2id_autogen18" style="width: 0px;" value="Select a State">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><select class="span12 select2_sample1 select2-offscreen" multiple="multiple" tabindex="-1">
                                             <option value=""></option>
                                             <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                             </optgroup>
                                             <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                             </optgroup>
                                             <optgroup label="NFC SOUTH">
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                             </optgroup>
                                             <optgroup label="NFC WEST">
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                             </optgroup>
                                             <optgroup label="AFC EAST">
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                             </optgroup>
                                             <optgroup label="AFC NORTH">
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                             </optgroup>
                                             <optgroup label="AFC SOUTH">
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                             </optgroup>
                                             <optgroup label="AFC WEST">
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                             </optgroup>
                                             </select>
                                          </div>
                                       </div>
                                     </div>
                                    <div class="control-group">
                                       <label class="control-label">Loading Data</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_sample2" id="s2id_autogen25"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span></span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen26"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample2 select2-offscreen" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Tags Support List</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample3" id="s2id_autogen33">    <ul class="select2-choices">  <li class="select2-search-choice">    <div>red</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>blue</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input" id="s2id_autogen34" style="width: 10px;">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample3 select2-offscreen" value="red,blue" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Membership</label>
                                       <div class="controls">                                                
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                          Free
                                          </label>
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                          Professional
                                          </label>  
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Street</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">City</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">State</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Post Code</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group last">
                                       <label class="control-label">Country</label>
                                       <div class="controls">
                                          <select class="m-wrap span12"></select>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane active" id="tab_7">
                           <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <div class="caption"><i class="icon-reorder"></i>Form Sample</div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
                              <div class="portlet-body form">
                                 <!-- BEGIN FORM-->
                                 <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                    <div class="control-group">
                                       <label class="control-label">First Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="small" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name</label>
                                       <div class="controls">
                                          <input type="text" placeholder="medium" class="m-wrap span12">
                                          <span class="help-inline">This is inline help</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Gender</label>
                                       <div class="controls">
                                          <select class="m-wrap span12">
                                             <option value="">Male</option>
                                             <option value="" selected="selected">Female</option>
                                          </select>
                                          <span class="help-block">Select your gender.</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Date of Birth</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_category" id="s2id_autogen11"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>Select an option</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="span12 select2_category select2-offscreen" tabindex="-1">
                                                <option value="" selected="selected"></option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Multi-Value Select</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample1" id="s2id_autogen19">    <ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input select2-default" id="s2id_autogen20" style="width: 0px;" value="Select a State">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><select class="span12 select2_sample1 select2-offscreen" multiple="multiple" tabindex="-1">
                                             <option value=""></option>
                                             <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                             </optgroup>
                                             <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                             </optgroup>
                                             <optgroup label="NFC SOUTH">
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                             </optgroup>
                                             <optgroup label="NFC WEST">
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                             </optgroup>
                                             <optgroup label="AFC EAST">
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                             </optgroup>
                                             <optgroup label="AFC NORTH">
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                             </optgroup>
                                             <optgroup label="AFC SOUTH">
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                             </optgroup>
                                             <optgroup label="AFC WEST">
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                             </optgroup>
                                             </select>
                                          </div>
                                       </div>
                                     </div>
                                    <div class="control-group">
                                       <label class="control-label">Loading Data</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container span12 select2_sample2" id="s2id_autogen27"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span></span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen28"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample2 select2-offscreen" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Tags Support List</label>
                                       <div class="controls">
                                          <div class="select2-wrapper">
                                             <div class="select2-container select2-container-multi span12 select2_sample3" id="s2id_autogen35">    <ul class="select2-choices">  <li class="select2-search-choice">    <div>red</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>blue</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input" id="s2id_autogen36" style="width: 10px;">  </li></ul><div class="select2-drop select2-drop-multi" style="display:none;">   <ul class="select2-results">   </ul></div></div><input type="hidden" class="span12 select2_sample3 select2-offscreen" value="red,blue" tabindex="-1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Membership</label>
                                       <div class="controls">                                                
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span><input type="radio" name="optionsRadios2" value="option1" style="opacity: 0;"></span></div>
                                          Free
                                          </label>
                                          <label class="radio">
                                          <div class="radio" id="uniform-undefined"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked="checked" style="opacity: 0;"></span></div>
                                          Professional
                                          </label>  
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Street</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12">
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">City</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">State</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Post Code</label>
                                       <div class="controls">
                                          <input type="text" class="m-wrap span12"> 
                                       </div>
                                    </div>
                                    <div class="control-group last">
                                       <label class="control-label">Country</label>
                                       <div class="controls">
                                          <select class="m-wrap span12"></select>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                 <!-- END FORM-->  
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2013 © Metronic by keenthemes.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->
   {!!  HTML::script("css/metro/js/jquery-1.js") !!}
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
   {!!  HTML::script("css/metro/js/jquery-ui-1.js") !!}
   {!!  HTML::script("css/metro/js/bootstrap.js") !!}
   <!--[if lt IE 9]>
   <script src="assets/plugins/excanvas.js"></script>
   <script src="assets/plugins/respond.js"></script>  
   <![endif]-->   
   {!!  HTML::script("css/metro/js/breakpoints.js") !!}
 
   <!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js --> 
   {!!  HTML::script("css/metro/js/jquery_002.js") !!}
   {!!  HTML::script("css/metro/js/jquery.js") !!}
   {!!  HTML::script("css/metro/js/jquery_004.js") !!}
   {!!  HTML::script("css/metro/js/jquery_003.js") !!}
 
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   {!!  HTML::script("css/metro/js/select2.js") !!}

   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   {!!  HTML::script("css/metro/js/app.js") !!}
   {!!  HTML::script("css/metro/js/form-samples.js") !!}
    
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {    
         // initiate layout and plugins
         App.init();
         FormSamples.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   



</body><!-- END BODY --></html>