# Makro n:target pro Latte šablony #

## Konfigurace ##

do config.neon je třeba přidat následující konfiguraci

```yaml
nette:
	latte:
		macros:
			- jinovak\Latte\Macros\Target\Target::install
```
