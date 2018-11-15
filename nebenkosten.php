<!DOCTYPE HTML>

<html>
    <head>
        <title>Nebenkosten</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <a href="index.html" class="logo">
                        <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
                    </a>

                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>

                </div>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="test.php">Ipsum veroeros</a></li>
                    <li><a href="test.php">Tempus etiam</a></li>
                    <li><a href="test.php">Consequat dolor</a></li>
                    <li><a href="elements.php">Elements</a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Nebenkosten</h1>

                    <span class="actions">
                        <form>
                            <input type="button" onclick="machuf('2018')" value="2018" class="primary" tabindex="3"/>
                            <input type="button" onclick="machuf('2017')" value="2017" tabindex="4" />
                        </form>
                    </span>
                    
                    <!-- vlt no usse neh -->
                  <script>
                        function machuf(jh) {
                           var id = document.getElementById(jh);
                           document.getElementById('2018').style.display = "none"
                           document.getElementById('2017').style.display = "none"
                           if (id.style.display === "none") {
                               id.style.display = "block";
                           } else { 
                               id.style.display = "none";
                            }
                        }
                    </script>
                  
                  
                    <div id="2018" >
                        <h1>2018</h1>
                        <p>Do chöme heizchöste und näbechöste inne</p>
                    </div>

                    <div id="2017" style="display:none">
                        <h1>2017</h1>
                        <p>do chöme heizchöste und näbechöste dri</p> 
                    </div>


                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h2>Kontakt</h2>
                        <form method="post" action="#">
                            <div class="fields">
                                <div class="field half">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="field half">
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Send" class="primary" /></li>
                            </ul>
                        </form>
                    </section>
                    <section>
                        <h2>Follow</h2>
                        <ul class="icons">
                            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                    </section>
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved</li><li>Design:Lars Lutz</li>
                    </ul>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
               


    </body>
</html>