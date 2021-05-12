<?php

use OTP\Helper\MoMessages;

$className = "YourOwnForm";
$className =  $className."#".$className;
$request_uri = $_SERVER['REQUEST_URI'];
$url = add_query_arg(
                        ['page' => "mosettings",'form' => $className],
                        $request_uri
                    );

echo'			<div class="mo_registration_table_layout"';
                     echo $formName ? "hidden" : "";
echo'		         id="form_search">
					<table style="width:100%">
						<tr>
							<td colspan="2">
								<h2>
								    '.mo_("SELECT YOUR FORM FROM THE LIST BELOW").':';
echo'							    
							        <span style="float:right;margin-top:-10px;">
							            <a  class="show_configured_forms button button-primary button-large" 
                                            href="'.$action.'">
                                            '.mo_("Show All Enabled Forms").'
                                        </a>
                                        <span   class="dashicons dashicons-arrow-up toggle-div" 
                                                data-show="false" 
                                                data-toggle="modropdown"></span>
                                    </span>
                                </h2> ' ;
                    echo   '<b><font color="#0085ba"><a style = "text-decoration: none;" href="'.$url.'" data-form="YourOwnForm#YourOwnForm">Not able to find your form.</a></font></b>';mo_draw_tooltip(
                                        MoMessages::showMessage(MOMessages::FORM_NOT_AVAIL_HEAD),
                                        MoMessages::showMessage(MOMessages::FORM_NOT_AVAIL_BODY)
                                    );

							'</td>
						</tr>
						<tr>
							<td colspan="2">';
                           get_otp_verification_form_dropdown();
echo'							
							</td>
						</tr>
					</table>
				</div>';