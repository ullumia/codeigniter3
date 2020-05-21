<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>P10 - Create Graph</title>
</head>
<script type="text/javascript"
<script type="text/javascript">
    $(.document.).ready(function() {
        console.log(.'ready');
    })
<body>
    <div id="pie" style="height: 250px;"></div>
</body>
<script>
    new Morris.Donut({
        element: 'pie',
        data: <?=$sales?>,
    });
</script>
</html>