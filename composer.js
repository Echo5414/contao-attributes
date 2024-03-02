{
  "name": "virtuos/contao-attributes",
  "type": "contao-bundle",
  "description": "A Contao 5 bundle to add data attributes to elements.",
  "license": "MIT",
  "require": {
      "contao/core-bundle": "^5.0"
  },
  "autoload": {
      "psr-4": {
          "Virtuos\\ContaoAttributes\\": "src/"
      }
  },
  "extra": {
      "contao-manager-plugin": "Virtuos\\ContaoAttributes\\ContaoManager\\Plugin"
  }
}
