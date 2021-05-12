<?php

use OTP\Handler\Forms\WooCommerceFrontendManagerForm;

$handler 						        = WooCommerceFrontendManagerForm::instance();
$form_name                              = $handler->getFormName();

get_plugin_form_link($handler->getFormDocuments());
include MOV_DIR . 'views/forms/WooCommerceFrontendManagerForm.php';