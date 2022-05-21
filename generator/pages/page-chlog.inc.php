<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$lEhnf96687326Zilkm=957242257;$pRQtD79603521hGeUV=546892088;$QcBms54383989JEGiZ=740957166;$BTzak67015376hDeHI=135138203;$ZaoKs55913144vGAFe=684046880;$qNJDJ67045375dyRLH=890825561;$lGFbX69562082FipIF=895044957;$OMNNB12716566nCfzv=246906531;$tNPjb74908132HNzjx=237203798;$xCGWz55295862LVdiX=260347685;$QNNSa53621934dDayp=491670903;$mBnBo86290077gAhet=16684095;$wrBUo95956393iyNui=845889944;$zauCo75750839Epuge=38227979;$WrHHW81578184EiHFH=758896179;$mQHDx17972980fvhmb=485751891;$NTOqR77392325hGuJS=842241353;$gUJeH99233028gFvai=15480566;$BYzAe65147136Zusak=183132914;$eMUjH82553266tIOar=732333568;$EAPCu76622436aHIpy=398805479;$chJnS13903695lSrgq=132257864;$ZiWoh77454008KRYpf=857475372;$qNtfL34302573lnkgO=125862876;$CgSzc22269385iKbpj=331025507;$oqjFq55291578LeFIi=168208679;$LAQKl96122228vqlsv=932165477;$OqLyy11125636DLmiY=206975142;$SPNri84112223AwGbg=813576752;$cEiKw87629541IGNJf=462849689;$OiQye14884010dzPjU=442140769;$zMANf40196684MJErB=18422700;$lyybP35911661dtCVi=32183713;$iGtiK78852960EtIFX=986496888;$QxSsj39402805KcxKR=201502789;$bYjKr86726533QkhBe=505487711;$vjhdA58643160pRVOp=157218619;$EmYzQ18925338EIlWp=71972657;$ZQTGF85478765wMpkr=210263528;$FhGOx27042358sYSOI=963202722;$UFQnD65235125XbsJW=765018062;$YyPfE32450661cCspr=577826924;$hiiDd89476658xeQsY=565784451;$cKjPr81778450lwVYx=366916845;$mbQDA33767580ITPnw=4181967;$mGjxu29368873jOWiv=642717226;$uyoSl61786019LZoBw=398262460;$gWUFM49256897kKioh=94006278;$LXTzy81888609drTCA=345824267;$DieCh61632840CTpqQ=705176725;?><?php include Y9kqmA8n8Eh.'page-top.inc.php'; $ZS8EQDQqWg34aC = rOS0xWy3_xc_a47sVLK(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($ZS8EQDQqWg34aC); $FpROwXHaFPL=$_GET['log']; function pC4MJc_xqWf($nl){ $lc = ''; $it = 0; if($nl) foreach($nl as $l=>$il){ $lc .= $l."\n"; foreach($il as $i=>$c){ $lc .= "\t".$i."\n"; $it++; } } return array($it,$lc); } function MBJ2jUupRBIy($ar){ return isset($ar['#tot'])?$ar['#tot']:count($ar); } if($FpROwXHaFPL){ ?>
																												<div id="sidenote">
																												<div class="block1head">
																												Crawler logs
																												</div>
																												<div class="block1">
																												<?php for($i=0;$i<count($ZS8EQDQqWg34aC);$i++){ $mpKwhx_rQo = yGaQJqK9HVpIfih0GsZ($ZS8EQDQqWg34aC[$i]); if($i+1==$FpROwXHaFPL)echo '<u>'; ?>
																												<a href="index.<?php echo $qZg2CxSizqBrobZG?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$mpKwhx_rQo['time'])?></a>
																												( +<?php echo $mpKwhx_rQo['newurls']?count($mpKwhx_rQo['newurls']):'-'?> -
																												<?php echo $mpKwhx_rQo['losturls']?count($mpKwhx_rQo['losturls']):'-'?>)
																												</u>
																												<br>
																												<?php	} ?>
																												</div>
																												</div>
																												<?php } ?>
																												<div id="<?php  echo $FpROwXHaFPL?'shifted':'maincont'?>" >
																												<h2><i class="material-icons inline-icon">history</i> Site History</h2>
																												<?php if($FpROwXHaFPL){ $mpKwhx_rQo = yGaQJqK9HVpIfih0GsZ($ZS8EQDQqWg34aC[$FpROwXHaFPL-1]); ?><h4><?php echo date('j F Y, H:i',$mpKwhx_rQo['time'])?></h4>
																												<div class="inptitle">New URLs (<?php echo $mpKwhx_rQo['newurls']?count($mpKwhx_rQo['newurls']):'-'?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$mpKwhx_rQo['newurls']))?></textarea>
																												<div class="inptitle">Removed URLs (<?php echo $mpKwhx_rQo['losturls']?count($mpKwhx_rQo['losturls']):'-'?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$mpKwhx_rQo['losturls']))?></textarea>
																												<div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo MBJ2jUupRBIy($mpKwhx_rQo['urls_list_skipped'])?>)</div>
																												<textarea style="width:100%;height:300px"><?php foreach($mpKwhx_rQo['urls_list_skipped'] as $k1=>$v1) if($k1[0]!='#') { foreach($v1 as $k=>$v) if(is_array($v)) echo '['.@htmlspecialchars($k.' - '.$k1.' - '.$v[0].($v['ref']?' - '.$v['ref']:''))."]\n"; else echo @htmlspecialchars($k.' - '.$k1)."\n"; } ?></textarea>
																												<?php $ni = pC4MJc_xqWf($mpKwhx_rQo['newurls_i']); ?>
																												<div class="inptitle">New images (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = pC4MJc_xqWf($mpKwhx_rQo['losturls_i']); ?>
																												<div class="inptitle">Removed images (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = pC4MJc_xqWf($mpKwhx_rQo['newurls_v']); ?>
																												<div class="inptitle">New videos (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = pC4MJc_xqWf($mpKwhx_rQo['losturls_v']); ?>
																												<div class="inptitle">Removed videos (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php }else{ ?>
																												<table class="ltable">
																												<tr class=block1head>
																												<th>No</th>
																												<th>Date/Time</th>
																												<th>Indexed pages</th>
																												<th>Processed pages</th>
																												<th>Skipped pages</th>
																												<th>Proc.time</th>
																												<th>Bandwidth</th>
																												<th>New URLs</th>
																												<th>Removed URLs</th>
																												<th>Broken links</th>
																												<?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
																												</tr>
																												<?php  $kBOgcbjOn7kTHyphMHN=array(); for($i=0;$i<count($ZS8EQDQqWg34aC);$i++){ $mpKwhx_rQo = yGaQJqK9HVpIfih0GsZ($ZS8EQDQqWg34aC[$i]); if(!$mpKwhx_rQo)continue; foreach($mpKwhx_rQo as $k=>$v)if(!is_array($v))$kBOgcbjOn7kTHyphMHN[$k]+=intval($v);else $kBOgcbjOn7kTHyphMHN[$k]+=count($v); ?>
																												<tr class=block1>
																												<td><?php echo $i+1?></td>
																												<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$mpKwhx_rQo['time'])?></a></td>
																												<td><?php echo number_format($mpKwhx_rQo['ucount'])?></td>
																												<td><?php echo number_format($mpKwhx_rQo['crcount'])?></td>
																												<td><?php echo MBJ2jUupRBIy($mpKwhx_rQo['urls_list_skipped'])?></td>
																												<td><?php echo number_format($mpKwhx_rQo['ctime'],2)?>s</td>
																												<td><?php echo number_format($mpKwhx_rQo['tsize']/1024/1024,2)?></td>
																												<td><?php echo $mpKwhx_rQo['newurls']?count($mpKwhx_rQo['newurls']):'-'?></td>
																												<td><?php echo $mpKwhx_rQo['losturls']?count($mpKwhx_rQo['losturls']):'-'?></td>
																												<td><?php echo count($mpKwhx_rQo['u404'])?></td>
																												<?php if($grab_parameters['xs_imginfo'])echo '<td>'.$mpKwhx_rQo['images_no'].'</td>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$mpKwhx_rQo['videos_no'].'</td>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$mpKwhx_rQo['news_no'].'</td>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$mpKwhx_rQo['rss_no'].'</td>';?>
																												</tr>
																												<?php }?>
																												<tr class=block1>
																												<th colspan=2>Total</th>
																												<th><?php echo number_format($kBOgcbjOn7kTHyphMHN['ucount'])?></th>
																												<th><?php echo number_format($kBOgcbjOn7kTHyphMHN['crcount'])?></th>
																												<th>-</th>
																												<th><?php echo number_format($kBOgcbjOn7kTHyphMHN['ctime'],2)?>s</th>
																												<th><?php echo number_format($kBOgcbjOn7kTHyphMHN['tsize']/1024/1024,2)?> Mb</th>
																												<th><?php echo ($kBOgcbjOn7kTHyphMHN['newurls'])?></th>
																												<th><?php echo ($kBOgcbjOn7kTHyphMHN['losturls'])?></th>
																												<th>-</th>
																												<?php if($grab_parameters['xs_imginfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<th></th>';?>
																												</tr>
																												</table>
																												<?php } ?>
																												</div>
																												<?php include Y9kqmA8n8Eh.'page-bottom.inc.php'; 



































































































