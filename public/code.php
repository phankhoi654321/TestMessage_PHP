<?php require '../includes/header.php'; ?>

<?php
use Twilio\Rest\Client;
?>

<?php
if (isset($_POST['submitCode'])) {
    $client = new Client($config['account_id'], $config['auth_token']);

    $_SESSION['code'] = $code = uniqid();

    $conn->query("INSERT INTO verifications(code) VALUES('$code')");

    $client->messages->create($_POST['number'], array(
        'from' => $config['phone_number'],
        'body' => $code
    ));

    echo "<h4 class='text-center bg-success'>Message has been sent </h4>";
}

?>


    <div class="col-md-8 col-centered">
        <form action="" method="post">
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="number" class="form-control" id="phone" placeholder="Enter Number" required>
            </div>

            <input type="submit" name="submitCode" class="btn btn-primary btn-block" value="Send Code">
        </form>
    </div>

<?php require '../includes/footer.php' ?>