<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
     <!--    Start main -->
     <main class=" mt-2 p-3">
        <h4 class="text-center">LOGIN SYSTEM</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_GET['error'])){
                            echo "<p style='color:red'>{$_GET['error']}</p>";
                        }
                    ?>
                    <form action="process_login.php" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Username or Email address</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--    End main -->
    <script src="./asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>