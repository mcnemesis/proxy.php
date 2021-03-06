# proxy.php
A Single-File PHP-based proxy that just works - supports all HTTP verbs and file uploads as well!

## History

This proxy was inspired by and originally built around the proxy [here](https://code.google.com/p/php-proxy/). 
I went ahead and extended that proxy to allow file uploads as well, and to auto set `application/json` as a fallback content-type
where it is not specified by the client (motivation being, I was specifically using this proxy for API proxying).

## HOW-TO

It is possible to use the proxy with two modes:

### Non-transparent mode:

Send request to your script and set query parameter `csurl` to desired URL with its schema.

Example:

`https://proxy.xyz.com/proxy.php?csurl=https://github.com`

Also you can use cURL for test in this way:

`curl https://proxy.xyz.com/proxy.php?csurl=https://github.com`

Where `proxy.xyz.com` - your domain name.

### Transparent mode:

In this case the `csurl` query parameter does not contain the entire schema, but only the destination domain. The schema, instead, is in the proxy url.

Example:

`https://proxy.xyz.com/proxy.php/notifications?csurl=https://github.com`

performs a request to

`https://github.com/notifications`

---

**NOTE**: If set to true SETTING_PROXY_PATH in config file should be configured with the proxy path. In the previous example the SETTING_PROXY_PATH constant should be set as `SETTING_PROXY_PATH = "/proxy.php"`

---

It might also be possible to omit the `csurl` query parameter in all the requests by setting a default value in the config file. For example, with the transparent mode enabled, by setting `SETTING_CSURL_DEFAULT = "https://github.com"`:

`https://proxy.xyz.com/proxy.php/notifications`

performs a request to

`https://github.com/notifications`

In any case, it is stil possible to explicit the `csurl` in the query parameter, whose value overrides the default one.


## INSTALL

1. Preferably use the proxy on it's own domain e.g. http://proxy.xyz.com/
   
2. Download or clone this repo and copy the `config.php` and `proxy.php` files into the root web folder (or wherever it is you want to deploy the proxy).
    
3. [Optionally] rename the `proxy.php` script to 'index.php' if you wish to proxy with the index implied...
    
4. Edit the `config.php` script - adjust the target domain list to reflect the only domains you would like to proxy for!
    
Done!
