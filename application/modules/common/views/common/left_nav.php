<?php echo '<pre>';print_r($_SESSION);exit;
if(isset($_SESSION['admin_type'])){
    $this->load->view('common/common/admin-left_nav');
}elseif(isset($_SESSION['seller_type'])){
    $this->load->view('common/common/seller-left_nav');
}elseif(isset($_SESSION['buyer_type'])){
    $this->load->view('common/common/buyer-left_nav');
}//exit;
 ?>