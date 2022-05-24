<?php

?>

<!DOCTYPE html>
<html lang="zh-CN">
	<head>
        <?php
        include('header.php');
        ?>
	</head>
	<body class="mdui-appbar-with-toolbar fanz">
		<div class="mdui-appbar mdui-appbar-fixed mdui-shadow-0">
			<div class="mdui-toolbar mdui-color-white mdui-shadow-0">
				<button class="mdui-btn mdui-ripple"
							mdui-drawer=" {target: '#left-drawer' ,overlay: true }"><i class="mdui-icon material-icons">&#xe5d2;</i>
				</button>
				<span class="mdui-typo-title"><?php $this->options->title() ?></span>
			</div>
		</div>
		<!-- 侧边 -->
		<?php $this->widget('Widget_Contents_Page_List')->parse('<center><div class="mdui-drawer mdui-color-white mdui-drawer-close" id="left-drawer"><ul class="mdui-list"><a href="./"><div class="mdui-list-item-content">首页</div><a href="{permalink}"><div class="mdui-list-item-content">{title}</div></a></li></center>'); ?>
		<div id="tab4">
			<div class="mdui-card card">
				<div class="mdui-card-content mdui-typo">
				    <center><h1>正在跳转中，请稍后……</h1></center>
					<meta http-equiv="refresh" content="1;url= <?php $this->fields->tzurl(); ?> ">
				</div>
			</div>
		</div>
        <?php
        include('footer.php');
        ?>
		<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
	</body>
</html>
