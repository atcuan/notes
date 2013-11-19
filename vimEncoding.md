## �����������취
```
set fileencodings=gb2312,gb18030,utf-8  
set termencoding=utf-8  
set encoding=prc  
```

����  
```
edit-->lunch setting  
let &termencoding=&encoding  
set fileencodings=utf-8,gbk,gb2312  
```

������������Ҽ����ˡ����ϲ�����ã�����˵�ò���λ��һֱû�����������������һ�£����ڸ㶨��  

1������  
�ɵ�http://www.vim.org/�������µ�7.2��  

2����װ   
����֮ǰ����Ҫconfigure --help�鿴һ������ѡ�   
--enable-multibyte      Include multibyte editing support.   
֧�ֶ��ֽڱ��룬��һ�??����Ҫ�����򣬺����������Ҳ����Ȼ��  
Ȼ��  
```
[root@localhost wbl]# vim --version | grep multi  
-mouse_jsbterm -mouse_netterm -mouse_sysmouse +mouse_xterm +multi_byte  
+multi_lang -mzscheme +netbeans_intg -osfiletype +path_extra -perl +postscript  
```
���????���Ƿ������á�  

 3������  
�༭~/.vimrc�ļ����������¼��У�  
```
set fileencodings=gb2312,gb18030,utf-8  
set termencoding=utf-8   
set encoding=prc   
```
 ���ɸ㶨��


### ��(Vim������ϸ����)��  

Vim�????�е������ı��༭��һ����Vim ���Ժܺõı༭�����ַ���������??���⵱Ȼ���� UCS-2��UTF-8 �����е� Unicode ���뷽ʽ��
		
Vim �????�����ַ����뷽ʽ�йص�ѡ�encoding��fileencoding��fileencodings��termencoding (��Щѡ����ܵ�ȡֵ��ο� Vim ���߰��� :help encoding-names)�����ǵ���������:  
	
1. encoding: Vim �ڲ�ʹ���????�����뷽ʽ������ Vim �� buffer (������)���˵��ı�����Ϣ���????���û��ֲ��Ͻ���ֻ�� .vimrc �иı�����ֵ����ʵ���ƺ�Ҳֻ���?? .vimrc �иı�����ֵ�������塣
		
2. fileencoding: Vim �е�ǰ���??���ļ����ַ����뷽ʽ��Vim �����ļ�ʱҲ�Ὣ�ļ�����Ϊ�����ַ��??�뷽ʽ (�����Ƿ����ļ������)��
	
3. fileencodings: Vim ����ʱ�??���������г����ַ����뷽ʽ��һ̽�⼴���򿪵��ļ����ַ����뷽�??�����ҽ� fileencoding ����Ϊ����̽�⵽���ַ����뷽ʽ��������??�� Unicode ���뷽ʽ�ŵ�����б����ǰ�棬��������ϵ���뷽ʽ latin1 �ŵ�����档
	
4. ermencoding: Vim ���������ն� (���� Windows �� Console ����) ���ַ����뷽ʽ�����ѡ���� Windows �¶����????�õ� GUI ģʽ�� gVim ��Ч������ Console ģʽ�� Vim ���Ծ��??Windows ����̨�Ĵ���ҳ������ͨ�����ǲ���Ҫ�ı�����
	
������ Vim �Ķ��ַ����뷽ʽ֧������ι�����  
1. Vim ���������� .vimrc �??���õ� encoding ��ֵ������ buffer���˵��ı�����Ϣ�ĵ��ַ����????ʽ��
	
2. ��ȡ��Ҫ�༭���ļ������� fileencodings ���г������????�뷽ʽ��һ̽����ļ����뷽ʽ�������� fileencoding Ϊ̽�⵽�??������������ȷ�� (ע1) �ַ����뷽ʽ��
	
3.�Ա� fileencoding �??encoding ��ֵ������ͬ����� iconv ���ļ�����ת��Ϊ encoding �??�������ַ����뷽ʽ�����Ұ�ת��������ݷŵ�Ϊ���ļ����ٵ� buffer ���ʱ���ǾͿ��Կ�ʼ�༭����ļ��ˡ�ע�⣬�����һ�������????�����ⲿ�� iconv.dll (ע2)������Ҫ��֤����ļ������� $VIMRUNTIME ������������ PATH ���������е�Ŀ¼�
	
(4)�༭��ɺ󱣴��??��ʱ���ٴζԱ� fileencoding �� encoding ��ֵ������ͬ���ٴε��?? iconv ����������� buffer �е��ı�ת��Ϊ fileencoding �����????�ַ����뷽ʽ�������浽ָ�����ļ��С�ͬ��������Ҫ���� iconv.dll

���� Unicode �ܹ������������е����Ե��ַ������� Unicode �??UTF-8 ���뷽ʽ���Ƿǳ������Լ۱ȵı��뷽ʽ (�ռ����ı� UCS-2 С)����˽��� encoding ��ֵ����Ϊ utf-8����ô������һ�������� encoding ����Ϊ utf-8 ʱ��Vim �Զ�̽���ļ��ı��뷽ʽ���׼ȷ (�????������ɲ�����Ҫ�� ;) ������������ Windows ��༭���ļ����????�������������ļ����ԣ��ļ����뻹������Ϊ GB2312/GBK �Ƚ��??�ʣ���� fileencoding ��������Ϊ chinese (chinese �Ǹ��������?? Unix ���ʾ gb2312���� Windows ���ʾ cp936��Ҳ���� GBK ���????ҳ)�� 



