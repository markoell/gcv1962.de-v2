<?php
use Kirby\Toolkit\A;

return function ($page, $pages, $site, $kirby) {

    # Grab the data from the default controller
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));

    # Store the content for the different title tag
    $titleTag = $site->title() . " | " . $site->tagline();

    # Return the array containing the data that we want to pass to the template
    return a::merge($shared, compact('titleTag'));
};
