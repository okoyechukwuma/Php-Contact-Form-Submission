<?php include "inc/header.php"; ?>
        <h1>your profile</h1>
        <div class="profile">
             <h3>First Name</h3>
             <p><?php echo $_POST["first"]; ?></p>
             <h3>Last Name</h3>
             <p><?php echo $_POST["last"]; ?></p>
             <h3>Email</h3>
             <p><?php echo $_POST["mail"]; ?></p>
             <h3>Gender</h3>
             <p><?php echo $_POST["gender"]; ?></p>
             <h3>Deparment</h3>
             <p><?php echo $_POST["dep"]; ?></p>
        </div>  
    </div>
    <?php include "inc/footer.php"; ?>