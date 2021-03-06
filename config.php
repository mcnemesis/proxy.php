<?php

/**
 * Place here any hosts for which we are to be a proxy -
 * e.g. the host on which the J2EE APIs we'll be proxying are running
 */
$SETTING_ALLOWED_HOSTS = array(
    'localhost','127.0.0.1', 'httpbin.org' # change to restrict list to only domains you wish to allow clients to call via this proxy
);

/**
* Default csurl value, to be used if not explictly passed
* this option allow to omit the csurl in the query of every request
*/
# $SETTING_CSURL_DEFAULT = "http://destination.com";

/**
* Url of the proxy, needed if the proxy is used in transparent mode
* Uncomment and change with the current proxy path when the transparent mode is enabled
*/
# $SETTING_PROXY_PATH = "/proxy/proxy.php";
