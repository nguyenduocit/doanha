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

	$('#hocky').change(function(){
		 machuyennganh = $('#machuyennganh').find(":selected").val();
		 hocky = $('#hocky').find(":selected").val();
		 console.log(machuyennganh);
		 console.log(hocky);
		 //$result = $("#machuyennganh");
		 $.ajax({
		 	url:'http://localhost/doanha/kehoach/Kehoachtheolop/data_khc',
		 	type:'post',
		 	async:true,
		 	dataType:'json',
		 	data:{'machuyennganh':machuyennganh,
		 			'hocky':hocky},
		 	success:function(data)
		 	{
		 		
		 		console.log(data);
		 		$.each(data,function(key,val){

		 			$('.solop').find("input").remove();
		 			$('.solop').val(val['solop']);


		 		});
			 		
		 		//result.find("option").remove();
		 		// $result.append(data);
		 		
			}
		 	
		 });
	});

	// lấy ra danh sách môn học của chuyên ngành đó 
	$('#machuyennganh').change(function(){
		 machuyennganh = $('#machuyennganh').find(":selected").val();
		 $result = $("#mons");
		 $.ajax({
				 	url:'http://localhost/doanha/kehoach/Kehoachtheolop/monhoc',
				 	type:'post',
				 	async:true,
				 	dataType:'json',
				 	data:{'machuyennganh':machuyennganh},
				 	success:function(data)
				 	{
				 		var html = '';
				 		$.each(data,function(key,val){
				 			
				 			$('#mamonhoc').find("input").remove();
				 			html += '<div class=" form-group col-lg-4"><input type="checkbox" id="mamonhoc" name="monhoc[]" value="'+ val['mamonhoc']+'">';
				 			html += val['tenmonhoc']+'</div>';
				 			
				 			//$('.solop').val(val['solop']);
				 		});

				 		$("#mons").html(html);

				 		// find("input").remove();
				 		// $result.append(data);
				 		
					}
		 	
		 		});
	});


	// lấy ra danh sách lớp
	$('#machuyennganh').change(function(){
		 machuyennganh = $('#machuyennganh').find(":selected").val();
		 $result = $("#lop");
		 $.ajax({
		 	url:'http://localhost/doanha/kehoach/Kehoachtheolop/lop',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'machuyennganh':machuyennganh},
		 	success:function(data)
		 	{
		 	
		 		$result.find("option").remove();
		 		$result.append(data);
		 
			}
		 	
		 });
	});


	
	
	

});
	
