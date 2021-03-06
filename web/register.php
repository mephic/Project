<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/pure.css" />
    </head>
    <body background="img/bg.jpg">
    <div id="login">
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Opret bruger</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>

        <form class="boxCont" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
        
        <ul>
            <li>Passwords skal være mindst 6 tegn langt</li>
            <li>Passwords må indeholde følgende
                <ul>
                    <li>Mindst et stort bogstav (A..Z)</li>
                    <li>Mindst et lille bogstav (a..z)</li>
                    <li>Mindst et nummer (0..9)</li>
                </ul>
            </li>
        </ul>
        <div>
            <label for="username">Navn</label>
            <input id ="username" type="text" name="username" />
        </div>

        <div>
            <label for="club_id">Flyklub id</label>
            <input id ="club_id" type="text" name="club_id" />
        </div>

        <div>
            <label for="password">Password</label>
            <input id ="password" type="password" name="password" />
        </div>

        <div>
            <label for="confirmpwd">Gentag<br>password</label>
            <input id ="confirmpwd" type="password" name="confirmpwd" />
        </div>

        <div>
        <br>
        <a href="index.php"><input class="btn left" type="button" value="Tilbage"/></a>
        <input class="btn right" type="button" value="Opret bruger" 
                  onclick="return regformhash(this.form,
                                  this.form.username,
                                  this.form.club_id,
                                  this.form.password,
                                  this.form.confirmpwd);" /> 
        </div>
        </form>
        </div>
    </body>
</html>