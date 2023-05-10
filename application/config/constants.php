<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



/*
 * CUSTOM CONSTANTS
 */

defined('COMPANY_NAME')   	OR define('COMPANY_NAME', 'Super Suds Pressure Washing'); 		// contacts

defined('CONTACT_EMAIL')  	OR define('CONTACT_EMAIL', 'brian@supersuds.net'); 		// contacts
defined('CONTACT_PHONE')  	OR define('CONTACT_PHONE', '740-722-8889'); 		// contacts
defined('CONTACT_ADDRESS')	OR define('CONTACT_ADDRESS', 'Mount Vernon, OH'); 		// contacts

defined('TWITTER_URL')   	OR define('TWITTER_URL', ''); 		// socials
defined('FACEBOOK_URL')  	OR define('FACEBOOK_URL', 'https://www.facebook.com/people/Super-Suds-Pressure-Washing/100090365500297/'); 	// socials
defined('LINKEDIN_URL')  	OR define('LINKEDIN_URL', ''); 	// socials
defined('INSTAGRAM_URL') 	OR define('INSTAGRAM_URL', '');  // socials
defined('YOUTUBE_URL')   	OR define('YOUTUBE_URL', 'https://www.youtube.com/channel/UCn65S43iU4H_QbyZYZKDh5g'); 		// socials
defined('NEXTDOOR')   		OR define('NEXTDOOR', 'https://nextdoor.com/pages/super-suds-mount-vernon-oh/'); 		// socials
defined('GOOGLE')   		OR define('GOOGLE', 'https://www.google.com/localservices/prolist?g2lbs=ADZRdkumgaAl8sJrauuEC_9Q9SxeotLKkzUbw7uQYBY_lXi2uxuCn2WzEBkVOmFITy1meAotbjq2JQbiyNOHGuCFolBy2xM06G-QlihKEDeJ8BUvpeq_12gYeWnBYb0PtYpKZatVJni9LIv9wxxVreflnWYkoq7j2A%3D%3D&hl=en-US&gl=us&cs=1&ssta=1&q=super%20suds%20pressure%20washing&oq=super%20suds%20pressure%20washing&slp=MgA6HENoTUlxNVMwbnByWF9nSVYyZXFVQ1IyeHVBbTZSAggCYAB61AJDaHR6ZFhCbGNpQnpkV1J6SUhCeVpYTnpkWEpsSUhkaGMyaHBibWRJLVlLRDFhcXhnSUFJV2kwUUFCQUJFQUlRQXhnQUdBRVlBaGdESWh0emRYQmxjaUJ6ZFdSeklIQnlaWE56ZFhKbElIZGhjMmhwYm1kNkRFMXZkVzUwSUZabGNtNXZicElCR0hCeVpYTnpkWEpsWDNkaGMyaHBibWRmYzJWeWRtbGpaYW9CZWdvSkwyMHZNREZzYmpabUNnZ3ZiUzh3TlhkdWVCQUJLaDhpRzNOMWNHVnlJSE4xWkhNZ2NISmxjM04xY21VZ2QyRnphR2x1WnlnQU1oOFFBU0liY3Zmejl4VjRibUU3cTVNYllHNUM3eXRvSG9HN1ZkWmUtUDdWTWg4UUFpSWJjM1Z3WlhJZ2MzVmtjeUJ3Y21WemMzVnlaU0IzWVhOb2FXNW40QUVBkgE5Cg0vZy8xMWticGIxamN0Cg0vZy8xMWg0a3g1OGgxCg0vZy8xMWcwbWQ0OTU2EgQSAggBEgQKAggB&src=2&spp=Cg0vZy8xMWticGIxamN0OpACV2kwUUFCQUJFQUlRQXhnQUdBRVlBaGdESWh0emRYQmxjaUJ6ZFdSeklIQnlaWE56ZFhKbElIZGhjMmhwYm1lU0FSaHdjbVZ6YzNWeVpWOTNZWE5vYVc1blgzTmxjblpwWTJXYUFRQ3FBWG9LQ1M5dEx6QXhiRzQyWmdvSUwyMHZNRFYzYm5nUUFTb2ZJaHR6ZFhCbGNpQnpkV1J6SUhCeVpYTnpkWEpsSUhkaGMyaHBibWNvQURJZkVBRWlHM0wzOF9jVmVHNWhPNnVURzJCdVF1OHJhQjZCdTFYV1h2ai0xVElmRUFJaUczTjFjR1Z5SUhOMVpITWdjSEpsYzNOMWNtVWdkMkZ6YUdsdVp3PT0%3D&serdesk=1&lrlstt=1683050109999&ved=2ahUKEwilvaqemtf-AhUtjIkEHXnIAxIQvS56BAgeEAE&scp=Ch1nY2lkOnByZXNzdXJlX3dhc2hpbmdfc2VydmljZRI7EhIJt6fu7ao0OIgR1uZJyQu_dXgiDU10IFZlcm5vbiwgT0gqFA38DwsYFdqW0M4dynsXGCVJYt7OMAEaG3N1cGVyIHN1ZHMgcHJlc3N1cmUgd2FzaGluZyIbc3VwZXIgc3VkcyBwcmVzc3VyZSB3YXNoaW5nKhhQcmVzc3VyZSB3YXNoaW5nIHNlcnZpY2U%3D'); 		// socials
