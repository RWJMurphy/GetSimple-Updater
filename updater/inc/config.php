<?php
$updater_config = array(
    "actions" => array(
        "status",
        "update_getsimple",
        "update_all_plugins",
        "update_plugin",
        "uninstall_plugin",
        "revert_plugin",
    ),
    "submenu_actions" => array(),
    "default_action" => "status",
    "xml" => array(
        "config" => UPDATER_XMLPATH . "/config.xml",
    ),
    "default_settings" => array(
        "config" => array(),
    ),
);

function updater_config() {
    global $updater_config;
    return $updater_config;
}
