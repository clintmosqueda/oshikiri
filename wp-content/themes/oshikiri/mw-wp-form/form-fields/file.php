<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<div class="form-file-input">
	<label class="contact-upload-button">ファイルを選択
	<input type="file" class="js-file-upload"
		name="<?php echo esc_attr( $name ); ?>"
		<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'class', $class ); ?>
	/>
	</label>
	<span class="fileclear js-upload-fileclear">&times;</span>
	<span class="contact-upload-filename js-contact-upload-filename">選択されていません</span>
	<!-- <span data-mwform-file-delete="<?php echo esc_attr( $name ); ?>" class="mwform-file-delete fileclear js-upload-fileclear">&times;</span> -->
</div>

