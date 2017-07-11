<?php
/**
 * @version		$Id: config-default.php 164 2012-12-14 21:22:24Z ryan $
 * @package		mds
 * @copyright	(C) Copyright 2010 Ryan Rhode, All rights reserved.
 * @author		Ryan Rhode, ryan@milliondollarscript.com
 * @license		This program is free software; you can redistribute it and/or modify
 *		it under the terms of the GNU General Public License as published by
 *		the Free Software Foundation; either version 3 of the License, or
 *		(at your option) any later version.
 *
 *		This program is distributed in the hope that it will be useful,
 *		but WITHOUT ANY WARRANTY; without even the implied warranty of
 *		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *		GNU General Public License for more details.
 *
 *		You should have received a copy of the GNU General Public License along
 *		with this program;  If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *		Million Dollar Script
 *		A pixel script for selling pixels on your website.
 *
 *		For instructions see README.txt
 *
 *		Visit our website for FAQs, documentation, a list team members,
 *		to post any bugs or feature requests, and a community forum:
 * 		http://www.milliondollarscript.com/
 *
 */

error_reporting(0);

#########################################################################
# CONFIGURATION
# Note: Please do not edit this file. Edit the config from the admin section.
#########################################################################

define('DEBUG', false);
define('MDS_LOG', false);
define('MDS_LOG_FILE', dirname(__FILE__).'/.mds.log');

define('VERSION_INFO', 'Version 2.1 (Oct 2010)');

define('BASE_HTTP_PATH', ''); 
define('SERVER_PATH_TO_ADMIN', '');
define('UPLOAD_PATH', '');
define('UPLOAD_HTTP_PATH', '');
define('MYSQL_HOST', ''); # mysql database host
define('MYSQL_USER', ''); #mysql user name
define('MYSQL_PASS', ''); # mysql password
define('MYSQL_DB', ''); # mysql database name
define('MYSQL_PORT', 3306); # mysql port
define('MYSQL_SOCKET', ''); # mysql socket

define('MDS_RESIZE', 'YES');

# SITE_CONTACT_EMAIL

define('SITE_CONTACT_EMAIL', stripslashes('test@example.com'));

# SITE_LOGO_URL

define('SITE_LOGO_URL', stripslashes('http://milliondollarscript.com/logo.gif'));

# SITE_NAME
# change to your website name
define('SITE_NAME', stripslashes('Million Dollar Script ' . VERSION_INFO)); 

# SITE_SLOGAN
# change to your website slogan
define('SITE_SLOGAN', stripslashes('This is the Million Dollar Script Example. 1 pixel = 1 cent')); 

# ADMIN_PASSWORD

define('ADMIN_PASSWORD',  'ok');

# date formats
define('DATE_FORMAT', 'Y-M-d');
define('GMT_DIF', '6');
define('DATE_INPUT_SEQ', 'YMD');

# Output the image in JPEG? Y or N. 

define('OUTPUT_JPEG', 'GIF'); # Y or N
define('JPEG_QUALITY', '75'); # a number from 0 to 100
define('INTERLACE_SWITCH','YES');
# Note: Please do not edit this file. Edit from the admin section.

# USE_LOCK_TABLES
# The script can lock/unlock tables when a user is selecting pixels
define ('USE_LOCK_TABLES', 'Y');

define('BANNER_DIR', 'pixels/');

# IM_CONVERT_PATH

define('IM_CONVERT_PATH', 'IM_CONVERT_PATH');

# Note: Please do not edit this file. Edit from the admin section.
define('EMAIL_USER_ORDER_CONFIRMED', 'YES');
define('EMAIL_ADMIN_ORDER_CONFIRMED', 'YES');
define('EMAIL_USER_ORDER_COMPLETED', 'YES');
define('EMAIL_ADMIN_ORDER_COMPLETED', 'YES');
define('EMAIL_USER_ORDER_PENDED', 'YES');
define('EMAIL_ADMIN_ORDER_PENDED', 'YES');
define('EMAIL_USER_ORDER_EXPIRED', 'YES');
define('EMAIL_ADMIN_ORDER_EXPIRED', 'YES');

define('EM_NEEDS_ACTIVATION', 'YES');
define('EMAIL_ADMIN_ACTIVATION', 'YES');
define('EMAIL_ADMIN_PUBLISH_NOTIFY', 'YES');
define('USE_PAYPAL_SUBSCR', 'USE_PAYPAL_SUBSCR');
define('EMAIL_USER_EXPIRE_WARNING', '');
define('DAYS_RENEW', '7');
define('DAYS_CONFIRMED', '7');
define('HOURS_UNCONFIRMED', '1');
define('DAYS_CANCEL', '3');
define('ENABLE_MOUSEOVER', 'YES');
define('ENABLE_CLOAKING', 'YES');
define('VALIDATE_LINK', 'NO');
define('DISPLAY_PIXEL_BACKGROUND', 'YES');
define('USE_SMTP', '');
define('EMAIL_HOSTNAME', '');
define('EMAIL_SMTP_SERVER', '');
define('EMAIL_SMTP_USER', '');
define('EMAIL_SMTP_PASS', '');
define('EMAIL_SMTP_AUTH_HOST', '');
define('POP3_PORT', '110');
define('EMAIL_POP_SERVER', '');
define('EMAIL_POP_BEFORE_SMTP', '');

define('EMAILS_PER_BATCH', '12');
define('EMAILS_MAX_RETRY', '15');
define('EMAILS_ERROR_WAIT', '20');
define('EMAILS_DAYS_KEEP', '30');
define('USE_AJAX', 'SIMPLE');
define('ANIMATION_SPEED', '50');
define('MAX_BLOCKS', '');
define('MEMORY_LIMIT', '64M');

define('REDIRECT_SWITCH', 'NO');
define('REDIRECT_URL', 'http://www.example.com');
define('ADVANCED_CLICK_COUNT', 'YES');

define('TRANSITION_EFFECT', '23');
define('ENABLE_TRANSITIONS', 'YES');
define('TRANSITION_DURATION', '1');
define('HIDE_TIMEOUT', '500');
define('MDS_AGRESSIVE_CACHE', '');

if (defined('MEMORY_LIMIT')) {
	ini_set('memory_limit', MEMORY_LIMIT);
} else {
	ini_set('memory_limit', '64M');
}

define('ERROR_REPORTING', 0);

	// database connection
	require_once(dirname(__FILE__).'/include/database.php');

	// load HTMLPurifier
    require_once dirname(__FILE__).'/vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';
//    $HTMLPurifier_Config = HTMLPurifier_Config::createDefault();

// replace with your encoding
//    $HTMLPurifier_Config->set('Core', 'Encoding', 'ISO-8859-1');

// replace with your doctype
//    $HTMLPurifier_Config->set('HTML', 'Doctype', 'HTML 4.01 Transitional');

/**
    require_once '/path/to/htmlpurifier/library/HTMLPurifier.auto.php';
    
    $config = HTMLPurifier_Config::createDefault();
    $config->set('Core', 'Encoding', 'ISO-8859-1'); // replace with your encoding
    $config->set('HTML', 'Doctype', 'HTML 4.01 Transitional'); // replace with your doctype
    $purifier = new HTMLPurifier($config);
    
    $clean_html = $purifier->purify($dirty_html);
    
$clean_html = $purifier->purify();

*/


    $purifier = new HTMLPurifier(); 
	
	require_once dirname(__FILE__).'/include/functions2.php';
	$f2 = new functions2();

	include dirname(__FILE__).'/lang/lang.php';
	require_once (dirname(__FILE__).'/mail/email_message.php');
	require_once (dirname(__FILE__).'/mail/smtp_message.php');
	require_once (dirname(__FILE__).'/mail/smtp.php');
	require_once dirname(__FILE__).'/include/mail_manager.php';
	require_once dirname(__FILE__).'/include/currency_functions.php';
	require_once dirname(__FILE__).'/include/price_functions.php';
	require_once dirname(__FILE__).'/include/functions.php';
	require_once dirname(__FILE__).'/include/image_functions.php';
	if (!get_magic_quotes_gpc()) unfck_gpc();
	//escape_gpc();

function get_banner_dir() {
	if (BANNER_DIR=='BANNER_DIR') {	

		$file_path = SERVER_PATH_TO_ADMIN; // eg e:/apache/htdocs/ojo/admin/

		$p = preg_split ('%[/\\]%', "$file_path");

		array_pop($p);
		array_pop($p);
	
		$dest = implode('/', $p);
		$dest = $dest.'/banners/';

		if (file_exists($dest)) {
			$BANNER_DIR = 'banners/';
		} else {
			$BANNER_DIR = 'pixels/';
		}
	} else {
		$BANNER_DIR = BANNER_DIR;
	}
	return $BANNER_DIR;
 
}
?>