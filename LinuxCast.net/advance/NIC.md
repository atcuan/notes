�鿴��������״̬��  
`mii-tool eth0`  

�鿴�����ײ���Ϣ��  
- `ethtool eth0`  
- `ethtool -i eth0`   �鿴����������Ϣ  
- `ethtool -S eth0`   �鿴����״̬ͳ����Ϣ  

Linux�¿���ͨ��IP�������ӽӿڣ�����Ϊһ������������Ӷ��IP��ַ  

Ҫʹ��IP�������ӽӿڣ���Ҫ�ر�NetworkManager����  
- `service NetworkManager stop`  
- `chkconfig NetworkManager off`  

ʹ��ip����Ϊһ���ӿ���ӱ�����  
`ip addr add 192.168.2.1/24 dev eth0 label eth0:0`  

������ӱ�������Ҫ��/etc/sysconfig/network-scripts/����������ļ���  

�ļ�����  
`ifcfg-eth0:0`  

���ݣ� 
``` 
DEVICE=eth0  
IPADDR=192.168.2.1  
PREFIX=24  
ONPARENT=yes  
``` 
Linux�¿���ͨ�����������������������ȶ��Լ��ٶȣ��������????ͨ�����������������Ϊһ���߼���������ʽ����  

Linux֧�ֵ�������ģʽ�� 
- ģʽ0   ƽ����ѵ��RR��  
- ģʽ1   ��������  
- ģʽ3   �㲥  
