# Log of changes

The following is a log of changes for the Defferred Images module

## 1.0.0

Initial codebase release

## 1.0.1

Remove img template and move to seperate theme (so it is not used by the CMS)

## 1.0.2

Update requirements to stable theme version

## 1.0.3

Make required assets version more lenient

## 1.0.4

Attach image load to window.load event stack (rather than hijacking it)

## 1.0.5

* Wrap JS in contained function (for better compatability).
* Automatically require defered images when `silvercommerce/catalogue-frontend` is installed.
* Add Requirement call to `onBeforeInit` (instead of `onAfterInit`).
* Make the Requirement call inline

## 1.0.6

* Add support for other SS modules that don't extend Controller Controller

## 1.1.0

* Added heyday/responsive-images to requirements and added support for picture elements

## 1.2.0

* Switch to DFT
* Add SS5 support