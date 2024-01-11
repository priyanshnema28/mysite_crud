<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employees Data</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href = "#" class = "navbar-brand">EMPLOYEE DATA</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <h3>Create Employee</h3>
    <div class="row">
        <form name="createEmployee" action="<?php echo base_url().'index.php/user/create';?>">
        <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="Name" value="" class="form-control">
                <?php echo form_error('Name');?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="Email" value="" class="form-control">
                <?php echo form_error('Email');?>
            </div>
            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="Designation" value="" class="form-control">
                <?php echo form_error('Designation');?>
            </div>
            <div class="form-group">
                <br>
                <button class="btn btn-primary">Create</button>
                <a href="" class="btn btn-secondary">Cancel</a>
                </br>
            </div>
        </div>
        </form>
    </div>
</div>
</body>
</html>