<?php
include "config.php";

class SpecialDocbook_Document extends SpecialPage{
    public function __construct(){
        parent::__construct('Docbook_Document');
    }
    public function execute($sub){
        global $wgOut;
        global $wgUser;
        global $wgServer;
        global $wgScriptPath;
        $dbr = wfGetDB(DB_MASTER);
        $dbw = wfGetDB(DB_SLAVE);
        $content = file_get_contents($_GET['paths']);
        $url = explode("html", $_GET['pathtwo']);
        $language = explode("/", $_GET['pathtwo']);
        $get_language = sizeof($language)-1;
/*This code used for solved the problem of path in html content link broken links */
        $newcontent = str_replace("images/", links.$url[2]."/images/", $content);
        $newcontent_two = str_replace("../../books/".$language[$get_language]."/".links.$url[2]."/images/", "../../trunk/share/doc/html/books/".$language[$get_language]."/images/", $newcontent);
        $newcontent_three = str_replace("../../lessons/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/lessons/".$language[$get_language]."/images/", $newcontent_two);
        $newcontent_four = str_replace("../../man5/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/man5/".$language[$get_language]."/images/", $newcontent_three);
        $newcontent_five = str_replace("../../man3/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/man3/".$language[$get_language]."/images/", $newcontent_four);
        $newcontent_six = str_replace("../../man1/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/man1/".$language[$get_language]."/images/", $newcontent_five);
        $newcontent_seven = str_replace("../../mann/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/mann/".$language[$get_language]."/images/", $newcontent_six);
        $newcontent_eight = str_replace("../../articles/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/articles/".$language[$get_language]."/images/", $newcontent_seven);
        $newcontent_nine = str_replace("../../presentations/".$language[$get_language]."/".links.$url[2]."/images/","../../trunk/share/doc/html/presentations/".$language[$get_language]."/images/", $newcontent_eight);
        $wgOut->addHTML($newcontent_nine);
        $wgOut->setPageTitle('All Document');
}
}
?>



























