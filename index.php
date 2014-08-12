<?php ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Train Exercise</title>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery-ui-1.10.4.js"></script>
    </head>
    <body>
        <form class="form-file-upload" action="handler.php" method="POST">
            <input type="file" class="file-select" name="uploadedfiles[]" multiple/>
            <button type="submit" class="button-upload">Upload and Process</button>
        </form>
        <div>
            <button type="button" class="button-clear">Clear Schedule</button>
        </div>
    </body>
    <div class="schedule">
    </div>
</html>
<script src="js/trains.js"></script>