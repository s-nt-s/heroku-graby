#!/bin/bash
set -e

VRS="$1"
if [ -z "$VRS" ]; then
  VRS=$(curl -sS "https://php-download.com/package/j0k3r/graby" | grep "selected=\"selected\"" | cut -d'"' -f2)
fi

URL="https://php-download.com/downloads/j0k3r/graby/${VRS}/j0k3r_graby_${VRS}_require.zip"
wget -O graby.zip "$URL"
unzip -o -q graby.zip 'vendor/*'
rm graby.zip
