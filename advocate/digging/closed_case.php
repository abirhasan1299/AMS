<?php
include "../configuration/config.php";
$sql = "SELECT COUNT(*) AS total FROM `cases` WHERE status = 'Closed' AND user_id={$_SESSION['id']}";
$result = mysqli_query($conn, $sql);
$cases = mysqli_fetch_assoc($result);

?>
    <div class="analytics-metric" id="total-cases-metric"><?php echo $cases['total']; ?></div>
<?php
mysqli_close($conn);
?>