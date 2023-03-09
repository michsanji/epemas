<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Daftar</title>
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
  <script defer="defer" src="main.js"></script><link href="style.css" rel="stylesheet"></head>
  <body class="app">
    <div id="loader">
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
      <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("assets/static/images/bg.jpg")'>
        <div class="pos-a centerXY">
          <div class="bgc-white bdrs-50p pos-r" style="width: 120px; height: 120px;">
            <img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width: 320px;">
        <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
        <form action="register.php" method="post">
        <div class="mb-3">
            <label class="form-label" class="text-normal text-dark">NIK</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK">
          </div>
          <div class="mb-3">
            <label class="form-label" class="text-normal text-dark">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama">
          </div>
          <div class="mb-3">
            <label class="form-label" class="text-normal text-dark">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="mb-3">
            <label class="form-label" class="text-normal text-dark">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="mb-3">
            <label class="form-label" class="text-normal text-dark">Telepon</label>
            <input type="text" name="telp" class="form-control" placeholder="Telepon">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary btn-color">Daftar</button>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
