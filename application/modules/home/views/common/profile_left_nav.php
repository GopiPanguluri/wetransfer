<li class="<?php if($data=='profile'){ echo 'active'; } ?>"><a href="<?php echo base_url('home/profile'); ?>">Personal Profile</a></li>
<li class="<?php if($data=='reset_password'){ echo 'active'; } ?>"><a href="<?php echo base_url('home/profile/reset_password'); ?>">Reset Your Password</a></li>
<li class="<?php if($data=='addresses'){ echo 'active'; } ?>"><a href="<?php echo base_url('home/profile/addresses'); ?>">Address</a></li>
<li class="<?php if($data=='billing'){ echo 'active'; } ?>"><a href="<?php echo base_url('home/profile/billing'); ?>">Billing Information</a></li>
<!--li class="<?php if($data=='email'){ echo 'active'; } ?>"><a href="<?php //echo base_url('home/profile/email_preferences'); ?>">Email Preferences</a-->