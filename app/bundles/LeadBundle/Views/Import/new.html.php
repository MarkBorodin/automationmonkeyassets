<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:Default:content.html.php');

$view['slots']->set('mauticContent', 'leadImport');
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.lead.import.leads', ['%object%' => $view['request']->getParameter('object')]));

if ( $pageType === 'contacts' ) {
    // get the current package account limit
    $package_limit = $monkeyPackages[$currentPackage]['package_limit'];

    // create a badge with the current contacts amount
    $current_accounts_amount_markup = '<div class="account__package__alert account__package__alert--contact alert alert-warning">' . $contactsCount . '/' . $package_limit . ' ' . $view['translator']->trans( 'mautic.lead.leads' ) . '</div>';

    // pass the current contacts amount badge to the page header
    $view['slots']->set( 'currentAccountsAmount', $current_accounts_amount_markup );

    if ( $contactsCount < $package_limit ):
        if (isset($form['file'])):
            echo $view->render('MauticLeadBundle:Import:upload_form.html.php', ['form' => $form]);
        else:
            echo $view->render('MauticLeadBundle:Import:mapping_form.html.php', ['form' => $form]);
        endif;
    else: ?>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="ml-lg mr-lg mt-md pa-lg">
                    <div class="contacts__package__alert alert alert-danger"><?php echo $view['translator']->trans( 'mautic.user.account.package.alert' ); ?></div>
                </div>
            </div>
        </div>
    <?php endif;
} else {
    if (isset($form['file'])):
        echo $view->render('MauticLeadBundle:Import:upload_form.html.php', ['form' => $form]);
    else:
        echo $view->render('MauticLeadBundle:Import:mapping_form.html.php', ['form' => $form]);
    endif;
}
