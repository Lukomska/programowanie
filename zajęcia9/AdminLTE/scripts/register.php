<?php
session_start();
// print_r($_POST);
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error'] = "Wypełnij wszystkie dane";
        
    }
}

    if (!isset($_POST['terms'])) {
        $_SESSION['error'] = "Zaznacz pole z regulaminem";
        ?>
        <script>
        history.back();
        </script>
        <?php
        exit();
    }

    if ($_POST['email1'] != $_POST['email2'] ) {
        $_SESSION['error'] = "Pola email są różne!";
        ?>
        <script>
        history.back();
        </script>
        <?php
        exit();
    }

    if ($_POST['pass1'] != $_POST['pass2'] ) {
        $_SESSION['error'] = "Pola z hasłem są różne!";
        ?>
        <script>
        history.back();
        </script>
        <?php
        exit();
    }
    
?>