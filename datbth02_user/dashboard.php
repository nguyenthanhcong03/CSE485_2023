<?php
    include 'connection.php';
    $database = new Database();
    $db = $database->getConnection();
    $sql = "SELECT * FROM `cms_user` ORDER BY id DESC";
    $result = $db->prepare($sql);
    $result->execute();
    $users = $result->fetchAll();


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
       <nav
        class="navbar navbar-expand-md navbar-dark bg-dark"
       > 
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page"
                            >Home
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                        >
                        
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input
                        class="form-control me-sm-2"
                        type="text"
                        placeholder="Search"
                    />
                    <button
                        class="btn btn-outline-success my-2 my-sm-0"
                        type="submit"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
       </nav>
       
        <main>
            <div class="row">
                <div class="col col-md-4">
                    <nav
                        class="nav justify-content-start flex-column border"
                    >
                        <a class="nav-link active" href="#" aria-current="page"
                            >Dasdboard</a
                        >
                        <!-- <a class="nav-link" href="#">Posts</a>
                        <a class="nav-link disabled" href="#">Categories</a> -->
                        <a class="nav-link disabled" href="#">Users</a>
                    </nav>
                    
                </div>
                <div class="col col-md-8">
                    <h1>User Listing</h1>
                    <div class="border">
                        <a href="./admin/class/user_add.php" class="btn btn">Thêm mới</a>
                        <form>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Deleted</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                foreach($users as $user): ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $user["id"];?></th>
                                            <td><?= $user["first_name"];?></td>
                                            <td><?= $user["last_name"];?></td>
                                            <td><?= $user["email"];?></td>
                                            <td><?= $user["type"];?></td>
                                            <td><?= $user["deleted"];?></td>
                                            <td>
                                                <a href="./admin/class/user_edit.php?id=<?= $user["id"]?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Are you sure you want to delete it??');" href="./admin/controller/process_del_user.php?id=<?= $user["id"]?>"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                            <?php endforeach; ?>    
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
