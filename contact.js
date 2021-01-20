function myFunction() {
    var x = document.getElementById("rectangle");
    x.style.display = "block";
}

$(document).ready(function(){

    $('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true,
    startDate: '0d'
    });
    
    $('.cell').click(function(){
        $('.cell').removeClass('select');
        $(this).addClass('select');
    });
    
});