jQuery(document).ready(function($){
    
    // 1. exel file check or not 
    $('#excel_file_upload').on('input', function(){
        var fileName = $(this).val();
        var fileType = fileName.split('.').pop().toLowerCase();

        if (fileType !== 'xlsx') {
            alert('Error: Please select a valid .xlsx file.');
            $(this).val('');
        }
    });

});

// data table
jQuery("#registered_convocation").DataTable();


// Export Table As Excel
var table2excel = new Table2Excel();
document.getElementById('export_excel').addEventListener('click', function() {
table2excel.export(document.querySelectorAll('table'));
});