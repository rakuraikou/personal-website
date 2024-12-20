<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the thunder guy or whatever</title>

<!-- discord embed -->
    <meta content="the thunder guy or whatever" property="og:site_name">
    <meta content="DEEP SEA ARTSCAPE - Features" property="og:title">
    <meta content="All about the sea-themed OC/worldbuilding/project server, DEEP SEA ARTSCAPE!" property="og:description">
    <meta content='https://rkrk.dev/res/embed_sprite.png' property='og:image'>
    <meta name="theme-color" content="#2ebacf">

<!-- css sheet and javascript -->
    <link href="style_dsa.css" rel="stylesheet" type="text/css" media="all">
    <script src="script_dsa.js"></script>

  </head>

  <body>
    <?php include 'header_content.html'; ?>
    <main>
      <div style="text-align: center; margin-bottom: 10px">
        <h2>
          Server Features
        </h2>
        <i>Click the image to open the tab and read more!</i>
      </div>
      <div style="display: flex; flex-direction: row; justify-content: center; gap: 15px">
        <div>
          <img src="res/panel_general.png" alt="general" class="tab-link img-border" style="width: 100%" onClick="openTab(event, 'general')">
        </div>
        <div>
          <img src="res/panel_ss.png" alt="shoal shares" class="tab-link img-border" style="width: 100%" onClick="openTab(event, 'shoalshares')">
        </div>
        <div>
          <img src="res/panel_events.png" alt="server events" class="tab-link img-border" style="width: 100%" onClick="openTab(event, 'serverevents')">
        </div>
        <div>
          <img src="res/panel_minecraft.png" alt="minecraft" class="tab-link img-border" style="width: 100%" onClick="openTab(event, 'minecraft')">
        </div>
      </div>
      <div id="general" class="tab-content active">
        <h3>
          General Features
        </h3>
        <ul>
          <li>
            <span style="color: #fdbd8f">Laid-back and friendly community.</span> Even with all of its unique features, DSA aims to be welcoming to newcomers by providing clear information and remaining open and receptive to any and all feedback from members.
          </li>
          <li>
            <span style="color: #fdbd8f">An organized gallery system for preventing works from being cluttered/lost.</span> Content sent into the gallery channels will automatically generate threads in order to keep things clean and encourage feedback towards each member's piece. In addition, there is a more "casual" gallery channel for sending WIPs, doodles, etc. in case the thread-gallery system feels too formal or daunting.
          </li>
          <li>
            <span style="color: #fdbd8f">Starboard bot.</span> Any message can be given the ⭐ emoji reaction to be placed in a channel dedicated to showcasing the jawdropping highs (and hilarious lows) of the server!
          </li>
          <li>
            <span style="color: #fdbd8f">An environment for comfortably sharing about original characters, stories, lore, etc.</span> Activities such as "Dev QOTD (question of the day)" and the #oc-show-and-tell channel are just a couple of the things DSA provides to give members the OC stage.
          </li>
        </ul>
      </div>
      <div id="shoalshares" class="tab-content">
        <h3>Shoal Shares</h3>
        <p>
          Shoal Shares (abbreviated as "SS") are one of the core features of the server. These are channels requested and ran by creators who would like to share content or progress on their development, request advice or feedback on ideas, or gather collaborators to work together on a big project.
        </p>
        <p>
          There are a variety of ways that members have utilized SS channels, including collaborative roleplay group planning, game development, comic creation, and general worldbuilding. Channels have housed character art, lore rambles, Picrew dumps, Spotify playlists, update links, to-do lists, AU content, and more!
        </p>
        <p>
          Other members can check out these channels and familiarize themselves with the specific things everyone is working on. Each channel is a cozy, self-contained space where you'll always know what you're getting into.
        </p>
        <p>
          The SS system is intended to encourage personal growth, as well as inspire others to expand their creative limits and challenge their own dev-related processes.
        </p>
      </div>
      <div id="serverevents" class="tab-content">
        <h3>Server Events</h3>
        <p>
          DSA offers a variety of casual, cooperative and competitive events. The most popular of these are the monthly events, but the server also hosts "side events" in between to keep things alive. An archive of past events can be found <a href="events">here</a>.
        </p>
        <h4>Monthly Events</h4>
        <p>
           Each month, members are prompted to create content of their characters according to a specific theme or challenge. While the events generally lend themselves to drawn artwork, many of them are also open to writing and other forms of submission. The monthly events are intended to be low-pressure, though some may have raffles for participation and/or prizes for the winner of a competitive event.
        </p>
        <h4>Side Events</h4>
        <p>
          DSA also hosts other events aside from the monthly ones (referred to as "side events"). Though they may not get a flashy banner and announcement, they are still enjoyed by the community. Examples of these smaller events include:
        </p>
        <ul>
          <li>
            Member-suggested events (e.g. "DeviantArt wolf base" design challenge)
          </li>
          <li>
            Facilitative channels for external events (e.g. ArtFight)
          </li>
        </ul>
      </div>
      <div id="minecraft" class="tab-content">
        <h3>Minecraft</h3>
        <p>
          Many members of DSA enjoy playing video games. The server supports this by providing opt-in ping roles for finding people to play with, as well as its own Minecraft server.
        </p>
        <h4>SEA CUBES</h4>
        <div class="grid-minecraft" style="gap: 15px">
          <img src="https://file.garden/ZRerbDGLwX_OLW5G/DSA%20Forum%20Post/mc1.png" class="grid-mc-side img-border">
          <p class="grid-mc-text">
            SEA CUBES is DSA's official Minecraft server. Currently, it is inactive, but we anticipate reviving it in the near future!
          </p>
          <img src="https://file.garden/ZRerbDGLwX_OLW5G/DSA%20Forum%20Post/mc4.png" class="grid-mc-img-1 img-border">
          <img src="https://file.garden/ZRerbDGLwX_OLW5G/DSA%20Forum%20Post/mc5.png" class="grid-mc-img-2 img-border">
        </div>
      </div>
    </main>

    <p class="signature">&#169; rakuraikou | <a href="/sitemap">sitemap</a></p>
  </body>
</html>
