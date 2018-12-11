<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>


			  
				<li class="start <?php echo e(isset($dashboardActive) ? $dashboardActive : ''); ?>">
					<a href="<?php echo e(URL::to('admin')); ?>">
					<i class="fa fa-home"></i>
					<span class="title"><?php echo Lang::get('menu.dashboard'); ?></span>
					<span class="selected"></span>
					</a>
				</li>
			     


		      
				<li class="<?php echo e(isset($employeesOpen) ? $employeesOpen : ''); ?>">
					<a href="javascript:;">
					<i class="fa fa-users"></i>
                    <span class="title"><?php echo e(Lang::get('RECRUITMENT, SELECTION AND PLACEMENT')); ?></span> 
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="<?php echo e(isset($employeesActive) ? $employeesActive : ''); ?>">
                        <a href="<?php echo e(route('admin.employees.index')); ?>">
							<i class="fa fa-users"></i>
                            <?php echo e(Lang::get('PROFILE OF EMPLOYEES')); ?></a>
						</li>
                        <li class="<?php echo e(isset($employeesActive) ? $employeesActive : ''); ?>">
							<a href="<?php echo e(route('admin.vacant.index')); ?>">
							<i class="fa fa-users"></i>
						
                            <?php echo e(Lang::get('NO. OF RETIRABLES (NEXT FIVE YEARS - 65)')); ?></a>
						</li>
                        <li class="<?php echo e(isset($employeesActive) ? $employeesActive : ''); ?>">
							<a href="<?php echo e(route('admin.vacant.create')); ?>">
							<i class="fa fa-users"></i>
						
                            <?php echo e(Lang::get('NO. OF VACANT POSITIONS - store json')); ?></a>
						</li>
                        <li class="<?php echo e(isset($employeesActive) ? $employeesActive : ''); ?>">
							<a href="<?php echo e(route('admin.publication')); ?>">
							<i class="fa fa-users"></i>
						
                            <?php echo e(Lang::get('ONLINE PUBLICATION AND RECRUITMENT')); ?></a>
						</li>

						
					</ul>
				</li>
              


              
				    <li class="<?php echo e(isset($departmentOpen) ? $departmentOpen : ''); ?>">
                					<a href="javascript:;">
                					<i class="fa fa-briefcase"></i>
                					<span class="title"><?php echo Lang::get('menu.department'); ?></span>
                					<span class="arrow "></span>
                					</a>
                					<ul class="sub-menu">
                						<li class="<?php echo e(isset($departmentActive) ? $departmentActive : ''); ?>">
                							<a href="<?php echo e(route('admin.departments.index')); ?>">
                							<i class="fa fa-briefcase"></i>
                							<?php echo Lang::get('menu.departmentList'); ?> </a>
                						</li>


                					</ul>
                    </li>
              

              
                    <li class="<?php echo e(isset($awardsOpen) ? $awardsOpen : ''); ?>">
                                <a href="javascript:;">
                                <i class="fa fa-trophy"></i>
                                <span class="title"><?php echo Lang::get('menu.award'); ?></span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="<?php echo e(isset($awardsActive) ? $awardsActive : ''); ?>">
                                        <a href="<?php echo e(route('admin.awards.index')); ?>">
                                        <i class="fa  fa-gift"></i>
                                        <?php echo Lang::get('menu.awardList'); ?></a>
                                    </li>
                                </ul>
                            </li>
            



              
                    <li class="<?php echo e(isset($expensesOpen) ? $expensesOpen : ''); ?>">
                                <a href="javascript:;">
                                <i class="fa fa-money"></i>
                                <span class="title"><?php echo Lang::get('menu.expense'); ?></span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="<?php echo e(isset($inventoryActive) ? $inventoryActive : ''); ?>">
                                        <a href="<?php echo e(route('admin.expenses.index')); ?>">
                                        <i class="fa  fa-money"></i>
                                        <?php echo Lang::get('menu.expenseList'); ?></a>
                                    </li>


                                </ul>
                     </li>
              


             
                    <li class="<?php echo e(isset($holidayOpen) ? $holidayOpen : ''); ?>">
                                <a href="javascript:;">
                                <i class="fa fa-send"></i>
                                <span class="title"><?php echo Lang::get('menu.holiday'); ?></span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="<?php echo e(isset($holidayActive) ? $holidayActive : ''); ?>">
                                        <a href="<?php echo e(route('admin.holidays.index')); ?>">
                                        <i class="fa  fa-calendar"></i>
                                        <?php echo Lang::get('menu.holidayList'); ?></a>
                                    </li>


                                </ul>
                    </li>
              


                  
                  <li class="<?php echo e(isset($attendanceOpen) ? $attendanceOpen : ''); ?>">
                           <a href="javascript:;">
                           <i class="fa fa-user"></i>
                           <span class="title"><?php echo Lang::get('menu.attendance'); ?></span>
                           <span class="arrow "></span>
                           </a>
                           <ul class="sub-menu">
                               <li class="<?php echo e(isset($markAttendanceActive) ? $markAttendanceActive : ''); ?>">
                                   <a href="<?php echo e(route('admin.attendances.create')); ?>">
                                   <i class="fa  fa-check"></i>
                                   Mark Attendance</a>
                               </li>
                                <li class="<?php echo e(isset($viewAttendanceActive) ? $viewAttendanceActive : ''); ?>">
                                       <a href="<?php echo e(route('admin.attendances.index')); ?>">
                                       <i class="fa  fa-eye"></i>
                                       <?php echo Lang::get('menu.viewAttendance'); ?></a>
                                   </li>
                               <li class="<?php echo e(isset($leaveTypeActive) ? $leaveTypeActive : ''); ?>">
                                      <a href="<?php echo e(route('admin.leavetypes.index')); ?>">
                                      <i class="fa fa-sitemap"></i>
                                      <?php echo Lang::get('menu.leaveTypes'); ?></a>
                                  </li>
                           </ul>
                     </li>

                  

                  
                  <li class="<?php echo e(isset($leaveApplicationOpen) ? $leaveApplicationOpen : ''); ?>">
                           <a href="javascript:;">
                           <i class="fa fa-rocket"></i>
                           <span class="title"><?php echo Lang::get('menu.leaveApplication'); ?></span>
                           <span class="arrow "></span>
                           </a>
                           <ul class="sub-menu">
                               <li class="<?php echo e(isset($leaveApplicationActive) ? $leaveApplicationActive : ''); ?>">
                                   <a href="<?php echo e(route('admin.leave_applications.index')); ?>">
                                   <i class="fa fa-rocket"></i>
                                   <?php echo Lang::get('menu.leaveApplicationList'); ?></a>
                               </li>

                           </ul>
                     </li>

                  


                  
                      <li class="<?php echo e(isset($noticeBoardOpen) ? $noticeBoardOpen : ''); ?>">
                                 <a href="javascript:;">
                                 <i class="fa fa-clipboard"></i>
                                 <span class="title"><?php echo Lang::get('menu.noticeBoard'); ?></span>
                                 <span class="arrow "></span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li class="<?php echo e(isset($noticeBoardActive) ? $noticeBoardActive : ''); ?>">
                                         <a href="<?php echo e(route('admin.noticeboards.index')); ?>">
                                         <i class="fa fa-clipboard"></i>
                                         <?php echo Lang::get('menu.noticeBoard'); ?></a>
                                     </li>


                                 </ul>
                    </li>

                


                  
                      <li class="<?php echo e(isset($settingOpen) ? $settingOpen : ''); ?>">
                                 <a href="javascript:;">
                                 <i class="fa fa-cogs"></i>
                                 <span class="title"><?php echo Lang::get('menu.settings'); ?></span>
                                 <span class="arrow "></span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li class="<?php echo e(isset($settingActive) ? $settingActive : ''); ?>">
                                         <a href="<?php echo e(route('admin.settings.edit','setting')); ?>">
                                         <i class="fa  fa-cog"></i>
                                        <?php echo Lang::get('menu.generalSetting'); ?></a>
                                     </li>

                                     <li class="<?php echo e(isset($profileSettingActive) ? $profileSettingActive : ''); ?>">
                                            <a href="<?php echo e(route('admin.profile_settings.edit',Auth::guard('admin')->user()->id)); ?>">
                                            <i class="fa fa-user"></i>
                                            <?php echo Lang::get('menu.profileSetting'); ?></a>
                                      </li>
                                     <li class="<?php echo e(isset($notificationSettingActive) ? $notificationSettingActive : ''); ?>">
                                         <a href="<?php echo e(route('admin.notificationSettings.edit',Auth::guard('admin')->user()->id)); ?>">
                                         <i class="fa fa-bell"></i>
                                         <?php echo Lang::get('menu.notificationSetting'); ?></a>
                                   </li>
                                 </ul>
                    </li>

                


				</li>
			
		
		
		
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->