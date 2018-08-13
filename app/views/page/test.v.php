<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?=$this->t('Delete') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="<?=$this->t('Close') ?>">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=$this->t('Cancel') ?></button>
        <button type="button" class="btn btn-danger" onclick="javascript:deleteItemConfirmed();return false;"><?=$this->t('Delete') ?></button>
      </div>
    </div>
  </div>
</div>

<?php
  $items = $this->getData('items');
?>

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
            <form class="form-inline" method="POST">
                <input type="hidden" name="test_id" value="<?=$item->val('test_id') ?>">
                <input type="text" class="form-control mr-2" name="test_value" value="<?=$item->val('test_value') ?>">
                <input type="submit" class="btn btn-primary mr-2" value="<?=$this->t('Save') ?>">
                <button class="btn btn-danger" onclick="javascript:deleteItem(<?=$item->val('test_id') ?>);return false;"><?=$this->t('Delete') ?></button>
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

<form id="delete_form" method="POST">
  <input type="hidden" name="test_id" id="test_id">
  <input type="hidden" name="delete" value="1">
</form>

<script>

  var delete_item_id = 0;

  function deleteItem(id) {
    delete_item_id = id;
    $('#deleteModal').modal();
  }

  function deleteItemConfirmed() {
    var frm = $('#delete_form');
    $('#test_id' , frm).val(delete_item_id);
    frm.submit();
  }

</script>
