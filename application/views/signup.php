
<!-- === Sign Up === -->
<section class="form">
    <div class="row">
        <div class="large-6 large-centered columns formpadding">
            <h5 class="form-title greyDark"><i class="fa fa-edit fa-2x"></i>Sign Up</h5>
            <p>All fields are required!</p><br/>
            <?php echo validation_errors();?>
            <?php echo form_open('login/create_member');?>
            <div>
                <?php echo form_input('first_name', set_value('first_name', ''), 'placeholder="First Name"');?>
            </div>
            <div>
                <?php echo form_input('last_name', set_value('last_name', ''), 'placeholder="Last Name"');?>
            </div>
            <div>
                <?php echo form_input('email', set_value('email', ''), 'placeholder="Email Address"');?>
            </div>
            <div>
                <?php echo form_input('location', set_value('location', ''), 'placeholder="Location (ex: Chicago, IL)"');?>
            </div>
            <div>
                <?php echo form_password('password', '', 'placeholder="Password"');?>
            </div>
            <div>
                <?php echo form_password('password_confirm', '', 'placeholder="Confirm Password"');?>
            </div>
            <div class="row">
                <div class="large-5  columns">
                    <button class="button secondary radius wide" type=submit>Create my account</button>
                </div>
                <div class="large-7 columns right">
                    <p class="right">Already have an account? <a href="<?php echo base_url();?>login">&nbsp;Login Here</a></p>
                </div>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</section>
<!-- === End Sign Up === -->