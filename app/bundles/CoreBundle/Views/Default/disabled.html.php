<?php
/**
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Marketing Monkeys Gmbh
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @var Mautic\CoreBundle\Controller\CommonController $disabledText
 */
?>
<!DOCTYPE html>
<html lang="<?php echo substr( $app->getUser()->getLocale(), 0, 2 ); ?>">
    <?php echo $view->render( 'MauticCoreBundle:Default:head.html.php' ); ?>
    <body>
        <div id="app-disabled">
            <div class="well well col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="mautibot-image col-xs-3 text-center">
                        <img class="img img-responsive"
                             style="max-height: 125px; margin-left: auto; margin-right: auto;"
                             src="<?php echo $view['assets']->getUrl( 'media/images/monkey-head.png' ); ?>" />
                    </div>
                    <div class="col-xs-9">
                        <?php echo $disabledText; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- start: app-footer(need to put on top of #app-content)-->
        <footer id="app-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 text-muted">
                        &copy; <?php echo date( 'Y' );?> <a href="https://www.marketingmonkeys.ch/" target="_blank" rel="noreferrer nofollow">Marketing Monkeys</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ end: app-footer -->
    </body>
</html>
