//$(function(){
//
//    $(".home").click(home);
//
//
//
//});
$(function(){

    $("#login").click(submit);
    $(".logout").click(logout);
    $(".dash").click(function(){
        $(".left-btn a").removeClass("active");
        $(this).addClass("active");
        dashboard();
    });

    $(".add").click(function(){
        $(".left-btn a").removeClass("active");
        $(this).addClass("active");
        add();
    });
    $(".show").click(function(){
        $(".left-btn a").removeClass("active");
        $(this).addClass("active");
        show();
    });


});
function submit(){
    var frm = $(".frm").serialize();
    alert(frm)
    $.ajax({
        url: 'checkadminlogin',
        type: 'GET',
        data: frm,
        success: function(r){

            if(r.indexOf("correct")>-1)
                window.location.replace('wlcmadmin');
            else if(r.indexOf("invalid")>-1)
                $("#invalid").html("Invalid email or password");
            else
                $("#invalid").html("Please try after some time");

        }
    });
}
function dashboard() {

    $.ajax({
        url : 'dash',
        type : 'GET',
        success : function(r) {
            $(".form-view").html(r);

        }
    });

};
function add() {

    $.ajax({
        url : 'add',
        type : 'GET',
        success : function(r) {
            if(r.result=="success");
            $(".form-view").html(r);

        }
    });

};
function show() {

    $.ajax({
        url : 'showemployee',
        type : 'GET',
        success : function(r) {
            $(".form-view").html(r);

        }
    });

};
function logout(){
    window.location.replace('index');
}
function editemployee(){

}
$(".delete-employee").click(
    function(){
        var id = $(this).attr('rel');
        removeEmployee(id);
    });


function removeEmployee(id){

    if(confirm("Are you sure to remove this category?")){
        $.ajax({
            url: 'removeemployee/' +id,
            type: 'GET',
            success: function(r){
                if(r.result=="success");
                $(".form-view").html(r);

            }

        });
    }
}
