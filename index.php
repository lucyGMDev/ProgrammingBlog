<!DOCTYPE html>
<html>
    <head>
        <title>Programming Academy</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <!--Header-->
        <?php require_once ('includes/header.php')?>

        <!--Body-->

        <div id="container">
            <!--Sidebar-->
            <?php require_once ('includes/sidebar.php')?>
            <!--Latest Post-->
            <div id="lastest_posts">
                <div id="post">
                    <h2>Title</h2>
                    <h3>Category</h3>
                    <img src="assets/img/PHP_logo.png" width="100px">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p>Post Date:</p>
                </div>
                <div id="post">
                    <h2>Title</h2>
                    <h3>Category</h3>
                    <img src="assets/img/PHP_logo.png" width="100px">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p>Post Date:</p>
                </div>
                <div id="post">
                    <h2>Title</h2>
                    <h3>Category</h3>
                    <img src="assets/img/PHP_logo.png" width="100px">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <p>Post Date:</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!--Footer-->
        <?php require_once('includes/footer.php')?>
    </body>
</html>