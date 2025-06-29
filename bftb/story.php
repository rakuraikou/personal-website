<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the thunder guy or whatever</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="Bolt from the Blue - Index" property="og:title">
    <meta content="Lore and development site for LEN's worldbuilding and RPG project, Bolt from the Blue." property="og:description">
    <meta content='https://rkrk.dev/bftb/wiki/res/icon.png' property='og:image'>
    <meta name="theme-color" content="#23c4ff">

<!-- css sheet -->
    <link href="style_bftb.css" rel="stylesheet" type="text/css" media="all">

  </head>
  <body>
    <?php include 'header_content.html'; ?>
    <main>
      <h1>
        Wherever you go, light follows.
      </h1>
      <hr>
      <a href="https://bsky.app/profile/violetchio.bsky.social" target="_blank" title="art by violetchio.bsky.social">
        <img src="res/ango_lt.png" style="float: right; max-height: 250px" alt="Raiden comforting Araceli">
      </a>
      <p>
        Embark on an epic journey where the strength of one's bonds has the power to overcome even prophecy. <i>Bolt from the Blue</i> is a character-driven RPG following the story of Araceli Almador de Luna, princess of a kingdom that's just been brought to ruin by a powerful, dark entity—one that she was destined to stop, but couldn't due to a mysterious curse that's plagued her for her entire life. Araceli's story is shown through the perspective of Raiden, her kind attendant with no recollection of her own past, devoting herself entirely to Araceli's safety and well-being.
      </p>
      <p>
        Accompanied by over-ambitious noble Saffron and the boisterous pirate Cole, the duo set out on a quest to lift Araceli's curse and return home and fulfill her destiny as her kingdom's hero. The party is threatened at every turn by the perpetrators of the destruction: Nox Noctis, a mysterious organization seeking to seize control of mythical powers from Luxos' ancient past. Together, these four will put a stop to Nox Noctis' plans and bring light to a world succumbed to darkness.
      </p>
      <h1 style="text-align: center">
        Main Characters
      </h1>
      <div class="eyes-grid">
        <img class="char-link" src="res/eye_raiden.png" onClick="openChar(event, 'raiden')">
        <img class="char-link" src="res/eye_araceli.png" onClick="openChar(event, 'araceli')">
        <img class="char-link" src="res/eye_saffron.png" onClick="openChar(event, 'saffron')">
        <img class="char-link" src="res/eye_cole.png" onClick="openChar(event, 'cole')">
      </div>

      <!-- raiden -->
      <div id="raiden" class="char-grid char-tab">
        <img src="wiki/res/focus_raiden.png" style="max-width: 100%">
        <div class="char-right">
          <div class="char-name">
            <img src="res/decor.png">
            <span>
              RAIDEN
            </span>
            <img src="res/decor.png" style="transform: scaleX(-1)">
          </div>
          <hr>
          <p style="margin: 5px">
            Six years ago, Raiden washed up on the shores of Ikoron with no recollection of her identity outside of her own name. Graciously, she was offered refuge with the Cielisono Royal Family and began serving as its princess' attendant—as her "shadow." She is deeply thankful for the family's kindness, repaying them with her unwavering dedication to the sole heiress.
          </p>
          <hr>
          <div style="margin: 5px">
            <ul style="margin: 0px">
              <li>
                Most of her interests seem to line up with Araceli's
              </li>
              <li>
                Can't remove the bands around her wrists
              </li>
              <li>
                Extremely awkward with weapons, and prefers to fight without them
              </li>
            </ul>
          </div>
          <hr>
          <p class="blockquote" style="font-style: italic; margin: 5px 15px">
            "I know you're hurt, but can I ask you to trust me? Just this once—let my heart reach you!"
          </p>
        </div>
      </div>

      <!-- araceli -->
      <div id="araceli" class="char-grid char-tab">
        <img src="wiki/res/focus_araceli.png" style="max-width: 100%">
        <div class="char-right">
          <div class="char-name">
            <img src="res/decor.png">
            <span>
              ARACELI
            </span>
            <img src="res/decor.png" style="transform: scaleX(-1)">
          </div>
          <hr>
          <p style="margin: 5px">
            Princess of the Cielisono Royal Family and future ruler of its kingdom, Araceli spent most of her time studying under an Arcanican tutor, training with the Windknights in magic and swordplay, and trying to hone her pact with the Champion Loniles. To the rest of the world, Araceli was the picture-perfect heiress for the kingdom. Behind all of that façade, however, was a young girl cursed to fail her kingdom.
          </p>
          <hr>
          <div style="margin: 5px">
            <ul style="margin: 0px">
              <li>
                Enjoys reading young adult adventuromance novels
              </li>
              <li>
                Bites her knuckles as a nervous tick
              </li>
              <li>
                Keeps a <a href="lunar/index" class="secret-link">diary</a> that no one else—not even Raiden—is allowed to peek in
              </li>
            </ul>
          </div>
          <hr>
          <p class="blockquote" style="font-style: italic; margin: 5px 15px">
            "I am the princess of prophecy, and the fate of the Kingdom of Winds rests in my hands. I'll not bend to you!”
          </p>
        </div>
      </div>

      <!-- saffron -->
      <div id="saffron" class="char-grid char-tab">
        <img src="wiki/res/focus_saffron.png" style="max-width: 100%">
        <div class="char-right">
          <div class="char-name">
            <img src="res/decor.png">
            <span>
              SAFFRON
            </span>
            <img src="res/decor.png" style="transform: scaleX(-1)">
          </div>
          <hr>
          <p style="margin: 5px">
            Saffron is the second-born son of House Infiaco, and he is very proud of this fact. Upon warning his family of an impending catastrophe, he realizes that everyone has already long-resolved themselves to this end—it will happen, and trying to change fate could result in divine punishment. Saffron, detached from fate as a member of House Infiaco could be, refuses to take this as an answer, and embarks on a quest to make everyone listen to him.
          </p>
          <hr>
          <div style="margin: 5px">
            <ul style="margin: 0px">
              <li>
                Despite his envy and annoyance, he actually admires his brothers
              </li>
              <li>
                Horrible with animals and small children
              </li>
              <li>
                Has the ability to see up to a day into the future
              </li>
            </ul>
          </div>
          <hr>
          <p class="blockquote" style="font-style: italic; margin: 5px 15px">
            "Just WHAT were you thinking?! Do you have even a touch of logical reasoning in you? No, no, of course you don't! I am unsure why I even asked...”
          </p>
        </div>
      </div>

      <!-- cole -->
      <div id="cole" class="char-grid char-tab">
        <img src="wiki/res/focus_cole.png" style="max-width: 100%">
        <div class="char-right">
          <div class="char-name">
            <img src="res/decor.png">
            <span>
              COLE
            </span>
            <img src="res/decor.png" style="transform: scaleX(-1)">
          </div>
          <hr>
          <p style="margin: 5px">
            Cole's reputation as the renegade first mate of one of the most notorious bands of sky pirates, The Four Skulls, preceded her; few individuals of any faction were comfortable approaching her for any reason, and she preferred it that way. However, under all of that tough skin, Cole buries a tragic secret. When an interesting noble requests a means of travel, Cole is forced to face this trauma head-on.
          </p>
          <hr>
          <div style="margin: 5px">
            <ul style="margin: 0px">
              <li>
                Won't attend social events if there's no alcohol involved
              </li>
              <li>
                Raised by two butchers/steakhouse owners
              </li>
              <li>
                Frequently cheats at card games
              </li>
            </ul>
          </div>
          <hr>
          <p class="blockquote" style="font-style: italic; margin: 5px 15px">
            "Sometimes, it's not enough to just want something. Sometimes, you gotta take it with your bare fists and show the world you earned it!”
          </p>
        </div>
      </div>
      <script>
        function openChar(evt, charName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("char-tab");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("char-link");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(charName).style.display = "grid";
        evt.currentTarget.className += " active";
        }
      </script>
    </main>
    <?php include 'footer_content.html'; ?>
  </body>
</html>
