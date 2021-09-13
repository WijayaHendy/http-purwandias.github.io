<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script>
$(document).ready(function () {
    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
    });
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo $hostname;?>/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>