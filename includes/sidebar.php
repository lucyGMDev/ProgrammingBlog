<?php
    if(!isset($_SESSION)) session_start();
?>

<aside id="side_bar">

    <?php
        if(!isset($_SESSION['user'])):
    ?>
        <!--Loggin Menu-->
        <div class="side_menu">
            <h2>Login</h2>
            <?php
                if(isset($_SESSION['loginError']['formError'])):
            ?>
                    <p><?=$_SESSION['loginError']['formError']?></p>
            <?php
                    $_SESSION['loginError']['formError']="";
                endif;
            ?>
            <form action="/BlogInformatica/controllers/loginController.php" method="POST">
                <?php
                    if(isset($_SESSION['loginError']['email'])):
                ?>
                    <p><?=$_SESSION['loginError']['email']?></p>
                <?php
                        $_SESSION['loginError']['email']="";
                    endif;
                ?>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Introduce your email ..." required/>

                <?php
                    if(isset($_SESSION['loginError']['password'])):
                ?>
                        <p><?=$_SESSION['loginError']['password']?></p>
                <?php
                        $_SESSION['loginError']['password']="";
                    endif;
                ?>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Introduce your password ..." />

                <input type="submit" value="Login">
            </form>
        </div>

        <!--Register Menu-->
        <div class="side_menu">
            <h2>Sign Up</h2>
            <?php
                if(isset($_SESSION['error']['formError'])):
            ?>
                <p><?=$_SESSION['error']['formError']?></p>
            <?php
                endif;
                $_SESSION['error']['formError']="";
            ?>
            <?php
            if(isset($_SESSION['error']['save_user'])):
                ?>
                <p><?=$_SESSION['error']['save_user']?></p>
                <?php
                $_SESSION['error']['save_user']="";
            elseif (isset($_SESSION['successMessage'])):
            ?>
                <p><?=$_SESSION['successMessage']?></p>
            <?php
                    $_SESSION['successMessage']="";
                endif;
            ?>
            <form action="/BlogInformatica/controllers/singUpController.php" method="POST">
                <?php
                    if(isset($_SESSION['error']['name'])):
                ?>
                    <p><?=$_SESSION['error']['name']?></p>
                <?php
                        $_SESSION['error']['name']="";
                    endif;

                ?>
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="your name..." maxlength="50" required/>

                <?php
                    if(isset($_SESSION['error']['lastName'])):
                ?>
                    <p><?=$_SESSION['error']['lastName']?></p>
                <?php
                        $_SESSION['error']['lastName']="";
                    endif;
                ?>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" placeholder="your last name..." maxlength="100" required/>

                <?php
                    if(isset($_SESSION['error']['email'])):
                ?>
                    <p><?=$_SESSION['error']['email']?></p>
                <?php
                        $_SESSION['error']['email']="";
                    endif;
                ?>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="your email..." maxlength="100" required/>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="your password..." maxlength="100" required/>

                <?php
                    if(isset($_SESSION['error']['password'])):
                ?>
                        <p><?=$_SESSION['error']['password']?></p>
                <?php
                        $_SESSION['error']['password']="";
                    endif;
                ?>
                <label for="password">Confirm password:</label>
                <input type="password" name="confirmPassword" placeholder="repeat password..." maxlength="100" required/>

                <label for="birthdate">Birthdate: </label>
                <input type="date" name="birthdate" required/><br/>

                <input type="submit" value="Sign Up">
            </form>
        </div>
    <?php
        else:
    ?>
        <h1>Hi <?=$_SESSION['user']['email']?></h1>
    <?php
        endif;
    ?>
</aside>