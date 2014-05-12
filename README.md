ABCD
====

This is the development repo for ABCD Company


# LESS FILE STRUCTURE

The .less files of this repo are split into the following structure:

- /global
-- all.less

- /modules
-- all.less

- /partials
-- all.less

- /vendor
-- all.less

bootstrap.less

## Bootstrap.less

The bootstrap.less file in root pulls in each folder's all file which in turn pulls in all .less files within the folder.

## Global 

Each of these files are for code and patterns that affect the entire project. (An exception is layout.less) Patterns in here are made to be as re-usable as possible, so they can be utilized with ultimate flexibility. 

### Layout.less

This is a 'special' file because it lays out the grid for the entire project. This file only has the classes of Bootstrap that deal with scaffolding - .container, .row, and .make-grid. All other styling values such as  padding, color, margins, font-- all should be either pulled into their respective global files, or if specific - into modules.

## Modules

Once the base stylings have been pulled the project begins to pull the specific classes for each page.

Based on the mock for this project, files could include:

company-culture.less
meet-the-team.less
industries.less
etc

## Vendor 

In the case of a stylesheet that is part of another project that needs to be pulled in, the 'vendor' folder exists. It may
be preferable to leave these files as is, and overwrite as needed in the modules less files, so that a plugin or theme
can be upgraded without much hassle in the future.




