#!/usr/bin/perl

use strict;
use warnings;

my $sudo_sessions = `journalctl | grep -c "pam_unix(sudo:session): session opened"`;

chomp $sudo_sessions;

print $sudo_sessions;

