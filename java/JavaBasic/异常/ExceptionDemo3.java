/*
Exception����һ������������쳣������RuntimeException
����ں����ڲ��׳����쳣�������Ͽ��Բ�������������һ��ͨ����
����ں����������˸��Ų��������߿��Բ��ý��д�������һ��ͨ����

�����ٺ���������������Ϊ����Ҫ�����ߴ���
���������쳣��ϣ������ֹͣ���������޷���������������ϣ��ֹͣ�����
�Դ����������

�Զ����쳣ʱ��������쳣�ķ������޷��ټ����������㣬�����Զ����쳣�̳�RuntimeException��

�����쳣�����֣�
1������ʱ�������쳣��
2������ʱ���������쳣(����ʱ�쳣��RuntimeException�Լ�������)
*/

class FuShuException extends RuntimeException
{
	FuShuException(String msg)
	{
		super(msg);
	}
}
class Demo
{
	int div(int a, int b) //throws ArithmeticException
	{
		if (0 == b)
		{		
			throw new ArithmeticException("���������");
		}
		if (b < 0 )
		{
			throw new ArithmeticException("����Ϊ�����ˣ�");

		}
		return a/b;
	}
}	

class  ExceptionDemo3
{
	public static void main(String[] args) 
	{
		Demo d = new Demo();
		
		int x = d.div(3,-9);
		System.out.println("x="+x);
		System.out.println("Done!");
		
	}
}
/*
class Person
{
	public void checkName(String name)
	{
		//if (name.equals("lisi")) // NullPointerException
		if ("lisi".equals(name)) // if (name != null && name.equals("lisi"))
		{
			System.out.println("�û�����ȷ");
		}
		else
		{
			System.out.println("�û�������ȷ");

		}
	}
}

main()
{
	Person p = new Person();
	p.checkName(null);
}
*/