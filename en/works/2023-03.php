<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2023-02.php');

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
                &lt;Finding My Korean Angel&gt;, 1min, single channel video on public billboards in Denmark, 2023
            </h2>

            <div class="iframeWrapper">
                <iframe src="https://www.youtube.com/embed/JzE0OYVPIFg" title="Finding My Korean Angel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2023_03_01.jpg" alt="Finding My Korean Angel image1">
            <img src="../../include/images/2023_03_02.jpg" alt="Finding My Korean Angel image2">
            <img src="../../include/images/2023_03_03.jpg" alt="Finding My Korean Angel image3">

          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
