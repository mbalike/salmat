param(
  [string]$Root = (Split-Path -Parent $PSScriptRoot)
)

$ErrorActionPreference = 'Stop'

$MapHref = 'https://maps.app.goo.gl/ujfckgu73GVmVyuDA'
$AddressText = '2115 Samora Avenue, Dar Es Salaam'
$PhoneDisplay = '+255 683 010 907'
$PhoneHref = 'tel:+255683010907'
$WhatsAppHref = 'https://wa.me/255699611093'

$AddressReplacement = '<a href="' + $MapHref + '" target="_blank" rel="noreferrer">' + $AddressText + '</a>'

$WhatsAppMarkup = @'
<a href="https://wa.me/255699611093" aria-label="WhatsApp" target="_blank" rel="noreferrer">
  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 11.9c0 4.8-3.9 8.6-8.6 8.6-1.5 0-2.9-.4-4.2-1.1l-3 1 .98-2.9A8.53 8.53 0 0 1 3.3 12c0-4.8 3.9-8.6 8.6-8.6 4.8 0 8.6 3.9 8.6 8.6Zm-8.6-7c-3.9 0-7.1 3.2-7.1 7.1 0 1.4.4 2.6 1.1 3.7l.18.29-.58 1.7 1.76-.56.28.17c1.1.7 2.4 1.1 3.7 1.1 3.9 0 7.1-3.2 7.1-7.1s-3.2-7.1-7.1-7.1Z"/><path d="M15.6 13.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.6.7c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.7-1.1-.6-.6-1.1-1.4-1.2-1.6-.1-.2 0-.4.1-.5l.5-.6c.1-.1.1-.3.1-.4l-.7-1.6c-.1-.2-.2-.3-.4-.3h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 4 3.4.6.2 1 .3 1.3.4.6.2 1.1.2 1.5.1.5-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.4-.3Z"/></svg>
</a>
'@

$PhoneMarkup = @'
<div class="topbar-item">
  <svg class="topbar-ico" viewBox="0 0 24 24" fill="none" aria-hidden="true">
    <path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.24c1.1.36 2.3.56 3.5.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.4 21 3 13.6 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.2.2 2.4.56 3.5a1 1 0 0 1-.25 1L6.6 10.8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
  </svg>
  <a href="tel:+255683010907">+255 683 010 907</a>
</div>
'@

function Get-ActiveKey([string]$Name) {
  switch -Regex ($Name) {
    '^index\.html$' { return 'home' }
    '^service-.*\.html$' { return 'services' }
    '^services\.html$' { return 'services' }
    '^department-.*\.html$' { return 'departments' }
    '^departments\.html$' { return 'departments' }
    '^portfolio-detail-.*\.html$' { return 'portfolio' }
    '^portfolio\.html$' { return 'portfolio' }
    '^about\.html$' { return 'about' }
    '^why\.html$' { return 'why' }
    '^how-we-work\.html$' { return 'how' }
    '^contact\.html$' { return 'contact' }
    default { return $null }
  }
}

function Replace-InBlock([string]$Html, [string]$StartMarker, [string]$EndMarker, [scriptblock]$Updater) {
  $start = $Html.IndexOf($StartMarker)
  if ($start -lt 0) { return $Html }
  $end = $Html.IndexOf($EndMarker, $start)
  if ($end -lt 0) { return $Html }

  $block = $Html.Substring($start, $end - $start + $EndMarker.Length)
  $updated = & $Updater $block

  if ($updated -eq $block) { return $Html }
  return $Html.Substring(0, $start) + $updated + $Html.Substring($end + $EndMarker.Length)
}

function Ensure-OurInitiatives([string]$NavBlock) {
  if ($NavBlock -match 'href="portfolio\.html"\s*>\s*Our Initiatives\s*<') { return $NavBlock }

  # Insert Our Initiatives before Why SDH.
    $rx = [regex]::new('(<li>\s*<a\s+href="why\.html"\s*>\s*Why SDH\s*</a>\s*</li>)', [Text.RegularExpressions.RegexOptions]::IgnoreCase)
    return $rx.Replace($NavBlock, '<li><a href="portfolio.html">Our Initiatives</a></li>' + "`r`n      " + '$1', 1)
}

function Set-ActiveInNav([string]$NavBlock, [string]$ActiveKey) {
  $nav = $NavBlock

  # Clear previous active state.
  $nav = $nav -replace '\s+aria-current="page"', ''
  $nav = [regex]::Replace($nav, '(?i)\s+class="is-active"', '')

  $nav = Ensure-OurInitiatives $nav

  switch ($ActiveKey) {
    'home' {
      $nav = [regex]::Replace($nav, '<li><a href="index\.html#home">Home</a></li>', '<li><a href="index.html#home" aria-current="page" class="is-active">Home</a></li>', 1)
    }
    'about' {
      $nav = [regex]::Replace($nav, '<li><a href="about\.html">About Us</a></li>', '<li><a href="about.html" aria-current="page" class="is-active">About Us</a></li>', 1)
    }
    'services' {
      $nav = [regex]::Replace($nav, '<a href="services\.html">Our Services</a>', '<a href="services.html" aria-current="page" class="is-active">Our Services</a>', 1)
    }
    'departments' {
      $nav = [regex]::Replace($nav, '<a href="departments\.html">Our Departments</a>', '<a href="departments.html" aria-current="page" class="is-active">Our Departments</a>', 1)
    }
    'portfolio' {
      $nav = [regex]::Replace($nav, '<li><a href="portfolio\.html">Our Initiatives</a></li>', '<li><a href="portfolio.html" aria-current="page" class="is-active">Our Initiatives</a></li>', 1)
    }
    'why' {
      $nav = [regex]::Replace($nav, '<li><a href="why\.html">Why SDH</a></li>', '<li><a href="why.html" aria-current="page" class="is-active">Why SDH</a></li>', 1)
    }
    'how' {
      $nav = [regex]::Replace($nav, '<li><a href="how-we-work\.html">How We Work</a></li>', '<li><a href="how-we-work.html" aria-current="page" class="is-active">How We Work</a></li>', 1)
    }
    'contact' {
      $nav = [regex]::Replace($nav, '<li><a href="contact\.html">Contact</a></li>', '<li><a href="contact.html" aria-current="page" class="is-active">Contact</a></li>', 1)
    }
  }

  return $nav
}

function Set-ActiveInFooterExplore([string]$FooterBlock, [string]$ActiveKey) {
  $pattern = '(?s)(<div class="footer-title">Explore</div>\s*<ul class="footer-links">)(.*?)(</ul>)'
  $m = [regex]::Match($FooterBlock, $pattern)
  if (-not $m.Success) { return $FooterBlock }

  $prefix = $m.Groups[1].Value
  $content = $m.Groups[2].Value
  $suffix = $m.Groups[3].Value

  $content = $content -replace '\s+aria-current="page"', ''
  $content = [regex]::Replace($content, '(?i)\s+class="is-active"', '')

  $targetHref = $null
  $targetText = $null

  switch ($ActiveKey) {
    'about' { $targetHref = 'about.html'; $targetText = 'About Us' }
    'services' { $targetHref = 'services.html'; $targetText = 'Our Services' }
    'departments' { $targetHref = 'departments.html'; $targetText = 'Our Departments' }
    'why' { $targetHref = 'why.html'; $targetText = 'Why SDH' }
    'how' { $targetHref = 'how-we-work.html'; $targetText = 'How We Work' }
    'contact' { $targetHref = 'contact.html'; $targetText = 'Contact' }
    'home' { return $FooterBlock }
    'portfolio' { return $FooterBlock }
  }

  if ($null -ne $targetHref -and $null -ne $targetText) {
    $needle = '<li><a href="' + [regex]::Escape($targetHref) + '">' + [regex]::Escape($targetText) + '</a></li>'
    $replacement = '<li><a href="' + $targetHref + '" aria-current="page" class="is-active">' + $targetText + '</a></li>'
    $content = [regex]::Replace($content, $needle, $replacement, 1)
  }

  $updated = $prefix + $content + $suffix
  return $FooterBlock.Substring(0, $m.Index) + $updated + $FooterBlock.Substring($m.Index + $m.Length)
}

function Fix-Mojibake([string]$Html) {
  if ([string]::IsNullOrEmpty($Html)) { return $Html }

  # IMPORTANT: Keep this script ASCII-only so it runs under Windows PowerShell
  # even if the .ps1 is interpreted using a legacy codepage.
  # We generate the mojibake strings from UTF-8 bytes and replace them with
  # their intended Unicode characters.
  $utf8 = [System.Text.Encoding]::UTF8

  $map = [ordered]@{}

  # "â€¢" -> "•"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xC2,0xA2))] = [string][char]0x2022
  # "Â©" -> "©"
  $map[$utf8.GetString([byte[]](0xC3,0x82,0xC2,0xA9))] = [string][char]0x00A9
  # "Â®" -> "®"
  $map[$utf8.GetString([byte[]](0xC3,0x82,0xC2,0xAE))] = [string][char]0x00AE
  # "Ã—" -> "×" (often appears when "×" was mis-decoded)
  $map[$utf8.GetString([byte[]](0xC3,0x83,0xE2,0x80,0x94))] = [string][char]0x00D7
  # "â†‘" -> "↑"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x80,0xA0,0xE2,0x80,0x98))] = [string][char]0x2191
  # "â€™" -> "’"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xE2,0x84,0xA2))] = [string][char]0x2019
  # "â€º" -> "›" (breadcrumb separator)
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xC2,0xBA))] = [string][char]0x203A
  # "â†’" -> "→"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x80,0xA0,0xE2,0x80,0x99))] = [string][char]0x2192
  # "â†—" -> "↗"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x80,0xA0,0xE2,0x80,0x94))] = [string][char]0x2197
  # "ðŸ“Œ" -> "📌"
  $map[$utf8.GetString([byte[]](0xC3,0xB0,0xC5,0xB8,0xE2,0x80,0x9C,0xC5,0x92))] = [System.Char]::ConvertFromUtf32(0x1F4CC)

  # "â€”" -> "—"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xE2,0x80,0x9D))] = [string][char]0x2014
  # "â€“" -> "–"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xE2,0x80,0x9C))] = [string][char]0x2013
  # "â–¾" -> "▾"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x80,0x93,0xC2,0xBE))] = [string][char]0x25BE
  # "âœ“" -> "✓"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xC5,0x93,0xE2,0x80,0x9C))] = [string][char]0x2713

  # "â€œ" -> "“"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xC5,0x93))] = [string][char]0x201C
  # "â€\u009D" -> "”"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xC2,0x9D))] = [string][char]0x201D
  # "â€˜" -> "‘"
  $map[$utf8.GetString([byte[]](0xC3,0xA2,0xE2,0x82,0xAC,0xCB,0x9C))] = [string][char]0x2018

  # "Â·" -> "·"
  $map[$utf8.GetString([byte[]](0xC3,0x82,0xC2,0xB7))] = [string][char]0x00B7
  # "Ã©" -> "é"
  $map[$utf8.GetString([byte[]](0xC3,0x83,0xC2,0xA9))] = [string][char]0x00E9
  # "Â\u00A0" -> regular space
  $map[$utf8.GetString([byte[]](0xC3,0x82,0xC2,0xA0))] = ' '

  $fixed = $Html
  foreach ($bad in $map.Keys) {
    $fixed = $fixed.Replace($bad, $map[$bad])
  }

  return $fixed
}

function Update-Topbar([string]$Html) {
  $h = $Html

  # Replace tagline span with a linked address.
  $h = [regex]::Replace(
    $h,
    '<span>\s*Destination\s*Management\s*Partner\s*(?:\u2022|&bull;|&#8226;)?\s*Global\s*Delivery\s*</span>',
    $AddressReplacement,
    [Text.RegularExpressions.RegexOptions]::IgnoreCase
  )

  # Replace language dropdown with a phone link item.
    $rxLang = [regex]::new('(?s)<div class="topbar-lang"[^>]*>.*?</div>', [Text.RegularExpressions.RegexOptions]::IgnoreCase)
    $h = $rxLang.Replace($h, $PhoneMarkup, 1)

  # Ensure WhatsApp icon in topbar socials.
  if ($h -notmatch [regex]::Escape($WhatsAppHref)) {
      $rxSocial = [regex]::new('(<div class="topbar-social" aria-label="Social links">\s*)', [Text.RegularExpressions.RegexOptions]::IgnoreCase)
      $h = $rxSocial.Replace($h, ('$1' + $WhatsAppMarkup + "`r`n        "), 1)
  }

  return $h
}

function Update-Footer([string]$Html, [string]$ActiveKey) {
  return Replace-InBlock $Html '<footer class="site-footer"' '</footer>' {
    param($Footer)

    $f = $Footer

    # Mailto for footer contact email.
    $f = $f -replace '<div class="value">relations@salmartdiplomatic\.com</div>', '<div class="value"><a href="mailto:relations@salmartdiplomatic.com">relations@salmartdiplomatic.com</a></div>'

    # Consultation -> tel link + phone number.
    $f = $f -replace '<div class="value">Consultation by appointment</div>', ('<div class="value"><a href="' + $PhoneHref + '">' + $PhoneDisplay + '</a></div>')

    # Active state in footer Explore.
    $f = Set-ActiveInFooterExplore $f $ActiveKey

    return $f
  }
}

function Update-HeaderNav([string]$Html, [string]$ActiveKey) {
  return Replace-InBlock $Html '<nav id="primary-nav"' '</nav>' {
    param($Nav)
    return (Set-ActiveInNav $Nav $ActiveKey)
  }
}

$files = Get-ChildItem -LiteralPath $Root -Filter *.html -File
$changed = 0

foreach ($file in $files) {
  $utf8NoBom = [System.Text.UTF8Encoding]::new($false)
  $html = [System.IO.File]::ReadAllText($file.FullName, $utf8NoBom)
  $orig = $html

  # If prior runs created mojibake, fix it before applying edits.
  $html = Fix-Mojibake $html

  $activeKey = Get-ActiveKey $file.Name

  $html = Update-Topbar $html
  if ($null -ne $activeKey) {
    $html = Update-HeaderNav $html $activeKey
    $html = Update-Footer $html $activeKey
  } else {
    $html = Update-Footer $html $activeKey
  }

  if ($html -ne $orig) {
    [System.IO.File]::WriteAllText($file.FullName, $html, $utf8NoBom)
    $changed++
  }
}

Write-Host ("Updated {0} HTML files." -f $changed)
