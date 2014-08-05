<?=form_open(ADMIN_START_PAGE.'/press-centr/update?mode=edit&id='.$this->input->get('id'),array('class'=>'form-manage-press-centr')); ?>
	<div class="control-group">
		<label>Title: </label>
		<input type="text" name="page_title" class="span6" value="<?=$content['page_title'];?>" placeholder="Title" />
		<label>Description:</label>
		<textarea class="span6" name="page_description" placeholder="Описание"><?=$content['page_description'];?></textarea>
		<label>H1: </label>
		<input type="text" name="page_h1" class="span6" value="<?=$content['page_h1'];?>" placeholder="H1" />
		<label>URL:</label>
		<input type="text" name="page_url" class="span3" value="<?=$content['page_url'];?>" placeholder="URL страницы" />
		<blockquote>
			<small>Если поле оставить пустым, то назначиться транслит названия</small>
		</blockquote>
	</div>
	<hr/>
	<div class="control-group">
		<label>Название: <em>(обязательное)</em></label>
		<input type="text" name="title" class="span6 valid-required" value="<?=$content['title'];?>" placeholder="Название" />
		<label>Дата публикации: <em>(обязательное)</em></label>
		<input type="text" name="date" class="span2 valid-required set-news-data" readonly="readonly" value="<?=$content['date'];?>" placeholder="" />
	</div>
	<div class="control-group">
		<label>Анонс:</label>
		<textarea class="redactor" rows="5" name="anonce"><?=$content['anonce'];?></textarea>
		<label>Контент:</label>
		<textarea class="redactor" rows="10" name="content"><?=$content['content'];?></textarea>
	</div>
	<hr/>
	<div class="controls">
		<label>Изображение:</label>
		<?php if(!empty($content['logo'])):?>
			<div class="clearfix">
				<img class="img-rounded destination-photo" src="<?=base_url($content['logo']);?>" title="">
			</div>
		<?php endif;?>
		<input type="file" autocomplete="off" name="file" size="52">
		<p class="help-block">Поддерживаются форматы: JPG,PNG,GIF</p>
		<div id="div-upload-photo" class="bar-file-upload hidden">
			<div class="progress progress-info progress-striped active">
				<div class="bar" style="width: 0%"></div>
			</div>
		</div>
	</div>
	<div class="div-form-operation">
		<button type="submit" value="" name="submit" class="btn btn-img-submit btn-success no-clickable btn-loading">Сохранить</button>
		<a href="<?=site_url(ADMIN_START_PAGE.'/press-centr')?>" class="btn btn-info">Завершить</a>
	</div>
<?= form_close(); ?>