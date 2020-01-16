        <main>
            <?php
                if(!isset($error)) {
                    $error = $_GET['error'];
                }
                else {
                    $error = "404: NOT FOUND";
                }
            ?>
            <!--<h1>Error Message:</h1>-->
            <h2><?php echo $error ?></h2>
        </main>