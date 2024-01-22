#!/usr/bin/perl

use strict;
use warning;

my $sudo_count = `journalct1 | grep -c "sudo:session"`;
chomp $sudo_count;
print $sudo_count;

