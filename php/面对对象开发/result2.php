<?
/*
 * Programmer : Alan , Msn - haowubai@hotmail.com
 * PHP100.com Develop a project PHP - MySQL - Apache
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

	function fetch_urlpage_contents($url){
	$c=file_get_contents($url);
	return $c;
	}
	//��ȡƥ������
	function fetch_match_contents($begin,$end,$c)
	{
	$begin=change_match_string($begin);
	$end=change_match_string($end);
	if(@preg_match("/{$begin}(.*?){$end}/i",$c,$rs))
	 {return $rs[1];}
	else {return "";}
	}//ת��������ʽ�ַ���
	function change_match_string($str){
	 //ע�⣬����ֻ�Ǽ�ת��
	$old=array("/","$");
	$new=array("\/","\$");
	$str=str_replace($old,$new,$str);
	return $str;
	}

	//�ɼ���ҳ
	function pick($url,$ft,$th)
	{
	$c=fetch_urlpage_contents($url);
	foreach($ft as $key => $value)
	  {
	 $rs[$key]=fetch_match_contents($value["begin"],$value["end"],$c);
	 if(is_array($th[$key]))
	  { foreach($th[$key] as $old => $new)
	  {
	  $rs[$key]=str_replace($old,$new,$rs[$key]);
	  }
	  }
	  }
	 return $rs;
	}


    $url="http://www.baidu.com"; //Ҫ�ɼ��ĵ�ַ
    $ft["title"]["begin"]="<title>";       //��ȡ�Ŀ�ʼ��
	$ft["title"]["end"]="</title>";        //��ȡ�Ľ�����
	$th["title"]["�ٶ�"]="ǧ��";      //��ȡ���ֵ��滻

///////////////
	$rs=pick($url,$ft,$th);                //��ʼ�ɼ�

     echo $rs["title"];                    //���

	?>