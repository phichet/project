$(document).ready(function(){
   $.ajax({
			  url:"../formres_controller/recommend",
			  global:false,
			  type:"GET",
			  data:{TYPE:"list"},
			  dataType:"JSON",
			  async:false,
			  success:function(jd) {
//					var opt="<option value=\"\" selected=\"selected\">----ฝ่ายงาน-----</option>";
//					$.each(jd,function(key,val){
//					opt +="<option value='"+val["res_id"] +"'>"+val["res_name"]+"</option>"
//					});
//	           $("#Department").html(opt);
		   	  },error: function(err){
		   	      alert("ERROR"+err);
		   	  }
		});
//    	$("#Department").change(function(){
//		$.ajax({
//			  url:"../department/department_c/selectDepartment",
//			  global:false,
//			  type:"GET",
//			  data:{ID:$(this).val(),TYPE:"Position"}, 
//			  dataType:"JSON",
//			  async:false,
//			  success: function(jd) { 
//					var opt="<option value=\"\" selected=\"selected\">---กลุ่มงาน---</option>";
//					$.each(jd, function(key,val){
//					opt +="<option value='"+ val["position_id"] +"'>"+val["position_name"]+"</option>"
//					});
//		      $("#Position").html(opt);
//		   	  },error: function(err){
//		   	      alert("ERROR"+err);
//		   	  }
//		});	
//	}); 
 
});

