<h1>Student List</h1>
<?php 
global $wpdb;
$table=$wpdb->prefix ."students";
$data=$wpdb->get_results("select * from $table");
// echo "<pre>";
// print_r($data);
?>
<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
   <input type="hidden" name="action" value="save_student"><br><br>
    Name2:<input type="text" name="name" placeholder="enter your name"><br><br>
    Email:<input type="text" name="email" placeholder="enter your email"><br><br>
    phone:<input type="text" name="phone" placeholder="enter your phone"><br><br>
    <input type="submit" value="save">
</form>
<br><br><hr> 
<table border="1" class="table table-bordered">
<tr>
    <th>SL</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
</tr>
<?php foreach($data as $k=>$d){ ?>
<tr>
    <td><?php echo $k+1 ?></td>
    <td><?php echo $d->name ?></td>
    <td><?php echo $d->email ?></td>
    <td><?php echo $d->phone ?></td>
</tr>
    <?php } ?>
</table>