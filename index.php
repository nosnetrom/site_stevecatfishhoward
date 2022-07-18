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
        
        <meta name="description" content="Steve Howard's extensive experience as a trumpet player in R&B, Blues, Rock, and
            Jazz has resulted in his being sought out by some of the biggest names in the
            music industry. His work with producers Allen Toussaint, Steve Cropper, Paul
            McCartney, Mike Post, Jim Gaines, and John Snyder has been heard worldwide. This seasoned recording and touring musician is one of the
            best in the business.">
        <title>SteveCatfishHoward.com: Home of the renowned trumpeter of the Blues Brothers Band and other national and international acts</title>
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
    <body class="home">
        <?php
            include './inc/nav.php';

            include './inc/header.php';
        ?>
       <div class="bg">
            <section class="home">
                <h2 id="home">About Steve &ldquo;Catfish&rdquo; Howard</h2>
                <p>Steve Howard's extensive experience as a trumpet player in R&B, Blues, Rock, and
Jazz has resulted in his being sought out by some of the biggest names in the
music industry. His work with producers Allen Toussaint, Steve Cropper, Paul
McCartney, Mike Post, Jim Gaines, and John Snyder has been heard worldwide. This seasoned recording and touring musician is one of the
best in the business.</p>
                <div class="miniPics">
                    <img src="./img/steve_main_mini.jpg" width="240" />
                    <img src="./img/Blues_Brothers_Horns_thumb_mini.jpg" width="240" />
                    <img src="./img/steve-howard_thumb_mini.jpg" width="240" />
                </div>
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