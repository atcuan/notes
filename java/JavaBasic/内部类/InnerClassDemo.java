/*
	�ڲ�����ʹ���
	1.�ڲ������ֱ�ӷ����ⲿ���г�Ա������˽�г�Ա
		֮���Կ���ֱ�ӷ����ⲿ���еĳ�Ա������Ϊ�ڲ����г�����һ���ⲿ���Ӧ�ã�
		��ʽ���ⲿ����.this
	2.�ⲿ��Ҫ�����ڲ��࣬���뽨���ڲ������
	
	���ʸ�ʽ��
	1.���ڲ��ඨ�����ⲿ��ĳ�Աλ���ϣ����ҷ�˽�У��������ⲿ�������С�
	����ֱ�ӽ����ڲ�����
	��ʽ���ⲿ����.�ڲ����� ������ = �ⲿ�����.�ڲ�����
	Outer.Inner in = new Outer().new Inner();
	2.���ڲ����ڳ�Աλ���ϣ��Ϳ��Ա���Ա���η������Ρ�
	���� private�����ڲ������ⲿ���н��з�װ��
	static���ⲿ��;߱�static�����ԡ�
	���ڲ��౻static���κ�ֻ��ֱ�ӷ����ⲿ���е�static��Ա�������˷��ʾ���
	
	���ⲿ�������У����ֱ�ӷ���static�ڲ���ķǾ�̬��Ա�أ�
	new Outer.Inner().function();
	���ⲿ�������У����ֱ�ӷ���static�ڲ���ľ�̬��Ա�أ�
	Outer.Inner().function();
	
	ע�⣺���ڲ����ж����˾�̬��Ա�����ڲ��������static�ġ�
	���ⲿ���еľ�̬���������ڲ���ʱ���ڲ���Ҳ������static�ġ�
	
	�ڲ��ඨ���ԭ��
	����������ʱ��������ڲ�����������������ڲ�����������
	��Ϊ�ڲ�������ʹ���ⲿ��������ݡ�
	
	
*/
class Outer
{
	private int x = 3;
	
//	static class Inner // ��̬�ڲ���
	class Inner 
	{
		int x = 4;
		void function()
		{
			int x = 6;
			System.out.println("inner:"+x);
			System.out.println("inner:"+this.x);
			System.out.println("inner:"+Outer.this.x);
		}
	}
	
	void method()
	{
		Inner in = new Inner();
		in.function();
	}
	
	void function()
		{
			System.out.println("inner:");
		}
}	
public class InnerClassDemo
{
	
	public static void main (String args[]) {
//		Outer out = new Outer();
//		out.method();

		// ֱ�ӷ����ڲ���ĳ�Ա
		Outer.Inner in = new Outer().new Inner();
		in.function();

	}
}

