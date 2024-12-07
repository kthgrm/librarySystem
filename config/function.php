<?php

    require('config/connection.php');
    session_start();

    
    function alertMessage() {
        if (isset($_SESSION['status']) && isset($_SESSION['alertType'])) {
            $alertType = $_SESSION['alertType'] == 'error' ? 'alert-warning' : 'alert-success';
            echo '<div class="alert ' . $alertType . '">
                <h4>' . $_SESSION['status'] . '</h4>
            </div>';
            unset($_SESSION['status']);
            unset($_SESSION['alertType']);
        }
    }

    function redirect($location, $message, $alertType) {
        $_SESSION['status'] = $message;
        $_SESSION['alertType'] = $alertType;
        header('Location: ' . $location);
    }
?>