$(function () {
    
    $.getJSON('https://www.pazarfin.com/pazarfin/urunler/veri/urun_veri_bilsevpazarlama_515.json', function (data) {
        data.forEach(element => {
            console.log(element);
        });
        // JSON result in `data` variable
    });
})