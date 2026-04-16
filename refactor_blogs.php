<?php
$blogsJson = json_decode(file_get_contents(__DIR__ . '/data/blogs.json'), true);
$detailsDir = __DIR__ . '/blog-details';
$files = glob($detailsDir . '/*.php');

foreach ($files as $file) {
    $slug = basename($file, '.php');
    $content = file_get_contents($file);

    // Find the matching blog in JSON
    $author = 'Mukul';
    $date = date('F j, Y');
    foreach ($blogsJson as $b) {
        if ($b['slug'] === $slug) {
            $author = $b['author'];
            $date = date('F j, Y', strtotime($b['date']));
            break;
        }
    }

    // Dynamic Author Injection Rule 1: <p class="mt-30"><strong>Written by ...</strong>
    $content = preg_replace(
        '/<p[^>]*><strong>Written by [^<]+<\/strong>/i',
        '<p class="mt-30"><strong>Written by ' . $author . '</strong>',
        $content
    );

    // Dynamic Author Injection Rule 2: <h4>Written By: ...</h4>
    $content = preg_replace(
        '/<h4>Written By:\s*[^<]+<\/h4>/i',
        '<h4>Written By: ' . $author . '</h4>',
        $content
    );

    // Replace the random date logic with the synced date
    $content = preg_replace(
        '/<\?= date\(\'F j, Y\'[^>]*\)\s*\?>/i',
        $date,
        $content
    );

    file_put_contents($file, $content);
    echo "Refactored: $slug \n";
}
echo "Done.\n";
