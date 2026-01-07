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
    <div class="body-container">
      <?php include 'header_content.html'; ?>
      <main class="landing-main">

        <?php
        $id = $_GET['id'] ?? 'overall';
        $valid_ids = ['overall', 'raiden', 'araceli', 'saffron', 'cole'];
        if (!in_array($id, $valid_ids)) {
          $id = 'overall';
        }
        ?>
        
        <?php if ($id === 'overall'): ?>
          <img src="res/focus_overall.png" class="index-img">
        <?php endif; ?>
        <?php if ($id === 'raiden'): ?>
          <img src="res/focus_raiden.png" class="index-img">
        <?php endif; ?>
        <?php if ($id === 'araceli'): ?>
          <img src="res/focus_araceli.png" class="index-img">
        <?php endif; ?>
        <?php if ($id === 'saffron'): ?>
          <img src="res/focus_saffron.png" class="index-img">
        <?php endif; ?>
        <?php if ($id === 'cole'): ?>
          <img src="res/focus_cole.png" class="index-img">
        <?php endif; ?>


        <div class="landing-container">
          <?php include 'nav_content.html'; ?>
          <div class="landing-textbox">

            <?php if ($id === 'overall'): ?>
              <div class="char-tab">
                <div class="char-name">
                  <img src="res/decor.png">
                  <span class="overall-head">
                    WHEREVER YOU GO,<br>LIGHT FOLLOWS.
                  </span>
                  <img src="res/decor.png" style="transform: scaleX(-1)">
                </div>
                <hr>
                <p style="margin: 5px">
                  Embark on a magical journey where the strength of one's bonds has the power to overcome even prophecy. <i>Bolt from the Blue</i> follows the story of Araceli Almador de Luna, princess of a kingdom that's just been brought to ruin by a powerful, dark entity—one that she was destined to stop, but couldn't due to a curse that's plagued her for her entire life. Araceli's story is shown through the perspective of Raiden, her kind attendant ("shadow") with no recollection of her own past, who devotes herself entirely to Araceli's safety and well-being. Little do they know, the destruction has spread far beyond their home.
                </p>
                <p style="margin-bottom: 0">
                  Accompanied by the ever-ambitious scion Saffron and the boisterous pirate Cole, the duo set out on a quest to lift Araceli's curse and return home—hopefully not too late for Araceli to fulfill her destiny as her kingdom's hero. At every turn, the party is threatened Nox Noctis, a mysterious organization seeking to seize control of mythical powers from Luxos' ancient past. Together, these four will put a stop to Nox Noctis' plans and bring light to a world succumbed to darkness.
                </p>
                  <p style="text-align: center; font-size: 0.8rem; color: #a5a5a7">(img by <a href="https://bsky.app/profile/greypij.bsky.social">greypij.bsky.social</a>)</p>
              </div>
            <?php endif; ?>
            
            <?php if ($id === 'raiden'): ?>
              <div class="char-tab">
                <div class="char-name">
                  <img src="res/decor.png">
                  <span>
                    RAIDEN
                  </span>
                  <img src="res/decor.png" style="transform: scaleX(-1)">
                </div>
                <hr>
                <p style="margin: 5px">
                  It's been six whole years since Raiden washed up in Bura Bay with nothing to her name, aside from her name itself. By some divine stroke of fate, she was taken in by the Cielisono Royal Family and has been serving as the princess' shadow, a role which entails more than enough knight-attendant duties to keep her busy. Though quiet, Raiden is extremely gentle and kind, inadvertently drawing people towards herself.
                </p>
                <p style="text-align: center; margin: 0; font-size: 0.8rem; color: #a5a5a7">(img by <a href="https://bsky.app/profile/alphajn.bsky.social">alphajn.bsky.social</a>)</p>
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
                      Suprisingly athletic and picks up most games/sports fairly easily
                    </li>
                  </ul>
                </div>
                <hr>
                <p class="blockquote" style="font-style: italic; margin: 10px">
                  "It's a good thing that you're alive. The princess can use your support!"
                </p>
              </div>
            <?php endif; ?>
            
            <?php if ($id === 'araceli'): ?>
              <div class="char-tab">
                  <div class="char-name">
                    <img src="res/decor.png">
                    <span>
                      ARACELI
                    </span>
                    <img src="res/decor.png" style="transform: scaleX(-1)">
                  </div>
                  <hr>
                  <p style="margin: 5px">
                    Princess of the Cielisono Royal Family and future ruler of its kingdom, Araceli spent most of her time studying under an Arcanican tutor, training with the Windknights in magic and swordplay, and trying to hone her pact with the Champion Loniles. To the rest of the world, Araceli was the picture-perfect heiress for the kingdom. Behind all of that façade, however, was a young girl cursed to fail everyone.
                  </p>
                  <p style="text-align: center; margin: 0; font-size: 0.8rem; color: #a5a5a7">(img by <a href="https://artfight.net/~cyberart">cyberart@AF</a>)</p>
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
                  <p class="blockquote" style="font-style: italic; margin: 10px">
                    "As the princess of prophecy, I must do everything in my power to stand unbending against the ancient darkness and save the world."
                  </p>
              </div>
            <?php endif; ?>

            <?php if ($id === 'saffron'): ?>
              <div class="char-tab">
                  <div class="char-name">
                    <img src="res/decor.png">
                    <span>
                      SAFFRON
                    </span>
                    <img src="res/decor.png" style="transform: scaleX(-1)">
                  </div>
                  <hr>
                  <p style="margin: 5px">
                    Saffron is the last of his prestigious family of diviners to catch wind of an impending catastrophe. Everyone else seems to have long-resolved themselves to this end—trying to change a forseen future would result in a more tragic outcome taking its place. However, as detached from fate as a member of House Infiaco could be, Saffron refuses to take this as an answer, embarking on a quest to make everyone listen to him.
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
                        Can see a few moments into the future, but relies on his wits to "predict" any further than that
                      </li>
                    </ul>
                  </div>
                  <hr>
                  <p class="blockquote" style="font-style: italic; margin: 10px">
                    "Just WHAT were you thinking?! Do you have even a touch of logical reasoning in you? No, no, of course you don't! Why do I even ask...”
                  </p>
              </div>
            <?php endif; ?>

            <?php if ($id === 'cole'): ?>
              <div class="char-tab">
                  <div class="char-name">
                    <img src="res/decor.png">
                    <span>
                      COLE
                    </span>
                    <img src="res/decor.png" style="transform: scaleX(-1)">
                  </div>
                  <hr>
                  <p style="margin: 5px">
                    After a falling out with her last crew, Cole has taken the Skysea by storm all on her own. With nobody but herself to worry about, Cole was looking forward to a lifetime of solo plundering. However, under all of that tough skin, Cole buries a tragic secret. Unbeknownst to her, accepting an interesting noble's request for an undercover means of travel will force Cole to face this trauma head-on.
                  </p>
                  <p style="text-align: center; margin: 0; font-size: 0.8rem; color: #a5a5a7">(img by <a href="https://toyhou.se/HatnBells">HatnBells@TH</a>)</p>
                  <hr>
                  <div style="margin: 5px">
                    <ul style="margin: 0px">
                      <li>
                        Won't attend social events if there's no alcohol involved
                      </li>
                      <li>
                        Raised by a pair of butchers/steakhouse owners
                      </li>
                      <li>
                        Frequently cheats at card games
                      </li>
                    </ul>
                  </div>
                  <hr>
                  <p class="blockquote" style="font-style: italic; margin: 10px">
                    "Sometimes, it's not enough to just want something. Sometimes, you gotta take it with your bare fists and show the world you earned it!”
                  </p>
              </div>
            <?php endif; ?>

            <div class="story-grid">
              <a href="?id=raiden">
                <img class="char-link" src="res/landing_raiden.png">
              </a>
              <a href="?id=araceli">
                <img class="char-link" src="res/landing_araceli.png">
              </a>
              <a href="?id=overall">
                <img class="char-link" src="res/landing_overall.png">
              </a>
              <a href="?id=saffron">
                <img class="char-link" src="res/landing_saffron.png">
              </a>
              <a href="?id=cole">
                <img class="char-link" src="res/landing_cole.png">
              </a>
            </div>

          </div>
        </div>
      </main>
    <?php include 'footer_content.html'; ?>
    </div>
  </body>
</html>
