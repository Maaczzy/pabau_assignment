jQuery("#forminator-module-59").on("submit", function(){
    var redirect_link = "https://www.pabau.com"
    jQuery.ajax({
        method:"POST",
        url: "https://recruitment.pabau.me/OAuth2/leads/lead-curl.php",
        data:{
            "api_key": "MTAwNjc06c939651250603f2137b69c2e172c47",
            "redirect_link": redirect_link,
            "Fname":jQuery("#forminator-field-first-name-1").val(),
            "Lname":jQuery("#forminator-field-last-name-1").val(),
        },
        success : function( response ) {
            window.location.replace(redirect_link);
        },
    });
});