// $('.carousel').carousel()
// // $('.carousel').carousel({
// //     interval: 2000
// //   })

// .carousel('prev')
// .carousel('next')



$('#add-task').click(addTask);
$('#id-name') & $('#task-name').on('keypress', function (event) {
    if (event.keyCode == 13){
        addTask();
    }
});
function addTask(){
    var el = '<li>' + $('#task-name').val(); + $('#id-name').val(); + '<li>'
    $('#task-list').prepend(el);
    $('#id-name').val('')
    $('#task-name').val('')
}

$( "#datepicker" ).datepicker();

$('#tab-container').easytabs();

$( function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  } );


  