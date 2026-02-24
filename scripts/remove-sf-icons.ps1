$file = "c:\Users\Artisan\Documents\projects\salmat\blue.html"
$c = [System.IO.File]::ReadAllText($file, [System.Text.Encoding]::UTF8)
$pattern = '\s*<div class="bd-sf-card-ico" aria-hidden="true">.*?</div>'
$c = [regex]::Replace($c, $pattern, '', [System.Text.RegularExpressions.RegexOptions]::Singleline)
[System.IO.File]::WriteAllText($file, $c, [System.Text.Encoding]::UTF8)
Write-Output "Icons removed. Remaining: $(([regex]::Matches($c, 'bd-sf-card-ico')).Count)"
