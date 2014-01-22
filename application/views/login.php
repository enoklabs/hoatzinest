<!-- === Sign In === -->

<section class="form">
    <div class="row">
        <div class="large-6 large-centered columns formpadding">
            <h4 class="form-title greyDark">Sign In</h4>
            <?php echo validation_errors();?>
            <?php echo form_open('login/validate_credentials');?>
            <br/>
            <div>
                <?php echo form_input('email', set_value('email', ''), 'placeholder="Email Address"');?>
            </div>
            <div>
                <?php echo form_password('password', '', 'placeholder="Password"');?>
            </div>

            <div class="row">
                <div class="large-4 columns">
                    <button a class="button secondary radius wide" type=submit>Sign In</button>
                </div>
                <div class="large-8 columns right">
                    <p class="right">Don't have an account? <a href="<?php echo base_url();?>login/signup">&nbsp;Register Here</a></p>
                </div>
        <?php echo form_close();?>
        </div>
    </div>
</section>

<!-- === End Sign In === -->
