<?php
$title = 'Home';
include 'header.php';?>

<div class="row">
    <div class="col-lg-8">
        <div class="home-carousel">
            <div class="carousel slide" id="carousel-example-generic">
                <!-- Indicators -->

                <ol class="carousel-indicators">

                    <!-- <li data-slide-to="2" data-target="#carousel-example-generic"></li> -->

                    <!-- <li data-slide-to="3" data-target="#carousel-example-generic"></li> -->

                </ol>
                <!-- Wrapper for slides -->

                <div class="carousel-inner">

                        <div class="item active">
                        <img alt="camp" src="images/carousel/CalLaxCampsCarousel.jpg">

                        <div class="carousel-caption">
                            <p>Men's Cal Lacrosse Camp....Boys aged 10-18....<a href=" http://www.ussportscamps.com/lacrosse/nike/california-boys-lacrosse-camp/">Register NOW!</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <img alt="berkeley" src="images/carousel/berkeley.JPG">

                        <div class="carousel-caption">
                            <h4>2015 Season Announced!</h4>

                            <p>The University of California-Berkeley men's lacrosse program is pleased to announce the Golden Bears' 2015 captains, coaching staff and schedule. <a href="http://us5.campaign-archive2.com/?u=17683472b8f05d668da845f7a&id=34fae4405a" target="_blank">Read More!</a>
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img alt="memorialStadium" src="images/carousel/headCoachCarousel.JPG">

                        <div class="carousel-caption">
                            <h4><a href="http://us5.campaign-archive1.com/?u=17683472b8f05d668da845f7a&id=a99cdbd717" target="_blank">Ned Webster is the new Head Coach at Cal</a>
                            </h4>

                            <p>"I am honored and excited to be a part of UC Berkeley and help build on fifty years of Cal Lacrosse tradition," says Coach Webster, pictured above with his wife Megan.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img alt="" src="images/carousel/50thlogo.jpg">

                        <div class="carousel-caption">
                            <p>Thanks to all of our supporters who made the Bear's 50th anniversary season such a success. Check out this awesome highlight video of Cal's 15-12 win over Stanford. <a href="http://lax.tv/link/12310/" target="_blank">click here</a></p>
                        </div>
                    </div>



                </div>
                <!-- Controls -->
                <a class="left carousel-control" data-slide="prev" href="#carousel-example-generic"></a>
                <a class="right carousel-control" data-slide="next" href="#carousel-example-generic"></a>
            </div>
        </div>
        <!-- home-carousel -->
    </div>
    <!-- col-lg-8 -->

    <div class="col-lg-4">
        <div class="article">
            <h3>50th Anniversary</h3>
            <iframe frameborder="0" src="//player.vimeo.com/video/93419183" style="padding:3%" width="99%"></iframe>
        </div>

        <div class="article">
            <h3>Recruitment</h3>

            <p>If you are coming to Cal, want to come to Cal, or just interested in playing lacrosse, fill out the <a href="recruiting.html#recruiter-form">recruitment form</a>. If you have any questions, check out our <a href="recruiting.html">FAQs</a> page.</p>
        </div>

<!--         <div class="article">
            <h3>Game Recap</h3>
         <p> <b> 9-5 MCLA, 5-1 WCLL</b><br></p>
        </div> -->

    </div>
    <!--    col-lg-4 -->
</div>
<!-- row -->

<div class="row">
    <div class="col-lg-4">

<!--         <div class="article">
            <h3>Upcoming Games</h3>
        <div class="upcoming-games">

            <script type="text/javascript" src=" http://api.mcla.us/simple/?api_key=3b6c078115a8955450e071d42cb32061&version=1.2&method=upcoming_games_widget&team=california_berkeley&num=3"></script>
        </div>
        </div> -->


        <div class="article">
            <h3>Donate</h3>

            <p>As a club sports team, we receive less than 2% of our annual operating budget from the university.
                <br>Donations of any amount are greatly appreciated. Thank you for your support!
                <br>
                <a href="https://givetocal.berkeley.edu/egiving/index.cfm?Org=Lacrosse%20Club%20Fund&Fund=FU0851000">Click here to
            donate</a>
                <br>If you are an alumni, <a href="alumni.html">join</a> our alumni network so we can reach out to you for upcoming games and events.</p>
        </div>

        <div class="article">
            <h3>Roster</h3>

            <p>Check out the new members of the Cal Lacrosse team <a href="roster.html">here</a>.
                <br>
            </p>
        </div>
    </div>

    <div class="col-lg-4" style="padding:0; margin:0; height:auto">
        <a class="twitter-timeline" data-widget-id="393496479148412928" href="https://twitter.com/CalBearsLax">Tweets by
        @CalBearsLax</a>
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
    <!-- col-lg-4 -->

    <div class="col-lg-4">
        <div class="article">
            <h3>Contact</h3>

            <p>If you have any questions or concerns that, please feel free to <a href="contact.html">contact us</a>.</p>
        </div>

        <div class="article">
            <h3>News</h3>

            <p>Learn <a href="news.html">more</a> about the game recaps and our season goals</p>
        </div>

        <div class="article">
            <h3>History</h3>

            <p>Check out the 50 year <a href="history.html">history</a> of California Men's Lacrosse</p>
        </div>
    </div>
</div>
<!-- row -->

<?php include 'footer.php';?>