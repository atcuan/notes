/*
�����ڲ��ࣺ
1.�����ڲ�����ʵ�����ڲ���ļ�д��ʽ��
2.���������ڲ����ǰ�᣺�ڲ������̳�һ�������ʵ�ֽӿڡ�
3.�����ڲ���ĸ�ʽ  new ������߽ӿ�(){�������������}
4.��ʵ�����ڲ������һ�������������
*
abstract class AbsDemo
{
	abstract void show();	
}
class Outer
{
	int x = 3;
	/*
	class Inner extends AbsDemo
	{
		void show()
		{
			System.out.println("method"+x);	
		}
	}	
	*/

	/* 
	public void function()
	{
//		new Inner().show();	
		new AbsDemo()
		{
			void show()
			{
				System.out.println("x="+x);		
			}
			
			void show2()
			{
				System.out.println("����������");		
			}
		}.show() //����������ͬʱ������������
	}
	 */
	 
	 public void function()
	{
		// AbsDemo ad = new Inner();
		//Inner in = new Inner();
		//in.show();
		//in.show2();
		
		AbsDemo ad = new AbsDemo()
		{
			void show()
			{
				System.out.println("x="+x);		
			}
			
			void show2()
			{
				System.out.println("����������");		
			}
		};
		ad.show();
		ad.show2(); //����ʹ�����෽��
	}
}

class InnerClassDemo3 
{
	public static void main(String[] args) 
	{
		new Outer().function();
	}
}


