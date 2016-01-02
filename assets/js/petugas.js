$(document).ready(function(){
	var check1=0; var id;
	$("#nama").bind("keyup change", function(){
		var nama = $(this).val();
		$.ajax({
			url:'kasir/cekData/kasir/nama/'+nama,
			data:{send:true},
			success:function(data){
				if(data==1){
					$("#report1").text("");
					check1=1;
				}else{
					$("#report1").text("*nama petugas sudah terpakai");
					check1=0;
				}
			}
		});
	});
	
	$(".edit").click(function(){
		id = $(this).attr('id');
		$.ajax({
			url:'kasir/getData/'+id,
			data:{send:true},
			success:function(data){
				$("#editnama").val(data['nama']);
				$("#editemail").val(data['email']);
				$("#editkategori").val(data['kategori']);	
			}
		});
	});

	$("#editform").submit(function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url:'kasir/updatePetugas/'+id,
			data:formData,
			type:'POST',
			contentType: false,
			processData: false,
			success:function(data){
				$("#editModal").hide();
				window.location.reload(true);
			}
		});
		
	});
});