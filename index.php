<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!--Google Font-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    
      <header>
      <div class="brand">KY<span>A</span>F</div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="index.php">Home</a>
          <a href="cek_pembayaran.php">Cek Pembayaran</a>
          <button onclick="window.location.href='login.php'">LOGIN</button>
        </div>
      </div>
    </header>

  <section class="home">
    <video src="video/bag.mp4" autoplay muted loop></video>
    <div class="content">       
      <h2>Halo, Selamat Datang!</h2>
      <div class="greeting">Website<br>Pembayaran<span> PDAM</span></div>
      <div class="clock">
        <div id="hour">00</div>
        <span>:</span>
        <div id="minute">00</div>
        <span>:</span>
        <div id="seconds">00</div>
      </div>
    </div>
  </section>
  
</body>
</html>
<script src="js/script.js"></script>