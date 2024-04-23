<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolt from the Blue Wiki</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="Bolt from the Blue - Characters" property="og:title">
    <meta content="The 'official' wiki for LEN's worldbuilding and RPG project, Bolt from the Blue." property="og:description">
    <meta content='https://rkrk.dev/bftb/wiki/res/icon.png' property='og:image'>
    <meta name="theme-color" content="#0036cc">

<!-- css sheet and javascript -->
    <link href="style_wiki.css" rel="stylesheet" type="text/css" media="all">
    <script src="script_wiki.js"></script>
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
      if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM characters WHERE id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
            <ul class='crumb'>
              <li><a href='index'>Home</a></li>
              <li><a href='character'>Characters</a></li>
              <li><a href='?id=" . $row["id"] . "'>" . ucfirst($row["id"]) . "</a></li>
            </ul>

            <h1 style='font-style: italic'>" . $row["alias"] . "</h1>
              <hr>
                <div class='char-side'>
                  <img src='res/fb/" . $row["id"] . ".png' style='max-height: 400px; margin: auto'>
                  <table class='side-table'>
                    <tr>
                      <td>Name</td>
                      <td>" . $row["full_name"] . "</td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>" . $row["gender"] . "</td>
                    </tr>
                    <tr>
                      <td>Age</td>
                      <td>" . $row["age"] . "</td>
                    </tr>
                    <tr>
                      <td>Height</td>
                      <td>" . $row["height"] . "</td>
                    </tr>
                    <tr>
                      <td>Aspect</td>
                      <td>" . $row["aspect"] . "</td>
                    </tr>
                    <tr>
                      <td>Affiliation</td>
                      <td>" . $row["affiliation"] . "</td>
                    </tr>
                  </table>
                </div>
                <div>
                  <p>" . $row["summary"] . "</p>
                  <div class='char-toc'>
                    <b>Table of Contents</b>
                    <ul>
                      <li>
                        <a href='#profile'>Profile</a>
                      </li>
                      <ul>
                        <li>
                          <a href='#appearance'>Appearance</a>
                        </li>
                        <li>
                          <a href='#personality'>Personality</a>
                        </li>
                      </ul>
                      <li>
                        <a href='#abilities'>Abilities</a>
                      </li>
                      <ul>";
                      $abi_sql = "SELECT * FROM abilities WHERE char_id = '$id'";
                      $abi_result = $conn->query($abi_sql);
                      if ($abi_result->num_rows > 0) {
                        while ($abi_row = $abi_result->fetch_assoc()) {
                          echo "
                          <li>
                            <a href='#" . $abi_row["ability_link"] . "'>" . $abi_row["ability_name"] . "</a>
                          </li>
                          ";
                        }
                      }
                      echo "
                      </ul>
                      <li>
                        <a href='#story'>History</a>
                      </li>
                      <ul>
                        <li>
                          <a href='#storybefore'>Prior to Story</a>
                        </li>
                        <li>
                          <a href='#storymain'>During <i>Bolt from the Blue</i></a>
                        </li>
                      </ul>
                      <li>
                        <a href='#rel'>Relationships</a>
                      </li>
                      <ul>";
                $rel_sql = "SELECT * FROM relationships WHERE char_id = '$id'";
                $rel_result = $conn->query($rel_sql);
                if ($rel_result->num_rows > 0) {
                  while ($rel_row = $rel_result->fetch_assoc()) {
                    echo "
                        <li>
                          <a href='#" . $rel_row["rel_link"] . "'>" . $rel_row["rel_name"] . "</a>
                        </li>
                    ";
                  }
                }
                echo "
                      </ul>
                    </ul>
                  </div>
                </div>
                  <h2 id='profile'>Profile</h2>
                  <hr>
                  <h3 id='appearance'>Appearance</h3>
                  " . $row["appearance"] . "
                  <h3 id='personality'>Personality</h3>
                  " . $row["personality"] . "
                  <h2 id='abilities'>Abilities</h2>
                  <hr>
                  " . $row["abilities"] . "
                  ";
                  if ($abi_result->num_rows > 0) {
                    $abi_result->data_seek(0);
                    while ($abi_row = $abi_result->fetch_assoc()) {
                      echo "
                      <h3 id='" . $abi_row["ability_link"] . "'>" . $abi_row["ability_name"] . "</h3>
                      " . $abi_row["ability_desc"] . "
                      ";
                    }
                  }

                  echo "<h2 id='story'>History</h2>
                  <hr>
                  <h3 id='storybefore'>Prior to Story</h3>
                  " . $row["story_before"] . "
                  <h3 id='storymain'><i>Bolt from the Blue</i></h3>
                  " . $row["story_main"] . "
                  <h2 id='rel'>Relationships</h2>
                  <hr>
                  ";

                  if ($rel_result->num_rows > 0) {
                    $rel_result->data_seek(0);
                    while ($rel_row = $rel_result->fetch_assoc()) {
                      echo "
                      <h3><a id='" . $rel_row["rel_link"] . "' class='rel_link' href='?id=" . $rel_row["rel_link"] . "'>" . $rel_row["rel_name"] . "</a></h3>
                      " . $rel_row["rel_info"] . "
                      ";
                    }
                  } else {
                    echo "Nothing here yet! Sorry!";
                  }
              }
            } else {
              echo "Invalid character ID";
            }
        } else {
          $sql_protag = "SELECT * FROM characters WHERE type = 'protag'";
          $result_protag = $conn->query($sql_protag);
          
          $sql_nox = "SELECT * FROM characters WHERE type = 'nox'";
          $result_nox = $conn->query($sql_nox);

          $sql_linked = "SELECT * FROM characters WHERE type = 'linked'";
          $result_linked = $conn->query($sql_linked);

          $sql_other = "SELECT * FROM characters WHERE type = 'other'";
          $result_other = $conn->query($sql_other);

          function genCharIndex($result) {
            if ($result->num_rows > 0) {
              echo "<div class='char-select'>";
              while ($row = $result->fetch_assoc()) {
                echo "
                <a href='?id=" . $row["id"] . "' class='char-link'>
                  <img src='res/icon/" . $row["id"] . ".png'>
                  " . ucfirst($row["id"]) . "
                </a>
                ";
              }
              echo "</div>";
            } else {
              echo "No characters found";
            }
          }
          include 'character_index.php';
        }
        $conn->close();
        ?>
    </main>
    <?php include 'footer_content.html'; ?>
  </body>
</html>
