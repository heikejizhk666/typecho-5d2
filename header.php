<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php $this->options->title() ?></title>
		<link rel="icon" href="<?php $this->options->favicon() ?>">
		<link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css">
		<link rel="stylesheet" href="<?php $this->options->themeUrl(''); ?>static/css/style.css">
		<?php if ($this->options->cur): ?><style>html,body,head{cursor: url(<?php $this->options->themeUrl(''); ?>static/mouse/normal.cur), default;}a:hover,.cursor:hover,button:hover,svg:hover{cursor:url(<?php $this->options->themeUrl(''); ?>static/mouse/link.cur), pointer;}</style><?php endif; ?>