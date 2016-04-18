$( window ).load(function() {
  $(".main-gallery-item").fancybox();
  console.log('FUCK');
  generateGallery();
});

// //Initialize Gallery -- LIVE VERSION OF THE CODE [ LIVE ]
function generateGallery(images){

    //Dir where these will be kept
    var dir = "/kate";
    //Define Type of file
    var fileType = ".jpg";
    //Ajax request for images - Makes ure .htaccess exist with "Options +Indexes"
    $.ajax({
        url: dir,
        success: function (data) {
            //List all png file names in the gallery
            $(data).find("a:contains(" + fileType + ")").each(function () {
                var filename = this.href.replace(window.location.host, "").replace("http:///", "").replace("test","");
                //Make it easier by combining the variables
                var fileLocation = dir+filename;
                $('.main-gallery').append("<a class='main-gallery-item' style='background:url("+ fileLocation + ") 50% 50% no-repeat;background-size:cover;' href="+ fileLocation +"></a>");
            });
        }
    });
}//Generate Gallery
