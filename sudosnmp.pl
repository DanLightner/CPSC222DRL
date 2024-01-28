#!/usr/bin/perl
use strict;
use warnings;

<<<<<<< HEAD
my $auth_logs = '/var/log/auth.log';  # Adjust the path if needed
=======
my $auth_logs = '/var/log/auth.log'; 
>>>>>>> c57924c66e6bd76c325d76b577b5d3e7a744c71f

open my $fh, '<', $auth_logs or die "Cannot open $auth_logs: $!";
my $sudo_sessions = 0;

while (<$fh>) {
    $sudo_sessions++ if /pam_unix\(sudo:session\): session opened/;
}

close $fh;
chomp $sudo_sessions;
print "$sudo_sessions";
<<<<<<< HEAD
#check
=======
>>>>>>> c57924c66e6bd76c325d76b577b5d3e7a744c71f
