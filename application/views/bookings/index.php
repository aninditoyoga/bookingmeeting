<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Bookings</h1>
        <a href="<?php echo site_url('booking/create'); ?>" class="btn btn-primary mb-2">Add Booking</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking->id; ?></td>
                    <td><?php echo $booking->room_name; ?></td>
                    <td><?php echo $booking->date; ?></td>
                    <td><?php echo $booking->start_time; ?></td>
                    <td><?php echo $booking->end_time; ?></td>
                    <td>
                        <a href="<?php echo site_url('booking/delete/'.$booking->id); ?>" class="btn btn-danger">Delete</a>
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
