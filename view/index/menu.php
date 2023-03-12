<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <img src="picture/<?= $data_info['foto_aplikasi']; ?>" width="50" height="50">
      <H2><?= $data_info['nm_aplikasi']; ?></H2>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="index.php?page=home" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>



    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Referensi</span>
    </li>
    <li class="menu-item">
      <a href="index.php?page=master_obat" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Basic">Master Obat</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="index.php?page=jenis_obat" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Basic">Jenis Obat</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="index.php?page=satuan" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Basic">Satuan</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="index.php?page=industri" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Basic">Industri Farmasi</div>
      </a>
    </li>

    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>
    <!-- Cards -->
    <!-- <li class="menu-item">
      <a href="index.php?page=lap_stabilitas" class="menu-link">
        <i class="menu-icon tf-icons bx bx-desktop"></i>
        <div data-i18n="Basic">Stabilitas Produk</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="index.php?page=lap_historykeluar" class="menu-link">
        <i class="menu-icon tf-icons bx bx-desktop"></i>
        <div data-i18n="Basic">History Produk Keluar</div>
      </a>
    </li> -->

    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Transaksi</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="index.php?page=produkkeluar" class="menu-link">
        <i class="menu-icon tf-icons bx bx-desktop"></i>
        <div data-i18n="Basic">Produk Keluar</div>
      </a>
    </li>


  </ul>
</aside>
<!-- / Menu -->