<div id="wowslider-container1">
	<div class="ws_images">
	    <ul>
	    <?php for($i=0;$i<count($slide);$i++){?>
	        <li><a href="<?=$slide[$i]['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$slide[$i]['thumb']?>" alt="slideshow" title="1" id="wows1_<?=$i?>"/></a></li>
	    <?php }?>
	    </ul>
	</div>
</div>				
<script type="text/javascript" src="js/wowslider.js"></script>
<script type="text/javascript" src="js/wow.script.js"></script>