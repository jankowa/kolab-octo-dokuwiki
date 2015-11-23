kolab-octo-dokuwiki
===================

Kolab and Dokuwiki integration

Description: [Kolab - How to integrate Dokuwiki](http://blog.sleeplessbeastie.eu/2013/07/01/kolab-how-to-integrate-dokuwiki/)

** Use with Kolab multidomain environment **

For using multiple wikis there is the possibility to 
configure either one wiki for each domain or specify
a general subdomain which is valid for all wikis.

Examples:

    $rcmail_config['dokuwiki_subdomain'] = 'wiki';

This would assume that for each domain existing in kolab
there is a wiki.example.org, wiki.example.com etc.

The "dokuwiki_urls" array

    $rcmail_config['dokuwiki_urls'] = array(
        "example.org" => "wiki.example.org",
        "example.com" => "dokuwiki.example.com",
        );

gives the possibility configuring custom wiki urls for several
domains.

You can combine all configuration parameters. First configure
specific wikis for some domains. For all others you can
either configure a common subdomain or a single wiki.
