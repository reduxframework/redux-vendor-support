## Redux Vendor Support

This plugin (or extension) will remove the need of a CDN for the Select2 and ACE Editor JavaScript and CSS files.

### Installation As a Plugin
Simply take this entire repo and load it as an extension. The CDN files will now be served locally.

### Installation As an Extension
Take the ~/vendor_support folder and load it as an extension for your version of Redux.

```
Redux::setExtensions( 'OPT_NAME', 'PATH_TO_vendor_support'  );
```

Also set `use_cdn => false` in your config.