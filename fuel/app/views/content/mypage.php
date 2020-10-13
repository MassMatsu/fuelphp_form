<div>
  <h1>
    こんにちは! &nbsp; 
    <?php echo Session::get('username'); ?>  
    さん
  </h1>

  <p>email: <?php echo Session::get('email'); ?> </p>
  <p>password: <?php echo Session::get('password'); ?> </p> 
</div>