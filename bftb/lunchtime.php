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
  <style>
    body {
      background-image: url('res/lunchtime/ltbg.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
  <body>
    <?php include 'header_content.html'; ?>
    <main>
      <div style="text-align: center">
        <audio controls style="background-color:#62709c; padding: 3px; width: 50%;">
          <source src="res/lunchtime/Great_Fairy_Fountain_25.mp3">
        </audio>
      </div>
      <h1>Lunchtime</h1>
      <hr>
      <p>
        Lunchtime (also known as Raiceli) is the pairing between Raiden and Araceli from <i>Bolt from the Blue</i>. Lunchtime also happens to occupy my brain 24/7. <i>Bolt from the Blue</i> has tons of pairings and whatnot, and I'm not particularly averse to talking about them, but Lunchtime is seriously everything to me (it's not even funny). This ship was the first thing I ever conceptualized for this OCverse/story.
      </p>
      <p>
        The dynamic takes inspiration from princess/knight pairings, stories of love transcending metaphysical barriers (time/space/humanity) and/or love conquering all, and uhm...the trope of clearly high-class ladies falling for Some Guy...IT'S ENDEARING... In other words, Lunchtime is like if <a href="https://en.wikipedia.org/wiki/Bravely_Default" target="_blank">Tiznes</a> (or <a href="https://en.wikipedia.org/wiki/Bravely_Default_II" target="_blank">Seth/Gloria</a>) was also <a href="https://en.wikipedia.org/wiki/The_Legend_of_Zelda" target="_blank">ZeLink</a> was also <a href="https://en.wikipedia.org/wiki/Black_Clover" target="_blank">Astelle</a> was also lesbian. In other, other words, it's my self indulgent ship that accidentally birthed a big worldbuilding/gamedev project.
      </p>
      <h2>Characters in Lunchtime</h2>
      <div class="lunchtime-char">
        <div>
          <h3>Raiden</h3>
          <p>
            A friendly amnesiac who was brought into Castle Cieliso by the Rey. Raiden spent her "new life" with Araceli, mostly serving as her attendant (in official terms, her "shadow"). She's not totally oblivious to the concept of romance, but seems to have no idea of Araceli's feelings for her. If asked, she wouldn't be opposed to dating Araceli - actually, she'd be quite eager! Her only condition is that she'd like to resign from her position first, just to keep things professional (though, their lives and interactions would likely remain unchanged).
          </p>
          <p>
            Raiden likes everything about Araceli, which is saying a lot, because she more or less knows everything about her. She would say that her favorite thing about Araceli is how strong she is.
          </p>
        </div>
        <div>
          <h3>Araceli</h3>
          <p>
            A rather composed princess who's determined to see her own ambitions to the end. Unfortunately her composure seems to waver when she's around her attendant, Raiden. Because they're so close in age, their relationship is more of a childhood friendship than a business arrangement. Araceli has an enormous crush on Raiden, though she'll deny it if anyone asks. Part of her hopes Raiden notices, but she also thinks it's really embarrassing putting herself out like this! She wonders if Raiden shares the same feelings as herself... 
          </p>
          <p>
            Araceli loves Raiden's heart. She admires her ability to be kind, even when it's difficult, and she appreciates how thoughtful she can be. She would also say that Raiden is good at providing new perspectives to many situations. Above all else, Araceli values Raiden's loyalty and commitment, and likes that she can always rely on her. 
          </p>
        </div>
      </div>
      <h2>How did they meet?</h2>
      <p>
        It all started ten years ago when Raiden mysteriously washed onto the shores of a neighboring region of Ikoron. Despite not being able to recall anything but her own name, the Cielisono royal family took her in and cared for her. In return, Raiden would eventually serve as the princess' shadow. At first, young Araceli was excited to have someone her age in the Castle. Raiden was also happy to spend time with Araceli, as well as thankful to her family for her taking her in.
      </p>
      <p>
        As Araceli grew into her teen years, she became closed-off and jaded with her situation (tl;dr, she can't use magic, which is the one thing she <i>really</i> needs to be able to use right now). She would grow irritable towards Raiden, since they were always together. Though this behavior would confuse Raiden, she continued to try and have fun with Araceli. At some point, however, she would learn to give Araceli her space and respect her need for quiet solitude. Over time, Araceli would somewhat regain her affections for Raiden, and the two would spend more time together again, though not at the expense of losing focus on the original situation.
      </p>
      <p>
        Now, the two are on a long journey together (with some others, but they don't matter right now). Though the path ahead is dangerous and unfamiliar, Raiden and Araceli find comfort and confidence in each other - as long as they have the other, everything will be alright.
      </p>
      <h2>
        Why is it called "Lunchtime?"
      </h2>
      <p>
        The ship name was originally called Raiceli (RaiCeli). I said it out loud in a voice chat once and realized it sounded like rice-celi. Then the joke went on and it became rice-celery... Food... Lunchtime... 
      </p>
      <p>
        The other reason is because I think it's cute. And I love to eat lunch. 
      </p>
      <h1>
        Gallery
      </h1>
      <hr>
      <p>
        Art has been categorized by origin and organized in reverse-chronological order (to the best of my ability). Enjoy!
      </p>
      <p>
        Click on the image to view the full-size version!
      </p>
      <?php
      $servername = "localhost:3306";
      $username = "rkrkidgb_user";
      $password = "XSR%2T%)c%Wk";
      $database = "rkrkidgb_bftb";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $conn->set_charset('utf8mb4');
      $sql_myart = "SELECT * FROM lunchtime_gallery WHERE artist = 'me' ORDER BY id DESC";
      $result_myart = $conn->query($sql_myart);
      $sql_othersart = "SELECT * FROM lunchtime_gallery WHERE artist = 'others' ORDER BY id DESC";
      $result_othersart = $conn->query($sql_othersart);

      function genArtThumbnails($result) {
        if ($result->num_rows > 0) {
          echo "<div class='gallery'>";
          while ($row = $result->fetch_assoc()) {
            echo "<img class='gallery-img thumbnail' src='res/lunchtime/thumb/{$row['artist']}/{$row['thumbnail']}' alt='{$row['thumbnail']} thumbnail' data-full='res/lunchtime/full/{$row['artist']}/{$row['thumbnail']}' data-alt='{$row['alt']}' data-artistlink='{$row['artist_link']}' data-artistname='{$row['artist_name']}' data-caption='{$row['caption']}'>";
          }
          echo "</div>";
        } else {
          echo "No images found";
        }
      }

      // thumbnails gallery
      echo "
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
        let currentIndex = 0;

        thumbnails.forEach((thumbnail, index) => {
          thumbnail.addEventListener('click', () => {
            modalImage.src = thumbnail.dataset.full;
            modalImage.alt = thumbnail.dataset.alt;
            artistCredit.href = thumbnail.dataset.artistlink;
            artistCredit.innerText = thumbnail.dataset.artistname;
            document.getElementById('caption').innerText = thumbnail.dataset.caption;
            document.getElementById('view-full').href = thumbnail.dataset.full;
            modal.style.display = 'flex';
            currentIndex = index;

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
          currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
          updateModal();
        });
        nextBtn.addEventListener('click', () => {
          currentIndex = (currentIndex + 1) % thumbnails.length;
          updateModal();
        });
        function closeModal() {
          modal.style.display = 'none';
        }
        function updateModal() {
          modalImage.src = thumbnails[currentIndex].dataset.full;
          modalImage.alt = thumbnails[currentIndex].dataset.alt;
          artistCredit.href = thumbnails[currentIndex].dataset.artistlink;
          artistCredit.innerText = thumbnails[currentIndex].dataset.artistname;
          document.getElementById('caption').innerText = thumbnails[currentIndex].dataset.caption;
          document.getElementById('view-full').href = thumbnails[currentIndex].dataset.full;
        }
      </script>

    </main>
    <?php include 'footer_content.html'; ?>
  </body>
</html>
