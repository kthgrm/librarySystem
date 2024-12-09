<?php

    require('connection.php');
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

    function getBooks($subject = '', $search = '') {
        global $conn;
        $sql = "SELECT * FROM book WHERE 1=1";
        
        if ($subject) {
            $sql .= " AND subject = '" . mysqli_real_escape_string($conn, $subject) . "'";
        }
        
        if ($search) {
            $search = mysqli_real_escape_string($conn, $search);
            $sql .= " AND (title LIKE '%$search%' OR author LIKE '%$search%')";
        }
        
        $result = mysqli_query($conn, $sql);
        return $result;
    }
?>