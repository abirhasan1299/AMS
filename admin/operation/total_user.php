<?php
include "../configuration/config.php";
$sql = "SELECT COUNT(*) AS total FROM `users`";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_assoc($result);

?>
<div class="analytics-metric"><?php echo $users['total']; ?></div>
<?php
mysqli_close($conn);
?>
