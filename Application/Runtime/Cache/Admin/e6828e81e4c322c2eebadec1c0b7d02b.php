<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__CONtROLLER__/update" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />

		<div class="pageFormContent" layoutH="56">
			<p>
				<label>所属类别：</label>
				<select name="fid" class="required combox">
					<option value="">请选择</option>
					<?php if($vo["fid"] == 1): ?><option value="1" selected>类型</option>
					<option value="2">国家/地区</option>
					<option value="3">年代</option>
					<?php elseif($vo["fid"] == 2): ?>
					<option value="1">类型</option>
					<option value="2" selected>国家/地区</option>
					<option value="3">年代</option>
					<?php else: ?>
					<option value="1">类型</option>
					<option value="2">国家/地区</option>
					<option value="3" selected>年代</option><?php endif; ?>
				</select>
			</p>
			<p>
				<label>分类名：</label>
				<input name="typename" type="text" size="30" value="<?php echo ($vo["typename"]); ?>" />
			</p>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>