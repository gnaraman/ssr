<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-01.php');
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
                &lt;Goodbye Cherry Jang&gt; 30min, video and OBS based performance, 2019
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://www.youtube.com/embed/ZEcvQOWrPh8" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2019-01.jpg" alt="Goodbye Cherry Jang video image">
            <img src="../../include/images/2019-01-02.jpg" alt="Goodbye Cherry Jang Performance">
            <p class="txt_work bottom">
              &lt;PERFORM 2019&gt;  (Ilmin Museum)
            </p>

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
