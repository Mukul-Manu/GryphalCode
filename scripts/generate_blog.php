<?php
/**
 * CRON JOB TARGET SCRIPT: 
 * Set this script to run daily via Windows Task Scheduler or Linux Cron (e.g., `0 0 * * * php /path/to/generate_blog.php`).
 */

// 1. Initial Data and Setup
$blogsJsonPath = __DIR__ . '/../data/blogs.json';
$detailsDir = __DIR__ . '/../blog-details';
$authors = ["Mridhul", "Gowtham", "Karthi", "Rohith", "Hari"];
$categories = ["AI Strategy", "Cloud Security", "DevOps", "Machine Learning", "SEO / AI Search"];
$images = ["blog_ai_integration.png", "blog_cloud_security.png", "blog_devops_automation.png"]; // Available placeholder images

// Randomize fields
$randomAuthor = $authors[array_rand($authors)];
$randomCategory = $categories[array_rand($categories)];
$randomImage = $images[array_rand($images)];
$currentDate = date('Y-m-d');
$slugId = time();

// --- PLACEHOLDER API CALL ---
// In a real scenario, you would use cURL to hit the OpenAI/Gemini API here to generate a title, excerpt, and content
// Example: $response = call_openai_api("Write an SEO friendly tech blog about " . $randomCategory);
$generatedTitle = "Auto-Generated " . $randomCategory . " Guide " . date('Y');
$generatedSlug = strtolower(str_replace(' ', '-', $generatedTitle)) . '-' . $slugId;
$generatedExcerpt = "This is an automatically generated SEO description for " . $randomCategory . " discussing modern trends and solutions.";
$generatedContentHTML = "<p>This is a placeholder for the heavily generated SEO article content. Integrated via script.</p>";

// 2. Step 1: Update the blogs.json manifest
$blogs = json_decode(file_get_contents($blogsJsonPath), true);
if (!is_array($blogs)) {
    $blogs = [];
}

$newPostMeta = [
    "slug" => $generatedSlug,
    "title" => $generatedTitle,
    "excerpt" => $generatedExcerpt,
    "category" => $randomCategory,
    "author" => $randomAuthor,
    "date" => $currentDate,
    "image" => $randomImage
];

array_unshift($blogs, $newPostMeta); // Add to beginning
file_put_contents($blogsJsonPath, json_encode($blogs, JSON_PRETTY_PRINT));

// 3. Step 2: Create the individual blog detail page
$blogTemplateSource = <<<HTML
<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
\$base_url = rtrim(dirname(dirname(\$_SERVER['SCRIPT_NAME'])), '/\\\\');
\$page_title = "{$generatedTitle} | GryphalCode";
\$meta_desc = "{$generatedExcerpt}";
\$meta_keywords = "{$randomCategory}, GryphalCode, Auto-Generated";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include_once '../seo-engine.php'; ?>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/style.min.css?v=3">
  <style>
    .eeat-author-bio { display: flex; align-items: center; background: rgba(8, 106, 216, 0.05); padding: 30px; margin-top: 50px; border-radius: 12px; }
  </style>
</head>
<body>
<?php include __DIR__ . '/../header.php'; ?>
<main id="main-content" class="pt-120 pb-100">
  <div class="container">
    <h1 class="mb-20">{$generatedTitle}</h1>
    <p class="mt-30"><strong>Written by {$randomAuthor}</strong></p>
    <div class="mt-40">
        {$generatedContentHTML}
    </div>
    
    <div class="eeat-author-bio mt-50">
        <div class="eeat-author-content">
            <h4>Written By: {$randomAuthor}</h4>
            <span>Author @ GryphalCode</span>
        </div>
    </div>
  </div>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../global-scripts.php'; ?>
</body>
</html>
HTML;

file_put_contents($detailsDir . '/' . $generatedSlug . '.php', $blogTemplateSource);

echo "Successfully auto-generated blog post: " . $generatedTitle . "\n";
