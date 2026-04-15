param(
  [string]$ProjectRoot = "."
)

$ErrorActionPreference = "Stop"

Write-Host "== GryphalCode security scan ==" -ForegroundColor Cyan

$root = Resolve-Path $ProjectRoot
Write-Host "Project root: $root"

function Write-Section($name) {
  Write-Host ""
  Write-Host "[$name]" -ForegroundColor Yellow
}

Write-Section "Static risk checks"
$hits = @()

$patterns = @(
  @{ Name = "Inline eval usage"; Regex = "eval\(" },
  @{ Name = "Unsafe inline CSP marker"; Regex = "unsafe-inline" },
  @{ Name = "Unsafe eval CSP marker"; Regex = "unsafe-eval" }
)

$files = Get-ChildItem -Path $root -Recurse -File -Include *.php,*.js,*.html,*.htaccess
foreach ($p in $patterns) {
  $match = $files | Select-String -Pattern $p.Regex -SimpleMatch -ErrorAction SilentlyContinue
  if ($match) {
    $hits += [PSCustomObject]@{
      Issue = $p.Name
      Count = $match.Count
    }
  }
}

if ($hits.Count -eq 0) {
  Write-Host "No static pattern hits found." -ForegroundColor Green
} else {
  $hits | Format-Table -AutoSize
}

Write-Section "PHP lint check"
$phpFiles = Get-ChildItem -Path $root -Recurse -File -Filter *.php
foreach ($f in $phpFiles) {
  & php -l $f.FullName | Out-Null
}
Write-Host "PHP lint check passed for $($phpFiles.Count) files." -ForegroundColor Green

Write-Host ""
Write-Host "Security scan complete." -ForegroundColor Cyan

