# Bald Parent

<img src="https://raw.githubusercontent.com/MattOndo/bald-parent/main/screenshot.png" width="400px" alt="Bald Parent">

The Bald Parent theme is purpose-built for Headless WordPress. It is intended to be used in conjunction with a separate front-end application and does not contain any front-end assets. 

This theme is intended to be used along with the [Bald Child](https://github.com/MattOndo/Bald-Child) theme to add custom styles & functionality to the WordPress CMS.

This super-minimal theme includes a couple core features:

- Does not output any content
- Disable Gutenberg Editor 
  - Options to disable on the homepage, posts page, or any by any defined template. 
  - Found in the Theme Options, helpful when using custom fields for managing content (i.e. ACF or Carbon Fields)
- Uses [Carbon Fields](https://carbonfields.net/) for Theme Options

## Installation

### Download ZIP

1. Download the [latest release](https://github.com/MattOndo/bald-parent/releases/latest/download/bald-parent.zip)
2. Login to WordPress and navigate to Appearance > Themes
3. Click "Add New" and then "Upload Theme"
4. Upload the `bald-parent.zip` file
5. Click Activate to activate the Bald Parent theme

### WP CLI

`wp theme install https://github.com/MattOndo/bald-parent/releases/latest/download/bald-parent.zip --activate`

## Useful Links

- [Download Theme](https://github.com/MattOndo/bald-parent/releases)
- [GitHub Repository](https://github.com/MattOndo/bald-parent)
- [Bald Child](https://github.com/MattOndo/Bald-Child)
- [Matt Ondo](https://mattondo.io/)

## Developers

`Bald Parent` requires the following dependencies. They are pre-installed and ready to go in the installable ZIP file.

- [Composer](https://getcomposer.org/)

Clone or download this repository.

```
$ git clone git@github.com:MattOndo/Bald-Child.git
```

Install the necessary dependencies:

```
$ cd Bald-Child
$ composer install
```
