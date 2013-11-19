
/*
 * ���󣺵�������ʵ��
 ��������ʱ���������
 * */

interface PCI //����˳�����չ��
{
	public void open();
	public void close();
}

class MainBoard
{
	public void run()
	{
		System.out.println("MainBoard run");
	}

	public void usePCI(PCI p)  // PCI p = new NetCard()�ӿ�����ָ���Լ����������
	{
		if (p != null)
		{
			p.open();
			p.close();
		}
	}
}	

class NetCard implements PCI
{
	public void open()
	{
		System.out.println("open netcard");
	}

	public void close()
	{
		System.out.println("close netcard");
	}
}	

class SoundCard implements PCI
{
	public void open()
	{
		System.out.println("open SoundCard");
	}

	public void close()
	{
		System.out.println("close SoundCard");
	}
}

/*
class MainBoard
{
	public void run()
	{
		System.out.println("MainBoard run");
	}

	public void useNetCard(NetCard nc)
	{
		nc.open();
	}
}

class NetCard
{
	public void open()
	{
		System.out.println("open netcard");
	}

	public void close()
	{
		System.out.println("close netcard");
	}
}	
*/
class DuoTaiDemo3
{
	public static void main(String[] args) 
	{
		MainBoard mb = new MainBoard();
		mb.run();
		//mb.useNetCard(new NetCard());
		mb.usePCI(null);
		mb.usePCI(new NetCard());
		mb.usePCI(new SoundCard());
	}
}
