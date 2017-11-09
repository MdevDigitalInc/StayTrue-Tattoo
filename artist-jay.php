<!DOCTYPE html>
<html>
<head lang="en">
    <!-- SEO -->
    <meta charset="UTF-8">
    <title>Stay True Tattoo | St. Thomas | P:519-631-3111 </title>
    <meta name="keywords" content="Tattoo Shop, St. Thomas, London, Ontario, Southern Ontario, tattoo, tattooing, tattoos, Stay True, Stay True Tattoo, Stay-True, ink, piercings, Rich Lambe, custom, old school, portraits, coverups, black &amp; white, color" />
    <meta name="description" content="Stay True Tattoo located in St. Thomas, Ontario, just outside London, Ontario, owner Rich Lambe. Specializing in custom tattoos, black & white or color & coverups." />
    <!-- [ FACEBOOK OPEN GRAPH ] -->
    <meta property="og:url"             content="http://www.staytrue-tattoo.com/" />
    <meta property="og:title"           content="Stay True Tattoo | St. Thomas | P:519-631-3111" />
    <meta property="og:description"     content="Stay True Tattoo located in St. Thomas, Ontario, just outside London, Ontario, owner Rich Lambe. Specializing in custom tattoos, black & white or color & coverups." />
    <meta property="og:image"           content="http://www.staytrue-tattoo.com/openGraph.jpg" />
    <!-- [ TWITTER CARDS ] -->
    <meta name="twitter:card"           content="summary_large_image">
    <meta name="twitter:site"           content="@StayTrueON">
    <meta name="twitter:creator"        content="@StayTrueON">
    <meta name="twitter:title"          content="Stay True Tattoo | St. Thomas | P:519-631-3111">
    <meta name="twitter:description"    content="Stay True Tattoo located in St. Thomas, Ontario, just outside London, Ontario, owner Rich Lambe. Specializing in custom tattoos, black & white or color & coverups.">
    <meta name="twitter:image"          content="http://www.staytrue-tattoo.com/twitterCard.jpg">
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#0fbabc">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <!-- JQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css">
    <script src="js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stayTrue-styles.css">


</head>
<body>
    <!-- Navigation -->
    <nav class="stayTrue-navigation" role="navigation">
        <div class="stayTrue-wrapper flex flex-start flex-between flex-middle">
            <a class="stayTrue-logo-nav" href="index.html">
                <h4>Stay True <br> Tattoo</h4>
                <span class="logo-nav-phone">519-631-3111</span>
            </a>
            <div class="stayTrue-nav-links">
                <a href="index.html" title="Home">Home</a>
                <a href="index.html#about_us" title="About Us">About</a>
                <a href="index.html#artists_page" title="Artists">Artists</a>
                <a href="mailto:stay.truetatto@hotmail.com" title="Contact Us">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Header Section -->
    <section class="cnt-section artist-header jay-header" style="background-image:url('./images/jaysroom.jpg');">
    </section>

    <!-- Artist's Intro -->
    <section class="cnt-section artist-intro-bio">
        <div class="stayTrue-wrapper clearfix">
           <div class="artist-intro-left">
               <div class="artist-intro-pic yellow-jay"></div>
           </div>
           <div class="artist-intro-right">
                <h4>Tattoo Artist</h4>
                <h2 class="jay-text">JAY</h2>
                <p>Jay waltzed into the tattoo world in 2006, you could almost say that tattooing just fell into his lap. He started as a receptionist/ shop help, and when his tattoo artist boss fell behind on his drawings, Jay, being an art aficionado, naturally offered to help him get caught up.</p>
                <p>Soon after, customers started asking for Jay to tattoo them. He loves to do black & grey art but also loves doing creative and colourful tattoos, including fusion pieces that mix fantasy worlds.</p>
                <p>In 2009, Rich kidnapped Jay from his place of employment in London and swept him away to help open Stay True in St.Thomas</p>
           </div>
        </div>
    </section>

    <!-- Artist's Pics -->
    <section class="cnt-section artist-portfolio-inner">
        <div class="stayTrue-wrapper main-gallery flex flex-start flex-wrap flex-between">
            <?php
                        //returns a big old hunk of JSON from a non-private IG account page.
                        function scrape_insta($username) {
                        	$insta_source = file_get_contents('http://instagram.com/'.$username);
                        	$shards = explode('window._sharedData = ', $insta_source);
                        	$insta_json = explode(';</script>', $shards[1]);
                        	$insta_array = json_decode($insta_json[0], TRUE);
                        	return $insta_array;
                        }
                        //Supply a username
                        $my_account = 'jasonboldt';
                        //Do the deed
                        $results_array = scrape_insta($my_account);
                         for($cnt=0; $cnt < 12; $cnt++)
                        {
                         $latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$cnt];
                         echo '<a class="main-gallery-item" target="_blank" href="http://instagram.com/p/'.$latest_array['code'].'" style="background-image:url('.$latest_array['display_src'].');"></a>';
                        }
                        ?>
        </div>
        <div class="stayTrue-wrapper main-gallery-2 flex flex-start flex-wrap flex-between"></div>
    </section>
    <!-- Footer -->
    <footer class="cnt-section stayTrue-footer">
        <div class="stayTrue-wrapper flex flex-start flex-wrap flex-between">
            <div class="footer-info address flex flex-start flex-between">
              <div class="footer-info-address">
                  <h4>Stay True <br> Tattoo</h4>
                  <span class="logo-nav-phone">519-631-3111</span>
                  <p><span>817 Talbot Street</span><br>
                      <span>St. Thomas ON</span><br>
                      <span>N5P 1E4</span></p>
                  <a href="mailto:stay.truetattoo@hotmail.com"><span>stay.truetattoo@hotmail.com</span></a>
              </div>
                <div class="footer-info-social flex flex-start flex-between">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/Stay-True-Tattoo-151235461581863/" target="_blank" class="round-btn facebook">
                        <i class="fa fa-fw fa-facebook"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/StayTrueON" target="_blank" class="round-btn twitter">
                        <i class="fa fa-fw fa-twitter"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/staytruetattoos/" target="_blank" class="round-btn instagram">
                        <i class="fa fa-fw fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="footer-info">
                <div class="footer-nav flex flex-end">
                    <a class="footer-nav-link" href="#" title="link">HOME</a>
                    <a class="footer-nav-link" href="#about_us" title="link">ABOUT</a>
                    <span class="footer-nav-link extra-menu" href="#artists_page" title="link">
                        ARTIST
                        <a class="footer-nav-link-small" href="artist-rich.php" title="link">Rich</a>
                        <a class="footer-nav-link-small" href="artist-jay.php" title="link">Jay</a>
                        <a class="footer-nav-link-small" href="artist-kate.html" title="link">Keight</a>
                        <a class="footer-nav-link-small" href="artist-matt.html" title="link">Matt</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="main-artist.js"></script>
    <script src="jay.js"></script>
</body>
</html>
