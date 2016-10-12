<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<img id="HeaderPic" src="image/Side2SideBigBanner.png">
<nav class="desktop">
  <a id="Home" href="index.php"><img id="LogoHeader" alt="Side2Side" src="image/Side2SidePhotoshopped4.png" </a>
  <a id="Band" href="?action=about">Band</a>
  <a id="Tour" href="?action=tour">Tour</a>
  <a id="Shop" href="?action=shop">Shop</a>
  <a id="Search" href="?action=search">Search</a>
</nav>

<nav class="mobile">
  <button>Toggle</button>
  <div>
    <a id="Home" href="#">Mobile 1</a>
    <a id="Band" href="#">Mobile 2</a>
    <a id="Tour" href="#">Mobile 3</a>
    <a id="Shop" href="#">Mobile 4</a>
    <a id="Search" href="#">Mobile 5</a>
  </div>
</nav>

<script>
$('button').click(function() {
 $(this).toggleClass('expanded').siblings('div').slideToggle();
});</script>
