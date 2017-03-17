$(document).ready(function(){

	/*
		Xử lý ajax lấy ra  dữ liệu bộ môn
	*/
	$('#makhoa').change(function(){
		 makhoa = $('#makhoa').find(":selected").val();
		 $result = $("#mabomon");
		 $.ajax({
		 	url:'http://localhost/doanha/kehoach/kehoachchung/bomon',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'makhoa':makhoa},
		 	success:function(data)
		 	{
		 		$result.find("option").remove();
		 		$result.append(data);
		 		
			}
		 	
		 });
	});

	/*
		Xử lý ajax lấy ra  dữ liệu cHUYÊN ngành
	*/

	$('#mabomon').change(function(){
		 mabomon = $('#mabomon').find(":selected").val();
		 $result = $("#machuyennganh");
		 $.ajax({
		 	url:'http://localhost/doanha/kehoach/kehoachchung/nganh',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'mabomon':mabomon},
		 	success:function(data)
		 	{
		 		$result.find("option").remove();
		 		$result.append(data);
		 		
			}
		 	
		 });
	});

	// lấy dữ liệu của bảng kế hoạch chung

	$('#machuyennganh').change(function(){
		 machuyennganh = $('#machuyennganh').find(":selected").val();
		 //$result = $("#machuyennganh");
		 $.ajax({
		 	url:'http://localhost/doanha/kehoach/Kehoachtheolop/data_khc',
		 	type:'post',
		 	async:true,
		 	dataType:'json',
		 	data:{'machuyennganh':machuyennganh},
		 	success:function(data)
		 	{

		 		var html='';
				$.each(result,function(key,item)
				{
					html+='<option value="'+item['malop']+'">';
					html+=item['malop'];
					html+='</option>';
				});	
				 		console.log(data);
		 		console.log('ok');

		 		// $result.find("option").remove();
		 		// $result.append(data);
		 		
			}
		 	
		 });
	});


	
	
	

});
	
