$(document).ready(function(){
	var check1=0;var id;
	$("#nama").bind("keyup change", function(){
		var nama = $(this).val();
		$.ajax({
			url:'kategori/cekData/kategori/nama/'+nama,
			data:{send:true},
			success:function(data){
				if(data==1){
					$("#report1").text("");
					check1=1;
				}else{
					$("#report1").text("*nama kategori sudah terpakai");
					check1=0;
				}
			}
		})
	});
	$(".edit").click(function(){
		id = $(this).attr('id');
		$.ajax({
			url:'kategori/getData/'+id,
			data:{send:true},
			success:function(data){
				$("#editnama").val(data);
			}
		});
	});

	$("#submit").click(function(event){
		if(check1==0){
			event.preventDefault();
		}
	});
	$("#editform").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url:'kategori/update/'+id,
			data:formData,
			type:'POST',
			contentType: false,
			processData: false,
			success:function(data){
				$("#editModal").hide();
				window.location.reload(true);
			}
		})
	});
});