#!/usr/bin/perl

#   Copyright © 2015  Matthias von Laer
#   email: matthias-vonlaer@web.de

#   All content of this website is Open Game Content; you can redistribute it
#   and/or modify it under the terms of the Open Game Licence which can
#   be found in libera-ludo-permisilo.php

trasercxu("..");

sub trasercxu() {
    my ($dir) = @_;

    opendir DIR,$dir;
    for $file (readdir(DIR)) {
        
        if($file =~ /php$/) {
            legi_dosieron($dir . "/" . $file);
        }
        elsif($file ne "." and $file ne ".."){
            trasercxu($dir . "/" . $file);
        }
    }
    closedir DIR;
}

sub legi_dosieron() {
    my ($indikilo) = @_;
    $elira = $indikilo;
    $elira =~ s/\.\.\///;
    $elira =~ s/\//-/g;
    $elira =~ s/php$/txt/;
    
    print $elira . "\n";

    open DOSIERO, $indikilo or die;
    open my $ELIRA, ">$elira";

    $cxu_php = 0;
    while(<DOSIERO>) {
        s/&times;/x/g;
        s/&nbsp;/ /g;
        s/&frac12;/1\/2/g;
        s/<\/td>/ ; /g;
        s/<\?php.*\?>/ /g;
        s/<[^>]*>/ /g;
        if(/<\?php/) {
            $cxu_php = 1;
        }
        if(/\?>/) {
            $cxu_php = 0;
            s/\?>//g;
        }
        if(!$cxu_php) {
            print $ELIRA $_ . "\n";
        }
    }

    close DOSIERO;
    close $ELIRA;
}
