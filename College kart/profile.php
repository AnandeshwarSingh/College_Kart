<div>
        <form class="login-form" action="" method="post">
            <?php
include "db_conn.php";

$quer = "select * from stduser where "
?>
            <input type="text"  name="name" value="<?php  echo $row->FullName;?>" required>
            <input type="email" name="email" readonly>
            <input type="date" placeholder="date" name="date" required>
            <input type="text" placeholder="contect" name="contect" required>
            <input type="text" placeholder="address" name="address" required>
            <label><input type="checkbox"> Remember Me</label>
            <button type="submit">Login</button>
            <a href="#">Forgot Password?</a>
            <!-- <p>New to College Kart? <a href="#">Register Here</a></p> -->
        </form>
    </div>