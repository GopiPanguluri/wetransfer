<?php //echo '<pre>';print_r($negotiation_messages);exit; 
      foreach($negotiation_messages as $row_neg_mess){ ?>
    <?php if($row_neg_mess['user_id']==$negotiation_members['seller_user_id']){ ?>
    <!-- Message. Default to the left -->
    <div class="direct-chat-msg">
      <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-left"><?php echo $negotiation_members['seller_details']['name']; ?></span>
        <span class="direct-chat-timestamp pull-right"><?php echo date('d M h:i a',strtotime($row_neg_mess['added_date'])); ?></span>
      </div>
      <!-- /.direct-chat-info -->
      <img class="direct-chat-img" height="128" width="128" src="<?php echo profile_img($negotiation_members['seller_details']['image']); ?>" alt="message user image"><!-- /.direct-chat-img -->
      <div class="direct-chat-text">
        <?php echo $row_neg_mess['n_mess_message']; ?>
      </div>
      <div>
        <?php if(count($row_neg_mess['neg_mes_files'])!=0){ $sno=1; foreach($row_neg_mess['neg_mes_files'] as $row_files):?>
            <div class="border_files col-md-4 text-center" style="margin: 10px;"> 
              <span class=""> <a target="_blank" href="<?php echo config_item('root_dir').'assets/images/negotiations/'.$row_files['n_f_name']; ?>"> Doccument-<?php echo $sno; ?> </a></span> 
            </div>
        <?php $sno++; endforeach; } ?>    
      </div>
      <!-- /.direct-chat-text -->
    </div>
    <!-- /.direct-chat-msg -->
    <?php }else{ ?>
    <!-- Message to the right -->
    <div class="direct-chat-msg right">
      <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-right"><?php echo $negotiation_members['buyer_details']['name']; ?></span>
        <span class="direct-chat-timestamp pull-left"><?php echo date('d M h:i a',strtotime($row_neg_mess['added_date'])); ?></span>
      </div>
      <!-- /.direct-chat-info -->
      <img class="direct-chat-img" height="128" width="128" src="<?php echo profile_img($negotiation_members['seller_details']['image']); ?>" alt="message user image"><!-- /.direct-chat-img -->
      <div class="direct-chat-text">
        <?php echo $row_neg_mess['n_mess_message']; ?>    
      </div>
      <div>
        <?php if(count($row_neg_mess['neg_mes_files'])!=0){ $sno=1; foreach($row_neg_mess['neg_mes_files'] as $row_files):?>
            <div class="border_files col-md-4 text-center" style="margin: 10px;"> 
              <span class=""> <a target="_blank" href="<?php echo config_item('root_dir').'assets/images/negotiations/'.$row_files['n_f_name']; ?>"> Doccument-<?php echo $sno; ?> </a></span> 
            </div>
        <?php $sno++; endforeach; } ?>    
      </div>
      <!-- /.direct-chat-text -->
    </div>
    <!-- /.direct-chat-msg -->
<?php } } ?>
<?php //exit; ?>