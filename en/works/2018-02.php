<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2017-04.php');

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
                &lt;BJ Cherry Jang 2018.4&gt; 6min, single channel video, 2018
            </h2>

            <div class="iframeWrapper">
                <iframe src="https://www.youtube.com/embed/73Zz6jA7hco" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2018-04-01.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.4 video image1">
            <img src="../../include/images/2018-04-02.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.4 video image2">
            <img src="../../include/images/2018-04-03.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.4 video image3">
            <img src="../../include/images/2018-04-04.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.4 video image4">

            <img src="../../include/images/2018-04-05.jpg" alt="NEWS, DEAR MR. RIPLEY exhibition display">
            <p class="txt_work bottom">
                《NEWS, DEAR MR. RIPLEY》 exhibition display (Buk-Seoul Museum of Art , 2018)
            </p>

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
