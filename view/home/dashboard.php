<?php

include('data_admin.php');

?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> DASHBOARD</h4>

  <div class="row">
             
             <div class="col-lg-6 col-md-12 col-6 mb-4">
               <div class="card">
                 <div class="card-body">
                   <div class="card-title d-flex align-items-start justify-content-between">
                     <div class="avatar flex-shrink-0">
                       <img
                         src="snet/assets/img/icons/unicons/chart-success.png"
                         alt="chart success"
                         class="rounded"
                       />
                     </div>
                    
                   </div>
                   <span class="fw-semibold d-block mb-1">Jumlah Produk</span>
                   <h3 class="card-title mb-2"><?=$jumlah_produk;?></h3>
                   
                 </div>
               </div>
             </div>
             <div class="col-lg-6 col-md-12 col-6 mb-4">
               <div class="card">
                 <div class="card-body">
                   <div class="card-title d-flex align-items-start justify-content-between">
                     <div class="avatar flex-shrink-0">
                     <img
                         src="snet/assets/img/icons/unicons/wallet-info.png"
                         alt="Credit Card"
                         class="rounded"
                       />
                     </div>
                    
                   </div>
                   <span class="fw-semibold d-block mb-1">Jumlah Produk Keluar</span>
                   <h3 class="card-title mb-2"><?=$jumlah_keluar;?></h3>
                   
                 </div>
               </div>
             </div>


    

     </div>
     </div>
     </div>