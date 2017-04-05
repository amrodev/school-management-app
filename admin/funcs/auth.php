<?php 
require_once 'lib/admin.php';
require_once 'lib/Encryption.php';
$_admin = new Admin();
$_enc   = new Encryption();

$adin_id = $_SESSION['AdminID'];
$_SESSION['admin_level'] ;
// 1 super admin
// 2 simple admin
$adminUP  = $_admin->get_UPData('userId',$adin_id);
//users
$adminVeiwUsers   = $adminUP[0]['_view'];
$_SESSION['UsersVeiw'] = $adminVeiwUsers;
$adminAddUsers    = $adminUP[0]['_add'];
$adminEditUsers   = $adminUP[0]['_edit'];
$adminDeleteUsers = $adminUP[0]['_delete'];
//SMS
$adminVeiwSMS   = $adminUP[1]['_view'];
$_SESSION['SMSVeiw'] = $adminVeiwSMS;
$adminAddSMS    = $adminUP[1]['_add'];
$adminEditSMS   = $adminUP[1]['_edit'];
$adminDeleteSMS = $adminUP[1]['_delete'];
//Banners
$adminVeiwBan   = $adminUP[2]['_view'];
$_SESSION['BanVeiw'] = $adminVeiwBan;
$adminAddBan    = $adminUP[2]['_add'];
$adminEditBan   = $adminUP[1]['_edit'];
$adminDeleteBan = $adminUP[2]['_delete'];
//Mailbox
$adminVeiwMail   = $adminUP[3]['_view'];
$_SESSION['MailVeiw'] = $adminVeiwMail;
$adminAddMail    = $adminUP[3]['_add'];
$adminEditMail   = $adminUP[3]['_edit'];
$adminDeleteMail = $adminUP[3]['_delete'];
//Sections
$adminVeiwSec   = $adminUP[4]['_view'];
$_SESSION['SecVeiw'] = $adminVeiwSec;
$adminAddSec    = $adminUP[4]['_add'];
$adminEditSec   = $adminUP[4]['_edit'];
$adminDeleteSec = $adminUP[4]['_delete'];
//FAQ
$adminVeiwFAQ   = $adminUP[5]['_view'];
$_SESSION['FAQVeiw'] = $adminVeiwFAQ;
$adminAddFAQ    = $adminUP[5]['_add'];
$adminEditFAQ   = $adminUP[5]['_edit'];
$adminDeleteFAQ = $adminUP[5]['_delete'];
//Website_Data
$adminVeiwWD   = $adminUP[6]['_view'];
$_SESSION['WDVeiw'] = $adminVeiwWD;
$adminAddWD    = $adminUP[6]['_add'];
$adminEditWD   = $adminUP[6]['_edit'];
$adminDeleteWD = $adminUP[6]['_delete'];
//Jobs
$adminVeiwJob   = $adminUP[7]['_view'];
$_SESSION['JobVeiw'] = $adminVeiwJob;
$adminAddJob    = $adminUP[7]['_add'];
$adminEditJob   = $adminUP[7]['_edit'];
$adminDeleteJob = $adminUP[7]['_delete'];
//Events
$adminVeiwEve   = $adminUP[8]['_view'];
$_SESSION['EveVeiw'] = $adminVeiwEve;
$adminAddEve    = $adminUP[8]['_add'];
$adminEditEve   = $adminUP[8]['_edit'];
$adminDeleteEve = $adminUP[8]['_delete'];
//News
$adminVeiwNews   = $adminUP[9]['_view'];
$_SESSION['NewsVeiw'] = $adminVeiwNews;
$adminAddNews    = $adminUP[9]['_add'];
$adminEditNews   = $adminUP[9]['_edit'];
$adminDeleteNews = $adminUP[9]['_delete'];
//Gallery
$adminVeiwGal   = $adminUP[10]['_view'];
$_SESSION['GalVeiw'] = $adminVeiwGal;
$adminAddGal    = $adminUP[10]['_add'];
$adminEditGal   = $adminUP[10]['_edit'];
$adminDeleteGal = $adminUP[10]['_delete'];
//Videos
$adminVeiwVid   = $adminUP[11]['_view'];
$_SESSION['VidVeiw'] = $adminVeiwVid;
$adminAddVid    = $adminUP[11]['_add'];
$adminEditVid   = $adminUP[11]['_edit'];
$adminDeleteVid = $adminUP[11]['_delete'];
//Reports
$adminVeiwRep   = $adminUP[12]['_view'];
$_SESSION['RepVeiw'] = $adminVeiwRep;
$adminAddRep    = $adminUP[12]['_add'];
$adminEditRep   = $adminUP[12]['_edit'];
$adminDeleteRep = $adminUP[12]['_delete'];
//Settings
$adminVeiwSet   = $adminUP[13]['_view'];
$_SESSION['SetVeiw'] = $adminVeiwSet;
$adminAddSet    = $adminUP[13]['_add'];
$adminEditSet   = $adminUP[13]['_edit'];
$adminDeleteSet = $adminUP[13]['_delete'];


?>