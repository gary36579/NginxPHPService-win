@ECHO OFF
set base_home=C:/Service
set php_home=%base_home%/php-7.4.4
set nginx_home=%base_home%/nginx-1.17.9

echo Starting PHP FastCGI...
%base_home%/RunHiddenConsole.exe %php_home%/php-cgi.exe -b 127.0.0.1:9001 -c %php_home%/php.ini

echo Starting nginx...
%base_home%/RunHiddenConsole.exe %nginx_home%/nginx.exe -p %nginx_home%