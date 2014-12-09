# FeedBug

An easy way to display your own or other's RSS feed on websites, based on [OctoberCMS](http://octobercms.com/).

### Available options

 * **Feed name** — The name of RSS feed, that may be used as the title for page output.
 * **URL of RSS feed** — Website address from where RSS feed will be taken. The full address until RSS feed.
 * **Notes in list** — The number of elements (notes) to display. 
 * **Blank feed message** — Message to display in case there are no elements. This property is used by default by the component in feed output. 

## Documentation

Small documentation, included the following sections:

 * [Quickstart guide](#quickstart-guide)
 * [Implementing front-end pages](#implementing-front-end-pages)
 * [Errors control](#errors-control)

### Quickstart guide

 * Go to System tab in OctoberCMS and install the plugin, using `mrmlnc.feedbug` code
 * After you install the new component, it will be displayed in OctoberCMS in **CMS → Components tab**. You have an opportunity to add it on particular website pages or add it to a model, so you will make this component appear on every pages that use this model. No matter what way you will choose - the instruction below will be the same.
 * Open pages or models, and add **feedbug** component.
 * Add a small code in any part of the *page / model*: `{% component 'feedReport' %}`. Make sure that you use the right pseudonym, if you didn't change it yet, it should be `'feedReport'`.
 * That's all. Now you have a working component feedReport on your pages. The component has no external dependency, so you have nothing to worry about.

### Implementing front-end pages

To set up the component display you may use model by default: `{% component 'feedReport' %}`.

If you want to customize the design: 

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

**Details:**

 * **feedReport** — Name of the component.
 * **feed** — Data collection, available to display
  * **feed.name** — name of the feed, that specifies after adding the component. 
  * **feed.items** — the contention of this feed with the addition of the component.
   * *items* → **item.title** — Contention of the <title> tag in RSS feed.
   * *items* → **item.description** — Contention of the <description> tag in RSS feed

You may use all functions of the template system [TWIG](http://twig.sensiolabs.org/doc/filters/index.html), for example, `|striptags` filter that deletes all SGML/XML tags from the text and replaces double (triple, etc) spaces to one. 

### Errors control

Don't worry - an error in RSS feed address, disconnection of the feed or unavailability of donor website will be detected and processed.

## License

MIT.

## Changelog

 * **0.1.0**
  * Beta version of feedbug
