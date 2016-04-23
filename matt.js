$(function() {
    // Call Fancybox --------------------------------
    $(".main-gallery-item").fancybox();

});

$( window ).load(function() {
    // Generate Gallery -----------------------------
    // generateGallery(24);
    generateGalleryBG(24);
    generateGalleryCoverups(24);
    generateGalleryColor(24);
});

//Initialize Gallery -- LIVE VERSION OF THE CODE [ LIVE ]
function generateGallery(images){

    //Dir where these will be kept
    var dir = "/matt";
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

function generateGalleryBG(images){

    //Dir where these will be kept
    var dir = "/matt/bg";
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
                $('.main-gallery-2').append("<a class='main-gallery-item' style='background:url("+ fileLocation + ") 50% 50% no-repeat;background-size:cover;' href="+ fileLocation +"></a>");
            });
        }
    });
}//Generate Gallery

function generateGalleryCoverups(images){

    //Dir where these will be kept
    var dir = "/matt/coverups";
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
                $('.main-gallery-3').append("<a class='main-gallery-item' style='background:url("+ fileLocation + ") 50% 50% no-repeat;background-size:cover;' href="+ fileLocation +"></a>");
            });
        }
    });
}//Generate Gallery

function generateGalleryColor(images){

    //Dir where these will be kept
    var dir = "/matt/tattoocolor";
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
                $('.main-gallery-4').append("<a class='main-gallery-item' style='background:url("+ fileLocation + ") 50% 50% no-repeat;background-size:cover;' href="+ fileLocation +"></a>");
            });
        }
    });
}//Generate Gallery
