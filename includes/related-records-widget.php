<?php $rr = new TracesThroughTime\RelatedRecord('Name Lincoln, L V Date of Birth: 31 May 1898', 95); ?>

<div class="col starts-at-full ends-at-one-third clr holding-box">
    <h2><span><span>Related records</span></span></h2>

    <div class="breather">
        <p><?php $rr->printIntroText(); ?></p>

        <p><a href="#"><?php $rr->printLinkText(); ?></a> <?php $rr->printPercentage(); ?></p>

        <p><?php $rr->printDisclaimer(); ?></p>
    </div>
</div>