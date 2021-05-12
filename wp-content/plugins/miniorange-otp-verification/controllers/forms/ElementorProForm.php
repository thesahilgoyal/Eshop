<?php

use OTP\Handler\Forms\ElementorProForm;

$handler 						        = ElementorProForm::instance();
$form_name                              = $handler->getFormName();
get_plugin_form_link($handler->getFormDocuments());
include MOV_DIR . 'views/forms/ElementorProForm.php';