<?php
declare(strict_types=1);

$cfg['blowfish_secret'] = 'processmaker_phpmyadmin';

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = getenv('PMA_USER');
$cfg['Servers'][$i]['password'] = getenv('PMA_PASSWORD');
$cfg['Servers'][$i]['host'] = getenv('PMA_HOST');
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
