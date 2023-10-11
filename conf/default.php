<?php
/**
 * Options for the iocinclude Plugin
 */
$conf['noheader']      = 0;      // Don't display the header of the inserted section
$conf['firstseconly']  = 0;      // limit entries on main blog page to first section
$conf['showtaglogos']  = 0;      // display image for first tag
$conf['showfooter']    = 0;      // display meta line below blog entries
$conf['showlink']      = 0;      // link headlines of blog entries
$conf['showpermalink'] = 0;      // show permalink below blog entries
$conf['showdate']      = 0;      // show date below blog entries
$conf['showmdate']     = 1;      // show modification date below blog entries
$conf['showuser']      = 0;      // show username below blog entries
$conf['showcomments']  = 0;      // show number of comments below blog entries
$conf['showlinkbacks'] = 0;      // show number of linkbacks below blog entries
$conf['showtags']      = 0;      // show tags below blog entries
$conf['showeditbtn']   = 0;      // show the edit button
$conf['doredirect']    = 1;      // redirect back to original page after an edit
$conf['doindent']      = 1;      // indent included pages relative to the page they get included
$conf['linkonly']      = 0;      // link only to the included pages instead of including the content
$conf['title']        = 0;       // use first header of page in link
$conf['pageexists']   = 0;       // no link if page does not exist
$conf['parlink']      = 1;       // paragraph around link
$conf['safeindex']    = 1;       // prevent indexing of protected metadata
$conf['order']        = 'id';    // order in which the pages are included in the case of multiple pages
$conf['rsort']        = 0;       // reverse sort order
$conf['depth']        = 1;       // maximum depth of namespace includes, 0 for unlimited depth
$conf['readmore']     = 0;       // Show readmore link in case of firstsection only
$conf['debugoutput']  = 0;       // print debug information to debuglog if global allowdebug is enabled
//Setup VIM: ex: et ts=2 :
