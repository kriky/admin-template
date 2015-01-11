<!-- PAGE RELATED PLUGIN(S) -->
<script src="js/plugin/jquery-form/jquery-form.min.js"></script>
<script src="js/plugin/maxlength/bootstrap-maxlength.min.js"></script>
<script src="js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="js/plugin/clockpicker/clockpicker.min.js"></script>
<script src="js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>
<script src="js/plugin/noUiSlider/jquery.nouislider.min.js"></script>
<script src="js/plugin/ion-slider/ion.rangeSlider.min.js"></script>
<script src="js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>		
<script src="js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="js/plugin/knob/jquery.knob.min.js"></script>
<script src="js/plugin/x-editable/moment.min.js"></script>
<script src="js/plugin/x-editable/jquery.mockjax.min.js"></script>
<script src="js/plugin/x-editable/x-editable.min.js"></script>
<script src="js/plugin/typeahead/typeahead.min.js"></script>
<script src="js/plugin/typeahead/typeaheadjs.min.js"></script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function () {

        pageSetUp();

        var $checkoutForm = $('#checkout-form').validate({
            // Rules for form validation
            rules: {
                date : {
                    required: true
                },
                start: {
                    required: true
                },
                end: {
                    required: true,
              
                },
                user_id: {
                    required: true
                },
                desc: {
                    required: true
                }
             
            },
            // Messages for form validation
            messages: {
                date: {
                    required: 'Please Select Date'
                },
              
                start: {
                    required: 'Please select Start time',
                  
                },
                end: {
                   required: 'Please select End time',
                },
                desc: {
                    required: 'Please enter name on your description'
                },
                user_id: {
                    required: 'Please select User'
                },
                code: {
                    required: 'Please enter code',
                    digits: 'Digits only please'
                },
                address: {
                    required: 'Please enter your full address'
                },
                name: {
                    required: 'Please enter name on your card'
                },
                card: {
                    required: 'Please enter your card number'
                },
                cvv: {
                    required: 'Enter CVV2',
                    digits: 'Digits only'
                },
                month: {
                    required: 'Select month'
                },
                year: {
                    required: 'Enter year',
                    digits: 'Digits only please'
                }
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $registerForm = $("#smart-form-register").validate({
            // Rules for form validation
            rules: {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                },
                passwordConfirm: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    equalTo: '#password'
                },
                firstname: {
                    required: true
                },
                lastname: {
                    required: true
                },
                gender: {
                    required: true
                },
                terms: {
                    required: true
                }
            },
            // Messages for form validation
            messages: {
                login: {
                    required: 'Please enter your login'
                },
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                password: {
                    required: 'Please enter your password'
                },
                passwordConfirm: {
                    required: 'Please enter your password one more time',
                    equalTo: 'Please enter the same password as above'
                },
                firstname: {
                    required: 'Please select your first name'
                },
                lastname: {
                    required: 'Please select your last name'
                },
                gender: {
                    required: 'Please select your gender'
                },
                terms: {
                    required: 'You must agree with Terms and Conditions'
                }
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $reviewForm = $("#review-form").validate({
            // Rules for form validation
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                review: {
                    required: true,
                    minlength: 20
                },
                quality: {
                    required: true
                },
                reliability: {
                    required: true
                },
                overall: {
                    required: true
                }
            },
            // Messages for form validation
            messages: {
                name: {
                    required: 'Please enter your name'
                },
                email: {
                    required: 'Please enter your email address',
                    email: '<i class="fa fa-warning"></i><strong>Please enter a VALID email addres</strong>'
                },
                review: {
                    required: 'Please enter your review'
                },
                quality: {
                    required: 'Please rate quality of the product'
                },
                reliability: {
                    required: 'Please rate reliability of the product'
                },
                overall: {
                    required: 'Please rate the product'
                }
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $commentForm = $("#comment-form").validate({
            // Rules for form validation
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                url: {
                    url: true
                },
                comment: {
                    required: true
                }
            },
            // Messages for form validation
            messages: {
                name: {
                    required: 'Enter your name',
                },
                email: {
                    required: 'Enter your email address',
                    email: 'Enter a VALID email'
                },
                url: {
                    email: 'Enter a VALID url'
                },
                comment: {
                    required: 'Please enter your comment'
                }
            },
            // Ajax form submition
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function () {
                        $("#comment-form").addClass('submited');
                    }
                });
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $contactForm = $("#contact-form").validate({
            // Rules for form validation
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            // Messages for form validation
            messages: {
                name: {
                    required: 'Please enter your name',
                },
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                message: {
                    required: 'Please enter your message'
                }
            },
            // Ajax form submition
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function () {
                        $("#contact-form").addClass('submited');
                    }
                });
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $loginForm = $("#login-form").validate({
            // Rules for form validation
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                }
            },
            // Messages for form validation
            messages: {
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                password: {
                    required: 'Please enter your password'
                }
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $orderForm = $("#order-form").validate({
            // Rules for form validation
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                interested: {
                    required: true
                },
                budget: {
                    required: true
                }
            },
            // Messages for form validation
            messages: {
                name: {
                    required: 'Please enter your name'
                },
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                phone: {
                    required: 'Please enter your phone number'
                },
                interested: {
                    required: 'Please select interested service'
                },
                budget: {
                    required: 'Please select your budget'
                }
            },
            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

        // START AND FINISH DATE
        $('#startdate').datepicker({
            dateFormat: 'dd.mm.yy',
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onSelect: function (selectedDate) {
                $('#finishdate').datepicker('option', 'minDate', selectedDate);
            }
        });

        $('#finishdate').datepicker({
            dateFormat: 'dd.mm.yy',
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onSelect: function (selectedDate) {
                $('#startdate').datepicker('option', 'maxDate', selectedDate);
            }
        });



    })

</script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function () {

        pageSetUp();

        // PAGE RELATED SCRIPTS

        // Spinners
        $("#spinner").spinner();
        $("#spinner-decimal").spinner({
            step: 0.01,
            numberFormat: "n"
        });

        $("#spinner-currency").spinner({
            min: 5,
            max: 2500,
            step: 25,
            start: 1000,
            numberFormat: "C"
        });

        //Maxlength

        $('input[maxlength]').maxlength({
            warningClass: "label label-success",
            limitReachedClass: "label label-important",
        });


        // START AND FINISH DATE
        $('#startdate').datepicker({
            dateFormat: 'dd.mm.yy',
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onSelect: function (selectedDate) {
                $('#finishdate').datepicker('option', 'minDate', selectedDate);
            }
        });
        $('#finishdate').datepicker({
            dateFormat: 'dd.mm.yy',
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onSelect: function (selectedDate) {
                $('#startdate').datepicker('option', 'maxDate', selectedDate);
            }
        });

        // Date Range Picker
        $("#from").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            dateFormat: "dd-mm-yy",
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onClose: function (selectedDate) {
                $("#to").datepicker("option", "maxDate", selectedDate);
            }

        });
        $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            dateFormat: "dd-mm-yy",
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onClose: function (selectedDate) {
                $("#from").datepicker("option", "minDate", selectedDate);
            }
        });

        /*
         * TIMEPICKER
         */

        $('#timepicker').timepicker();

        /*
         * CLOCKPICKER
         */

        $('#clockpicker1').clockpicker({
            placement: 'bottom',
            donetext: 'Done'
        });

        $('#clockpicker2').clockpicker({
            placement: 'bottom',
            donetext: 'Done'
        });

        /*
         * JS SLIDER
         */

        $("#nouislider-1").noUiSlider({
            range: [2, 100],
            start: 55,
            handles: 1,
            connect: true,
        });

        $("#nouislider-2").noUiSlider({
            range: [0, 300],
            start: [55, 130],
            step: 60,
            handles: 2,
            connect: true
        });

        $("#nouislider-3").noUiSlider({
            range: [0, 1000],
            start: [264, 776],
            step: 1,
            connect: true,
            slide: function () {
                var values = $(this).val();
                $(".nouislider-value").text(values[0] + " - " + values[1]);
            }
        });

        $("#nouislider-4").noUiSlider({
            range: [0, 100],
            start: 50,
            handles: 1
        }).attr("disabled", "disabled");



        /*
         * ION SLIDER
         */

        $("#range-slider-1").ionRangeSlider({
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            prettify: false,
            hasGrid: true
        });

        $("#range-slider-2").ionRangeSlider();

        $("#range-slider-3").ionRangeSlider({
            min: 0,
            from: 2.3,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " mm",
            prettify: false,
            hasGrid: true
        });

        $("#range-slider-4").ionRangeSlider({
            min: -50,
            max: 50,
            from: 5,
            to: 25,
            type: 'double',
            step: 1,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#range-slider-5").ionRangeSlider({
            min: 0,
            from: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " mm",
            prettify: false,
            hasGrid: true
        });


        /*
         * BOOTSTRAP DUALLIST BOX
         */

        var initializeDuallistbox = $('#initializeDuallistbox').bootstrapDualListbox({
            nonSelectedListLabel: 'Non-selected',
            selectedListLabel: 'Selected',
            preserveSelectionOnMove: 'moved',
            moveOnSelect: false,
            nonSelectedFilter: 'ion ([7-9]|[1][0-2])'
        });


        /*
         * COLOR PICKER
         */

        $('#colorpicker-1').colorpicker()
        $('#colorpicker-2').colorpicker()



        /*
         * KNOB
         */

        $('.knob').knob({
            change: function (value) {
                //console.log("change : " + value);
            },
            release: function (value) {
                //console.log(this.$.attr('value'));
                //console.log("release : " + value);
            },
            cancel: function () {
                //console.log("cancel : ", this);
            }
        });


        /*
         * X-Ediable
         */


        (function (e) {
            "use strict";
            var t = function (e) {
                this.init("address", e, t.defaults)
            };
            e.fn.editableutils.inherit(t, e.fn.editabletypes.abstractinput);
            e.extend(t.prototype, {
                render: function () {
                    this.$input = this.$tpl.find("input")
                },
                value2html: function (t, n) {
                    if (!t) {
                        e(n).empty();
                        return
                    }
                    var r = e("<div>").text(t.city).html() + ", " + e("<div>").text(t.street).html() +
                            " st., bld. " + e("<div>").text(t.building).html();
                    e(n).html(r)
                },
                html2value: function (e) {
                    return null
                },
                value2str: function (e) {
                    var t = "";
                    if (e)
                        for (var n in e)
                            t = t + n + ":" + e[n] + ";";
                    return t
                },
                str2value: function (e) {
                    return e
                },
                value2input: function (e) {
                    if (!e)
                        return;
                    this.$input.filter('[name="city"]').val(e.city);
                    this.$input.filter('[name="street"]').val(e.street);
                    this.$input.filter('[name="building"]').val(e.building)
                },
                input2value: function () {
                    return {
                        city: this.$input.filter('[name="city"]').val(),
                        street: this.$input.filter('[name="street"]').val(),
                        building: this.$input.filter('[name="building"]').val()
                    }
                },
                activate: function () {
                    this.$input.filter('[name="city"]').focus()
                },
                autosubmit: function () {
                    this.$input.keydown(function (t) {
                        t.which === 13 && e(this).closest("form").submit()
                    })
                }
            });
            t.defaults = e.extend({}, e.fn.editabletypes.abstractinput.defaults, {
                tpl: '<div class="editable-address"><label><span>City: </span><input type="text" name="city" class="input-small"></label></div><div class="editable-address"><label><span>Street: </span><input type="text" name="street" class="input-small"></label></div><div class="editable-address"><label><span>Building: </span><input type="text" name="building" class="input-mini"></label></div>',
                inputclass: ""
            });
            e.fn.editabletypes.address = t
        })(window.jQuery);

        //ajax mocks
        $.mockjaxSettings.responseTime = 500;

        $.mockjax({
            url: '/post',
            response: function (settings) {
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/error',
            status: 400,
            statusText: 'Bad Request',
            response: function (settings) {
                this.responseText = 'Please input correct value';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/status',
            status: 500,
            response: function (settings) {
                this.responseText = 'Internal Server Error';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/groups',
            response: function (settings) {
                this.responseText = [{
                        value: 0,
                        text: 'Guest'
                    }, {
                        value: 1,
                        text: 'Service'
                    }, {
                        value: 2,
                        text: 'Customer'
                    }, {
                        value: 3,
                        text: 'Operator'
                    }, {
                        value: 4,
                        text: 'Support'
                    }, {
                        value: 5,
                        text: 'Admin'
                    }];
                log(settings, this);
            }
        });

        //TODO: add this div to page
        function log(settings, response) {
            var s = [],
                    str;
            s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
            for (var a in settings.data) {
                if (settings.data[a] && typeof settings.data[a] === 'object') {
                    str = [];
                    for (var j in settings.data[a]) {
                        str.push(j + ': "' + settings.data[a][j] + '"');
                    }
                    str = '{ ' + str.join(', ') + ' }';
                } else {
                    str = '"' + settings.data[a] + '"';
                }
                s.push(a + ' = ' + str);
            }
            s.push('RESPONSE: status = ' + response.status);

            if (response.responseText) {
                if ($.isArray(response.responseText)) {
                    s.push('[');
                    $.each(response.responseText, function (i, v) {
                        s.push('{value: ' + v.value + ', text: "' + v.text + '"}');
                    });
                    s.push(']');
                } else {
                    s.push($.trim(response.responseText));
                }
            }
            s.push('--------------------------------------\n');
            $('#console').val(s.join('\n') + $('#console').val());
        }

        /*
         * X-EDITABLES
         */

        $('#inline').on('change', function (e) {
            if ($(this).prop('checked')) {
                window.location.href = '?mode=inline#ajax/plugins.html';
            } else {
                window.location.href = '?#ajax/plugins.html';
            }
        });

        if (window.location.href.indexOf("?mode=inline") > -1) {
            $('#inline').prop('checked', true);
            $.fn.editable.defaults.mode = 'inline';
        } else {
            $('#inline').prop('checked', false);
            $.fn.editable.defaults.mode = 'popup';
        }

        //defaults
        $.fn.editable.defaults.url = '/post';
        //$.fn.editable.defaults.mode = 'inline'; use this to edit inline

        //enable / disable
        $('#enable').click(function () {
            $('#user .editable').editable('toggleDisabled');
        });

        //editables
        $('#username').editable({
            url: '/post',
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username'
        });

        $('#firstname').editable({
            validate: function (value) {
                if ($.trim(value) == '')
                    return 'This field is required';
            }
        });

        $('#sex').editable({
            prepend: "not selected",
            source: [{
                    value: 1,
                    text: 'Male'
                }, {
                    value: 2,
                    text: 'Female'
                }],
            display: function (value, sourceData) {
                var colors = {
                    "": "gray",
                    1: "green",
                    2: "blue"
                }, elem = $.grep(sourceData, function (o) {
                    return o.value == value;
                });

                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#status').editable();

        $('#group').editable({
            showbuttons: false
        });

        $('#vacation').editable({
            datepicker: {
                todayBtn: 'linked'
            }
        });

        $('#dob').editable();

        $('#event').editable({
            placement: 'right',
            combodate: {
                firstItem: 'name'
            }
        });

        $('#meeting_start').editable({
            format: 'yyyy-mm-dd hh:ii',
            viewformat: 'dd/mm/yyyy hh:ii',
            validate: function (v) {
                if (v && v.getDate() == 10)
                    return 'Day cant be 10!';
            },
            datetimepicker: {
                todayBtn: 'linked',
                weekStart: 1
            }
        });

        $('#comments').editable({
            showbuttons: 'bottom'
        });

        $('#note').editable();
        $('#pencil').click(function (e) {
            e.stopPropagation();
            e.preventDefault();
            $('#note').editable('toggle');
        });

        $('#state').editable({
            source: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut",
                "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
                "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
                "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
                "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon",
                "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas",
                "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
            ]
        });

        $('#state2').editable({
            value: 'California',
            typeahead: {
                name: 'state',
                local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut",
                    "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
                    "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan",
                    "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
                    "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio",
                    "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota",
                    "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia",
                    "Wisconsin", "Wyoming"
                ]
            }
        });

        $('#fruits').editable({
            pk: 1,
            limit: 3,
            source: [{
                    value: 1,
                    text: 'banana'
                }, {
                    value: 2,
                    text: 'peach'
                }, {
                    value: 3,
                    text: 'apple'
                }, {
                    value: 4,
                    text: 'watermelon'
                }, {
                    value: 5,
                    text: 'orange'
                }]
        });

        $('#tags').editable({
            inputclass: 'input-large',
            select2: {
                tags: ['html', 'javascript', 'css', 'ajax'],
                tokenSeparators: [",", " "]
            }
        });

        var countries = [];
        $.each({
            "BD": "Bangladesh",
            "BE": "Belgium",
            "BF": "Burkina Faso",
            "BG": "Bulgaria",
            "BA": "Bosnia and Herzegovina",
            "BB": "Barbados",
            "WF": "Wallis and Futuna",
            "BL": "Saint Bartelemey",
            "BM": "Bermuda",
            "BN": "Brunei Darussalam",
            "BO": "Bolivia",
            "BH": "Bahrain",
            "BI": "Burundi",
            "BJ": "Benin",
            "BT": "Bhutan",
            "JM": "Jamaica",
            "BV": "Bouvet Island",
            "BW": "Botswana",
            "WS": "Samoa",
            "BR": "Brazil",
            "BS": "Bahamas",
            "JE": "Jersey",
            "BY": "Belarus",
            "O1": "Other Country",
            "LV": "Latvia",
            "RW": "Rwanda",
            "RS": "Serbia",
            "TL": "Timor-Leste",
            "RE": "Reunion",
            "LU": "Luxembourg",
            "TJ": "Tajikistan",
            "RO": "Romania",
            "PG": "Papua New Guinea",
            "GW": "Guinea-Bissau",
            "GU": "Guam",
            "GT": "Guatemala",
            "GS": "South Georgia and the South Sandwich Islands",
            "GR": "Greece",
            "GQ": "Equatorial Guinea",
            "GP": "Guadeloupe",
            "JP": "Japan",
            "GY": "Guyana",
            "GG": "Guernsey",
            "GF": "French Guiana",
            "GE": "Georgia",
            "GD": "Grenada",
            "GB": "United Kingdom",
            "GA": "Gabon",
            "SV": "El Salvador",
            "GN": "Guinea",
            "GM": "Gambia",
            "GL": "Greenland",
            "GI": "Gibraltar",
            "GH": "Ghana",
            "OM": "Oman",
            "TN": "Tunisia",
            "JO": "Jordan",
            "HR": "Croatia",
            "HT": "Haiti",
            "HU": "Hungary",
            "HK": "Hong Kong",
            "HN": "Honduras",
            "HM": "Heard Island and McDonald Islands",
            "VE": "Venezuela",
            "PR": "Puerto Rico",
            "PS": "Palestinian Territory",
            "PW": "Palau",
            "PT": "Portugal",
            "SJ": "Svalbard and Jan Mayen",
            "PY": "Paraguay",
            "IQ": "Iraq",
            "PA": "Panama",
            "PF": "French Polynesia",
            "BZ": "Belize",
            "PE": "Peru",
            "PK": "Pakistan",
            "PH": "Philippines",
            "PN": "Pitcairn",
            "TM": "Turkmenistan",
            "PL": "Poland",
            "PM": "Saint Pierre and Miquelon",
            "ZM": "Zambia",
            "EH": "Western Sahara",
            "RU": "Russian Federation",
            "EE": "Estonia",
            "EG": "Egypt",
            "TK": "Tokelau",
            "ZA": "South Africa",
            "EC": "Ecuador",
            "IT": "Italy",
            "VN": "Vietnam",
            "SB": "Solomon Islands",
            "EU": "Europe",
            "ET": "Ethiopia",
            "SO": "Somalia",
            "ZW": "Zimbabwe",
            "SA": "Saudi Arabia",
            "ES": "Spain",
            "ER": "Eritrea",
            "ME": "Montenegro",
            "MD": "Moldova, Republic of",
            "MG": "Madagascar",
            "MF": "Saint Martin",
            "MA": "Morocco",
            "MC": "Monaco",
            "UZ": "Uzbekistan",
            "MM": "Myanmar",
            "ML": "Mali",
            "MO": "Macao",
            "MN": "Mongolia",
            "MH": "Marshall Islands",
            "MK": "Macedonia",
            "MU": "Mauritius",
            "MT": "Malta",
            "MW": "Malawi",
            "MV": "Maldives",
            "MQ": "Martinique",
            "MP": "Northern Mariana Islands",
            "MS": "Montserrat",
            "MR": "Mauritania",
            "IM": "Isle of Man",
            "UG": "Uganda",
            "TZ": "Tanzania, United Republic of",
            "MY": "Malaysia",
            "MX": "Mexico",
            "IL": "Israel",
            "FR": "France",
            "IO": "British Indian Ocean Territory",
            "FX": "France, Metropolitan",
            "SH": "Saint Helena",
            "FI": "Finland",
            "FJ": "Fiji",
            "FK": "Falkland Islands (Malvinas)",
            "FM": "Micronesia, Federated States of",
            "FO": "Faroe Islands",
            "NI": "Nicaragua",
            "NL": "Netherlands",
            "NO": "Norway",
            "NA": "Namibia",
            "VU": "Vanuatu",
            "NC": "New Caledonia",
            "NE": "Niger",
            "NF": "Norfolk Island",
            "NG": "Nigeria",
            "NZ": "New Zealand",
            "NP": "Nepal",
            "NR": "Nauru",
            "NU": "Niue",
            "CK": "Cook Islands",
            "CI": "Cote d'Ivoire",
            "CH": "Switzerland",
            "CO": "Colombia",
            "CN": "China",
            "CM": "Cameroon",
            "CL": "Chile",
            "CC": "Cocos (Keeling) Islands",
            "CA": "Canada",
            "CG": "Congo",
            "CF": "Central African Republic",
            "CD": "Congo, The Democratic Republic of the",
            "CZ": "Czech Republic",
            "CY": "Cyprus",
            "CX": "Christmas Island",
            "CR": "Costa Rica",
            "CV": "Cape Verde",
            "CU": "Cuba",
            "SZ": "Swaziland",
            "SY": "Syrian Arab Republic",
            "KG": "Kyrgyzstan",
            "KE": "Kenya",
            "SR": "Suriname",
            "KI": "Kiribati",
            "KH": "Cambodia",
            "KN": "Saint Kitts and Nevis",
            "KM": "Comoros",
            "ST": "Sao Tome and Principe",
            "SK": "Slovakia",
            "KR": "Korea, Republic of",
            "SI": "Slovenia",
            "KP": "Korea, Democratic People's Republic of",
            "KW": "Kuwait",
            "SN": "Senegal",
            "SM": "San Marino",
            "SL": "Sierra Leone",
            "SC": "Seychelles",
            "KZ": "Kazakhstan",
            "KY": "Cayman Islands",
            "SG": "Singapore",
            "SE": "Sweden",
            "SD": "Sudan",
            "DO": "Dominican Republic",
            "DM": "Dominica",
            "DJ": "Djibouti",
            "DK": "Denmark",
            "VG": "Virgin Islands, British",
            "DE": "Germany",
            "YE": "Yemen",
            "DZ": "Algeria",
            "US": "United States",
            "UY": "Uruguay",
            "YT": "Mayotte",
            "UM": "United States Minor Outlying Islands",
            "LB": "Lebanon",
            "LC": "Saint Lucia",
            "LA": "Lao People's Democratic Republic",
            "TV": "Tuvalu",
            "TW": "Taiwan",
            "TT": "Trinidad and Tobago",
            "TR": "Turkey",
            "LK": "Sri Lanka",
            "LI": "Liechtenstein",
            "A1": "Anonymous Proxy",
            "TO": "Tonga",
            "LT": "Lithuania",
            "A2": "Satellite Provider",
            "LR": "Liberia",
            "LS": "Lesotho",
            "TH": "Thailand",
            "TF": "French Southern Territories",
            "TG": "Togo",
            "TD": "Chad",
            "TC": "Turks and Caicos Islands",
            "LY": "Libyan Arab Jamahiriya",
            "VA": "Holy See (Vatican City State)",
            "VC": "Saint Vincent and the Grenadines",
            "AE": "United Arab Emirates",
            "AD": "Andorra",
            "AG": "Antigua and Barbuda",
            "AF": "Afghanistan",
            "AI": "Anguilla",
            "VI": "Virgin Islands, U.S.",
            "IS": "Iceland",
            "IR": "Iran, Islamic Republic of",
            "AM": "Armenia",
            "AL": "Albania",
            "AO": "Angola",
            "AN": "Netherlands Antilles",
            "AQ": "Antarctica",
            "AP": "Asia/Pacific Region",
            "AS": "American Samoa",
            "AR": "Argentina",
            "AU": "Australia",
            "AT": "Austria",
            "AW": "Aruba",
            "IN": "India",
            "AX": "Aland Islands",
            "AZ": "Azerbaijan",
            "IE": "Ireland",
            "ID": "Indonesia",
            "UA": "Ukraine",
            "QA": "Qatar",
            "MZ": "Mozambique"
        }, function (k, v) {
            countries.push({
                id: k,
                text: v
            });
        });

        $('#country').editable({
            source: countries,
            select2: {
                width: 200
            }
        });

        $('#address').editable({
            url: '/post',
            value: {
                city: "Moscow",
                street: "Lenina",
                building: "12"
            },
            validate: function (value) {
                if (value.city == '')
                    return 'city is required!';
            },
            display: function (value) {
                if (!value) {
                    $(this).empty();
                    return;
                }
                var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street)
                        .html() + ' st., bld. ' + $('<div>').text(value.building).html();
                $(this).html(html);
            }
        });

        $('#user .editable').on('hidden', function (e, reason) {
            if (reason === 'save' || reason === 'nochange') {
                var $next = $(this).closest('tr').next().find('.editable');
                if ($('#autoopen').is(':checked')) {
                    setTimeout(function () {
                        $next.editable('show');
                    }, 300);
                } else {
                    $next.focus();
                }
            }
        });

    })

</script>
