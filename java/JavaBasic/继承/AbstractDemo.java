// ��������г��ֹ�����ͬ���ܣ����ǹ������ⲻͬ��
// ���ǿ��Խ������ϳ�ȡ�ģ����ǣ�ֻ�ܳ�ȡ���ܶ��壬������ȡ�������塣
// ���󣺿�����
// �ص㣺���󷽷������ڳ�������
// ���󷽷��ͳ�������뱻abstract�ؼ�������
// �����಻����new������Ϊ���ó��󷽷�û������
// �������еĳ��󷽷�Ҫ�����ã����������ิд�����з����󣬽������������á�
// �������ֻ�����˲��ֳ��󷽷�����ô�����໹��һ��������
// ���������ͨ��û��̫��ͬ��ֻ��Ҫע�������������������������������
// ���ж���Щ�������������Щ��ȷ���Ĳ���Ҳ������Ĺ�����Ҫ��ȷ�����������޷�
// �������塣ͨ�����󷽷�����ʾ
// ���������ͨ����˳����������������п��Զ�����󷽷���
// �����಻��ʵ����
// �������п��Բ�������󷽷����������ǲ��ø��ཨ������
abstract class Student
{
	abstract void study();// ���󷽷�ֻ�ܷ��ڳ�������
	//abstract void study1();
	void sleep() // �������п��Զ�����ͨ����
	{
		System.out.println("ſ��˯��");
	}
}

class ChongciStudent extends Student
{
	void study()
	{
		System.out.println("chongci study");
	}
}	

class BaseStudent extends Student
{
	void study()
	{
		System.out.println("base study");
	}

	//void study(){}
}

class AdvanceStud extends Student
{
	void study()
	{
		System.out.println("advance study");
	}

}
class AbstractDemo 
{
	public static void main(String[] args) 
	{
		//new Student(); // �����಻��ʵ����
		new BaseStudent().study();
	}
}
