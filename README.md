## Lumen

This is a quick playground to evalute a request/response framework as a "REPL".
I just use this to quickly isolate a framework agnoistic implementation/design
pattern and see how it ties in with the framework independence.

Lumen is a microframework with a bunch of convenient features that just works.

# Steps to use
1. run `docker-compose up -d`
2. navigate to `localhost:8080`

### Xdebug
Preconfigured for VSCode. Will also work in PHPStorm, but you need to add the
project / server mappings.

### Composer
It is a separate container. Here's an example on how to use it.
`docker-compose run --rm composer install`
