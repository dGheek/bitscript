        <!-- Login Container -->
        <div class="dt-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <!-- Brand logo -->
                   <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="">
                            <img class="dt-brand__logo-img" src="<?php echo $this->security->xss_clean($this->logoWhite) ?>" alt="Logo">
                        </a>
                    </div>
                    <!-- /brand logo -->

                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">
                  
                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">
                        <div class="col-md-12">
                            <?php
              $this->load->helper('form');
              $error = $this->session->flashdata('error');
              if($error)
              { ?>
                            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                                role="alert">
                                <?php echo $this->session->flashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php } ?>
                            <?php  
                      $success = $this->session->flashdata('success');
                      if($success)
                      {
                  ?>
                            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                                role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php } ?>
                            <?php echo validation_errors('<div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">', ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>'); ?>
                        </div>
                        <h2 class="f-20 text-capitalize"><?php echo lang("create_account") ?></h2>
                        <!-- Form -->
                        <?php echo form_open(base_url( 'signup' ), array( 'id' => 'registerForm' ));?>
                          <div class="row">
                            <div class="col-md-6">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="f-name"><?php echo lang("first_name") ?></label>
                                <input type="text" class="form-control" name="firstname" id="f-name"
                                    aria-describedby="f-name" placeholder="<?php echo lang("first_name") ?>" value="<?=set_value('firstname')?>">
                                    <label class="error" id="firstname"></label>
                            </div>
                            <!-- /form group -->
                            </div>
                            <div class="col-md-6">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="l-name"><?php echo lang("last_name") ?></label>
                                <input type="text" class="form-control" name="lastname" id="l-name"
                                    aria-describedby="l-name" placeholder="<?php echo lang("last_name") ?>" value="<?=set_value('lastname')?>">
                                    <label class="error" id="lastname"></label>
                            </div>
                            <!-- /form group -->
                            </div>
                          </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1"><?php echo lang("email_address") ?></label>
                                <input type="email" class="form-control" name="email" id="email-1"
                                    aria-describedby="email-1" placeholder="<?php echo lang("email") ?>" value="<?=set_value('email')?>">
                                    <label class="error" id="email"></label>
                            </div>
                            <!-- /form group -->

                            <div class="row">
                              <div class="col-md-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="password-1"><?php echo lang("password") ?></label>
                                    <input type="password" class="form-control" name="password" id="password-1"
                                        placeholder="<?php echo lang("password") ?>" value="<?=set_value('password')?>">
                                    <label class="error" id="password"></label>
                                </div>
                                <!-- /form group -->
                              </div>
                              <div class="col-md-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="password-2"><?php echo lang("confirm_password") ?></label>
                                    <input type="password" class="form-control" name="cpassword" id="password-2"
                                        placeholder="<?php echo lang("confirm_password") ?>" value="<?=set_value('cpassword')?>">
                                    <label class="error" id="cpassword"></label>
                                </div>
                                <!-- /form group -->
                              </div>
                              <div class="col-md-12">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="ref"><?php echo lang("referral_code") ?></label>
                                <input type="hidden" class="form-control" name="ref" id="ref"
                                    aria-describedby="ref" placeholder="<?php echo lang("referral_code") ?>" value="<?php echo $this->security->xss_clean($code) ?>">
                            </div>
                            <!-- /form group -->
                            </div>
                            </div>
                            <!-- Form Group -->
                            <div>
                                <checkbox class="dt-checkbox dt-checkbox-icon dt-checkbox-only" style="margin-bottom: 20px;">
                                    <input type="checkbox" name="accept_terms" id="accept_terms" value="agree" class="checkbox-check ng-pristine ng-valid ng-touched" style="width: 20%;">
                                    <label class="font-weight-light dt-checkbox-content" for="accept_terms">
                                        <span class="unchecked">
                                            <i name="box-o" size="xl" class="icon icon-box-o icon-xl icon-fw"></i>
                                        </span>
                                        <span class="checked ng-star-inserted">
                                            <i name="box-check-o" size="xl" class="text-primary icon icon-box-check-o icon-xl icon-fw"></i>
                                        </span>
                                    </label>
                                    <?php echo lang("agree_terms") ?> <?php echo $this->security->xss_clean($companyName)."'s" ; ?> <a target="_blank" href="#" class="checkbox-link text-capitalize"><?php echo lang("privacy_policy") ?></a> & 
                                  <a target="_blank" href="#" class="checkbox-link text-capitalize"><?php echo lang("terms_of_service") ?></a>
                                </checkbox>
                                <label class="error red" id="terms" for="password"></label>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-info text-uppercase" data-loading-text="<?php echo lang('processing_data') ?>" data-title="<?php echo lang("create_account") ?>"><?php echo lang("create_account") ?></button>
                                <span class="d-inline-block ml-4 text-uppercase"><?php echo lang("or") ?>
                                    <a class="d-inline-block font-weight-500 ml-3 text-capitalize"
                                        href="<?php echo base_url("login") ?>"><?php echo lang("login") ?></a>
                                </span>
                            </div>
                            <!-- /form group -->
                        <?php echo form_close();?>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->
    <script src="<?php echo base_url('/assets/dist/js/functions.js') ?>"></script>