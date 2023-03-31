<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?=$this->t('Delete') ?></h5>
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="<?=$this->t('Close') ?>">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?=$this->t('Are you sure to delete this record?'); ?>
			</div>
			<div class="modal-footer">
		<form id="delete_form" method="POST">
			<input type="hidden" name="test_id" id="test_id">
			<input type="hidden" name="delete" value="1">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=$this->t('Cancel') ?></button>
			<button type="submit" class="btn btn-danger"><?=$this->t('Delete') ?></button>
		</form>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<p>
		<?=$this->t('Total records')?>: <strong><?=sizeof($items)?></strong>
	</p>
	<?php
		foreach ($items as $item) {
			?>
				<div class="row p-2">
					<div class="col-sm-1">
						<?=$item->val('test_id') ?>
					</div>
					<div class="col-sm-10">
						<form method="POST">
							<input type="hidden" name="test_id" value="<?=$item->val('test_id') ?>">
							<input type="text" class="form-control mr-2" name="test_value" value="<?=$item->val('test_value') ?>">
							<div class="d-flex flex-row">
								<input type="submit" class="btn btn-primary me-2" value="<?=$this->t('Save') ?>">
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="<?=$item->val('test_id') ?>"><?=$this->t('Delete') ?></button>
							</div>
						</form>
					</div>
				</div>
			<?php
		}
	?>
	<div class="row p-2">
		<div class="col-sm-10 offset-sm-1">
			<form class="form form-inline" method="POST">
					<input type="text" class="form-control mr-2" name="test_value" value="">
					<input type="submit" class="btn btn-success" value="<?=$this->t('Add') ?>">
			</form>
		</div>
	</div>
</div>

<script>

	const deleteModal = document.getElementById('deleteModal');
	deleteModal.addEventListener('show.bs.modal', event => {
		const button = event.relatedTarget;
		const id = button.getAttribute('data-bs-id');
		const modalIdInput = deleteModal.querySelector('#test_id');
		modalIdInput.value = id;
	});

</script>
