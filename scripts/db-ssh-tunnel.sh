#!/usr/bin/env bash

[ -z "$VIU_USER" ] && echo "Run command: export VIU_USER=<your-viu-username>" && exit

ssh -N -L 3306:dolphin.csci.viu.ca:3306 $VIU_USER@csci.viu.ca

# You can test by entering the following command on your local machine:

# mysql -h marie -u csci311c -p