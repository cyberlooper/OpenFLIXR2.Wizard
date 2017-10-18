<?php
if (!isset($_POST['password'])) {
  die();
}
echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "    <meta name=\"description\" content=\"OpenFLIXR Setup\">\n";
echo "    <meta name=\"author\" content=\"OpenFLIXR\">\n";
echo "    <title>OpenFLIXR Setup</title>\n";
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <link href=\"css/stylish-portfolio.css\" rel=\"stylesheet\">\n";
echo "    <link href=\"css/gsdk-base.css\" rel=\"stylesheet\" />\n";
echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">\n";
echo "<script type=\"text/javascript\">\n";
echo "    window.onbeforeunload = function() {\n";
echo "        return \"Do not refresh this page! It will leave OpenFLIXR in an unusable state!\";\n";
echo "    }\n";
echo "</script>\n";
echo "\n";
echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->\n";
echo "    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\n";
echo "    <!--[if lt IE 9]>\n";
echo "        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>\n";
echo "        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>\n";
echo "    <![endif]-->\n";
echo "\n";
echo "</head>\n";
echo "\n";
echo "<body>\n";
echo "    <div class=\"image-container set-full-height\" style=\"background-color: #4c4c4c;;\">\n";
echo "        <div class=\"container\">\n";
echo "            <div class=\"row\">\n";
echo "                <div class=\"col-sm-10 col-sm-offset-1\">\n";
echo "                    <div class=\"wizard-container\">\n";
echo "                        <div class=\"card wizard-card ct-wizard-azzure\" id=\"wizard\">\n";
echo "                            <form action=\"settings.php\" method=\"POST\" id=\"registration-form\">\n";
echo "                                <div class=\"wizard-header\">\n";
echo "                                    <h3>Configuring <b>OpenFLIXR</b><br><br></h3>\n";
echo "                                </div>\n";
echo "                        <br><br><br><center><div class=\"countdown-styled\"></div></center>\n";
echo "<BR><center><div><h4 class=\"info-text\"><a href=\"/\" style=\"text-decoration:none\">When timer reaches ZERO, click here</a></h4></div></center>\n";
echo "                        </div>\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "</body>\n";
echo "<script src=\"js/jquery-1.10.2.js\" type=\"text/javascript\"></script>\n";
echo "<script src=\"js/bootstrap.min.js\" type=\"text/javascript\"></script>\n";
echo "<script src=\"js/jquery.bootstrap.wizard.js\" type=\"text/javascript\"></script>\n";
echo "<script src=\"js/jquery.validate.min.js\"></script>\n";
echo "<script src=\"js/wizard.js\"></script>\n";
echo "<script src=\"js/custom.js\"></script>\n";
echo "    <script src=\"js/jquery.countdown.js\"></script>\n";
echo "<script type=\"text/javascript\">    $(function() {\n";
echo "      $('.countdown-styled').countdown({\n";
echo "        date: +(new Date) + 900000,\n";
echo "        render: function(data) {\n";
echo "          var el = $(this.el);\n";
echo "          el.empty()\n";
echo "            .append(\"<div>\" + this.leadingZeros(data.min, 2) + \" <span>min</span></div>\")\n";
echo "            .append(\"<div>\" + this.leadingZeros(data.sec, 2) + \" <span>sec</span></div>\");\n";
echo "        }\n";
echo "      });\n";
echo "\n";
echo "      $('.stop').on('click', function(e) {\n";
echo "        e.preventDefault();\n";
echo "        $('.countdown-styled').data('countdown').stop();\n";
echo "      });\n";
echo "\n";
echo "      $('.start').on('click', function(e) {\n";
echo "        e.preventDefault();\n";
echo "        $('.countdown-styled').data('countdown').start();\n";
echo "      });\n";
echo "\n";
echo "      $('.countdown-callback').countdown({\n";
echo "        date: +(new Date) + 10000,\n";
echo "        render: function(data) {\n";
echo "          $(this.el).text(this.leadingZeros(data.sec, 2) + \" sec\");\n";
echo "        },\n";
echo "        onEnd: function() {\n";
echo "          $(this.el).addClass('ended');\n";
echo "        }\n";
echo "      }).on(\"click\", function() {\n";
echo "        $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();\n";
echo "      });\n";
echo "\n";
echo "    });</script>\n";
echo "\n";
echo "</html>\n";

$password = $_POST['password'];
$networkconfig = $_POST['networkconfig'];
$ip = $_POST['ip'];
$subnet = $_POST['subnet'];
$gateway = $_POST['gateway'];
$dns = $_POST['dns'];
$letsencrypt = $_POST['letsencrypt'];
$domainname = strtolower($_POST['domainname']);
$email = strtolower($_POST['email']);
$usenetdescription = $_POST['usenetdescription'];
$usenetservername = $_POST['usenetservername'];
$usenetusername = $_POST['usenetusername'];
$usenetpassword = $_POST['usenetpassword'];
$usenetport = $_POST['usenetport'];
$usenetthreads = $_POST['usenetthreads'];
$usenetssl = $_POST['usenetssl'];
$newznabprovider = $_POST['newznabprovider'];
$newznaburl = $_POST['newznaburl'];
$newznabapi = $_POST['newznabapi'];
$tvshowdl = $_POST['tvshowdl'];
$nzbdl = $_POST['nzbdl'];
$mopidy = $_POST['mopidy'];
$hass = $_POST['hass'];
$ntopng = $_POST['ntopng'];
$headphonesuser = $_POST['headphonesuser'];
$headphonespass = $_POST['headphonespass'];
$anidbuser = $_POST['anidbuser'];
$anidbpass = $_POST['anidbpass'];
$spotuser = $_POST['spotuser'];
$spotpass = $_POST['spotpass'];
$imdb = $_POST['imdb'];
$comicvine = $_POST['comicvine'];

if(!filter_var($ip, FILTER_VALIDATE_IP)) {
   $ip='';
}

if(!filter_var($subnet, FILTER_VALIDATE_IP)) {
   $ip='';
}

if(!filter_var($gateway, FILTER_VALIDATE_IP)) {
   $ip='';
}

if(!filter_var($dns, FILTER_VALIDATE_IP)) {
   $ip='';
}

#write setup.sh
$file = fopen("setup.sh","w");
fwrite($file,"#!/bin/bash
exec 1> >(tee -a /var/log/openflixrsetup.log) 2>&1
TODAY=$(date)
echo \"-----------------------------------------------------\"
echo \"Date:          \$TODAY\"
echo \"-----------------------------------------------------\"

THISUSER=$(whoami)
    if [ \$THISUSER != 'root' ]
        then
            echo 'You must use sudo to run this script, sorry!'
           exit 1
    fi

## variables
networkconfig=$networkconfig
ip='$ip'
subnet='$subnet'
gateway='$gateway'
dns='$dns'
password='$password'
letsencrypt=$letsencrypt
domainname=$domainname
email=$email
usenetdescription='$usenetdescription'
usenetservername=$usenetservername
usenetusername='$usenetusername'
usenetpassword='$usenetpassword'
usenetport=$usenetport
usenetthreads=$usenetthreads
usenetssl=$usenetssl
newznabprovider='$newznabprovider'
newznaburl=$newznaburl
newznabapi='$newznabapi'
tvshowdl=$tvshowdl
nzbdl=$nzbdl
mopidy=$mopidy
hass=$hass
ntopng=$ntopng
headphonesuser='$headphonesuser'
headphonespass='$headphonespass'
anidbuser='$anidbuser'
anidbpass='$anidbpass'
spotuser='$spotuser'
spotpass='$spotpass'
imdb=$imdb
comicvine='$comicvine'

oldpassword=$(crudini --get /usr/share/nginx/html/setup/config.ini password oldpassword)
if [ \"\$oldpassword\" == '' ]
  then
    oldpassword='openflixr'
fi

## stop services
service couchpotato stop
service headphones stop
service htpcmanager stop
service mylar stop
service sickrage stop
service jackett stop
service mopidy stop
service monit stop

## generate api keys
couchapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
sickapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
headapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
mylapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
sabapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
jackapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
sonapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
radapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
lazapi=$(uuidgen | tr -d - | tr -d '' | tr '[:upper:]' '[:lower:]')
echo \"Couchpotato \$couchapi\" >/opt/openflixr/api.keys
echo \"Sickrage \$sickapi\" >>/opt/openflixr/api.keys
echo \"Headphones \$headapi\" >>/opt/openflixr/api.keys
echo \"Mylar \$mylapi\" >>/opt/openflixr/api.keys
echo \"SABnzbd \$sabapi\" >>/opt/openflixr/api.keys
echo \"Jackett \$jackapi\" >>/opt/openflixr/api.keys
echo \"Sonarr \$sonapi\" >>/opt/openflixr/api.keys
echo \"Radarr \$radapi\" >>/opt/openflixr/api.keys
echo \"LazyLibrarian \$lazapi\" >>/opt/openflixr/api.keys

## htpcmanager
cd /opt/HTPCManager/userdata
sqlite3 database.db \"UPDATE setting SET val='\$couchapi' where key='couchpotato_apikey';\"
sqlite3 database.db \"UPDATE setting SET val='\$headapi' where key='headphones_apikey';\"
sqlite3 database.db \"UPDATE setting SET val='\$sabapi' where key='sabnzbd_apikey';\"
sqlite3 database.db \"UPDATE setting SET val='\$sickapi' where key='sickrage_apikey';\"
sqlite3 database.db \"UPDATE setting SET val='\$mylapi' where key='mylar_apikey';\"
sqlite3 database.db \"UPDATE setting SET val='\$sonapi' where key='sonarr_apikey';\"

## couchpotato
crudini --set /opt/CouchPotato/settings.conf core api_key \$couchapi
crudini --set /opt/CouchPotato/settings.conf sabnzbd api_key \$sabapi

## sickrage
crudini --set /opt/sickrage/config.ini SABnzbd sab_apikey \$sabapi
crudini --set /opt/sickrage/config.ini General api_key \$sickapi

## headphones
crudini --set /opt/headphones/config.ini General api_key \$headapi
crudini --set /opt/headphones/config.ini SABnzbd sab_apikey \$sabapi

## mylar
crudini --set /opt/Mylar/config.ini General api_key \$mylapi
crudini --set /opt/Mylar/config.ini SABnzbd sab_apikey \$sabapi

## plexrequests
plexreqapi=$(curl -s -X GET --header 'Accept: application/json' 'http://localhost:3579/request/api/apikey?username=openflixr&password='\$oldpassword'' | cut -c10-41)

curl -s -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
  \"ApiKey\": \"'\$couchapi'\",
  \"Enabled\": true,
  \"Ip\": \"localhost\",
  \"Port\": 5050,
  \"SubDir\": \"couchpotato\"
}' 'http://localhost:3579/request/api/settings/couchpotato?apikey='\$plexreqapi''
curl -s -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
  \"ApiKey\": \"'\$headapi'\",
  \"Enabled\": true,
  \"Ip\": \"localhost\",
  \"Port\": 8181,
  \"SubDir\": \"headphones\"
}' 'http://localhost:3579/request/api/settings/headphones?apikey='\$plexreqapi''
curl -s -X PUT --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
  \"CurrentPassword\": \"'\$oldpassword'\",
  \"NewPassword\": \"'\$password'\"
}' 'http://localhost:3579/request/api/credentials/openflixr?apikey='\$plexreqapi''

## usenet
    if [ \"\$usenetpassword\" != '' ]
        then
          service sabnzbdplus stop
          sleep 5
          sed -i 's/^api_key.*/api_key = '1234567890'/' /home/openflixr/.sabnzbd/sabnzbd.ini
          service sabnzbdplus start
          sleep 5
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&enable=1&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&ssl=$usenetssl&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&displayname=$usenetdescription&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&username=$usenetusername&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&password=$usenetpassword&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&host=$usenetservername&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&port=$usenetport&apikey=1234567890'
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&connections=$usenetthreads&apikey=1234567890'
          service sabnzbdplus stop
          sed -i 's/^api_key.*/api_key = '\$sabapi'/' /home/openflixr/.sabnzbd/sabnzbd.ini
    else
          service sabnzbdplus stop
          sleep 5
          sed -i 's/^api_key.*/api_key = '1234567890'/' /home/openflixr/.sabnzbd/sabnzbd.ini
          service sabnzbdplus start
          sleep 5
          curl -s 'http://localhost:8080/api?mode=set_config&section=servers&keyword=OpenFLIXR_Usenet_Server&output=xml&enable=0&apikey=1234567890'
          service sabnzbdplus stop
          sed -i 's/^api_key.*/api_key = '\$sabapi'/' /home/openflixr/.sabnzbd/sabnzbd.ini
    fi

## newznab
#    if [ \"\$newznabapi\" != '' ]
#        then
#         newznab config
#        else
#         reverse
#    fi

## tv shows downloader
    if [ \"\$tvshowdl\" == 'sickrage' ]
        then

curl -s -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
  \"ApiKey\": \"'\$sickapi'\",
  \"qualityProfile\": \"default\",
  \"Enabled\": true,
  \"Ip\": \"localhost\",
  \"Port\": 8081,
  \"SubDir\": \"sickrage\"
}' 'http://localhost:3579/request/api/settings/sickrage?apikey='\$plexreqapi''

    sqlite3 database.db \"UPDATE setting SET val='on' where key='sickrage_enable';\"
    sqlite3 database.db \"UPDATE setting SET val='0' where key='sonarr_enable';\"

    else

curl -s -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
  \"ApiKey\": \"'\$sickapi'\",
  \"qualityProfile\": \"default\",
  \"Enabled\": false,
  \"Ip\": \"localhost\",
  \"Port\": 8081,
  \"SubDir\": \"sickrage\"
}' 'http://localhost:3579/request/api/settings/sickrage?apikey='\$plexreqapi''

    sqlite3 database.db \"UPDATE setting SET val='0' where key='sickrage_enable';\"
    sqlite3 database.db \"UPDATE setting SET val='on' where key='sonarr_enable';\"

  fi

## sonarr
service sonarr stop
sed -i 's/^  <ApiKey>.*/  <ApiKey>'\$sonapi'<\/ApiKey>/' /root/.config/NzbDrone/config.xml

## nzb downloader
    if [ \"\$nzbdl\" == 'sabnzbd' ]
        then
          sqlite3 database.db \"UPDATE setting SET val='on' where key='sabnzbd_enable';\"
          sqlite3 database.db \"UPDATE setting SET val='0' where key='nzbget_enable';\"
    else
          sqlite3 database.db \"UPDATE setting SET val='0' where key='sabnzbd_enable';\"
          sqlite3 database.db \"UPDATE setting SET val='on' where key='nzbget_enable';\"
    fi

## headphones vip
    if [ \"\$headphonespass\" != '' ]
        then
          crudini --set /opt/headphones/config.ini General hpuser $headphonesuser
          crudini --set /opt/headphones/config.ini General hppass $headphonespass
          crudini --set /opt/headphones/config.ini General headphones_indexer 1
          crudini --set /opt/headphones/config.ini General mirror headphones
    else
          crudini --set /opt/headphones/config.ini General hpuser
          crudini --set /opt/headphones/config.ini General hppass
          crudini --set /opt/headphones/config.ini General headphones_indexer 0
          crudini --set /opt/headphones/config.ini General mirror musicbrainz.org
    fi

## anidb
    if [ \"\$anidbpass\" != '' ]
        then
          crudini --set /opt/sickrage/config.ini ANIDB use_anidb 1
          crudini --set /opt/sickrage/config.ini ANIDB anidb_password $anidbuser
          crudini --set /opt/sickrage/config.ini ANIDB anidb_username $anidbpass
    else
          crudini --set /opt/sickrage/config.ini ANIDB use_anidb 0
          crudini --set /opt/sickrage/config.ini ANIDB anidb_password
          crudini --set /opt/sickrage/config.ini ANIDB anidb_username
    fi

## spotify mopidy
    if [ \"\$spotpass\" != '' ]
        then
          crudini --set /etc/mopidy/mopidy.conf spotify username $spotuser
          crudini --set /etc/mopidy/mopidy.conf spotify password $spotpass
    else
          crudini --set /etc/mopidy/mopidy.conf spotify username
          crudini --set /etc/mopidy/mopidy.conf spotify password
    fi

## imdb url
    if [ \"\$imdb\" != '' ]
        then
          crudini --set /opt/CouchPotato/settings.conf imdb automation_urls $imdb
          crudini --set /opt/CouchPotato/settings.conf imdb automation_urls_use 1
    else
          crudini --set /opt/CouchPotato/settings.conf imdb automation_urls
          crudini --set /opt/CouchPotato/settings.conf imdb automation_urls_use 0
    fi

## comicvine
    if [ \"\$comicvine\" != '' ]
        then
          crudini --set /opt/Mylar/config.ini General comicvine_api $comicvine
    else
          crudini --set /opt/Mylar/config.ini General comicvine_api
    fi

## spotweb
#users / apikey + passwordhash
#usersettings / id3 / otherprefs | sabnzbd api + password

## passwords
echo openflixr:'$password' | sudo chpasswd
htpasswd -b /etc/nginx/.htpasswd openflixr '$password'

## MySQL
service mysql stop
killall -vw mysqld
mysqld_safe --skip-grant-tables >res 2>&1 &
sleep 10
mysql -e \"UPDATE mysql.user SET authentication_string = PASSWORD('$password') WHERE User = 'root' AND Host = 'localhost';FLUSH PRIVILEGES;\"
killall -v mysqld
sleep 5
service mysql restart
sed -i \"s/^.*\['pass'\].*/\\\$dbsettings\['pass'\] = '$password';/\" /var/www/spotweb/dbsettings.inc.php

## network
    if [ \"\$ip\" != '' ]
    then
cat > /etc/network/interfaces<<EOF
# This file describes the network interfaces available on your system
# and how to activate them. For more information, see interfaces(5).

source /etc/network/interfaces.d/*

# The loopback network interface
auto lo eth0
iface lo inet loopback

# The primary network interface
iface eth0 inet static
address $ip
netmask $subnet
gateway $gateway
dns-nameservers 127.0.0.1
EOF
    else
cat > /etc/network/interfaces<<EOF
# This file describes the network interfaces available on your system
# and how to activate them. For more information, see interfaces(5).

source /etc/network/interfaces.d/*

# The loopback network interface
auto lo eth0
iface lo inet loopback

# The primary network interface
iface eth0 inet dhcp
dns-nameservers 127.0.0.1
EOF

    fi

## letsencrypt
    if [ \"\$domainname\" != '' ]
        then
          rm -rf /var/log/letsencrypt/
          sed -i 's/^email.*/email = $email/' /opt/letsencrypt/cli.ini
          sed -i 's/^domains.*/domains = $domainname, www.$domainname/' /opt/letsencrypt/cli.ini
          sed -i 's/check host example.com with address example.com/check host $domain with address $domain/' /opt/config/monit/certificate
          service nginx stop
          sudo bash /opt/openflixr/letsencrypt.sh
          failed1=$(cat /var/log/letsencrypt/letsencrypt.log | grep \"Failed authorization procedure\")
          failed2=$(cat /var/log/letsencrypt/letsencrypt.log | grep \"is not a FQDN\")
            if [ \"\$failed1\" == '' ] && [ \"\$failed2\" == '' ]
            then
                sed -i 's/^server_name.*/server_name openflixr $domainname www.$domainname;  #donotremove_domainname/' /etc/nginx/sites-enabled/reverse
                sed -i 's/^.*#donotremove_certificatepath/ssl_certificate \/etc\/letsencrypt\/live\/$domainname\/fullchain.pem; #donotremove_certificatepath/' /etc/nginx/sites-enabled/reverse
                sed -i 's/^.*#donotremove_certificatekeypath/ssl_certificate_key \/etc\/letsencrypt\/live\/$domainname\/privkey.pem; #donotremove_certificatekeypath/' /etc/nginx/sites-enabled/reverse
                sed -i 's/^.*#donotremove_trustedcertificatepath/ssl_trusted_certificate \/etc\/letsencrypt\/live\/$domainname\/fullchain.pem; #donotremove_trustedcertificatepath/' /etc/nginx/sites-enabled/reverse
            else
                echo \"Failed authorization procedure or is not a FQDN\"
            fi
    else
          sed -i 's/^server_name.*/server_name openflixr;  #donotremove_domainname/' /etc/nginx/sites-enabled/reverse
          sed -i 's/^.*#donotremove_certificatepath/#ssl_certificate \/etc\/letsencrypt\/live\/example\/fullchain.pem; #donotremove_certificatepath/' /etc/nginx/sites-enabled/reverse
          sed -i 's/^.*#donotremove_certificatekeypath/#ssl_certificate_key \/etc\/letsencrypt\/live\/example\/privkey.pem; #donotremove_certificatekeypath/' /etc/nginx/sites-enabled/reverse
          sed -i 's/^.*#donotremove_trustedcertificatepath/#ssl_trusted_certificate \/etc\/letsencrypt\/live\/example\/fullchain.pem; #donotremove_trustedcertificatepath/' /etc/nginx/sites-enabled/reverse
    fi

crudini --set /usr/share/nginx/html/setup/config.ini network networkconfig $networkconfig
crudini --set /usr/share/nginx/html/setup/config.ini network ip $ip
crudini --set /usr/share/nginx/html/setup/config.ini network subnet $subnet
crudini --set /usr/share/nginx/html/setup/config.ini network gateway $gateway
crudini --set /usr/share/nginx/html/setup/config.ini network dns $dns
crudini --set /usr/share/nginx/html/setup/config.ini password oldpassword $password
crudini --set /usr/share/nginx/html/setup/config.ini access letsencrypt $letsencrypt
crudini --set /usr/share/nginx/html/setup/config.ini access domainname $domainname
crudini --set /usr/share/nginx/html/setup/config.ini access email $email
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetdescription $usenetdescription
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetservername $usenetservername
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetusername $usenetusername
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetpassword $usenetpassword
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetport $usenetport
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetthreads $usenetthreads
crudini --set /usr/share/nginx/html/setup/config.ini usenet usenetssl $usenetssl
crudini --set /usr/share/nginx/html/setup/config.ini newznab newznabprovider $newznabprovider
crudini --set /usr/share/nginx/html/setup/config.ini newznab newznaburl $newznaburl
crudini --set /usr/share/nginx/html/setup/config.ini newznab newznabapi $newznabapi
crudini --set /usr/share/nginx/html/setup/config.ini modules tvshowdl $tvshowdl
crudini --set /usr/share/nginx/html/setup/config.ini modules nzbdl $nzbdl
crudini --set /usr/share/nginx/html/setup/config.ini modules mopidy $mopidy
crudini --set /usr/share/nginx/html/setup/config.ini modules hass $hass
crudini --set /usr/share/nginx/html/setup/config.ini modules ntopng $ntopng
crudini --set /usr/share/nginx/html/setup/config.ini extras headphonesuser $headphonesuser
crudini --set /usr/share/nginx/html/setup/config.ini extras headphonespass $headphonespass
crudini --set /usr/share/nginx/html/setup/config.ini extras anidbuser $anidbuser
crudini --set /usr/share/nginx/html/setup/config.ini extras anidbpass $anidbpass
crudini --set /usr/share/nginx/html/setup/config.ini extras spotuser $spotuser
crudini --set /usr/share/nginx/html/setup/config.ini extras spotpass $spotpass
crudini --set /usr/share/nginx/html/setup/config.ini extras imdb $imdb
crudini --set /usr/share/nginx/html/setup/config.ini extras comicvine $comicvine
crudini --set /usr/share/nginx/html/setup/config.ini custom custom10 $couchapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom11 $sickapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom12 $headapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom13 $mylapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom14 $sabapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom15 $jackapi
crudini --set /usr/share/nginx/html/setup/config.ini custom custom16 $sonapi

systemctl --system daemon-reload
if [ \"\$ip\" != '' ]
  then
    sed -i 's/IPV4_ADDRESS.*/IPV4_ADDRESS='\$ip'\/24/' /etc/pihole/setupVars.conf
    service pihole-FTL restart
    pihole -g -sd
  else
    ip=$(/sbin/ip -o -4 addr list eth0 | awk '{print $4}' | cut -d/ -f1)
    sed -i 's/IPV4_ADDRESS.*/IPV4_ADDRESS='\$ip'\/24/' /etc/pihole/setupVars.conf
    service pihole-FTL restart
    pihole -g -sd
fi
bash /opt/openflixr/updatewkly.sh
reboot now");
fclose($file);

exec('sudo bash /usr/share/nginx/html/setup/setup.sh > /dev/null 2>&1 &');

?>
