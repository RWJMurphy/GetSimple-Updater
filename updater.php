<?php
$thisfile=basename(__FILE__, ".php");
i18n_merge($thisfile) || i18n_merge($thisfile, 'en_US');
require_once $thisfile . "/inc/include.php";
$updater_config = updater_config();

register_plugin(
    UPDATER_SHORTNAME,
    UPDATER_NAME,
    UPDATER_VERSION,
    UPDATER_AUTHOR,
    UPDATER_URL,
    UPDATER_DESCRIPTION,
    UPDATER_TABNAME,
    UPDATER_ACTION_MAIN
);

add_action(UPDATER_TABNAME.'-sidebar', 'createSideMenu', array(UPDATER_SHORTNAME, UPDATER_NAME, UPDATER_ACTION_MAIN));

register_script('updater_main', UPDATER_JSURL . 'main.js', UPDATER_VERSION, False);
register_style('updater_main', UPDATER_CSSURL . 'main.css', UPDATER_VERSION, 'screen');

queue_script('updater_main', GSBACK);
queue_style('updater_main', GSBACK);

function updater_action_admin() {
    $updater_config = updater_config();
    updater_render_header();
    $selected_action = updater_current_action();
    updater_render_page($selected_action);
}
