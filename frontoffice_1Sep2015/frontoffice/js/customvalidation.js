//Function to show error message in step one
function validation(error) { 
    $("#error_block").css("display","block");
    $('#error').html(error);
    $('html,body').animate({
        scrollTop: 0
    }, 'slow');
    return false;
}

function hideValidationBlock() {
    $("#error_block").css("display","none");
    $('#error').html("");
}

function strip_tags(i) {
    if (i) {
        var input = $("#"+i).val();
        input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
        $("#"+i).val(input);
    }
}

function removeSpecialCharsTagsFromInput(i) {
    if (i) {
        var input = $("#"+i).val();
        input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
        input = input.replace(/[&\+()!#@,$^-_~%.^"=:*?<>{}]/g,'');
        input = input.replace(/[0-9]/g,'');
        $("#"+i).val(input);
        //validation('Please enter characters only.');
        //return false;
    }
}

function removeSpecialCharsTagsFromAddressInput(i) {
    if (i) {
        var input = $("#"+i).val();
        input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
        input = input.replace(/[&\+@,$^_~%^"=:*?<>{}]/g,'');
        //input = input.replace(/[&/\#,+()$~%.":*?<>{}]/g,'');
        $("#"+i).val(input);
        //validation('Please enter vaid address.');
        //return false;
    }
   // hideValidationBlock();
    //return true;
}

function phoneNumnbersWithCodeOnly(i){
    if (i) {
        var input = $("#"+i).val();
        input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
        input = input.replace(/[&\()!#@,$^_~%.^"=':*?<>{}]/g,'');
        input = input.replace(/[a-z]/g,'');
        input = input.replace(/[A-Z]/g,'');
        $("#"+i).val(input);
        //validation('Format should be "+country code - Area Code – Phone No".');
        //return false;
    }
    //hideValidationBlock();
    //return true;
}

function numnbersOnly(i){
    if (i) {
        var input = $("#"+i).val();
        input = input.replace(/(<\?[a-z]*(\s[^>]*)?\?(>|$)|<!\[[a-z]*\[|\]\]>|<!DOCTYPE[^>]*?(>|$)|<!--[\s\S]*?(-->|$)|<[a-z?!\/]([a-z0-9_:.])*(\s[^>]*)?(>|$))/gi, '');
        input = input.replace(/[&\+()!#@,$^-_~%.^"=':*?<>{}]/g,'');
        input = input.replace(/[a-z]/g,'');
        input = input.replace(/[A-Z]/g,'');
        $("#"+i).val(input);
        //validation("Please enter numeric value.");
        //return false;
    }
    //hideValidationBlock();
    //return true;
}

function isValidEmail(i){
    var email = $("#"+i).val();
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
      // Yay! valid
      $("#"+i).val("");
      validation("Please enter valid email");
      return false;
    }
    hideValidationBlock();
    return true;
}
