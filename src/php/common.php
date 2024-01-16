<?php

use KeepersTeam\Webtlo\Helper;
use KeepersTeam\Webtlo\Settings;
use KeepersTeam\Webtlo\TIniFileEx;

include_once dirname(__FILE__) . '/../vendor/autoload.php';

include_once dirname(__FILE__) . '/classes/date.php';
include_once dirname(__FILE__) . '/classes/log.php';
include_once dirname(__FILE__) . '/classes/db.php';
include_once dirname(__FILE__) . '/classes/proxy.php';
include_once dirname(__FILE__) . '/classes/Timers.php';

Db::create();

function get_settings($filename = ''): array
{
    // TODO container auto-wire.
    $ini      = new TIniFileEx($filename);
    $settings = new Settings($ini);

    return $settings->populate();
}

function convert_bytes($size): string
{
    return Helper::convertBytes($size);
}

function convert_seconds($seconds, $leadZeros = false): string
{
    return Helper::convertSeconds((int)$seconds, $leadZeros);
}

function rmdir_recursive($path): bool
{
    return Helper::removeDirRecursive($path);
}

function mkdir_recursive($path): bool
{
    return Helper::makeDirRecursive($path);
}