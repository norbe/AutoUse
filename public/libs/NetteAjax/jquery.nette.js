/**
 * AJAX Nette Framwork plugin for jQuery
 *
 * @copyright   Copyright (c) 2009 Jan Marek
 * @license     MIT
 * @link        http://nettephp.com/cs/extras/jquery-ajax
 * @version     0.2
 */

$('a:has(.icon-del)').live("click", function(event){
	return confirm(jsTranslate("Do you really want delete this item?"));
});

$("a.ajax").live("click", function (event) {
    $.get(this.href);
});

jQuery.extend({
	nette: {
		updateSnippet: function (id, html) {
			$("#" + id).html(html);
		},

		success: function (payload) {
			// redirect
			if (payload.redirect) {
				window.location.href = payload.redirect;
				return;
			}
			// snippets
			if (payload.snippets) {
				for (var i in payload.snippets) {
					jQuery.nette.updateSnippet(i, payload.snippets[i]);
				}
			}
		}
	}
});

jQuery.ajaxSetup({
	success: jQuery.nette.success, 
	dataType: "json"
});

/**
 * AJAX form plugin for jQuery
 *
 * @copyright  Copyright (c) 2009 Jan Marek
 * @license    MIT
 * @link       http://nettephp.com/cs/extras/ajax-form
 * @version    0.1
 */

jQuery.fn.extend({
        ajaxSubmit: function (e, callback) {
                var form;
                var sendValues = {};
				
                // submit button
                if (this.is(":submit")) {
                        form = this.parents("form");
                        sendValues[this.attr("name")] = this.val() || "";

                // form
                } else if (this.is("form")) {
                        form = this;

                // invalid element, do nothing
                } else {
                        return null;
                }

                e.preventDefault();

                if(form.data("ajaxSubmitCalled")==true) return null;

                form.data("ajaxSubmitCalled",true);

                // Tím, že zaregistruji ajaxové odeslání až teď, tak se provede jako poslední. (až po všem)
                form.one("submit",function(){
                    // get values
                    var values = form.serializeArray();

                    for (var i = 0; i < values.length; i++) {
                            var name = values[i].name;

                            // multi
                            if (name in sendValues) {
                                    var val = sendValues[name];

                                    if (!(val instanceof Array)) {
                                            val = [val];
                                    }

                                    val.push(values[i].value);
                                    sendValues[name] = val;
                            } else {
                                    sendValues[name] = values[i].value;
                            }
                    }

                    // send ajax request
                    var ajaxOptions = {
                            url: form.attr("action"),
                            data: sendValues,
                            type: form.attr("method") || "get"
                    };

					ajaxOptions.complete = function(){
						form.data("ajaxSubmitCalled",false);
					}

					if (callback) {
								ajaxOptions.success = callback;
					}
                    return jQuery.ajax(ajaxOptions);
                })

                e.stopImmediatePropagation();
                form.submit();
        }
});

