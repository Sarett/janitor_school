<?php
global $action;
global $IC;
global $model;
global $itemtype;

$item_id = $action[1];
$item = $IC->getItem(array("id" => $item_id, "extend" => array("tags" => true, "mediae" => true, "comments" => true)));
?>
<div class="scene si:scene defaultEdit <?= $itemtype ?>Edit">
	<h1>Edit Sarah's item</h1>
	<h2><?= strip_tags($item["name"]) ?></h2>

	<?= $JML->editGlobalActions($item) ?>

	<div class="item i:defaultEdit">
		<h2>Sarah's class item content</h2>
		<?= $model->formStart("update/".$item["id"], array("class" => "labelstyle:inject")) ?>

			<fieldset>
				<?= $model->input("published_at", array("value" => $item["published_at"])) ?>

				<?= $model->input("full_name", array("value" => $item["full_name"])) ?>
				<?= $model->input("email", array("value" => $item["email"])) ?>
			</fieldset>

			<?= $JML->editActions($item) ?>

		<?= $model->formEnd() ?>
	</div>


	<?= $JML->editTags($item) ?>

	<?= $JML->editMedia($item) ?>

	<?= $JML->editComments($item) ?>

</div>
