<?php
	if(isset($_POST['search']))
	{	
		if($_POST['college']!='')
		{
			$college = filter_var($_POST['college']);
			$participant = $db->get_results("select * from registrations where college='$college'");
		}
		else
		{
			$participant = $db->get_results("select * from registrations");
		}
	}
	else
	{
	$participant = $db->get_results("select * from registrations");
	}
	if($participant)
	{
?>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Participant Details</h3>
                  <div class="box-tools">
				  <form action="" method='post'>
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="college" class="form-control input-sm pull-right" placeholder="College Name">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default" name="search"><i class="fa fa-search"></i></button>
                      </div>
					</div>
				  </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Participant 1</th>
                      <th>Participant 2</th>
                      <th>Participant 3</th>
                      <th>Participant 4</th>
					  <th>College</th>
					  <th>Phone</th>
					  <th>Email</th>
					  <th>Option</th>
                    </tr>
					<?php
			foreach($participant as $tmp_participant)
			{
			?>
				<tr>
					<td><?php echo $tmp_participant->participant1;?></td>
					<td><?php echo $tmp_participant->participant2;?></td>
					<td><?php echo $tmp_participant->participant3;?></td>
					<td><?php echo $tmp_participant->participant4;?></td>
					<td><?php echo $tmp_participant->college;?></td>
					<td><?php echo $tmp_participant->mobile;?></td>
					<td><?php echo $tmp_participant->email;?></td>
					<td><a href="index.php?folder=registrations&file=participantdetails&registration_id=<?php echo $tmp_participant->registration_id;?>"><button class="btn btn-group btn-default" data-toggle="tooltip" title="Details"><i class="fa fa-fw fa-list"></i></button></a>
					</td>
					<td>
					<form action="" method="post">
						<input type="hidden" value="<?php echo $tmp_participant->registration_id;?>" name="delete_participant"/><button class="btn btn-group btn-danger" type="submit" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-remove"></i></button>
					</form>
					</td>
				</tr>
		<?php
			}
		?>	
<?php
	}
?>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
</section>
