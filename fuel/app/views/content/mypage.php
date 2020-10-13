<div class="content__ctn">

  <h1 class="form__heading">
    こんにちは! &nbsp; 
    <?php echo Auth::get('username'); ?>  
    さん
  </h1>

  <p class="article__medium">email: <?php echo Auth::get('email'); ?> </p>
  <!-- <p>password: <?php //echo Session::get('password'); ?> </p> -->

  <!-- <p>あなたは合計<?php //echo $total_member;?> 人のメンバーの中の一人です。</p> -->

</div>