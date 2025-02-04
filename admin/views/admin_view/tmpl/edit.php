<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    30th April, 2015
 * @author     Llewellyn van der Merwe <http://www.joomlacomponentbuilder.com>
 * @github     Joomla Component Builder <https://github.com/vdm-io/Joomla-Component-Builder>
 * @copyright  Copyright (C) 2015 - 2019 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');
$componentParams = $this->params; // will be removed just use $this->params instead
?>
<script type="text/javascript">
	// waiting spinner
	var outerDiv = jQuery('body');
	jQuery('<div id="loading"></div>')
		.css("background", "rgba(255, 255, 255, .8) url('components/com_componentbuilder/assets/images/import.gif') 50% 15% no-repeat")
		.css("top", outerDiv.position().top - jQuery(window).scrollTop())
		.css("left", outerDiv.position().left - jQuery(window).scrollLeft())
		.css("width", outerDiv.width())
		.css("height", outerDiv.height())
		.css("position", "fixed")
		.css("opacity", "0.80")
		.css("-ms-filter", "progid:DXImageTransform.Microsoft.Alpha(Opacity = 80)")
		.css("filter", "alpha(opacity = 80)")
		.css("display", "none")
		.appendTo(outerDiv);
	jQuery('#loading').show();
	// when page is ready remove and show
	jQuery(window).load(function() {
		jQuery('#componentbuilder_loader').fadeIn('fast');
		jQuery('#loading').hide();
	});
</script>
<div id="componentbuilder_loader" style="display: none;">
<form action="<?php echo JRoute::_('index.php?option=com_componentbuilder&layout=edit&id='. (int) $this->item->id . $this->referral); ?>" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">

	<?php echo JLayoutHelper::render('admin_view.details_above', $this); ?>
<div class="form-horizontal">

	<?php echo JHtml::_('bootstrap.startTabSet', 'admin_viewTab', array('active' => 'details')); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'details', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_DETAILS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.details_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.details_right', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.details_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'settings', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_SETTINGS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.settings_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'fields', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_FIELDS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.fields_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.fields_right', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.fields_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'css', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_CSS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.css_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'javascript', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_JAVASCRIPT', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.javascript_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'custom_buttons', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_CUSTOM_BUTTONS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.custom_buttons_left', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.custom_buttons_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'php', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PHP', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.php_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'mysql', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_MYSQL', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.mysql_left', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.mysql_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'custom_import', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_CUSTOM_IMPORT', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.custom_import_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php $this->ignore_fieldsets = array('details','metadata','vdmmetadata','accesscontrol'); ?>
	<?php $this->tab_name = 'admin_viewTab'; ?>
	<?php echo JLayoutHelper::render('joomla.edit.params', $this); ?>

	<?php if ($this->canDo->get('admin_view.delete') || $this->canDo->get('admin_view.edit.created_by') || $this->canDo->get('admin_view.edit.state') || $this->canDo->get('admin_view.edit.created')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'publishing', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PUBLISHING', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.publishing', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.publlshing', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php if ($this->canDo->get('core.admin')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'permissions', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PERMISSION', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<fieldset class="adminform">
					<div class="adminformlist">
					<?php foreach ($this->form->getFieldset('accesscontrol') as $field): ?>
						<div>
							<?php echo $field->label; echo $field->input;?>
						</div>
						<div class="clearfix"></div>
					<?php endforeach; ?>
					</div>
				</fieldset>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	<div>
		<input type="hidden" name="task" value="admin_view.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</div>

<div class="clearfix"></div>
<?php echo JLayoutHelper::render('admin_view.details_under', $this); ?>
</form>
</div>

<script type="text/javascript">

// #jform_add_css_view listeners for add_css_view_vvvvvxg function
jQuery('#jform_add_css_view').on('keyup',function()
{
	var add_css_view_vvvvvxg = jQuery("#jform_add_css_view input[type='radio']:checked").val();
	vvvvvxg(add_css_view_vvvvvxg);

});
jQuery('#adminForm').on('change', '#jform_add_css_view',function (e)
{
	e.preventDefault();
	var add_css_view_vvvvvxg = jQuery("#jform_add_css_view input[type='radio']:checked").val();
	vvvvvxg(add_css_view_vvvvvxg);

});

// #jform_add_css_views listeners for add_css_views_vvvvvxh function
jQuery('#jform_add_css_views').on('keyup',function()
{
	var add_css_views_vvvvvxh = jQuery("#jform_add_css_views input[type='radio']:checked").val();
	vvvvvxh(add_css_views_vvvvvxh);

});
jQuery('#adminForm').on('change', '#jform_add_css_views',function (e)
{
	e.preventDefault();
	var add_css_views_vvvvvxh = jQuery("#jform_add_css_views input[type='radio']:checked").val();
	vvvvvxh(add_css_views_vvvvvxh);

});

// #jform_add_javascript_view_file listeners for add_javascript_view_file_vvvvvxi function
jQuery('#jform_add_javascript_view_file').on('keyup',function()
{
	var add_javascript_view_file_vvvvvxi = jQuery("#jform_add_javascript_view_file input[type='radio']:checked").val();
	vvvvvxi(add_javascript_view_file_vvvvvxi);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_view_file',function (e)
{
	e.preventDefault();
	var add_javascript_view_file_vvvvvxi = jQuery("#jform_add_javascript_view_file input[type='radio']:checked").val();
	vvvvvxi(add_javascript_view_file_vvvvvxi);

});

// #jform_add_javascript_views_file listeners for add_javascript_views_file_vvvvvxj function
jQuery('#jform_add_javascript_views_file').on('keyup',function()
{
	var add_javascript_views_file_vvvvvxj = jQuery("#jform_add_javascript_views_file input[type='radio']:checked").val();
	vvvvvxj(add_javascript_views_file_vvvvvxj);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_views_file',function (e)
{
	e.preventDefault();
	var add_javascript_views_file_vvvvvxj = jQuery("#jform_add_javascript_views_file input[type='radio']:checked").val();
	vvvvvxj(add_javascript_views_file_vvvvvxj);

});

// #jform_add_javascript_view_footer listeners for add_javascript_view_footer_vvvvvxk function
jQuery('#jform_add_javascript_view_footer').on('keyup',function()
{
	var add_javascript_view_footer_vvvvvxk = jQuery("#jform_add_javascript_view_footer input[type='radio']:checked").val();
	vvvvvxk(add_javascript_view_footer_vvvvvxk);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_view_footer',function (e)
{
	e.preventDefault();
	var add_javascript_view_footer_vvvvvxk = jQuery("#jform_add_javascript_view_footer input[type='radio']:checked").val();
	vvvvvxk(add_javascript_view_footer_vvvvvxk);

});

// #jform_add_javascript_views_footer listeners for add_javascript_views_footer_vvvvvxl function
jQuery('#jform_add_javascript_views_footer').on('keyup',function()
{
	var add_javascript_views_footer_vvvvvxl = jQuery("#jform_add_javascript_views_footer input[type='radio']:checked").val();
	vvvvvxl(add_javascript_views_footer_vvvvvxl);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_views_footer',function (e)
{
	e.preventDefault();
	var add_javascript_views_footer_vvvvvxl = jQuery("#jform_add_javascript_views_footer input[type='radio']:checked").val();
	vvvvvxl(add_javascript_views_footer_vvvvvxl);

});

// #jform_add_php_ajax listeners for add_php_ajax_vvvvvxm function
jQuery('#jform_add_php_ajax').on('keyup',function()
{
	var add_php_ajax_vvvvvxm = jQuery("#jform_add_php_ajax input[type='radio']:checked").val();
	vvvvvxm(add_php_ajax_vvvvvxm);

});
jQuery('#adminForm').on('change', '#jform_add_php_ajax',function (e)
{
	e.preventDefault();
	var add_php_ajax_vvvvvxm = jQuery("#jform_add_php_ajax input[type='radio']:checked").val();
	vvvvvxm(add_php_ajax_vvvvvxm);

});

// #jform_add_php_getitem listeners for add_php_getitem_vvvvvxn function
jQuery('#jform_add_php_getitem').on('keyup',function()
{
	var add_php_getitem_vvvvvxn = jQuery("#jform_add_php_getitem input[type='radio']:checked").val();
	vvvvvxn(add_php_getitem_vvvvvxn);

});
jQuery('#adminForm').on('change', '#jform_add_php_getitem',function (e)
{
	e.preventDefault();
	var add_php_getitem_vvvvvxn = jQuery("#jform_add_php_getitem input[type='radio']:checked").val();
	vvvvvxn(add_php_getitem_vvvvvxn);

});

// #jform_add_php_getitems listeners for add_php_getitems_vvvvvxo function
jQuery('#jform_add_php_getitems').on('keyup',function()
{
	var add_php_getitems_vvvvvxo = jQuery("#jform_add_php_getitems input[type='radio']:checked").val();
	vvvvvxo(add_php_getitems_vvvvvxo);

});
jQuery('#adminForm').on('change', '#jform_add_php_getitems',function (e)
{
	e.preventDefault();
	var add_php_getitems_vvvvvxo = jQuery("#jform_add_php_getitems input[type='radio']:checked").val();
	vvvvvxo(add_php_getitems_vvvvvxo);

});

// #jform_add_php_getitems_after_all listeners for add_php_getitems_after_all_vvvvvxp function
jQuery('#jform_add_php_getitems_after_all').on('keyup',function()
{
	var add_php_getitems_after_all_vvvvvxp = jQuery("#jform_add_php_getitems_after_all input[type='radio']:checked").val();
	vvvvvxp(add_php_getitems_after_all_vvvvvxp);

});
jQuery('#adminForm').on('change', '#jform_add_php_getitems_after_all',function (e)
{
	e.preventDefault();
	var add_php_getitems_after_all_vvvvvxp = jQuery("#jform_add_php_getitems_after_all input[type='radio']:checked").val();
	vvvvvxp(add_php_getitems_after_all_vvvvvxp);

});

// #jform_add_php_getlistquery listeners for add_php_getlistquery_vvvvvxq function
jQuery('#jform_add_php_getlistquery').on('keyup',function()
{
	var add_php_getlistquery_vvvvvxq = jQuery("#jform_add_php_getlistquery input[type='radio']:checked").val();
	vvvvvxq(add_php_getlistquery_vvvvvxq);

});
jQuery('#adminForm').on('change', '#jform_add_php_getlistquery',function (e)
{
	e.preventDefault();
	var add_php_getlistquery_vvvvvxq = jQuery("#jform_add_php_getlistquery input[type='radio']:checked").val();
	vvvvvxq(add_php_getlistquery_vvvvvxq);

});

// #jform_add_php_getform listeners for add_php_getform_vvvvvxr function
jQuery('#jform_add_php_getform').on('keyup',function()
{
	var add_php_getform_vvvvvxr = jQuery("#jform_add_php_getform input[type='radio']:checked").val();
	vvvvvxr(add_php_getform_vvvvvxr);

});
jQuery('#adminForm').on('change', '#jform_add_php_getform',function (e)
{
	e.preventDefault();
	var add_php_getform_vvvvvxr = jQuery("#jform_add_php_getform input[type='radio']:checked").val();
	vvvvvxr(add_php_getform_vvvvvxr);

});

// #jform_add_php_before_save listeners for add_php_before_save_vvvvvxs function
jQuery('#jform_add_php_before_save').on('keyup',function()
{
	var add_php_before_save_vvvvvxs = jQuery("#jform_add_php_before_save input[type='radio']:checked").val();
	vvvvvxs(add_php_before_save_vvvvvxs);

});
jQuery('#adminForm').on('change', '#jform_add_php_before_save',function (e)
{
	e.preventDefault();
	var add_php_before_save_vvvvvxs = jQuery("#jform_add_php_before_save input[type='radio']:checked").val();
	vvvvvxs(add_php_before_save_vvvvvxs);

});

// #jform_add_php_save listeners for add_php_save_vvvvvxt function
jQuery('#jform_add_php_save').on('keyup',function()
{
	var add_php_save_vvvvvxt = jQuery("#jform_add_php_save input[type='radio']:checked").val();
	vvvvvxt(add_php_save_vvvvvxt);

});
jQuery('#adminForm').on('change', '#jform_add_php_save',function (e)
{
	e.preventDefault();
	var add_php_save_vvvvvxt = jQuery("#jform_add_php_save input[type='radio']:checked").val();
	vvvvvxt(add_php_save_vvvvvxt);

});

// #jform_add_php_postsavehook listeners for add_php_postsavehook_vvvvvxu function
jQuery('#jform_add_php_postsavehook').on('keyup',function()
{
	var add_php_postsavehook_vvvvvxu = jQuery("#jform_add_php_postsavehook input[type='radio']:checked").val();
	vvvvvxu(add_php_postsavehook_vvvvvxu);

});
jQuery('#adminForm').on('change', '#jform_add_php_postsavehook',function (e)
{
	e.preventDefault();
	var add_php_postsavehook_vvvvvxu = jQuery("#jform_add_php_postsavehook input[type='radio']:checked").val();
	vvvvvxu(add_php_postsavehook_vvvvvxu);

});

// #jform_add_php_allowadd listeners for add_php_allowadd_vvvvvxv function
jQuery('#jform_add_php_allowadd').on('keyup',function()
{
	var add_php_allowadd_vvvvvxv = jQuery("#jform_add_php_allowadd input[type='radio']:checked").val();
	vvvvvxv(add_php_allowadd_vvvvvxv);

});
jQuery('#adminForm').on('change', '#jform_add_php_allowadd',function (e)
{
	e.preventDefault();
	var add_php_allowadd_vvvvvxv = jQuery("#jform_add_php_allowadd input[type='radio']:checked").val();
	vvvvvxv(add_php_allowadd_vvvvvxv);

});

// #jform_add_php_allowedit listeners for add_php_allowedit_vvvvvxw function
jQuery('#jform_add_php_allowedit').on('keyup',function()
{
	var add_php_allowedit_vvvvvxw = jQuery("#jform_add_php_allowedit input[type='radio']:checked").val();
	vvvvvxw(add_php_allowedit_vvvvvxw);

});
jQuery('#adminForm').on('change', '#jform_add_php_allowedit',function (e)
{
	e.preventDefault();
	var add_php_allowedit_vvvvvxw = jQuery("#jform_add_php_allowedit input[type='radio']:checked").val();
	vvvvvxw(add_php_allowedit_vvvvvxw);

});

// #jform_add_php_before_cancel listeners for add_php_before_cancel_vvvvvxx function
jQuery('#jform_add_php_before_cancel').on('keyup',function()
{
	var add_php_before_cancel_vvvvvxx = jQuery("#jform_add_php_before_cancel input[type='radio']:checked").val();
	vvvvvxx(add_php_before_cancel_vvvvvxx);

});
jQuery('#adminForm').on('change', '#jform_add_php_before_cancel',function (e)
{
	e.preventDefault();
	var add_php_before_cancel_vvvvvxx = jQuery("#jform_add_php_before_cancel input[type='radio']:checked").val();
	vvvvvxx(add_php_before_cancel_vvvvvxx);

});

// #jform_add_php_after_cancel listeners for add_php_after_cancel_vvvvvxy function
jQuery('#jform_add_php_after_cancel').on('keyup',function()
{
	var add_php_after_cancel_vvvvvxy = jQuery("#jform_add_php_after_cancel input[type='radio']:checked").val();
	vvvvvxy(add_php_after_cancel_vvvvvxy);

});
jQuery('#adminForm').on('change', '#jform_add_php_after_cancel',function (e)
{
	e.preventDefault();
	var add_php_after_cancel_vvvvvxy = jQuery("#jform_add_php_after_cancel input[type='radio']:checked").val();
	vvvvvxy(add_php_after_cancel_vvvvvxy);

});

// #jform_add_php_batchcopy listeners for add_php_batchcopy_vvvvvxz function
jQuery('#jform_add_php_batchcopy').on('keyup',function()
{
	var add_php_batchcopy_vvvvvxz = jQuery("#jform_add_php_batchcopy input[type='radio']:checked").val();
	vvvvvxz(add_php_batchcopy_vvvvvxz);

});
jQuery('#adminForm').on('change', '#jform_add_php_batchcopy',function (e)
{
	e.preventDefault();
	var add_php_batchcopy_vvvvvxz = jQuery("#jform_add_php_batchcopy input[type='radio']:checked").val();
	vvvvvxz(add_php_batchcopy_vvvvvxz);

});

// #jform_add_php_batchmove listeners for add_php_batchmove_vvvvvya function
jQuery('#jform_add_php_batchmove').on('keyup',function()
{
	var add_php_batchmove_vvvvvya = jQuery("#jform_add_php_batchmove input[type='radio']:checked").val();
	vvvvvya(add_php_batchmove_vvvvvya);

});
jQuery('#adminForm').on('change', '#jform_add_php_batchmove',function (e)
{
	e.preventDefault();
	var add_php_batchmove_vvvvvya = jQuery("#jform_add_php_batchmove input[type='radio']:checked").val();
	vvvvvya(add_php_batchmove_vvvvvya);

});

// #jform_add_php_before_publish listeners for add_php_before_publish_vvvvvyb function
jQuery('#jform_add_php_before_publish').on('keyup',function()
{
	var add_php_before_publish_vvvvvyb = jQuery("#jform_add_php_before_publish input[type='radio']:checked").val();
	vvvvvyb(add_php_before_publish_vvvvvyb);

});
jQuery('#adminForm').on('change', '#jform_add_php_before_publish',function (e)
{
	e.preventDefault();
	var add_php_before_publish_vvvvvyb = jQuery("#jform_add_php_before_publish input[type='radio']:checked").val();
	vvvvvyb(add_php_before_publish_vvvvvyb);

});

// #jform_add_php_after_publish listeners for add_php_after_publish_vvvvvyc function
jQuery('#jform_add_php_after_publish').on('keyup',function()
{
	var add_php_after_publish_vvvvvyc = jQuery("#jform_add_php_after_publish input[type='radio']:checked").val();
	vvvvvyc(add_php_after_publish_vvvvvyc);

});
jQuery('#adminForm').on('change', '#jform_add_php_after_publish',function (e)
{
	e.preventDefault();
	var add_php_after_publish_vvvvvyc = jQuery("#jform_add_php_after_publish input[type='radio']:checked").val();
	vvvvvyc(add_php_after_publish_vvvvvyc);

});

// #jform_add_php_before_delete listeners for add_php_before_delete_vvvvvyd function
jQuery('#jform_add_php_before_delete').on('keyup',function()
{
	var add_php_before_delete_vvvvvyd = jQuery("#jform_add_php_before_delete input[type='radio']:checked").val();
	vvvvvyd(add_php_before_delete_vvvvvyd);

});
jQuery('#adminForm').on('change', '#jform_add_php_before_delete',function (e)
{
	e.preventDefault();
	var add_php_before_delete_vvvvvyd = jQuery("#jform_add_php_before_delete input[type='radio']:checked").val();
	vvvvvyd(add_php_before_delete_vvvvvyd);

});

// #jform_add_php_after_delete listeners for add_php_after_delete_vvvvvye function
jQuery('#jform_add_php_after_delete').on('keyup',function()
{
	var add_php_after_delete_vvvvvye = jQuery("#jform_add_php_after_delete input[type='radio']:checked").val();
	vvvvvye(add_php_after_delete_vvvvvye);

});
jQuery('#adminForm').on('change', '#jform_add_php_after_delete',function (e)
{
	e.preventDefault();
	var add_php_after_delete_vvvvvye = jQuery("#jform_add_php_after_delete input[type='radio']:checked").val();
	vvvvvye(add_php_after_delete_vvvvvye);

});

// #jform_add_php_document listeners for add_php_document_vvvvvyf function
jQuery('#jform_add_php_document').on('keyup',function()
{
	var add_php_document_vvvvvyf = jQuery("#jform_add_php_document input[type='radio']:checked").val();
	vvvvvyf(add_php_document_vvvvvyf);

});
jQuery('#adminForm').on('change', '#jform_add_php_document',function (e)
{
	e.preventDefault();
	var add_php_document_vvvvvyf = jQuery("#jform_add_php_document input[type='radio']:checked").val();
	vvvvvyf(add_php_document_vvvvvyf);

});

// #jform_add_sql listeners for add_sql_vvvvvyg function
jQuery('#jform_add_sql').on('keyup',function()
{
	var add_sql_vvvvvyg = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyg(add_sql_vvvvvyg);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var add_sql_vvvvvyg = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyg(add_sql_vvvvvyg);

});

// #jform_source listeners for source_vvvvvyh function
jQuery('#jform_source').on('keyup',function()
{
	var source_vvvvvyh = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyh = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyh(source_vvvvvyh,add_sql_vvvvvyh);

});
jQuery('#adminForm').on('change', '#jform_source',function (e)
{
	e.preventDefault();
	var source_vvvvvyh = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyh = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyh(source_vvvvvyh,add_sql_vvvvvyh);

});

// #jform_add_sql listeners for add_sql_vvvvvyh function
jQuery('#jform_add_sql').on('keyup',function()
{
	var source_vvvvvyh = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyh = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyh(source_vvvvvyh,add_sql_vvvvvyh);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var source_vvvvvyh = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyh = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyh(source_vvvvvyh,add_sql_vvvvvyh);

});

// #jform_source listeners for source_vvvvvyj function
jQuery('#jform_source').on('keyup',function()
{
	var source_vvvvvyj = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyj = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyj(source_vvvvvyj,add_sql_vvvvvyj);

});
jQuery('#adminForm').on('change', '#jform_source',function (e)
{
	e.preventDefault();
	var source_vvvvvyj = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyj = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyj(source_vvvvvyj,add_sql_vvvvvyj);

});

// #jform_add_sql listeners for add_sql_vvvvvyj function
jQuery('#jform_add_sql').on('keyup',function()
{
	var source_vvvvvyj = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyj = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyj(source_vvvvvyj,add_sql_vvvvvyj);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var source_vvvvvyj = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_vvvvvyj = jQuery("#jform_add_sql input[type='radio']:checked").val();
	vvvvvyj(source_vvvvvyj,add_sql_vvvvvyj);

});

// #jform_add_custom_import listeners for add_custom_import_vvvvvyl function
jQuery('#jform_add_custom_import').on('keyup',function()
{
	var add_custom_import_vvvvvyl = jQuery("#jform_add_custom_import input[type='radio']:checked").val();
	vvvvvyl(add_custom_import_vvvvvyl);

});
jQuery('#adminForm').on('change', '#jform_add_custom_import',function (e)
{
	e.preventDefault();
	var add_custom_import_vvvvvyl = jQuery("#jform_add_custom_import input[type='radio']:checked").val();
	vvvvvyl(add_custom_import_vvvvvyl);

});

// #jform_add_custom_import listeners for add_custom_import_vvvvvym function
jQuery('#jform_add_custom_import').on('keyup',function()
{
	var add_custom_import_vvvvvym = jQuery("#jform_add_custom_import input[type='radio']:checked").val();
	vvvvvym(add_custom_import_vvvvvym);

});
jQuery('#adminForm').on('change', '#jform_add_custom_import',function (e)
{
	e.preventDefault();
	var add_custom_import_vvvvvym = jQuery("#jform_add_custom_import input[type='radio']:checked").val();
	vvvvvym(add_custom_import_vvvvvym);

});

// #jform_add_custom_button listeners for add_custom_button_vvvvvyn function
jQuery('#jform_add_custom_button').on('keyup',function()
{
	var add_custom_button_vvvvvyn = jQuery("#jform_add_custom_button input[type='radio']:checked").val();
	vvvvvyn(add_custom_button_vvvvvyn);

});
jQuery('#adminForm').on('change', '#jform_add_custom_button',function (e)
{
	e.preventDefault();
	var add_custom_button_vvvvvyn = jQuery("#jform_add_custom_button input[type='radio']:checked").val();
	vvvvvyn(add_custom_button_vvvvvyn);

});



<?php $numberAddtables = range(0, count( (array) $this->item->addtables) + 3, 1);?>

// for the values already set
jQuery(document).ready(function(){
<?php foreach($numberAddtables as $fieldNr): ?>
	jQuery('#adminForm').on('change', '#jform_addtables__addtables<?php echo $fieldNr ?>__table',function (e) {
		e.preventDefault();
		getTableColumns(<?php echo $fieldNr ?>, "_", "_");
	});
<?php endforeach; ?>
	jQuery(document).on('subform-row-add', function(event, row){
		var groupName = jQuery(row).data('group');
		var fieldName = groupName.replace(/([0-9])/g, '');
		var fieldNr = groupName.replace(/([A-z_])/g, '');
		if ('addtables' === fieldName) {
			jQuery('#adminForm').on('change', '#jform_addtables_addtables'+fieldNr+'_table',function (e) {
				e.preventDefault();
				getTableColumns(fieldNr, "", "");
			});
		}
	});
});

// #jform_add_custom_import listeners
jQuery('#jform_add_custom_import').on('change',function() {
	var valueSwitch = jQuery("#jform_add_custom_import input[type='radio']:checked").val();
	getDynamicScripts(valueSwitch);
});

<?php
	$app = JFactory::getApplication();
?>
function JRouter(link) {
<?php
	if ($app->isSite())
	{
		echo 'var url = "'.JURI::root().'";';
	}
	else
	{
		echo 'var url = "";';
	}
?>
	return url+link;
}

// nice little dot trick :)
jQuery(document).ready( function($) {
  var x=0;
  setInterval(function() {
	var dots = "";
	x++;
	for (var y=0; y < x%8; y++) {
		dots+=".";
	}
	$(".loading-dots").text(dots);
  } , 500);
});
jQuery(document).ready(function(){
	jQuery(document).on('subform-row-add', function(event, row){
		getIconImage(jQuery(row).find('.icomoon342'));
	});
});

function getIconImage(field) {
	// get the ID
	var id = jQuery(field).attr('id');
	// remove old one 
	jQuery('#image_'+id).remove();
	// get value
	var value = jQuery('#'+id).val();
	// build new one
	var span = '<span id="image_'+id+'" class="icon-'+value+'" style="position: absolute; top: 8px; right: -20px;"></span>';
	// add the icon
	jQuery('#'+id+'_chzn').append(span);
}
</script>
