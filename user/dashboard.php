<?php

include "includes/session.php";

?>

<html>

<head>
    <title>User Dashboard</title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>