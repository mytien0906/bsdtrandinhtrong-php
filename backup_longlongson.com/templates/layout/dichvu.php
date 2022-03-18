<div class="w-dichvu">
	<div class="center">
		<div class="lienhe-tit">
			<h2><?=_dichvu?></h2>
		</div>
		<div class="w-clear">
			<?php for($i=0;$i<count($dichvu);$i++) {?>
		        <div class="box-newssp w-clear">
		            <h3>
		                <a href="dich-vu/<?=$dichvu[$i]['tenkhongdau']?>">
		                    <?=$dichvu[$i]['ten']?>
		                </a>
		            </h3>
		            <div>
		                <?=limitWord($dichvu[$i]['mota'],60)?>
		            </div>
		        </div>
		    <?php }?>
		</div>
	</div>
</div>
<div class="bong-bot"></div>