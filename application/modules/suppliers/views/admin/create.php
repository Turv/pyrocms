<h3>Add supplier</h3>

<?= form_open_multipart('admin/suppliers/create'); ?>

	<div class="float-left">
	</div>
<? $this->load->view('admin/layout_fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>