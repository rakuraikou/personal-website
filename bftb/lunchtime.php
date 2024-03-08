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
      
      $sql_myart = "SELECT * FROM lunchtime_gallery WHERE artist = 'me' ORDER BY id DESC";
      $result_myart = $conn->query($sql_myart);
      $sql_othersart = "SELECT * FROM lunchtime_gallery WHERE artist = 'others' ORDER BY id DESC";
      $result_othersart = $conn->query($sql_othersart);

      function genArtThumbnails($result) {
        if ($result->num_rows > 0) {
          echo "<div class='gallery'>";
          while ($row = $result->fetch_assoc()) {
            echo "<img class='gallery-img thumbnail' src='res/lunchtime/thumb/{$row['artist']}/{$row['thumbnail']}' alt='{$row['thumbnail']} thumbnail' data-full='res/lunchtime/full/{$row['thumbnail']}' data-alt='{$row['alt']}' data-artistlink='{$row['artist_link']}' data-artistname='{$row['artist_name']}' data-caption='{$row['caption']}'>";
          }
          echo "</div>";
        } else {
          echo "No images found";
        }
      }

      // thumbnails gallery
      echo "
      <h1>Lunchtime</h1>
      <hr>
      <h2>My art</h2>
      ";
      genArtThumbnails($result_myart);
      echo "
      <h2>Gift art / Commissions</h2>
      ";
      genArtThumbnails($result_othersart);

      // modal popup
      echo "
      <div id='lt-modal' class='modal'>
        <div class='modal-overlay'></div>
        <span class='close text-outline modal-btn'>&times;</span>
        <div class='modal-content'>
          <span id='prev-btn' class='text-outline modal-btn'>
            <span>
              &lt;
            </span>
          </span>
          <img id='modal-image' src='' alt=''>
          <span id='next-btn' class='text-outline modal-btn'>
            <span>
              &gt;
            </span>
          </span>
        </div>
        <div class='modal-caption'>
          <div class='modal-credit'>
            <span>by <a id='credit' href=''></a></span>
            <a id='view-full' href=''>View full image</a>
          </div>
          <hr style='width: 100%'>
          <span id='caption'>
          </span>
        </div>
      </div>
      ";

      ?>

      <script>
        const modal = document.getElementById('lt-modal');
        const modalImage = document.getElementById('modal-image');
        const artistCredit = document.getElementById('credit');
        const thumbnails = document.querySelectorAll('.thumbnail');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const modalOverlay = document.querySelector('.modal-overlay');

        thumbnails.forEach(thumbnail => {
          thumbnail.addEventListener('click', () => {
            modal.style.display = 'flex';
            modalImage.src = thumbnail.dataset.full;
            modalImage.alt = thumbnail.dataset.alt;
            artistCredit.href = thumbnail.dataset.artistlink;
            artistCredit.innerText = thumbnail.dataset.artistname;
            document.getElementById('caption').innerText = thumbnail.dataset.caption;
            document.getElementById('view-full').href = thumbnail.dataset.full;

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
