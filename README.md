# TYPO3 Extension core_upgrader

[![Latest Stable Version](https://img.shields.io/packagist/v/ichhabrecht/core-upgrader.svg)](https://packagist.org/packages/ichhabrecht/core-upgrader)
[![Build Status](https://img.shields.io/travis/IchHabRecht/core_upgrader/master.svg)](https://travis-ci.org/IchHabRecht/core_upgrader)
[![StyleCI](https://styleci.io/repos/263364343/shield?branch=master)](https://styleci.io/repos/263364343)

Run upgrade wizards for multiple TYPO3 versions (to 11.5) at once.

## Features

This extension allows to upgrade the TYPO3 core from v7.6 to v11.5 in one step.

## Installation

Simply install the extension with Composer or download from [TER](https://extensions.typo3.org/extension/core_upgrader/).

`composer require ichhabrecht/core-upgrader`

This extension depends on [TYPO3 Console](https://github.com/TYPO3-Console/TYPO3-Console).
The typo3cms binary will be installed in the specified bin-dir (by default `vendor/bin`).

## Usage

1. Now you can run all update wizards:

    `typo3cms coreupgrader:upgrade`

2. The upgrade command runs necessary TYPO3 upgrade wizards.\
   It is recommended to run TYPO3 Console upgrade command afterwards to execute confirmable and extension wizards.

    `typo3cms upgrade:run all`

## Community

- Thanks to [elementare teilchen GmbH](https://www.elementare-teilchen.de) that sponsors the maintenance of this extension
