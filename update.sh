#!/bin/sh
CURR_DIR=$(dirname "$(readlink -f "$0")")
CODEIGNITER="$HOME/codeigniter"
MY_APP="$CODEIGNITER/myapp"

[ -e $MY_APP ] && rm -r $MY_APP
cp -r $CURR_DIR/html $MY_APP
cd $CODEIGNITER && docker-compose up -d --build --force-recreate ; cd -
