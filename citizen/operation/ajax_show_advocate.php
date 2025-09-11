<?php

include '../../configuration/config.php';
session_start();
$specialization = $_POST['specialization'];
$type = $_POST['type'];
$lang = $_POST['lang'];
$post = $_POST['post'];

    $sql = "SELECT users.id,users.unique_code,profile.specialization,profile.name,profile.post,profile.contact,profile.meet_link,profile.language FROM users INNER JOIN profile ON users.id=profile.user_id WHERE profile.specialization LIKE '%$specialization%' OR profile.language LIKE '%$lang%' OR profile.post LIKE '%$post%'";


$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="col-md-6 col-lg-4">
        <div class="advocate-card">

            <div class=" mb-2">
                <h5 id="advocate-name" style="text-align: center;"><?php echo $row['name']; ?></h5>
            </div>
            <p class="text-muted mb-1" id="advocate-specialization-1">Speciality : <?php echo strtoupper($row['specialization']); ?> </p>
            <p class="text-muted mb-1" id="advocate-specialization-1">Post : <?php echo strtoupper($row['post']); ?> </p>
            <p class="text-muted mb-1" id="advocate-specialization-1">Meet Link : <?php echo $row['meet_link']; ?> </p>
            <p class="text-muted mb-1" id="advocate-specialization-1">Contact : <?php echo $row['contact']; ?> </p>
            <div class="d-grid">
                <a class="btn btn-book" href="citizen_booking.php?ref=<?php echo bin2hex($row['unique_code']); ?>"  role="button"><i data-lucide="calendar-plus" class="me-2"></i>Book Now</a>
            </div>
        </div>
    </div>


<?php }?>