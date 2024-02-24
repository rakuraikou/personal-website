<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the thunder guy or whatever</title>

<!-- css sheet and javascript -->
    <link href="style_wiki.css" rel="stylesheet" type="text/css" media="all">
    <script src="script_wiki.js"></script>
  </head>

  <body>
    <?php include 'header_content.html'; ?>
    <main>
      <?php
      $servername = "localhost:3306";
      $username = "rkrkidgb_len";
      $password = "Palomita_0901";
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
              <li><a href='index.html'>Home</a></li>
              <li><a href='character.php'>Characters</a></li>
              <li><a href='?id=" . $row["id"] . "'>" . $row["name"] . "</a></li>
            </ul>

            <h1 style='font-style: italic'>" . $row["alias"] . "</h1>
              <hr>
                <div class='char-side'>
                  <img src='" . $row["image"] . "' style='max-height: 300px; margin: auto'>
                  <table class='side-table'>
                    <tr>
                      <td>Full Name</td>
                      <td>" . $row["name"] . "</td>
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
                    </ul>
                  </div>
                </div>
                  <h2 id='profile'>Profile</h2>
                  <hr>
                  <h3 id='appearance'>Appearance</h3>
                  <p>" . $row["appearance"] . "</p>
                  <h3 id='personality'>Personality</h3>
                  <p>" . $row["personality"] . "</p>
                  <h2 id='abilities'>Abilities</h2>
                  <hr>
                  <p>" . $row["abilities"] . "</p>
                  <h2 id='story'>Story</h2>
                  <hr>
                  <h3 id='storybefore'>Prior to Story</h3>
                  <p>" . $row["story_before"] . "</p>
                  <h3 id='storymain'>During <i>Bolt from the Blue</i></h3>
                  <p>" . $row["story_main"] . "</p>";
              }
            } else {
                echo "Invalid character ID!";
            }
        } else {
          include 'character_index.html';
        }
        $conn->close();
        ?>
    </main>
    <?php include 'footer_content.html'; ?>
  </body>
</html>