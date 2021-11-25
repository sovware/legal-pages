<?php
/* $ars = array(
 * 'siteUrl' =>  'http://wordpress.stackexchange.com/',
  'siteName' =>  'Adl Plugin',
  'businessNiche' =>  'WordPress Plugin',
  'phoneNumber' =>  '017111111111',
  'emailAddress' =>  'my@gmail.com',
  'streetName' =>  'my address',
  'countryName' =>  'Bangladesh',
  'cityName' =>  'Sylhet Sadar',
  'stateName' =>  'Sylhet',
    'zipCode' =>  '3100',
    'mailingAddress' =>  'House no 55, Flat no 1A, New Lane, Dhaka.',
)
*/
//validate and sanitize data of general info
$homeTabData = array_merge(get_option('adl_lp_general', array()), get_option('adl_lp_social', array()), get_option('adl_lp_popup', array()), get_option('adl_lp_misc', array()), get_option('adl_lp_cookie', array()));
$siteUrl = (!empty($homeTabData['siteUrl'])) ? esc_url($homeTabData['siteUrl']) : get_site_url();
$siteName = (!empty($homeTabData['siteName'])) ? esc_attr($homeTabData['siteName']) : get_option('blogname');
$businessNiche = (!empty($homeTabData['businessNiche'])) ? esc_attr($homeTabData['businessNiche']) : '';
$phoneNumber = (!empty($homeTabData['phoneNumber'])) ? esc_attr($homeTabData['phoneNumber']) : '';
$emailAddress = (!empty($homeTabData['emailAddress'])) ? esc_attr($homeTabData['emailAddress']) : '';
$streetName = (!empty($homeTabData['streetName'])) ? esc_attr($homeTabData['streetName']) : '';
$countryName = (!empty($homeTabData['countryName'])) ? esc_attr($homeTabData['countryName']) : '';
$cityName = (!empty($homeTabData['cityName'])) ? esc_attr($homeTabData['cityName']) : '';
$stateName = (!empty($homeTabData['stateName'])) ? esc_attr($homeTabData['stateName']) : '';
$zipCode = (!empty($homeTabData['zipCode'])) ? esc_attr($homeTabData['zipCode']) : '';
$mailingAddress = (!empty($homeTabData['mailingAddress'])) ? esc_attr($homeTabData['mailingAddress']) : '';


//validate and sanitize data of Social info
$facebookUrl = (!empty($homeTabData['facebookUrl'])) ? esc_url($homeTabData['facebookUrl']) : '';
$googlePlusUrl = (!empty($homeTabData['googlePlusUrl'])) ? esc_url($homeTabData['googlePlusUrl']) : '';
$linkedInUrl = (!empty($homeTabData['linkedInUrl'])) ? esc_url($homeTabData['linkedInUrl']) : '';
$twitterUrl = (!empty($homeTabData['twitterUrl'])) ? esc_url($homeTabData['twitterUrl']) : '';

// validate and sanitize data of popup options
$disabled_pop_notice_title = (isset($homeTabData['disabled_pop_notice_title'])) ? absint($homeTabData['disabled_pop_notice_title']) : 0;
$popup_notice_title = (isset($homeTabData['popup_notice_title'])) ? sanitize_text_field($homeTabData['popup_notice_title']) : '';
$agreement_text = (isset($homeTabData['agreement_text'])) ? sanitize_text_field($homeTabData['agreement_text']) : '';
$accept_btn_text = (isset($homeTabData['accept_btn_text'])) ? sanitize_text_field($homeTabData['accept_btn_text']) : '';
$popup_width = (isset($homeTabData['popup_width'])) ? sanitize_text_field($homeTabData['popup_width']) : '90%';
$popup_height = (isset($homeTabData['popup_height'])) ? sanitize_text_field($homeTabData['popup_height']) : '90vh';
$user_can_close_popup = (isset($homeTabData['user_can_close_popup'])) ? absint($homeTabData['user_can_close_popup']) : 0;
$disabled_pop_js_css = (isset($homeTabData['disabled_pop_js_css'])) ? absint($homeTabData['disabled_pop_js_css']): 0;

?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
            <!--home tab's tab menu-->
            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <div class="hidden-xs">General Information</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                        <div class="hidden-xs">Miscellaneous Settings</div>
                    </button>
                </div>


            </div>  <!--ends btn-pref-->


            <!--Home tab's tab content-wrapper -->
            <div class="well">

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <form class="form-horizontal" method="post" id="adl_lp_gs_form">
                                        <div class="form-group">
                                            <label for="siteUrl" class="col-sm-3 control-label">Your Site URL</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="siteUrl" class="form-control" id="siteUrl" placeholder="http://example.com" value="<?= $siteUrl; ?>" >
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [siteUrl]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="siteName" class="col-sm-3 control-label">Site / Business Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="siteName" class="form-control" id="siteName" placeholder="Your Business Name" value="<?= $siteName; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [siteName]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="businessNiche" class="col-sm-3 control-label">Business Niche</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="businessNiche" class="form-control" id="businessNiche" placeholder="Your Business Niche" value="<?= $businessNiche; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [businessNiche]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="phoneNumber" class="col-sm-3 control-label">Phone Number</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="eg +440123456789" value="<?= $phoneNumber; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label text-left">
                                                [phoneNumber]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="emailAddress" class="col-sm-3 control-label">Email Address</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="emailAddress" class="form-control" id="emailAddress" placeholder="eg mail@example.com" value="<?= $emailAddress; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label text-left">
                                                [emailAddress]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="streetName" class="col-sm-3 control-label">Street Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="streetName" class="form-control" id="streetName" placeholder="eg. 123 Street Name" value="<?= $streetName; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [streetName]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="countryName" class="col-sm-3 control-label">Country Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="countryName" class="form-control" id="countryName" placeholder="eg. USA" value="<?= $countryName; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [countryName]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="cityName" class="col-sm-3 control-label">City</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="cityName" class="form-control" id="cityName" placeholder="eg, Buffalo" value="<?= $cityName; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [cityName]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="stateName" class="col-sm-3 control-label">State</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="stateName" class="form-control" id="stateName" placeholder="eg. New York" value="<?= $stateName; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [stateName]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="zipCode" class="col-sm-3 control-label">Zip/Postal Code</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="zipCode" class="form-control" id="zipCode" placeholder="eg. 10001" value="<?= $zipCode; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [zipCode]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="mailingAddress" class="col-sm-3 control-label">Complete Mailing Address</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="mailingAddress" class="form-control" id="mailingAddress" placeholder="eg. 1115 Pleasant Valley Rd, Merlin, OR, 97532" value="<?= $mailingAddress; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [mailingAddress]
                                            </div>
                                        </div>

                                        <h2>social info</h2>

                                        <div class="form-group">
                                            <label for="facebookUrl" class="col-sm-3 control-label">Facebook Page/Profile URL</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="facebookUrl" class="form-control" id="facebookUrl" placeholder="https://facebook.com/yourbusinessName" value="<?= $facebookUrl; ?>" >
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [facebookUrl]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="googlePlusUrl" class="col-sm-3 control-label">Google Plus URL</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="googlePlusUrl" class="form-control" id="googlePlusUrl" placeholder="https://google-plus.com/yourbusinessName" value="<?= $googlePlusUrl; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [googlePlusUrl]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="linkedInUrl" class="col-sm-3 control-label">LinkedIn Profile URL</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="linkedInUrl" class="form-control" id="linkedInUrl" placeholder="https://facebook.com/yourbusinessName" value="<?= $linkedInUrl; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [linkedInUrl]
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="twitterUrl" class="col-sm-3 control-label">Twitter URL</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="twitterUrl" class="form-control" id="twitterUrl" placeholder="https://twitter.com/yourbusinessName" value="<?= $twitterUrl; ?>">
                                            </div>
                                            <div class="col-sm-2 control-label">
                                                [twitterUrl]
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-1 col-sm-offset-3 control-label">
                                                <button type="submit" id="adl_lp_g_settings" name="adl_lp_g_settings" class="btn btn-primary" value="save">Save</button>
                                            </div>
                                            <div class="col-sm-1 control-label" id="adl_ajax_loader">
                                                <button type="reset" id="adl_lp_g_settings_reset" name="adl_lp_g_settings_reset"class="btn btn-primary" value="reset">Reset Fields</button>
                                            </div>
                                            <div class="col-sm-2 col-sm-offset-2 control-label" id="adl_ajax_loader">
                                                <button type="reset" id="adl_lp_g_settings_resetdb" name="adl_lp_g_settings_resetdb"class="btn btn-primary" value="resetdb">Reset Saved Data</button>
                                            </div>

                                        </div>
                                        <?php wp_nonce_field( $ADL_LP->nonceAction(), $ADL_LP->nonceName());?>

                                    </form>


                                </div>

                            </div>
                        </div>

                    </div> <!--ends #tab2--> <!-- general info content -->

                    <div class="tab-pane fade in" id="tab5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4">
                                    <form class="form-horizontal" method="post" id="misc_form">

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="hide_lp_in_search" value="1" <?php checked(@$args['hide_lp_in_search']); ?> > Exclude legal pages in Search Result
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label style="color: red;">
                                                <input  type="checkbox" name="delete_adl_lp_data" value="1" <?php checked(@$args['delete_adl_lp_data']); ?> > Warning!! Check this to remove plugin's data on uninstall ( Check it ONLY IF YOU UNDERSTAND what you are doing.)
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-1 col-sm-offset-3 control-label">
                                                <button type="submit" class="btn btn-primary" id="misc_setting_submit">Save</button>
                                            </div>
                                        </div>
                                        <?php wp_nonce_field( $ADL_LP->nonceAction(), $ADL_LP->nonceName() );?>
                                    </form>

                                </div>  <!--    ends .col-md-6-->


                            </div> <!--    ends .row -->
                        </div> <!--    ends .container -->

                    </div> <!--ends #tab5-->  <!-- Miscellaneous  info content -->



                </div>

            </div>   <!--    ends .well-->


        </div> <!--ends col-sm-12  HOME TAB-->







    </div>
</div>