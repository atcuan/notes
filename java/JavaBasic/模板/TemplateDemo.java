/*
	���󣺻�ȡһ�γ������е�ʱ��
	ԭ����ȡ����ʼʱ��ͽ���ʱ��Ĳ�ֵ

	��ȡʱ�䣺System.currentTimeMillis()
	����������Ż���Ϳ��Խ����������

	���ַ�ʽ���� ģ�巽�����ģʽ

	ʲô��ģ�巽����
	�� ���幦��ʱ�����ܵ�һ������ȷ���ģ�������һ�����ǲ�ȷ����
	��ȷ���Ĳ�����ʹ�ò�ȷ���Ĳ��֣���ô���Ǿͽ���ȷ���Ĳ��ֱ�¶��ȥ��
	�ɸ��������ȥ��ɡ�


*/

abstract class GetTime
{
	public final void getTime()
	{
		long start = System.currentTimeMillis();
		runCode();
		long end = System.currentTimeMillis();
		System.out.println("������ʱ"+(end-start)+"����");
	}

	public abstract void runCode();
}

class SubTime extends GetTime
{
	public void runCode() // ��дrunCode����Բ��Բ�ͬ���������ʱ��
	{
		for (int x=0; x<3000; x++)
		{
			System.out.print(x);
		}
		System.out.println("\n");
	}
}

class TemplateDemo 
{
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
		//GetTime gt = new GetTime();
		//gt.getTime();

		SubTime st = new SubTime();
		st.getTime();
	}
}
