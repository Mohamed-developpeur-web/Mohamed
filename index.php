<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($subject) and !empty($name) and !empty($email) and !empty($message)){

            $to="diallomamadousamba127@gmail.com";
            $from = $email;
            $header = "$from:\"$name\"<$from>\n";
            $header .= "Replay-To:$from\n";
            $header .= "Content-Type:text/html; charset-\"iso-8859-1\"";

            if(mail($to, $subject, $message, $header)){
                echo "your mail has been sent";
            }
            else{
                echo "error: try again";
            }
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .contact-form{
            width: 100%;
            height: 100vh;
        }
        .contact-form{
            width: 600px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <section>
        <div class="contact-form d-fllex justify-content-arround">
            <form method="post" action="">
            <h1>Contact Form</h1><br>
                <label for="">Subject</label>
                <input required=""  type="text" name="subject" placeholder="subject" class="form form-control"><br>
                <label for="">Name</label>
                <input  required="" type="text" name="nom" placeholder="name" class="form form-control"><br>
                <label for="">Email</label>
                <input  required="" type="email" name="email" placeholder="email" class="form form-control"><br>
                <label for="">Message</label><br>
                <textarea required=""  name="message" placeholder="message.."></textarea><br>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </section>
</body>
</html>