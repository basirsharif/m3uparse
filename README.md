# Parser Playlists

## Installation PHP Packgist

`composer require zikwall/m3uparse`

#### Develop mode

```json
{
	"minimum-stability": "dev",
	"require": {
		"zikwall/m3uparse": "dev-master"
	}
}
```

## Installation Go Library

`go get github.com/zikwall/m3uparse`

### Minimal Description

- /channels - Тут находятся списки каналов, которые нужно добавить
    1. normilize.json - главный файл, для формирования плейлиста
- /epgs - Тут находятся EPG 
- /plists
    1. /uploads - Тут находятся загруженные плейлисты
