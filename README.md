# Very simple wordpress theme starter
go to **wp-content/themes/sparkt**, and to:

* install dependencies run `npm i`
* serve run `npm start`
* build run `npm run build`

####  Settings virtual host

to **/usr/local/etc/httpd/extra/httpd-vhosts.conf** add followings:
 >   <VirtualHost *:80>
        DocumentRoot "path/to/your/wordpress/files"
        ServerName sparkt.ai
        ServerAlias www.sparkt.ai
    </VirtualHost>

After that add the following to **code /etc/hosts**:
> 127.0.0.1       sparkt.ai
