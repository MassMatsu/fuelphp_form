<div class="ctn__main">
  <section class="ctn__form">
    <h1 class="form__heading">sign up now</h1>
    <!-- <?php //var_dump($formData); ?> -->

    <?php if(!empty($error)):?>

      <ul class="area-error-msg">
        <?php foreach($error as $key => $val): ?>
          <li><?=$val?></li>
        <?php endforeach; ?> 
      </ul>
      
    <?php endif; ?> 

    <?php echo $signupform ?>
    <?php //echo $data; ?>
  </section>
  
</div>