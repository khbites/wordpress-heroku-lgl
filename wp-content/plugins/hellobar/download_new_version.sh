
curl -q http://s3.amazonaws.com/scripts.hellobar.com/551b15acdf0e3fe87a02c9eb737202e9ff67bce3.js |zcat | \
sed  "s|Thank you for signing up|Danke f\&uuml;r's abonnieren|g" | \
sed  "s|Thank you|Danke|g" | \
sed  "s|Your Name|Dein Name|g" | \
sed  "s|Your Email|Deine E-mail|g" > hellobar.js


