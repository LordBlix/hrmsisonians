<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Profile of Employees</title>
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

</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
   <!-- BEGIN HEADER -->
   
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
  
      <!-- BEGIN SIDEBAR -->
    
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content" data-height="1038" style="">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <div class="color-panel hidden-phone">
                
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
                              <div class="">
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

       <!-- END CONTAINER -->
       <!-- BEGIN FOOTER -->
        <div class="footer">
     2018 HRM SISON
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
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