<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Send Mail </title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">
                    Send Message
                </h2>
                <p class="text-center">
                    Send mail to anyone
                </p>
                <!-- Php code start -->


                <?php

                if (isset($_POST['submit'])) {

                    $recipients = $_POST['email'];
                    $subjects = $_POST['subject'];
                    $message = $_POST['message'];
                    $sender = "From : Dhruvilpatel.ordex@gmail.com";

                    // if fileds are empty 

                    if (empty($recipients) || empty($subjects) || empty($message)) {

                ?>
                        <div class="alert alert-danger text-center">
                            <?php echo "All Fileds Are Required" ?>
                        </div>

                        <?php
                    } else {
                        if (mail($recipients, $subjects, $message, $sender)) {
                        ?>

                            <!-- Mail Send then messgae  -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your Email has Successfuly Send to $recipients" ?>
                            </div>
                        <?php
                        } else {
                        ?>
                            <!-- Mail Send then messgae  -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed to Your Sending mail " ?>
                            </div>
                <?php

                        }
                    }
                }
                ?>

                <form action="index.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Recipients" value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control message" name="message" id="message" cols="30" rows="50" placeholder="Enter Your Message Here..."></textarea>

                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="submit" value="Send" placeholder="Subject">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>