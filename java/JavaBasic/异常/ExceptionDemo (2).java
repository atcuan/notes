/*
�쳣�����ǳ�������ʱ���ֲ����������
�쳣����������Ҳ����ʵ�����е�һ���������Ҳ����ͨ��
java�������ʽ��������������װ�Զ���
��ʵ����java�Բ��������������Ķ������֡�

��������Ļ��֣�һ�������ص����⣬һ���Ƿ����ص����⡣
�������ص�����javaͨ��Error��������
	����Errorһ�㲻��д����ԵĴ��������д���
���ڷ����ص�����javaͨ��Exception��������
	����Exception����ʹ������ԵĴ���ʽ����

����Error����Exception����һЩ���Ե����ݡ�
���磺����������Ϣ������ԭ��ȡ�
Throeable
	|--Error
	|--Exception

2.�쳣�Ĵ���

java�ṩ�����������д���

try
{
//	��Ҫ�����Ĵ���
}
catch
{
//	�����쳣�Ĵ���
}
finally
{
//	һ����ִ�е����
}

3.�Բ�׽�����쳣������г�������������
	String getMessage():��ȡ�쳣��Ϣ��
	
�ں����������쳣��
�����ύ��ȫ�ԣ��õ��ô����д������������ʧ�ܡ�

�Զ��쳣�Ĵ���
1.�����쳣ʱ������������Ϊ������쳣���������Ը����塣
2.�Է����������쳣���Ͷ�Ӧ�м���catch�顣
	������catch�����쳣���ּ̳й�ϵ�������쳣catch���������档
3.��Ҫ��������catch�顣

�����ڽ���catch����ʱ��catch��һ��Ҫ������崦��ʽ����Ҫ��
����һ��e��printStackTrace(),Ҳ��Ҫ�ͼ򵥵����һ�����


*/
class Demo
{
	int div(int a, int b) throws ArithmeticException,ArrayIndexOutOfBoundsException //�ڹ�����ͨ��throws�ؼ��������˸ù��ܿ��ܳ�������
	{
		return a/b;
	}
}

class  ExceptionDemo //throws Exception
{
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
//		Demo d = new Demo();
//		int x = d.div(3, 0);
//		System.out.println("x="+x);
//		System.out.println("done");

//		byte[] arr = new byte[1024*1024*400]; // �ڴ����

		Demo d = new Demo();
		try
		{
//			int x = d.div(3, 0);
//			System.out.println("x="+x);
		}
		catch(ArithmeticException e)
		{
			System.out.println(e.toString());
			System.out.println("��������Ϊ��");
		}
		
		catch(ArrayIndexOutOfBoundsException e)
		{
			System.out.println(e.toString());
			System.out.println("�Ǳ�Խ����");
		}



//		catch (Exception e) // Exception e = new AirthmeticException();
//		{
//			System.out.println("��������Ϊ��");
//			System.out.println(e.getMessage());
//			System.out.println(e.toString());
//			e.printStackTrace();  // Ĭ�ϵ��쳣������ƾ����ڵ���
//								//printStackTrace��������ӡ�쳣�ڶ�ջ�е��쳣��Ϣ
//			
//		}
//		finally
//		{
//			System.out.println("done");
//		}


//		Demo d = new Demo();
		int x = d.div(3, 0);
		System.out.println("x="+x);
		System.out.println("done");
	}
}
