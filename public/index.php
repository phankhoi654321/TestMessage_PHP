<?php require '../includes/header.php' ?>

<?php
    use Twilio\Rest\Client;
?>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['number']) && isset($_POST['message'])) {
        $client = new Client($config['account_id'], $config['auth_token']);

        $client ->messages->create($_POST['number'],array(
                'from' => $config['phone_number'],
                'body' => $_POST['message']
        ));

        echo "<h4 class='text-center bg-success'>Message has been sent </h4>";

    }
}
?>


<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
            mostly barebones HTML document.</p>
    </div>

    <div class="col-md-8 col-centered">
        <form action="" method="post">
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="number" class="form-control" id="phone" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send Message">
        </form>
    </div>


</div><!-- /.container -->


<?php require '../includes/footer.php' ?>
