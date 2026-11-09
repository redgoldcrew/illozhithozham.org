#!/usr/bin/env bash
# Pre-renders the PHP pages to static HTML for Netlify (no PHP runtime at request time).
set -euo pipefail
OUT=dist
rm -rf "$OUT" && mkdir -p "$OUT"
cp -r css fonts images js revolution favicon.ico "$OUT"/
for f in *.php; do
  case "$f" in header.php|footer.php) continue;; esac
  php "$f" > "$OUT/${f%.php}.html"
done
