/*
finally����飬һ��ִ�еĴ���
ͨ�����ڹر���Դ������ر����ݿ����ӡ�
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
