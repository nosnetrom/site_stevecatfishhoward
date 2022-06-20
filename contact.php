<!DOCTYPE html>
<html lang="US-en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="author" content="Nosnetrom">
        <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <meta name="description" content="Web site for Steve ''Catfish'' Howard, renowned trumpeter from the Blues Brothers Band and other US national and international acts.">
        <title>SteveCatfishHoward.com: Contact Page</title>
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Inter:wght@300&family=Merriweather+Sans&display=swap" rel="stylesheet">       
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
        <script src="./js/scripts.js" type="text/javascript"></script>
    </head>
    <body class="contact">
        <?php
            include './inc/nav.php';

            include './inc/header.php';
        ?>
        <div class="bg">
            <section class="contact">
                <h2 id="contact">Contact Steve</h2>
                <div class="formContainer">
                <?php
                if ( isset ( $_POST [ 'btnSubmit' ] ) &&  $_POST [ 'txtFoo' ] == "" && $_POST ['whatYr'] == date("Y") ){

                $to = 'steve@stevecatfishhoward.com' ;
                $subject = 'Query from stevecatfishhoward.com' ;

                // NOT SUGGESTED TO CHANGE THESE VALUES
                $message = $_POST [ "txtName" ] . "\n\n" . $_POST [ "txtPhone" ] . "\n\n" . $_POST [ "txtComments" ];
                $headers = 'From: ' . $_POST[ "txtEmail" ] . PHP_EOL ;
                mail ( $to, $subject, $message, $headers ) ;

                echo "Your e-mail has been sent! You should receive a reply within 24 hours!" ;}

                else{
                ?>
                    <form id="frmContact" name="frmContact" method="post">
                        <p>
                            <label for="txtName">Your name:</label>
                            <input type="text" id="txtName" name="txtName" class="form-control" required />
                        </p>
                        <p>
                            <label for="txtEmail">Your email:</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" required />
                        </p>
                        <p>
                            <label for="txtPhone">Your phone:</label>
                            <input type="tel" id="txtPhone" name="txtPhone" class="form-control" required />
                        </p>
                        <p>
                            <label for="txtComments">Your comments:</label>
                            <textarea id="txtComments" name="txtComments" cols="32" rows="10" class="form-control" required></textarea>
                        </p>
                        <p>
                            <label for="whatYr">What year is it?</label>
                            <input type="text" id="whatYr" name="whatYr" class="form-control" value="" required />
                        </p>
                        <input type="hidden" id="txtFoo" name="txtFoo" value="" required />
                        <p class="text-center primary">
                            <button id="btnSubmit" name="btnSubmit" class="btn btn-primary">Send Steve a message</button> 
                            <div id="spanErrs"></div>
                        </p>
                    </form>
                    <?php } ?>
                </div>

            </section>
        </div>
        <?php
            include './inc/footer.php';
        ?>
       <script type="text/javascript">
		$(document).ready(function() {
			$('#currentYr').html(upToDate);
			$('input').focus(function() {$(this).css('background-color','#fff');});
			$('textarea').focus(function() {$(this).css('background-color','#fff');});
			$('#btnSubmit').click(validateForm);
		});	
	</script>
    </body>
</html>