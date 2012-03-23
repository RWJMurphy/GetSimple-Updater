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
    "plugin_ignorable" => array(
        "__MACOSX",
    ),
    "getsimple_ignore" => array(
        "theme", "backups", "data", "robots.txt", "temp.gsconfig.php", "temp.htaccess",
    ),
    "getsimple_known" => array(
        "admin" => array("is_dir" => true),
        "backups" => array("is_dir" => true),
        "data" => array("is_dir" => true),
        "index.php" => array("is_dir" => false),
        "LICENSE.txt" => array("is_dir" => false),
        "plugins" => array("is_dir" => true),
        "readme.txt" => array("is_dir" => false),
        "robots.txt" => array("is_dir" => false),
        "temp.gsconfig.php" => array("is_dir" => false),
        "temp.htaccess" => array("is_dir" => false),
        "theme" => array("is_dir" => true),
    ), 
);

function updater_config() {
    global $updater_config;
    return $updater_config;
}
