sudo heroku pgbackups:capture -a leichtergesundleben --expire
curl -o latest.dump `heroku pgbackups:url`
echo "Now run: "
echo "pg_restore --verbose --clean --no-acl --no-owner -h localhost -U wordpress -d wordpress latest.dump"
