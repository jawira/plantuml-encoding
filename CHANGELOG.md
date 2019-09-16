# Changelog

All notable changes to this project will be documented in this file.

<!--
    Added       for new features.
    Changed     for changes in existing functionality.
    Deprecated  for soon-to-be removed features.
    Removed     for now removed features.
    Fixed       for any bug fixes.
    Security    in case of vulnerabilities.
-->

## Unreleased

## [v1.0.7] - 2019-09-16

### Changed

* [#9] Updating documentation

## [v1.0.6] - 2019-02-08

### Added

* pds/skeleton badge in [README.adoc]().
* [#8] waffle.io badge in [README.adoc]().
* PhpDoc comments for all PlantUml functions.
* [#7] [.gitattributes]() file to omit unnecessary files when downloading zip.
* Added _zlib extension_ constraint to [composer.json]().

## [v1.0.5] - 2018-03-26

### Changed

* Lowering PHP minimum version in composer.json

### Fixed

* Fixed double pipe range (||) for php version in composer.json

## [v1.0.4] - 2018-03-26

### Changed

* Changes PHP requirement to include more versions.
* An example script has been modified to show how to use full function's 
namespace. This is required for versions < PHP 5.6.
* Improving Readme file.

### Fixed

* Removing typo in `resources` dir.

## [v1.0.3] - 2018-02-21

### Changed

* Badges were added to Readme

## [v1.0.2] - 2018-02-20

### Changed

* Updated readme

### Fixed

* Changed license in `composer.json` for a SPDX compliant license
* Some dates in changelog were incorrect

### Removed 

* Deleted composer.lock and added to .gitignore

## [v1.0.1] - 2018-01-07

### Changed

* Updated readme

## [v1.0.0] - 2018-01-07

### Changed

* Internally, the `encodep` function encoded text to utf8, but this is not the case anymore.
  Now `encodep` function assumes that received text is already utf8 encoded.
* Updated readme

## [v0.1.0] - 2017-11-23

### Changed
* Enhanced readme file


## [v0.0.1] - 2017-11-23

### Fixed

* Fixed example

## [v0.0.0] - 2017-11-23

### Added

* Initial working version

[#8]: https://github.com/jawira/plantuml-encodin/pull/8
[v1.0.5]: https://github.com/jawira/plantuml-encodin/compare/v1.0.4...v1.0.5
[v1.0.4]: https://github.com/jawira/plantuml-encodin/compare/v1.0.3...v1.0.4
[v1.0.3]: https://github.com/jawira/plantuml-encodin/compare/v1.0.2...v1.0.3
[v1.0.2]: https://github.com/jawira/plantuml-encodin/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/jawira/plantuml-encodin/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/jawira/plantuml-encodin/compare/v0.1.0...v1.0.0
[v0.1.0]: https://github.com/jawira/plantuml-encodin/compare/v0.0.1...v0.1.0
[v0.0.1]: https://github.com/jawira/plantuml-encodin/compare/v0.0.0...v0.0.1
[#7]: https://github.com/jawira/plantuml-encodin/pull/7
[v1.0.6]: https://github.com/jawira/plantuml-encodin/compare/v1.0.5...v1.0.6
[#9]: https://github.com/jawira/plantuml-encodin/pull/9

[v1.0.7]: https://github.com/jawira/plantuml-encodin/compare/v1.0.6...v1.0.7