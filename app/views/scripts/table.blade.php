<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
if (!window.jQuery) {
document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
if (!window.jQuery.ui) {
document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
}
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

<!-- BOOTSTRAP JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="js/smartwidgets/jarvis.widget.min.js"></script>


<!-- SPARKLINES -->
<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="js/plugin/fastclick/fastclick.min.js"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="js/app.min.js"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="js/speech/voicecommand.min.js"></script>

<!-- SmartChat UI : plugin -->
<script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function () {

pageSetUp();

/* // DOM Position key index //
     
l - Length changing (dropdown)
f - Filtering input (search)
t - The Table! (datatable)
i - Information (records)
p - Pagination (paging)
r - pRocessing 
< and > - div elements
<"#id" and > - div with an id
<"class" and > - div with a class
<"#id.class" and > - div with an id and class
     
Also see: http://legacy.datatables.net/usage/features
*/

/* BASIC ;*/
var responsiveHelper_dt_basic = undefined;
var responsiveHelper_datatable_fixed_column = undefined;
var responsiveHelper_datatable_col_reorder = undefined;
var responsiveHelper_datatable_tabletools = undefined;

var breakpointDefinition = {
tablet: 1024,
phone: 480
};

$('#dt_basic').dataTable({
"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
"t" +
"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
"autoWidth": true,
"preDrawCallback": function () {
// Initialize the responsive datatables helper once.
if (!responsiveHelper_dt_basic) {
responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
}
},
"rowCallback": function (nRow) {
responsiveHelper_dt_basic.createExpandIcon(nRow);
},
"drawCallback": function (oSettings) {
responsiveHelper_dt_basic.respond();
}
});

/* END BASIC */

/* COLUMN FILTER  */
var otable = $('#datatable_fixed_column').DataTable({
//"bFilter": false,
//"bInfo": false,
//"bLengthChange": false
//"bAutoWidth": false,
//"bPaginate": false,
//"bStateSave": true // saves sort state using localStorage
"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>" +
"t" +
"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
"autoWidth": true,
"preDrawCallback": function () {
// Initialize the responsive datatables helper once.
if (!responsiveHelper_datatable_fixed_column) {
responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
}
},
"rowCallback": function (nRow) {
responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
},
"drawCallback": function (oSettings) {
responsiveHelper_datatable_fixed_column.respond();
}

});

// custom toolbar
$("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

// Apply the filter
$("#datatable_fixed_column thead th input[type=text]").on('keyup change', function () {

otable
.column($(this).parent().index() + ':visible')
.search(this.value)
.draw();

});
/* END COLUMN FILTER */

/* COLUMN SHOW - HIDE */
$('#datatable_col_reorder').dataTable({
"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>" +
"t" +
"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
"autoWidth": true,
"preDrawCallback": function () {
// Initialize the responsive datatables helper once.
if (!responsiveHelper_datatable_col_reorder) {
responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
}
},
"rowCallback": function (nRow) {
responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
},
"drawCallback": function (oSettings) {
responsiveHelper_datatable_col_reorder.respond();
}
});

/* END COLUMN SHOW - HIDE */

/* TABLETOOLS */
$('#datatable_tabletools').dataTable({
// Tabletools options: 
//   https://datatables.net/extensions/tabletools/button_options
"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>" +
"t" +
"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
"oTableTools": {
"aButtons": [
"copy",
"csv",
"xls",
{
    "sExtends": "pdf",
    "sTitle": "SmartAdmin_PDF",
    "sPdfMessage": "SmartAdmin PDF Export",
    "sPdfSize": "letter"
},
{
    "sExtends": "print",
    "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
}
],
"sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
},
"autoWidth": true,
"preDrawCallback": function () {
// Initialize the responsive datatables helper once.
if (!responsiveHelper_datatable_tabletools) {
responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
}
},
"rowCallback": function (nRow) {
responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
},
"drawCallback": function (oSettings) {
responsiveHelper_datatable_tabletools.respond();
}
});

/* END TABLETOOLS */

})

</script>
