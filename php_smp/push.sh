#!/usr/bin/sh

a=`date +%F`
git add .
git commit -m $a
git push origin master

