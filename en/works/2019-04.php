<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-03.php');
  });

</script>
    <!-- container -->
    <div id="container">

      <!-- sub_gnb -->
        <?php include_once __DIR__."/../gnb_work.php"; ?>
      <!-- //sub_gnb -->

      <!-- content -->
      <div id="content">
          <div class="text">
            <h2>
                &lt;I’m Not Dead, Too!&gt; 20X20X40cm, amp speaker, mixed media, 2019
            </h2>

            <img src="../../include/images/2019_05_01.jpg" alt="Sungsil Ryu, I’m Not Dead, Too! image1" class="vertical">
            <img src="../../include/images/2019_05_02.jpg" alt="Sungsil Ryu, I’m Not Dead, Too! image2" class="vertical">


          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
