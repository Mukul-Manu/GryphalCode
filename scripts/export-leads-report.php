<?php
declare(strict_types=1);

$root = realpath(__DIR__ . '/..');
$leadFile = $root . '/leads_backup.json';
$outFile = $root . '/assets/leads/leads-report.csv';

if (!is_dir($root . '/assets/leads')) {
    mkdir($root . '/assets/leads', 0755, true);
}

$rows = [];
if (file_exists($leadFile)) {
    $rows = json_decode((string) file_get_contents($leadFile), true) ?: [];
}

$fp = fopen($outFile, 'wb');
fputcsv($fp, [
    'timestamp',
    'name',
    'email',
    'phone',
    'company',
    'subject',
    'landing_page',
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_term',
    'utm_content'
]);

foreach ($rows as $r) {
    fputcsv($fp, [
        $r['timestamp'] ?? '',
        $r['name'] ?? '',
        $r['email'] ?? '',
        $r['phone'] ?? '',
        $r['company'] ?? '',
        $r['subject'] ?? '',
        $r['landing_page'] ?? '',
        $r['utm_source'] ?? '',
        $r['utm_medium'] ?? '',
        $r['utm_campaign'] ?? '',
        $r['utm_term'] ?? '',
        $r['utm_content'] ?? ''
    ]);
}
fclose($fp);

echo "Lead report exported to: {$outFile}\n";

