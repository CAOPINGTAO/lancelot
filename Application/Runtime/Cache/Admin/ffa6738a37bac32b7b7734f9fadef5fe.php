<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	
	<form method="post" enctype="multipart/form-data" action="/lancelot/admin.php/Actors/insert/navTabId/listactor" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>中 文 名：</label>
				<input name="cname" class="required" type="text" size="30" value="" alt="" />
			</p>
			<p>
				<label>外 文 名：</label>
				<input name="ename" class="required" type="text" size="30" value="" alt="" />
			</p>
			<p>
				<label>性 别：</label>
				<input type="radio" value="1" name="sex" />男
				<input type="radio" value="0" name="sex" />女
			</p>
			<p>
				<label>星 座：</label>
				<select name="constellation" class="required combox" size="30">
					<option value="" selected>- - 请选择 - -</option>
					<option value="白羊座">白羊座</option>
					<option value="金牛座">金牛座</option>
					<option value="双子座">双子座</option>
					<option value="巨蟹座">巨蟹座</option>
					<option value="狮子座">狮子座</option>
					<option value="处女座">处女座</option>
					<option value="天秤座">天秤座</option>
					<option value="天蝎座">天蝎座</option>
					<option value="射手座">射手座</option>
					<option value="魔蝎座">魔蝎座</option>
					<option value="水瓶座">水瓶座</option>
					<option value="双鱼座">双鱼座</option>
				</select>
			</p>
			<p>
				<label>出生日期：</label>
				<input type="text" name="birthday" class="date" size="30" /><a class="inputDateButton" href="javascript:;">选择</a>
			</p>
			<p>
				<label>出 生 地：</label>
				<input name="bornaddress" type="text" size="30" class="required" />
			</p>
			<p>
				<label>职 业：</label>
				<input name="professtion" type="text" size="30" class="required" />
			</p>
			<p>
				<label>演员头像：</label>
				<input type="file" name="picname" class="required" />
			</p>
			<p>
				<label>演员简介</label>
				<textarea class="editor" name="intro" rows="6" cols="100" tools="simple">simple(简单)</textarea>
			</p>
			<div class="divider"></div>
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