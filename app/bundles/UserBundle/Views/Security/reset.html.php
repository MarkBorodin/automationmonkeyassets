<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!$app->getRequest()->isXmlHttpRequest()) {
    $view->extend('MauticUserBundle:Security:base.html.php');
} else {
    $view->extend('MauticUserBundle:Security:ajax.html.php');
}
?>

<div class="alert alert-warning"><?php echo $view['translator']->trans('mautic.user.user.passwordreset.info'); ?></div>

<?php
echo $view['form']->start($form);
echo $view['form']->row($form['identifier']); ?>
<div class="user-login-screen__buttons">
    <a class="user-login-screen__back user-login-screen__text"
       href="<?php echo $view['router']->path('login'); ?>">
        <span class="user-login-screen__submit__arrow user-login-screen__submit__arrow--reverse"></span>
        <?php echo $view['translator']->trans('mautic.user.user.passwordreset.back'); ?>
    </a>
    <div class="user-login-screen__submit__wrapper">
<?php echo $view['form']->widget($form['submit']) . '<span class="user-login-screen__submit__arrow"></span></div></div>';
echo $view['form']->end($form);
?>
