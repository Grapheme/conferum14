<?php
	$CI = & get_instance();
	$orderProducts =array();
	if($this->session->userdata('order_list') !== FALSE):
		$orderProducts = json_decode($this->session->userdata('order_list'),TRUE);
	endif;
	for($i=0;$i<count($orderProducts);$i++):
		$orderProducts[$i]['sizes'] = $CI->getProductSizes($orderProducts[$i]['size']);
		$orderProducts[$i]['tara'] = $CI->getProductTara($orderProducts[$i]['sizes']);
	endfor;
?>
<div class="top-block">
	<div class="top-block-left">
		<div class="top-block-phone"><a class="tel-link" href="tel:+74955029290">+7 (495) <b id="ya-phone">502-92-90</b></a></div>
		<div class="top-block-desc">Звоните в будние дни с 9 до 18 часов</div>
	</div>
	<div class="top-block-right">
		<div class="top-block-phone"><a class="tel-link" href="tel:+78002507744">8 800 <b id="ya-phone-800">250-77-44</b></a></div>
		<div class="top-block-desc">Бесплатный звонок из любого региона России</div>
	</div>
	<div class="top-block-center">
		<span>
			<a>Гарантия низкой цены</a>. Найдете дешевле — Звоните,<br>
			мы сделаем более выгодное предложение
		</span>
	</div>
</div>
<div class="bag-block">
	<div class="usual-bag<?=(empty($orderProducts))?' hidden':'';?>">
		<a href="#" class="no-clickable"></a>
	</div>
	<div class="order-form form-send-order">
		<div class="order-header">
			Товаров: <span id="span-product-count"><?=count($orderProducts);?></span>
		</div>
		<ul class="order-list full-order-product-list">
		<?php for($i=0;$i<count($orderProducts);$i++):?>
			<?php $this->load->view('html/order-product',array('productLi'=>$orderProducts[$i]))?>
		<?php endfor;?>
		</ul>
		<a href="<?=site_url('bid')?>" class="add-to-cart-btn">Оформить заказ</a>
	</div>
</div>