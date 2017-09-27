<span class="btn btn-primary btn-sm btn-embossed " data-toggle="modal" data-target="#productModal">
	&nbsp;&nbsp;<?php echo $text_select_product; ?>
</span>
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					选择产品
				</h4>
			</div>
			<div class="modal-body">

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 product-content">

				</div>
				<div style="clear: left;"></div>
					<div class="modal-footer">
						<div style="float: left;">
							<button style="display: none"   type="button" class="btn btn-primary prevPage">
								上一页
							</button>
							<button style="display: none"   page-now="0" type="button" class="btn btn-primary nextPage">
								下一页
							</button>
						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">
							关闭
						</button>
						<button id="productConfirm" type="button" class="btn btn-primary">
							确定选择
						</button>
					</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->