interface Inter
{
	void method();
}

class Test
{
	/*
	static class Inner implements Inter
	{
		public void method()
		{
			System.out.println("method run");
		}
	}
	*/
	static Inter function()
	{
		return new Inter()
		{
			public void method()
			{
				System.out.println("method run");
			}
		};
	}
}

class InnerClassTest 
{
	public static void main(String[] args) 
	{
		// Test.function() : Test������һ����̬����function
		// .method() : function����������������һ�����󣬶�����һ��Inter���Ͷ���
		// ��Ϊֻ��Inter���͵Ķ���ſ��Ե���method����
			
		Test.function().method();

		// Inter in = Test.function();
		// in.method();

		show(new Inter()
		{
			public void method()
			{
				System.out.println("method show run");
			}
		});
	}

	public static void show(Inter in)
	{
		in.method();
	}
}

class InnerTest
{
	
	public static void main(String[] args) 
	{
		new Object() // ����ʹ������������÷�������ΪObject��û��function()����
		{
			public void function()
			{
				
			}
		}.function();
	}
}