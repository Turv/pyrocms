<?=form_open('admin/staff/delete'); ?>

<table border="0" class="listTable">
    
  <thead>
	<tr>
		<th class="first"><div></div></th>
		<th><a href="#">Staff Member</a></th>
		<th><a href="#">Updated</a></th>
		<th class="last"><span>Actions</span></th>
	</tr>
  </thead>
	
    <? if ($staff):?>
				<td>
					<?=anchor('staff/' . $member->slug, 'View', 'target="_blank"');?> | 
					<?=anchor('admin/staff/edit/' . $member->slug, 'Edit');?> | 
					<?=anchor('admin/staff/delete/' . $member->slug, 'Delete', array('class'=>'confirm'));?>
                </td>
		
 	</tbody>
</table>

<div class="fcc-table-buttons">
    <a href="<?=site_url('admin/staff/create');?>"><img src="/assets/img/admin/fcc/btn-add.jpg" /></a>
		<input type="image" name="btnDelete" value="Delete" src="/assets/img/admin/fcc/btn-delete.jpg" />
</div>
 
<?=form_close(); ?>