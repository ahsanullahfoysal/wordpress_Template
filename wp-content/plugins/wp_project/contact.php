<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="save_contact"><br>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <textarea name="msg" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="save">

</form>