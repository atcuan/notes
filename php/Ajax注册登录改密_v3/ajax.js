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
			nameDiv.innerHTML="<b style='color:red'>�û�������Ϊ�գ�</b>";
		}
	
}

function changeuser(){
	var nameDiv=document.getElementById('check_name')
  	if(xmlHttp.readyState == 1) {
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
	nameDiv.innerHTML="�û�������Ϊ6-18λ��";	
	
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
			nameDiv.innerHTML="<b style='color:red'>���䲻��Ϊ�գ�</b>";
		}
	
}

function changemail(){
	var nameDiv=document.getElementById('check_email')
  	if(xmlHttp.readyState == 1) {
//		 nameDiv.innerHTML = "<img src='./images/loading.gif'>";//�ȴ�������
	}

    	if(xmlHttp.readyState == 4 ){
				if(xmlHttp .status == 200) {
					var tt =  xmlHttp.responseText;
						nameDiv.innerHTML = tt;
				}
			}
}

//������ʾ
function alertemail(){
	var val=document.regFm.email.value;
	var nameDiv=document.getElementById('check_email')
	//alert(val);
	nameDiv.innerHTML="����д��ȷ�������ַ��";	
	
}

//=====================================������뷽��
function checkPw(){
	var val=document.regFm.password.value;
	var nameDiv=document.getElementById('check_pw')
	//alert(val);

	if(val != ""){
		var len=val.length;
		if(len>18 || len<6 ){
			nameDiv.innerHTML="<b style='color:red'>����ӦΪ6-18���ַ���</b>";	
		}else{
				nameDiv.innerHTML="<img src='./images/check_right.gif' />";	
			
		}
	}else{
			nameDiv.innerHTML="<b style='color:red'>���벻��Ϊ�գ�</b>";	
	
	}	
}

//������ʾ
function alertPw(){
	var val=document.regFm.password.value;
	var nameDiv=document.getElementById('check_pw')
	//alert(val);
	nameDiv.innerHTML="����д���룡";	
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
				nameDiv.innerHTML="<b style='color:red'>�����������벻һ�£�</b>";
		}

	}else{
			nameDiv.innerHTML="<b style='color:red'>ȷ�����벻��Ϊ�գ�</b>";
	}
}

//ȷ��������ʾ
function alertRepw(){
	var val=document.regFm.repassword.value;
	var nameDiv=document.getElementById('check_reRw')
	//alert(val);
	nameDiv.innerHTML="���ٴ���д���룡";	
	
}