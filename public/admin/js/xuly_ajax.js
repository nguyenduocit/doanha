$(document).ready(function(){

	var link = 'http://localhost/doanha';

	/*
		Xử lý ajax lấy ra  dữ liệu bộ môn
	*/
	$('#makhoa').change(function(){
		 makhoa = $('#makhoa').find(":selected").val();
		 $result = $("#mabomon");
		 $.ajax({
		 	url:link+'/kehoach/kehoachchung/bomon',
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
		 	url:link+'/kehoach/kehoachchung/nganh',
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

	


	// lấy ra danh sách môn học của chuyên ngành đó 
	$('#machuyennganhs').change(function(){
		 machuyennganh = $('#machuyennganhs').find(":selected").val();
		 console.log(machuyennganh);
		 $result = $("#monhoc");
		 $.ajax({
				 	url:link+'/kehoach/Kehoachtheolop/monhoc',
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


	// lấy ra danh sách lớp
	$('#machuyennganh').change(function(){
		 machuyennganh = $('#machuyennganh').find(":selected").val();
		 $result = $("#lop");
		 $.ajax({
		 	url:link+'/kehoach/Kehoachtheolop/lop',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'machuyennganh':machuyennganh},
		 	success:function(data)
		 	{

		 		if(data)
		 		{
		 			$result.find("option").remove();
		 			$result.append(data);
		 		}
		 		else
		 		{
		 			$result.find("option").remove();
		 		}
		 	
		 		
		 
			}
		 	
		 });
	});


	$('.delete_kh').click(function(){
		 var id = $(this).attr('id');
		 console.log(id);
		 $.ajax({
		 	url:link+'/kehoach/kehoachchuyennganh/delete',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'id':id},
		 	success:function(data)
		 	{
		 		$('tr.row_'+id).fadeOut();	
		 
			}
		 	
		 });
	});


	$('.delete_kl').click(function(){
		 var id = $(this).attr('id');
		 console.log(id);
		 $.ajax({
		 	url:link+'/kehoach/kehoachtheolop/delete_Ajax',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'id':id},
		 	success:function(data)
		 	{
		 		console.log(data);
		 		$('tr.row_'+id).fadeOut();	
		 
			}
		 	
		 });
	});


	$('.delete_pc').click(function(){
		 var id = $(this).attr('id');
		 console.log(id);
		 $.ajax({
		 	url:link+'/kehoachgiangday/chitietphancong/delete_Ajax',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'id':id},
		 	success:function(data)
		 	{
		 		console.log(data);
		 		$('tr.row_'+id).fadeOut();	
		 
			}
		 	
		 });
	});



	// duyệt kế hoạch đào tạo
	$(".duyet").click(function(){
		var id = $(this).attr('id');
		var makehoach = $(this).attr('makehoach');
		console.log(id);
		console.log(makehoach);
		$.ajax({
		 	url:link+'/kehoachgiangday/duyetkehoachdt/duyetKeHoach',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'id':id , 'makehoach':makehoach },
		 	success:function(data)
		 	{
		 		console.log(data);
		 		$('tr.row_'+id).fadeOut();	
		 
			}
		 	
		 });
		
	});



	// xử lý ajax của phân công 
	$("#lop").change(function(){
		var lop = $('#lop').find(":selected").val();
		var hocky = $('#hockys').find(":selected").val();
		$result = $("#monhoc");
		console.log(lop);
		console.log(hocky);
		$.ajax({
		 	url:link+'/kehoachgiangday/chitietphancong/listMon',
		 	type:'post',
		 	async:true,
		 	dataType:'text',
		 	data:{'lop':lop , 'hocky':hocky },
		 	success:function(data)
		 	{
		 		if(data)
		 		{
		 			$result.find("option").remove();
		 			$result.append(data);
		 		}
		 		else
		 		{
		 			$result.find("option").remove();
		 		}
			}
		 	
		 });
		
	});
	

});
	
