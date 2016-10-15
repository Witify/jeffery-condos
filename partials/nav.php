<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button id="mobile-menu" type="button" class="navbar-toggle collapsed" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand anchor_link" href="#home">
           
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#zone" class="anchor_link"><?php $trans->get('pages.zone') ?></a></li>
                <li><a href="#plans" class="anchor_link"><?php $trans->get('pages.plans') ?></a></li>
                <li><a href="#contact" class="anchor_link"><?php $trans->get('pages.contact') ?></a></li>
                <?php if($language == 'en') : ?>
                    <li><a href="/fr/<?php echo strtolower($pageTitle) ?>">FR</a></li>
                <?php else : ?>
                    <li><a href="/en/<?php echo strtolower($pageTitle) ?>">EN</a></li>
                <?php endif; ?>
                <li class="left"><span><?php $trans->get('plan_visit') ?></span> <strong>514 205-5559</strong></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>