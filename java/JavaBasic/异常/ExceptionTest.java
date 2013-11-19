/*
	��ʦ�õ����Ͽ�
	
��ʼ˼�����Ͽ��г��ֵ�����
���������ǣ�
	��������
	������
�����������������װ�ɶ���
�������𻵺󣬻�����޷������쳣��
�ͳ����˽�ʦ�����⣬��ʱ�ƻ��޷���ɡ�
*/
class blueScreenException extends Exception
{
	blueScreenException(String message)
	{
		super(message);
	}
}

class comptBreakException extends Exception
{
	comptBreakException(String message)
	{
		super(message);
	}
}

class NoPlanException extends Exception
{
	NoPlanException(String msg)
	{
		super(msg);
	}
}

class Computer
{
	private int state = 3;
	public void run() throws blueScreenException, comptBreakException
	{
		if (2 == state)
		{
			throw new blueScreenException("������");
		}
		if (3 == state)
		{
			throw new comptBreakException("��������");
		}
		System.out.println("run...");	
	}
	
	public void reset()
	{
		state = 1;
		System.out.println("reset...");
	}
}
class Teacher
{
	private String name;
	private Computer cmpt;
	
	Teacher(String name)
	{
		this.name = name;
		cmpt = new Computer();
	}
	
	public void prelect() throws NoPlanException
	{
		try
		{
			cmpt.run();
			
		}
		catch (blueScreenException e)
		{
			cmpt.reset();
		}
		catch (comptBreakException e)
		{
			test();
			throw new NoPlanException("��ʱ�޷�������"+e.getMessage());
		}
		System.out.println("����");
	}
	
	public void test()
	{
		System.out.println("����ϰ");
	}
}

class  ExceptionTest
{
	public static void main(String[] args) 
	{
		Teacher t = new Teacher("zhangsan");
		try
		{
			t.prelect();
		}
		catch (NoPlanException e)
		{
			System.out.println(e.toString());
			System.out.println("����ʦ���Σ����߻����Ի��߷ż�");
		}
	}
}
