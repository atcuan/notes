SELinux��Secure Enhanced Linux����ȫ��ǿ��Linux��NSA��Լ������������������һ��ȫ�µ�Linux��ȫ����  
SELinux��һ���ں˼���ȫ���ƣ��ں�2.6֮�󼯳���Linux�ں���  
CentOS/RHELĬ�Ͽ���SELinux   

SELinux�����������������  
�� �Խ��̽�������  
�����ģ� ���ļ���������  

���¿���ʾ�ļ���SELinux��������Ϣ��  
`ls -Z`  

���¿���ʾ���̵�SELinux����Ϣ��  
`ps -Z`  
 
SELinuxͨ�����Թ涨��Щ����Է�����Щ�����ģ���Щ���̿��Է�����Щ�ļ���  
SELinux�кܶ�Ԥ�ò��ԣ�����ͨ������Ҫ�Զ�����ԣ�������Ҫ���Զ�����򡢷������SELinux����  
 
����restorecon���������ָ�һ���ļ���Ĭ��SELinux�����ģ�  
`restorecon -R /var/www`  
 
����chcon���������޸�һ���ļ���SELinux�����ģ�  
`chcon --reference=/etc/named.conf.orig  /etc/named.conf`  
 
CentOS/RHELĬ��ʹ��Ŀ�����
SELinux�����ֹ���ģʽ��  
- enforcing    ǿ��ģʽ���κ�Υ�����Ե���Ϊ���ᱻ��ֹ�����Ҳ���������Ϣ  
- permissive  ����ģʽ��Υ�����Ե���Ϊ���ᱻ��ֹ��ֻ����������Ϣ  
- disabled     �ر�SELinux  
 
SELinuxģʽ����ͨ���޸������ļ���/etc/sysconfig/selinux�����޸�  
����getenforce���Բ鿴��ǰSELinux����ģʽ  
����setenforce�����޸ĵ�ǰSELinux����ģʽ  
