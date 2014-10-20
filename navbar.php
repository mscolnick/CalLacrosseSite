<nav class="navbar navbar-default">
    <ul class="nav nav-justified">
        <li <?php echo ($title == 'Home') ? 'class="active"' : '';?>>
            <a href="index.php">Home</a>
        </li>

        <li <?php echo ($title == 'News') ? 'class="active"' : '';?>>
            <a href="news.php">News</a>
        </li>

        <li <?php echo ($title == 'Schedule') ? 'class="active"' : '';?>>
            <a href="schedule.php">Schedule</a>
        </li>

        <li class="dropdown" <?php echo ($title == 'Players' || $title == 'Coaches') ? 'class="active"' : '';?>>
            <a class="dropdown-toggle" data-toggle="dropdown" href="">Roster</a>

            <ul class="dropdown-menu">
                <li class="drop-li" <?php echo ($title == 'Players') ? 'class="active"' : '';?>>
                    <a class="drop-a" href="players.php">Players</a>
                </li>

                <li class="drop-li" <?php echo ($title == 'Coaches') ? 'class="active"' : '';?>>
                    <a class="drop-a" href="coaches.php">Coaches</a>
                </li>
            </ul>
        </li>

        <li <?php echo ($title == 'Recruiting') ? 'class="active"' : '';?>>
            <a href="recruiting.php">Recruiting</a>
        </li>

        <li <?php echo ($title == 'Alumni') ? 'class="active"' : '';?>>
            <a href="alumni.php">Alumni</a>
        </li>

        <li <?php echo ($title == 'Donate') ? 'class="active"' : '';?>>
            <a href="donate.php">Donate</a>
        </li>

        <li <?php echo ($title == 'Contact') ? 'class="active"' : '';?>>
            <a href="contact.php">Contact</a>
        </li>

        <li <?php echo ($title == 'History') ? 'class="active"' : '';?>>
            <a href="history.php">History</a>
        </li>

        <li <?php echo ($title == 'Gear') ? 'class="active"' : '';?>>
            <a href="http://www.calbearsshop.com/categories-dtg-lacrosse.html" target="_blank">Gear</a>
        </li>

        <li <?php echo ($title == 'Camps') ? 'class="active"' : '';?>>
            <a href="camps.php">Camps</a>
        </li>

    </ul>
</nav>
<!-- navbar -->