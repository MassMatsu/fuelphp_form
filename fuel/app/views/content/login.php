<div class="ctn__main">
  <section class="ctn__form">
    <h1 class="form__heading">log in from here</h1>
    <!-- <?php //var_dump($formData); ?> -->

    <?php if(!empty($error)):?>

      <ul class="area-error-msg">
        <?php foreach($error as $key => $val): ?>
          <li><?=$val?></li>
        <?php endforeach; ?> 
      </ul>
      
    <?php endif; ?> 

    <?php echo $loginform ?>
    <?php //echo $data; ?>
  </section>
  
</div>

 <!-- $error と $loginform がコントローラから渡されてくる -->