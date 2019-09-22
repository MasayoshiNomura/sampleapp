<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "login" ); ?>'><?php echo Html::anchor('auth/login','Login');?></li>
	<li class='<?php echo Arr::get($subnav, "register" ); ?>'><?php echo Html::anchor('auth/register','Register');?></li>
	<li class='<?php echo Arr::get($subnav, "success_page" ); ?>'><?php echo Html::anchor('auth/success_page','Success page');?></li>

</ul>
<p>Success page</p>