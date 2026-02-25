# v1.0.8
## 02/25/2026

1. [](#improved)
   * Updated minimum Grav requirement to `>= 1.7.45` to use the latest Grav image filters in templates.
   * Added missing Spanish translations for theme tabs and social icon help text.
   * Minor CSS and template clean‑ups.

# v1.0.7
## 01/30/2024

1. [](#new)
    * Added option to choose Hero Image and gradient colors
2. [](#improved)
   * Links to demo page and HTML5Up in the README have been updated.
   * `header.class` changed to `header.layout` in features and features2 templates (maintaining backward compatibility)
   * Updated pagination button style
   * Updated translations
  
# v1.0.6
## 12/15/2023

1. [](#improved)
    * Event hook for loading custom styles and javascripts
    * Minor bug fixes in sidebar and taxonomy list templates
    * Setting page title, subtitle and featured image variables in twig templates
    * Updated traslations
2. [](#bugfix)
    * Fixed social icon defaults in telephasic.yaml (Issue [#13](https://github.com/pmoreno-rodriguez/grav-theme-telephasic/issues/13))
   
# v1.0.5
## 10/27/2023

1. [](#bugfix)
    * Prevent error when tag or category taxonomy is empty
2. [](#improved)
    * Updated to MIT License
    * Updated Readme
    * Updated SCSS files
    * Twig code redesigned in several templates
3. [](#new)
    * Added taxonomy filter in blog pages
    * Added custom css file
    * New metadata template
    * Added modular bueprint

# v1.0.4
## 03/17/2022

1. [](#bugfix)
    * Fixed `#footer-wrapper` in `main.scss` file
    * Fixed **archives.html.twig** to show taxonomy colors in badges
    * Fixed display of contact form as template **contact.html.twig** when choosing not to display contact form on home page. 
2. [](#improved)
    * Support to svg thumbnail images in search results
3. [](#new)
    * Added Read more button in featured posts (sidebar)
    
# v1.0.3
## 03/12/2022

1. [](#improved)
    * Added option to disable contact form at homepage
    * Rebuild footer section
    * Added some translations at languages.yaml

# v1.0.2
## 03/08/2022

1. [](#bugfix)
    * Fixed some translations
2. [](#new)
    * Added primary image and subtitle in modular pages
    * Added primary image, subtitle and page content to **promo** modular template
    * Added link target option to promo template
    * Added `featuredposts_category` to **blueprints.yaml** for choose the featured posts name
    * Added background and foreground color for taxonomy badges
    * Added `readmore_text` blueprint to choose the button text for posts in blog list templates
3. [](#improved)
    * Deleted unused `url_taxonomy_filters` blueprint from **blog.yaml**

# v1.0.1
## 02/04/2022

1. [](#new)
    * Added toogle button to activate social icons in footer
2. [](#improved)
    * Modified languages.yaml
    * Improved footer section with possibility to show contact form in halves or full width.

# v1.0.0
## 12/28/2021

Initial Commit

1. [](#new)
    * HTML5 and CSS3
    * Fully Responsive
    * Various templates for presenting your content
    * Blog template
    * Featured content in sidebar
    * Styling for all basic page elements
    * Styling for various modules
    * Cross browser compatible
    * Avatar option for blog items
    * Lazy loading for images in twig templates
    * CSS Styles added over the original theme. 
