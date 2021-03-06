# Code Climate PHP Dead Code Detector

`codeclimate-phpdcd` is a Code Climate Engine that wraps the PHP DCD utility.

### Installation

1. If you haven't already, [install the Code Climate CLI](https://github.com/codeclimate/codeclimate).
2. Run `codeclimate engines:enable phpdcd`. This command both installs the engine and enables it in your `.codeclimate.yml` file.
3. You're ready to analyze! Browse into your project's folder and run `codeclimate analyze`.

### Config Options

- recursive - default false, Report code as dead if it is only called by dead code

### Sample Config

    engines:
      phpdcd:
        enabled: true
        recursive: false

    exclude_paths:
      - .git/
      - vendor/

### Need help?

For help with PHP DCD, [check out their repository](https://github.com/sebastianbergmann/phpdcd).
