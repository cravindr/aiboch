<script>
   /* $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });*/

   function htmlbodyHeightUpdate(){
       var height3 = $( window ).height()
       var height1 = $('.nav').height()+50
       height2 = $('.main').height()
       if(height2 > height3){
           $('html').height(Math.max(height1,height3,height2)+10);
           $('body').height(Math.max(height1,height3,height2)+10);
       }
       else
       {
           $('html').height(Math.max(height1,height3,height2));
           $('body').height(Math.max(height1,height3,height2));
       }

   }
   $(document).ready(function () {
       htmlbodyHeightUpdate()
       $( window ).resize(function() {
           htmlbodyHeightUpdate()
       });
       $( window ).scroll(function() {
           height2 = $('.main').height()
           htmlbodyHeightUpdate()
       });
   });

</script>