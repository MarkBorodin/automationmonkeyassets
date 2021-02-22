<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!$app->getRequest()->isXmlHttpRequest()):
    //load base template
    $view->extend('MauticUserBundle:Security:base.html.php');
    $view['slots']->set('header', $view['translator']->trans('mautic.user.auth.header'));
else:
    $view->extend('MauticUserBundle:Security:ajax.html.php');
endif;
?>

<form class="form-group login-form"
      name="login"
      data-toggle="ajax"
      role="form"
      action="<?php echo $view['router']->path('mautic_user_logincheck'); ?>"
      method="post">
    <div class="input-group mb-md user-login-screen__input-group user-login-screen__text">
        <label for="username" class="sr-only"><?php echo $view['translator']->trans('mautic.user.auth.form.loginusername'); ?></label>
        <input class="user-login-screen__input user-login-screen__text"
               id="username"
               type="text"
               name="_username"
               value="<?php echo $view->escape($last_username); ?>"
               required autofocus
               placeholder="<?php echo $view['translator']->trans('mautic.user.auth.form.loginusername'); ?>" />
    </div>

    <div class="input-group mb-md user-login-screen__input-group user-login-screen__text">
        <label for="password" class="sr-only"><?php echo $view['translator']->trans('mautic.core.password'); ?>:</label>
        <input class="user-login-screen__input user-login-screen__text"
               id="password"
               type="password"
               name="_password"
               required
               placeholder="<?php echo $view['translator']->trans('mautic.core.password'); ?>" />
    </div>

    <div class="mt-sm mb-md text-right">
        <a class="user-login-screen__forgot user-login-screen__text"
           href="<?php echo $view['router']->path('mautic_user_passwordreset'); ?>">
            <?php echo $view['translator']->trans('mautic.user.user.passwordreset.link'); ?>
        </a>
    </div>

    <button class="user-login-screen__submit user-login-screen__text"
                     type="submit">
        <?php echo $view['translator']->trans('mautic.user.auth.form.loginbtn'); ?>
        <span class="user-login-screen__submit__arrow"></span>
    </button>

    <div class="checkbox-inline custom-primary user-login-screen__keep user-login-screen__text">
        <label for="remember_me">
            <input type="checkbox" id="remember_me" name="_remember_me" />
            <span></span>
            <?php echo $view['translator']->trans('mautic.user.auth.form.rememberme'); ?>
        </label>
    </div>

    <input type="hidden" name="_csrf_token" value="<?php echo $view->escape($view['form']->csrfToken('authenticate')); ?>" />
</form>

<?php if (!empty($integrations)): ?>
    <ul class="list-group">
        <?php foreach ($integrations as $sso): ?>
            <a href="<?php echo $view['router']->path('mautic_sso_login', ['integration' => $sso->getName()]); ?>" class="list-group-item">
                <img class="pull-left mr-xs" style="height: 16px;" src="<?php echo $view['assets']->getUrl($sso->getIcon()); ?>" >
                <p class="list-group-item-text"><?php echo $view['translator']->trans('mautic.integration.sso.'.$sso->getName()); ?></p>
            </a>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
