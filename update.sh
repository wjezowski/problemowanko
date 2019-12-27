#!/bin/sh
CURR_DIR=$(dirname "$(readlink -f "$0")")
CODEIGNITER="$HOME/codeigniter"
MY_APP="$CODEIGNITER/myapp"

echo $MY_APP ytyyt myapp
echo $CODEIGNITER ytyyt codeigniter
echo $CURR_DIR dsfdsf curr_dir

[ -e $MY_APP ] && rm -r $MY_APP
cp -r $CURR_DIR/html $MY_APP
cd $CODEIGNITER && docker-compose up --build --force-recreate ; cd -
