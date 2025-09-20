<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f2f5;
        }
        .update-form {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .form-title {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }
        .btn-custom {
            background: #0d6efd;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #084298;
        }
    </style>
</head>
<body>
<?php
include '../../configuration/config.php';
$sql = "SELECT * FROM users WHERE id ={$_GET['ref']}";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
    <div class="update-form">
        <h2 class="form-title">Update User</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>

            <!-- Role -->
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" name="role">
                    <option selected disabled>Choose role</option>
                    <option value="admin" <?php
                    if($row['role'] == 'admin'){
                        echo "selected";
                    }
                    ?>>Admin</option>
                    <option value="citizen" <?php
                    if($row['role'] == 'citizen'){
                        echo "selected";
                    }
                    ?>>Citizen</option>
                    <option value="advocate" <?php
                    if($row['role'] == 'advocate'){
                        echo "selected";
                    }
                    ?>>Advocate</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">
            </div>

            <!-- Submit -->
            <div class="d-grid">
                <button type="submit" class="btn btn-custom text-white">Update</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include  '../../configuration/config.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $password = $_POST['password'];

            $sql = "UPDATE users SET name='$name', email='$email', role='$role', password='$password' WHERE id='{$_GET['ref']}'";
            if (mysqli_query($conn, $sql)) {
                header('location:../admin_view_all_users.php');
            }else{
                die(mysqli_error($conn));
            }
        }

        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
