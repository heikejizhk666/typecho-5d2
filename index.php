<?php
/**
 * 5d2主题是一款美观、高性能的个人主页主题。体积小，页面美观。<br><a href="https://www.314669.xyz/5d2-docs.html">主题文档</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://jq.qq.com/?_wv=1027&k=KrwpLc2p">主题交流群</a>
 * @package 5d2
 * @author Hi Tech
 * @version 1.0.2
 * @link https://www.314669.xyz/
 */
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
		</div>
		<div id="tab4">
			<div class="mdui-card card">
				<div class="mdui-card-content mdui-typo">
					<center>
						<h1><b><?php $this->options->title() ?></b></h1>
					</center>
					<center>
						<h4><?php $this->options->description() ?></h4>
					</center>
				</div>
			</div>
			<div class="mdui-card card">
				<div class="mdui-card-content mdui-typo">
					<center>
						<h3><b>个人介绍</b></h3>
						<img src="<?php $this->options->favicon() ?>" alt="头像" title="头像" style="border-radius:100%; overflow:hidden; width: 15%;">
						<p style="font-size:20px;"><b><?php $this->options->name() ?></b></p>
					</center>
					<center>
						<b style="font-size:15px;"><?php $this->options->introduce() ?></b>
					</center>
				</div>
			</div>
		</div>
        <?php
        include('footer.php');
        ?>
		<script src="https://unpkg.com/mdui@1.0.2/dist/js/mdui.min.js"></script>
	</body>
</html>
