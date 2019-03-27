<?php
require_once 'conf.php';

// main page by html templates
$main = new Template('app.main');
$meta = new Template('app.meta');
$style = new Template('app.style');
$js = new Template('app.js');

// add meta, style and js templates content to main template
$main->set('meta', $meta->parse());
$main->set('style', $style->parse());
$main->set('js', $js->parse());

// set up main page real values
$main->set('lang', $http->get('lang_id'));
$main->set('title', 'Söökla menüü');


$mainContent = new Template('menu.main_content');



// page content from controller
// add action control
require_once 'controller.php';

require_once 'nav.php'; // nav element

$mainContent->set('footer', 'Page Footer');
$main->set('content', $mainContent->parse());

// print out main page full view
echo $main->parse();

$db->showHistory();
