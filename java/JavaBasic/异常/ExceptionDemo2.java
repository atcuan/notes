/*
��Ϊ��Ŀ�л�������е����⣬����Щ���Ⲣδ��java����������װ����
���Զ�����Щ���е�������԰���java�Ķ�������з�װ��˼�룬�����е�
��������Զ�����쳣��װ��

�Զ����쳣��
�����ڱ������У����ڳ����Ǹ���Ҳ��Ϊ�Ǵ���ġ�
���޷���������ģ���ô����Ҫ�������������Զ����������

���ں����ڲ�������throw�׳��쳣���֣��ͱ��������Ӧ�Ĵ�������
Ҫô���ڲ�̫try catch ����
Ҫô�ں����������õ����ߴ���

һ������º����ڳ����쳣����������Ҫ������

���ִ�ӡ�Ľ����ֻ���쳣�����ƣ�û���쳣����Ϣ��
��Ϊ�Զ�����쳣��δ������Ϣ��

��ζ����쳣��Ϣ�أ�
��Ϊ�������Ѿ����쳣��Ϣ�Ĳ���������ˡ�
����������Ҫ�ڹ����ǽ��쳣��Ϣ���ݸ�����ͨ��super���
�Ϳ���ֱ��ͨ��getMessage()��������ȡ�Զ�����쳣��Ϣ��

�Զ����쳣��
�������Զ�����̳�Exception��
ΪʲôҪ�̳�Exception?
�쳣��ϵ��һ���ص㣺��Ϊ�쳣����쳣������Ҫ���׳���
���Ƕ��߱����׳��ԣ�������׳�����Throwable�����ϵ�е�
�����ص㣬ֻ�������ϵ�е���Ͷ���ſ��Ա�throws��throw������

throws��throw������
1��throwsʹ���ں�����(��С����֮��)��throwʹ���ں����ڡ�
2��throws��������쳣�ࡣ���Ը�������ö��Ÿ�����throw����������쳣����


*/

class FuShuException extends Exception // getMessage()
{
/*
	private String msg;
	FuShuException (String msg)
	{
		this.msg = msg;
	}
	
	public String getMessage()
	{
		return msg;
	}
*/

	private int value;
	
	FuShuException (String msg, int value)
	{
		super(msg);
		this.value = value;
	}
	
	public int getValue()
	{
		return value;
	}
}

class Demo
{
	int div(int a, int b) throws FuShuException
	{
		if (b < 0)	
		{
			throw new FuShuException("�����˳����Ǹ��������", b); // �ֶ�ͨ��throw�ؼ����׳�һ���Զ����쳣����
		}
		return a/b;	
	}
}

class  ExceptionDemo2
{
	public static void main(String[] args) 
	{
		Demo d = new Demo();
		try
		{
			int x = d.div(3,-1);
			System.out.println("x="+x);
		}
		catch(FuShuException e)
		{
			System.out.println(e.toString());
//			System.out.println("��������Ϊ����");
			System.out.println("����ĸ�����"+e.getValue());

		}
		System.out.println("done!");
	}
}

 /*
class Throwable
{
	Throwable (String message)
	{
		this.message = message;
	}
	
	public String getMessage()
	{
		return message;
	}
}

class Exception extends Throwable
{
	Exception (String message)
	{
		super(message);
	}
}
*/