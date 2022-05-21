<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$YIBPP62773900RzJxy=49827037;$tpTKL25575623GcUlH=55736818;$EaAQV79029506qlzfk=230143817;$yNlol51143264dCSUF=228927463;$mAsGi86763330GjyMZ=280250618;$QwXyz18660447Oppqi=411677640;$Lyoxw49254732wUfTz=508048711;$qfnTg17826269yKtSU=108522829;$BDlhG25049726ElyPF=277015560;$YPPvs79231101UjIGQ=62373444;$GTzcN27395778OTxNA=813304983;$KQFMV50784958MUTyH=883209874;$ZcNiJ10523903ElCAQ=555969943;$bGxmk11086205mXoIb=731917576;$AbozR98610066sSrmV=806670231;$KUtRl62098562ILPld=987304697;$PTkDt84077402exQoY=62698085;$rDxvO82201708NoZqj=968220456;$JAKcZ88513726PrFWd=188841870;$BtTal62081617bucWs=280509910;$oThji80824423iVIgb=565893276;$WZbGR17796395alwgK=116419820;$EkafF86771487Qefsl=313649715;$qQoLJ15785964jGyNz=441343619;$bFoOj56668217gXTTS=525612392;$JTZBB66480973rvtMn=448384829;$csFBp97834544YcqCP=511132480;$HAbIx92562085LLnxN=547995370;$Ioeqy26666289zKmMO=540777145;$zyKUC38499935EQLPh=653699758;$KtfwG30680400JjPgW=612810151;$nKBpY14038572rjrdX=311140693;$NnJJh88915260VpHEE=891633734;$Uafxi47628556EFHll=639325228;$jCLXN31605780BpjDh=633922116;$zzzvr17131822KsFgD=341925323;$bXYxJ44269816WuQyQ=492841884;$ruENc32953430BheNs=733591111;$aofIk70872967knecM=434317351;$GNqYp32542094pdzue=254363497;$ympcT83649893AnfEB=262965537;$DTBnN28166925AJdff=626977101;$LwKGY27832478bcxbc=875270500;$TXqEW57008354kXHbK=388759665;$vIyIO51783610Cdtmu=58993402;$jqupt75973223yCWZW=981125087;$chjmv32661819CMYGE=546830378;$MGwbP26757952bKaYS=615784440;$dEzvz95288512TNuVo=182028086;$rPUrZ54304927tawxP=120491993;?><?php include Y9kqmA8n8Eh.'page-top.inc.php'; $OgaVC9emCoRfzxBl_A = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ o_V2IjGO4FbBy(fblAQEhuR9vBvG3WD3,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2>'; }else if(file_exists($fn=ee6DE3zheBrz3N.rwrAhkTe5AehA)&&(time()-filemtime($fn)<10*60)){ $GhswW2qhfftO1qv=true; $OgaVC9emCoRfzxBl_A = 1; } if($OgaVC9emCoRfzxBl_A){ ?>
																											<div id="maincont">
																											<?php if($GhswW2qhfftO1qv) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$qZg2CxSizqBrobZG.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																											<script type="text/javascript">
																											var lastupdate = 0;
																											var framegotsome = false;
																											function vkqKn2NFa4i()
																											{
																											var cd = new Date();
																											if(!lastupdate)return false;
																											var df = (cd - lastupdate)/1000;
																											<?php if($grab_parameters['xs_autoresume']){?>
																											var re = document.getElementById('rlog');
																											re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																											var ifr = document.getElementById('cproc');
																											var frfr = window.frames['clog'];
																											
																											var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																											if(typeof frfr != 'undefined') {
																											if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																											!frfr.pageLoadCompleted)
																											{
																											
																											framegotsome = true;
																											doresume = false;
																											}
																											
																											if(!frfr.document.getElementById('glog')) {
																											
																											}
																											}
																											if(doresume)
																											{
																											var rle = document.getElementById('runlog');
																											lastupdate = cd;
																											if(rle)
																											{
																											rle.style.display  = '';
																											rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																											}
																											var lc = ifr.src;
																											lc = lc.replace(/resume=\d*/,'resume=1')
																											lc = lc.replace(/seed=[\d\.]*/,'seed='+Math.random())
																											
																											ifr.src = lc;
																											}
																											<?php } ?>
																											}
																											window.setInterval('vkqKn2NFa4i()', 1000);
																											</script>
																											<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $qZg2CxSizqBrobZG?>?op=crawlproc&bg=<?php echo $_REQUEST['bg']?>&resume=<?php echo $_REQUEST['resume']?>&seed=<?php echo rand(1E8,1E9);?>"></iframe>
																											<!--
																											<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																											-->
																											<div id="rlog" style="overflow:auto;"></div>
																											<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																											</div>
																											<?php }else if(!$DDM1DB3126TD17y) { ?>
																											<div id="sidenote">
																											<?php include Y9kqmA8n8Eh.'page-sitemap-detail.inc.php'; ?>
																											</div>
																											<div id="shifted">
																											<h2><i class="material-icons inline-icon">autorenew</i>  Create Sitemap</h2>
																											<form action="index.<?php echo $qZg2CxSizqBrobZG?>?submit=1" method="POST" enctype2="multipart/form-data">
																											<input type="hidden" name="op" value="crawl">
																											<div class="inptitle">Run in background</div>
																											<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																											<?php if(@file_exists(ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW)){ if(@file_exists(ee6DE3zheBrz3N.HIlbAcY4dtv) &&(filemtime(ee6DE3zheBrz3N.HIlbAcY4dtv)>filemtime(ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW)) ){ $y24q_R07__BQComwH = @q_5fg__LAvGno9yXn(ouNNfKx_I37NGU4TZMQ(ee6DE3zheBrz3N.HIlbAcY4dtv, true)); } if(!$y24q_R07__BQComwH){ $TYHRDZiWCRbVqzBb6 = @q_5fg__LAvGno9yXn(ouNNfKx_I37NGU4TZMQ(ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW, true)); $y24q_R07__BQComwH = $TYHRDZiWCRbVqzBb6['progpar']; } ?>
																											<div class="inptitle">Resume last session</div>
																											<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session
																											<br />Updated on <?php $D19NjJBdnRIKP = filemtime(ee6DE3zheBrz3N.EZDFQmUtjVbpx9NW); echo date('Y-m-d H:i:s',$D19NjJBdnRIKP); if(time()-$D19NjJBdnRIKP<600)echo ' ('.(time()-$D19NjJBdnRIKP).' seconds ago) '; ?>,
																											<?php echo	'Time elapsed: '.LgKQwfOZ_tS23VGx619($y24q_R07__BQComwH[0]).',<br />Pages crawled: '.intval($y24q_R07__BQComwH[3]). ' ('.intval($y24q_R07__BQComwH[7]).' added in sitemap), '. 'Queued: '.$y24q_R07__BQComwH[2].', Depth level: '.$y24q_R07__BQComwH[5]. '<br />Current page: '.$y24q_R07__BQComwH[1].' ('.number_format($y24q_R07__BQComwH[10],1).')'; } ?>
																											</label>
																											<div class="inptitle">Click button below to start crawl manually:</div>
																											<div class="inptitle">
																											<input class="button" type="submit" name="crawl" value="Start Creating Sitemap">
																											</div>
																											</form>
																											<h2>Cron job setup</h2>
																											You can use the following command line to setup the cron job for sitemap generator:
																											<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																											<h2>Web Cron setup</h2>
																											If you cannot setup a regular cron task on your server, you can try a web cron instead:
																											<div class="inptitle"><?php 	echo $hevPGedyOjCltJKc.'/index.php?op=crawlproc&resume=1'?></div>
																											</div>
																											<?php } include Y9kqmA8n8Eh.'page-bottom.inc.php'; 



































































































