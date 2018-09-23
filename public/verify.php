<?php require '../includes/header.php'?>


<?php
    $hidden = true;
    if(isset($_POST['submit'])) {
        if(isset($_POST['code'])) {
            $code = $_SESSION['code'];

            $res = $conn->query("SELECT * FROM verifications WHERE code ='{$code}'");
            $row = $res->fetch_assoc();
            if(trim($_POST['code']) == $row['code']) {
                $conn->query("DELETE FROM verifications WHERE code='{$code}'");

                header("Location: success.php");
            } else {
//                echo "<div class='row'>";
////                echo "<h3> Wrong code, please try again <h3";
////                echo "</div>";
                    $hidden = false;
            }
        }
    }
?>

<br/>

        <div class="col-md-8 col-centered">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="code" class="form-control" id="code" placeholder="Enter code">
                    <p class=" <?php if($hidden) echo hidden ?>"> Wrong code, please try again </p>
                </div>

                <input type="submit" name="submit" class="btn btn-primary btn-block" value="verify">

            </form>

        </div>




<?php require '../includes/footer.php'?>