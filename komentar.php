<?php 

include "connection.php";

$nama = $_GET['nama'];

if (isset($_POST['submit'])) {
  $komentar = $_POST['komentar'];
  $insert = mysqli_query($connect, "INSERT INTO komentar (id_komentar, nama, komentar) VALUES (NULL, '$nama', '$komentar')");
  if ($insert) {
    header("location: index.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Tempellemahbang</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
      }
      div.isi_berita {
        white-space: nowrap;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 5px;
      }
      h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 600;
        margin-bottom: 30px;
      }
      h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
      }
      .iframecontainer {
        margin: auto;
        position: relative;
        overflow: hidden;
        width: 80%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
      }

      /* Then style the iframe to fit in the container div with full height and width */
      .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
      }
      .jumbotron {
        background-image: url("img/bg-home.jpg");
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
      }
      .container-fluid {
        padding: 60px 50px;
      }
      .bg-grey {
        background-color: #f6f6f6;
      }
      .logo-small {
        color: #072227;
        font-size: 50px;
      }
      .logo {
        color: #072227;
        font-size: 200px;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
      }
      .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
      }
      .carousel-control.right,
      .carousel-control.left {
        background-image: none;
        color: #072227;
      }
      .carousel-indicators li {
        border-color: #072227;
      }
      .carousel-indicators li.active {
        background-color: #072227;
      }
      .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
      }
      .item span {
        font-style: normal;
      }
      .panel {
        border: 1px solid #072227;
        border-radius: 0 !important;
        transition: box-shadow 0.5s;
      }
      .panel:hover {
        box-shadow: 5px 0px 40px rgba(0, 0, 0, 0.2);
      }
      .panel-footer .btn:hover {
        border: 1px solid #072227;
        background-color: #fff !important;
        color: #072227;
      }
      .panel-heading {
        color: #fff !important;
        background-color: #072227 !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      .panel-footer {
        background-color: white !important;
      }
      .panel-footer h3 {
        font-size: 32px;
      }
      .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
      }
      .panel-footer .btn {
        margin: 15px 0;
        background-color: #072227;
        color: #fff;
      }
      .navbar {
        margin-bottom: 0;
        background-color: #072227;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
      }
      .navbar li a,
      .navbar .navbar-brand {
        color: #fff !important;
      }
      .navbar-nav li a:hover,
      .navbar-nav li.active a {
        color: #072227 !important;
        background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }
      footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #072227;
      }
      .slideanim {
        visibility: hidden;
      }
      .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
      }
      @keyframes slide {
        0% {
          opacity: 0;
          transform: translateY(70%);
        }
        100% {
          opacity: 1;
          transform: translateY(0%);
        }
      }
      @-webkit-keyframes slide {
        0% {
          opacity: 0;
          -webkit-transform: translateY(70%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0%);
        }
      }
      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
        .btn-lg {
          width: 100%;
          margin-bottom: 35px;
        }
      }
      @media screen and (max-width: 480px) {
        .logo {
          font-size: 150px;
        }
      }
    </style>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Tempelemahbang</a>
        </div>

      </div>
    </nav>

    <div class="container-fluid">
      <h3 class="text-center" style="margin-bottom: 24px">
        Silahkan Masukan Komentar Anda
      </h3>
      <div style="width: 30%; margin: auto">
        <form action="" method="post">
            <textarea class="form-control" name="komentar" id="" cols="30" rows="10"></textarea>
          <button
            class="btn btn-primary"
            type="submit"
            style="margin-top: 8px; width: 100%"
            name="submit"
          >
            Submit
          </button>
        </form>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on("click", function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top,
              },
              900,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });

        $(window).scroll(function () {
          $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
      });
    </script>
  </body>
</html>
