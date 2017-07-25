<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand hidden-lg-up text-center" href="#">Logo here</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item hidden-md-down">
          <a class="nav-link" href="<?php echo base_url(); ?>">
            <b><span class="text-uppercase">Trang chủ</span></b>
          </a>
        </li>
        <?php 
        foreach ($league_list as $row):
          $name = strtolower($row->Ten_KhongDau);
          ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url($name.'-c').$row->id.'.html'; ?>">
          <b><span class="text-uppercase"><?php echo $row->Ten; ?></span></b>
          </a>
        </li>
        <?php
        endforeach;
        ?>
      </ul>
    </div>
  </div>
</nav>