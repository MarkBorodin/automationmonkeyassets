<?php
/**
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Marketing Monkeys Gmbh
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<!-- start: loading bar -->
<div class="loading-bar">
    <?php echo $view['translator']->trans('mautic.core.loading'); ?>
</div>
<!--/ end: loading bar -->

<!-- start: navbar nocollapse -->
<div class="navbar-nocollapse">
    <!-- start: right nav -->
    <ul class="nav navbar-nav navbar-right mr-10">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="img-wrapper img-rounded" style="width:32px;"><img src="<?php echo $view['gravatar']->getImage($app->getUser()->getEmail()); ?>"></span>
                <span class="text fw-sb ml-xs hidden-xs"><?php echo $app->getUser()->getName(); ?></span>
                <span class="caret ml-xs"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="<?php echo $view['router']->path('mautic_user_logout'); ?>">
                        <i class="fa fa-sign-out fs-14"></i><span><?php echo $view['translator']->trans('mautic.user.auth.logout'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->
