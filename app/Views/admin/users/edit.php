
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">

				  <!--...............Full Name......................  -->
			<div class="col-lg-10 col-md-offset-1">
				<div class="col-md-4">
						<label for="first_name" class="control-label">First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $user['first_name']); ?>" class="form-control" id="first_name" />
						</div>
					</div>

					<div class="col-md-4">
						<label for="middle_name" class="control-label">Middle Name</label>
						<div class="form-group">
							<input type="text" name="middle_name" value="<?php echo ($this->input->post('middle_name') ? $this->input->post('middle_name') : $user['middle_name']); ?>" class="form-control" id="middle_name" />
						</div>
					</div>
				<div class="col-md-4">
						<label for="last_name" class="control-label">Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $user['last_name']); ?>" class="form-control" id="last_name" />
						</div>
					</div>
				</div>
  <!--...............Email and  Gender......................  -->
  <div class="col-lg-10 col-md-offset-1">
        <div class="col-md-4">
      <label for="email" class="control-label">Email </label>
			<?php $readonly = ($auth_level >=4)?'':'readonly'; ?>
	<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email"  <?= $readonly;?>>
      </div>


					<div class="form-group">
							<label for="gender" class="col-md-4 control-label">Gender</label>
							<div class="col-md-8">
								<select name="gender" class="form-control">
									<option value="">Select Gender</option>
									<?php
									$gender_values = array(
						'1'=>'Male',
						'2'=>'Female',
					);

									foreach($gender_values as $value => $display_text)
									{
										$selected = ($value == $user['gender']) ? ' selected="selected"' : "";

										echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
									}
									?>
								</select>
							</div>
						</div>
				</div>

				  <!--...............Department  and Position......................  -->
				<div class="col-lg-10 col-md-offset-1">

							<div class="col-md-6">
							     <label for="department_id" class="control-label">Department </label>
								  <select name="department_id" class="form-control">
									<option value="">Select Department</option>
					              <?php
									foreach($all_setting_department as $setting_department)
									{
										$selected = ($setting_department['id'] == $user['department_id']) ? ' selected="selected"' : "";

										echo '<option value="'.$setting_department['id'].'" '.$selected.'>'.$setting_department['department_name'].' </option>';
									}
									?>
								 </select>
							</div>
							<div class="col-md-6">
							     <label for="position_jd" class="control-label">Position </label>
								  <select name="position_id" class="form-control">
									<option value="">Select Position</option>
					              <?php
									foreach($all_setting_position as $setting_position)
									{
										$selected = ($setting_position['id'] == $user['position_jd']) ? ' selected="selected"' : "";

										echo '<option value="'.$setting_position['id'].'" '.$selected.'>'.$setting_position['position_name'].' </option>';
									}
									?>
								 </select>
					</div>
			</div>
<!-----   Picture and  Phone --->
         <div class="col-lg-10 col-md-offset-1">
		 <br>
		 <br>
			<div class="form-group">
						<label for="user_picture" class="col-md-4 control-label">Picture</label>
							<div class="col-md-8">
							<img src="<?php echo base_url('uploads/user_images'). '/' . $user['user_picture']; ?>" height=200 width=200></img>

							<input type="file" name="user_picture" value="<?php echo ($this->input->post('user_picture') ? $this->input->post('user_picture') : $user['user_picture']); ?>" id="user_picture" />
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-offset-1">
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
						</div>
					</div>
				</div>

				<div class="col-lg-10 col-md-offset-1">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
							<input type="password" name="password" placeholder="Enter Password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : ''); ?>" class="form-control" id="password" autocomplete="false"/>
						</div>

				    <div class="col-md-6">
                      <label for="password" class="control-label">Confirm Password</label>
                        <input type="password" name="cpassword" value="<?php echo $this->input->post('password'); ?>" class="form-control" placeholder="Enter Password" id="password" autocomplete="false"/>
                    </div>
				</div>


				<div class="col-lg-10 col-md-offset-1">
				<br>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
						</div>
					</div>

			   	
			<div class="col-md-12" style="margin-top:3%">
                        <div class="box-footer">
                          <div class="form-group">
                            <div class="col-md-4"></div>
                          <div class="col-md-8">
                            <button type="submit" class="btn btn-success">
                              <i class="fa fa-check"></i> Submit
                            </button>
							        <a href="<?= site_url('user/index')?>" class="btn btn-warning">
					<i class="fa fa-arrow-left"></i> Back
				</a>

                                        </div>
                                    </div>
                          </div>
                      </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>