<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Rooms</h1>
        <a href="<?php echo site_url('room/create'); ?>" class="btn btn-primary mb-2">Add Room</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rooms as $room): ?>
                <tr>
                    <td><?php echo $room->id; ?></td>
                    <td><?php echo $room->name; ?></td>
                    <td>
                        <a href="<?php echo site_url('room/delete/'.$room->id); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
