1. ��һ�����̻��߷�����ʽ��Ϊ�����:`pvcreate /dev/sdb1`  
2. ���������ӵ�һ�������У�`vgcreate linuxcast-vg /dev/sdb1 /dev/sdb2`  
3. ���ھ��鴴��һ���߼���mylv��`lvcreate -L 10G -n mylv  linuxcast-vg`  
4. ��ʽ���߼���`mkfs.ext4 /dev/linuxcast-vg/mylv`  
5. ����ʹ�ã�`mount /dev/linuxcast-vg/mylv  /mnt`  

## �߼���鿴���   
- `pvdisplay`  
- `pvs`  
- `vgdisplay`  
- `vgs`  
- `lvdisplay`  
- `lvs`  

ɾ��һ���߼���  
`lvremove /dev/linuxcast-vg/mylv`  

ɾ��һ�����飺  
`vgremove linuxcast-vg`  

ɾ��һ�������  
`pvremove /dev/sda1`  


�߼������ʵ�ֶ�̬�������죬��չһ���߼���Ŀռ䲻��Ҫж���ļ�ϵͳ  

## ����һ���߼���Ĳ������£�    
1. ��֤���������㹻���пռ䣺`vgdisplay`  
2. ����ָ���߼���ռ䣺`lvextend -L +10G /dev/linuxcast-vg/mylv`  
3. �����ļ�ϵͳ��`resize2fs /dev/linuxcast-vg/mylv`  
4. �鿴���º���ļ�ϵͳ��`df -h`  

## ����һ�����飺  
1. ��Ҫ��ӵ������еĴ��̸�ʽ��Ϊ�����`pvcreate /dev/sdc`  
2. ��������ӵ�ָ�������У�`vgextend linuxcast-vg /dev/sdc`  
3. �鿴������С��`vgdisplay`  

�߼�����Զ�̬��С��������С��������ʹ�߼������ߣ�Ҳ����ж��.  
## ��Сһ���߼��������£�  
1. ж�ظ��߼���`umount /dev/lnuxcast-lv/mylv`  
2. ��С�ļ�ϵͳ��`resize2fs /dev/linuxcast-lv/mylv 10G`  
3. ��С�߼����С��`lvreduce -L -5G /dev/linuxcast-lv/mylv`  
4. �鿴��С���С��`lvdisplay`  
5. ����ʹ�ã�`mount /dev/linuxcast-lv/mylv /mnt`  

## ��Сһ�����飺  
1. ��һ�������Ƴ�һ�����飺`vgreduce linuxcast-lv /dev/sdc`  
2. �鿴��С������С��`vgdisplay`  
