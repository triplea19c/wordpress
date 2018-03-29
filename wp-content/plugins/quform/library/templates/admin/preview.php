<?php if (!defined('ABSPATH')) exit;
/* @var $options Quform_Options */
/* @var $scriptLoader Quform_ScriptLoader */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="quform-js">
<head>
    <meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_option('blog_charset' )); ?>" />
    <title><?php echo esc_html(Quform::getPluginName()); ?> <?php esc_html_e('Preview', 'quform'); ?></title>
<?php foreach ($styles as $style) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(sprintf('%s?ver=%s', $style['url'], $style['version'])); ?>" type="text/css">
<?php endforeach; ?>
    <style id="qfb-preview-custom-css"></style>
</head>
<body>
<div id="qfb-preview-loading"></div>
<div id="qfb-preview-error"></div>
<div id="qfb-preview-form"></div>
<script>
//<![CDATA[
var quformPreviewL10n = <?php echo wp_json_encode($l10n); ?>;
var quformL10n = <?php echo wp_json_encode($scriptLoader->jsL10n()); ?>;
//]]>
</script>
<?php wp_print_scripts(array('jquery')); ?>
<?php foreach ($scripts as $script) : ?>
<script src="<?php echo esc_url(sprintf('%s?ver=%s', $script['url'], $script['version'])); ?>"></script>
<?php endforeach; ?>
</body>
</html>