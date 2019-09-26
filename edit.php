<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                 <div class="panel-heading">Please Edit Here!! <a href="<?php echo site_url('users/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post"  class="form">
                        <div class="form-group">
                            <label for="first_name"> Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Name" value="<?php echo !empty($users['first_name'])?$users['first_name']:''; ?>">
                            <?php echo form_error('first_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                      
                       
                       
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Update"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
