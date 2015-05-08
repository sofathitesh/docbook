<?php
/**
 * MediaWiki Docbook extension
 * @file
 * @ingroup Extensions
 * @author Hitesh Sofat
 */

$wgExtensionCredits['specialpage'][]=array(
    'path'=>__FILE__,
    'name'=>'Docbook',
    'version'=>'1.0',
    'url'=>'hiteshsofat.wordpress.com',
    'author'=>array('BRL-CAD'),
);
$dir=dirname(__FILE__)."/";
$wgAutoloadClasses['SpecialDocbook']=$dir."SpecialDocbook.php";
$wgAutoloadClasses['SpecialDocbook_Language']=$dir."SpecialDocbook_Language.php";
$wgAutoloadClasses['SpecialDocbook_Document']=$dir."SpecialDocbook_Document.php";
$wgExtensionMessagesFiles['Docbook']=$dir."Docbook.i18n.php";
$wgExtensionMessagesFiles['DocbookAlias']=$dir."Docbook.alias.php";
$wgSpecialPages['Docbook']="SpecialDocbook";
$wgSpecialPages['Docbook_Language']="SpecialDocbook_Language";
$wgSpecialPages['Docbook_Document']="SpecialDocbook_Document";
$wgSpecialPageGroups['Docbook']="other";
?>






























