<a href="https://newfold.com/" target="_blank">
    <img src="https://newfold.com/content/experience-fragments/newfold/site-header/master/_jcr_content/root/header/logo.coreimg.svg/1621395071423/newfold-digital.svg" alt="Newfold Logo" title="Newfold Digital" align="right" 
height="42" />
</a>

# NewFold WordPress CLI

A zero-configuration scaffolding tool for WordPress projects.

## Installation

1. [Install WP-CLI](https://wp-cli.org/#installing)

2. Install this WP-CLI package:

```shell
wp package install bluehost/newfold-wp-cli
```

## Getting Started

From your project root, run the `init` command to set up a project-level configuration file.<br>
_*Technically, this step is optional. However, it helps to eliminate some prompts as you run make commands._

```shell
wp newfold init
```

Run the `make` command to scaffold a new template such as a plugin, theme, etc.

```shell
wp newfold make <name>
```

To get a list of available templates, run:

```shell
wp newfold template list
```

## Documentation

All commands are self-documented by the tool. Simply type an available command followed by the `--help` flag for more
details.

Get high-level documentation on available commands:

```shell
wp newfold --help 
```

Get documentation for a specific command:

```shell
wp newfold init --help
```

For more thorough documentation, reference
the [core WP scaffolding tool](https://github.com/wp-forge/wp-scaffolding-tool/blob/master/readme.md).
