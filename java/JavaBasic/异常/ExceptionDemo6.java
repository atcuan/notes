/*
�쳣���Ӹ����и��ǵ����֣�
1�������ڸ��Ǹ���ʱ���������ķ����׳��쳣����ô����ĸ��Ƿ�����ֻ���׳�������쳣���߸��쳣������
2��������෽���׳�����쳣����ô�����ڸ��Ǹ÷���ʱ��ֻ���׳������쳣�Ӽ���
3�����������߽ӿ��еķ���û���쳣�׳�����ô�����ڸ��Ƿ���ʱ��Ҳ�������׳��쳣��������෽���������쳣���ͱ���Ҫ����try�������Բ����׳��쳣��

*/
class AException extends Exception
{
	
}

class BException extends Exception
{
	
}

class Fu
{
	void show() throws AException
	{
		
	}
	
}

class Zi extends Fu
{
	void show() throws BException
	{
	
	}
}

class ExceptionDemo6
{
	public static void main(String[] args) 
	{
		System.out.println("Hello World!");
	}
}