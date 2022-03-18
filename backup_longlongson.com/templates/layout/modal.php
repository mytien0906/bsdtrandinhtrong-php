<!-- Modal -->
<div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng nhập/ Đăng ký</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-xs-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                <ul class="nav nav-tabs" style="margin-left:0px; margin-bottom:15px;">
                    <li class="active">
                        <a href="#Login" data-toggle="tab" aria-expanded="true">
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a href="#Registration" data-toggle="tab" aria-expanded="false">
                            Đăng ký
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- LOGIN -->
                    <div class="tab-pane active" id="Login">
                        <form name="dangnhap" action="" method="post" class="form-horizontal" onsubmit="$('#btn-dangnhap').val('Vui lòng đợi...')">
                            <div class="form-group">
                                <label for="username" class="col-sm-4 control-label" style="font-weight:normal;"><?=_tendangnhap?> <span>(*)</span></label>
                                <div class="col-sm-8">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="<?=_tendangnhap?>" required="required"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label" style="font-weight:normal;"><?=_matkhau?> <span>(*)</span></label>
                                <div class="col-sm-8">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="<?=_matkhau?>" required="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <input type="submit" id="btn-dangnhap" class="btn btn-success" value="<?=_dangnhap?>"/>
                                </div>
                            </div>
                            <input type="hidden" name="dangnhap"/>
                        </form>
                    </div>

                    <!-- REGISTER -->
                    <div class="tab-pane fade in" id="Registration">
                        <form name="dangky" action="" method="post" class="form-horizontal" onsubmit="$('#btn-dangky').val('Vui lòng đợi...')">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_tendangnhap?> <span>(*)</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="reg[username]" class="form-control" placeholder="<?=_tendangnhap?>" required="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_matkhau?> <span>(*)</span></label>
                                <div class="col-sm-8">
                                    <input type="password" name="reg[password]" class="form-control" placeholder="<?=_matkhau?>" required="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;">Email <span>(*)</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="reg[email]" class="form-control" placeholder="Email" required="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_ten?></label>
                                <div class="col-sm-8">
                                    <input type="text" name="reg[ten]" class="form-control" placeholder="<?=_ten?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_dienthoai?></label>
                                <div class="col-sm-8">
                                    <input type="text" name="reg[dienthoai]" class="form-control" placeholder="<?=_dienthoai?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" style="font-weight:normal;"><?=_diachi?></label>
                                <div class="col-sm-8">
                                    <input type="text" name="reg[diachi]" class="form-control" placeholder="<?=_diachi?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <input type="submit" class="btn btn-success" id="btn-dangky" value="<?=_dangky?>"/>
                                </div>
                            </div>
                            <input type="hidden" name="dangky"/>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
	.log-by{ border-bottom: 1px solid #CCC; padding: 8px 0px;}
	.log-sc div{ margin-top: 10px;}
	#OR{height: 30px;width: 30px;border: 1px solid #C2C2C2;border-radius: 50%;font-weight: bold;line-height: 28px;text-align: center;font-size: 12px;float: right;position: absolute;right: -16px;top: 40%;z-index: 1;background: #DFDFDF;}
</style>