<?php
    if(!isset($_SESSION)) session_start();
?>

<aside id="side_bar">

    <!--Loggin Menu-->
    <div class="side_menu">
        <h2>Login</h2>
        <form action="#" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email"/>

            <label for="password">Password:</label>
            <input type="password" name="password"/>

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
        <form action="/BlogInformatica/controllers/singUpController.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="your name..." maxlength="50" required/>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" placeholder="your last name..." maxlength="100" required/>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="your email..." maxlength="100" required/>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="your password..." maxlength="100" required/>

            <label for="birthdate">Birthdate: </label>
            <input type="date" name="birthdate" required/><br/>

            <input type="submit" value="Sign In">
        </form>
    </div>
</aside>