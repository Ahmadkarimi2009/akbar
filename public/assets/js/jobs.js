
// Applying select2 plugin on two select boxes.
$('#locationsearch, #categorysearch').select2();
// Paginating the jobs.
$(document).ready(function(){
    paginatethis();
});

function paginatethis(){
    $('#paginationdiv').easyPaginate({
        paginateElement: '.single-job',
        elementsPerPage: 15,
        effect: 'climb',
        prevButtonText: 'Previous',
        nextButtonText:'Next',
        firstButtonText:'&laquo;',
        lastButtonText:'»'
    });
}