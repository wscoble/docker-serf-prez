#!/usr/bin/env php
<?php
if(getenv('SERF_EVENT') == 'member-join') {
    // Serf provides the payload on stdin
    list($hostname, $ip, $nodename, $tags) = explode(' ', readline());

    echo $hostname . PHP_EOL . $ip . PHP_EOL . $nodename . PHP_EOL . $tags;

    // if the joining member has an app role
    if(stristr('role=app', $tags)) {
        // update the nginx configs with a twig template or something

        // what is Nginx's pid?


        // send a HUP signal to Nginx
        exec("kill -HUP ");
    }
}
?>