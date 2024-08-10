<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the thunder guy or whatever</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="Octopath Traveler: House of Stars - Travelers" property="og:title">
    <meta content="Lore site for LEN's Octopath Traveler fan project" property="og:description">
    <meta content='https://rkrk.dev/bftb/wiki/res/icon.png' property='og:image'>
    <meta name="theme-color" content="#23c4ff">

<!-- css sheet and javascript -->
    <link href="style_othos.css" rel="stylesheet" type="text/css" media="all">

  </head>
  <body>
    <main>
      <?php
      $servername = "localhost:3306";
      $username = "rkrkidgb_user";
      $password = "XSR%2T%)c%Wk";
      $database = "rkrkidgb_othos";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      if(isset($_GET['id'])) {
        $conn->set_charset('utf8mb4');
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM travelers WHERE id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
            <img class='img-large' style='position: absolute; max-height: 450px; margin-left:" . $row["pagedoll_margin"] . "' src='res/fb/" . $row["id"] . ".png'>
            <img class='img-small' src=' src='res/fb/" . $row["id"] . ".png'>

            <h1 class='text-outline left-margin' style='font-style: italic'>" . $row["id"] . ", THE " . $row["job"] . "</h1>
            <div class='container left-margin' style='padding: 10px'>
              <div class='traveler-grid celt-border'>
                <div>
                  <div class='hr-wrap'><hr><span>Basic Information:</span><hr></div>
                  <div class='traveler-stat'>
                    <span class='label'>Name:</span> <span>" . $row["name"] . "</span>
                    <span class='label'>Job:</span> <span class='ui'><img src='res/ui/job/" . $row["job"] . ".webp'>" . ucfirst($row["job"]) . "</span>
                    <span class='label'>Location:</span> <span>" . $row["location"] . "</span>
                  </div>
                  <div class='hr-wrap'><hr><span>Path Actions:</span><hr></div>
                  <div class='traveler-stat'>
                    <span class='label'>(<span class='high'>Day</span>) " . $row["day_name"] . ":</span> <span>" . $row["day_desc"] . "</span>
                    <span class='label'>(<span class='high'>Night</span>) " . $row["night_name"] . ":</span> <span>" . $row["night_desc"] . "</span>
                  </div>
                  <div class='hr-wrap'><hr><span>Combat Types:</span><hr></div>
                  <div class='traveler-stat'>
                    <span class='label'>Weapons:</span> <span class='ui'>" . $row["weapon_img"] . $row["weapon_name"] . "</span>
                    <span class='label'>Elements:</span> <span class='ui'>" . $row["element_img"] . $row["element_name"] . "</span>
                  </div>
                </div>
                <div class='traveler-desc'>" . $row["story"] . "</div>
              </div>
            </div>";
            }
          } else {
            echo "Invalid character";
          }
        } else {
          $sql_travelers = "SELECT * FROM travelers";
          $result_travelers = $conn->query($sql_travelers);

          function genCharIndex($result) {
            if ($result->num_rows > 0) {
              echo "
              <div class='container'>
                <h1 class='text-outline' style='text-align: center; margin-top: 0px;'>
                  Travelers
                </h1>
                <div class='traveler-index celt-border'>";
                while ($row = $result->fetch_assoc()) {
                  echo "
                    <a class='traveler-item' href='?id=" . $row["id"] . "'>
                      <img src='res/icon/" . $row["id"] . ".png'>
                      <span style='color: #e0a751'>" . $row["name"] . "</span>
                      <span style='color: #d6c6ae'>The " . ucfirst($row["job"]) . "</span>
                    </a>";
                  }
                  echo "
                  </div>
                </div>";
              } else {
              echo "No characters found";
              }
            }
          }
          $conn->close();
        ?>
    </main>
    <?php
      if(isset($_GET['id'])) {
        echo "
        <footer class='left-margin'>
          <div style='display: flex; gap: 10px; align-items: center;'>
            <a href='travelers'>BACK</a>
            <img src='res/ui/decor/celt.png' style='height: 2.0em; max-height: 2.0em'>
            <a href='/index'>HOME</a>
          </div>
          <a href='/sitemap'>SITEMAP</a>
          <span style='margin-left: auto'>&#169; rakuraikou</span>
        </footer>
        ";
      } else {
        echo "
        <footer>
          <div style='display: flex; gap: 10px; align-items: center;'>
            <a href='index'>BACK</a>
            <img src='res/ui/decor/celt.png' style='height: 2.0em; max-height: 2.0em'>
            <a href='/index'>HOME</a>
          </div>
          <a href='/sitemap'>SITEMAP</a>
          <span style='margin-left: auto'>&#169; rakuraikou</span>
        </footer>
        ";
      }
    ?>
  </body>
</html>
