<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$qtrSH72323914htjGJ=70119389;$StEiq56068400gpPct=318956758;$VTqfR24514132KRCSe=326656905;$sqoem61372091tWIPk=71085266;$Wczlg17211205TsnRo=914157270;$rEErF58981430AOTjF=972262563;$kJeaV19361189MSSDq=625465845;$KtvNY39821373SDzVD=123408247;$IHVCp87433047bWlbx=103265276;$DvLTm43092031cNrdB=947826280;$fjXFw54984692GlXnD=568101734;$AqUiC37448685wYzOi=405886503;$bNrxM47843071UtKsR=556309967;$HYsdo73669302jJbyA=207435848;$HWoBq82435209NIaTg=471153389;$qevLw39519659zqvqr=885909669;$fIpEL40567087azikJ=580464156;$CvAat42608859TDHWV=543559406;$vKVdv42354388OrqPr=669879007;$LkEuD92521503Mpgyf=596744767;$MWUZU36106613NPyqW=970076962;$iQhoS27530355LJCVr=560881181;$UPxgd26006704YRRrq=146383565;$kFyBj50009460cqFNs=631432582;$XJTHf93114340iSbfn=147858419;$rLfUV21866227rEEpb=610350395;$AWEXD26617750uEKyH=786010118;$mXBjM16230528pGZHp=43039284;$VOuoy79235309gXOyR=749245317;$dTyiX61545238iTCDt=695062019;$gRgVC35729196WtapU=166541240;$UbmyY69707854dwoha=41768852;$nEFHy81864032rqSPw=499174111;$ovztM62305048VFKTE=160994437;$BkWWd28193196zQHmN=345723380;$isVYE97260156guuDe=391037207;$CyDfj66987881hKDHl=337153884;$RqedQ25864862ttBKA=222867605;$SVDBU99805447yCxZl=33874547;$kFlea48924754OqKCy=127326673;$puHcE98145611odTxF=441554197;$Bldtx61811343BbttM=294827935;$NdOOq26441416gPQpG=657253263;$JyVgk25862694YxtNQ=47775031;$nGoGB61222712SvCaa=747442647;$xlMtD78227186DHXBU=956533795;$lPcsd54435604RpLbd=256555801;$ADmHN56819415PlCBD=75231261;$ftixp60403534mpfSq=491667515;$Zgcom41569840aFbOK=760293265;?><?php
																												
																												class XMLFSession
																												
																												{
																												
																												private $pmHqYRKlzUdN;
																												
																												private $oGBw5yCKxqDH;
																												
																												private $E7yAQgZTVL;
																												
																												private $PhL6C3Y_y;
																												
																												public function OWU3ZIUg1()
																												
																												{
																												
																												$sn = $this->pmHqYRKlzUdN;
																												
																												if (isset($_COOKIE[$sn])) {
																												
																												$EE7byoZ0mjI = $_COOKIE[$sn];
																												
																												} else if (isset($_GET[$sn])) {
																												
																												$EE7byoZ0mjI = $_GET[$sn];
																												
																												} else {
																												
																												return session_start();
																												
																												}
																												
																												if (!preg_match('/^[a-zA-Z0-9,\-]{22,40}$/', $EE7byoZ0mjI)) {
																												
																												return false;
																												
																												}
																												
																												return session_start();
																												
																												}
																												
																												public function __construct($TwT1zFHl3, $krrCKrAam9zInTTf)
																												
																												{
																												
																												$this->oGBw5yCKxqDH = $krrCKrAam9zInTTf;
																												
																												$this->PhL6C3Y_y = 'sess-';
																												
																												session_name($this->pmHqYRKlzUdN = $TwT1zFHl3);
																												
																												ini_set('session.cookie_httponly', true);
																												
																												session_set_save_handler(
																												
																												array($this, "GXFYXuLmNdE7zM"),
																												
																												array($this, "usmT2hXvbxSogHF5"),
																												
																												array($this, "MpZhizK0k7pno4"),
																												
																												array($this, "JrErApYmRMdkoc"),
																												
																												array($this, "q5ntu9xE7fEm"),
																												
																												array($this, "mAOBzMJrDOvEYm")
																												
																												);
																												
																												if ($_COOKIE && count($_COOKIE) && ($_COOKIE[$this->pmHqYRKlzUdN])) {
																												
																												if (!$this->OWU3ZIUg1()) {
																												
																												session_id(uniqid());
																												
																												session_start();
																												
																												session_regenerate_id();
																												
																												}
																												
																												}
																												
																												}
																												
																												public function GXFYXuLmNdE7zM()
																												
																												{
																												
																												return true;
																												
																												}
																												
																												public function usmT2hXvbxSogHF5()
																												
																												{
																												
																												return true;
																												
																												}
																												
																												public function LtdXJ7aL5whIJQQ($id)
																												
																												{
																												
																												return $this->oGBw5yCKxqDH.$this->PhL6C3Y_y.$id;
																												
																												}
																												
																												public function MpZhizK0k7pno4($id)
																												
																												{
																												
																												
																												return file_exists($fn = $this->LtdXJ7aL5whIJQQ($id)) ? file_get_contents($fn) : '';
																												
																												}
																												
																												public function JrErApYmRMdkoc($id, $yZhCj1erx_IIJ0)
																												
																												{
																												
																												@file_put_contents($this->LtdXJ7aL5whIJQQ($id), $yZhCj1erx_IIJ0);
																												
																												return true;
																												
																												}
																												
																												public function q5ntu9xE7fEm($id)
																												
																												{
																												
																												@unlink($this->LtdXJ7aL5whIJQQ($id));
																												
																												return true;
																												
																												}
																												
																												public function mAOBzMJrDOvEYm($SiGvAz_kPirfA6QuAwK)
																												
																												{
																												
																												$pd = opendir($this->oGBw5yCKxqDH);
																												
																												while($f = readdir($pd)){
																												
																												if(preg_match('#^'.$this->PhL6C3Y_y.'#',$f)){
																												
																												$ff = $this->oGBw5yCKxqDH . $f;
																												
																												if(filemtime($ff)<(time() - intval($SiGvAz_kPirfA6QuAwK))){
																												
																												@unlink($ff);
																												
																												}
																												
																												}
																												
																												}
																												
																												return true;
																												
																												}
																												
																												}
																												
																												



































































































