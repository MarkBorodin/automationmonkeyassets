<?php

/*
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

// load basic Mautic security
include_once 'security.php';

// disable upgrade notification
$container->setParameter( 'mautic.security.disableUpdates', true );
