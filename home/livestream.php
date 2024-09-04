<div class="my-5 d-md-flex align-items-center justify-content-center mb-5 px-5 gap-5 display-none-property ">


<!-- left links -->
<div class="d-flex  justify-content-center align-items-center">
    <div class="d-flex gap-3 flex-column">
        <div class="twitch-image ">
            <a href="https://www.twitch.tv/acejimbo" target="_blank" style="text-decoration: none;" >
                <div class="d-flex align-items-center gap-2" >
                <img loading="lazy" src="../files/social/twitch.png?v=1.6" style="height: 25px; width: 25px; " alt="twitch logo"> <span style="color: rgb(225, 220, 220);">Twitch</span>
                </div>
            </a>
        </div>
        <div class="youtube-image">
            <a href="https://www.youtube.com/channel/UCkExdnT09c5dliUf1GECPBg" target="_blank" style="text-decoration: none;">
                <div class=" d-flex align-items-center gap-2">
                <img loading="lazy" src="../files/social/youtube.png?v=1.6" style="height: 25px; width: 25px; " alt="youtube logo"> <span style="color: rgb(225, 220, 220);" >Youtube</span>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- iframe for twitch livestream -->
<!--<div class="twitch-iframe">   GAB -->
<div id="twitch-iframe">
<!-- <iframe src="https://player.twitch.tv/?channel=acejimbo&parent=tarkovtracker.ca" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe> GAB--> 
</div>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
 <script type="text/javascript">
      new Twitch.Embed("twitch-iframe", {
        width: 620,
        height: 378,
        layout: "video", //<!-- GAB ma faite ajouter sa pour enlever le chat dans le bas du stream  
        channel: "acejimbo",
        // Only needed if this page is going to be embedded on other websites
        parent: ["tarkovtracker.ca"]  
      });   //GAB jai mis en commentaire la ligne 34 et j'ai ajouté la ligne 27 à 36

    </script>

<!-- right links -->
<div class="d-flex  justify-content-center align-items-center">
    <div class="d-flex gap-3 flex-column">
        <div class="twitter-image ">
            <a href="https://twitter.com/acejimbo" target="_blank" style="text-decoration: none;" >
                <div class="d-flex align-items-center gap-2" >
                <img loading="lazy" src="../files/social/twitter.png?v=1.6" style="height: 25px; width: 25px; filter: invert(1);  padding: 3px;" alt="twitch logo"> <span style="color: rgb(225, 220, 220);  ">Twitter</span>
                </div>
            </a>
        </div>
        <div class="discord-image">
            <a href="https://discord.gg/ymezY5jgVq" target="_blank" style="text-decoration: none;">
                <div class=" d-flex align-items-center gap-2">
                <img loading="lazy" src="../files/social/discord.png?v=1.6" style="height: 25px; width: 25px; " alt="youtube logo"> <span style="color: rgb(225, 220, 220);" >Discord</span>
                </div>
            </a>
        </div>
    </div>
</div>


</div>