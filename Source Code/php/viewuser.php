<html>
<head>
    <?php
    include_once 'connection.php';
    ?>
    <title>PHP login system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p>
        <button id="Button" class="float-left submit-button"><b>View Employees</b></button>
        <script type="text/javascript">
            document.getElementById("Button").onclick = function() {
                location.href = "retrieve.php";
            };
        </script>
    </p>
</body>
</html>