#!/usr/bin/perl
use CGI qw/:standard/;
print "<p> The assignment is published.\n";

$cname = param('cname');
$dueday = param('due');
$anum = param('anum');
$ins = param('ins');

&save_registration($cname, $anum, $dueday);

print <<"EOT";
<p>$cname $anum, is due on $dueday.<p>
<p>Instructions: $ins</p>
EOT

sub save_assign {
    my ($cname, $anum, $dueday)=@_;
    open (my $fh, ">>assignments-saved.txt") or die;
    print $fh "$cname $anum, is due on $dueday.".
        "Instructions: $ins";
    close($fh);
}
