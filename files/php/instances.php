<?php
$instance['Badlands_V2'] = array_merge($instance['Badlands_V2'], array(
    "loadder" => array(
        "minecraft_version" => "1.8.9",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Hypixel",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));

$instance['Badlands_V3'] = array_merge($instance['Badlands_V3'], array(
    "loadder" => array(
        "minecraft_version" => "1.16.5",
        "loadder_type" => "forge",
        "loadder_version" => "1.16.5-36.2.35"
    ),
    "verify" => false,
    "ignored" => array(),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "PokeMoonX",
        "ip" => "178.32.106.234",
        "port" => 25599
    )
));
?>
