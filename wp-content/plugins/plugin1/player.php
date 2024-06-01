<h1>Player List</h1>

<?php
global $wpdb;
$table=$wpdb->prefix."players";
if(isset($_GET['type']) && $_GET['type'] == 'delete'){
    $wpdb->delete($table,['id'=>$_GET['id']]);
    ?>
    <script>
        window.location.assign('<?php echo esc_url(admin_url('admin.php?page=contact'));?>')
    </script>
<?php
}
$data=$wpdb->get_results("select * from $table");

?>

<table border="1" class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Type</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $k => $d) { ?>
        <tr>
            <td><?php echo $k + 1 ?></td>
            <td><?php echo $d->name ?></td>
            <td><?php echo $d->type ?></td>
            <td><?php echo $d->email ?></td>
            <td><?php echo $d->phone ?></td>
            <td>
                <a href="<?php echo esc_url(admin_url('admin.php?page=contact&type=delete&id='.$d->id)); ?>">Delete</a>
                <a href="<?php echo esc_url(admin_url('admin.php?page=contact&type=edit &id='.$d->id)); ?>">update</a>
            </td>
        </tr>
    <?php } ?>
</table>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="save_player">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="type" placeholder="player type"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <input type="submit" value="Save">
</form>