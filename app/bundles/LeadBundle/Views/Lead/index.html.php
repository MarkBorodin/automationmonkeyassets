<?php

/**
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @var \Mautic\LeadBundle\Controller\LeadController $monkeyPackages
 * @var \Mautic\LeadBundle\Controller\LeadController $contactsCount
 * @var \Mautic\LeadBundle\Controller\LeadController $currentPackage
 */
$view->extend('MauticCoreBundle:Default:content.html.php');

// get the current package account limit
$package_limit = $monkeyPackages[$currentPackage]['package_limit'];

// create a badge with the current contacts amount
$current_accounts_amount_markup = '<div class="account__package__alert account__package__alert--contact alert alert-warning">' . $contactsCount . '/' . $package_limit . ' ' . $view['translator']->trans( 'mautic.lead.leads' ) . '</div>';

// create an alert notifying when the contact limit has been reached
$contacts_reached_alert_markup = '<div class="contacts__package__alert alert alert-danger">' . $view['translator']->trans( 'mautic.user.account.package.alert' ) . '</div>';

$view['slots']->set('mauticContent', 'lead');
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.lead.leads'));
// pass the current contacts amount badge to the page header
$view['slots']->set( 'currentAccountsAmount', $current_accounts_amount_markup );

$pageButtons = [];
if ($permissions['lead:leads:create']) {
    $pageButtons[] = [
        'attr' => [
            'class'       => 'btn btn-default btn-nospin quickadd',
            'data-toggle' => 'ajaxmodal',
            'data-target' => '#MauticSharedModal',
            'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'quickAdd']),
            'data-header' => $view['translator']->trans('mautic.lead.lead.menu.quickadd'),
        ],
        'iconClass' => 'fa fa-bolt',
        'btnText'   => 'mautic.lead.lead.menu.quickadd',
        'primary'   => true,
    ];

    if ($permissions['lead:imports:create']) {
        $pageButtons[] = [
            'attr' => [
                'href' => $view['router']->path('mautic_import_action', ['object' => 'contacts', 'objectAction' => 'new']),
            ],
            'iconClass' => 'fa fa-upload',
            'btnText'   => 'mautic.lead.lead.import',
        ];
    }

    if ($permissions['lead:imports:view']) {
        $pageButtons[] = [
            'attr' => [
                'href' => $view['router']->path('mautic_import_index', ['object' => 'contacts']),
            ],
            'iconClass' => 'fa fa-history',
            'btnText'   => 'mautic.lead.lead.import.index',
        ];
    }
}

// Only show toggle buttons for accessibility
$extraHtml = <<<button
<div class="btn-group ml-5 sr-only ">
    <span data-toggle="tooltip" title="{$view['translator']->trans(
    'mautic.lead.tooltip.list'
)}" data-placement="left"><a id="table-view" href="{$view['router']->path('mautic_contact_index', ['page' => $page, 'view' => 'list'])}" data-toggle="ajax" class="btn btn-default"><i class="fa fa-fw fa-table"></i></span></a>
    <span data-toggle="tooltip" title="{$view['translator']->trans(
    'mautic.lead.tooltip.grid'
)}" data-placement="left"><a id="card-view" href="{$view['router']->path('mautic_contact_index', ['page' => $page, 'view' => 'grid'])}" data-toggle="ajax" class="btn btn-default"><i class="fa fa-fw fa-th-large"></i></span></a>
</div>
button;

$view['slots']->set(
    'actions',
    $view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => $contactsCount < $package_limit ? $permissions['lead:leads:create'] : false,
            ],
            'routeBase'     => 'contact',
            'langVar'       => 'lead.lead',
            'customButtons' => $contactsCount < $package_limit ? $pageButtons : [],
            'extraHtml'     => $contactsCount < $package_limit ? $extraHtml : $contacts_reached_alert_markup,
        ]
    )
);

$toolbarButtons = [
    [
        'attr' => [
            'class'       => 'hidden-xs btn btn-default btn-sm btn-nospin',
            'href'        => 'javascript: void(0)',
            'onclick'     => 'Mautic.toggleLiveLeadListUpdate();',
            'id'          => 'liveModeButton',
            'data-toggle' => false,
            'data-max-id' => $maxLeadId,
        ],
        'tooltip'   => $view['translator']->trans('mautic.lead.lead.live_update'),
        'iconClass' => 'fa fa-bolt',
    ],
];

if ('list' == $indexMode) {
    $toolbarButtons[] = [
        'attr' => [
            'class'          => 'hidden-xs btn btn-default btn-sm btn-nospin'.(($anonymousShowing) ? ' btn-primary' : ''),
            'href'           => 'javascript: void(0)',
            'onclick'        => 'Mautic.toggleAnonymousLeads();',
            'id'             => 'anonymousLeadButton',
            'data-anonymous' => $view['translator']->trans('mautic.lead.lead.searchcommand.isanonymous'),
        ],
        'tooltip'   => $view['translator']->trans('mautic.lead.lead.anonymous_leads'),
        'iconClass' => 'fa fa-user-secret',
    ];
}
?>

<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <?php echo $view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue'   => $searchValue,
            'searchHelp'    => 'mautic.lead.lead.help.searchcommands',
            'action'        => $currentRoute,
            'customButtons' => $contactsCount < $package_limit ? $toolbarButtons : [],
        ]
    ); ?>
    <div class="page-list">
        <?php $view['slots']->output('_content'); ?>
    </div>
</div>
