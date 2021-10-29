<?php headerAdmin($data);?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i><?=$data['page_title']?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Dashboard</div>
            
          </div>
          <?php

          $requestApi = CurlConnectionGet(URLPAYPAL."/v2/checkout/orders/01L731638V6964240","
          application/json",getTokenPayPal());
          dep($requestApi);
          $requestPost = CurlConnectionPost(URLPAYPAL."/v2/payments/captures/3A418824P3757402W/refund","application/json",getTokenPaypal());
          dep($requestPost);
          ?>
        </div>
      </div>
</main>
<?php footerAdmin($data);?>
   