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
        <title>SteveCatfishHoward.com: Videos of the renowned trumpeter of the Blues Brothers Band and other national and international acts</title>
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
    <body class="videos">
        <?php
            include './inc/nav.php';

            include './inc/header.php';
        ?>
        <div class="bg">
            <section class="video">
                <h2 id="video">YouTube&copy; Videos</h2>
                <p class="videoList">
                    <span class="videoLink" data-src="https://www.youtube.com/embed/wh15LOppcWQ">Paul McCartney, "Silly Love Songs"</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/5e68zyq8lQg">With Peter Maffey (German superstar)</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/4U02P_DbP-A">Delbert McClinton, "Givin' It Up For Your Love"</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/m0hwq7mmLVg">Junior Wills, "That's What Love Will Make You Do"</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/rX9pEsdMkzE">Albert Collins, Austin City Limits</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/kBFoGJGLgFw">Original Blues Brothers Band, "Minnie the Moocher"</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/JZQ9N5q06O8">Labelle, "Lady Marmalade"</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/mu0HCKbPTmU">Paul McCartney, "The Long And Winding Road" (trumpet solo)</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/MBJu1-IDPsE">N'Awlins Gumbo Kings, WFAA-TV</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/fMKfnMjuURA">Albert Collins, Mt. Fuji</span> | 
                    <span class="videoLink" data-src="https://www.youtube.com/embed/FgZSdelfH5A">Allan Toussaint, "Country John"</span> 
                </p>
                <div class="videoWrapper">
                <iframe id="ytPlayer" src="https://www.youtube.com/embed/wh15LOppcWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <!-- width="560" height="315" -->
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

        $('.videoLink').click(function() {
            var mySrc = $(this).data('src');
            $('#ytPlayer').attr('src', mySrc);
        })

	</script>
    </body>
</html>