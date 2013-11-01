#!/bin/bash
sudo chown -R startup ../leichtergesundleben 
rnd=$RANDOM$RANDOM
dumpfile=`date '+%Y-%m-%d'`.dump
PGPASSWORD=wordpress pg_dump -Fc --no-acl --no-owner -h localhost -U wordpress wordpress > $dumpfile
PGPASSWORD=wordpress pg_dump -Fc --no-acl --no-owner -h localhost -U wordpress wordpress > $dumpfile
s3cmd put --acl-public $dumpfile s3://db_export_s3cmd_heroku/$rnd/
heroku pgbackups:restore HEROKU_POSTGRESQL_BLUE_URL 'http://s3.amazonaws.com/db_export_s3cmd_heroku/$rnd/$dumpfile'
rm $dumpfile
sudo chown -R www-data ../leichtergesundleben
