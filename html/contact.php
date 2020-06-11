

<!DOCTYPE html>
<?php

if($_POST["submit"]) {
    $recipient="michael.shlega@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<html lang = "eg">
  <?php ?>
  
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/PortfolioSite/css/contact.css">

        <title>Contact Me</title> 
    </head>

    <nav class="nav nav-pills nav-fill navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="nav-item nav-link" href="index.html">About</a>
        <a class="nav-item nav-link" href="projects.html">Projects</a>
        <a class="nav-item nav-link" href="workExperience.html">Work Experience</a>
        <a class="nav-item nav-link active" href="contact.html"> Contact Me</a>

    </nav>

    <body>

        <form id = "contactForm" method="post" action="contact.php">
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control form-control-lg" name = "sender_email" id="exampleFormControlInput1" placeholder="you@123.com">
            </div>

           
            <div class="row">
                <div class="col">
                  <label for="exampleFormControlInput1">Subject</label>
                  <input type="text" class="form-control" placeholder="Hi Michael!" name  = "subject" id="exampleFormControlInput1">
                </div>
                <div class="col">
                  <label for="exampleFormControlInput1">Your Name</label>
                  <input type="text" class="form-control" placeholder="Name" name = "sender" id="exampleFormControlInput1">
                </div>
            </div>
        
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Write me a message!" name = "message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" value = "Send Form">Send message</button>
          </form>
          <?=$thankYou ?>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    <div class="footer">
        <div id = "logoholder">
        <a href = "https://github.com/Shoeyuz">
            <img src = "C:\Users\micha\OneDrive\Documents\GitHub\Isocrunch2\PortfolioSite\pictures\GitHub-Mark-Light-64px.png" class = "icon" alt = "Github link logo"> 
        </a>
        <a href = "https://www.linkedin.com/in/michael-shlega-3435671a3/">
            <img src = "C:\Users\micha\OneDrive\Documents\GitHub\Isocrunch2\PortfolioSite\pictures\LI-In-Bug.png" class = "icon" id = "linkedIn" alt = "LinkedIn link logo">
        </a>
        </div>
    </div>
</html>