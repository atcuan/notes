/*
�ӿڣ�������⣬������Ϊ��һ������ĳ����࣬���������еķ������ǳ���ģ�
	  ��ô�������ͨ���ӿڵķ�ʽ����ʾ
class���ڶ�����
interface���ڶ���ӿ�

�ӿڶ���ʱ����ʽ�ص㣺
	1���ӿ��г������壺���������󷽷�
	2���ӿ����еĳ�Ա���й̶������η�
		������public static final
		������public abstract void
	�ӿ��еĳ�Ա����public�ġ�

�ӿ��ǲ����Դ�������ģ���Ϊ�г��󷽷�����Ҫ������ʵ��
����Խӿ��еĳ��󷽷�ȫ�����Ǻ�����ſ���ʵ����������������һ�������� 

�ӿڿ��Ա����ʵ�֣�Ҳ�Ƕ�̳в�֧�ֵ�ת����ʽ��java֧�ֶ�ʵ�֡�
*/
interface Inter
{
	public static final int NUM = 3; // �ȼ��� int NUM = 3;
	public abstract void show();     // �ȼ��� void show();
}

interface InterA
{
	public abstract void method();
}

class Demo
{
	public void function(){}
}

class SubInter extends Demo  implements Inter, InterA
{
	public void show()
	{
		System.out.println("�ӿ�����");
	}

	public void method(){}
}

interface A
{
	void methodA();
}

interface B //extends A
{
	void methodB();
}

interface C extends B, A
{
	void methodC();
}

class D implements C
{
	public void methodA(){};
	public void methodB(){};
	public void methodC(){};
}
interface E extends A,B
{
	
}
class InterfaceDemo 
{
	public static void main(String[] args) 
	{
		SubInter si = new SubInter();
		si.show();
		System.out.println(si.NUM);
	}
}
