// $('.carousel').carousel()
// // $('.carousel').carousel({
// //     interval: 2000
// //   })

// .carousel('prev')
// .carousel('next')


$('#some-b').on('click', function (){
    var elements = $('.some-p');
    if (elements.css('color') == 'rgb(255, 0, 0)') {
        elements.css('color', 'rgb(0, 0, 0)');
        elements.text('<strong>Foo</strong> Bar'); 
        elements.slideToggle(10000);
    } else {
        elements.css('color', 'rgb(255, 0, 0)');
        elements.html('Foo <strong>Bar</strong>');
        elements.slideDown(10000);
         
    }

    //elements.slideToggle(10000);
})
$('#add-task').click(addTask);
$('#task-name').on('keypress', function (event) {
    if (event.keyCode == 13){
        addTask();
    }
});
function addTask(){
    var el = '<li>' + $('#task-name').val(); + '<li>'
    $('#task-list').prepend(el);
    $('#task-name').val('')
}

$( "#datepicker" ).datepicker();

$('#tab-container').easytabs();

