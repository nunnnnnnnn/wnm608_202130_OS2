
$(()=>{

   $(".image-thumbs img").on("mouseenter",function(){
      $(".image-main img").attr("src",$(this).attr("src"));
   })

});



const checkSort = (el) => {

   let form = el.closest("form");
   let selected = el.querySelector(":checked");

   let o = selected.dataset.orderby;
   let d = selected.dataset.direction;

   form.o.value = o;
   form.d.value = d;

   form.submit();
}