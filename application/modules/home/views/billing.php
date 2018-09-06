<!doctype html>
<html class="no-js" lang="en">
  <head>
  <?php $this->load->view('common/css'); ?>
  <style>
  sup{
    vertical-align: top;
    font-size: 9px;
    top: 0.9em;
  }
  </style>
  </head>
  <body class="training-programs">
    <!--[if IE 9]>
      <div class="legacy-browser-message">
        <p>You are using an outdated browser. <a href="http://browsehappy.com/" target="_blank">Upgrade your browser today</a> for better experience!</p>
      </div>
    <![endif]-->

    <!--[if lt IE 9]>
      <div class="legacy-browser-message lt-ie-9">
        <p>You are using an outdated browser. <a href="http://browsehappy.com/" target="_blank">Upgrade your browser today</a> for better experience!</p>
      </div>
    <![endif]-->
    <div class="off-canvas position-left" id="offCanvas" data-off-canvas="" data-transition="overlap">
      <div class="mobile-header">
        <div class="brand text-center">
          <img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" alt="Consulting.com"/>
        </div>
      </div>
      <!-- Mobile menu content  -->
      <button class="close-button" aria-label="Close menu" type="button" data-close="">
        <span aria-hidden="true">&#10005;</span>
      </button>
      <?php $this->load->view('common/mobile_header'); ?>
    </div><!-- / .off-canvas -->
    <div class="off-canvas-content" data-off-canvas-content="">
      <!-- Mobile Menu -->
      <?php $this->load->view('common/header'); ?>
      <div class="row site-content-container  medium-uncollapse">                  
        <aside class="columns large-3">
          <div class="block menu-block options">
            <ul class="menu vertical">
                <?php $this->load->view('common/profile_left_nav',array('data'=>'billing')); ?>
              </li>
            </ul>
          </div>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container invoice-height">
        
              <div class="row billing-sectioins-container">
                <div class="columns large-6 block-inner-padding card-form-container">
        
                  <header class="page-header">
                    <div class="row title-container">
                      <div class="columns medium-12">
                        <h1>Billing Information</h1>
                      </div>
                    </div>
                  </header>
        
                 <div class="block-content">
                                                                                 <div class="row">
                      <div class="columns large-12 card-form-field">
        
                        <div class="row supported-cards-container">
                          <div class="columns small-12">
        
                            <div class="row title-container">
                              <div class="columns small-4"><label>Card on File</label></div>
                            </div>
        
                            <ul class="no-bullet supported-cards is-active">
                              <li class="icon card-visa is-current-card">Visa</li>
                              <li class="icon card-amex ">Amex</li>
                              <li class="icon card-mastercard ">Mastercard</li>
                              <li class="icon card-discover ">Discover</li>
                            </ul>
                          </div>
                        </div>
                        <!-- / .supported-cards-container -->
        
                      </div>
                    </div>
                                        <div class="row footer-buttons-container">
                      <div class="small-12 columns">
                        <a href='<?php echo base_url('home/add_new_card'); ?>' class="button primary">Add New Card</a>
                      </div>
                    </div>
        
                  </div>
                  <!-- /.block-content -->
        
                </div>
                <!-- / .card-form-container -->
        
                <div class="columns large-6 block-inner-padding card-image-container">
        
                <div class="card-wrapper show-for-medium" data-jp-card-initialized="true">
                    <div class="jp-card-container">
                        <div class="jp-card jp-card-visa jp-card-identified">
                            <div class="jp-card-front">
                                <div class="jp-card-logo jp-card-elo">
                                    <div class="e">e</div>
                                    <div class="l">l</div>
                                    <div class="o">o</div>
                                </div>
                                <div class="jp-card-logo jp-card-visa">visa</div>
                                <div class="jp-card-logo jp-card-mastercard">MasterCard</div>
                                <div class="jp-card-logo jp-card-maestro">Maestro</div>
                                <div class="jp-card-logo jp-card-amex"></div>
                                <div class="jp-card-logo jp-card-discover hide">discover</div>
                                <div class="jp-card-logo jp-card-dinersclub"></div>
                                <div class="jp-card-logo jp-card-dankort">
                                    <div class="dk">
                                        <div class="d"></div>
                                        <div class="k"></div>
                                    </div>
                                </div>
                                <div class="jp-card-lower">
                                    <div class="jp-card-shiny"></div>
                                    <div class="jp-card-cvc jp-card-display">���</div>
                                    <div class="jp-card-number jp-card-display">XXXX XXXX XXXX 4529</div>
                                    <div class="jp-card-name jp-card-display">christopher duffee</div>
                                    <div class="jp-card-expiry jp-card-display" data-before="month/year" data-after="valid thru">11/22 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                  
        
                  <div class="customer-invoices">
                                        <h3>Invoices</h3>
                    <ul class="no-bullet invoices-list">
                                            <li class="invoice-details-overlay">
                        <a href="#" data-invoice-id="42033">
                          <h4>March, 07 2018</h4>
                          Invoice #42033 &middot; $1,997
                        </a>
                      </li>
                                            
                    </ul>
                                      </div>
                </div>
                <!-- / .card-image-container -->
        
              </div>
        
                            <div id="42033" class="block customer-invoice-detail">
                <div class="invoice-wrap block-inner-padding">
              
                  <header class="block-header">
                    <div class="row">
                      <div class="columns medium-6">
                        <div class="consulting-logo-dark">Consulting.com</div>
                      </div>
                      <div class="columns medium-6 invoice-title">
                        <h2>Invoice</h2>
                        March 07, 2018
                      </div>
                    </div>
                  </header>
              
                  <div class="row invoice-address">
                    <div class="columns medium-6">
                      <strong>Consulting.com</strong><br>
                      48 Mount Street Upper<br>
                      Dublin 2 D02 YY23<br>
                      Ireland<br>
                      VAT: IE3467661IH
                    </div>
                    <div class="columns medium-6">
                      <strong class="invoice-number">Invoice #</strong><br>
                      42033<br>
                      <strong class="invoice-name">Billed to: christopher duffee</strong>
                    </div>
                  </div>
              
                  <div class="invoice-table-items table-scroll">
                    <table class="table-invoice">
                      <thead>
                        <tr>
                          <th align="left">Item</th>
                          <th width="100">Qty</th>
                          <th width="100">Unit Price</th>
                          <th width="100" align="right">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                                                <tr>
                          <td><strong>Consulting Accelerator� - </strong></td>
                          <td align="center">1</td>
                          <td align="center">$1,997</td>
                          <td align="right">$1,997</td>
                        </tr>
                                                                        
                      </tbody>
                    </table>
                  </div>
              
                  <div class="invoice-table-status table-scroll">
                    <table class="table-invoice">
                      <thead>
                        <tr>
                          <th width="50" align="left">#</th>
                          <th width="100" align="left">Amount</th>
                          <th width="100" align="left">Due</th>
                          <th width="130" align="left">Status</th>
                          <th align="left">Card</th>
                          <th width="100" align="right">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                                                <tr>
                          <td>1</td>
                          <td>$1,997</td>
                          <td>07/03/18</td>
                          <td class="text-status">
                                                        Paid (07/03/18)
                                                      </td>                          
                          <td>
                                                        ( xxxxxxxxxxxx4529)
                                                      </td>                                                    
                          <td align="right">$1,997</td>
                        </tr>
                                                
                      </tbody>
                    </table>
                  </div>
              
                  <div class="row">
                    <div class="columns medium-6 medium-push-6 invoice-summary-label">
                      <table class="table-total">
                        <tbody>
                            <tr>
                                <th align="left">Invoice Total</th>
                                <td align="right">USD $1,997</td>
                            </tr>
                                                        <tr>
                                <th align="left">Discounts</th>
                                <td align="right">USD $0</td>
                            </tr>
                            <tr>
                                <th align="left">Payments</th>
                                <td align="right">USD $1,997</td>
                            </tr>
                            <tr>
                                <th align="left">Outstanding Balance</th>
                                <td align="right">USD $0</td>
                            </tr>
                            <tr>
                                <th align="left"><strong>Past Due Balance</strong></th>
                                <td align="right"><strong>USD $0</strong></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="columns medium-6 medium-pull-6 invoice-info">
                      All applicable VAT is included in invoice total.<br><br>
                      Thanks for being a customer! <br>
                      If you have questions, we'd be happy to help. <br>
                      <a href="#"><span class="__cf_email__" data-cfemail="fe8d8b8e8e918c8abe9d91908d8b928a979099d09d9193">[email&#160;protected]</span></a>
                    </div>
                  </div>
              
                  <div class="row columns">
                    <div class="button primary close-invoice-detail">Back To Billing</div>
                  </div>
              
                </div>
              </div>
                                          
        
            </article>
        </main>
      </div><!-- / .site-content-container -->
      <!-- Billing Issue Reveal -->
      <div class="reveal billing issue" id="billing-issue" data-reveal>
          <div class="row reveal-inner"> 
            <header class="reveal-header columns small-12">
              <h1 class="text-center">Oops!<br>We Had Trouble Billing Your Card�</h1>
            </header>
            <div class="reveal-content">
              <div class="columns small-12">
                <div class="page-icon">
                  <div class="image-icon billing-issue"></div>
                </div>
                <p>I�m sorry we had trouble charging your card on file for your latest payment and your account has been suspended until this overdue balance is paid.</p>
                <p>Please click the �Fix Billing� button below to update your card on file and get your account back up and running again. </p>
              </div>
            </div>
            <!-- /.reveal-content -->
            <div class="columns small-12 footer-buttons-container text-center">
              <a href='#' class="button primary uppercase">Fix billing information</a>
            </div>
            <!-- /.columns small-12 footer-buttons-container -->
          </div>
          <!-- /.reveal-inner -->
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&#10005;</span>
          </button>
      </div>
      <!-- Suspended Reveal -->
      <div class="reveal account issue" id="account-suspended" data-reveal>
          <div class="row reveal-inner"> 
            <header class="reveal-header columns small-12">
              <h1 class="text-center">Yikes!<br>Your Account Has Been Suspended�</h1>
            </header>
            <div class="reveal-content">
              <div class="columns small-12">
                <div class="page-icon">
                  <div class="image-icon account-issue"></div>
                </div>
                <p id="suspend-modal-message">Unfortunately your access to the content has been suspended.<br/>
                    If you have any questions please email us to <a href="#"><span class="__cf_email__" data-cfemail="cdbeb8bdbda2bfb98daea2a3beb8a1b9a4a3aae3aea2a0">[email&#160;protected]</span></a>
                </p>
              </div>
            </div>
            <!-- /.reveal-content -->
            <div class="columns small-12 footer-buttons-container text-center">
            </div>
            <!-- /.columns small-12 footer-buttons-container -->
          </div>
          <!-- /.reveal-inner -->
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&#10005;</span>
          </button>
      </div>
    </div>
    <?php $this->load->view('common/footer'); ?>
    <?php $this->load->view('common/js'); ?>
  </body>
</html>