<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the thunder guy or whatever</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="Bolt from the Blue - LUNCHTIME" property="og:title">
    <meta content="Self-indulgent gallery channel for the relationship between Raiden and Araceli" property="og:description">
    <meta content='https://rkrk.dev/bftb/res/ango_lt_stamp.png' property='og:image'>
    <meta name="theme-color" content="#23c4ff">

<!-- css sheet and javascript -->
    <link href="style_bftb.css" rel="stylesheet" type="text/css" media="all">
    <script src="script_bftb.js"></script>

  </head>
  <body>
    <?php include 'header_content.html'; ?>
    <main>
      <?php
      $servername = "localhost:3306";
      $username = "rkrkidgb_user";
      $password = "XSR%2T%)c%Wk";
      $database = "rkrkidgb_bftb";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
      $sql_myart = "SELECT * FROM lunchtime_gallery WHERE artist = 'me'";
      $result_myart = $conn->query($sql_myart);
      $sql_othersart = "SELECT * FROM lunchtime_gallery WHERE artist = 'others'";
      $result_othersart = $conn->query($sql_othersart);

      function genArtThumbnails($result) {
        if ($result->num_rows > 0) {
          echo "<div class='gallery'>";
          while ($row = $result->fetch_assoc()) {
            echo "<img class='gallery-img thumbnail' src='res/lunchtime/thumb/" . $row["artist"] . "/" . $row["thumbnail"] . "'>";
          }
          echo "</div>";
        } else {
          echo "No images found";
        }
      }

      echo "
      <h1>Lunchtime</h1>
      <hr>
      <h2>Art by me</h2>
      ";
      genArtThumbnails($result_myart);
      echo "
      <h2>Art by others</h2>
      ";
      genArtThumbnails($result_othersart);
      ?>

    <!-- thumbnails gallery -->
      <div class="gallery">
        <img class="gallery-img thumbnail" src="res/lunchtime/angogo9.png">
      </div>

    <!-- modal popup-->
      <div id="lt-modal" class="modal">
        <div class="modal-overlay"></div>
        <span class="close text-outline modal-btn">&times;</span>
        <div class="modal-content">
          <span id="prev-btn" class="text-outline modal-btn">
            <span>
              &lt;
            </span>
          </span>
          <img id="modal-image" src="res/ex.png" alt="">
          <span id="next-btn" class="text-outline modal-btn">
            <span>
              &gt;
            </span>
          </span>
        </div>
        <div class="modal-caption">
          <div class="modal-credit">
            <span>by <a href="">USERNAME @ SOCMED</a></span>
            <a href="">View full image</a>
          </div>
          <hr style="width: 100%">
          <span>
            This is a caption where I put things and stuff. Ango made this drawing and it's awesome!
          </span>
        </div>
      </div>

      <script>
        const modal = document.getElementById('lt-modal');
        const modalImage = document.getElementById('modal-image');
        const thumbnails = document.querySelectorAll('.thumbnail');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const modalOverlay = document.querySelector('.modal-overlay');

        thumbnails.forEach(thumbnail => {
          thumbnail.addEventListener('click', () => {
            modal.style.display = 'flex';
            //modalImage.src = thumbnail.dataset.full;
          });
        });

        document.querySelector('.close').addEventListener('click', () => {
          closeModal();
        });
        modalOverlay.addEventListener('click', (event) => {
          if (event.target === modalOverlay) {
            closeModal();
          }
        });
        prevBtn.addEventListener('click', () => {
          console.log("prev")
        });
        nextBtn.addEventListener('click', () => {

        });
        function closeModal() {
          modal.style.display = 'none';
        }
      </script>

    </main>
    <?php include 'footer_content.html'; ?>
  </body>
</html>
