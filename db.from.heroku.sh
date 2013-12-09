sudo heroku pgbackups:capture --app leichtergesundleben --expire
curl -o latest.dump `heroku pgbackups:url --app leichtergesundleben`
echo "Date of latest.dump:"
 ls --time-style full-iso -l latest.dump |awk '{print $6}'
echo "Now run: "
echo "pg_restore --verbose --clean --no-acl --no-owner -h localhost -U wordpress -d wordpress latest.dump"
