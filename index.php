<?php
$title = 'Home';
include 'header.php';?>
<div class="row">
  <div class="col-lg-8">
    <div class="home-carousel">
      <iframe src="https://player.vimeo.com/video/93419183" width="100%" height="56%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="article">
      <h3>Recruitment</h3>
      <p>If you are coming to Cal, want to come to Cal, or just interested in playing lacrosse, fill out the <a href="recruiting.php#recruiter-form">recruitment form</a>. If you have any questions, check out our <a href="recruiting.php">FAQs</a> page.</p>
    </div>
    <div class="article">
      <h3>Contact</h3>
      <p>If you have any questions or concerns that, please feel free to <a href="contact.php">contact us</a>.</p>
    </div>
    <div class="article">
      <h3>News</h3>
      <p>Learn <a href="news.php">more</a> about the game recaps and our season goals.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="article">
      <h3>Donate</h3>
      <p>As a club sports team, we receive less than 2% of our annual operating budget from the university.</p>
      <p>Donations of any amount are greatly appreciated. Thank you for your support!</p>
      <p><a href="https://givetocal.berkeley.edu/egiving/index.cfm?Org=Lacrosse%20Club%20Fund&Fund=FU0851000">Click here to donate</a>
      <p>If you are an alumni, <a href="alumni.php">join</a> our alumni network so we can reach out to you for upcoming games and events.</p>
    </div>
  </div>

  <div class="col-lg-4" style="padding:0; margin:0; height:auto">
    <a class="twitter-timeline" data-widget-id="393496479148412928" href="https://twitter.com/CalBearsLax">Tweets by @CalBearsLax</a>
    <script type="text/javascript">
      ! function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
              p = /^http:/.test(d.location) ? 'http' : 'https';
          if (!d.getElementById(id)) {
              js = d.createElement(s);
              js.id = id;
              js.src = p + "://platform.twitter.com/widgets.js";
              fjs.parentNode.insertBefore(js, fjs);
          }
      }(document, "script", "twitter-wjs");
    </script>
  </div>

  <div class="col-lg-4">
    <div class="article">
      <h3>History</h3>
      <p>Check out the 50 year <a href="history.php">history</a> of California Men's Lacrosse.</p>
    </div>
    <div class="article">
      <h3>Roster</h3>
      <p>Check out the new members of the Cal Lacrosse team <a href="roster.php">here</a>.</p>
    </div>
  </div>
</div>

<?php include 'footer.php';?>