<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width =device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    <link rel="icon" href="favicon.ico">
    <title>Arogini Blood Bank</title>
    
<body>
<section>
<div class="container" id="blur">
<section id="banner">
<img src="img/logo.jpeg" class="logo">
<div class="banner-text">
  <h1>BLOOD BANK</h1>
  <p>A drop for you, an ocean for someone else</p>
<div class="banner-btn">
  <a href="user/login.php"><span></span>ADMIN</a>
  <a href="userdb/login.php"><span></span>USER</a>
</div>
</div>
</section>

<div id="menuBtn">
  <a href="#" onclick=toggle()><img src="menu.png"></a>
</div>


<!-----Features---->

</div>
<div id="popup" class="menu-bar">
  <li><a href="index.html" class="btn" > Home </a></li>
  <li><a href="userdb/user_dashboard/index.php" class="btn" > BECOME A DONOR </a></li>
  <li><a href="search donor.php" class="btn" > SEARCH DONOR </a></li>
  <li><a href="tcode.html" class="btn" > REQUEST BLOOD </a></li>
  <li><a href="Crequests.php" class="btn" > CURRENT REQUEST </a></li>
  <li><a href="blood bank.php" class="btn">BLOOD BANK</a></li>
  <li><a href="#" onclick="toggle()" id="Close" class="btn">Close</a></li>
</div>
<script>
    function toggle() {
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }
</script>

</section class="data">
<section>
<div class="cnt">
    <div class="titl">
        NEED AND AVAILABILITY COUNT
    </div>
    <div class="container">
      <div class = "row text-center">
        <div class = "col-md-6 counter-box">
  <div class="cr">
    <p class="counter">28</p>
      <p>CURRENT REQUESTS</p>
  </div>
          <div class="cr">
            <p class="counter">78</p>
              <p>DONORS AVAILABLE</p>
          </div>

            </div>
          </div>
          </div>
          <!--counter-->
          <script src="jquery.counterup.min.js"></script>
          <script
          src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
          <script>
          jQuery(document).ready(function( $ )
          {
            $('.counter').counterUp({
             delay: 10,
             time: 1000
              });
          });

          </script>

    <div class="opt">
        <a href="abs.html" class="btn-data" > About Us!! </a>
    </div>
    </section>

<!---------------------------------------------->


<!------------------------------------------------------>
  
</body>
</head>
</html>
