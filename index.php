<?php
require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


//if(isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["gender"]) && isset($_POST["email"]) && isset($_POST["country"]) && isset($_POST["subject"]) && isset($_POST["message"])){
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$genre = $_POST["genre"];
$eMail = $_POST["eMail"];
$country = $_POST["country"];
$why = $_POST["why"];
$message = $_POST["message"];


$phpmailer = new PHPMailer();
$phpmailer->SMTPDebug=1;
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '05f0d782613692';
$phpmailer->Password = 'cf9bc602c7b25a';

$phpmailer->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

$phpmailer->setFrom('noreply@hackers-poulette.com', 'Emerson');
$phpmailer->addAddress($eMail);
$phpmailer->addReplyTo('info@mailtrap.io', 'Mailtrap');
$phpmailer->Subject = $why; 
$phpmailer->Body = "merci de nous avoir contacté. vous recevrez une réponse sous 24H.L'équipe des poulettes.";
$send = $phpmailer->send();


//34d488ffc6-1fd3e3@inbox.mailtrap.io

//}
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/img/style.css">
    <link rel="icon" type="image/png" href="./assets/img/hackers-poulette.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../Single%20Page%20Site/assets/img/Logo.png">
    <script src="./assets/responsiveMenu.js"></script>

    <title>HP - Contact form</title>
</head>
<body>
    <header>
      <nav>
        <div class="topnav" id="myTopnav">
            <a href="#" class="active">Home</a>
            <a href="#">News</a>
            <a href="#">Product</a>
            <a href="#">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
      </nav>
    </header>
    <main>
        <article>
            <section class="frmContact">
                
                <div class="container-md p-3 my-3 border align-content-lg-center" id="content">
                    
                    <div class="row">
                        <div class="col-md-6">
                            
                            <img id="mailBox" src="./assets/img/hackers-poulette-logo-neg.png" class="img-fluid" alt="Logo hackers-poulette">
                            <fieldset>
                                <legend>Visit us: </legend>
                                <section id="adresse">  
                                    <ul class="horaire">
                                        
                                        <li>
                                            <p>7500 tournai</p>
                                        </li>
                                        
                                    </ul>
                                    <hr id="ligne">
                                </section>
                                <ul class="horaire">
                                    <li class="day">
                                        <p>Mon: closed | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Tue: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Wed: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Thu: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Fri: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Sat: 9h00 - 12h30 | 13h30 - 17h00</p>
                                    </li>
                                    <li class="day">
                                        <p>Sun: Closed</p>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                
                                <form class="was-validated" action="" method="POST">
                                    <h2>Contact</h2>
                                    <fieldset>
                                        <legend>Contact us with this form: </legend>
                                        <div class="form-group">
                                            
                                            <label for="firstName">Firstname</label>
                                            <input type="text" class="form-control border border-dark" id="fName" name="fName" placeholder="Firstname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control border border-dark" id="lName" name="lName" placeholder="Lastname" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                            <label for="sex">choice your sex:</label>
                                            <div>
                                                <input type="radio" id="man" name="genre" value="man" checked require>
                                                <label for="man">♂</label>
                                            
                                                <input type="radio" id="woman" name="genre" value="woman">
                                                <label for="woman">♀</label>
                                            </div>

                                        <div class="form-group">
                                            
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control border border-dark" id="email" name="eMail" placeholder="Email" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>
                                        <div class="form-group">
                                          
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control border border-dark" id="country" name="country" placeholder="Country" required>
                                            <div class="valid-feedback">Valid</div>
                                            <div class="invalid-feedback">Required</div>
                                        </div>                                        
                                        <div class="form-group">
                                            <!--AWA : block List to select the option-->
                                            <label for="selection">Why contact us ? </label>
                                            <select id="selection" class="form-control border border-dark" name="why">
                                            <option value="Other">Other...</option>
                                            <option value="Information">Information</option>
                                            <option value="Price">Price</option>
                                            <option value="Assistance">Assistance</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                
                                                <textarea class="form-control border border-dark" id="message" rows="3" name="message" required></textarea>
                                                <div class="valid-feedback">Valid</div>
                                                <div class="invalid-feedback">Required</div>
                                            </div>
                                            <div class="form-group form-check">
                                            </div>
                                            
                                            <input class="btn btn-primary" type="submit" value="Submit" id="submit">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </article>
    </main>
    <footer>
        <div id="foot">
            <p>Footer</p>
        </div>
    </footer>
</body>
</html>