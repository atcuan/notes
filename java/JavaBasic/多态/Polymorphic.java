/*
��̬(polymorphic)��������ڵĶ���������̬

�ˣ����ˣ�Ů��
���è��������������

è x = new è();
���� x = new è();

1. ��̬�Ļ�������
	��������ָ�����Լ����������
	��������ÿ��Խ����Լ����������
2. ��̬��ǰ;
	������֮���й�ϵ��Ҫô�̳У�Ҫôʵ��
3. ��̬�ĺô�
	����˳������չ��
	���ڸ���
	�׶ˣ��������չ�ԣ�����ֻ�����ø�������÷��ʸ���ĳ�Ա
4. ��̬��Ӧ��

5. ��̬�ĳ��ִ�����ص㣨ע�����


*/

/*
���
è����


*/
abstract class Animal
{
	abstract void eat();
}

class Cat extends Animal
{
	public void eat()
	{
		System.out.println("����");
	}

	public void catchMouse()
	{
		System.out.println("ץ����");
	}
}

class Dog extends Animal
{
	public void eat()
	{
		System.out.println("�Թ�ͷ");
	}

	public void kanJia()
	{
		System.out.println("����");
	}
}

class Pig extends Animal
{
	public void eat()
	{
		System.out.println("������");
	}

	public void gongDi()
	{
		System.out.println("����");
	}
}

class  Polymorphic
{                           
	public static void main(String[] args) 
	{
		//System.out.println("Hello World!");
		//Cat c = new Cat();
		//c.eat();

		//Dog d = new Dog();
		//d.eat();

		//Cat c = new Cat();
		/*
		Cat c1  = new Cat();
		function(c1);
		function(new Dog());
		function(new Pig());
		*/

		//Animal c = new Cat(); // Cat c = new Cat();
		//c.eat();

		//function(new Cat()); 

		Animal a = new Cat(); // ��������������ת�͡�
		a.eat();

		// �����Ҫ����è�����з���ʱ����β�����
		//ǿ�ƽ����������ת������������
		Cat c = (Cat)a;
		c.catchMouse();

		//ǧ��Ҫ���������Ĳ��������������ת������������
		//��ת�����Ǹ�������ָ�����Լ����������ʱ�������ÿ��Ա�������Ҳ���Ա�ת��
		//������ʼ���ն��������ڱ仯
		//Animal a = new Animal();
		//Cat c = (Cat)a;

		function(new Dog());
		function(new Cat());
	}
	/*
	public static void function(Cat c)
	{
		c.eat();
	}

	public static void function(Dog d)
	{
		d.eat();
	}

	public static void function(Pig p)
	{
		p.eat();
	}
	*/

	 //��������function���Եȼ����������

	public static void function(Animal a)
	{
		a.eat();
		if (a instanceof Cat)
		{
			Cat c = (Cat)a;
			c.catchMouse();
		}
		if (a instanceof Dog)
		{
			Dog d = (Dog)a;
			d.kanJia();
		}
	}
}




