/*
int read() 
          ��ȡ�����ַ��� 
	���أ�
		��Ϊ������ȡ���ַ�����Χ�� 0 �� 65535 ֮�� (0x00-0xffff)�����		�ѵ�������	ĩβ���򷵻� -1 

 int read(char[] cbuf) 
          ���ַ��������顣 
		���أ�
			��ȡ���ַ���������ѵ�������ĩβ���򷵻� -1 
		

*/

//��ȡһ��.java�ļ�������ӡ�ڿ���̨�ϡ�
import java.io.*;

class FileReaderTest 
{
	public static void main(String[] args) throws IOException
	{
		FileReader  fr = new FileReader("DateDemo.java");

		char[] buf = new  char[1024];

		int num = 0;

		while((num=fr.read(buf))!=-1)
		{
			System.out.print(new String(buf,0,num));
		}

		fr.close();
	}

}
