<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2017-01.php');

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
                &lt;I’m Not Dead!&gt; 230X330X200cm, motor, mixed media, 2017
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://player.vimeo.com/video/252023215" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2017-14.jpg" alt="Sungsil Ryu, I’m Not Dead! image1">
            <img src="../../include/images/2017-15.jpg" alt="Sungsil Ryu, I’m Not Dead! image2">
            <img src="../../include/images/2017-16.jpg" alt="Sungsil Ryu, I’m Not Dead! image3">
            <img src="../../include/images/2017-17.jpg" alt="Sungsil Ryu, I’m Not Dead! image4">

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
