  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Nguyễn Thanh Hùng</a>
        </div>
      </div>
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Theo dõi & Thống kê
              </p>
            </a>            
          </li>     
          <li class="nav-item">
            <a href="<?php echo e(route('categories.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Loại sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('products.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('orders.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Doanh số
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside><?php /**PATH D:\Nhom_E\resources\views/publics/sidebar.blade.php ENDPATH**/ ?>