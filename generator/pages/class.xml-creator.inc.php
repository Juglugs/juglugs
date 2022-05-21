<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$hiiZb97709102upkqr=232470435;$zpGDM99610047zQREu=616103129;$rmSmv71215598DQVBc=949283865;$LvsfW49455828WNYQw=602342483;$SJXmd59720361JAYpc=375968825;$jePCr37917798OnSzg=144159530;$DBZTV23481573Pwfwi=372489134;$YBWYX51086074UkccL=313513792;$yGndy27343782ZeYkP=698276626;$ELmXy90021715QHXRs=430048126;$NTIUa10764363jywTM=210824107;$Qzbes70715297ClbqJ=218388648;$loTXk86200691qIIJH=471477314;$aNjBF28157956eRayj=489513613;$zEdeN84071048SaqUB=584378334;$gbslm69700160DWzfQ=115451402;$AzKTr66152382CGLMX=873279181;$OEqcl12038644SnLNL=942185062;$QatiR83658654RQjTY=629806395;$PmRJs57910208VnFVl=840632370;$PPDiK77427731SuFNZ=934680849;$LCHRw31810937GttKP=952435044;$JZzjm73173949Jgypy=379306912;$UftEa19347017ZTpAv=713166232;$JMDlK18305103Hvtom=166101392;$waWdj35400661JmZxc=680916261;$tnEEJ64034926bnTUT=877962104;$CXCyM85879757cgrfM=36049399;$SaRWl73395600qXPPG=67183010;$FAMtu90552137IzyUl=436307472;$tShpd84700041kOQiI=679373862;$vVpdz31932266rcpTP=549647537;$dZMPC26304939XCife=352884777;$rfEYA70906313tjtUY=859631105;$YoRPs11281394HZkSz=821495845;$jSlbV75580307rpMKO=153090142;$HuYvS83354210afXvF=645154623;$tqxwZ33881633WRKbg=989237467;$Axmcl11363881cPunK=422680703;$VIJse94296958ZVXIP=997425114;$ljmFz50603164lbqyX=881468879;$QhgRj24889928nJwbA=890413564;$tjgRT76936586vRgRg=160291361;$tthpz93230618SrDYE=574794105;$CQCiT39160729fpnXR=780694240;$duQQX19598379RgqMO=350603417;$hrjCL26479716UebJP=117578562;$IgOod58971582YlZLO=68401937;$BPmmJ28185630qJTxM=427777474;$ybTeN95642929UdNPR=860744341;?><?php if(!class_exists('XMLCreator')) { class XMLCreator { var $LyuTOF5B8  = array(); var $mLkE8KbTL8fKmKIttnV  = array(); var $a0UBDsP3f73El8 = array('xml','','','','mobile'); var $NdDirA6nDitD7 = array(); var $runstate = array(); var $Vm4lvkoHoxPC = array(), $jz8NRcx6BrPFhKdMh = array(), $s8M4DXJ4gX8RH = array(), $I2TB3nwN17HB8Z3IKa = array(), $sITHkAPzSOe = array(), $qFTPWQSmU9 = array(), $CuRKbCktoYc = array() ; var $gAGERofc_rj5Fn = 1000; var $PyNsVzGdpjdX = array(); var $gzGmoj9EPJk = 0; var $ScsSEVE1SEy = array(); var $ReZRrFQGFAk4ED = array(); function t4ID8A7Ta545brXcnBn() { global $grab_parameters; if(!$this->NdDirA6nDitD7) $this->NdDirA6nDitD7 = $grab_parameters; $this->uurl_p = dirname($this->NdDirA6nDitD7['xs_smurl']).'/'; $this->z3NGD_B8KFFSEH0 = dirname($this->NdDirA6nDitD7['xs_smname']).'/'; $this->HFtH6NteYXZ9HymrT = ($this->NdDirA6nDitD7['xs_compress']==1) ? '.gz' : ''; } function mB1zfrFh21Gy4l(&$SEsnYMgf1O07i8) { $GJQ15XJz0k3WjMo7RcR = false; $mx = 200; if(is_array($SEsnYMgf1O07i8)) foreach($SEsnYMgf1O07i8 as $k=>$v){ if(!is_array($v)&&(strlen($v)>$mx)){ $SEsnYMgf1O07i8[$k] = substr($v, 0, $mx); } if(strlen($k)>$mx){ unset($SEsnYMgf1O07i8[$k]); $SEsnYMgf1O07i8[substr($k, 0, $mx)] = $v; } } } function nETHJASIvPnxAhIL62($NdDirA6nDitD7, $fb23nrOMWYh, $mpKwhx_rQo) { global $hevPGedyOjCltJKc, $iQjQee0FhjFPc8hCI; $iQjQee0FhjFPc8hCI = array(); if(uYtRST7eOVyiC('xs_api_cache', true)) if($XzQa7H2_FhtUv = @ouNNfKx_I37NGU4TZMQ(ee6DE3zheBrz3N.'apicache.db',true)){ $this->PyNsVzGdpjdX = ZemEb1wrkmtr2t($XzQa7H2_FhtUv); Gpa9Bjai2UMV7SSv('Read api cache. '.count($this->PyNsVzGdpjdX)." entries found\n"); if($this->PyNsVzGdpjdX['_xml_api_ver_'] < 4){ Gpa9Bjai2UMV7SSv("Converting api cache to v4\n"); $VXEfA6HJ2dJgf = array(); $_tm = time(); foreach($this->PyNsVzGdpjdX as $_k=>$_v){ $VXEfA6HJ2dJgf[$this->pZZ_vjntZn($_k)] = [ 'lu' => $_tm, 'lr' => $_tm, 'content' => $_v ]; } $this->PyNsVzGdpjdX = $VXEfA6HJ2dJgf; $this->PyNsVzGdpjdX['_xml_api_ver_'] = 4; $this->CNjcMtWZ0qO6SCE4(true); } $_al1 = count($this->PyNsVzGdpjdX); foreach($this->PyNsVzGdpjdX as $_k=>$_v) if($_k[0]!='_') { if((time()-$_v['lr']) > 30*24*3600){ unset($this->PyNsVzGdpjdX[$_k]); } } if($_al1 != count($this->PyNsVzGdpjdX)) $this->CNjcMtWZ0qO6SCE4(true); }   $xz = 'img';$this->a0UBDsP3f73El8[1] = 'images';$xz = '/img'; $this->uoIAM7fvhvq2irwCt = new RawTemplate("pages/"); $this->NdDirA6nDitD7 = $NdDirA6nDitD7; $this->runstate = $mpKwhx_rQo['runstate']; if($this->NdDirA6nDitD7['xs_chlog_list_max']) $this->gAGERofc_rj5Fn = $this->NdDirA6nDitD7['xs_chlog_list_max']; $CA4F8xf5iDM = basename($this->NdDirA6nDitD7['xs_smname']); $this->t4ID8A7Ta545brXcnBn(); $this->imgno = 0; $this->Vm4lvkoHoxPC = $jz8NRcx6BrPFhKdMh = $s8M4DXJ4gX8RH = $this->I2TB3nwN17HB8Z3IKa = $this->urls_prevrss = array(); if($this->NdDirA6nDitD7['xs_chlog']) { $this->Vm4lvkoHoxPC = $this->htNPsN8djODDs_Gj($CA4F8xf5iDM); $xz = 'img'; $this->jz8NRcx6BrPFhKdMh = $this->uuBgKgjH27($this->NdDirA6nDitD7['xs_imgfilename'], 'image\:loc'); $xz = '/img';  } if($this->NdDirA6nDitD7['xs_rssinfo']) $this->urls_prevrss = $this->htNPsN8djODDs_Gj(jcvNaNa6JCn7 , $this->NdDirA6nDitD7['xs_rssage'], false, 1); if($this->NdDirA6nDitD7['xs_newsinfo']) $this->I2TB3nwN17HB8Z3IKa = $this->htNPsN8djODDs_Gj($this->NdDirA6nDitD7['xs_newsfilename'], $this->NdDirA6nDitD7['xs_newsage']); $uL6jaDurIdYfCHZeQw = $wn5ZmaRyt = array(); $this->vbRWo7TQbTs7U2LjeN1 = ($this->NdDirA6nDitD7['xs_compress']==1) ? array('fopen' => 'gzopen', 'fwrite' => 'gzwrite', 'fclose' => 'gzclose' ) : array('fopen' => 'FF49IdHtu1GMv4', 'fwrite' => 'nvEkwuzWTeIauFjD5GO', 'fclose' => 'fclose' ) ; $dUn2ccWzPm = strstr($this->NdDirA6nDitD7['xs_initurl'],'://www.');
																									 $KVAIUxYd5bQS = $hevPGedyOjCltJKc.'/'; if(strstr($this->NdDirA6nDitD7['xs_initurl'],'https:')) $KVAIUxYd5bQS = str_replace('http:', 'https:', $KVAIUxYd5bQS); $bGkvzyRm2Vazelw = strstr($KVAIUxYd5bQS,'://www.');
																									 $p1 = parse_url($this->NdDirA6nDitD7['xs_initurl']); $p2 = parse_url($KVAIUxYd5bQS); if(str_replace('www.', '', $p1['host'])==str_replace('www.', '', $p2['host'])) { if($dUn2ccWzPm && !$bGkvzyRm2Vazelw)$KVAIUxYd5bQS = str_replace('://', '://www.', $KVAIUxYd5bQS);
																									 if(!$dUn2ccWzPm && $bGkvzyRm2Vazelw)$KVAIUxYd5bQS = str_replace('://www.', '://', $KVAIUxYd5bQS);
																									 } $this->NdDirA6nDitD7['gendom'] = $KVAIUxYd5bQS; $this->Bd7ePAZTqSOAjhyfLy($fb23nrOMWYh, $uL6jaDurIdYfCHZeQw); $this->I2xr4hRrIaQ2h(); if($this->NdDirA6nDitD7['xs_chlog']) { $fBrDVmTBhSBv4f4O60  = array_keys($this->sITHkAPzSOe); $xehXHBTTr2VcnmD10sL = array_slice(array_keys($this->Vm4lvkoHoxPC), 0, $this->gAGERofc_rj5Fn); $xz = 'img'; $EyPHlfs5Sb1 = $this->qFTPWQSmU9; $D2HpbTI2LImNqY = array_slice($this->jz8NRcx6BrPFhKdMh, 0, $this->gAGERofc_rj5Fn); $xz = '/img';  } if($this->imgno)$this->LyuTOF5B8[1]['xn'] = $this->imgno; if($this->videos_no)$this->LyuTOF5B8[2]['xn'] = $this->videos_no; if($this->news_no)$this->LyuTOF5B8[3]['xn'] = $this->news_no; $this->mB1zfrFh21Gy4l($fBrDVmTBhSBv4f4O60); $this->mB1zfrFh21Gy4l($xehXHBTTr2VcnmD10sL); $this->CNjcMtWZ0qO6SCE4(true); $FpROwXHaFPL = array_merge($mpKwhx_rQo, array( 'files'   => array(), 'rinfo'   => $this->LyuTOF5B8, 'newurls' => $fBrDVmTBhSBv4f4O60, 'losturls'=> $xehXHBTTr2VcnmD10sL, 'newurls_i' => $EyPHlfs5Sb1, 'losturls_i'=> $D2HpbTI2LImNqY, 'newurls_v' => $BnH6UjYn5, 'losturls_v'=> $RZj5tr6U5pSwKL, 'urls_ext'=> $mpKwhx_rQo['urls_ext'], 'images_no'  => $this->imgno, 'videos_no' => $this->videos_no, 'news_no'  => $this->newsno, 'rss_no'  => $this->rssno, 'rss_sm'  => $this->NdDirA6nDitD7['xs_rssfilename'], 'fail_files' => $iQjQee0FhjFPc8hCI, 'create_time' => time() )); unset($FpROwXHaFPL['sm_base']); $PfwnnsJiOTh0pPV4n = array('u404', 'urls_ext', 'urls_list_skipped', 'newurls', 'losturls'); foreach($PfwnnsJiOTh0pPV4n as $ca) $this->mB1zfrFh21Gy4l($FpROwXHaFPL[$ca]); $this->Vm4lvkoHoxPC = $this->jz8NRcx6BrPFhKdMh = $this->s8M4DXJ4gX8RH = $this->sITHkAPzSOe = $this->qFTPWQSmU9 = $this->CuRKbCktoYc = $this->I2TB3nwN17HB8Z3IKa = $this->urls_prevrss = array(); $uL6jaDurIdYfCHZeQw = array(); return $FpROwXHaFPL; } function h6BEGBocowOEGk($Kcvw3bSWPzap) { global $nFH9m45vOeB_pZEWc; $pf = $this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap]; if(!$pf)return; $this->vbRWo7TQbTs7U2LjeN1['fwrite']($pf, $nFH9m45vOeB_pZEWc[3]); $g0TYHu35Gl1dI = stream_get_meta_data($pf); $this->vbRWo7TQbTs7U2LjeN1['fclose']($pf); $M6Rny0KaArbqm6m = $g0TYHu35Gl1dI["uri"]; Gpa9Bjai2UMV7SSv(" [File-end][$M6Rny0KaArbqm6m] ",2); @chmod($M6Rny0KaArbqm6m, 0666); } function fZaQsRcMkRwaMGQG($pf, $Kcvw3bSWPzap) { global $nFH9m45vOeB_pZEWc; if(!$pf)return; $xs = $this->uoIAM7fvhvq2irwCt->UWnLY_7eLJrQU($nFH9m45vOeB_pZEWc[1], array('TYPE'.$Kcvw3bSWPzap=>true)); $this->vbRWo7TQbTs7U2LjeN1['fwrite']($pf, $xs); } function RCaJmqxa2ITl3CN($wn5ZmaRyt) { $fEiS9lSvMa = ""; $MVM2pokWncG = cJLzmjY4Kt1Ed9(Swpw9A1Vzx69,  'sitemap_index_tpl.xml'); $kW1tc2rC7otq7v = file_get_contents(Swpw9A1Vzx69.$MVM2pokWncG); preg_match('#^(.*)%SITEMAPS_LIST_FROM%(.*)%SITEMAPS_LIST_TO%(.*)$#is', $kW1tc2rC7otq7v, $FHm3o7jX4zSlXxvnOvS); $FHm3o7jX4zSlXxvnOvS[1] = str_replace('%GEN_URL%', $this->NdDirA6nDitD7['gendom'], $FHm3o7jX4zSlXxvnOvS[1]); if($this->NdDirA6nDitD7['xs_disable_xsl']) $FHm3o7jX4zSlXxvnOvS[1] = preg_replace('#<\?xml-stylesheet.*\?>#', '', $FHm3o7jX4zSlXxvnOvS[1]);
																									if($this->NdDirA6nDitD7['xs_xsl_custom']){
																									$FHm3o7jX4zSlXxvnOvS[1] = str_replace('sitemap.xsl',$this->NdDirA6nDitD7['xs_xsl_custom'],$FHm3o7jX4zSlXxvnOvS[1]);
																									}else
																									if($this->NdDirA6nDitD7['xs_nobrand']){
																									$FHm3o7jX4zSlXxvnOvS[1] = str_replace('sitemap.xsl','sitemap_nb.xsl',$FHm3o7jX4zSlXxvnOvS[1]);
																									}
																									$sKyRIvUww4bs9oF1N = preg_replace('#[^\\/]+?\.xml$#', '', $this->NdDirA6nDitD7['xs_smurl']);
																									$sKyRIvUww4bs9oF1N = preg_replace('#^.*\://.*?/#', '/', $sKyRIvUww4bs9oF1N);
																									$FHm3o7jX4zSlXxvnOvS[1] = str_replace('%SM_BASE%', $sKyRIvUww4bs9oF1N, $FHm3o7jX4zSlXxvnOvS[1]);
																									for($i=0;$i<count($wn5ZmaRyt);$i++)
																									$fEiS9lSvMa.=
																									$this->uoIAM7fvhvq2irwCt->UWnLY_7eLJrQU($FHm3o7jX4zSlXxvnOvS[2], array(
																									'URL'=>$wn5ZmaRyt[$i],
																									'LASTMOD'=>date('Y-m-d\TH:i:s+00:00')
																									));
																									return $FHm3o7jX4zSlXxvnOvS[1] . $fEiS9lSvMa . $FHm3o7jX4zSlXxvnOvS[3];
																									}
																									function rNtbGFou4WFWqLeN3Y()
																									{
																									global $th9r4riT2;
																									$KrTEj2Y_9GKorWgUFdJ = ($th9r4riT2->runstate['charset']);
																									return ($KrTEj2Y_9GKorWgUFdJ && (strtolower($KrTEj2Y_9GKorWgUFdJ)!='utf-8'));
																									}
																									function mGjlSGA1GLe($OzUD0qopeT)
																									{
																									global $th9r4riT2;
																									biKIFeolSkNYaz('tc');
																									$OzUD0qopeT = str_replace(
																									array('&amp;', '&', '&amp;#', "'", '"', '>', '<'),
																									array('&', '&amp;', '&#', "&apos;", '&quot;', '&gt;', '&lt;'),
																									$OzUD0qopeT);
																									$l2 = '';
																									$Nr4mMHQ_vWsIZoq = uYtRST7eOVyiC('xs_title_charset_convert',
																									$this->rNtbGFou4WFWqLeN3Y() ? true : false);
																									if( $Nr4mMHQ_vWsIZoq && function_exists('iconv') )
																									{
																									
																									$l2 = iconv($this->runstate['charset'], 'UTF-8', $OzUD0qopeT);
																									if($l2 && ($OzUD0qopeT != $l2))
																									$OzUD0qopeT = $l2;
																									else
																									if(function_exists('utf8_encode'))
																									$OzUD0qopeT = utf8_encode($OzUD0qopeT);
																									}else {
																									if(function_exists('utf8_encode') && $SIFTk0nhSIw3Se6PzP)
																									{
																									$OzUD0qopeT = utf8_encode($OzUD0qopeT);
																									}
																									}
																									biKIFeolSkNYaz('tc',true);
																									return $OzUD0qopeT;
																									}
																									function w66iQe4NuYonIqU3I($OzUD0qopeT)
																									{
																									$OzUD0qopeT = str_replace(
																									array('&amp;', '&', '&amp;#', '>', '<'),
																									array('&', '&amp;', '&#',  '&gt;', '&lt;'),
																									$OzUD0qopeT);
																									return $OzUD0qopeT;
																									}
																									function ZpD4_OBArVXf15ihe($OzUD0qopeT, $k1iJxSJlsU = false, $ejxgnSbVLGE = false)
																									{
																									biKIFeolSkNYaz('ttl');
																									$Nr4mMHQ_vWsIZoq = uYtRST7eOVyiC('xs_title_charset_convert',
																									$this->rNtbGFou4WFWqLeN3Y() ? true : false);
																									if(!$Nr4mMHQ_vWsIZoq)return $OzUD0qopeT;
																									if($k1iJxSJlsU ){
																									$t = $OzUD0qopeT;
																									if(function_exists('utf8_encode')){
																									$t2='';
																									for($i=0;$i<strlen($t);$i++)
																									$t2 .= ((ord($t[$i])>128) ? '&#'.ord($t[$i]).';' : $t[$i]);
																									$t = $t2;
																									$t = utf8_encode($t);
																									$t = htmlentities($t,ENT_COMPAT,'UTF-8');
																									}else
																									if($ejxgnSbVLGE){
																									$t = htmlentities($t, ENT_COMPAT, 'UTF-8');
																									}
																									$t = preg_replace("#&amp;(\#[\w\d]+;)#", '&$1', $t);
																									$t = str_replace("&", "&amp;", $t);
																									$t = preg_replace("#&(?:amp;)+((\#\d+|gt|lt|quot|amp|apos|.uml|.?acute);)#", '&$1', $t);
																									$t = preg_replace('#[\x00-\x1F\x7F]#', ' ', $t);
																									
																									}else {
																									$t = str_replace("&", "&amp;", $OzUD0qopeT);
																									
																									}
																									if(function_exists('utf8_encode'))
																									{
																									$t = utf8_encode($t);
																									}
																									biKIFeolSkNYaz('ttl',true);
																									return $t;
																									}
																									function pm7IYqMZqcWfIcA8c0($Qu5MRb4e8VgwD0cp)
																									{
																									$Qu5MRb4e8VgwD0cp = $this->mGjlSGA1GLe(str_replace(array('&nbsp;'),array(''),$Qu5MRb4e8VgwD0cp), true);
																									return $Qu5MRb4e8VgwD0cp;
																									}
																									function eUql7J95riDhA4($zlzXAFvxkQp)
																									{
																									biKIFeolSkNYaz('tl');
																									global $k1iJxSJlsU;
																									$l = str_replace("&amp;", "&", $zlzXAFvxkQp);
																									$l = str_replace("&", "&amp;", $l);
																									$l = strtr($l, $k1iJxSJlsU);
																									$l = preg_replace("#&(?:amp;)+((\#\d+|\#x[a-f0-9]+|gt|lt|quot|amp|apos);)#i", '&$1', $l);
																									
																									if($this->NdDirA6nDitD7['xs_utf8'])
																									{
																									if(!strcasecmp ($this->runstate['charset'], 'UTF-8'))
																									if( $this->NdDirA6nDitD7['xs_utf8_uenc']){
																									$l = EqBQXy6EAoy0Oy($l);
																									}
																									}else {
																									if(
																									$this->NdDirA6nDitD7['xs_url_charset_convert'] &&
																									$this->runstate['charset']
																									&& function_exists('iconv')
																									&& (strpos($l,'%') === false)
																									)
																									{
																									if($l2 = iconv($this->runstate['charset'], 'UTF-8', $l)) {
																									if($l != $l2){
																									$lp = urlencode($l2);
																									$l = str_replace(
																									array('%3A','%2F', '%3F', '%26', '%23', '%3B', '%3D'),
																									array(':', '/', '?', '&', '#', ';', '='),
																									$lp);
																									}
																									}
																									}
																									if(function_exists('utf8_encode'))
																									$l = utf8_encode($l);
																									}
																									biKIFeolSkNYaz('tl',true);
																									return $l;
																									}
																									function vYxapMaKqR1k7z($QlnrAnwM2MWzbFu)
																									{
																									$lvl_1nFGm = array(
																									basename($this->NdDirA6nDitD7['xs_smname']),
																									$this->NdDirA6nDitD7['xs_imgfilename'],
																									$this->NdDirA6nDitD7['xs_videofilename'],
																									$this->NdDirA6nDitD7['xs_newsfilename'],
																									$this->NdDirA6nDitD7['xs_mobilefilename'],
																									);
																									if($QlnrAnwM2MWzbFu['rinfo'])
																									$this->LyuTOF5B8 = $QlnrAnwM2MWzbFu['rinfo'];
																									Gpa9Bjai2UMV7SSv("Clearing (dat copy) sitemaps");
																									foreach($this->a0UBDsP3f73El8 as $Kcvw3bSWPzap=>$BtAUqRxJJgysfr)
																									if($BtAUqRxJJgysfr)
																									{
																									$this->LyuTOF5B8[$Kcvw3bSWPzap]['sitemap_file'] = $lvl_1nFGm[$Kcvw3bSWPzap];
																									$this->LyuTOF5B8[$Kcvw3bSWPzap]['filenum'] = intval($QlnrAnwM2MWzbFu['istart']/$this->cQjxlLL1n)+1;
																									if(!$QlnrAnwM2MWzbFu['istart'])
																									$this->xAaEQ2oloV($lvl_1nFGm[$Kcvw3bSWPzap], true, false);
																									}
																									}
																									function F4J4wj1rij__dECR()
																									{
																									global $iQjQee0FhjFPc8hCI;
																									$E1XhTHiYYh = 0;
																									$l = false;
																									foreach($this->a0UBDsP3f73El8 as $Kcvw3bSWPzap=>$BtAUqRxJJgysfr)
																									if($BtAUqRxJJgysfr)
																									{
																									$ri = &$this->LyuTOF5B8[$Kcvw3bSWPzap];
																									$gQcYvP1tJPC2pU66T = (($ri['xnp'] % $this->cQjxlLL1n) == 0) && ($ri['xnp'] || !$this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap]);
																									$l|=$gQcYvP1tJPC2pU66T;
																									if($this->sm_filesplit && $ri['xchs'] && $ri['xnp'])
																									$gQcYvP1tJPC2pU66T |= ($ri['xchs']/$ri['xnp']*($ri['xnp']+1)>$this->sm_filesplit);
																									if( $gQcYvP1tJPC2pU66T )
																									{
																									$E1XhTHiYYh++;
																									$ri['xchs'] = $ri['xnp'] = 0;
																									$this->h6BEGBocowOEGk($Kcvw3bSWPzap);
																									if($ri['filenum'] == 2)
																									{
																									if(!copy(ee6DE3zheBrz3N . $ri['sitemap_file'].$this->HFtH6NteYXZ9HymrT,
																									$_nf=ee6DE3zheBrz3N.($_xu = tEFHaxOsM7H77NTsow(1,$ri['sitemap_file']).$this->HFtH6NteYXZ9HymrT)))
																									{
																									$iQjQee0FhjFPc8hCI[] = ee6DE3zheBrz3N.$_xu;
																									}else
																									@chmod($_nf, 0666);
																									$ri['urls'][0] = $this->uurl_p . $_xu;
																									}
																									$YHBAzXdGY9_OJz8 = (($ri['filenum']>1) ? tEFHaxOsM7H77NTsow($ri['filenum'],$ri['sitemap_file'])
																									:$ri['sitemap_file']) . $this->HFtH6NteYXZ9HymrT;
																									$ri['urls'][] = $this->uurl_p . $YHBAzXdGY9_OJz8;
																									$ri['filenum']++;
																									$this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap] = $this->vbRWo7TQbTs7U2LjeN1['fopen'](ee6DE3zheBrz3N.$YHBAzXdGY9_OJz8,'w');
																									if(!$this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap])
																									$iQjQee0FhjFPc8hCI[] = ee6DE3zheBrz3N.$YHBAzXdGY9_OJz8;
																									$this->fZaQsRcMkRwaMGQG($this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap], $Kcvw3bSWPzap);
																									}
																									}
																									return $l;
																									}
																									function aU6PBx5ARCuWtx4zxs($C4seVZq3gbUZosTN7D, $nFH9m45vOeB_pZEWc, $Kcvw3bSWPzap)
																									{
																									$C4seVZq3gbUZosTN7D['TYPE'.$Kcvw3bSWPzap] = true;
																									$ri = &$this->LyuTOF5B8[$Kcvw3bSWPzap];
																									if($this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap])
																									{
																									$_xu = $this->uoIAM7fvhvq2irwCt->UWnLY_7eLJrQU($nFH9m45vOeB_pZEWc, $C4seVZq3gbUZosTN7D);
																									$ri['xchs'] += strlen($_xu);
																									$ri['xn']++;
																									$ri['xnp']++;
																									$this->vbRWo7TQbTs7U2LjeN1['fwrite']($this->mLkE8KbTL8fKmKIttnV[$Kcvw3bSWPzap], $_xu);
																									}
																									}
																									function fSQQ690F_n1()
																									{
																									foreach($this->LyuTOF5B8 as $Kcvw3bSWPzap=>$ri)
																									{
																									$this->h6BEGBocowOEGk($Kcvw3bSWPzap);
																									}
																									}
																									function I2xr4hRrIaQ2h()
																									{
																									foreach($this->a0UBDsP3f73El8 as $Kcvw3bSWPzap=>$BtAUqRxJJgysfr)
																									if($BtAUqRxJJgysfr)
																									{
																									$ri = &$this->LyuTOF5B8[$Kcvw3bSWPzap];
																									if($ri['urls'])
																									if(count($ri['urls'])>1)
																									{
																									$xf = $this->RCaJmqxa2ITl3CN($ri['urls']);
																									array_unshift($ri['urls'],
																									$this->uurl_p.o_V2IjGO4FbBy($ri['sitemap_file'],
																									$xf,
																									ee6DE3zheBrz3N,
																									($this->NdDirA6nDitD7['xs_compress']==1))
																									);
																									}
																									$this->xAaEQ2oloV($ri['sitemap_file'], false, true);
																									$this->p1dNB4yolo3L($ri['sitemap_file'], $ri['urls']);
																									}
																									if($this->NdDirA6nDitD7['xs_compress_optimize']) {
																									$this->SH6rkpvcoJwTObK2(uoLhonBrXzQJi);
																									$this->SH6rkpvcoJwTObK2(ANjGsFZsLfL50zz);
																									$this->SH6rkpvcoJwTObK2(jcvNaNa6JCn7);
																									}
																									}
																									function CNjcMtWZ0qO6SCE4($kiEA_wt72tf = false)
																									{
																									if(($this->gzGmoj9EPJk + 60) < time() || $kiEA_wt72tf) {
																									o_V2IjGO4FbBy('apicache.db',oC07_mfUHXcgg1c($this->PyNsVzGdpjdX),ee6DE3zheBrz3N, true);
																									$this->gzGmoj9EPJk = time();
																									}
																									}
																									function pZZ_vjntZn($zzPXHIRGEIhU4UDq2)
																									{
																									return preg_replace('#(key)=[^&]*#', '$01=XXX', $zzPXHIRGEIhU4UDq2);
																									}
																									function oUbIZkWbORYleuYz1oH($zzPXHIRGEIhU4UDq2, $nVZ5xSWSqWW0yWp4 = false, $t3WFS0ZiyVyb09t9 = '')
																									{
																									global $Rgqo7Yox5Mydire;
																									$N7YWSbZP6G = $this->pZZ_vjntZn($zzPXHIRGEIhU4UDq2 . ($t3WFS0ZiyVyb09t9?'-'.md5($t3WFS0ZiyVyb09t9):''));
																									if(!$DI9BOt7L5tI = $this->PyNsVzGdpjdX[$N7YWSbZP6G])
																									$DI9BOt7L5tI = array();
																									$AdQNTXQ4a3A4Scydb = false;
																									$jl = array();
																									$KSgZLplBoSZ = $DI9BOt7L5tI ? $DI9BOt7L5tI['content'] : array();
																									Gpa9Bjai2UMV7SSv("\nVideo api: $N7YWSbZP6G , ".
																									($KSgZLplBoSZ ? 'Cached, '.$KSgZLplBoSZ['code'].
																									', '.date('Y-m-d', $DI9BOt7L5tI['lu']).
																									', '.date('Y-m-d', $DI9BOt7L5tI['lr'])
																									: 'Not in cache'));
																									if(!$KSgZLplBoSZ
																									||
																									(strstr($KSgZLplBoSZ['code'],'403')
																									&& !preg_match('#(private|authenticat|authorization|invalid)#si',
																									$KSgZLplBoSZ['content'])
																									)
																									){
																									$_tr = 3;
																									while($_tr>0){
																									$fd = $Rgqo7Yox5Mydire->fetch($zzPXHIRGEIhU4UDq2,
																									0,true, false, '',
																									array('skipip' => true,'anytype'=>true,'addheaders'=>$t3WFS0ZiyVyb09t9));
																									$_tr--;
																									if(($_fc = $fd['content']) && function_exists('json_decode'))
																									$jl = json_decode($_fc, 1);
																									if($jl && $jl['error'] && ($_er = $jl['error']['errors'])){
																									global $_xc_youtube_quota;
																									if(in_array($_er[0]['reason'],array("dailyLimitExceeded", "quotaExceeded"))){
																									$_xc_youtube_quota = true;
																									break;
																									
																									}
																									}
																									if(strstr($fd['code'],'200')){
																									break;
																									}
																									else {
																									Gpa9Bjai2UMV7SSv("Video API (".$fd['code'].") response, forcing delay\n");
																									sleep(3);
																									}
																									}
																									$KSgZLplBoSZ = $fd;
																									$AdQNTXQ4a3A4Scydb = true;
																									}
																									$gO3Yu0xwxYC = array();
																									if($KSgZLplBoSZ) {
																									$DI9BOt7L5tI['lr'] = time();
																									if($AdQNTXQ4a3A4Scydb) {
																									$DI9BOt7L5tI['content'] = $KSgZLplBoSZ;
																									$DI9BOt7L5tI['lu'] = time();
																									}
																									$this->PyNsVzGdpjdX[$N7YWSbZP6G] = $DI9BOt7L5tI;
																									$this->CNjcMtWZ0qO6SCE4();
																									$gO3Yu0xwxYC = $KSgZLplBoSZ;
																									if($nVZ5xSWSqWW0yWp4 )
																									{
																									$gO3Yu0xwxYC ['decont'] = $jl;
																									}
																									}
																									if(is_array($gO3Yu0xwxYC ['content']) && ($_rc=$gO3Yu0xwxYC ['content']['content']))
																									$gO3Yu0xwxYC ['content'] = $_rc;
																									return $gO3Yu0xwxYC;
																									}
																									function MI0geanYWeQXwYwu3Iy($g6xvGaGN3)
																									{
																									
																									return $s3QpPyHcHC3fC75QtqK;
																									}
																									function Bd7ePAZTqSOAjhyfLy($fb23nrOMWYh, &$uL6jaDurIdYfCHZeQw)
																									{
																									global $nFH9m45vOeB_pZEWc, $nLE80Yeo9hUtalSK, $qTdmVjw8SF, $sm_proc_list, $QlnrAnwM2MWzbFu, $iMajoCXnU, $iQjQee0FhjFPc8hCI;
																									$RBqXS02Bf22rODaNjU = $this->NdDirA6nDitD7['xs_chlog'];
																									$MVM2pokWncG = cJLzmjY4Kt1Ed9(Swpw9A1Vzx69,  'sitemap_xml_tpl.xml');
																									$kW1tc2rC7otq7v = file_get_contents(Swpw9A1Vzx69.$MVM2pokWncG);
																									preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $kW1tc2rC7otq7v, $nFH9m45vOeB_pZEWc);
																									$nFH9m45vOeB_pZEWc[1] = str_replace('www.xml-sitemaps.com ', 'www.xml-sitemaps.com ('. IQOjcNjdwElwhbrGCK.') ', $nFH9m45vOeB_pZEWc[1]);
																									$nFH9m45vOeB_pZEWc[1] = str_replace('%GEN_URL%', $this->NdDirA6nDitD7['gendom'], $nFH9m45vOeB_pZEWc[1]);
																									$sKyRIvUww4bs9oF1N = preg_replace('#[^\\/]+?\.xml$#', '', $this->NdDirA6nDitD7['xs_smurl']);
																									$sKyRIvUww4bs9oF1N = preg_replace('#^.*\://.*?/#', '/', $sKyRIvUww4bs9oF1N);
																									$nFH9m45vOeB_pZEWc[1] = str_replace('%SM_BASE%', $sKyRIvUww4bs9oF1N, $nFH9m45vOeB_pZEWc[1]);
																									if($this->NdDirA6nDitD7['xs_disable_xsl'])
																									$nFH9m45vOeB_pZEWc[1] = preg_replace('#<\?xml-stylesheet.*\?>#', '', $nFH9m45vOeB_pZEWc[1]);
																									if($this->NdDirA6nDitD7['xs_xsl_custom']){
																									$nFH9m45vOeB_pZEWc[1] = str_replace('sitemap.xsl',$this->NdDirA6nDitD7['xs_xsl_custom'],$nFH9m45vOeB_pZEWc[1]);
																									}else
																									if($this->NdDirA6nDitD7['xs_nobrand']){
																									$nFH9m45vOeB_pZEWc[1] = str_replace('sitemap.xsl','sitemap_nb.xsl',$nFH9m45vOeB_pZEWc[1]);
																									$nFH9m45vOeB_pZEWc[1] = preg_replace('#<!-- created.*?>#','',$nFH9m45vOeB_pZEWc[1]);
																									}
																									$RcMQpOnRNK3BGAE = implode('', file(Swpw9A1Vzx69.'sitemap_ror_tpl.xml'));
																									preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $RcMQpOnRNK3BGAE, $nLE80Yeo9hUtalSK);
																									$AUvbX9u0sLeEdxYi6M = implode('', file(Swpw9A1Vzx69.'sitemap_rss_tpl.xml'));
																									preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $AUvbX9u0sLeEdxYi6M, $IAHZJgdvm1lrV5vMU);
																									$xOt3pjD2lsYosJl0P = implode('', file(Swpw9A1Vzx69.'sitemap_base_tpl.xml'));
																									preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $xOt3pjD2lsYosJl0P, $qTdmVjw8SF);
																									$this->cQjxlLL1n = $this->NdDirA6nDitD7['xs_sm_size']?$this->NdDirA6nDitD7['xs_sm_size']:50000;
																									$this->sm_filesplit = $this->NdDirA6nDitD7['xs_sm_filesize']?$this->NdDirA6nDitD7['xs_sm_filesize']:10;
																									$this->sm_filesplit = max(intval($this->sm_filesplit*1024*1024),2000)-1000;
																									if(isset($this->NdDirA6nDitD7['xs_webinfo']) && !$this->NdDirA6nDitD7['xs_webinfo'])
																									unset($this->a0UBDsP3f73El8[0]);
																									if(!$this->NdDirA6nDitD7['xs_imginfo'])
																									unset($this->a0UBDsP3f73El8[1]);
																									if(!$this->NdDirA6nDitD7['xs_videoinfo'])
																									unset($this->a0UBDsP3f73El8[2]);
																									if(!$this->NdDirA6nDitD7['xs_newsinfo'])
																									unset($this->a0UBDsP3f73El8[3]);
																									if(!$this->NdDirA6nDitD7['xs_makemob'])
																									unset($this->a0UBDsP3f73El8[4]);
																									if(!$this->NdDirA6nDitD7['xs_rssinfo'])
																									unset($this->a0UBDsP3f73El8[5]);
																									if(!$this->a0UBDsP3f73El8 && !$this->NdDirA6nDitD7['xs_maketxt'])return;
																									$_alang = preg_split('#[\r\n]+#', $this->NdDirA6nDitD7['xs_alt_lang']);
																									$_acur = '';
																									$_at = '';
																									$this->ScsSEVE1SEy = array('s' => array(), 'r' => array());
																									foreach($_alang as $v)
																									if(trim($v)){
																									$me = explode(' ', $v);
																									if($me[1]) {
																									$_t = 'hreflang';
																									if(preg_match('#^(.*)="([^\"]*)"\s+(.*)$#', $v, $_ahm)){
																									$_t = $_ahm[1];
																									$me[0] = $_ahm[2];
																									$me[1] = $_ahm[3];
																									}
																									$_ah = array(
																									't' => $_t,
																									'l' => $me[0],
																									'u' => $me[1]
																									);
																									$this->ScsSEVE1SEy[$_at][$_acur][] = $_ah;
																									}else {
																									$_at = strstr($v,'*') ? 'r' : 's';
																									$_acur = $v;
																									$this->ScsSEVE1SEy[$_at][$_acur] = array();
																									}
																									}
																									$ctime = date('Y-m-d H:i:s');
																									$U3bpnz4WRhdOIsB = 0;
																									global $k1iJxSJlsU;
																									$tt = array('<','>');
																									foreach ($tt as $zQz8nycC2i )
																									$k1iJxSJlsU[$zQz8nycC2i] = '&#'.ord($zQz8nycC2i).';';
																									for($i=0;$i<31;$i++)
																									$k1iJxSJlsU[chr($i)] = '';
																									
																									$k1iJxSJlsU[chr(0)] = $k1iJxSJlsU[chr(10)] = $k1iJxSJlsU[chr(13)] = '';
																									$k1iJxSJlsU[' '] = '%20';
																									$pf = 0;
																									
																									$EE1r4Layx = intval($QlnrAnwM2MWzbFu['istart']);
																									$this->vYxapMaKqR1k7z($QlnrAnwM2MWzbFu);
																									if($this->NdDirA6nDitD7['xs_maketxt'])
																									{
																									$c9qhNYRMf9f = $this->vbRWo7TQbTs7U2LjeN1['fopen'](uoLhonBrXzQJi.$this->HFtH6NteYXZ9HymrT, $EE1r4Layx?'a':'w');
																									if(!$c9qhNYRMf9f)$iQjQee0FhjFPc8hCI[] = uoLhonBrXzQJi.$this->HFtH6NteYXZ9HymrT;
																									}
																									if($this->NdDirA6nDitD7['xs_makeror'])
																									{
																									$uaeVLmjnf7Bu = FF49IdHtu1GMv4(ANjGsFZsLfL50zz, $EE1r4Layx?'a':'w');
																									$rc = str_replace('%INIT_URL%', $this->NdDirA6nDitD7['xs_initurl'], $nLE80Yeo9hUtalSK[1]);
																									if($uaeVLmjnf7Bu)
																									nvEkwuzWTeIauFjD5GO($uaeVLmjnf7Bu, $rc);
																									else
																									$iQjQee0FhjFPc8hCI[] = ANjGsFZsLfL50zz;
																									}
																									if($this->NdDirA6nDitD7['xs_rssinfo'])
																									{
																									$lT57VV7tw6GT = $this->uurl_p . basename(jcvNaNa6JCn7);
																									$U0xmpYctZ1Gn = jcvNaNa6JCn7;
																									$eVFZCQdz_Hz2zQQAl1 = FF49IdHtu1GMv4($U0xmpYctZ1Gn, $EE1r4Layx?'a':'w');
																									$rc = str_replace('%INIT_URL%', $this->NdDirA6nDitD7['xs_initurl'], $IAHZJgdvm1lrV5vMU[1]);
																									$rc = str_replace('%FEED_TITLE%', ($_rd=$this->NdDirA6nDitD7['xs_rsstitle'])?$_rd:'My Feed at '.$this->NdDirA6nDitD7['xs_initurl'], $rc);
																									$rc = str_replace('%FEED_DESC%', ($_rd=$this->NdDirA6nDitD7['xs_rssdesc'])?$_rd:'My Feed at '.$this->NdDirA6nDitD7['xs_initurl'], $rc);
																									$rc = str_replace('%BUILD_DATE%', gmdate('D, d M Y H:i:s +0000'), $rc);
																									$rc = str_replace('%SELF_URL%', $lT57VV7tw6GT, $rc);
																									if($eVFZCQdz_Hz2zQQAl1)
																									nvEkwuzWTeIauFjD5GO($eVFZCQdz_Hz2zQQAl1, $rc);
																									else
																									$iQjQee0FhjFPc8hCI[] = $U0xmpYctZ1Gn;
																									}
																									if($sm_proc_list)
																									foreach($sm_proc_list as $k=>$aE7RwBu5Zd3)
																									$sm_proc_list[$k]->b36VVuUIo($this->NdDirA6nDitD7, $this->vbRWo7TQbTs7U2LjeN1, $this->uoIAM7fvhvq2irwCt);
																									if($this->NdDirA6nDitD7['xs_write_delay'])
																									list($AoQ0gFTB1C, $vS_ONYyuiDqUAd) = explode('|',$this->NdDirA6nDitD7['xs_write_delay']);
																									
																									
																									biKIFeolSkNYaz('xloop');
																									for($i=$xn=$EE1r4Layx;$i<count($fb23nrOMWYh);$i++,$xn++)
																									{
																									
																									
																									
																									if($i%100 == 0) {
																									Csw6DNRGy();
																									global $th9r4riT2;$th9r4riT2->m820vHOHqXjLbour0(array('smcreate'=>array('xml',$i,count($fb23nrOMWYh))));
																									Gpa9Bjai2UMV7SSv(" / $i / ".(time()-$_tm));
																									$_tm=time();
																									iLftEYPCbh7lMGU(array(
																									'cmd'=> 'info',
																									'id' => 'percprog',
																									'text'=> number_format($i*100/count($fb23nrOMWYh),0).'%'
																									));
																									}
																									$E1XhTHiYYh = $this->F4J4wj1rij__dECR();
																									if($E1XhTHiYYh && ($i != $EE1r4Layx))
																									{
																									o_V2IjGO4FbBy($iMajoCXnU,LvwoBy4yxyXbghxY(array('istart'=>$i,'rinfo'=>$this->LyuTOF5B8)));
																									}
																									if($this->NdDirA6nDitD7['xs_memsave'])
																									{
																									$cu = EdM449UlgQK($fb23nrOMWYh[$i]);
																									}else
																									$cu = $fb23nrOMWYh[$i];
																									if(!is_array($cu)) $cu = ZemEb1wrkmtr2t($cu);
																									$l = $this->eUql7J95riDhA4($cu['link']);
																									$cu['link'] = $l;
																									if(!$l)continue;
																									$t = $this->ZpD4_OBArVXf15ihe($cu['t'], true, true);
																									$d = $this->ZpD4_OBArVXf15ihe($cu['d'] ? $cu['d'] : $cu['t'], true, true);
																									$t2 = $this->mGjlSGA1GLe($cu['t'], false);
																									
																									$d2 = $this->mGjlSGA1GLe($cu['d']?$cu['d']:$cu['t'], false);
																									$t3 = $this->mGjlSGA1GLe($cu['t']);
																									$d3 = $this->mGjlSGA1GLe($cu['d']?$cu['d']:$cu['t']);
																									$DpvCIS7S6ngBg = '';
																									$_clmzero  = ($cu['clm'] === '-');
																									if($cu['clm'] && !$cu['lm']
																									&& ($JaDunX0yOWsZP = preg_replace('#\s+[a-z]+$#is', '', $cu['clm']))
																									&& strtotime($JaDunX0yOWsZP))
																									{
																									$DpvCIS7S6ngBg = $JaDunX0yOWsZP;
																									}
																									else
																									switch($this->NdDirA6nDitD7['xs_lastmod']){
																									case 1:$DpvCIS7S6ngBg = $cu['lm'] ? $cu['lm'] : ($_clmzero?'':$ctime);break;
																									case 2:if(!$_clmzero)$DpvCIS7S6ngBg = $ctime;break;
																									case 3:if(!$_clmzero)$DpvCIS7S6ngBg = $this->NdDirA6nDitD7['xs_lastmodtime'];break;
																									}
																									$ts3f7whA0ZF = $Wcvn6F5spLDKSo = false;
																									if($cu['p'])
																									$p = $cu['p'];
																									else
																									{
																									$p = floatval($this->NdDirA6nDitD7['xs_priority']);
																									if($this->NdDirA6nDitD7['xs_autopriority'])
																									{
																									$p = $p*pow($this->NdDirA6nDitD7['xs_descpriority']?$this->NdDirA6nDitD7['xs_descpriority']:0.8,intval($cu['o']));
																									if($this->Vm4lvkoHoxPC)
																									{
																									$ts3f7whA0ZF = true;
																									$Wcvn6F5spLDKSo = ($this->Vm4lvkoHoxPC && !isset($this->Vm4lvkoHoxPC[$cu['link']]))
																									|| $this->I2TB3nwN17HB8Z3IKa[$cu['link']];
																									if($Wcvn6F5spLDKSo)
																									$p=0.95;
																									}
																									$p = max(0.0001,min($p,1.0));
																									$p = @number_format($p, 4);
																									}
																									if(!$this->NdDirA6nDitD7['xs_priority'])
																									$p = '';
																									}
																									if($p === '-') $p = '';
																									if($f === '-') $f = '';
																									if($DpvCIS7S6ngBg){
																									$DpvCIS7S6ngBg = strtotime($DpvCIS7S6ngBg);
																									$DpvCIS7S6ngBg = gmdate('Y-m-d\TH:i:s+00:00',$DpvCIS7S6ngBg);
																									}
																									$f = $cu['f']?$cu['f']:$this->NdDirA6nDitD7['xs_freq'];
																									$_al = array();
																									if($this->ScsSEVE1SEy['s'][$l])
																									$_al = $this->ScsSEVE1SEy['s'][$l];
																									else
																									{
																									foreach($this->ScsSEVE1SEy['r'] as $_aurl => $_ll)
																									if(preg_match('#'.$_aurl.'#i', $l, $lm)) {
																									$_al = $_ll;
																									foreach($_al as $_k=>$_v){
																									$_al[$_k]['u'] = preg_replace('#'.$_aurl.'#', $_v['u'], $l);
																									}
																									break;
																									}
																									}
																									$_alts = array();
																									$VoKZvT3nru4t4rOK9sN = true;
																									if(!$_al){
																									if($_al = $cu['hl']){
																									foreach($_al as $_k=>$_v){
																									$_v['u'] = $this->eUql7J95riDhA4($_v['u']);
																									$_al[$_k] = $_v;
																									}
																									}
																									$_alts = $_al;
																									$VoKZvT3nru4t4rOK9sN = false;
																									}
																									if($VoKZvT3nru4t4rOK9sN)
																									foreach($_al as $_k=>$_v){
																									$_v2 = $_v;
																									$_allk = strstr($_v['l'],',') ? explode(',', $_v['l']) : array($_v['l']);
																									foreach($_allk as $_ln){
																									$_v2['l'] = $_ln;
																									$_v2['u'] = $this->eUql7J95riDhA4(
																									str_replace('%lang%', $_ln,
																									preg_replace('#'.$l.'#', $_v['u'], $l)
																									)
																									);
																									$_alts[] = $_v2;
																									}
																									}
																									$C4seVZq3gbUZosTN7D = array(
																									'URL'=>$l,
																									'TITLE'=>$t,
																									'DESC'=>($d),
																									'PERIOD'=>$f,
																									'LASTMOD'=>$DpvCIS7S6ngBg,
																									'ORDER'=>$cu['o'],
																									'PRIORITY'=>$p,
																									'ALTLANG' => $_alts
																									);
																									if($this->NdDirA6nDitD7['xs_makemob'])
																									{
																									if(!$this->NdDirA6nDitD7['xs_mobileincmask'] ||
																									preg_match('#'.str_replace(' ', '|', preg_quote($this->NdDirA6nDitD7['xs_mobileincmask'],'#')).'#',$C4seVZq3gbUZosTN7D['URL']))
																									$this->aU6PBx5ARCuWtx4zxs(array_merge($C4seVZq3gbUZosTN7D, array('ismob'=>true)), $nFH9m45vOeB_pZEWc[2], 4);
																									}
																									
																									
																									$this->aU6PBx5ARCuWtx4zxs($C4seVZq3gbUZosTN7D, $nFH9m45vOeB_pZEWc[2], 0);
																									$xz = 'img';
																									$_ni = array();
																									$_pi = $this->jz8NRcx6BrPFhKdMh[$cu['link']];
																									if(!$_pi)$_pi = array();
																									if($cu['i'])
																									{
																									foreach($cu['i'] as $im){
																									$_ci = array(
																									'iurl'=>$this->eUql7J95riDhA4($im[0]),
																									'caption'=>$this->mGjlSGA1GLe($im[1]),
																									);
																									$C4seVZq3gbUZosTN7D['imgs'][] = $_ci;
																									if($RBqXS02Bf22rODaNjU)
																									{
																									if(! $_pi[$_ci['iurl']] )
																									{
																									if(count($this->qFTPWQSmU9)<$this->gAGERofc_rj5Fn)
																									$_ni[$_ci['iurl']]++;
																									}
																									else
																									if($_pi){
																									if(--$_pi[$_ci['iurl']]<=0)
																									unset($_pi[$_ci['iurl']]);
																									}
																									}
																									}
																									
																									if($_ni)
																									$this->qFTPWQSmU9[$cu['link']] = $_ni;
																									if(!$_pi)
																									unset($this->jz8NRcx6BrPFhKdMh[$cu['link']]);
																									else
																									$this->jz8NRcx6BrPFhKdMh[$cu['link']] = $_pi;
																									if($C4seVZq3gbUZosTN7D['imgs'])
																									{
																									$this->imgno+=count($C4seVZq3gbUZosTN7D['imgs']);
																									$this->aU6PBx5ARCuWtx4zxs($C4seVZq3gbUZosTN7D, $nFH9m45vOeB_pZEWc[2], 1);
																									}
																									unset($C4seVZq3gbUZosTN7D['imgs']);
																									}
																									$xz = '/img';
																									
																									if($this->NdDirA6nDitD7['xs_maketxt'] && $c9qhNYRMf9f)
																									$this->vbRWo7TQbTs7U2LjeN1['fwrite']($c9qhNYRMf9f, $cu['link']."\n");
																									if($sm_proc_list)
																									foreach($sm_proc_list as $aE7RwBu5Zd3)
																									$aE7RwBu5Zd3->hihz2xPavdu9YNOTo9K($C4seVZq3gbUZosTN7D);
																									if($this->NdDirA6nDitD7['xs_makeror'] && $uaeVLmjnf7Bu)
																									if(!$this->NdDirA6nDitD7['xs_ror_max'] ||
																									($i < $this->NdDirA6nDitD7['xs_ror_max']))
																									{
																									$tt = $t2;
																									$dd = $d2;
																									if($this->NdDirA6nDitD7['xs_ror_unique']){
																									$t0 = $tt;$d0=$dd;
																									while($riHsxx1tgqk4ZFis1Nx=$ai[md5('t'.$tt)]++){
																									$tt=$t0.' '.$riHsxx1tgqk4ZFis1Nx;
																									}
																									while($riHsxx1tgqk4ZFis1Nx=$ai[md5('d'.$dd)]++){
																									$dd=$d0.' '.$riHsxx1tgqk4ZFis1Nx;
																									}
																									}
																									$C4seVZq3gbUZosTN7D['TITLE'] = $tt;
																									$C4seVZq3gbUZosTN7D['DESC'] = $dd;
																									nvEkwuzWTeIauFjD5GO($uaeVLmjnf7Bu, $this->uoIAM7fvhvq2irwCt->UWnLY_7eLJrQU($nLE80Yeo9hUtalSK[2],$C4seVZq3gbUZosTN7D));
																									}
																									if($RBqXS02Bf22rODaNjU) {
																									if(!isset($this->Vm4lvkoHoxPC[$cu['link']]) &&
																									count($this->sITHkAPzSOe)<$this->gAGERofc_rj5Fn)
																									$this->sITHkAPzSOe[$cu['link']]++;
																									}
																									unset($this->Vm4lvkoHoxPC[$cu['link']]);
																									}
																									
																									biKIFeolSkNYaz('xloop',1);
																									$this->fSQQ690F_n1();
																									if($this->NdDirA6nDitD7['xs_maketxt'])
																									{
																									$this->vbRWo7TQbTs7U2LjeN1['fclose']($c9qhNYRMf9f);
																									@chmod(uoLhonBrXzQJi.$this->HFtH6NteYXZ9HymrT, 0666);
																									}
																									if($this->NdDirA6nDitD7['xs_makeror'])
																									{
																									if($uaeVLmjnf7Bu)
																									nvEkwuzWTeIauFjD5GO($uaeVLmjnf7Bu, $nLE80Yeo9hUtalSK[3]);
																									fclose($uaeVLmjnf7Bu);
																									@chmod(ANjGsFZsLfL50zz, 0666);
																									}
																									if($this->NdDirA6nDitD7['xs_rssinfo'])
																									{
																									if($eVFZCQdz_Hz2zQQAl1)
																									nvEkwuzWTeIauFjD5GO($eVFZCQdz_Hz2zQQAl1, $IAHZJgdvm1lrV5vMU[3]);
																									fclose($eVFZCQdz_Hz2zQQAl1);
																									@chmod(jcvNaNa6JCn7, 0666);
																									}
																									if($sm_proc_list)
																									foreach($sm_proc_list as $aE7RwBu5Zd3)
																									$aE7RwBu5Zd3->B2It0AlLQuI_();
																									o_V2IjGO4FbBy($iMajoCXnU,LvwoBy4yxyXbghxY(array('done'=>true)));
																									iLftEYPCbh7lMGU(array('cmd'=> 'info','id' => 'percprog',''));
																									}
																									function RSb0TgdUw11M04($O5xzS_c6yMs_Xg, $CA4F8xf5iDM, $HFtH6NteYXZ9HymrT = '')
																									{
																									for($i=0;file_exists($sf=$O5xzS_c6yMs_Xg.tEFHaxOsM7H77NTsow($i,$CA4F8xf5iDM).$HFtH6NteYXZ9HymrT);$i++)
																									WSvkWWFpjZnripMo($sf);
																									}
																									function xAaEQ2oloV($CA4F8xf5iDM, $pELN9f6jh = true, $IodsqaFfc5Zk = true)
																									{
																									if($this->NdDirA6nDitD7['xs_compress']!=1) {
																									if($pELN9f6jh)
																									$this->RSb0TgdUw11M04(ee6DE3zheBrz3N,$CA4F8xf5iDM);
																									if($IodsqaFfc5Zk)
																									$this->RSb0TgdUw11M04($this->z3NGD_B8KFFSEH0,$CA4F8xf5iDM);
																									}
																									if($this->NdDirA6nDitD7['xs_compress']>0) {
																									if($pELN9f6jh)
																									$this->RSb0TgdUw11M04(ee6DE3zheBrz3N,$CA4F8xf5iDM,'.gz');
																									if($IodsqaFfc5Zk)
																									$this->RSb0TgdUw11M04($this->z3NGD_B8KFFSEH0,$CA4F8xf5iDM,'.gz');
																									}
																									}
																									function SH6rkpvcoJwTObK2($CA4F8xf5iDM) {
																									if(file_exists($CA4F8xf5iDM) && !strstr($CA4F8xf5iDM, '.gz')){
																									$cn = file_get_contents($CA4F8xf5iDM);
																									if(o_V2IjGO4FbBy($CA4F8xf5iDM, $cn, '', true)){
																									WSvkWWFpjZnripMo($CA4F8xf5iDM);
																									}
																									}
																									}
																									function qZRhNbIzQ0($YrBawm4FC69, $oTEJzBFIN48EH)
																									{
																									global $iQjQee0FhjFPc8hCI;
																									$NVdQjs3Vojix = false;
																									if(!@copy($YrBawm4FC69,$oTEJzBFIN48EH))
																									{
																									if($this->NdDirA6nDitD7['xs_filewmove'] && file_exists($oTEJzBFIN48EH) ){
																									WSvkWWFpjZnripMo($oTEJzBFIN48EH);
																									}
																									if($cn = @FF49IdHtu1GMv4($oTEJzBFIN48EH, 'w')){
																									@nvEkwuzWTeIauFjD5GO($cn, file_get_contents($YrBawm4FC69));
																									@fclose($cn);
																									}else
																									if(file_exists($YrBawm4FC69))
																									{
																									$iQjQee0FhjFPc8hCI[] = $oTEJzBFIN48EH;
																									$NVdQjs3Vojix = true;
																									}
																									}
																									
																									@chmod($YrBawm4FC69, 0666);
																									@chmod($oTEJzBFIN48EH, 0666);
																									return $NVdQjs3Vojix;
																									}
																									function p1dNB4yolo3L($CA4F8xf5iDM, $rlUqciS9wW = array())
																									{
																									Gpa9Bjai2UMV7SSv("Copy sitemap $CA4F8xf5iDM\n",2);
																									$sepBN7qEV9 = ($this->NdDirA6nDitD7['xs_compress']>0) ? '.gz' : '';
																									$C2vh2tZOuKd1NL = ($this->NdDirA6nDitD7['xs_compress']==2) ? '.gz' : '';
																									for($i=0;file_exists(ee6DE3zheBrz3N.($sf=tEFHaxOsM7H77NTsow($i,$CA4F8xf5iDM).$this->HFtH6NteYXZ9HymrT));$i++){
																									Gpa9Bjai2UMV7SSv( "...$sf\n",2);
																									if($C2vh2tZOuKd1NL) {
																									$cn = file_get_contents(ee6DE3zheBrz3N.$sf);
																									if(strstr($cn, '<sitemapindex'))
																									$cn = str_replace('.xml</loc>', '.xml.gz</loc>', $cn);
																									o_V2IjGO4FbBy($_nf=ee6DE3zheBrz3N.$sf, $cn, '', true);
																									@chmod($_nf, 0666);
																									$this->qZRhNbIzQ0(ee6DE3zheBrz3N.$sf.$C2vh2tZOuKd1NL,$this->z3NGD_B8KFFSEH0.$sf.$C2vh2tZOuKd1NL);
																									}
																									$tee7TlTmU9_Tb9l9 = (count($rlUqciS9wW)>1) && ($i==0);
																									if(!$tee7TlTmU9_Tb9l9 && $sepBN7qEV9 && $this->NdDirA6nDitD7['xs_compress_optimize']){
																									
																									WSvkWWFpjZnripMo($this->z3NGD_B8KFFSEH0.$sf);
																									WSvkWWFpjZnripMo(ee6DE3zheBrz3N.$sf);
																									}else {
																									$this->qZRhNbIzQ0(ee6DE3zheBrz3N.$sf,$this->z3NGD_B8KFFSEH0.$sf);
																									}
																									}
																									}
																									function htNPsN8djODDs_Gj($CA4F8xf5iDM, $tI0TeWItNVKuen = -1, $Pxpg904bayY8cOx2f4Y = '', $Kcvw3bSWPzap = 0)
																									{
																									$this->t4ID8A7Ta545brXcnBn();
																									$cn = '';
																									$_fold = (strstr($CA4F8xf5iDM,'/')||strstr($CA4F8xf5iDM,'\\')) ? ''
																									: $this->z3NGD_B8KFFSEH0;//ee6DE3zheBrz3N ;
																									$gp = ($this->NdDirA6nDitD7['xs_compress']>0) ? '.gz' : '';
																									$_fapp = $this->NdDirA6nDitD7['xs_compress_optimize'] ? $gp : ($Kcvw3bSWPzap ?  '' : $gp);
																									Gpa9Bjai2UMV7SSv("Reading sitemaps with $CA4F8xf5iDM + $gp + $_fapp\n",2);
																									for($i=0;file_exists($sf=$_fold.tEFHaxOsM7H77NTsow($i,$CA4F8xf5iDM).$_fapp);$i++)
																									{
																									Gpa9Bjai2UMV7SSv("Get current sitemap $sf\n",2);
																									
																									if($i==1)$cn = '';// clear index pointing to xml files
																									if(@filesize($sf)<100000000)// 100MB max
																									$cn .= $_fapp?implode('',gzfile($sf)):ouNNfKx_I37NGU4TZMQ($sf);
																									if($i>200)break;
																									}
																									$G7_Qczget6xmSTAmu = array(
																									array('loc', 'news:publication_date', 'priority'),
																									array('link', 'pubDate', ''), //rss
																									);
																									$mt = $G7_Qczget6xmSTAmu[$Kcvw3bSWPzap];
																									preg_match_all('#<'.$mt[0].'>(.*?)</'.$mt[0].'>'.
																									(($tI0TeWItNVKuen>=0) ? '.*?<'.$mt[1].'>(.*?)</'.$mt[1].'>' : '').
																									(($Pxpg904bayY8cOx2f4Y && $mt[2])? '.*?<'.$mt[2].'>(.*?)</'.$mt[2].'>' : '').
																									'#is',$cn,$um);
																									$al = array();
																									foreach($um[1] as $i=>$l)
																									{
																									if($Pxpg904bayY8cOx2f4Y){
																									if(!strstr($l, $Pxpg904bayY8cOx2f4Y))
																									continue;
																									$l = substr($l, strlen($Pxpg904bayY8cOx2f4Y));
																									}
																									if(!$l)continue;
																									if($tI0TeWItNVKuen<=0) {
																									if($um[2][$i])
																									$al[$l] = $um[2][$i];
																									else
																									$al[$l]++;
																									}
																									else
																									if(time()-strtotime($um[2][$i])<=$tI0TeWItNVKuen*24*3600)
																									$al[$l] = $um[2][$i];
																									}
																									return $al;
																									}
																									function uuBgKgjH27($CA4F8xf5iDM, $fYCBAaaiqmBiAWY7q8p)
																									{
																									$this->t4ID8A7Ta545brXcnBn();
																									$cn = '';
																									$_fold = (strstr($CA4F8xf5iDM,'/')||strstr($CA4F8xf5iDM,'\\')) ? '' : ee6DE3zheBrz3N ;
																									$gp = ($this->NdDirA6nDitD7['xs_compress']>0) ? '.gz' : '';
																									$_fapp = ($Kcvw3bSWPzap ?  '' : $gp);
																									for($i=0;file_exists($sf=$_fold.tEFHaxOsM7H77NTsow($i,$CA4F8xf5iDM).$_fapp);$i++)
																									{
																									
																									if(@filesize($sf)<100000000)// 100MB max
																									$cn .= $_fapp?implode('',gzfile($sf)):ouNNfKx_I37NGU4TZMQ($sf);
																									if($i>200)break;
																									}
																									preg_match_all('#<url[^>]*>(.*?)</url>#is',$cn,$um);
																									$al = array();
																									foreach($um[1] as $i=>$l)
																									{
																									if(preg_match('#<loc[^>]*>(.*?)</loc>#is',$l,$KLW4tTm2QznBa))
																									{
																									$qLRXM4E3XhVdmW = array();
																									preg_match_all('#<'.$fYCBAaaiqmBiAWY7q8p.'[^>]*>(.*?)</'.$fYCBAaaiqmBiAWY7q8p.'>#is',$l,$Jq59eV5dPaUO7Pf);
																									foreach($Jq59eV5dPaUO7Pf[1] as $i=>$l2)
																									{
																									$qLRXM4E3XhVdmW[$l2]++;
																									}
																									if($qLRXM4E3XhVdmW){
																									$al[$KLW4tTm2QznBa[1]] = $qLRXM4E3XhVdmW;
																									}
																									}
																									}
																									return $al;
																									}
																									}
																									global $ROS3yRt5ajctkOls;
																									$ROS3yRt5ajctkOls = new XMLCreator();
																									}
																									



































































































