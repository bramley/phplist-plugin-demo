# Demo Plugin #

## Description ##

A demonstration of the capabilities of a plugin. It provides a few useful pages but you can use it as the basis for your own plugin.

### Pages ###

The plugin adds these pages to the phplist menus

**System menu**

Export the event log - exports the event log as a CSV file. By default it exports the most recent 5000 events. To export all events you can
add a limit parameter to the URL with a very large number, e.g. `http://mysite.com/lists/admin/?page=exportlog&pi=Demo&tk=xxxxx&limit=100000`

## Installation ##

### Dependencies ###

Requires php version 5.3 or later.

### Install through phplist ###
Install on the Plugins page (menu Config > Manage plugins) using the package URL `https://github.com/bramley/phplist-plugin-demo/archive/master.zip`.

In phplist releases 3.0.5 and earlier there is a bug that can cause a plugin to be incompletely installed on some configurations (<https://mantis.phplist.com/view.php?id=16865>). 
Check that these files are in the plugin directory. If not then you will need to install manually. The bug has been fixed in release 3.0.6.

* the file Demo.php
* the directory Demo

### Install manually ###
Download the plugin zip file from <https://github.com/bramley/phplist-plugin-demo/archive/master.zip>

Expand the zip file, then copy the contents of the plugins directory to your phplist plugins directory.
This should contain

* the file Demo.php
* the directory Demo

## Version history ##

    version         Description
    1.0.0+20160412  Initial version
