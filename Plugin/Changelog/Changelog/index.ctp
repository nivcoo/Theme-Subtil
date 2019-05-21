<div class="jumbotron jumbotron-fluid text-center">
	<div class="container">
		<h1 class="display-3 title"><?= $Lang->get("Changelogs"); ?></h1>
	</div>
</div>
<div class="container">
  <div class="row">

	<table class="table table-striped">
	  <thead>
		<tr>
		  <th><?= $Lang->get("TABLE_HEAD_LEVEL"); ?></th>
		  <th><?= $Lang->get("TABLE_HEAD_DATE"); ?></th>
		  <th><?= $Lang->get("TABLE_HEAD_AUTHOR"); ?></th>
		  <th><?= $Lang->get("TABLE_HEAD_COMMENT"); ?></th>
		</tr>
	  </thead>

	  <tbody>
		<?php foreach($changelogs as $changlog){ ?>
		<tr>
		  <td style="font-size:18px;">

		  <?php
		  $level = $changlog['Changelogs']['level'];
		  if($level == 1){
			echo '<span class="badge badge-info" style="padding:8px;"><i class="fa fa-info-circle"></i> INFORMATION</span>';
		  }else if($level == 2){
			echo '<span class="badge badge-warning" style="padding:8px;"><i class=" fa fa-warning"></i> ATTENTION</span>';
		  }else if($level == 3){
			echo '<span class="badge badge-danger" style="padding:8px;"><i class="fa fa-warning"></i> IMPORTANT</span>';
		  }else{
			echo '<span class="badge badge-success" style="padding:8px;"><i class="fa fa-retweet"></i> MISE À JOUR</span>';
		  }
		  ?>

		  </td>
		  <td ><?= date("d-m-Y H:i:s", strtotime($changlog['Changelogs']['created'])); ?></td>
		  <td><?= $changlog['Changelogs']['author']; ?></td>
		  <td><?= $changlog['Changelogs']['description']; ?></td>
		</tr>
		<?php } ?>
	  </tbody>
	</table>

	</div>
</div>
