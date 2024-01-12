<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employees Data</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href = "#" class = "navbar-brand">UPDATE DATA</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <h3>Update Employee</h3>
        <form method="post" name="updateEmployee" action="<?php echo base_url().'index.php/user/update'.$userId;?>">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
                    <?php //echo form_error('Name');?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Email" value="<?php echo set_value('Email',$user['Email']);?>" class="form-control">
                    <?php //echo form_error('Email');?>
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="Designation" value="<?php echo set_value('Designation',$user['Designation']);?>" class="form-control">
                    <?php //echo form_error('Designation');?>
                </div>
                <div class="form-group">
                    <br>
                    <button class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>
                    </br>
                </div>
            </div>
        </div>
        </form>
</div>
</body>
</html>