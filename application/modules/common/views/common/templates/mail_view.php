Dear <?php echo $name; ?>,<br /><br />
Please confirm your email address by clicking the link below.
We may need to send you critical information about our service and it is important that we have an accurate email address.
<a href="<?php echo $conflink; ?>">Please click here to confirm your mail.</a><br /><br />
<i>Regards,</i><br />
<?php echo $this->config->item('site_title').' team.'; ?>
<?php //exit;  ?>