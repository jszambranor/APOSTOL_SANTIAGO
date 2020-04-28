$(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.modal').modal();
    $('.tabs').tabs();
    $('.collapsible').collapsible();
    $('.fixed-action-btn').floatingActionButton();
    $('.datepicker').datepicker({
      format:'yyyy-mm-dd',
      minDate : new Date(1996,01,01),
      maxDate: new Date(2020,12,31)
    });
  });
