/*
		Copyright:	2012 ByCN
		File Name:	creat_linkedlist.c
	  Description:	����һ����ѭ���������������ڵ���룬�ڵ���Ŀͳ��
	       Author:	CN 
		  Version:	1.0
			 Date:	2012-08-01
		  History:	none	

*/
#include "func.c"

/*��������*/
NODE *creat_list(void);
void traverse_linkedlist(NODE *p_root);
int sll_insert(NODE **linkp, int value);
int sll_count_nodes(NODE *p_first);
int sll_remove(NODE **linkp, NODE *p_del, int *del_val);

int 
main(void)
{
	NODE *p_root = NULL;
	int del_val;

	p_root = creat_list(); /*����һ����ѭ�����������ظ�ָ��*/
	traverse_linkedlist(p_root);	/*��������*/
	
	/*�����½��*/
	if (0 == sll_insert(&p_root, 19))
	{
		printf("����ڵ�ʧ�ܣ������ԣ�");
	}

	printf("����������");
	traverse_linkedlist(p_root);

	printf("���ڽڵ����Ϊ:%d\n", sll_count_nodes(p_root->link));
	
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

