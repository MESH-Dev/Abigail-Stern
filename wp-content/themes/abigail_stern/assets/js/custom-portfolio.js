jQuery(document).ready(function($){

    $("#makeMeScrollable").scroll(function() {
        alert('something!');
    });


    $(".swim").click(function(){
      $("#makeMeScrollable").smoothDivScroll("scrollToElement", "id", "swim");
      $("div.swim").addClass("open");
      $("div.lingerie").removeClass("open");
      $("div.outerwear").removeClass("open");
    });

    $(".lingerie").click(function(){
      $("#makeMeScrollable").smoothDivScroll("scrollToElement", "id", "lingerie");
      $("div.lingerie").addClass("open");
      $("div.swim").removeClass("open");
      $("div.outerwear").removeClass("open");
    });

    $(".outerwear").click(function(){
      $("#makeMeScrollable").smoothDivScroll("scrollToElement", "id", "outerwear");
      $("div.outerwear").addClass("open");
      $("div.swim").removeClass("open");
      $("div.lingerie").removeClass("open");
    });

    // Figure out how to add open class to next category

    $("#nextslide").click(function(){
        $curr = $(".open").next();
        $(".open").removeClass("open");

        if ($curr.length) {
            $curr.addClass("open");
        } else {
            $(".category:first").addClass("open");
        }
    });

    $("#prevslide").click(function(){
        $curr = $(".open").prev();
        $(".open").removeClass("open");

        $curr.addClass("open");

        if ($curr.length) {
            $curr.addClass("open");
        } else {
            $(".category:last").addClass("open");
        }
        console.log($curr.length);
    });

});
