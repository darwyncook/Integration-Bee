<!DOCTYPE html>
<html>
<!-- Comments look like this -->
<!--The head is not displayed on the web page, but can be displayed on the title bar-->
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Alfred University Nevins Exam Registration</title>
</head>
<!--The body is what will be presented to the world-->
<body>
     <?php
      include_once('navbar.php');
      require_once('/etc/php5/mailer/PHPMailerAutoload.php');
      $email="";
      $question="";
      $message="";

      if ((isset($_POST['action']))&&($_POST['action'] == 'Ask question')&&(strlen($_POST['email']) > 0)&&(strlen($_POST['question']) > 0)){
         if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
            include('./registration/helpers.php');
            $emailmessage = htmlspecialchars($_POST['question'])."\r\n return email address ".htmlspecialchars($_POST['email']);
            sendmail(contact(),$emailmessage,'Question about Integration Bee Registration');
            $message = "An email was sent to ".htmlspecialchars($_POST['email']);
         }
         else {
            $message = "Invalid email address";
         }
      }
     ?>
The Alfred University Integration Bee is an opportunity for AU students to practice their integration skills in a competitive setting.  The winner receives the coveted$
<br>
This year, there are 2 distinct phases:
<br>
<h4>Phase 1:</h4> Electronic qualifier test session lasting 50 minutes. Testing sessions will take place Friday, March 18th, 2016, 3:30-7:30 p.m. in Olin computer labs$
<br>
<h4>Phase 2:</h4> Final Competition on April 1st, 2016, in Myers 334 from 3:30-5:30 p.m. This bracketed competition consists of multiple duels where finalists go head $
<br>
Integration problems in the competition can be solved using the variety of techniques taught in Calculus I and II courses such as:
<br>
U-substitution
<br>
Integration by Parts
<br>
Trigonometric Integrals
<br>
Trig Substitution
<br>
Partial Fractions
<br>
Improper Integrals
<br>
Integrals Involving Quadratics
<br>
Long Division
<br>
etc.
<br>
Integrals requiring multivariate calculus (Calculus III) are NOT a part of this competition.
<br>
<br>
We highly encourage participating and/or spectating from any AU student who is interested in this competition.  Much can be learned from participating or attending, an$
<br>
Since the competition is highly competitive, is recommended that you prepare if you wish to advance.  However, every AU student who is interested may participate in th$
<br>
<br>

Questions:
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   <textarea name="question" id="question" cols="120" rows="5"></textarea>
   <br>
   Your email:
   <br>
   <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
   <br>
   <input type="submit" name="action" value="Ask question">
</form>
<?php echo $message ?>
</body>
</html>
