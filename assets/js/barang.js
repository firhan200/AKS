$(document).ready(function(){
	var check1=0; var id;var namaOld=""; var editCheck;
	$("#nama").bind("keyup change", function(){
		var nama = $(this).val();
		$.ajax({
			url:'barang/cekData/barang/nama/'+nama,
			data:{send:true},
			success:function(data){
				if(data==1){
					$("#report1").text("");
					check1=1;
				}else{
					$("#report1").text("*nama barang sudah terpakai");
					check1=0;
				}

			}
		});
	});

	$(".edit").click(function(){
		id = $(this).attr('id');
		$.ajax({
			url:'barang/getData/'+id,
			data:{send:true},
			success:function(data){
				namaOld = data['nama'];
				$("#editnama").val(namaOld);
				$("#editkategori").val(data['idkategori']);
				$("#editstock").val(data['stock']);
				$("#editharga").val(data['harga']);
				$("#editdeskripsi").val(data['deskripsi']);
				$("#editfoto").val(data['foto']);
			}
		});
	});

	$("#editnama").bind("keyup change", function(){
		var nama = $(this).val();
		$.ajax({
			url:'barang/cekDataEdit/barang/nama/'+nama+'/'+namaOld,
			data:{send:true},
			success:function(data){
				if(data==1){
					$("#editreport1").text("");
					editCheck=1;
				}else{
					$("#editreport1").text("*nama barang sudah terpakai");
					editCheck=0;
				}

			}
		});
	});
	
	$("#editform").submit(function(e){
		if (editCheck==0){
			$("#editModal").animate({scrollTop:0}, 'slow');
		}else{
			e.preventDefault();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url:'barang/update/'+id,
				data:formData,
				type:'POST',
				contentType: false,
				processData: false,
				success:function(data){
					$("#editModal").hide();
					window.location.reload(true);
				}
			});
		}	
		return false;	
	});
	$('#tambahform').submit(function(e){
		if (check1==0){
			$("#addModal").animate({scrollTop:0}, 'slow');
		}else{
			e.preventDefault();
		    var formData = new FormData($(this)[0]);
		    $.ajax({
				url:'barang/insert',
				data:formData,
				type:'POST',
				contentType: false,
				processData: false,
				success:function(data){
					$("#addModal").hide();
					window.location.reload(true);
				}
			});
		}
		return false;
    });
	
	$(".info").click(function(){
			id = $(this).attr('id');
			$.ajax({
				url:'barang/getData/'+id,
				data:{send:true},
				success:function(data){
					$("#infodeskripsi").text(data['deskripsi']);
					$("#infofoto").html(data['foto']);		
				}
			});
		});

	$("#infoform").submit(function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url:'barang/getData/'+id,
			data:formData,
			type:'POST',
			contentType: false,
			processData: false,
			success:function(data){
				$("#infoModal").hide();
				window.location.reload(true);
			}
		});
		
	});

});