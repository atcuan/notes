//=============================�ж��Ƿ�ΪIE�����
var xmlHttp;
function S_xmlhttprequest(){
	if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	} else if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
}

//=========================����û�������
function checkName(){
	var id_val=document.regFm.user.value;

	if(id_val != ""){
		S_xmlhttprequest();
		xmlHttp.open("GET","check.php?id="+id_val,true);
		xmlHttp.onreadystatechange = changeuser;
		xmlHttp.send(null);
		}else{
			var nameDiv=document.getElementById('check_name')
			nameDiv.innerHTML="<font color=red>�û�������Ϊ�գ�</font>";
		}
	
}

function changeuser(){
	var nameDiv=document.getElementById('check_name')
  	if(xmlHttp.readyState == 1) {32
//		nameDiv.innerHTML = "<img src='./images/loading.gif'>";//�ȴ�������
	}

    	if(xmlHttp.readyState == 4 ){
			if(xmlHttp .status == 200) {
				var tt =  xmlHttp.responseText;
					nameDiv.innerHTML = tt;
			}
		}
}


//=========================�û�����ʾ

function alertName(){
	var val=document.regFm.user.value;
	var nameDiv=document.getElementById('check_name')
	//alert(val);
	nameDiv.innerHTML="<font color=green>�û�������Ϊ6-18λ��</font>";	
	
}




//=====================================������䷽��
function checkEmail(){
	var em_val=document.regFm.email.value;

	if(em_val != ""){
		S_xmlhttprequest();
		xmlHttp.open("GET","check.php?em="+em_val,true);
		xmlHttp.onreadystatechange = changemail;
		xmlHttp.send(null);
		}else{
			var nameDiv=document.getElementById('check_email')
			nameDiv.innerHTML="<font color=red>���䲻��Ϊ�գ�</font>";
		}
	
}

function changemail(){
	var nameDiv=document.getElementById('check_email')
  	if(xmlHttp.readyState == 1) {32
//		 nameDiv.innerHTML = "<img src='./images/loading.gif'>";//�ȴ�������
	}

    	if(xmlHttp.readyState == 4 ){
			if(xmlHttp .status == 200) {
				var tt =  xmlHttp.responseText;
					nameDiv.innerHTML = tt;
			}
		}
}




//=====================================������뷽��
function checkPw(){
	var val=document.regFm.password.value;
	var nameDiv=document.getElementById('check_pw')
	//alert(val);

	if(val != ""){
		var len=val.length;
		if(len>18 || len<6 ){
			nameDiv.innerHTML="<font color=red>����ӦΪ6-18���ַ���</font>";	
		}else{
				nameDiv.innerHTML="<img src='./images/check_right.gif' />";	
			
		}
	}else{
			nameDiv.innerHTML="<font color=red>���벻��Ϊ�գ�</font>";	
	
	}	
}

//=====================================���ȷ�����뷽��
function checkRePw(){
	var nameDiv=document.getElementById('check_reRw')
	var val=document.regFm.password.value;
	var re_val=document.regFm.repassword.value;
	if(re_val != ""){
		if(val == re_val){
				nameDiv.innerHTML="<img src='./images/check_right.gif' />";	
		}else{
				nameDiv.innerHTML="<font color=red>�����������벻һ�£�</font>";
		}

	}else{
			nameDiv.innerHTML="<font color=red>ȷ�����벻��Ϊ�գ�</font>";
	}
}