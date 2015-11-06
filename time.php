<?php include('widgets/header.php');  ?>
    <header class="main-page-header clearfix">
        <h1>Hi Aiko!</h1>
        Here's the stuf we talked about :)
        
    </header>
    <section>
        <h2>Your Age:</h2>
        <?php
            $currTime = time();
            $yourBirth = strtotime('June 15th 2006 7:29 am');
            $bd = new DateTime('June 15th 2006 7:29 am');
            $diff = $bd->diff(new DateTime());
            $yourAge = $currTime - $yourBirth;
            $inMinutes = $yourAge/60;
            $inHours = $inMinutes/60;
            $inDays = $inHours/24;
            $inWeeks = $inDays/7;
            $inMonths = $diff->format('%m') + 12 * $diff->format('%y');
            $inYears = $diff->format('%y');
            $inDecades = $inMinutes/5256000;
        ?>
        
        <ul>
            <li>In Decades: <?php print round($inDecades, 2); ?></li>
            <li>In Years: <?php print $inYears; ?></li>
            <li>In Months: <?php print $inMonths; ?></li>
            <li>In Weeks: <?php print number_format($inWeeks); ?></li>
            <li>In Days: <?php print number_format($inDays); ?></li>
            <li>In Hours: <?php print number_format($inHours); ?></li>
            <li>In Minutes: <?php print number_format($inMinutes); ?></li>
            <li>In Seconds: <?php print number_format($yourAge); ?></li>
        </ul>
    </section>
    <section>

    </section>

<?php include('widgets/footer.php'); ?>