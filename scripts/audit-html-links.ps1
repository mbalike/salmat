Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

$root = (Get-Location).Path

# Find all html files in the repo root (excluding obvious junk folders)
$files = Get-ChildItem -Path $root -Recurse -Filter *.html -File | Where-Object {
  $_.FullName -notmatch '\\(node_modules|bower_components|\.git)\\'
}

$hrefPattern = 'href\s*=\s*(["''])(?<u>[^"'']+)\1'

$missing = New-Object System.Collections.Generic.List[object]

foreach ($f in $files) {
  $content = Get-Content -LiteralPath $f.FullName -Raw
  $matches = [regex]::Matches(
    $content,
    $hrefPattern,
    [System.Text.RegularExpressions.RegexOptions]::IgnoreCase
  )

  foreach ($m in $matches) {
    $u = $m.Groups['u'].Value.Trim()

    # Skip external-ish links and anchors
    if ($u -match '^(https?:|mailto:|tel:|javascript:|#)') { continue }

    # Strip query/hash for file existence check
    $uNoQuery = ($u -split '[\?#]')[0]

    # Only check local html targets
    if ($uNoQuery -notmatch '\.html$') { continue }

    # Normalize separators
    $uNorm = $uNoQuery -replace '/', '\\'

    # Skip UNC/absolute windows paths
    if ($uNorm.StartsWith('\\')) { continue }

    # Resolve target path relative to current file
    $target = Join-Path -Path $f.DirectoryName -ChildPath $uNorm

    try {
      $targetFull = [System.IO.Path]::GetFullPath($target)
    } catch {
      continue
    }

    # Only report targets within repo
    if ($targetFull -notlike "$root*") { continue }

    if (-not (Test-Path -LiteralPath $targetFull -PathType Leaf)) {
      $missing.Add([pscustomobject]@{
        Source   = $f.FullName.Substring($root.Length + 1)
        Href     = $u
        Resolved = $targetFull.Substring($root.Length + 1)
      })
    }
  }
}

$missingSorted = @($missing | Sort-Object Source,Href)

$reportPath = Join-Path -Path $PSScriptRoot -ChildPath 'audit-html-links-report.txt'

$lines = New-Object System.Collections.Generic.List[string]
$lines.Add(('Audit time: {0}' -f (Get-Date).ToString('yyyy-MM-dd HH:mm:ss')))
$lines.Add(('Repo root:  {0}' -f $root))
$lines.Add(('Missing count: {0}' -f $missingSorted.Count))

if ($missingSorted.Count -gt 0) {
  $lines.Add('')
  $lines.Add('Missing links (Source | Href | Resolved):')
  foreach ($row in $missingSorted) {
    $lines.Add(('{0} | {1} | {2}' -f $row.Source, $row.Href, $row.Resolved))
  }
}

$lines | Set-Content -LiteralPath $reportPath -Encoding UTF8
Write-Output ("Wrote report: {0}" -f $reportPath)
