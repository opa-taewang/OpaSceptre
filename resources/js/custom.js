// Datatables require
$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

// Add the following code if you want the name of the file appear on select
// SummerNote
$(function () {
    // Summernote
    $('.textareaDetails').summernote()
})

// $(".cartquantity").inputSpinner({
//     // button text/icons
//     decrementButton: "<strong>-</strong>",
//     incrementButton: "<strong>+</strong>",
//     // class of input group
//     groupClass: "input-group-spinner",
//     // button class
//     buttonsClass: "btn-outline-secondary",
//     // button width
//     buttonsWidth: "2.5em",
//     // text alignment
//     textAlign: "center",
//     // delay in milliseconds
//     autoDelay: 500,
//     // interval in milliseconds
//     autoInterval: 100,
//     // set this `true` to disable the possibility to enter or paste the number via keyboard
//     buttonsOnly: true,

// });

$(".cartquantity").inputSpinner({
    // button text/icons
    decrementButton: "<strong>-</strong>",
    incrementButton: "<strong>+</strong>",
    // class of input group
    groupClass: "input-group-spinner",
    // button class
    buttonsClass: "btn btn-sm btn-outline-secondary",
    // button width
    buttonsWidth: "1.5em",
    // text alignment
    textAlign: "center",
    // delay in milliseconds
    autoDelay: 500,
    // interval in milliseconds
    autoInterval: 100,
    // set this `true` to disable the possibility to enter or paste the number via keyboard
    buttonsOnly: true,
    // the locale, per default detected automatically from the browser
    locale: navigator.language,
    // the template of the input
    template: '<div class="input-group ${groupClass}">' +
        '<div class="input-group-prepend"><button style="min-width: ${buttonsWidth}" class="btn btn-decrement ${buttonsClass} btn-minus" type="button">${decrementButton}</button></div>' +
        '<input type="text" inputmode="decimal" style="text-align: ${textAlign}" class="form-control form-control-text-input"/>' +
        '<div class="input-group-append"><button style="min-width: ${buttonsWidth}" class="btn btn-increment ${buttonsClass} btn-plus" type="button">${incrementButton}</button></div>' +
        '</div>'
});


