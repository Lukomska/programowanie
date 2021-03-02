<?php
session_start();
// print_r($_POST);
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error'] = "Wypełnij wszystkie dane";
        ?>
        <script>
        history.back();
        </script>
        <?php
        exit();
    }
}

    // echo $_POST['terms'];
?>