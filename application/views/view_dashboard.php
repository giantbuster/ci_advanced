<div class="container">
	<div class="header-btn-area">
		<h1>Dashboard</h1>
		<a class="btn btn-primary" href="<?=base_url()?>user/add">Add new</a>
	</div>
	<div class="panel panel-default">
		<!-- Table -->
  		<table class="table">
            <thead>
             	<tr>
              		<th>ID</th>
              		<th>Name</th>
              		<th>email</th>
              		<th>created_at</th>
              		<th>user_level</th>
              		<th>actions</th>
            	</tr>
          	</thead>
	        <tbody>
            	<tr>
              		<td>1</td>
              		<td><a href="<?=base_url()?>user/show">Mark Otto</a></td>
              		<td>mark@otto.com</td>
              		<td>December 20th 2013</td>
              		<td>admin</td>
              		<td><a href="<?=base_url()?>user/edit">edit</a> <a href="#">remove</a></td>
            	</tr>
            	<tr>
              		<td>2</td>
              		<td><a href="<?=base_url()?>user/show">Mark Otto</a></td>
              		<td>mark@otto.com</td>
              		<td>December 20th 2013</td>
              		<td>admin</td>
              		<td><a href="<?=base_url()?>user/edit">edit</a> <a href="#">remove</a></td>
            	</tr>
            	<tr>
              		<td>3</td>
              		<td><a href="<?=base_url()?>user/show">Mark Otto</a></td>
              		<td>mark@otto.com</td>
              		<td>December 20th 2013</td>
              		<td>admin</td>
              		<td><a href="<?=base_url()?>user/edit">edit</a> <a href="#">remove</a></td>
            	</tr>
          	</tbody>
        </table>
	</div>
</div>