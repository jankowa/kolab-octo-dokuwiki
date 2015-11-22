<?php



// Dokuwiki URL
// set your domains from a multidomain setup 
// and the corresponding wiki urls here 
$rcmail_config['dokuwiki_urls'] = array(
    "example.org" => "wiki.example.org",
    "example.com" => "dokuwiki.example.com",
    );

// if all your domains have a wiki with the same subdomain
$rcmail_config['dokuwiki_subdomain'] = 'wiki';

// one dokuwiki url
$rcmail_config['dokuwiki_url'] = '/dokuwiki/doku.php';

// authentication exchange secret
$rcmail_config['dokuwiki_secret'] = 'geheim';

