
<header class="header">
  <div class="header__title">
    <div class="header__title-logo">
      <?php echo Asset::img('fuelphp_logo.jpg'); ?>
      <?php //echo Html::anchor('welcome/index', Asset::img('fuelphp_logo.jpg')); ?>
    </div>
    <div class="header__title-foot">
      FuelPHP form
    </div>
  </div>
  <nav class="header__nav">
    <ul class="header__list">
      <li class="item"><?php echo Html::anchor('welcome/index', 'login'); ?> </li>
      <li class="item"><?php echo Html::anchor('signup/index', 'signup'); ?></li>
    </ul>   
  </nav>
</header>