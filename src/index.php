<?php require 'titktokdownloader.php'; ?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <form action="" method="post">
                    <input type="text" name="tiktok-url" value="">
                    <button type="submit" name="button">Convert</button>
                </form>

                <!-- PHP Commands for Download -->
                <?php
                if(isset($_POST["tiktok-url"])) {
                    $check = check($_POST['tiktok-url']);
                    $contentURL = contentURL($check[1]);
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>