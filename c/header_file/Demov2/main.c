#include "include/linkedlist.h"

int 
main(void)
{
	NODE *p_root = NULL;
	int del_val;

	p_root = creat_list(); /*����һ����ѭ�����������ظ�ָ��*/
	traverse_linkedlist(p_root);	/*��������*/
	
	/*��С��������*/
	printf("������ֵ��\n");
	sll_sel_sort(p_root);
	traverse_linkedlist(p_root);

	/*�����½��*/
	if (0 == sll_insert(&p_root, 19))
	{
		printf("����ڵ�ʧ�ܣ������ԣ�");
	}

	printf("����������");
	traverse_linkedlist(p_root);

	printf("���ڽڵ����Ϊ:%d\n", sll_count_nodes(p_root));
	
	/*ɾ���ڵ�*/
	if (sll_remove(&p_root, p_root->link->link, &del_val))
	{
		printf("ɾ���ڵ�ɹ�����ɾ���Ľڵ��ֵΪ��%d\n", del_val);
	}
	
	printf("ɾ���������Ϊ��\n");
	traverse_linkedlist(p_root);

	free(p_root);
	return 0;
}