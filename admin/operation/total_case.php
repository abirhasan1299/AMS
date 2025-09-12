<?php
include "../configuration/config.php";
$sql = "SELECT COUNT(*) AS total FROM `cases`";
$result = mysqli_query($conn, $sql);
$cases = mysqli_fetch_assoc($result);

?>
<div class="analytics-metric"><?php echo $cases['total']; ?></div>
<?php
mysqli_close($conn);
?>