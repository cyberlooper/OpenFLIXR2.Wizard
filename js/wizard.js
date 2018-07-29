searchVisible = 0;
transparent = true;

$(document).ready(function() {
    $(window).keydown(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});

$(document).ready(function() {
    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

        onInit: function(tab, navigation, index) {

            //check number of tabs and fill the entire row
            var $total = navigation.find('li').length;
            $width = 100 / $total;

            $display_width = $(document).width();

            if ($display_width < 600 && $total > 3) {
                $width = 50;
            }

            navigation.find('li').css('width', $width + '%');

        },
        onNext: function(tab, navigation, index) {
             if (index == 1) {
                 return validateFirstStep();
             } else if (index == 2) {
                 return validateSecondStep();
             } else if (index == 3) {
                 return validateThirdStep();
             }  else if (index == 4) {
                 return validateFourthStep();
             }  else if (index == 5) {
                 return validateFifthStep();
             }  else if (index == 6) {
                 return validateSixthStep();
             }  else if (index == 7) {
                 return validateSeventhStep();
             }  else if (index == 8) {
                 return validateEighthStep();
             }  else if (index == 9) {
                 return validateNinthStep();
             }
             //etc.

        },
        onTabClick: function(tab, navigation, index) {
            // Disable the posibility to click on tabs
            return true;
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index + 1;

            var wizard = navigation.closest('.wizard-card');

            // If it's the last tab then hide the last button and show the finish instead
            if ($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }
    });

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function() {
        readURL(this);
    });

    $('[data-toggle="wizard-radio"]').click(function() {
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked', 'true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked', 'true');
        }
    });

    $height = $(document).height();
    $('.set-full-height').css('height', $height);


});


function validateFirstStep() {

    $(".wizard-card form").validate({
        rules: {
            setup: {
                required: true
            },
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 5
            }

        },
        messages: {
            setup: "Please select one of the options",
            username: "Please enter a username",
            password: "Please enter a valid password",
            email: "Please enter a valid email address",

        }
    });

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateSecondStep() {

    //code here for second step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        console.log('invalid');
        return false;
    }
    return true;

}

function validateThirdStep() {

    $(".wizard-card form").validate({
        rules: {
            networkconfig: {
                required: true
            }

        },
        messages: {
            setup: "Please select one of the options",
            username: "Please enter a username",
            password: "Please enter a valid password",
            email: "Please enter a valid email address",

        }
    });

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateFourthStep() {

    $(".wizard-card form").validate({
        rules: {
            letsencrypt: {
                required: true
            }

        },
        messages: {
            setup: "Please select one of the options",
            username: "Please enter a username",
            password: "Please enter a valid password",
            email: "Please enter a valid email address",

        }
    });

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateFifthStep() {
    //code here for third step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}
function validateSixthStep() {
    //code here for third step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateSeventhStep() {
    //code here for third step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateEighthStep() {
    //code here for third step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}

function validateNinthStep() {
    //code here for third step
    $(".wizard-card form").validate({});

    if (!$(".wizard-card form").valid()) {
        //form is invalid
        return false;
    }

    return true;
}


//Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
