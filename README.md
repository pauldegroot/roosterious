# Roosterious
An API and tools for Saxion schedules (roosters.saxion.nl)

## How to clone this repo
You can clone this repo in the usual. But this project also uses submodules and to clone and initialize them you should run some extra commands. If you run this it should work:
- git clone https://github.com/ruudgreven/roosterious.git
- git submodule init
- git submodule update

More about submodules in http://git-scm.com/book/ch6-6.html

## How to use this
Currently: Don't use it. It will be great sometime, but now it it quite experimental!

## Config
There are three config files to change:
 - config.inc.php
 - www/api/.htaccess
 - www/web/.htaccess

Also make sure the following directories exist:
 - cache/class
 - cache/class_beta
 - cache/lecturer
 - cache/lecturer_beta

First time, just run the initialize_db-script. Then call run_weekly.sh to download
all schedules and read them into the database.
 
