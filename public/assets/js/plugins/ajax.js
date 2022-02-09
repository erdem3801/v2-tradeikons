$(function(){
    $.ajax({
        url : 'http://localhost/github/v2-tradeikons/api',
        success : function(res){
            console.log('res: ', res);

        }
    })
})