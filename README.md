# FeedBug

Простой способ отобразить свою или чужую RSS ленту на страницах сайта построенного на основе [OctoberCMS](#link).

### Available options

 * **Название ленты** — Название RSS ленты, которое можно использовать как заголовок на странице вывода.
 * **URL RSS ленты** — Адрес сайта, с которого необходимо взять RSS ленту. Полный адрес до RSS ленты.
 * **Записей в списке** — Количество элементов (записей) в ленте, которые необходимо вывести.
 * **Сообщение пустой ленты** — Сообщение, отображаемое в списке ленты в случае, если нет элементов. Это свойство используется по умолчанию компонентом при выводе ленты.

# Documentation

Небольшая документация, включающая в себя следующие разделы:

 * [Quickstart guide](#quickstart-guide)
 * [Implementing front-end pages](#implementing-front-end-pages)

### Quickstart guide

 * Перейдите на вкладу **System** в OctoberCMS и установите плагин, используя код `mrmlnc.feedbug`.
 * После завершения установки нового компонента, он будет отображаться в OctoberCMS на вкладке **CMS → Components**. У вас есть возможность добавить его на определённые страницы сайта, или добавить его в макет, тем самым заставив компонент появляться на всех страницах, которые используют этот макет. Какой бы вы не выбрали путь, инструкция ниже будет одинаковой.
 * Откройте *страницы* или *макеты*, и добавьте компонент **feedbug**.
 * Добавьте небольшой код в любом месте *страницы / макета*: `{% component 'feedReport' %}`. Убедитесь, что используется правильный псевдоним, если вы его ещё не изменили, то это должно быть `'feedReport'`.
 * Это всё. Теперь у вас есть рабочий компонент `feedReport` на ваших страницах. Компонент не имеет никаких внешних зависимостей, поэтому вам не придется беспокоиться ни о чем другом.

### Implementing front-end pages

Для настройки отображения компонента можно использовать шаблон по умолчанию: `{% component 'feedReport' %}`.

Если вы хотите настроить дизайн компонента под себя:

````
{% if feedReport.feed.items %}
  <h1>{{ feedReport.feed.name }}</h1>
  <ul>
    {% for item in feedReport.feed.items %}
    <li>
      <a href="{{ item.link }}">{{ item.title }}</a>
    </li>
    <li>{{ item.description|striptags }}</li>
    <hr>
    {% endfor %}
  </ul>
{% endif %}
````

**Подробнее:**

 * **feedReport** — Название компонента.
 * **feed** — Коллекция данных, доступных для вывода
  * **feed.name** — Имя ленты, которые задаётся при добавлении компонента.
  * **feed.items** — Содержимое указанной ленты при добавлении компонента.
  * items → **item.title** — Содержимое тега `<title>` в RSS ленте.
  * items → **item.description** — Содержимое тега `<description>` в RSS ленте.

Можно использовать все функции шаблонизатора [TWIG](http://twig.sensiolabs.org/doc/filters/index.html), например, тут используется фильт `|striptags`, который убирает все SGML/XML теги из текста и заменяет двойные (тройные и т.д.) пробелы на один.

# License

MIT.

# Changelog

 * **0.1.0**
  * Beta version of feedbug
