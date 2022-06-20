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
        <title>SteveCatfishHoward.com: Favorite links of the renowned trumpeter of the Blues Brothers Band and other national and international acts</title>
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Inter:wght@300&family=Merriweather+Sans&display=swap" rel="stylesheet">       
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
        <script src="./js/scripts.js" type="text/javascript"></script>
    </head>
    <body class="discography">
        <?php
            include './inc/nav.php';

            include './inc/header.php';
        ?>
        <div class="bg">
            <section class="links">
                <h2 id="links">Links</h2>
                <p>Visit some of Steve's friends and cohorts at:</p>
                <ul>
                    <li>
                        John Tropea: <a style="color: var(--text); text-shadow: none;" target="_blank" href="https://www.johntropea.com">https://www.johntropea.com</a>
                    </li>
                    <li>
                        Lou "Blue Lou" Marini: <a style="color: var(--text); text-shadow: none;" target="_blank" href="https://www.blueloumarini.com">https://www.blueloumarini.com</a>
                    </li>
                    <li>
                        Steve "The Colonel" Cropper: <a style="color: var(--text); text-shadow: none;" target="_blank" href="https://playitsteve.com">https://playitsteve.com</a>
                    </li>
                </ul>

                </section>
        </div>
        <?php
            include './inc/footer.php';
        ?>
        <script type="text/javascript">
		$(document).ready(function() {
			$('#currentYr').html(upToDate);
		});	
	</script>
    </body>
</html>