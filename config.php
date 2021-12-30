<?php
/**
 * @codingStandardsIgnoreFile
 */

$conf['title'] = 'The Cocktail Store';
$conf['version'] = '1.0';
$conf['base_url'] = 'https://api.thecocktailstore.osseed.com/v1';

// These are the color classes used for API type badge.
// Refer https://getbootstrap.com/docs/5.0/components/badge/ to change classes.
// You can remove this if you want & bg-secondary will be used by default.
$conf['color_codes'] = [
  'GET' => 'bg-primary',
  'POST' => 'bg-success',
  'PUT' => 'bg-warning',
  'PATCH' => 'bg-warning',
  'DELETE' => 'bg-danger',
];
