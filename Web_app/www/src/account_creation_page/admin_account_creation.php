<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/account_creation_page_style.css">
    </head>

    <body>

        <div class="wrapper">
            <br>
            <br>
            <?php

            if (isset($_GET['error'])) {

                if ($_GET['error'] == "emptyfields") echo '<br><p style="color: red; font-family: Arial, Helvetica, sans-serif; font-weight: lighter;">Popunite sva polja.</p><br>';
                if ($_GET['error'] == "invaliduid") echo '<br><p style="color: red; font-family: Arial, Helvetica, sans-serif; font-weight: lighter;">U korisničkom imenu koristite slova, brojke, "." ili "_".</p><br>';
                if ($_GET['error'] == "passwordcheck") echo '<br><p style="color: red; font-family: Arial, Helvetica, sans-serif; font-weight: lighter;">Lozinke se ne poklapaju</p><br>';
                if ($_GET['error'] == "usertaken") echo '<br><p cstyle="color: red; font-family: Arial, Helvetica, sans-serif; font-weight: lighter;">Korisničko ime je već u uporabi.</p><br>';

            }
            if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") echo '<p style="color: green; font-family: Arial, Helvetica, sans-serif; font-weight: lighter;">Registracija uspješna.</p>';
            }

            ?>
            <br>
            <br>
            <form action="../page_scripts/signup.php" method="post" id="create_acc">
                <h2>Korisničko ime:</h2>
                <br><input type="text" name="uid" value="<?php echo $str = $_GET['uid']; ?>"><br>
                <h2>Lozinka:</h2>   
                <br><input type="password" name="pwd"><br>
                <h2>Ponovite lozinku:</h2>   
                <br><input type="password" name="pwd-repeat"><br>
                <h2>Master korisničko ime:</h2>   
                <br><input type="text" name="master-uid"><br>
                <h2>Master lozinka:</h2>   
                <br><input type="password" name="master-pwd"><br>
                <br>
                <br>
                <select name="entry" form="create_acc">
                    <option value="admin" selected hidden>Razina pristupa: admin</option>
                </select>
            </form>
            <br>
            <br>
            <button type="submit" form="create_acc" name="signup-submit">Stvori račun</button>
            <br><br><br>
            <p><a href="../index.php">Povratak na početnu stranicu</a></p>
        </div>
    </body>
</html>