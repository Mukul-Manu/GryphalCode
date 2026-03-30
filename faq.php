<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Faq | GryphalCode";
$meta_desc = "GryphalCode specializes in Faq services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "Faq, GryphalCode Faq, Faq, IT company, software development, AI solutions, cloud infrastructure";
?>
﻿
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8"/>
  <link href="assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/png"/>
  <link href="assets/images/logo/favicon.webp" rel="apple-touch-icon"/>
  <meta content="ie=edge" http-equiv="x-ua-compatible"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <title>
   GryphalCode FAQ | Expert Answers to Your Technology Questions
  </title>
  <link href="https://gryphalcode.com/faq" rel="canonical">
   <link href="assets/images/logo/favicon.webp" rel="shortcut icon" type="images/x-icon">
    <!-- Performance & Scale Metrics -->
    <meta content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality." name="description">
     <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
      <meta content="GryphalCode" name="author">
       <meta content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" name="robots"/>
       <!-- GEO Targeting - Service States of India -->
       <meta content="IN-TN" name="geo.region"/>
       <meta content="11.0168;76.9558" name="geo.position"/>
       <meta content="Coimbatore, Tamil Nadu, India - Serving All States Nationwide" name="geo.placename"/>
       <meta content="11.0168, 76.9558" name="ICBM"/>
       <!-- Open Graph / Social Transparency -->
       <meta content="website" property="og:type"/>
       <meta content="https://gryphalcode.com/faq" property="og:url"/>
       <meta content="GryphalCode FAQ | Expert Answers to Your Technology Questions" property="og:title"/>
       <meta content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality." property="og:description"/>
       <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image"/>
       <!-- Security & Integrity -->
       <meta content="default-src 'self' https:; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:;" http-equiv="Content-Security-Policy"/>
       <meta content="DENY" http-equiv="X-Frame-Options"/>
       <meta content="strict-origin-when-cross-origin" name="referrer"/>
       <!-- Analytics & Tracking -->
       <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W">
       </script>
       <script>
        window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
       </script>
       <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
       <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
       <link href="assets/css/jquery-ui.min.css" rel="stylesheet"/>
       <link href="assets/css/lightcase.css" rel="stylesheet"/>
       <link href="assets/css/meanmenu.css" rel="stylesheet"/>
       <link href="assets/css/nice-select.css" rel="stylesheet"/>
       <link href="assets/css/owl.carousel.min.css" rel="stylesheet"/>
       <link href="assets/css/animate.css" rel="stylesheet"/>
       <link href="assets/css/style.css?v=3" rel="stylesheet"/>
       <link href="assets/css/responsive.css?v=3" rel="stylesheet"/>
       <!-- Performance: Preconnect -->
       <link href="https://fonts.googleapis.com" rel="preconnect"/>
       <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
       <link href="https://cdnjs.cloudflare.com" rel="preconnect"/>
       <link href="https://www.googletagmanager.com" rel="dns-prefetch"/>
       <!-- PWA Manifest -->
       <link href="/manifest.json" rel="manifest"/>
       <meta content="#086ad8" name="theme-color"/>
       <meta content="yes" name="apple-mobile-web-app-capable"/>
       <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style"/>
       <!-- Twitter Cards -->
       <meta content="summary_large_image" name="twitter:card"/>
       <meta content="@GryphalCode" name="twitter:site"/>
       <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image"/>
      </meta>
     </meta>
    </meta>
   </link>
  </link>
  <meta content="GryphalCode FAQ | Expert Answers to Your Technology Questions" name="twitter:title"/>
  <meta content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality." name="twitter:description"/>
  <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "GryphalCode FAQ | Expert Answers to Your Technology Questions",
  "description": "GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality.",
  "url": "https://gryphalcode.com/faq",
  "provider": {
    "@type": "Organization",
    "name": "GryphalCode",
    "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
  }
}
  </script>
 
  

  <style>
    /* Absolute Refactor For Mobile Progress Bars - Permanent Native Fix */
    @media (max-width: 575px) {
      .skill__box { 
        position: relative !important; 
        margin-bottom: 40px !important; 
        display: block !important;
      }
      .skill__box .title { 
        max-width: 75% !important; 
        line-height: 1.4 !important; 
        white-space: normal !important; 
        word-wrap: break-word !important; 
        margin-bottom: 20px !important;
        display: block !important;
      }
      .skill__box .progress { 
        position: static !important; 
        overflow: visible !important; 
      }
      .skill__box .progress-bar { 
        position: static !important; 
      }
      .skill__box .progress-bar span { 
        position: absolute !important; 
        right: 0 !important; 
        top: 0 !important; /* Anchors the 95% horizontally flush with the first line of the title */
        font-weight: bold !important;
      }
    }
  </style>

  <style id="global-mobile-fix">
    /* GLOBAL MOBILE RESPONSIVENESS OVERRIDE */
    @media (max-width: 575px) {
      /* 1. Prevent Horizontal Scroll Globally */
      html, body {
        overflow-x: hidden !important;
        width: 100% !important;
        max-width: 100vw !important;
        margin: 0 !important;
        padding: 0 !important;
      }
      
      /* 2. Container Bounds */
      .container {
        width: 100% !important;
        max-width: 100vw !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        overflow-x: hidden !important;
        margin: 0 auto !important;
      }

      /* 3. Fluid Images */
      img {
        max-width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
      }

      /* 4. Text Wrapping Assurance */
      h1, h2, h3, h4, h5, h6, p, a, span, .title, .section__heading--title {
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        white-space: normal !important;
      }

      /* 5. About Box UI Repair */
      .about__box {
        margin-left: 0 !important;
        padding: 15px !important;
        height: auto !important;
        overflow: visible !important;
      }
      .about__box p {
        margin-bottom: 20px !important;
      }

      /* 6. Site Button Auto-Height Fix */
      .site-btn {
        white-space: normal !important;
        height: auto !important;
        line-height: 1.5 !important;
        padding: 12px 20px !important;
        display: inline-block !important;
        width: 100% !important;
        text-align: center !important;
      }

      /* 7. WhatsApp Floating Optimization for 320px Screens */
      .whatsapp-float {
        width: 45px !important;
        height: 45px !important;
        bottom: 15px !important;
        right: 15px !important;
        padding: 8px !important;
        z-index: 9999 !important;
      }
      .whatsapp-float svg {
        width: 25px !important;
        height: 25px !important;
        margin: 0 auto !important;
      }
      
      /* 8. Fix Row Negative Margins causing overflow */
      .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      [class*="col-"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        width: 100% !important;
      }
    }
  </style>

</head>
 <body>
  <!-- header start -->
  <?php include 'header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap text-center text-white">
       <h2 class="title">
        Your FAQ
       </h2>
       <div class="breadcrumb__nav">
        <ul class="d-inline-flex justify-content-center align-items-center">
         <li>
          <span>
           //
          </span>
         </li>
         <li>
          <a href="/index">
           Home
          </a>
         </li>
         <li>
          |
         </li>
         <li>
          FAQ
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- faq-search area start -->
  <section class="faq-search-area pt-150 pb-155 bg_img" data-background="../assets/images/pattern/faq-pattern.webp">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-xl-8 text-center">
      <div class="faq-search-wrap">
       <div class="faq-search mb-45">
        <form action="#" method="get" role="search">
         <input aria-label="Search FAQs" placeholder="Type your questions here" type="search"/>
         <button aria-label="Search" type="submit">
          <i class="fal fa-search">
          </i>
         </button>
        </form>
       </div>
       <h2 class="title">
        How Can We Help You?
       </h2>
       <p>
        Find answers to common questions about our web design, mobile
              app development, CRM solutions, and UI/UX services. If you don't
              find what you're looking for, our team is ready to assist you.
       </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- faq-search area end -->
  <!-- faq area start -->
  <div class="faq-area pt-100 pb-100">
   <div class="container">
    <div class="row mt-none-20">
     <!-- LEFT COLUMN -->
     <div class="col-xl-6 mt-20">
      <div class="accordion faqs faqs--2" id="accordionFaq">
       <!-- Q1 -->
       <div class="card">
        <div class="card__header" id="heading1">
         <h5 class="mb-0 title">
          <button aria-controls="collapse1" aria-expanded="false" class="btn btn-link collapsed" data-bs-target="#collapse1" data-bs-toggle="collapse" type="button">
           What's included in your website design process?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse1">
         <div class="card__body">
          <p>
           Our comprehensive website design process includes:
          </p>
          <ul>
           <li>
            Discovery session to understand your business goals
           </li>
           <li>
            Competitor analysis and market research
           </li>
           <li>
            Wireframing and prototyping
           </li>
           <li>
            UI/UX design implementation
           </li>
           <li>
            Responsive development for all devices
           </li>
           <li>
            SEO-friendly structure implementation
           </li>
           <li>
            Quality assurance and testing
           </li>
           <li>
            Deployment and maintenance planning
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q2 -->
       <div class="card">
        <div class="card__header" id="heading2">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse2" data-bs-toggle="collapse" type="button">
           How do you approach mobile app development?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse2">
         <div class="card__body">
          <p>
           Our mobile app development methodology:
          </p>
          <ol>
           <li>
            <strong>
             Strategy:
            </strong>
            Define objectives and KPIs
           </li>
           <li>
            <strong>
             UX Design:
            </strong>
            User flows and wireframes
           </li>
           <li>
            <strong>
             UI Design:
            </strong>
            Visual interface creation
           </li>
           <li>
            <strong>
             Development:
            </strong>
            Native (iOS/Android) or
                      cross-platform
           </li>
           <li>
            <strong>
             Testing:
            </strong>
            QA across multiple devices
           </li>
           <li>
            <strong>
             Deployment:
            </strong>
            App store submission
           </li>
           <li>
            <strong>
             Maintenance:
            </strong>
            Updates and support
           </li>
          </ol>
         </div>
        </div>
       </div>
       <!-- Q3 -->
       <div class="card">
        <div class="card__header" id="heading3">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse3" data-bs-toggle="collapse" type="button">
           What's the difference between CRM and ERP systems?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse3">
         <div class="card__body">
          <div class="comparison-table table-responsive">
           <table class="table table-bordered">
            <thead>
             <tr>
              <th>
               CRM System
              </th>
              <th>
               ERP System
              </th>
             </tr>
            </thead>
            <tbody>
             <tr>
              <td>
               Focuses on customer relationships
              </td>
              <td>
               Manages business processes
              </td>
             </tr>
             <tr>
              <td>
               Sales, marketing, customer service
              </td>
              <td>
               Finance, HR, inventory, manufacturing
              </td>
             </tr>
             <tr>
              <td>
               External customer-facing
              </td>
              <td>
               Internal operations-focused
              </td>
             </tr>
             <tr>
              <td>
               Improves customer satisfaction
              </td>
              <td>
               Improves operational efficiency
              </td>
             </tr>
            </tbody>
           </table>
          </div>
         </div>
        </div>
       </div>
       <!-- Q4 -->
       <div class="card">
        <div class="card__header" id="heading4">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse4" data-bs-toggle="collapse" type="button">
           What deliverables do you provide for UI/UX projects?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse4">
         <div class="card__body">
          <p>
           Our UI/UX design deliverables include:
          </p>
          <ul>
           <li>
            User research and persona documents
           </li>
           <li>
            Information architecture maps
           </li>
           <li>
            User flow diagrams
           </li>
           <li>
            Interactive prototypes
           </li>
           <li>
            Wireframes for key screens
           </li>
           <li>
            High-fidelity mockups
           </li>
           <li>
            Style guides and design systems
           </li>
           <li>
            Usability test reports
           </li>
           <li>
            Design specification documents
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q5 -->
       <div class="card">
        <div class="card__header" id="heading5">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse5" data-bs-toggle="collapse" type="button">
           What ERP modules do you typically implement?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse5">
         <div class="card__body">
          <ul>
           <li>
            Finance &amp; Accounting
           </li>
           <li>
            Inventory Management
           </li>
           <li>
            Supply Chain Management
           </li>
           <li>
            Human Resources
           </li>
           <li>
            Manufacturing
           </li>
           <li>
            CRM Integration
           </li>
           <li>
            Business Intelligence
           </li>
           <li>
            Project Management
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q6 -->
       <div class="card">
        <div class="card__header" id="heading6">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse6" data-bs-toggle="collapse" type="button">
           What's your UI/UX design process?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq" id="collapse6">
         <div class="card__body">
          <p>
           Our 6-phase design process:
          </p>
          <ol>
           <li>
            <strong>
             Discover:
            </strong>
            Research &amp; requirements
                      gathering
           </li>
           <li>
            <strong>
             Define:
            </strong>
            User personas &amp; journey mapping
           </li>
           <li>
            <strong>
             Design:
            </strong>
            Wireframing &amp; prototyping
           </li>
           <li>
            <strong>
             Develop:
            </strong>
            UI design &amp; interaction
                      patterns
           </li>
           <li>
            <strong>
             Deliver:
            </strong>
            Design handoff &amp;
                      specifications
           </li>
           <li>
            <strong>
             Refine:
            </strong>
            User testing &amp; iteration
           </li>
          </ol>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- RIGHT COLUMN -->
     <div class="col-xl-6 mt-20">
      <div class="accordion faqs faqs--2" id="accordionFaq2">
       <!-- Q7 -->
       <div class="card">
        <div class="card__header" id="heading7">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse7" data-bs-toggle="collapse" type="button">
           What's your development methodology?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse7">
         <div class="card__body">
          <p>
           We use Agile Scrum with:
          </p>
          <ul>
           <li>
            2-week sprints
           </li>
           <li>
            Daily standups
           </li>
           <li>
            Sprint planning &amp; reviews
           </li>
           <li>
            Continuous integration
           </li>
           <li>
            Client demos every sprint
           </li>
           <li>
            Flexible requirement changes
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q8 -->
       <div class="card">
        <div class="card__header" id="heading8">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse8" data-bs-toggle="collapse" type="button">
           What's the typical timeline for projects?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse8">
         <div class="card__body">
          <p>
           Project durations vary by complexity:
          </p>
          <ul>
           <li>
            Automated daily backups with 30-day retention
           </li>
           <li>
            Multi-region redundancy for critical systems
           </li>
           <li>
            Recovery Point Objective (RPO) of 15 minutes
           </li>
           <li>
            Recovery Time Objective (RTO) under 2 hours
           </li>
           <li>
            Regular disaster simulation testing
           </li>
           <li>
            Customizable recovery plans based on business impact
                      analysis
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q9 -->
       <div class="card">
        <div class="card__header" id="heading9">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse9" data-bs-toggle="collapse" type="button">
           Do you provide maintenance services?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse9">
         <div class="card__body">
          <p>
           Yes, we offer three support tiers:
          </p>
          <ul>
           <li>
            All Basic features
           </li>
           <li>
            Performance optimization
           </li>
           <li>
            Phone support
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q10 -->
       <div class="card">
        <div class="card__header" id="heading10">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse10" data-bs-toggle="collapse" type="button">
           Can you integrate with our existing systems?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse10">
         <div class="card__body">
          <p>
           We specialize in integrating with:
          </p>
          <ul class="integration-list">
           <li>
            <i class="fab fa-salesforce">
            </i>
            Salesforce
           </li>
           <li>
            <i class="fab fa-microsoft">
            </i>
            Microsoft Dynamics
           </li>
           <li>
            <i class="fab fa-shopify">
            </i>
            Shopify
           </li>
           <li>
            <i class="fas fa-database">
            </i>
            SQL Databases
           </li>
           <li>
            <i class="fab fa-aws">
            </i>
            AWS Services
           </li>
           <li>
            <i class="fas fa-cogs">
            </i>
            Legacy Systems
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q11 -->
       <div class="card">
        <div class="card__header" id="heading11">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse11" data-bs-toggle="collapse" type="button">
           What's your pricing model?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse11">
         <div class="card__body">
          <p>
           We offer flexible pricing options:
          </p>
          <ul>
           <li>
            <strong>
             Fixed Price:
            </strong>
            For well-defined projects
           </li>
           <li>
            <strong>
             Time &amp; Materials:
            </strong>
            For evolving
                      requirements
           </li>
           <li>
            <strong>
             Dedicated Team:
            </strong>
            For long-term
                      partnerships
           </li>
           <li>
            <strong>
             Retainer Model:
            </strong>
            For ongoing support
           </li>
          </ul>
         </div>
        </div>
       </div>
       <!-- Q12 -->
       <div class="card">
        <div class="card__header" id="heading12">
         <h5 class="mb-0 title">
          <button class="btn btn-link collapsed" data-bs-target="#collapse12" data-bs-toggle="collapse" type="button">
           How do we start a project?
          </button>
         </h5>
        </div>
        <div class="collapse" data-bs-parent="#accordionFaq2" id="collapse12">
         <div class="card__body">
          <ol>
           <li>
            Initial consultation (free)
           </li>
           <li>
            Requirement analysis workshop
           </li>
           <li>
            Proposal &amp; agreement
           </li>
           <li>
            Kickoff meeting
           </li>
           <li>
            Development sprints begin
           </li>
           <li>
            Regular progress updates
           </li>
           <li>
            Final delivery &amp; launch
           </li>
          </ol>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- still have questions -->
    <div class="row">
     <div class="col-xl-12 text-center">
      <div class="faq-wrap pt-45 pb-45 mt-40">
       <p>
        Still have questions?
        <a class="inline-btn" href="contact">
         <i class="fal fa-comments">
         </i>
         <span>
          Contact Our Team
         </span>
        </a>
       </p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- faq area end -->
  <!-- cta area start -->
  <section class="cta__area cta__area--2 cta__area--3 pt-95 pb-95 bg_img text-center" data-background="../assets/images/bg/cta-bg-3.webp">
   <div class="container">
    <div class="row align-items-center">
     <div class="col-xl-6 text-start">
      <div class="section__heading mb-40">
       <h3 class="section__heading--title-small">
        <span class="mr-10">
         //
        </span>
        Ready to transform your business?
       </h3>
       <h2 class="section__heading--title">
        Let's Build Your Digital Solution
        <span>
         .
        </span>
       </h2>
       <div class="section__heading--content mt-20">
        <p>
         Our team of experts is ready to discuss your project
                requirements and create custom web, mobile, or enterprise
                solutions that drive real business results.
        </p>
       </div>
      </div>
     </div>
     <div class="col-xl-6 text-xl-end text-center">
      <a class="site-btn mt-95" href="contact">
       Start Your Project
       <span>
        +
       </span>
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- cta area end -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
 </body>
</html>
