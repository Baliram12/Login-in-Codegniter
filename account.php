<div class="container">
    <h2>Welcome <?php echo $user['first_name']; ?>!</h2>
    <a href="<?php echo base_url('users/logout'); ?>" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $user['first_name']; ?>
        <a href="<?php echo site_url('users/edit/'.$user['id']); ?>" class="glyphicon glyphicon-edit">  &nbsp       
  
        <a href="<?php echo site_url(''); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a> </a></p>

      </div>
</div>