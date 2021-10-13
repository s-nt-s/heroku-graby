Otra posibilidad es usar graby en local para usarlo como un comando.

1. Descargar graby, ver [dwn.sh](dwn.sh)
2. Crear comando, ver [graby.php](graby.php)
3. Ejemplo de ejecución: `./graby.php https://THE_URL/`

**BONUS** Usar desde python

```python
#!/usr/bin/python3
import json
import sys
from subprocess import check_output, STDOUT

url = sys.argv[1]
js = check_output(['./graby.php', url], stderr=STDOUT).decode(sys.stdout.encoding)
js = json.loads(js)
js = json.dumps(js, indent=2, sort_keys=True)
print(js)
```

Fuentes: [github.com - j0k3r/graby](https://github.com/j0k3r/graby),
[php-download.com - j0k3r/graby](https://php-download.com/package/j0k3r/graby)

# Prerequisitos

```
$ sudo apt install php7.2-cli php-curl php-dom php7.2-mbstring
```
