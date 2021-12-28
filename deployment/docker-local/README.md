# What happens here

- Start a local apache php server with docker compose
- support for xdebug

https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker/

https://dev.to/fuxide/setting-up-xdebug-for-vscode-in-an-docker-environment-27a9

https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug

https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker/

https://getkirby.com/docs/cookbook/setup/php-debugging-with-xdebug

## Launch Settings in VSCODE

https://stackoverflow.com/a/43541732/8648747


For all platforms
Docker v 20.10 and above (since December 14th 2020)

On Linux, add --add-host=host.docker.internal:host-gateway to your Docker command to enable this feature. (See below for Docker Compose configuration.)

Use your internal IP address or connect to the special DNS name host.docker.internal which will resolve to the internal IP address used by the host.

    To enable this in Docker Compose on Linux, add the following lines to the container definition:

    extra_hosts:
    - "host.docker.internal:host-gateway"

For macOS and Windows
Docker v 18.03 and above (since March 21st 2018)

Use your internal IP address or connect to the special DNS name host.docker.internal which will resolve to the internal IP address used by the host.

Linux support pending https://github.com/docker/for-linux/issues/264


## Trouble shooting
Enter this into php file
```php
xdebug_info();
exit;
```