<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketsfiles form">
	<h3><?= __('Edit Ticketsfile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketsfile) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td>
							<td><?php echo $this->Form->control('name',['label'=> false]); ?></td>
						</tr>
						<tr>
							<td  style="width:5%;"><?= $this->form->label(__('ticketnote')) ?></td>
							<td><?php echo $this->Form->control('ticketnote_id', ['options' => $ticketnotes, 'empty' => true,'label'=> false]); ?></td>
						</tr>

			</tbody>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
