class selectSort 
{
	//select sort
	public static void selectSort(int[] arr)
	{
		for(int i=0; i<arr.length-1; i++)
		{
			for(int j=i+1; j<arr.length; j++)
			{
				if(arr[i] > arr[j])
				{
					int temp = arr[i];
					arr[i] = arr[j];
					arr[j] = temp;
				}
			}
		}
	}

	//print array function
	public static void printArray(int[] arr)
	{
		System.out.print("[");
		for(int i=0; i<arr.length; i++)
		{
			if(i != arr.length-1)
				System.out.print(arr[i]+",");
			else
				System.out.print(arr[i]);
		}
		System.out.println("]");
	}

	public static void main(String[] args) 
	{
		int arr[] = {1,3,4,2,8,3,6,4,8,9};
		//����ǰ��ӡ
		printArray(arr);
		selectSort(arr);
		//������ӡ
		printArray(arr);
	}
}
