ACL��Access Control List�����ʿ����б���һ��Linux�µĸ߼�Ȩ�޻��ƣ���ʵ�ֶ��ļ����ļ��е����Ȩ�޿���  

��һ���ļ�ϵͳ��ʹ��ACL��Ҫ�ڹ����ļ�ϵͳ��ʱ���ACL����  
`mount -o acl  /dev/sdb1 /mnt`  
**������Ĭ�Ϲ��ص�ʱ��֧��acl**  

�鿴һ���ļ���ACL���ã�  
`getfacl file`  

Ϊһ���ļ�����ָ���û���Ȩ�ޣ�  
`setfacl -m u:linuxcast:rwx   filename`  

Ϊһ���ļ�����ָ�����Ȩ�ޣ�  
`setfacl -m g:linuxcats:r-x  filename`  

ɾ��һ��ACL���ã�  
`setfacl -x u:linuxcast filename`  
