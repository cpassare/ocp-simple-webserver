<?php

header('test-key: test-value');

?>

<html>
    <body>
        <h1>Test Page - PHP</h1>
        <p>With this page is possbile to test response headers. Try to run:
            </br>"curl -ksvI <?php ?>/index.php" to see if the "test-key" header is returned. 
        </p>
    </body>
</html>