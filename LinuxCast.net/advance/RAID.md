�ִ����̵�ȱ�ݣ�IO���������ȶ��Բ�  

RAID��Redundant Array of Independent Disks��������������ͨ����������ͨ��RAID���Ʋ��й����ķ�ʽ����ߴ��̵����ܺ�������  

RAID���б�׼��  
- �ٶȣ���д�ٶȵ�����  
- ����ʹ���ʣ�����̵Ŀռ�ʹ����  
- �����ԣ� �ܹ�֧�ּ�������𻵶�����ʧ����  

RAID��Ϊ���֣��ü�������ʶ������RAID�����У�  
- RAID 0  ��߶�д����
- RAID 1  ��߶�ȡ�������ܼ�������  
- RAID 5  ��߶�д���ܼ�������  
- RAID 6  ��߶�д���ܼ�������  

���RAID��ͨ������ϵͳ���ܻ��ض������ʵ��RAID���ƣ���ռ��ϵͳ��Դ���ȶ����ղ���ϵͳӰ��    

Ӳ��RAID��ͨ��ר��RAID�豸ʵ��RAID���ƣ�Ӳ��RAID��Ϊ�������ȶ��ԡ��ٶȲ����ϲ�ϵͳӰ��  

Linuxϵͳ��ͨ��mdadm����ʵ�����RAID����  
mdadm֧�ֵ�RAID�����У�RAID0��RAID1��RAID4��RAID5��RAID6  
Linuxϵͳ��RAID��Ϣ������/proc/mdstat��  

ͨ��mdadm�����һ��RAID0��  
`mdadm -C /dev/md0 -a yes -l 0 -n 3 /dev/sdb /dev/sdc /dev/sdd`  
\-C  ����һ��RAID
\-a  �Զ�������Ӧ�豸�ļ�
\-l   ָ��RAID���??
\-n   ָ����������
\-x  ָ��һ�����ݴ���

������RAID֮����Ҫ����������Ϣ�� 
`mdadm -D --scan > /etc/mdadm.conf`  

�鿴RAID��Ϣ��  
`mdadm -D /dev/md0`  
`cat /proc/mdstat`  

�ر�һ��RAID  
`mdadm -S /dev/md0`  

ģ��һ�����̹��ϣ�  
`mdadm /dev/md0 -f /dev/sdb`  

��һ��RAID�Ƴ�һ�����̣�
`mdadm /dev/md0 -r /dev/sdb`  

��һ��RAID�����һ�����̣�
`mdadm /dev/md0 -a /dev/sdc`  

Ӳ��RAID��ͨ��ר��RAID�豸ʵ��RAID���ƣ�Ӳ��RAID��Ϊ�������ȶ��ԡ��ٶȲ����ϲ�ϵͳӰ��    
