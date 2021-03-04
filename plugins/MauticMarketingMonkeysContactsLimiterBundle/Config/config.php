<?php
return array(
    'name'        => 'Mautic Marketing Monkeys Contact Limiter',
    'description' => 'Allow to limit leads amount per one user',
    'author'      => 'Viktor Troian',
    'version'     => '1.0.0',
    // custom plugins parameters
    'parameters' => array(
        // packages data
        'monkey_packages' => [
            0 => [
                'package_title'       => 'BABY MONKEY',
                'package_limit'       => 1000,
                'package_description' => 'Intelligente Kampagnen und Automationen für KMU aus allen Branchen die aktiver mit ihren Kunden interagieren möchten.',
                'package_features'    => ['E-Mail Marketing', 'Kampagnen-Management', 'Template Builder', 'Workflow Automation', 'Automation Trigger', 'Leadscoring & Lead Management', 'Basic CRM', 'Dynamic Content', 'Web Forms', 'Landingpage', 'Focus Items', 'Outlook Kalender Sync.', 'Analytics', 'Telefon & E-Mail Support (1.99/Min)']
            ],
            1 => [
                'package_title'       => 'KING KONG',
                'package_limit'       => 1000,
                'package_description' => 'Toolbox mit vielen Standard Automationen und Landingpages für einen schnellen, unkomplizierten Einstieg in die Welt der Marketing Automation.',
                'package_features'    => ['E-Mail Marketing', 'Kampagnen-Management', 'Template Builder', 'Workflow Automation', 'Automation Trigger', 'Leadscoring & Lead Management', 'Basic CRM', 'Dynamic Content', 'Web Forms', 'Landingpage', 'Focus Items', 'Outlook Kalender Sync.', 'Analytics', 'Telefon & E-Mail Support (1.99/Min)', 'CRM Integration', 'SMS-Marketing', '10 Standard Automationen', '10 Landingpage Templates', 'Device Tracker', 'Personalisierte URL\'s', 'API-Integration', 'IP-TO Company Auflösung + 250/Monat']
            ],
            2 => [
                'package_title'       => 'GODZILLA',
                'package_limit'       => 1000,
                'package_description' => 'Performantes Omni-Channel Tool für kleine Unternehmen mit grossen Ambitionen und für mittelgrosse bis grosse Unternehmen, die auf allen Kanälen konsistent, personalisiert und automatisiert mit ihren Kunden interagieren wollen.',
                'package_features'    => ['E-Mail Marketing', 'Kampagnen-Management', 'Template Builder', 'Workflow Automation', 'Automation Trigger', 'Leadscoring & Lead Management', 'Basic CRM', 'Dynamic Content', 'Web Forms', 'Landingpage', 'Focus Items', 'Outlook Kalender Sync.', 'Analytics', 'Telefon & E-Mail Support (1.99/Min)', 'CRM Integration', 'SMS-Marketing', '10 Standard Automationen', '10 Landingpage Templates', 'Device Tracker', 'Personalisierte URL\'s', 'API-Integration', 'IP-TO Company Auflösung + 250/Monat', 'What\'s App Marketing', 'Social Media Integration', 'Facebook custom audience', '100 Standard Automationen', 'Neukundenlead Abo + CHF 2.20/Lead', 'Premium CRM']
            ]
        ],
        // change this parameter to true to see hidden settings
        'extended_settings' => false,
        'current_package'   => 0 // available values: 0 - Baby Monkey package; 1 - King Kong package; 2 - Godzilla package
    )
);
