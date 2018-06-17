<?php
	if(isset($_POST['search']))
	{	
		if($_POST['email']!='')
		{
			$email = filter_var($_POST['email']);
			$suggestion = $db->get_results("select * from suggestion where email='$email'");
		}
		else
		{
			$suggestion = $db->get_results("select * from suggestion");
		}
	}
	else
	{
	$suggestion = $db->get_results("select * from suggestion");
	}
	if($suggestion)
	{
?>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Suggestions</h3>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
					  <th>Phone</th>
					  <th>Option</th>
                    </tr>
					<?php
			foreach($suggestion as $tmp_suggestion)
			{
			?>
				<tr>
					<td><?php echo $tmp_suggestion->w_name;?></td>
					<td><?php echo $tmp_suggestion->w_email;?></td>
					<td><?php echo $tmp_suggestion->w_message;?></td>
					<td><?php echo $tmp_suggestion->w_phone;?></td>
					<td>
					<form action="" method="post">
						<input type="hidden" value="<?php echo $tmp_suggestion->suggestion_id;?>" name="delete_suggestion"/><button class="btn btn-group btn-danger" type="submit" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-remove"></i></button>
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
