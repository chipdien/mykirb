<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-'.md5('chiase.link'));

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('panel.install', false);
c::set('ka.image.shrink.maxDimension', 1400);

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
  array(
    'code'    => 'vi',
    'name'    => 'Tiếng Việt',
    'default' => true,
    'locale'  => 'vi_VN',
    'url'     => '/',
  ),
));


c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'panel'   => true
  ),
  array(
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true
  ),
  array(
    'id'      => 'client',
    'name'    => 'Client',
    'panel'   => false
  ),
  array(
    'id'      => 'clientvip',
    'name'    => 'Client VIP',
    'default' => true,
    'panel'   => false
  )
));