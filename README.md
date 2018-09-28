# proxy.php
A Single-File PHP-based proxy that just works - supports all HTTP verbs and file uploads as well!

History:
========

This proxy was inspired by and originally built around the proxy [here](https://code.google.com/p/php-proxy/). 
I went ahead and extended that proxy to allow file uploads as well, and to auto set `application/json` as a fallback content-type
where it is not specified by the client (motivation being, I was specifically using this proxy for API proxying).

HOW-TO:
=======

Send request to your script and set query parametr `csurl` to desired URL with its schema.

Example:

`https://proxy.xyz.com/proxy.php?csurl=https://github.com`

Also you can use cURL for test in this way:

`curl https://proxy.xyz.com/proxy.php?csurl=https://github.com`

Where `proxy.xyz.com` - your domain name.

INSTALL

1. Preferably use the proxy on it's own domain e.g. http://proxy.xyz.com/
   
2. Download or clone this repo and copy the `config.php` and `proxy.php` files into the root web folder (or wherever it is you want to deploy the proxy).
    
3. [Optionally] rename the `proxy.php` script to 'index.php' if you wish to proxy with the index implied...
    
4. Edit the `config.php` script - adjust the target domain list to reflect the only domains you would like to proxy for!
    
Done!
