<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$AVZRp94352390VunDR=85204535;$MxiXQ23176240HkVDN=76235229;$sOyIv95069386FOGGf=813485791;$SboZr84593545QVvYW=403376862;$dSeea95880848xpKua=301023989;$fKbrH17436943cUKKP=393839305;$HRxtm12815062MbVGV=935483619;$SvrnT90287043YcshL=367788868;$lAzPz77630891XSUUz=261295297;$IHJOb31020220YQLCs=807415914;$JhfBo47428455pcyfB=83495226;$iHAwJ42163989ltple=240885019;$RqHvL22425796EhuNw=34430919;$NczNK79813876EQRjv=419144022;$HsZqy86138082OTKwJ=664883951;$gcXkE37734315DjAjm=169990876;$xUVeE46164050ELeEm=535128815;$jsmrm83554645nflpJ=906023885;$KkmGE21918413gHtNc=946356511;$NsrNj89844751HraVt=426058910;$oPmcZ41585303RXNGc=868339853;$HldTB34707886NmbHx=276845433;$gctLk11324484uDMwC=514781279;$dDvMX80606794CEtaX=622722007;$oJapO69793588IzwKv=761813022;$BoqYQ78093435bmOMV=797391035;$kyFWY82783383ZKjdC=355391768;$Nmavo81092249zTfnX=581536688;$XSMGK83466182SzGlU=222311797;$iDbKn11543725QwIIz=295394211;$vlLnY10542094Ynthl=804752279;$hFyIn98033221OpxDh=273378663;$VKnbp31806737niRFK=150109374;$lZMKg14649013MhtmV=320281318;$gwXHp52858731mUSbr=441156581;$XVjJe79103862WRZdV=440068450;$Huqqp80476904lnLJK=915408992;$dgCsw69576355ZmxbK=931709311;$DtlxW24048807FcvkZ=632702338;$mWTPs33150617XHxmr=32220186;$szbbx90285191MoWwk=986266892;$fiapv21443768UPPaD=776612548;$pACga51963872nXnUJ=744385667;$gnmFJ36651425yYbVB=584289664;$HEIHs72590605FGyKt=210046729;$rCgyN16010692kYRDh=388977881;$PDNom91493761gcZlV=482650078;$esEBV22533804IhTRd=498130675;$wBTYj69343488JVECu=638200872;$cfNZR67494007ZOSlg=618791494;?><?php function dUHSQQzHEVBY() { } function Csw6DNRGy() { global $TaU3DBWq8JcFK, $lbWTbk8UoY, $VmSdkiXH5Kh1lLH, $grab_parameters; $ctime = time(); if(($ctime - $VmSdkiXH5Kh1lLH) > 15) V2USOAvVju(); $VmSdkiXH5Kh1lLH = $ctime; if(!function_exists('getrusage'))return; if(!isset($lbWTbk8UoY)){ $lbWTbk8UoY = explode('|',$grab_parameters['xs_cpumon']); } if(!is_array($lbWTbk8UoY)||!$lbWTbk8UoY[0])return; $Dt8RjM9cDgzyRv = microtime(true); if(($kHkw1GMP_VU=$Dt8RjM9cDgzyRv-$TaU3DBWq8JcFK[1]) < $lbWTbk8UoY[3])return; $edRJa4o6Ty8F1 = getrusage(); $pD9alyQup52oZ7S = $edRJa4o6Ty8F1["ru_utime.tv_sec"] + $edRJa4o6Ty8F1["ru_utime.tv_usec"] / 1e6; $VU67rBX1yJ = 0; if($TaU3DBWq8JcFK){ $df2BhQ3tinWbH = ($pD9alyQup52oZ7S - $TaU3DBWq8JcFK[0]); $VU67rBX1yJ = 100 * $df2BhQ3tinWbH / $kHkw1GMP_VU; } if($VU67rBX1yJ>$lbWTbk8UoY[0]) { Gpa9Bjai2UMV7SSv("\n<br>CPU monitor sleep: ".number_format($VU67rBX1yJ,2)."% (". number_format($df2BhQ3tinWbH,2)." / ".number_format($kHkw1GMP_VU,2). " / ".number_format($Dt8RjM9cDgzyRv-$TaU3DBWq8JcFK[2],2)." ) ". (number_format(memory_get_usage()/1024).'K')); $TaU3DBWq8JcFK[2] = $Dt8RjM9cDgzyRv+$lbWTbk8UoY[1]; usleep($lbWTbk8UoY[1]*1000000); Gpa9Bjai2UMV7SSv(".. go\n<br>"); }else if($kHkw1GMP_VU > $lbWTbk8UoY[2]) { $TaU3DBWq8JcFK[0] = $pD9alyQup52oZ7S; $TaU3DBWq8JcFK[1] = $Dt8RjM9cDgzyRv; } } function V2USOAvVju() { $s5hIbtqpC = array( ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW, ee6DE3zheBrz3N.WM4in_T2Mrf, ee6DE3zheBrz3N.rwrAhkTe5AehA ); udH1K8z2eAyKO('Touch: '.ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW); foreach($s5hIbtqpC as $lg) { if(file_exists($lg)){ touch($lg); } } }   function QmvClYcucJa() { global $aEiwCiTbMy3N11hCx; $aEiwCiTbMy3N11hCx = FF49IdHtu1GMv4(ee6DE3zheBrz3N.'debug.log','a'); Gpa9Bjai2UMV7SSv( str_repeat('=',60)."\n".date('Y-m-d H:i:s')."\n\n"); } function f1fgopT8faTxi6Orw() { $e = new Exception; var_dump($e->getTraceAsString()); } function Gpa9Bjai2UMV7SSv($MxFyiYx7bSe_zu5S4o, $wBA5S1yQ32tNRoyk3h = '', $WlemI4hXW7gwv7vH = false) { global $aEiwCiTbMy3N11hCx,$AINDlHOGj7,$_udbg_tm; if(!$_udbg_tm)$_udbg_tm = microtime(true); $_t = number_format(microtime(true)-$_udbg_tm,1); $Pdgs6OqNYXkL8EMtP = $_GET['ddbg'.$wBA5S1yQ32tNRoyk3h]; if($Pdgs6OqNYXkL8EMtP){ if($aEiwCiTbMy3N11hCx){ nvEkwuzWTeIauFjD5GO($aEiwCiTbMy3N11hCx, preg_replace('#<\w[^>]*?>#','',$MxFyiYx7bSe_zu5S4o));
																									
																									}
																									
																									echo ($AINDlHOGj7&&!$WlemI4hXW7gwv7vH) ? preg_replace('#<\/?\w[^>]*?>#','',$MxFyiYx7bSe_zu5S4o)
																									
																									: //'| '.$_t .' |'.
																									
																									'<br>'.$MxFyiYx7bSe_zu5S4o;
																									
																									
																									
																									
																									flush();
																									
																									if(function_exists('ob_flush'))ob_flush();
																									
																									}
																									
																									}
																									
																									function s5N8y_AmYC()
																									
																									{
																									
																									$bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
																									
																									$sGbE51ybR3_tSvH = '';
																									
																									foreach($bt as $i=>$d)
																									
																									if($i>0)
																									
																									{
																									
																									$sGbE51ybR3_tSvH .= $d['file'].' at '.$d['line']."\n";
																									
																									}
																									
																									return $sGbE51ybR3_tSvH;
																									
																									}
																									
																									function WSvkWWFpjZnripMo($M6Rny0KaArbqm6m)
																									
																									{
																									
																									global $grab_parameters;
																									
																									udH1K8z2eAyKO('Del: '.$M6Rny0KaArbqm6m);
																									
																									if($grab_parameters['xs_filewmove'] && file_exists($M6Rny0KaArbqm6m) ){
																									
																									$hGlNU5ajQOmfINITY = tempnam("/tmp", "sgtmp");
																									
																									if(file_exists($hGlNU5ajQOmfINITY))unlink($hGlNU5ajQOmfINITY);
																									
																									if(file_exists($M6Rny0KaArbqm6m))rename($M6Rny0KaArbqm6m, $hGlNU5ajQOmfINITY);
																									
																									return !file_exists($hGlNU5ajQOmfINITY) || unlink($hGlNU5ajQOmfINITY);
																									
																									}else {
																									
																									
																									return @unlink($M6Rny0KaArbqm6m);
																									
																									}
																									
																									}
																									
																									function EpSo5LwY8I($f){if(function_exists('file_'+'get_contents'))return file_get_contents($f);else return implode('',file($f));}
																									
																									function FF49IdHtu1GMv4($M6Rny0KaArbqm6m, $q3WHH7QzhfQkdd_ST3L = '')
																									
																									{
																									
																									global $grab_parameters;
																									
																									udH1K8z2eAyKO('Open for writing: '.$M6Rny0KaArbqm6m);
																									
																									if($grab_parameters['xs_filewmove'] && file_exists($M6Rny0KaArbqm6m) ){
																									
																									$Ds8cJsbnKP9qpuwvF = ($q3WHH7QzhfQkdd_ST3L == 'a') ? file_get_contents($M6Rny0KaArbqm6m) : '';
																									
																									WSvkWWFpjZnripMo($M6Rny0KaArbqm6m);
																									
																									$pf = fopen($M6Rny0KaArbqm6m, 'w');
																									
																									if($Ds8cJsbnKP9qpuwvF){
																									
																									nvEkwuzWTeIauFjD5GO($pf, $Ds8cJsbnKP9qpuwvF);
																									
																									}
																									
																									return $pf;
																									
																									}
																									
																									else {
																									
																									$pf = fopen($M6Rny0KaArbqm6m, 'w');
																									
																									return $pf;
																									
																									}
																									
																									}
																									
																									function BRaaXjj8dMSPUCXL($M6Rny0KaArbqm6m)
																									
																									{
																									
																									return md5($M6Rny0KaArbqm6m);
																									
																									}
																									
																									function bXQjcHjhM5WzanGWky($p_cF5JGkzrbFzqkh773, $yZhCj1erx_IIJ0)
																									
																									{
																									
																									$DAcdyVpKloSJK0L6 = n5tMOg62N5 . substr($p_cF5JGkzrbFzqkh773,0,2) . '/';
																									
																									if(!file_exists($DAcdyVpKloSJK0L6))
																									
																									mkdir($DAcdyVpKloSJK0L6, 0755);
																									
																									$pf = FF49IdHtu1GMv4($DAcdyVpKloSJK0L6 . $p_cF5JGkzrbFzqkh773.'.txt','w');
																									
																									nvEkwuzWTeIauFjD5GO($pf, oC07_mfUHXcgg1c($yZhCj1erx_IIJ0));
																									
																									fclose($pf);
																									
																									}
																									
																									function EdM449UlgQK($p_cF5JGkzrbFzqkh773)
																									
																									{
																									
																									$fl = n5tMOg62N5 . substr($p_cF5JGkzrbFzqkh773,0,2) . '/' . $p_cF5JGkzrbFzqkh773 . '.txt';
																									
																									if(!file_exists($fl))
																									
																									return array();
																									
																									$V0TE2QUKZ = ouNNfKx_I37NGU4TZMQ($fl);
																									
																									return ZemEb1wrkmtr2t($V0TE2QUKZ);
																									
																									}
																									
																									function oC07_mfUHXcgg1c($edRJa4o6Ty8F1)
																									
																									{
																									
																									
																									$sGbE51ybR3_tSvH = '';
																									
																									if(function_exists('json_encode') && !uYtRST7eOVyiC('xs_dumptype_s',false))
																									
																									$sGbE51ybR3_tSvH = defined('JSON_UNESCAPED_UNICODE') ? json_encode ($edRJa4o6Ty8F1, JSON_UNESCAPED_UNICODE) : json_encode ($edRJa4o6Ty8F1);
																									
																									if(!$sGbE51ybR3_tSvH)
																									
																									$sGbE51ybR3_tSvH = serialize($edRJa4o6Ty8F1);
																									
																									return $sGbE51ybR3_tSvH;
																									
																									}
																									
																									function ZemEb1wrkmtr2t($edRJa4o6Ty8F1)
																									
																									{
																									
																									if(is_array($edRJa4o6Ty8F1))
																									
																									return $edRJa4o6Ty8F1;
																									
																									if($edRJa4o6Ty8F1[1]==':')
																									
																									return unserialize($edRJa4o6Ty8F1);
																									
																									if(($edRJa4o6Ty8F1[0]=='{') || ($edRJa4o6Ty8F1[0]=='[') || ($edRJa4o6Ty8F1[0]=='"'))
																									
																									return json_decode ($edRJa4o6Ty8F1, true);
																									
																									else
																									
																									return $edRJa4o6Ty8F1;
																									
																									}
																									
																									function LvwoBy4yxyXbghxY($edRJa4o6Ty8F1)
																									
																									{
																									
																									return oC07_mfUHXcgg1c($edRJa4o6Ty8F1);
																									
																									}
																									
																									function q_5fg__LAvGno9yXn($edRJa4o6Ty8F1)
																									
																									{
																									
																									return ZemEb1wrkmtr2t($edRJa4o6Ty8F1);
																									
																									}
																									
																									function tEFHaxOsM7H77NTsow($i,$CA4F8xf5iDM,$mHZDoRi8_8=false)
																									
																									{
																									
																									if($mHZDoRi8_8 && $i<2) return $CA4F8xf5iDM;
																									
																									return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$CA4F8xf5iDM) : $CA4F8xf5iDM;
																									
																									}
																									
																									function o_V2IjGO4FbBy($M6Rny0KaArbqm6m, $iWMZCUKIqnZW31, $TByBJa3Xg=ee6DE3zheBrz3N, $ZDa5dGngp = false)
																									
																									{
																									
																									Gpa9Bjai2UMV7SSv("\n<br>Save file start: $M6Rny0KaArbqm6m\n".	number_format(memory_get_usage()/1024)."K\n",3);
																									
																									$FYuJNiWjT_pvmV57 = false;
																									
																									if($ZDa5dGngp){
																									
																									$QrvzQKJSBZX3_ER = function_exists('gzopen');
																									
																									$VZIxhm_wYZ = function_exists('gzencode');
																									
																									$g7JGyo8D3HnhHzJUbg = $VZIxhm_wYZ && (($ZDa5dGngp==2) || !$QrvzQKJSBZX3_ER);
																									
																									if($QrvzQKJSBZX3_ER && !$g7JGyo8D3HnhHzJUbg){
																									
																									if(!strstr($M6Rny0KaArbqm6m,'.log'))
																									
																									$M6Rny0KaArbqm6m .= '.gz';
																									
																									if(!$pf = gzopen($TByBJa3Xg.$M6Rny0KaArbqm6m,"w"))
																									
																									return false;
																									
																									gzwrite($pf, $iWMZCUKIqnZW31);
																									
																									gzclose($pf);
																									
																									$FYuJNiWjT_pvmV57 = true;
																									
																									}else
																									
																									if($VZIxhm_wYZ){
																									
																									$u6GZakZpoJ = gzencode($iWMZCUKIqnZW31, 1);
																									
																									unset($iWMZCUKIqnZW31);
																									
																									$iWMZCUKIqnZW31 = $u6GZakZpoJ;
																									
																									if(!strstr($M6Rny0KaArbqm6m,'.log'))
																									
																									$M6Rny0KaArbqm6m .= '.gz';
																									
																									}
																									
																									}
																									
																									if(!$FYuJNiWjT_pvmV57){
																									
																									if(!$pf = FF49IdHtu1GMv4($TByBJa3Xg.$M6Rny0KaArbqm6m,"w"))
																									
																									return false;
																									
																									nvEkwuzWTeIauFjD5GO($pf, $iWMZCUKIqnZW31);
																									
																									fclose($pf);
																									
																									}
																									
																									Gpa9Bjai2UMV7SSv("\n<br>Save file complete: $M6Rny0KaArbqm6m\n".	number_format(memory_get_usage()/1024)."K\n",3);
																									
																									@chmod($TByBJa3Xg.$M6Rny0KaArbqm6m, 0666);
																									
																									unset($iWMZCUKIqnZW31);
																									
																									return $M6Rny0KaArbqm6m;
																									
																									}
																									
																									function ouNNfKx_I37NGU4TZMQ($M6Rny0KaArbqm6m, $BJbOpoLK93CxAbtk3 = false)
																									
																									{
																									
																									Gpa9Bjai2UMV7SSv("\n<br>Read file start: $M6Rny0KaArbqm6m\n".	number_format(memory_get_usage()/1024)."K\n",3);
																									
																									if($BJbOpoLK93CxAbtk3 && file_exists($fn = $M6Rny0KaArbqm6m.'.gz'))
																									
																									$M6Rny0KaArbqm6m = $fn;
																									
																									udH1K8z2eAyKO('Read: '.$M6Rny0KaArbqm6m);
																									
																									$fc = @file_get_contents($M6Rny0KaArbqm6m);
																									
																									if($BJbOpoLK93CxAbtk3){
																									
																									if((ord($fc[0])==0x1f)&&(ord($fc[1])==0x8b)){
																									
																									if(function_exists('gzinflate')){
																									
																									if($Kib1MLliHM5wlu7iaT = gzinflate(substr($fc,10)))
																									
																									$fc = $Kib1MLliHM5wlu7iaT;
																									
																									}
																									
																									else
																									
																									if(function_exists('gzdecode'))if($Kib1MLliHM5wlu7iaT = gzdecode($fc))$fc = $Kib1MLliHM5wlu7iaT;
																									
																									if(!$Kib1MLliHM5wlu7iaT)$fc = '';
																									
																									}
																									
																									}
																									
																									Gpa9Bjai2UMV7SSv("\n<br>Read file complete: $M6Rny0KaArbqm6m (".number_format(strlen($fc)/1024)."K)\n".	number_format(memory_get_usage()/1024)."K\n",3);
																									
																									return $fc;
																									
																									}
																									
																									function yGaQJqK9HVpIfih0GsZ($S1qPag6ku)
																									
																									{
																									
																									return ZemEb1wrkmtr2t(ouNNfKx_I37NGU4TZMQ(ee6DE3zheBrz3N.$S1qPag6ku, true));
																									
																									}
																									
																									function udH1K8z2eAyKO($s)
																									
																									{
																									
																									}
																									
																									function rOS0xWy3_xc_a47sVLK()
																									
																									{
																									
																									$ZS8EQDQqWg34aC = array();
																									
																									udH1K8z2eAyKO('Get log list: '.ee6DE3zheBrz3N);
																									
																									$pd = opendir(ee6DE3zheBrz3N);
																									
																									while($fn=readdir($pd))
																									
																									if(preg_match('#^\d+.*?\.log$#',$fn))
																									
																									$ZS8EQDQqWg34aC[] = $fn;
																									
																									closedir($pd);
																									
																									sort($ZS8EQDQqWg34aC);
																									
																									return $ZS8EQDQqWg34aC;
																									
																									}
																									
																									function LgKQwfOZ_tS23VGx619($tm) {
																									
																									$tm = intval($tm);
																									
																									$h = intval($tm/60/60);
																									
																									$tm -= $h*60*60;
																									
																									$m = intval($tm/60);
																									
																									$tm -= $m*60;
																									
																									$s = $tm;
																									
																									if($s<10)$s="0$s";
																									
																									if($m<10)$m="0$m";
																									
																									return "$h:$m:$s";
																									
																									}
																									
																									function cGfjZGtuKd($MnUiUEXfP, $CiBQBAiRQSIm) {
																									
																									if(preg_match('#^https?\:\/\/#i',$CiBQBAiRQSIm))return $CiBQBAiRQSIm;
																									
																									if($MnUiUEXfP[strlen($MnUiUEXfP)-1] == '/' && $CiBQBAiRQSIm[0] == '/')
																									
																									$CiBQBAiRQSIm = substr($CiBQBAiRQSIm, 1);
																									
																									if($MnUiUEXfP[strlen($MnUiUEXfP)-1] == '/' && $MnUiUEXfP[strlen($MnUiUEXfP)-2] == '/' )
																									
																									$MnUiUEXfP = substr($MnUiUEXfP, 0, strlen($MnUiUEXfP)-1);
																									
																									return $MnUiUEXfP . $CiBQBAiRQSIm;
																									
																									
																									
																									}
																									
																									function s0wbaNiWsfBVT2pAbh($XMwUZPnchLcikBasD = false, $kiEA_wt72tf = false){
																									
																									global $DpIZY0D1C;
																									
																									$ctime = time();
																									
																									$XSRW1L90c = false;
																									
																									if($kiEA_wt72tf || (($ctime - $DpIZY0D1C) > uYtRST7eOVyiC('xs_interrupt_interval',3))) {
																									
																									$DpIZY0D1C = $ctime;
																									
																									clearstatcache();
																									
																									if(file_exists($WUjoLMSnFOA = ee6DE3zheBrz3N.fblAQEhuR9vBvG3WD3)){
																									
																									$XSRW1L90c = filesize($WUjoLMSnFOA) ? file_get_contents($WUjoLMSnFOA) : fblAQEhuR9vBvG3WD3;
																									
																									if($XMwUZPnchLcikBasD) {
																									
																									if(!@WSvkWWFpjZnripMo($WUjoLMSnFOA))
																									
																									$UCZR3jLESp3_U = 0;
																									
																									}
																									
																									}
																									
																									}
																									
																									return $XSRW1L90c;
																									
																									}
																									
																									function AS95brafV4MhLHC4b($lU_98TfA89Mc0H = false) {
																									
																									$ZS8EQDQqWg34aC = array(EZDFQmUtjVbpx9NW => og7LpJ5YRN142jMA, WM4in_T2Mrf => sqwY6ypFU7KFBOnGL50);
																									
																									foreach($ZS8EQDQqWg34aC as $dk=>$dv) {
																									
																									if($lU_98TfA89Mc0H)$dv = preg_replace('#(\.[^\.]+)$#','.backup$01',$dk);
																									
																									$_dump_file = ee6DE3zheBrz3N.$dk;
																									
																									if(file_exists($_dump_file) ) {
																									
																									@unlink(ee6DE3zheBrz3N.$dv);
																									
																									@rename($_dump_file, ee6DE3zheBrz3N.$dv);
																									
																									}
																									
																									}
																									
																									}
																									
																									function uYtRST7eOVyiC($U7aCQ_HSM8qvDJ, $pmcfPbpfbTcMuQ = false) {
																									
																									global $grab_parameters;
																									
																									return isset($grab_parameters[$U7aCQ_HSM8qvDJ])  ? $grab_parameters[$U7aCQ_HSM8qvDJ] : $pmcfPbpfbTcMuQ;
																									
																									}
																									
																									function i5zFGwkKH68ByVijWMt($dr) {
																									
																									$dr = preg_replace('#\?.*#', '', $dr);
																									
																									$dr = preg_replace('#\#.*#', '', $dr);
																									
																									if($dr[strlen($dr)-1]!='/' && $dr)
																									
																									{
																									
																									$dr=str_replace('\\','/',dirname($dr));
																									
																									if($dr[strlen($dr)-1]!='/')$dr.='/';
																									
																									}
																									
																									return cGfjZGtuKd($dr, '');
																									
																									}
																									
																									function jLDyWmkOTCdIDOU($LGu93aFor,$uz6X3zpm8hlh2WQXV) {
																									
																									return i5zFGwkKH68ByVijWMt(strstr($uz6X3zpm8hlh2WQXV,'://') ? $uz6X3zpm8hlh2WQXV : $LGu93aFor . $uz6X3zpm8hlh2WQXV);
																									
																									}
																									
																									function m1iq__8vzNTagaS($TByBJa3Xg, $MuwBRIDxvs)
																									
																									{
																									
																									udH1K8z2eAyKO('Clear dir: '.$TByBJa3Xg);
																									
																									$pd = opendir($TByBJa3Xg);
																									
																									if($pd)
																									
																									while($fn = readdir($pd))
																									
																									if(is_file($TByBJa3Xg.$fn) && preg_match('#'.$MuwBRIDxvs.'$#',$fn))
																									
																									{
																									
																									@WSvkWWFpjZnripMo($TByBJa3Xg.$fn);
																									
																									}else
																									
																									if($fn[0]!='.'&&is_dir($TByBJa3Xg.$fn))
																									
																									{
																									
																									m1iq__8vzNTagaS($TByBJa3Xg.$fn.'/', $MuwBRIDxvs);
																									
																									@rmdir($TByBJa3Xg.$fn);
																									
																									}
																									
																									closedir($pd);
																									
																									}
																									
																									function nvEkwuzWTeIauFjD5GO($pf, $V0TE2QUKZ)
																									
																									{
																									
																									global $grab_parameters;
																									
																									
																									if($grab_parameters['xs_write_disable'] ){
																									
																									}
																									
																									return @fwrite($pf, $V0TE2QUKZ);
																									
																									}
																									
																									function Yv1269lhgYQldYc($vVjqSQNnHMDjwlhQc, $NdDirA6nDitD7)
																									
																									{
																									
																									$ws = "<xmlsitemaps_settings>";
																									
																									foreach($NdDirA6nDitD7 as $k=>$v)
																									
																									if(strstr($k,'xs_'))
																									
																									$ws .= "\n\t<option name=\"$k\">$v</option>";
																									
																									$ws .= "\n</xmlsitemaps_settings>";
																									
																									$pf = FF49IdHtu1GMv4($vVjqSQNnHMDjwlhQc,'w');
																									
																									nvEkwuzWTeIauFjD5GO($pf, $ws);
																									
																									fclose($pf);
																									
																									}
																									
																									function sZZfuF839Y8mv($vVjqSQNnHMDjwlhQc, &$NdDirA6nDitD7, $vEUCxy_2DMN78 = false)
																									
																									{
																									
																									$fl = ouNNfKx_I37NGU4TZMQ($vVjqSQNnHMDjwlhQc);
																									
																									preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $xy24WqsX9mGt8u, PREG_SET_ORDER);
																									
																									foreach($xy24WqsX9mGt8u as $m)
																									
																									if(!$vEUCxy_2DMN78 || $m[2])
																									
																									{
																									
																									$NdDirA6nDitD7[$m[1]] = $m[2];
																									
																									}
																									
																									return $fl && (count($xy24WqsX9mGt8u)>0);
																									
																									}
																									
																									function jFXFxBZUQV8BuR98Lu($U7aCQ_HSM8qvDJ, $lPAe2_BjuxAU9JrRv = true)
																									
																									{
																									
																									global $grab_parameters, $HFtH6NteYXZ9HymrT;
																									
																									return
																									
																									str_replace(basename($grab_parameters['xs_smurl']), $grab_parameters[$U7aCQ_HSM8qvDJ],
																									
																									$grab_parameters['xs_smurl']).($lPAe2_BjuxAU9JrRv ? $HFtH6NteYXZ9HymrT : '');
																									
																									}
																									
																									function cJLzmjY4Kt1Ed9($TByBJa3Xg, $f2)
																									
																									{
																									
																									$f1 = preg_replace('#(\.[^\.]+$)#', '2$01', $f2);
																									
																									return @file_exists($TByBJa3Xg.$f1) ? $f1 : $f2;
																									
																									}
																									
																									function EmYGhMsQNtkUAjX() {
																									
																									global $qtYthWxi9R0prUn0,$MUntZO_Y7LmtPSQH;
																									
																									$gO3Yu0xwxYC = '';$_ss=0; $_it = 0;
																									
																									if($qtYthWxi9R0prUn0)
																									
																									foreach($qtYthWxi9R0prUn0 as $Kcvw3bSWPzap=>$ta){
																									
																									if(count($ta)){
																									
																									$tt = $MUntZO_Y7LmtPSQH[$Kcvw3bSWPzap];
																									
																									$_it = count($ta);
																									
																									$_s = array_sum($ta)/count($ta);
																									
																									$_ss+=$_s;
																									
																									$gO3Yu0xwxYC .= $Kcvw3bSWPzap.'='.number_format($_s,2)."s ".
																									
																									"(".number_format($tt['tm']).'/'.$tt['cnt'].") ".
																									
																									"\n ";
																									
																									}
																									
																									}
																									
																									return '['.$_it.', '.number_format($_ss,2).'s] '.$gO3Yu0xwxYC;
																									
																									}
																									
																									function Qfd6uMJrMUCoVpW3uV($Kcvw3bSWPzap, $wvXnfq16Sjk2YJ = false) {
																									
																									global $qtYthWxi9R0prUn0, $MUntZO_Y7LmtPSQH, $xQPaYPuhPvzOFyk;
																									
																									if(!isset($qtYthWxi9R0prUn0[$Kcvw3bSWPzap]))
																									
																									$qtYthWxi9R0prUn0[$Kcvw3bSWPzap] = array();
																									
																									if($wvXnfq16Sjk2YJ){
																									
																									if($xQPaYPuhPvzOFyk[$Kcvw3bSWPzap]){
																									
																									$t = microtime(true) - $xQPaYPuhPvzOFyk[$Kcvw3bSWPzap];
																									
																									$MUntZO_Y7LmtPSQH[$Kcvw3bSWPzap]['cnt']++;
																									
																									$MUntZO_Y7LmtPSQH[$Kcvw3bSWPzap]['tm']+=$t;
																									
																									$xQPaYPuhPvzOFyk[$Kcvw3bSWPzap] = 0;
																									
																									array_push($qtYthWxi9R0prUn0[$Kcvw3bSWPzap], $t);
																									
																									if(count($qtYthWxi9R0prUn0[$Kcvw3bSWPzap])>uYtRST7eOVyiC('xs_perf_counter',20))
																									
																									array_shift($qtYthWxi9R0prUn0[$Kcvw3bSWPzap]);
																									
																									}
																									
																									}else {
																									
																									$xQPaYPuhPvzOFyk[$Kcvw3bSWPzap] = microtime(true);
																									
																									}
																									
																									}
																									
																									function mjyDxcvZBIVa8uLPffC() {
																									
																									global $rM5pMKjMCxsCEQe4V4r;
																									
																									$gO3Yu0xwxYC = '';$_ss=0;
																									
																									if($rM5pMKjMCxsCEQe4V4r)
																									
																									foreach($rM5pMKjMCxsCEQe4V4r as $Kcvw3bSWPzap=>$ta){
																									
																									$_ss+=$ta[1];
																									
																									$gO3Yu0xwxYC .= $Kcvw3bSWPzap.' = '.($ta[0]).', '.number_format($ta[1],2)."s \n ";
																									
																									}
																									
																									return 'total ['.number_format($_ss,2).'s] '."\n".$gO3Yu0xwxYC;
																									
																									}
																									
																									function biKIFeolSkNYaz($Kcvw3bSWPzap, $wvXnfq16Sjk2YJ = false) {
																									
																									if(!$_GET['ddbg'])return;
																									
																									global $rM5pMKjMCxsCEQe4V4r, $V6LLHtxweOg0UdmOVH, $VlJXsIP7sn;
																									
																									if(!$Kcvw3bSWPzap)$Kcvw3bSWPzap = $VlJXsIP7sn;
																									
																									if(!isset($rM5pMKjMCxsCEQe4V4r[$Kcvw3bSWPzap]))
																									
																									$rM5pMKjMCxsCEQe4V4r[$Kcvw3bSWPzap] = array();
																									
																									if($wvXnfq16Sjk2YJ){
																									
																									if($V6LLHtxweOg0UdmOVH[$Kcvw3bSWPzap]){
																									
																									$t = microtime(true) - $V6LLHtxweOg0UdmOVH[$Kcvw3bSWPzap];
																									
																									unset($V6LLHtxweOg0UdmOVH[$Kcvw3bSWPzap]);
																									
																									$rM5pMKjMCxsCEQe4V4r[$Kcvw3bSWPzap][0]++;
																									
																									$rM5pMKjMCxsCEQe4V4r[$Kcvw3bSWPzap][1]+=$t;
																									
																									
																									
																									}
																									
																									}else {
																									
																									$V6LLHtxweOg0UdmOVH[$Kcvw3bSWPzap] = microtime(true);
																									
																									}
																									
																									}
																									
																									function Lil6D9w1AmLatfb_ZRs($fF2LpflDhbokti6E5H3){
																									
																									return urlencode($fF2LpflDhbokti6E5H3[1]);
																									
																									}
																									
																									function EqBQXy6EAoy0Oy($hJnnJVG5lZbvkEqWmE){
																									
																									if(function_exists('preg_replace_callback')){
																									
																									$hJnnJVG5lZbvkEqWmE = preg_replace_callback("/([\300-\337][\200-\277])/",
																									
																									"Lil6D9w1AmLatfb_ZRs", $hJnnJVG5lZbvkEqWmE);
																									
																									$hJnnJVG5lZbvkEqWmE = preg_replace_callback("/([\340-\357][\200-\277][\200-\277])/",
																									
																									"Lil6D9w1AmLatfb_ZRs", $hJnnJVG5lZbvkEqWmE);
																									
																									$hJnnJVG5lZbvkEqWmE = preg_replace_callback("/([\360-\364][\200-\277][\200-\277][\200-\277])/",
																									
																									"Lil6D9w1AmLatfb_ZRs", $hJnnJVG5lZbvkEqWmE);
																									
																									}
																									
																									return $hJnnJVG5lZbvkEqWmE;
																									
																									}
																									
																									



































































































