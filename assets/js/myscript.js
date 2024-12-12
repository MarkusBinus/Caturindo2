
const URL_PACKING_DETAIL = "/packing-detail";
const URL_DELIVERY_ALL = "/delivery-all";
const URL_CHECK_DUPLICATE_NO_LOT = "/check-no-lot";
const URL_CHECK_NO_LOT_PACK = "/check-no-lot-packing";
const URL_SAVE_STD_PACKING = "/save-record-predelivery";
const URL_UPDATE_PICKUP_STATUS = "/update-pickup-status-predelivery";
const URL_CHECK_RECORD_DUPLICATE = "/check-record-duplicate-predelivery";

$( document ).ready(function() {

    $('#btn-predelivery').on('click', function(){
        let tglna = $('#tanggal-predelivery').val();
        window.location.href = "/output_predelivery?tanggal=" + tglna;
    });

    isiTanggalSekarangPredelivery();

    // block scroll dari sini
    blockScroll();
    
    // saat modal muncul maka focus ke textbox
    $('#packing-modal-trigger').on('click', function(){
        $('#no-lot').focus();
    });

    // hilangkan zoom picture
    // saat keluar dari kawasan gambar
    $('#floating-zoom').mouseout(function(e){
        if(!$(e.target).closest('.preview-big').length)
        $('.img-magnifier-glass').hide();
    });

     $('.preview-big').mouseover(function(e){
        
        $('.img-magnifier-glass').show();
    });
    
	$('body').on('click', '.img-magnifier-glass', function(){
		

		$('.preview-big').hide();
        $('#floating-zoom').hide();
        $('.img-magnifier-glass').hide();

         $('.user-info').show();
        $('.time-info').show();
        $('.menu-kerja').show();
        $('.display-poster').show();
		
	});

    
    //melihat zoom picture
    $('.preview').click(function(){

        //alert('aa');

        $('.user-info').hide();
        $('.time-info').hide();
        $('.menu-kerja').hide();
        $('.display-poster').hide();

        let alamatGambar = $(this).attr('src');
        let urlGbr = 'url(..' + alamatGambar + ')';
        //alert('dapat ' + urlGbr);

        $('.preview-big').show();
        $('.preview-big').attr('src', alamatGambar);
		$('.preview-big').css('z-index', 0);

        $('#floating-zoom').show();
        
		
		// menampilkan image zoom saat hover
		magnify('target-big', 3);
		
    });

    $('.preview-big').click(function(){
        // Sembunyikan elemen preview dan zoom
        $('.preview-big').hide();
        $('#floating-zoom').hide();
        $('.img-magnifier-glass').remove();
        
        // Pastikan zoom diatur ke 100%
        $('#floating-zoom').css({
            'transform': 'scale(1)', // Kunci ukuran ke 100%
            'transform-origin': 'center center' // Pusatkan tampilan gambar
        });
        $('.preview-big').css({
            'transform': 'scale(1)',
            'transform-origin': 'center center'
        });
        
        // Refresh halaman
        location.reload();
    });
    

    // panggil fungsi jam tiap 1 detik
    setInterval(updateJam, 1);
	
    // #01 first jquery works for HomePage
	atHomePage();

   // #02 second jquery works for OutputPage
    atOutputPage();


    // #03 output predelivery page
    atOutputPredeliveryPage();

});


function atOutputPredeliveryPage(){

     if (window.location.pathname.includes('/output_predelivery')) {

        new DataTable('#table-data-predelivery');


        $('#btn-predelivery-scan').on('click', function(){

            let nilaiScan = $('#kode-scan').val();

            // ambil partno saja
            let postEP = nilaiScan.indexOf("EP");
            let postV = nilaiScan.indexOf("V");

            let partno = nilaiScan.substring(postEP+2, postV);

            //alert('dapat '+ partno);

            window.location.href = "/output_predelivery_detail?partno=" + partno + "&scan=" + nilaiScan;


        });

        // saat tombol check di click
        // untuk input barcode #01
        $('#button-check-part').on('click', function(){

            let partno = $('#predelivery-partno').val();
            let partname = $('#predelivery-partname').val();
            let totalpack = $('#predelivery-totalpack').val();


            // penempelan nilai
            $('#qrcode_totalpack').val(totalpack);
            $('#qrcode_partno').val(partno);
            $('#qrcode_partname').val(partname);



        });

        // saat input barcode #02
        $('#scan-qrcode-kemasan').on('change', function(){
            let dataqrcode = $(this).val();
            let pecahan = dataqrcode.split('|');
            let posisiIndex = 1;

            let partno_deteksi = pecahan[posisiIndex];
            let qrcode_partno = $('#qrcode_partno').val();

            //alert(dataqrcode.length);

            if(dataqrcode.length>88){
            if(partno_deteksi == qrcode_partno){
                // panggil saving data ke db
                munculkanError(false);

                let qrke = $('#scan-qrcode-kemasan').val();
                let prno = qrcode_partno;
                let onr = $('#predelivery-orderno').val();
                let dsn = pecahan[4].split('-')[0];

                let datana = {qrcode: qrke, delivery_slip_no: dsn, order_number: onr, part_no: prno, qrcode_kemasan: qrke};

                sendRequest(datana, URL_CHECK_RECORD_DUPLICATE);

                
            }else{
                munculkanError(true);
            }
        }

        });

     }
    
}

function munculkanError(val){

    if(val == true){
        $('.pesan-error').show();

    }else{
        $('.pesan-error').hide();
    }

}


function isiTanggalSekarangPredelivery(){

    const today = new Date();
    
    // Calculate tomorrow's date
    const tomorrow = new Date();
    tomorrow.setDate(today.getDate() + 1);
    
    // Format the date to YYYY-MM-DD
    const year = tomorrow.getFullYear();
    const month = String(tomorrow.getMonth() + 1).padStart(2, '0'); // Months are zero-based
    const day = String(tomorrow.getDate()).padStart(2, '0');

    let tgl = year + '-' + month + '-' + day;

    //alert(tgl);

    $('#tanggal-predelivery').val(tgl);


}

function atOutputPage(){

 if (window.location.pathname === '/output') {
    
    // start working
    startWorking();

    // jika tombol ENTER dipencet
    pressEnterMulaiKerjakan();
    

    }

}

function pressEnterMulaiKerjakan(){

    // saat ENTER kepencet
    $('body').on('keyup', function(e){
        if(e.keyCode == 13){
            $('#button-mulai-packing').trigger('click');
        }
    });

}

function atHomePage(){

    if (window.location.pathname === '/home') {
    
        // set the hidden url making behind the scene
        // when modal packing appeared
        setIDKPP();

        // continue to another modal
        scanCode();
		
        // berikan keyboard shortcut press M
        keyboardPressMulaiBekerja();

        // membuat jumlah textbox hanya untuk angka
        limitNumberJumlah();

		prepareCamera();

    } 

}

function limitNumberJumlah(){

    // hanya boleh angka saja pada textbox ini
    $('#jumlah').on('input', function(){ 
        let data = $(this).val();
        data = data.replace(/[^0-9]/g,'');
        $(this).val(data);
    });

}

function keyboardPressMulaiBekerja() {

    // saat huruf M ditekan di keyboard
    $('body').on('keyup', function(e){
        if(e.keyCode == 77){
            $('#packing-modal-trigger').trigger('click');

                setTimeout(function(){ 
                    $('#idkpp').focus();
                }, 1100);
            
        }
    });

}

function prepareCamera(){
	
	$('#idkpp').on('click', function(){
		
		// startScanner();
		
	});
	
}

function prepareTable(){

    let table = $('#table-data-packing tbody');
    let table2 = $('#table-data-predelivery tbody');


    activateDataTable('#table-data-packing', table);
    activateDataTable('#table-data-predelivery', table2);

}

function activateDataTable(idCome, tableNa){

// idCome already with #

if(tableNa.find('tr').length>0){
        //alert('a');
        //new DataTable('#table-data-packing');
        
        $(idCome).DataTable({
            "dom": "rtip"
        });      
    }

}


function startWorking(){

$('#packing-start-work-link').on('click', function(){
        
        $('.display-poster').hide();
        $('#table-container').show();
        $('#button-mulai-packing').hide();

        let nopart = $('#nomor-part').val();
        nopart = nopart.replaceAll('-','');

        // alert('didapat ' + nopart);

        let datana = {partno : nopart };
        sendRequest(datana, URL_DELIVERY_ALL);
        
    });


}

function scanCode(){

$('#btn-packing-kpm-ok').on('click', function(){ });    

$('#packing-form').on('keyup', '#idkpp', function(){

    let no_kpm = $('#idkpp').val();

    if(no_kpm.length > 8){

        let akhirPost = no_kpm.length;
        let kpm_clear = no_kpm.substring(4, akhirPost);

        let data = {idkpp: kpm_clear};

        //alert('ada ' + JSON.stringify(data));

        sendRequest(data, URL_CHECK_NO_LOT_PACK);

    }

});




$('#packing-form').on('submit', function(e){
        
        e.preventDefault();

        let mdpacking = $('#modal_packing');
        let idkppna = mdpacking.find('#idkpp').val();

        // bersihkan dulu kode idkpp 
        // untuk request ke server
        idkppna = idkppna.match(/\d+/)[0];
        localStorage.setItem('idkpp-chawnima', idkppna);

        let datana = {idkpp: idkppna};

        sendRequest(datana, URL_PACKING_DETAIL);

        $('#modal_packing_detail').modal('show'); 

        // focus sekarang ke no lot inputtext 
        // stelah 1 detik dikit
        setTimeout(function(){
            $('#no-lot').focus();
        }, 1100);
        
    });


}

function updateUrutScanQuantity(){
    let nourut = $('#no-urut-kemasan').text();
    nourut++;

    $('#no-urut-kemasan').text(nourut);

    let ttpack = $('#qrcode_totalpack').val();
    ttpack--;

    $('#qrcode_totalpack').val(ttpack);

    let datascan = $('#scan-qrcode-kemasan').val();
    let pecahan = datascan.split('|');
    let dvsCombine = pecahan[4];
    let dvs = dvsCombine.split('-')[0];

    $('#scan-qrcode-kemasan').val('');
    $('#scan-qrcode-kemasan').focus();

    if(ttpack == 0){

        let prno = $('#predelivery-partno').val();

        let datana = {part_no: prno, delivery_slip_no: dvs};
        sendRequest(datana, URL_UPDATE_PICKUP_STATUS);

        $('.pesan-finished').show();

        //alert('kirim kan ' + datana);

        setTimeout(function(){
            history.back();
        },3000);
    }

}

function sendRequest(datajson, urlNa){

    console.log('kirim ' + JSON.stringify(datajson) + ' ke ' + urlNa);

    $.ajax({
        url: urlNa,
        method: "POST",
        data: datajson,
        success: function(response) {
            
            console.log(response);

            if(urlNa == URL_CHECK_DUPLICATE_NO_LOT)
            showMessageErrorNoLot(response);

            if(response != "invalid"){

                if(urlNa == URL_PACKING_DETAIL)
                extractPackingDetail(response);

                if(urlNa == URL_DELIVERY_ALL)
                renderPackingTable(response);

                if(urlNa == URL_CHECK_NO_LOT_PACK)
                hideButtonOKScanKPM(true);

                if(urlNa == URL_SAVE_STD_PACKING)
                updateUrutScanQuantity();

                if(urlNa == URL_CHECK_RECORD_DUPLICATE){
                    showErrorDuplicate(false);    
                    sendRequest(datajson, URL_SAVE_STD_PACKING);
                 }
                
            } else {

                if(urlNa == URL_CHECK_RECORD_DUPLICATE){
                   showErrorDuplicate(true);    
                   
                }

                if(urlNa == URL_CHECK_NO_LOT_PACK)
                hideButtonOKScanKPM(false);

            }

        },
        error: function(error) {
            alert('error ' + error);
        }
    });  



}

function showErrorDuplicate(val){

    if(val == true){
        $('.pesan-error-sudah-pernah').show();
    } else {
        $('.pesan-error-sudah-pernah').hide();
    }

}

function renderPackingTable(dataJson){

    console.log('saya dapat' + dataJson);

    let jsonData = JSON.parse(dataJson);

    let tablena = $('#table-data-packing');

    tablena.find('tbody tr').empty();

    let nomor=1;
    $.each(jsonData, function(index, data) {
        
          var row = $('<tr>');
          row.attr('data-id', data.id);
          //row.append($('<td>').text(nomor).addClass('nomor-urut'));
          row.append($('<td>').text(data.delivery_due_date).addClass('delivery_due_date'));
          row.append($('<td>').text(data.item_number).addClass('item_number'));
          row.append($('<td>').text(data.item_name).addClass('item_name'));
          //row.append($('<td>').text(data.user_code).addClass('user_code'));
          row.append($('<td>').text(data.order_number).addClass('order_number'));
          row.append($('<td>').text(data.order_quantity).addClass('order_quantity'));
          row.append($('<td>').text(data.delivery_slip_no).addClass('delivery_slip_no'));

            var idModalChoose = '#modal_packing_choose';

          var tombol = $('<input>').addClass('packing-item-choose');
          tombol.attr('type','button');
          tombol.attr('data-id', data.id);
          tombol.attr('data-target', idModalChoose);
          tombol.attr('data-toggle', 'modal');
          tombol.val('Choose');

          row.append($('<td>').append(tombol));

          tablena.find('tbody').append(row);

          nomor++;

        });

    // rendering the data table for packing 
    prepareTable();

    // give the action for the choose button
    chooseButtonActions();

    // hide total-1
    // sisakan 1 data terakhir
    $('#table-data-packing tr').hide();

    let jumlah = nomor-1;
    //let lastRow = '#table-data-packing tr:nth-child(' + jumlah +')';

    //alert(nomor);
    let barisAkhir = $('#table-data-packing tr').last();
    barisAkhir.show();

    $('.head-tr').show();


}

function chooseButtonActions(){


    $('body').on('click', '.packing-item-choose', function(){

        // grab all values
        let rowNum = $(this).attr('data-id');
        
        let trParent = $(this).closest('tr');
        //alert(trParent.attr('data-id'));

        let ddate = trParent.find('.delivery_due_date').text();
        let itn = trParent.find('.item_number').text();
        let itne = trParent.find('.item_name').text();
        let us = trParent.find('.user_code').text();
        let on = trParent.find('.order_number').text();
        let oq = trParent.find('.order_quantity').text();
        let ds = trParent.find('.delivery_slip_no').text();

        let urlTarget = "/finished?delivery_due_date=" + ddate+
        "&item_number=" + itn + "&item_name=" + itne +
        "&user_code=" + us + "&order_number=" + on +
        "&order_quantity=" + oq + "&delivery_slip_no=" + ds;

        $('#delivery-due-date-choose').val(ddate);
        $('#order-number-choose').val(on);
        $('#order-qty-choose').val(oq);
        $('#delivery-slip-no-choose').val(ds);
       
        $('#nama-produk-choose').val(itne);
        $('#nomor-part-choose').val(itn);

        //window.location.href = urlTarget;

    });

}

function extractPackingDetail(dataJson){

    let data = JSON.parse(dataJson);

    let formna = $('#modal_packing_detail');

    // idkpp-generated
    if(data.kode_produk != ''){
        
    
    formna.find('#kode-produk').val(data.kode_produk);
    formna.find('#nama-produk').val(data.partname);

    let partNoClear = data.partno;
    partNoClear = partNoClear.replaceAll('-','');

    formna.find('#nomor-part').val(partNoClear);
    formna.find('#kode-compound').val(data.kode_submat);
    formna.find('#idkpp-generated').val(data.kpmno);
    formna.find('#jumlah').val(data.qtyinfna);

    let nomerIDKPP = data.kpmno.match(/\d+/)[0];
    nomerIDKPP = nomerIDKPP.replace(/[^0-9]/g, '').replace(/^0+(?!$)/, '');
    formna.find('#kode-idkpp').val(nomerIDKPP);
    
    } else {
    // munculkan no data!

        $('#no-data-warning').show();

    }

    // hide the loading
    $('#loading-mark').hide();

}



var _idkpp, _nolot;
function setIDKPP(){

    $('#no-lot').on('keyup', function(){ 

        let isian = $(this).val();

        if(isian.length>0){
            let data = {no_lot : isian};
            sendRequest(data, URL_CHECK_DUPLICATE_NO_LOT);
        }

    });

	$('#idkpp').on('change', function(){
		
		let val = $(this).val();
        _idkpp = val;


        // ambil nomornya saja
        let nomerIDKPP = _idkpp.match(/\d+/)[0];
        _idkpp = nomerIDKPP.replace(/[^0-9]/g, '').replace(/^0+(?!$)/, '');

		
	});

    $('#packing-detail-form').on('submit', function(e){
        
        e.preventDefault();

        _nolot = $('#no-lot').val();
        let idkpp_generated = document.getElementById("idkpp-generated").value;
        _idkpp = idkpp_generated.replace(/[^0-9]/g, '').replace(/^0+(?!$)/, '');

        let formna = $('#modal_packing_detail');

        let submatNa = formna.find('#kode-compound').val();
        let jumlahNa = formna.find('#jumlah').val();
        let partnoNa = formna.find('#nomor-part').val();
        let partnameNa = formna.find('#nama-produk').val();
        let idkppgeneratedNa = formna.find('#idkpp-generated').val();
        

        let urlNa = '/output?idkpp=' + _idkpp + '&idkpp_generated=' + idkppgeneratedNa +'&no_lot=' + _nolot;
        urlNa += '&jumlah=' + jumlahNa + '&partno=' + partnoNa + '&partname=' + partnameNa +
        '&submat=' + submatNa;
        
        console.log('didapat ' + urlNa);

        window.location = urlNa; 
        
    });

    
}

function updateJam(){
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var day = namaHari[now.getDay()];
    var tgl = now.getDate();
    var bln = now.getMonth() + 1;
    var thn = now.getFullYear();

    var formatHari = day +',' + tgl +'/' + bln +'/' + thn;

    var formatWaktu = hours +':'+ minutes +':'+ seconds;
   $('#jam').text(formatWaktu +' WIB');
   $('#tanggal').text(formatHari);
   
}


// untuk imageZoom berdasarkan ID
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /* Create magnifier glass: */
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");

  /* Insert magnifier glass: */
  img.parentElement.insertBefore(glass, img);

  /* Set background properties for the magnifier glass: */
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;

  /* Execute a function when someone moves the magnifier glass over the image: */
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);

  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /* Prevent the magnifier glass from being positioned outside the image: */
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /* Set the position of the magnifier glass: */
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /* Display what the magnifier glass "sees": */
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

function startScanner(){
	
	 const quaggaConf = {
        inputStream: {
            target: document.querySelector("#camera"),
            // new
            type: "LiveStream",
            constraints: {
                width: { min: 640 },
                height: { min: 480 },
                facingMode: "environment",
                aspectRatio: { min: 1, max: 2 }
            }
        },
        decoder: {
            readers: ['code_128_reader']
        },
    };

    Quagga.init(quaggaConf, function (err) {
        if (err) {
            return console.log(err);
        }
        Quagga.start();
    });

    Quagga.onDetected(function (result) {
        alert("Detected barcode: " + result.codeResult.code);
    });
	
	
}


function blockScroll(){

    $(window).keydown(function(event) 
    {
        if((event.keyCode == 107 && event.ctrlKey == true) || (event.keyCode == 109 && event.ctrlKey == true))
        {
            event.preventDefault(); 
        }
    
        $(window).bind('mousewheel DOMMouseScroll', function(event) 
        {
            if(event.ctrlKey == true)
            {
                event.preventDefault(); 
            }
        });
    });

}

function showMessageErrorNoLot(duplikat){

    if(duplikat=='valid'){
        $('#no-lot-error').show();
        $('#ok-modal-packing-detail').hide();
        //$('#error-kpm-no-lot').show();
        $('#modal_packing_detail').modal('hide');
        $('#modal_error_no_kpm').modal('show');
    }else{
        $('#ok-modal-packing-detail').show();
        $('#no-lot-error').hide();
        //$('#error-kpm-no-lot').hide();
        $('#modal_packing_detail').modal('show');
        $('#modal_error_no_kpm').modal('hide');
    }

}

function hideButtonOKScanKPM(hideButton){

    if(hideButton == true){
        alert('maaf no KPM tersebut sudah dipack!');
        $('#btn-packing-kpm-ok').hide();
    }else{
        $('#btn-packing-kpm-ok').show();
    }

}