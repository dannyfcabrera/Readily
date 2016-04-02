<?php
  
// Gravity Forms Filter Hooks

add_filter( 'gform_init_scripts_footer', '__return_true' );

add_filter( 'gform_get_form_filter_1', 'bootstrap_form', 10, 2 );
function bootstrap_form( $form_string, $form ) {

$bootstrapForm = '<form method="post" enctype="multipart/form-data" id="gform_1" action="/readily/contact/">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label class="sr-only" for="input_1_1_3">First Name</label>
        <input class="form-control" required type="text" name="input_1.3" id="input_1_1_3" value="" aria-label="First name" placeholder="First Name" tabindex="1">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label class="sr-only" for="input_1_1_6">Last Name</label>
        <input class="form-control" required type="text" name="input_1.6" id="input_1_1_6" value="" aria-label="Last name" placeholder="Last Name" tabindex="2">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label class="sr-only" for="input_1_2">Email</label>
        <input class="form-control" required name="input_2" id="input_1_2" type="email" value="" placeholder="Email" tabindex="3">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label class="sr-only" for="input_1_3">Website</label>
        <input class="form-control" name="input_3" id="input_1_3" type="url" value="" placeholder="Website" tabindex="4">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label class="sr-only" for="input_1_4">Message</label>
        <textarea class="form-control" required name="input_4" id="input_1_4" rows="6" placeholder="Message" tabindex="5"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <button type="submit" class="btn btn-primary" id="gform_submit_button_1" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  if( !jQuery(&quot;#gform_1&quot;)[0].checkValidity || jQuery(&quot;#gform_1&quot;)[0].checkValidity()){window[&quot;gf_submitting_1&quot;]=true;}" tabindex="6">Send</button>
      <input type="hidden" name="is_submit_1" value="1">
      <input type="hidden" name="gform_submit" value="1">
      <input type="hidden" name="gform_unique_id" value="">
      <input type="hidden" name="state_1" value="WyJbXSIsIjZkNjI3NDg3YjFiMGEwZWM2NTMyNzUwN2NiYzI1ZGFiIl0=">
      <input type="hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
      <input type="hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
      <input type="hidden" name="gform_field_values" value="">
    </div>
  </div>
</form>';
  

$form_string = $bootstrapForm;

    return $form_string;
}


add_filter( 'gform_get_form_filter_2', 'newsletter_form', 10, 2 );
function newsletter_form( $form_string, $form ) {

$newsletterForm = '<form class="form-inline" method="post" enctype="multipart/form-data" id="gform_2" action="/readily/newsletter/">
<div class="form-group">
  <label class="sr-only" for="input_2_1">Email</label>
  <input class="form-control" name="input_1" id="input_2_1" type="email" value="" required placeholder="Email">
</div>
<div class="form-group">
  <button class="btn btn-default" type="submit" id="gform_submit_button_2" value="Sign Up" tabindex="2" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}">Sign Up</button>
  <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
  <input type="hidden" class="gform_hidden" name="gform_submit" value="2">
  
  <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
  <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsIjZkNjI3NDg3YjFiMGEwZWM2NTMyNzUwN2NiYzI1ZGFiIl0=">
  <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
  <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
  <input type="hidden" name="gform_field_values" value="">
</div>
</form>';
  

$form_string = $newsletterForm;

    return $form_string;
}