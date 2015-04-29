# proxy.php
A Single-File PHP-based proxy that just works - supports all HTTP verbs and file uploads as well!

History:
========

This proxy was inspired by and originally built around the proxy [here](https://code.google.com/p/php-proxy/). 
I went ahead and extended that proxy to allow file uploads as well, and to auto set `application/json` as a fallback content-type
where it is not specified by the client (motivation being, I was specifically using this proxy for API proxying).

HOW-TO:
=======

To quote the original How-To:

    To use the proxy effectively you will require a server with .htaccess and mod_rewrite support.
    
    INSTALL
    1. Preferably use the proxy on it's own domain e.g. http://proxy.xyz.com/
    
    2. Rename htaccess.txt to .htaccess and install on your server.
    
    3. Download the proxy script and install it in the root web folder as 'index.php'.
    
    4. Edit the script and adjust the target domain name you would like to scrape!
    
    Done!
