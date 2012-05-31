<?php
$this->load->helper('url');
$this->load->helper('form');
$name = array('name'=>'name','value'=>set_value('name'));
$email = array('name'=>'email','value'=>set_value('email'));
$phone = array('name'=>'phone','value'=>set_value('phone'));
$subject = array('name'=>'subject','value'=>set_value('subject'));
$message = array('name'=>'message','value'=>set_value('message'));
?>
<div class="container content">
    <div class="row-fluid projects">
        <div class="span8">
            <div class="projectswrap">
                <h1 class="blue">Contact Us</h1>
                <p>If you like what you see, get in touch for a chat using the contact details below.</p>
                <p class="phone">020 1234 5678</p>
                <p class="email light-green"><?php echo safe_mailto('hello@d-formed.net'); ?></p>
                <?php
                if (isset($fail))
                {
                    echo '<p class="error">Error:</p>';
                    echo $fail;
                    echo '<br />';
                }
                ?>
                <?php $form=array('class'=>'contact-form'); echo form_open('/contact/email',$form); ?>
                    <p>Name:<span class="light-green bigstar">*</span><? echo form_input($name); ?></p>                        
                    <p>E-mail:<span class="light-green bigstar">*</span><? echo form_input($email); ?></p>
                    <p>Phone:<? echo form_input($phone); ?></p>
                    <p>Subject:<? echo form_input($subject); ?></p>
                    <p>Message:<span class="light-green bigstar">*</span><? echo form_textarea($message); ?></p>
                    <div id="formsubmit">
                        <?php $submit=array('class'=>'light-green','value'=>'Send','name'=>'submit'); echo form_submit($submit); ?>
                        <div id="key">
                            <span class="light-green bigstar">*</span> - required field
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="span4 aboutright associates">
            <?php $this->load->view('boxes/associates'); ?>
            <?php $this->load->view('boxes/testimonials'); ?>
        </div>
    </div>
</div>