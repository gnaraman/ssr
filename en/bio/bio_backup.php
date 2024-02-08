<?php include_once __DIR__."/../header.php"; ?>
<style>

@media screen and (max-width: 890px){
  #header h1 {
    position: fixed;
    padding-top: 25px;
    top:0;
    transition:all .2s ease-out;
  }
  #header {
    padding: 54px 10px 30px 15px;
  }
  .gnb {
     margin-top: 51px;
  }
}
</style>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){

    $('.header_mobile').addClass('is_main');
    $('#wrap').addClass('sub_index');
    $('#footer, .gnb li .slide-left').hide();

    $('.sub_gnb a').on('click',function(){
      var pageNum=$(this).attr('href')
      var dir='../works/'
      $(this).attr('href', dir+pageNum);
    });

    var prev = 0;
    var view = $(window);
    var mast = $(' #header h1');

    view.on('scroll', function(){
      var scrollTop = view.scrollTop();
      if($('.gnb .works').hasClass('active')==false){

        if(scrollTop > prev){
            mast.addClass('hidden');
        }else{
          mast.removeClass('hidden');
        }
      };
    });
  });

</script>
    <!-- container -->
    <div id="container">
      <!-- sub_gnb -->
        <?php include_once __DIR__."/../gnb_work.php"; ?>
      <!-- //sub_gnb -->

      <!-- content -->
      <div id="content" class=" cv_c">
        <div class="text cv">
          <h2>BIO</h2>

          <p class="txt_cv">
              Sungsil Ryu's work focuses on the mechanics of materialistic desire in modern-day Korea,
              which is influenced by the complex intertwining of traditional Korean Confucian values
              and the US-led neoliberal global order. She employs a unique style of black comedy and
              uses a variety of mediums, such as video, installation, and performance, to reinterpret
              cultural phenomena.
          </p>




        </div>
      </div>
      <!-- //content -->
    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
