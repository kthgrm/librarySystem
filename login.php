<!-- Login Modal-->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    if(isset($_POST['btnLogin'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) == 1){
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['user'] = $row;
                            redirect('user/book-view.php', 'Login successfully!', 'success');
                        } else {
                            $_SESSION['status'] = 'Email or password is incorrect';
                            $_SESSION['alertType'] = 'error';
                        }
                    }

                    if(isset($_SESSION['status']) && $_SESSION['alertType'] == 'error'){
                        echo "<script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var loginModal = new bootstrap.Modal(document.getElementById('login'));
                                loginModal.show();
                            });
                        </script>";
                        alertMessage();
                    }
                ?>
                <form id="loginForm" method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>