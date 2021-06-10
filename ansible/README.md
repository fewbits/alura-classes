# Ansible

```bash
# Aula 01
ansible -u vagrant --private-key .vagrant/machines/wordpress/virtualbox/private_key -i hosts.ini -m shell -a "echo" wordpress
```
