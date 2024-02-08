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

    /* 230530*/
    $('.btn_close').on('click', function(){
        $('.popup_wrap').hide();
    });

    function Mobile(){
	return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);}

    if (Mobile()){// 모바일일 경우

    } else {// 모바일 외
        $('.popup_wrap').hide();
    }

    var currentDate = new Date();
    var endDate = new Date(2023,7-1,20);
    if(currentDate.getTime() > endDate.getTime()){
        $('.popup_wrap').hide();
    }


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

        <div class="popup_wrap">
            <div class="popup_content">
                <img src="../../include/images/temp/popup.gif" alt="15분 특급 크루즈, 현지인 가이드 동행, start now">
                <button type="button" class="btn_close">
                    <span class="blind">닫기</span>
                </button>
                <a href="http://www.bigkingtravel.xyz/" class="btn_start" target="_blank">
                    <span class="blind">start now</span>
                </a>
            </div>
        </div>
      </div>
      <!-- //content -->
    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
