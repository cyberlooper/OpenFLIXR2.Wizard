jQuery.validator.addMethod("checkurl", function(value, element) {
// now check if valid url
return /^()[A-Za-z0-9_-]+\.+[A-Za-z0-9.\/%&=\?_:;-]+$/.test(value);
}, "Please enter a valid domain name"
);

// connect it to a css class
 jQuery.validator.addClassRules({
checkurl : { checkurl : true }
});

jQuery.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
});

$.validator.messages.pwcheck = "Only alphanumeric please";

jQuery.validator.addMethod('validIP', function(value) {
    var split = value.split('.');
    if (split.length != 4)
        return false;

    for (var i=0; i<split.length; i++) {
        var s = split[i];
        if (s.length==0 || isNaN(s) || s<0 || s>255)
            return false;
    }
    return true;
}, ' Invalid IP Address');

  jQuery.validator.addMethod('validSM', function(value) {
      var split = value.split('.');
      if (split.length != 4)
          return false;

      for (var i=0; i<split.length; i++) {
          var s = split[i];
          if (s.length==0 || isNaN(s) || s<0 || s>255)
              return false;
      }
      return true;
  }, ' Invalid Subnet Mask');

    jQuery.validator.addMethod('validGW', function(value) {
        var split = value.split('.');
        if (split.length != 4)
            return false;

        for (var i=0; i<split.length; i++) {
            var s = split[i];
            if (s.length==0 || isNaN(s) || s<0 || s>255)
                return false;
        }
        return true;
    }, ' Invalid Gateway');

      jQuery.validator.addMethod('validNS', function(value) {
          var split = value.split('.');
          if (split.length != 4)
              return false;

          for (var i=0; i<split.length; i++) {
              var s = split[i];
              if (s.length==0 || isNaN(s) || s<0 || s>255)
                  return false;
          }
          return true;
      }, ' Invalid DNS Server');

      $(document).ready(function() {

    $('#registration-form').validate({
        rules: {
            name: {
                required: true,
                required: true
            },

            username: {
                minlength: 6,
                required: true
            },

            password: {
                required: true,
                minlength: 8,
                pwcheck: true
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },

            domainname: {
                required: true,
                checkurl: true
            },
            ip: {
                required: true,
                validIP: true
            },
            subnet: {
                required: true,
                validSM: true
            },
            gateway: {
                required: true,
                validGW: true
            },
            dns: {
                required: true,
                validNS: true
            },
            setup: {
                required: true
            },
            username: {
                required: true
            },

            email: {
                required: true,
                email: true
            },

            address: {
                minlength: 10,
                required: true
            },

            usenetport: {
                digits: true
            },

            usenetthreads: {
                digits: true
            },

            agree: "required"

        },
        highlight: function(element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element
                .text('OK').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }

    });

}); // end document.ready
