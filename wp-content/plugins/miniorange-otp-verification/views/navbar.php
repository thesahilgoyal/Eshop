<?php

echo'	<div class="wrap">
			<div><img style="float:left;" src="'.MOV_LOGO_URL.'"></div>
			<div class="otp-header">
				'.mo_("OTP Verification").'
				<a class="add-new-h2" id="accountButton" href="'.$profile_url.'">'.mo_("Account").'</a>
                <a class="add-new-h2" id="LicensingPlanButton" style="background-color:orange;color:black;" href="'.$license_url.'">'.mo_("Licensing Plans").'</a>
				<a class="add-new-h2" id="faqButton" href="'.$help_url.'" target="_blank">'.mo_("FAQs").'</a>
				<a class="mo-otp-feedback add-new-h2" id="feedbackButton" href="#">'.mo_("Feedback").'</a>
	            <div class="mo-otp-help-button static" style="z-index:10">


  <a class="mo-offer-button button-primary button-large" id="mo_otp_offers" href = "#mo-offer-popup" style="background:red;color:white">
                    <span class="dashicons dashicons-money-alt" style="margin:5% 0 0 0;"></span>
                     '.mo_("<b>New Offers</b>").'   
                    </a>


<div id="mo-offer-popup" class="mo-offer-overlay">
    <div class="mo-offer-popup">

    <div class = "mo-offer-header" style="text-align: center;">
      '.mo_("<b style='font-weight: 700;font-size: larger;'>NEW OFFERS & DISCOUNTS</b>").'
    </div>          


        <a class="mo-offer-close" href="#">&times;</a>

        <div class = "mo-offer-logo" style="text-align:center;"><hr>
        <div class="mo-offer-content">
    <a href="'.admin_url().'admin.php?page=pricing"></a><br>
        We have limited period time offers for our Premium Plans! 
        <br>
         Please check them out here:
            <a href="'.admin_url().'admin.php?page=pricing"> Discounted Offers </a><br>

        An <b><a href="'.admin_url().'admin.php?page=pricing">All-Inclusive Enterprise Plan</a></b> has been released. <br>Click here to know more : <a style="cursor:pointer;"onClick="otpSupportOnClick();"><u>Contact Us</u></a><br>.
        </div></div></div></div>

                    <a id="show_prem_addons_button" class="button button-primary button-large" style="background:orange;color:black">
                        <span class="dashicons dashicons-admin-tools" style="margin:5% 0 0 0;"></span>
                            '.mo_("Premium Addons").'
                    </a>';
                    if($isLoggedIn && $isFreePlugin)
echo'
                     <a id="mo_check_transactions" class="button button-primary button-large">
                            <span class="dashicons dashicons-visibility" style="margin:5% 0 0 0;"></span>
                                '.mo_("View Transactions").'
                    </a>';

echo'

                    <a class="button button-primary button-large" id="restart_tour_button">
                        <span class="dashicons dashicons-controls-repeat" style="margin:5% 0 0 0;"></span>
                            '.mo_("Restart Tour").'
                    </a>
                </div>
            </div>
		<form id="mo_check_transactions_form" style="display:none;" action="" method="post">';
            
            wp_nonce_field('mo_check_transactions_form','_nonce');
echo        '<input type="hidden" name="option" value="mo_check_transactions" />
        </form></div>';

echo'	<div id="tab">
			<h2 class="nav-tab-wrapper">';

        
        foreach ($tabDetails->_tabDetails as $tabs)
        {
            if($tabs->_showInNav) {
                echo '<a  class="nav-tab 
                        ' . ($active_tab === $tabs->_menuSlug ? 'nav-tab-active' : '') . '" 
                        href="' . $tabs->_url . '"
                        style="'. $tabs->_css .'"
                        id="' . $tabs->_id . '">
                        ' . $tabs->_tabName . '
                    </a>';
            }
        }

        echo '</h2>';

        if(!$registered) {
            echo '<div  style="background-color:rgba(255,5,0,0.29);font-size:0.9em;" 
                        class="notice notice-error">
                        <h2>' .$registerMsg.'</h2>
                  </div>';
        }else if(!$activated) {
            echo '<div  style="background-color:rgba(255,5,0,0.29);font-size:0.9em;" 
                        class="notice notice-error">
                        <h2>' .$activationMsg.'</h2>
                  </div>';
        }
        else if(!$gatewayconfigured) {
            echo '<div  style="background-color:rgba(255,5,0,0.29);font-size:0.9em;" 
                        class="notice notice-error">
                        <h2>' .$gatewayMsg.'</h2>
                  </div>';
        }