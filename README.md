[![Latest Version](https://img.shields.io/github/release/riasvdv/statamic-button-box.svg?style=flat-square)](https://github.com/riasvdv/statamic-button-box/releases)

# Button Box

> Button Box for Statamic 2.

Create beautiful choices for your clients.

![Screenshot](./docs/img/button-box-screenshot.png)

## License

Button Box requires a license to be used while on a production site.  
You can purchase one at https://statamic.com/marketplace/addons/button-box.

You may use Button Box without a license while Statamic is in [Trial mode](https://docs.statamic.com/knowledge-base/trial-mode).

## Installation

Download the latest release and copy the `ButtonBox` folder to your `site/addons` folder.

## Using Button Box

Add the fieldtype to your fieldset. 

Each option contains the following fields:

- label - This is show when neither an icon or an image is present
- value - The value that you'll use in your templates
- image - The full url to your image
- icon - A [FontAwesome Free](https://fontawesome.com/icons?d=gallery&m=free) icon

```yaml
sections:
  main:
    display: Main
    fields:
      -
        handle: choice
        field:
          type: button_box
          display: Choice
          options:
            -
              label: Left
              value: left
              image: /assets/left.svg
              icon: null
            -
              label: Center
              value: center
              image: /assets/center.svg
              icon: null
            -
              label: Right
              value: right
              image: /assets/right.svg
              icon: null
```

## Using Button Box

```twig
{{ choice }} # will contain either "left", "center" or "right" from the example above
```

Brought to you by [Rias](https://rias.be)
