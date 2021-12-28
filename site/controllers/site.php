<?php

return function ($page, $pages, $site, $kirby) {

    # Fetch and store the content for the title tag and the meta description
    $titleTag = $site->title() . " | " . $page->title();
    $metaDescription = $page->text()->excerpt(120);

    # Return an array containing the data that we want to pass to the template
    return compact('titleTag', 'metaDescription');
};
