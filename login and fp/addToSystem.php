<?php
include 'connection.php'; ?>

<?php
if (isset($_POST['submit']) != '') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $drate = $_POST['drate'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO `users`(`id`, `name`, `drate`, `email`, `password`) VALUES ('" . $id . "','" . $name . "','" . $drate . "','" . $email . "','" . $password . "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $message = "<div class='alert alert-success'>SignUp Successfull..</div>";
        header("Location:admin-homepage.php");
    } else {
        $message = "<div class='alert alert-danger'>SignUp failed..!!</div>";
    }
    
}
?>

<?php
if (isset($_POST['delete']) != '') {
    $id = $_GET['updateid'];
    $query = "delete from userspending where id = '" . $id . "'";
    $result = $conn->query($query);
    if ($result) {
        $message = "<div class='alert alert-success'>delete Successfull..</div>";
        header("Location:admin-homepage.php");
    } else {
        $message = "<div class='alert alert-danger'>delete failed..!!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-secondary">
    <div class="container w-50 mt-5">

        <?php
        $uid = $_GET['updateid'];
        $sql = "Select * from `userspending` where id = '" . $uid . "'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $drate = $row['drate'];
                $password = $row['password'];
            }
        }
        ?>

        <form method="post" class="bg-light p-5 shadow-lg">
            <h1 class="text-success">SignUp Page</h1>
            <label for="Email">ID</label>
            <input type="text" name="id" placeholder="id" value="<?php echo $id; ?>" class="form-control form-control-sm"><br>
            <label for="Email">Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" class="form-control form-control-sm"><br>
            <label for="Email">Directorate</label>
            <input type="text" name="drate" placeholder="Name" value="<?php echo $drate; ?>" class="form-control form-control-sm"><br>
            <label for="Email">Email</label>
            <input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>" class="form-control form-control-sm"><br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="********" value="<?php echo $password; ?>" class="form-control form-control-sm "><br>
            <label for="password">Re-type Password</label>
            <input type="password" name="re-password" placeholder="********" value="<?php echo $password; ?>" class="form-control form-control-sm "><br>

            <button type="submit" name="submit" class="btn btn-success btn-sm">Add User to the System</button>
            <button type="delete" name="delete" class="btn btn-danger btn-sm">Remove From the System</button>
        </form>'


    </div>
</body>

</html>