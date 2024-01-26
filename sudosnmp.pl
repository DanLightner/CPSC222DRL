#!/usr/bin/perl
use strict;
use warnings;

my $auth_logs = '/var/log/auth.log'; 

open my $fh, '<', $auth_logs or die "Cannot open $auth_logs: $!";
my $sudo_sessions = 0;

while (<$fh>) {
    $sudo_sessions++ if /pam_unix\(sudo:session\): session opened/;
}

close $fh;
chomp $sudo_sessions;
print "$sudo_sessions";
