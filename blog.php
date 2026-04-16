<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php
// Dynamic Base URL Detection
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\'); ?>
<?php
$page_title = "Tech Insights & Engineering Blog | GryphalCode";
$meta_desc = "Explore the latest thought leadership, engineering techniques, and IT news from GryphalCode. Discover high-demand tutorials on Generative AI, Cloud Security, and zero-trust deployments.";
$meta_keywords = "GryphalCode Blog, AI Engineering News, Tech Insights, Enterprise Tech Blog, IT Industry News";
$searchQuery = trim((string) ($_GET['q'] ?? ''));

$jsonData = file_get_contents(__DIR__ . '/data/blogs.json');
$posts = json_decode($jsonData, true);

if (!is_array($posts)) {
  $posts = [];
}

// Order by date descending
usort($posts, function ($a, $b) {
  return strtotime($b['date']) - strtotime($a['date']);
});

if ($searchQuery !== '') {
  $posts = array_values(array_filter($posts, static function ($post) use ($searchQuery) {
    $haystack = strtolower($post['title'] . ' ' . $post['excerpt'] . ' ' . $post['category'] . ' ' . $post['author']);
    return strpos($haystack, strtolower($searchQuery)) !== false;
  }));
}

// Pagination logic (10 items per page limit)
$itemsPerPage = 10;
$totalPosts = count($posts);
$totalPages = max(1, ceil($totalPosts / $itemsPerPage));
$currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($currentPage < 1)
  $currentPage = 1;
if ($currentPage > $totalPages)
  $currentPage = $totalPages;

$offset = ($currentPage - 1) * $itemsPerPage;
$postsChunk = array_slice($posts, $offset, $itemsPerPage);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include_once 'seo-engine.php'; ?>

  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="preload" href="<?= $base_url ?>/assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="<?= $base_url ?>/assets/css/style.min.css?v=3" as="style">

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css" media="print"
    onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=3.5">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <main id="main-content">
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img"
      data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb__wrap text-center">
              <h1 class="title">Tech Insights & News</h1>
              <div class="breadcrumb__nav">
                <ul>
                  <li><span>//</span></li>
                  <li><a href="<?= $base_url ?>/">Home</a></li>
                  <li>|</li>
                  <li>blog</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- E-E-A-T Blog Grid -->
    <section class="about__area about__area--7 pt-100 pb-100">
      <div class="container">
        <div class="row justify-content-center mb-60">
          <div class="col-xl-7 text-center">
            <div class="section__heading">
              <h3 class="section__heading--title-small">
                <span class="mr-10">//</span>Latest Dispatches<span class="ml-10">//</span>
              </h3>
              <h2 class="section__heading--title">
                Engineering The <br /> Future Of Code<span>.</span>
              </h2>
              <p class="mt-20" style="color:#7a8aab; font-size:18px;">
                Deep-dives into Generative AI, cutting-edge cybersecurity protocols, and next-generation DevOps
                workflows written by our core engineering team.
              </p>
            </div>
          </div>
        </div>
        <div class="row mt-none-30">
          <?php if ($searchQuery !== ''): ?>
            <div class="col-xl-12 mt-30">
              <p style="font-size:16px; color:#7a8aab;">Showing results for:
                <strong><?= htmlspecialchars($searchQuery, ENT_QUOTES) ?></strong>
              </p>
            </div>
          <?php endif; ?>
          <?php if (empty($postsChunk)): ?>
            <div class="col-xl-12 mt-30">
              <div class="text-center p-4" style="border:1px solid #e4e8ef; border-radius:10px;">
                <h3 class="mb-10">No matching insights found</h3>
                <p class="mb-20">Try a broader search term like AI, cloud, DevOps, or security.</p>
                <a class="site-btn" href="<?= $base_url ?>/blog">View All Articles</a>
              </div>
            </div>
          <?php else: ?>
            <?php foreach ($postsChunk as $post): ?>
              <?php $postUrl = $base_url . '/blog-details/' . $post['slug']; ?>
              <div class="col-xl-4 col-lg-6 mt-30">
                <article class="premium-case-card" style="transition:0.3s;">
                  <div class="case-card__img">
                    <a href="<?= $postUrl ?>">
                      <img loading="lazy" alt="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>"
                        src="<?= $base_url ?>/<?= htmlspecialchars($post['image'], ENT_QUOTES) ?>"
                        style="width:100%; height:250px; object-fit:cover;">
                    </a>
                  </div>
                  <div class="premium-case-card__body">
                    <span class="premium-case-tag"
                      style="background: rgba(8, 106, 216, 0.2); color: #38bdf8;"><?= htmlspecialchars($post['category'], ENT_QUOTES) ?></span>
                    <h3><?= htmlspecialchars($post['title'], ENT_QUOTES) ?></h3>
                    <p><?= htmlspecialchars($post['excerpt'], ENT_QUOTES) ?></p>
                    <div class="premium-stat-row">
                      <div class="premium-stat">
                        <div class="number" style="font-size:18px;"><?= htmlspecialchars($post['author'], ENT_QUOTES) ?>
                        </div>
                        <div class="label">Author</div>
                      </div>
                      <div class="premium-stat">
                        <div class="number" style="font-size:18px;">
                          <?= htmlspecialchars(date('M j, Y', strtotime($post['date'])), ENT_QUOTES) ?>
                        </div>
                        <div class="label">Date</div>
                      </div>
                    </div>
                    <a class="premium-btn" href="<?= $postUrl ?>">
                      Read Article
                      <i class="fal fa-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <?php if ($totalPages > 1): ?>
          <div class="row mt-50">
            <div class="col-12 text-center">
              <div class="pagination-wrapper">
                <?php if ($currentPage > 1): ?>
                  <a href="?page=<?= $currentPage - 1 ?><?= $searchQuery ? '&q=' . urlencode($searchQuery) : '' ?>"
                    class="site-btn transparent" style="padding: 10px 20px;">Prev</a>
                <?php endif; ?>

                <span style="font-size:18px; font-weight:bold; margin:0 20px;">Page <?= $currentPage ?> of
                  <?= $totalPages ?></span>

                <?php if ($currentPage < $totalPages): ?>
                  <a href="?page=<?= $currentPage + 1 ?><?= $searchQuery ? '&q=' . urlencode($searchQuery) : '' ?>"
                    class="site-btn transparent" style="padding: 10px 20px;">Next</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>