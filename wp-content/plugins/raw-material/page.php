<link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<h1>Raw Material</h1>
<?php
global $wpdb;
$table = $wpdb->prefix . "raw_material";
if (isset($_GET['type']) && $_GET['type'] == 'delete') {
    $wpdb->delete($table, ['id' => $_GET['id']]);
    ?>
    <script>
        window.location.assign('<?php echo esc_url(admin_url('admin.php?page=my-top-level-slug')); ?>')
    </script>
    <?php
}
$data = $wpdb->get_results("select * from $table");

?>
<a href="<?php echo esc_url(admin_url('admin.php?page=garements')); ?>" class="btn btn-success btn-sm">Add new Material</a>

<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $k => $d) { ?>
                <tr>
                    <td>
                        <?php echo $k + 1 ?>
                    </td>
                    <td>
                        <?php echo $d->name ?>
                    </td>
                    <td>
                        <?php echo $d->price ?>
                    </td>
                    <td>
                        <a href="<?php echo esc_url(admin_url('admin.php?page=my-top-level-slug&type=delete&id=' . $d->id)); ?> "
                            class="btn btn-danger btn-sm">Delete</a>
                        <a href="<?php echo esc_url(admin_url('admin.php?page=edit&id=' . $d->id)); ?>"
                            class="btn btn-success btn-sm">update</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>