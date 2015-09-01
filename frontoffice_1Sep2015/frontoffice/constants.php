<?php
define("DEBUG", false);
define("ENV", 'stg');   //prod, dev, stg

define("APP_NAME", "Chhattisgarh - Single Window Clearance System");

if (ENV == 'prod') {
    define("DB_SERVER", "localhost");
    define("DB_NAME", "swcs");
    define("DB_PASS", "iviss");
    define("DB_USER", "root");
} 
elseif(ENV == 'stg') {
    define("DB_SERVER", "localhost");
    define("DB_NAME", "jlabs_swcs");
    define("DB_PASS", "n1.8_2AU^.Zl");
    define("DB_USER", "jlabs_swcs");
}
else {
    define("DB_SERVER", "localhost");
    define("DB_NAME", "jlabs_swcs");
    define("DB_PASS", "n1.8_2AU^.Zl");
    define("DB_USER", "jlabs_swcs");
} 

define("PRIVATE_KEY","6LfcnQsTAAAAAIgbSyqg0qkjO2yOvhj6SqX_y3Js");
define("PUBLIC_KEY","6LfcnQsTAAAAAAP0hADhJ8Ow19ExY-Yl85TLdXVX");

define("INPUT_ENCRIPTION_KEY","#_ZII_#");
define("DEVELOPER_MODE",FALSE);   
define("PASSWORD_SALT","GSC_Infotech_2014");  //If it is changed, then all the existing password hash must be reset.
define("URL","http://clients.jumbolabs.com/SWCS/frontoffice/");
define("BACKENT_THEME_URL",URL."themes/backend/");
define("FRONTEND_THEME_URL",URL."themes/SWCS/");
define("ROOT_DIR","/home2/jlabs/public_html/clients/SWCS/frontoffice/");
define("SECRETKEY","H!A^R#*8");   
