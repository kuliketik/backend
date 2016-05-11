
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small><?php echo lang('index_heading');?></small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'><?php echo lang('index_heading');?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='box box-solid box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'><?php echo lang('index_heading');?></h3>
          </div><!-- /.box-header -->
          <div class='box-body'>
            <div class="col-md-4">
							<?php echo anchor('auth/create_user','<i class="fa fa-user-plus"> Tambah User </i>', 'class="btn btn-primary btn-flat"');?>
							|
							<?php echo anchor('auth/create_group','<i class="fa  fa-users"> Tambah Group </i>', 'class="btn btn-default btn-flat"')?>
						</div>
							<div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="infoMessage">
									<?php echo $message;?>
                </div>
            </div>
            <div class="col-md-4 text-right">

            </div>
          </div>
          <div class='box-body'>
            <table class='table table-hover'>
							<tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							</tr>
							<?php foreach ($users as $user):?>
								<tr>
			            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
									<td>
										<?php foreach ($user->groups as $group):
											if($group->name == 'admin'){
												echo anchor("auth/edit_group/".$group->id,'<i class="fa fa-user-secret"> Admin </i>','class="btn btn-primary btn-sm"');
											}
											else if($group->name == 'members'){
												echo anchor("auth/edit_group/".$group->id,'<i class="fa fa-users"> Members </i>','class="btn btn-default btn-sm"');
											}
											?>
						        <?php endforeach?>
									</td>
									<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id,'<i class="fa fa-check-square-o"> '.lang('index_active_link').' </i>','class="btn btn-success btn-sm"') : anchor("auth/activate/". $user->id,'<i class="fa  fa-minus-square"> '.lang('index_inactive_link').' </i>','class="btn btn-danger btn-sm"');?></td>
									<td><?php echo anchor("auth/edit_user/".$user->id,'<i class="fa fa-pencil-square-o"> Update </i>',array('title'=>'Update','class'=>'btn btn-danger btn-sm')) ;?></td>
								</tr>
							<?php endforeach;?>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
