/* Author: 

*/// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function(e){e("[placeholder]").focus(function(){var t=e(this);if(t.val()==t.attr("placeholder")){t.val("");t.removeClass("placeholder")}}).blur(function(){var t=e(this);if(t.val()==""||t.val()==t.attr("placeholder")){t.addClass("placeholder");t.val(t.attr("placeholder"))}}).blur().parents("form").submit(function(){e(this).find("[placeholder]").each(function(){var t=e(this);t.val()==t.attr("placeholder")&&t.val("")})})});