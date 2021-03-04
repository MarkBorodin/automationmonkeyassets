<?php
/**
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Viktor Troian <troyanvic@gmail.com> | Marketing Monkeys team
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @var \Mautic\UserBundle\Controller\ProfileController $monkeyPackages
 * @var \Mautic\UserBundle\Controller\ProfileController $currentPackage
 */

$package_baby_monkey = $monkeyPackages[$currentPackage]; ?>

<div class="tab-pane fade bdr-rds-0 bdr-w-0" id="packages">
    <div class="pa-md bg-auto bg-light-xs bdr-b">
        <h4 class="fw-sb"><?php echo $view['translator']->trans('mautic.user.account.header.packages'); ?></h4>
    </div>
    <div class="pa-md">
        <div class="col-md-6">
            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.current' ); ?></span>
                    <div class="account__package__alert alert alert-warning"><?php echo $package_baby_monkey['package_title']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.limit' ); ?></span>
                    <div class="account__package__alert alert alert-warning"><?php echo $package_baby_monkey['package_limit'] . ' ' . $view['translator']->trans( 'mautic.lead.leads' ); ?></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.amount' ); ?></span>
                    <div class="account__package__alert alert alert-warning"><?php echo $contactsCount . '/' . $package_baby_monkey['package_limit'] . ' ' . $view['translator']->trans( 'mautic.lead.leads' ); ?></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.upgrade' ); ?></span>
                    <div class="account__package__button-container">
                        <a class="btn btn-success"
                           href="https://www.marketingmonkeys.ch/meet-the-monkeys"
                           target="_blank">
                            <?php echo $view['translator']->trans( 'mautic.user.account.package.button.upgrade' ); ?>
                        </a>
                    </div>
                    <a class="account__package__note"
                       href="https://www.marketingmonkeys.ch/meet-the-monkeys"
                       target="_blank">
                        <?php echo $view['translator']->trans( 'mautic.user.account.package.note' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.description' ); ?></span>
                    <div class="account__package__description well"><?php echo $package_baby_monkey['package_description']; ?></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12">
                    <span class="account__package__label"><?php echo $view['translator']->trans( 'mautic.user.account.package.label.features' ); ?></span>
                    <div class="account__package__description well">
                        <ul class="account__package__features-list">
                            <?php foreach ( $package_baby_monkey['package_features'] as $feature ): ?>
                                <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
