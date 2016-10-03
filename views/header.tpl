<!--<section>
    <header>
        <div id="NavBar">
         <nav>
          <ul>
              <li><a href="#"><img  alt="Side2Side" src="image/Side2SidePhotoshopped.png" width="100" height="25"></a></li>
              <li><a href="#">Band</a></li>
              <li><a href="#">Tour</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Search</a></li>
          </ul>
        </nav>
       </div>
    </header>
</section> -->

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<nav class="desktop">
  <a href="#"><img  alt="Side2Side" src="image/Side2SidePhotoshopped.png" width="100" height="20"></a>
  <a href="#">Band</a>
  <a href="#">Tour</a>
  <a href="#">Shop</a>
  <a href="#">Search</a>
</nav>

<nav class="mobile">
  <button>Toggle</button>
  <div>
    <a href="#">Mobile 1</a>
    <a href="#">Mobile 2</a>
    <a href="#">Mobile 3</a>
    <a href="#">Mobile 4</a>
  </div>
</nav>

<article>
  <h1>Basic Hamburger Menu</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quasi sint error perspiciatis quis rem nisi reiciendis doloribus cumque aliquid molestiae quos sed ex commodi ad eveniet asperiores distinctio vero.
  </p>
</article>


<script>
$('button').click(function() {
 $(this).toggleClass('expanded').siblings('div').slideToggle();
});</script>
