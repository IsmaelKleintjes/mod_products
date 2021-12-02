<?php 
// No direct access
defined('_JEXEC') or die; ?>
<form action="index.php?option=com_engine&view=products" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
                        <th width="10%">
				<?php echo JText::_('name') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('price') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('description') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('image') ;?>
			</th>
		<tbody>
			<?php if (!empty($products)) : ?>
				<?php foreach ($products as $i => $row) : 
                                    $link = 'index.php/product?id=' . $row->id;
                                    ?>
					<tr>
                                                <td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('Product details'); ?>">
                                                            <?php echo $row->name; ?>
                                                    </a>
						</td>
                                                <td>
						<?php echo $row->price; ?>
						</td>
                                                <td>
						<?php echo $row->description; ?>
						</td>
                                                <td>
						<?php echo $row->image; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>
