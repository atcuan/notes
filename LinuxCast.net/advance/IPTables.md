Linux������ʵ���������ݿ��ƹ��ܵ��ں�ģ��netfilter  
netfilter���Զ��������ݽ��������������޸Ĳ���  
netfilter֧���������ݷ��෽ʽ��  
- Դ��Ŀ��IP��ַ  
- ʹ�ýӿ�  
- ʹ��Э�飨TCP��UDP��ICMP�ȣ�  
- �˿ں�  
- TCP����״̬  

netfilter�������
- chain������Ҳ�й��˵㣩��INPUT��FORWARD��OUTPUT��PREROUTING��POSTROUTING  
- �����ܣ���filter��nat��mangle  

�û�ͨ��iptables����������netfilterģ��  
iptablesͨ����������ݽ��з��ʿ���  
һ������ռ��һ��  
����˳������  
ÿ�����ݰ�������˳������ƥ�䣬�����ƥ��ģ�������ִ�иù���ָ���Ķ���������������  


�г�����iptables����  
`iptables -L`  

ɾ������iptables����  
`iptables -F`  

����һ��iptables����  
`iptables -I INPUT 3 -p tcp --dport 80 -s 192.168.1.0/24 -j DROP`  

ɾ��һ��iptables����  
`iptables -D INPUT 3`  
`iptables -D INPUT  -p tcp --dport 80 -s 192.168.1.0/24 -j DROP`  

����һ��NATαװ��  
`iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE`  
 
iptables���򱣴��������ļ���  
`/etc/sysconfig/iptables`  
 
����������Խ���ǰiptables���ñ��浽�����ļ��У�  
`service iptables save`  
