<!DOCTYPE html>
<html lang="US-en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="author" content="Nosnetrom">
        <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.ico">

        <meta name="description" content="Web site for Steve ''Catfish'' Howard, renowned trumpeter from the Blues Brothers Band and other US national and international acts.">
        <title>SteveCatfishHoward.com: Home</title>
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
            <section class="discography">
                <h2 id="discography">Discography</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Album:<br />Artist</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2017</td>
                            <td>The Last Shade Of Blue Before Black: <br />Blues Brothers Band</td>
                        </tr>
                        <tr>
                            <td>2016</td>
                            <td>Pure McCartney:<br />Paul McCartney</td>
                        </tr>
                        <tr>
                            <td>2015</td>
                            <td>Toussaint: The Real Thing 1970-1975:<br />Allen Toussaint</td>
                        </tr>
                        <tr>
                            <td>2012</td>
                            <td>Live From Austin, TX:<br />Albert Collins</td>
                        </tr>
                        <tr>
                            <td>2010</td>
                            <td>The Essential Patti LaBelle (3.0):<br />Patti LaBelle</td>
                        </tr>
                        <tr>
                            <td>2009</td>
                            <td>Nightbirds / Phoenix / Chameleon:<br />LaBelle</td>
                        </tr>
                        <tr>
                            <td>2008</td>
                            <td>Outward Bound/South Of I-10:<br />Sonny Landreth</td>
                        </tr>
                        <tr>
                            <td>2006</td>
                            <td>UFO Saloon:<br />The N'Awlins Gumbo Kings</td>
                        </tr>
                        <tr>
                            <td>2005</td>
                            <td>The Iceman At Mount Fuji:<br />Albert Collins &amp; The Icebreakers</td>
                        </tr>
                        <tr>
                            <td>2004</td>
                            <td>The Complete Warner Recordings:<br />Allen Toussaint</td>
                        </tr>
                        <tr>
                            <td>2003</td>
                            <td>Love And Respect:<br />Carl Carlton &amp; The Songdogs</td>
                        </tr>
                        <tr>
                            <td>2002</td>
                            <td>Live At The Gypsy Tea Room:<br />Chickenhawks</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
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