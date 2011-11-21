<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>
        <?php if (!include_slot('htmltitle')): ?>
            The Blues: administrator's panel
        <?php endif; ?>
    </title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="/css/reset.css" />

    <?php include_stylesheets() ?>
    <?php if (sfConfig::get('app_facebook')): ?>
        <meta property="og:image" content="<?php echo public_path('/images/the-blues.jpg', true) ?>" />
    <?php endif; ?>
    <?php include_javascripts() ?>
  </head>
<body>

<?php use_helper('Crosslinks') ?>

<div id="content" lang="la">
    <div class="text">
        <?php echo $sf_content ?>
    </div>
    <div class="push"></div>
</div>

<header>
  <div>
    <h1><a href="<?php echo link_to_frontend('homepage') ?>">Blues<span></span></a></h1>

            <?php if ($sf_user->isAuthenticated()): ?>
                <nav>
                    <ul>
                        <li id="artists"><a href="<?php echo url_for('artist/index') ?>">artists<span></span></a></li>
                        <li id="songs"><a href="<?php echo url_for('song/index') ?>">songs<span></span></a></li>
                        <li id="clips"><a href="<?php echo url_for('clip/index') ?>">clips<span></span></a></li>
                    </ul>
                </nav>

                <nav id="admin">
                    <ul>
                        <li><a href="<?php echo url_for('tools/autoident') ?>">autoidents</a></li>
                        <li><a href="<?php echo url_for('sfGuardAuth/signout') ?>">logout</a></li>
                    </ul>
                </nav>

            <?php endif; ?>


    <?php if (sfConfig::get('sf_environment') === 'dev'): ?>
        <?php include_partial('global/dev') ?>
    <?php endif; ?>
    <?php if (sfConfig::get('sf_environment') === 'staging'): ?>
        <?php include_partial('global/staging') ?>
    <?php endif; ?>
  </div>
</header>


<footer>
    <div>
        &copy;2011 by <a href="http://gajdaw.pl">gajdaw</a> <br/><br />
    </div>
</footer>

</body>
</html>
