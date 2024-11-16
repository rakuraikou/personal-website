<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plugging in...recharging...!</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="PLUGGING IN - index" property="og:title">
    <meta content="LEN's blog / personal rambles." property="og:description">
    <meta content='https://rkrk.dev/res/embed_sprite.png' property='og:image'>
    <meta name="theme-color" content="#ffa114">

<!-- css sheet and javascript -->
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
    <header>
      <h1>
        <a href="/plug/index">Plugging In!</a>
      </h1>
      <h4 style="font-style: italic">
        My little blogging corner where I talk about my life and interests...freely!
      </h4>
      <p style="margin: 0"><a href="/index">...back to main site!</a></p>
    </header>
    <main>
      <?php
      $servername =  "localhost:3306";
      $username = "rkrkidgb_user";
      $password = "XSR%2T%)c%Wk";
      $database = "rkrkidgb_blog";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $conn->set_charset('utf8mb4');
      $id = mysqli_real_escape_string($conn, $_GET['id']);
      $sidebar_sql = "SELECT * FROM post";
      $sidebar_result = $conn->query($sidebar_sql);

      echo "
      <div class='toc'>
        <img src='res/raku_thing.png'>
        <div class='links'>";
      if ($sidebar_result->num_rows > 0) {
        while ($row = $sidebar_result->fetch_assoc()) {
          echo "
            <a href='?id=" . $row["id"] . "'>" . $row["date"] . "</a>
          ";
        }
      }
      echo "
        </div>
      </div>
      ";
      
      if($id) {
        $post_sql = "SELECT * FROM post WHERE id = '$id'";
        $post_result = $conn->query($post_sql);
        if ($post_result->num_rows > 0) {
          while ($row = $post_result->fetch_assoc()) {
          echo "
          <div class='post'>
            <h2 style='text-align: center'>" . $row["title"] . "</h2>
            <p class='subtext'>" . $row["subtitle"] . " -- " . $row["date"] . "</p>
            " . $row["main"] . "
            <h3>The tasks...</h3>
            " . $row["work"] . "
            <h3>What's fun?</h3>
            " . $row["fun"] . "
          </div>";
          }
        } else {
          echo "Invalid post ID";
        }
      } else {
        echo "
        
          <div class='post'>
            <h2 style='text-align: center'> Welcome to my stupid baka life</h2>
            <p>
            This is where I talk about what I'm up to, how I'm doing, etc... Right now my goal is to touch this once every week or two, but I'm still feeling it out!
            </p>
          </div>
          ";
      }
      $conn->close();
      ?>
    </main>

    <p style="margin-top:25px; color:#16A6FF; text-align: center;">&#169; rakuraikou |<a class="sitemaplink" href="/sitemap">sitemap</a></p>

  </body>
</html>
