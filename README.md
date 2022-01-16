# Docs for Health WordPress Theme

[![Build Status](https://app.travis-ci.com/docsforhealth/dfh-wordpress-theme.svg)](https://app.travis-ci.com/docsforhealth/dfh-wordpress-theme)

## Commands

- Initial installation
    + [Set up the base styles submodule](https://git-scm.com/book/en/v2/Git-Tools-Submodules) mounted at `src/scss/base` with `git submodule update --init --recursive` 
    + Install `package.json` dependencies with `yarn install`
- During development: `yarn start`

## Key files

| File | Description |
| ---- | ----------- |
| `style.css` | Contains theme header, this file is not version-controlled because it is a built asset not a source file |
| `style.scss` | The SCSS source file version of the main `style.css` source file required for all WordPress themes. Any changes (such as incrementing version) should be made this file and **not** to `style.css` |
| `alm_templates/default.php` | Expected by the Ajax Load More plugin, this is the PHP file that is called for each item loaded via an AJAX request. Partial templates called by this file are located at `alm_templates/templates/` |
| `functions.php` | Defines theme-specific constants and loads additional PHP classes that specify theme-specific customizations. Most PHP constants used in the theme are specified in the `docsforhealth.php` file in the corresponding DFH plugin |

## Deploying

1. Update the `Version` field in the masthead of `style.scss` to your desired release version. **Be very careful to update the SCSS file *not* the CSS file.** Once more, **check that you have updated the SCSS file *not* the CSS file**. The CSS file is not version controlled!
2. For completeness, also update the `version` field in `package.json` to the same version you entered in the prior step
3. Commit changes with `git commit -am <message here>`
4. Create [an annotated tag](https://git-scm.com/book/en/v2/Git-Basics-Tagging) to mark the release with `git tag -a <tag version> -m <release message>`. Note that we use [annotated tags instead of lightweight tags](https://stackoverflow.com/a/25996877) as these are intended for release. 
5. Push new commit to remote origin with `git push`
6. Push new tag to remote origin with `git push --tags`. Travis CI will detect the new tag and launch into the build and release process as specified in `.travis.yml`

### Tips

- Changes to deployment configuration in `.travis.yml` can be [validated using online checker](https://config.travis-ci.com/explore)
- If deployment fails because authorization fails, may [need to regenerate personal access token](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token) and update the Travis CI environment variables with this new value. Note that deployments are authenticated using the dedicated deployment account `@ericbaibot` 
