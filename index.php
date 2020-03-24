<?php include "inc/header.php"; ?>
<?php 
    if (isset($_POST['submit'])) {
        $_first = ($_POST['first']);
        $last = ($_POST['last']);
        $mail = ($_POST['mail']);
        $gender = ($_POST['gender']);
        $dep = ($_POST['dep']);
    }
?>
        <h2>contact form</h2>
        <div class="form">
            <form class="form-group" action="submit.php" method="post">
                <label for="First Name">First Name: </label>
                <input type="text" name="first" id="" placeholder="Enter firstname...">
                <label for="Last Name">Last Name: </label>
                <input type="text" name="last" id="" placeholder="Enter firstname...">
                <label for="Email">Email: </label>
                <input type="text" name="mail" id="" placeholder="Enter email...">
                <label for="Male">Male: </label>
                <input type="radio" name="gender" id="" value="male">
                <label for="Female">Female: </label>
                <input type="radio" name="gender" id="" value="female">
                <label for="Department">Department: </label>
                <select name="dep" id="">
                    <option value="none">None</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Law">Law</option>
                    <option value="Political Science">Political Science</option>
                    <option value="Micro Biology">Micro Biology</option>
                </select>
                <button type="submit" name="submit">submit</button>
            </form>
        </div>
    </div>
  <?php include "inc/footer.php"; ?>