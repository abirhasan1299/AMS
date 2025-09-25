<?php

include '../../configuration/config.php';
session_start();
$sql = "SELECT * FROM `cases` WHERE user_id={$_SESSION['id']} AND status!='Closed' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="case-list-item" id="active-case-1">
    <div>
        <h5>Case CR#<?php echo $row['code'] ;?>: <?php echo $row['title'] ;?></h5>
        <p class="text-muted mb-0">Client: <?php echo $row['client_name'] ;?> | Status:
            <span class="badge bg-<?php
            if($row['status'] == 'Assigned'){
                echo 'primary';
            }elseif ($row['status'] == 'Closed') {
                echo 'danger';
            }elseif ($row['status'] == 'Open') {
                echo 'info';
            }elseif ($row['status'] == 'In Progress') {
                echo 'warning';
            }elseif ($row['status'] == 'Pending') {
                echo 'danger';
            }elseif ($row['status'] == 'On Hold') {
                echo 'light';
            }elseif ($row['status'] == 'Dismissed') {
                echo 'dark';
            }elseif ($row['status'] == 'Active'){
                echo 'success';
            }
            ?> text-dark">
                <?php echo $row['status'] ;?>
            </span></p>
    </div>
    <div class="actions">
        <button class="btn btn-sm btn-outline-primary viewDetailsBtn"
                data-id="<?php echo $row['id']; ?>"
                data-bs-toggle="modal"
                data-bs-target="#detailsModal"><i data-lucide="eye" class="me-1"></i> View</button>

        <button class="btn btn-sm btn-outline-success updateStatusBtn" data-id="<?php echo $row['id']; ?>"
                data-status="<?php echo $row['status']; ?>"
                data-bs-toggle="modal"
                data-bs-target="#statusModal" ><i data-lucide="edit" class="me-1"></i> Update Status</button>

        <button class="btn btn-sm btn-outline-info uploadFileBtn"
                data-id="<?php echo $row['id']; ?>"
                data-bs-toggle="modal"
                data-bs-target="#uploadModal"><i data-lucide="upload" class="me-1"></i> Add File</button>
    </div>
</div>


<?php }?>