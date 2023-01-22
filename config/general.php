<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isDev = App::env("CRAFT_ENVIRONMENT") === "dev";
$isProd = App::env("CRAFT_ENVIRONMENT") === "production";

return [
  // Default Week Start Day (0 = Sunday, 1 = Monday...)
  "defaultWeekStartDay" => 1,

  // Whether generated URLs should omit "index.php"
  "omitScriptNameInUrls" => true,

  // The URI segment that tells Craft to load the control panel
  "cpTrigger" => App::env("CP_TRIGGER") ?: "admin",

  // The secure key Craft will use for hashing and encrypting data
  "securityKey" => App::env("CRAFT_SECURITY_KEY"),

  // Whether Dev Mode should be enabled (see https://craftcms.com/guides/what-dev-mode-does)
  "devMode" => $isDev,

  // Whether administrative changes should be allowed
  "allowAdminChanges" => false,

  // Whether crawlers should be allowed to index pages and following links
  "disallowRobots" => !$isProd,

  // Whether the GraphQL API should be enabled
  "enableGql" => true,

  // Whether the system should run in Headless Mode, which optimizes the system and control panel for headless CMS implementations
  "headlessMode" => true,

  // The string to use to separate words when uploading Assets. If set to false, spaces will be left alone
  "filenameWordSeparator" => false,

  "maxUploadFileSize" => "256M",

  // https://craftcms.com/docs/4.x/config/#aliases
  "aliases" => [
    "@web" => App::env("PRIMARY_SITE_URL"),
  ],
];
