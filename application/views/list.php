<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Employees</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href = "#" class = "navbar-brand">EMPLOYEE DATA</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">

    <div class="row">
        <div class="col-6"><h3>View Employees</h3></div>
        <div class="col-md-12">        
            <div class="row">
                
                <div class="col-6">
                    <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>

    <div class= "row">
        <div class= "col-md-12">
            <table class = "table table-stripped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th width="60">Edit</th>
                    <th width="100">Delete</th>
                </tr>
                
                <?php if(!empty($Employee_table)){ foreach($Employee_table as $Employee) {?>
                <tr>
                    <td><?php echo $Employee['User_id']?></td>
                    <td><?php echo $Employee['Name']?></td>
                    <td><?php echo $Employee['Email']?></td>
                    <td><?php echo $Employee['Designation']?></td>
                    <td>
                        <a href="<?php echo base_url().'index.php/user/update'.$Employee['User_id']?>" class="btn btn-primary">Update</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'index.php/user/delete'.$Employee['User_id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }} else { ?>
                <tr>
                    <td colspan="5">Records not found</td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>


</div>
</body>
</html>