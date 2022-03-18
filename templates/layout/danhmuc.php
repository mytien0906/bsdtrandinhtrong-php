<div class="container">
  <div class="tt-desc">
    <div class="tt-thuonghieu">
      <?php for($i=0;$i<count($danhmuc_thuonghieu);$i++){ ?>
      <div class="i-thuonghieu">
        <a href="thuong-hieu/<?=$danhmuc_thuonghieu[$i]['tenkhongdau']?>" title="<?=$danhmuc_thuonghieu[$i]['ten_'.$lang]?>">
          <img src="<?=_upload_product_l.$danhmuc_thuonghieu[$i]['photo']?>" alt="<?=$danhmuc_thuonghieu[$i]['ten_'.$lang]?>">
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>