<div class="footer">
  
    &copy; Copyright <?php echo date('Y'); ?><?php echo ' '.$title; ?>
  
</div>

<script src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
<?=Asset::js('fixfooter.js')?>
<?=Asset::js('alertmsg.js')?>

<!-- <script>
    $(function() {

        var $toggleMsg = $('.js-toggle-msg');
        if($toggleMsg.length){
            $toggleMsg.slideDown();
            setTimeout(function(){ $toggleMsg.slideUp(); },3000);
        }
    });
</script> -->