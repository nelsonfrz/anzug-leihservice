<html lang="de">

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .w3-sidebar a {
      font-family: "Roboto", sans-serif
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
      font-family: "Montserrat", sans-serif;
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com" data-react-helmet="true">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true" data-react-helmet="true">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet" data-react-helmet="true">
</head>

<body class="w3-content" style="max-width:1200px">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
      <h3 class="w3-wide"><b>Anzug-Ausleihe</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
      <a href="#" class="w3-bar-item w3-button">Komplett Anzüge</a>
      <a href="#" class="w3-bar-item w3-button">Westen</a>
      <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
        Anzugshosen <i class="fa fa-caret-down"></i>
      </a>
      <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>
        <a href="#" class="w3-bar-item w3-button">Relaxed</a>
        <a href="#" class="w3-bar-item w3-button">Straight</a>
        <a href="#" class="w3-bar-item w3-button">Chinos</a>
      </div>
      <a href="#" class="w3-bar-item w3-button">Jaquettes</a>
      <a href="#" class="w3-bar-item w3-button">Hemden</a>
      <a href="#" class="w3-bar-item w3-button">Blazers</a>
      <a href="#" class="w3-bar-item w3-button">Schuhe</a>
    </div>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
      onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
  </nav>

  <!-- Top menu on small screens -->
  <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">Anzug-Ausleihe</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i
        class="fa fa-bars"></i></a>
  </header>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
      <p class="w3-left">Unsere Anzüge</p>
      <p class="w3-right">
        <i class="fa fa-shopping-cart w3-margin-right"></i>
        <i class="fa fa-search"></i>
      </p>
    </header>

    <!-- Image header -->
    <div class="w3-display-container w3-container">
      <img src="https://www.w3schools.com/w3images/jeans.jpg" alt="Jeans" style="width:100%">
      <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <h1 class="w3-jumbo w3-hide-small">Neue Kollektion</h1>
        <h1 class="w3-hide-large w3-hide-medium">Neue Kollektion</h1>
        <h1 class="w3-hide-small">COLLECTION 2024</h1>
        <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">JETZT KAUFEN</a></p>
      </div>
    </div>

    <div class="w3-container w3-text-grey" id="jeans">
      <p>8 items</p>
    </div>

    <!-- Product grid -->
    <div class="w3-row w3-grayscale">
      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans1.jpg" style="width:100%">
          <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
        </div>
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans2.jpg" style="width:100%">
          <p>Mega Ripped Jeans<br><b>$19.99</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/jeans2.jpg" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <p>Mega Ripped Jeans<br><b>$19.99</b></p>
        </div>
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" style="width:100%">
          <p>Washed Skinny Jeans<br><b>$20.50</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" style="width:100%">
          <p>Washed Skinny Jeans<br><b>$20.50</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/jeans4.jpg" style="width:100%">
            <span class="w3-tag w3-display-topleft">Sale</span>
            <div class="w3-display-middle w3-display-hover">
              <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans4.jpg" style="width:100%">
          <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
        </div>
        <div class="w3-container">
          <img src="https://www.w3schools.com/w3images/jeans1.jpg" style="width:100%">
          <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
        </div>
      </div>
    </div>

    <!-- Subscribe section -->
    <div class="w3-container w3-black w3-padding-32">
      <h1>Abonnieren</h1>
      <p>Für exklusive Angebote und Rabatte:</p>
      <p><input class="w3-input w3-border" type="text" placeholder="E-mail eintragen" style="width:100%"></p>
      <button type="button" class="w3-button w3-red w3-margin-bottom">Abonnieren</button>
    </div>

    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
      <div class="w3-row-padding">
        <div class="w3-col s4">
          <h4>Kontakt</h4>
          <p>Stellen Sie uns Ihre fragen:</p>
          <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required=""></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required=""></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Betreff" name="Betreff" required="">
            </p>
            <p><input class="w3-input w3-border" type="text" placeholder="Nachricht" name="Nachricht"
                required=""></p>
            <button type="submit" class="w3-button w3-block w3-black">Absenden</button>
          </form>
        </div>

        <div class="w3-col s4">
          <h4>Über</h4>
          <p><a href="#">Über uns</a></p>
          <p><a href="#">Support</a></p>
          <p><a href="#">Läden finden</a></p>
          <p><a href="#">Lieferung</a></p>
          <p><a href="#">Zahlungen</a></p>
          <p><a href="#">Gift card</a></p>
          <p><a href="#">Rücksendungen</a></p>
          <p><a href="#">Hilfe</a></p>
        </div>

        <div class="w3-col s4 w3-justify">
          <h4>Store</h4>
          <p><i class="fa fa-fw fa-map-marker"></i> Anzug-Ausleihe</p>
          <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
          <p><i class="fa fa-fw fa-envelope"></i> Anz-Ausleihe@mail.com</p>
          <h4>We accept</h4>
          <p><i class="fa fa-fw fa-cc-amex"></i> PayPal</p>
          <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
          <br>

        </div>
      </div>
    </footer>


    <!-- End page content -->
  </div>

  <!-- Newsletter Modal -->
  <div id="newsletter" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
      <div class="w3-container w3-white w3-center">
        <i onclick="document.getElementById('newsletter').style.display='none'"
          class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
        <h2 class="w3-wide">NEWSLETTER</h2>
        <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
        <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom"
          onclick="document.getElementById('newsletter').style.display='none'">Subscribe
        </button>
      </div>
    </div>
  </div>

  <script>
    // Accordion
    function myAccFunc() {
      var x = document.getElementById("demoAcc");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>


  <div>
    <section></section>
  </div>
  <div>
    <section></section>
  </div>
</body>

</html>
