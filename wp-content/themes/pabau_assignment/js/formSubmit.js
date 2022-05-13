jQuery("#forminator-module-59").on("submit", function(){
    var redirect_link = "https://www.pabau.com";
    jQuery.ajax({
        method:"POST",
        url: "https://recruitment.pabau.me/OAuth2/leads/lead-curl.php",
        data:{
            "api_key": "MTAwNjc06c939651250603f2137b69c2e172c47",
            "redirect_link": redirect_link,
            "Fname":jQuery("#forminator-field-first-name-1").val(),
            "Lname":jQuery("#forminator-field-last-name-1").val(),
            "mobile":jQuery("#forminator-field-text-3").val(),
            "email":jQuery("#forminator-field-text-4").val(),
            "lead_source":jQuery("#select-1").val(),
            "dob":jQuery("#forminator-field-date-1-picker-627e965dd8e75").val(),
            "country":jQuery("#forminator-field-text-1").val(),
            "city":jQuery("#forminator-field-text-2").val(),
        },
        success : function( response ) {
            window.location.replace(redirect_link);
        },
    });
});