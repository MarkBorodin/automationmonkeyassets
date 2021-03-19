<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $view['slots']->get('pageTitle', 'Marketing Monkeys'); ?></title>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" type="image/x-icon" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>" />
        <link rel="apple-touch-icon" href="<?php echo $view['assets']->getUrl('media/images/apple-touch-icon.png') ?>" />
        <?php $view['assets']->outputSystemStylesheets(); ?>
        <?php echo $view->render('MauticCoreBundle:Default:script.html.php'); ?>
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body style="overflow-y: hidden">
        <section class="user-login-screen"
                 id="main"
                 role="main">
            <img class="user-login-screen__logo"
                 src="<?php echo $view['assets']->getUrl( 'media/images/mm-logo.svg' ); ?>"
                 alt="Marketing Monkeys">

            <div class="container user-login-screen__container">
                <h1 class="user-login-screen__title">1<sup class="user-login-screen__title--up">st</sup> Swiss <span class="user-login-screen__title--blue">Marketing Automation</span> Tool</h1>
                <div class="user-login-screen__form">
                    <?php $view['slots']->output( '_content' ); ?>
                    <div id="main-panel-flash-msgs">
                        <?php echo $view->render( 'MauticCoreBundle:Notification:flashes.html.php' ); ?>
                    </div>
                </div>
                <img class="user-login-screen__map"
                     src="<?php echo $view['assets']->getUrl( 'media/images/dotted-map.svg' ); ?>"
                     alt="1st Swiss Marketing Automation Tool">
            </div>
        </section>
        <?php echo $view['security']->getAuthenticationContent(); ?>
    </body>
</html>
