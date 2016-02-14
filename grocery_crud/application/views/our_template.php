<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='/home.php'>Home</a> |
        <a href='<?php echo site_url('welcome/employees')?>'>Employees</a> | 
        <a href='<?php echo site_url('welcome/jobs')?>'>Jobs</a> |
        <a href='<?php echo site_url('welcome/job_history')?>'>Job History</a> |
        <a href='<?php echo site_url('welcome/locations')?>'>Locations</a> |
        <a href='<?php echo site_url('welcome/regions')?>'>Regions</a> | 
        <a href='<?php echo site_url('welcome/users')?>'>Users</a> |
        <a href='<?php echo site_url('welcome/countries')?>'>Countries</a> | 
        <a href='<?php echo site_url('welcome/departments')?>'>Departments</a>
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<!-- <div>Footer</div> -->
<!-- End of Footer -->
</body>
</html>