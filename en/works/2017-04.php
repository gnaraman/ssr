<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2017-03.php');

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
                &lt;Mr. Kim’s Revival&gt; 10min 7sec, CRT 4-channel video, 2017
            </h2>

            <img src="../../include/images/2017-02.jpg" alt="Sungsil Ryu, Mr. Kim’s Revival video image1">
            <img src="../../include/images/2017-01.jpg" alt="Sungsil Ryu, Mr. Kim’s Revival video image2">
            <img src="../../include/images/2017-03.jpg" alt="Sungsil Ryu, Mr. Kim’s Revival video image3">
            <img src="../../include/images/2017-04.jpg" alt="Sungsil Ryu, Mr. Kim’s Revival video image4">

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
