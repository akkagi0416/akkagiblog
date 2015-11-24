#!/bin/sh

FILE=$1

lftp <<_EOD
open ftp.akkagi.moo.jp
user moo.jp-akkagi nobu0102000
set ftp:ssl-allow off
cd wp/wp-content/themes/myblog
put $FILE
ls
quit
_EOD
