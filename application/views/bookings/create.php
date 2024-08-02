<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking</title>
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Add Booking</h1>
        <form action="<?php echo site_url('booking/store'); ?>" method="post">
            <div class="form-group">
                <label for="room_id">Room</label>
                <select name="room_id" class="form-control" required>
                    <?php foreach($rooms as $room): ?>
                    <option value="<?php echo $room->id; ?>"><?php echo $room->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="time" name="start_time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="time" name="end_time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
