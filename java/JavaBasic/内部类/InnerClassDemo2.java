/*
�ڲ��ඨ���ھֲ�ʱ��
1.�����Ա���Ա���η�����
2.����ֱ�ӷ����ⲿ���еĳ�Ա����Ϊ�������ⲿ���е����á�
  ���ǲ����Է��������ڵľֲ��еı�����ֻ�ܷ���final���εľֲ�������
*/

class Outer 
{
	int x = 3;
	void method(final int a)
	{
		class Inner
		{
			void function()
			{
				System.out.println(Outer.this.x);	
			}		
		}
		new Inner().function();		
	} 	
}

class InnerClassDemo2
{
	public static void main(String[] args) 
	{
//		new Outer().method(7);	
//		new Outer().method(8);	
		
		Outer out = new Outer();
		out.method(5);
		out.method(6);
	}
}