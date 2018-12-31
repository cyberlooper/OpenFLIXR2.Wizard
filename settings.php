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
$file = fopen("setup_init.sh","w");
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

preinitialized="yes"
source /usr/share/nginx/html/setup/setup.sh

");
fclose($file);

exec('sudo bash /usr/share/nginx/html/setup/setup_init.sh > /dev/null 2>&1 &');

?>
