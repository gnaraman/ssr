<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){


    $('.header_mobile, #footer').addClass('is_main');
    $('#wrap').addClass('sub_index');

    if(890>$(window).width()){
      if($('#wrap').hasClass('sub_index')){
        $('.sub_gnb, .works').addClass('active');
      };
    };

  });

</script>
    <!-- container -->
    <div id="container">
      <!-- sub_gnb -->
        <?php include_once __DIR__."/../gnb_work.php"; ?>
      <!-- //sub_gnb -->

      <!-- content -->
      <div id="content">

      </div>
      <!-- //content -->
    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
