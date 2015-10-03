# Accessible TwentyTwelve WordPress Child Theme
This is a fully accessible version of the twentytwelve WordPress theme. At least, that's the goal, so please report any issues. Nevertheless, as the parent theme is improved, hopefully this child theme will no longer be needed.

## Requirements
* TwentyTwelve Theme (version 1.5)
* WordPress 3.5 or higher recommended (the version TwentyTwelve was originally released with)

If the parent theme has been updated and it's causing problems, please let me know.

## Changes from the Original TwentyTwelve
Layout
* Header Image: Moved above menu, next to site title and tagline to work more like a logo.
* Footer: Added Footer options page to change the text in the footer. Default is the 'powered by WordPress' text.
* Margin: Decreased margin in various areas (around page, below menu, between widgets, end of content if type is page), making it more compact.

Accessiblility
* Changed some of the text and link colours to meet contrast guideline
* Added link text box in top right corner on focus of hidden links
* Added visible focus for input boxes
* Override auto-hyphenation to disable it
* Added skip to menu link at top of page

Note: With the release of WordPress 4.0, the problem with menu links not working when in "mobile" mode has been fixed in the parent theme.

## License Information
[GPL v3](https://www.gnu.org/licenses/gpl.html)

## Purpose and Rationale
While newer default themes are likely more accessible than the TwentyTwelve theme, those themes have a specific look and purpose in mind (e.g. for a blog, image heavy site like a portfolio). Twentytwelve is a great simple-looking theme for a website and having worked with it before, I knew that it met many accessible requirements already.

### Why a child theme?
While I would love to see the twentytwelve theme itself become more accessible, I had to get this theme made fairly quickly. I also made a few layout changes that is not consistent with the original theme. While it meant a lot of CSS overwrites, I still made changes to only a few files.
