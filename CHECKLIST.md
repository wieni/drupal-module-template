## Checklist
Go through this checklist after creating your repository. It should be finished and this file should be deleted before
the first release.

### Code
- [ ] Fix the code to follow the coding standards defined in this repository

### README
- [ ] Rename all instances of `[name]` to match the module name (eg. _Foo Bar_)
- [ ] Rename all instances of `[short-name]` to match the short module name (eg. _foo_bar_)
- [ ] Rename `[description]` to match the module description. You should mention the fact that this is a Drupal 8/9 
  module.
- [ ] Replace all TODO's in the rest of the README. More information about the different sections can be found
  [here](https://github.com/wieni/wmcodestyle/blob/main/standards/DRUPAL_MODULES.md#read-me).

### GitHub Metadata
- [ ] Have you added a short description to the repository? It should be the same as the one in README.
- [ ] Have you added topics to the GitHub repository: `drupal-module`, `drupal-8`, `drupal-9` + module-specific tags.
- [ ] Have you excluded _Releases_, _Packages_ & _Environments_ from the homepage?

### `composer.json`
- [ ] Rename `[short-name]` to match the short module name (eg. _foo_bar_)
- [ ] Rename `[description]` to match the description. It should be the same as the one in README.
- [ ] Make sure all Composer dependencies are added to `require`

### `[short-name].info.yml`
- [ ] Rename `[name]` to match the module name (eg. _Foo Bar_)
- [ ] Rename `[description]` to match the description. Here, you can leave out that this is a Drupal 8/9 module.
- [ ] Make sure all Drupal module dependencies are defined in `dependencies`

### First release
- [ ] Add the first release to the changelog, the release notes can be something like _Initial release_
- [ ] Tag the first release with [Semantic Versioning](https://semver.org) in mind
- [ ] Submit the package on [Packagist](https://packagist.org/packages/submit)
