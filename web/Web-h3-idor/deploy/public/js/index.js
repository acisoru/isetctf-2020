$("#tabs").on("click", "a", function(){
  var me = $(this);

  $(".active").removeClass("active");
  me.addClass("active");
  $("#" + me.attr("id").replace("tab", "container")).addClass("active");
  return false;
});