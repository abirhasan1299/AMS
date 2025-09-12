<?php
include "../configuration/config.php";
$sql = "SELECT COUNT(*) AS total FROM `cases` WHERE status='Pending'";
$result = mysqli_query($conn, $sql);
$pending = mysqli_fetch_assoc($result);

?>
    <div class="analytics-metric"><?php echo $pending['total']; ?></div>
<?php
mysqli_close($conn);
?>